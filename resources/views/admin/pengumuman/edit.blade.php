<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Edit Pengumuman</h1>
    </x-slot>
    <div class="p-6 space-y-5">
        @if(session('success'))
        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm">
            <svg class="w-5 h-5 flex-shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            {{ session('success') }}
        </div>
        @endif
        @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('admin.pengumuman.update', $pengumuman) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="xl:col-span-2 space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Konten Pengumuman</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Judul <span class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $pengumuman->title) }}" required placeholder="Judul pengumuman..." class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                            @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Isi Pengumuman <span class="text-red-500">*</span></label>
                            <textarea name="content" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Tulis isi pengumuman lengkap di sini...">{{ old('content', $pengumuman->content) }}</textarea>
                            @error('content')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Detail Kegiatan (Opsional)</h3>
                        <p class="text-xs text-gray-500 mb-2">Isi jika pengumuman berkaitan dengan sebuah acara atau kegiatan.</p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Tanggal Kegiatan</label>
                                <input type="date" name="event_date" value="{{ old('event_date', $pengumuman->event_date ? \Carbon\Carbon::parse($pengumuman->event_date)->format('Y-m-d') : '') }}" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                                @error('event_date')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Waktu (Jam)</label>
                                <input type="text" name="event_time" value="{{ old('event_time', $pengumuman->event_time) }}" placeholder="Contoh: 08:00 - Selesai" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                                @error('event_time')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Lokasi</label>
                                <input type="text" name="location" value="{{ old('location', $pengumuman->location) }}" placeholder="Contoh: Balai Desa" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                                @error('location')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1.5">Kontak</label>
                                <input type="text" name="contact" value="{{ old('contact', $pengumuman->contact) }}" placeholder="Contoh: Bpk. Budi (0812...)" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                                @error('contact')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Pengaturan</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Status Publikasi <span class="text-red-500">*</span></label>
                            <select name="status" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 bg-white">
                                <option value="draft" {{ old('status', $pengumuman->status) === 'draft' ? 'selected' : '' }}>○ Draft</option>
                                <option value="published" {{ old('status', $pengumuman->status) === 'published' ? 'selected' : '' }}>✓ Publish</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Status Kegiatan <span class="text-red-500">*</span></label>
                            <select name="activity_status" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 bg-white">
                                <option value="aktif" {{ old('activity_status', $pengumuman->activity_status) === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="mendatang" {{ old('activity_status', $pengumuman->activity_status) === 'mendatang' ? 'selected' : '' }}>Mendatang</option>
                                <option value="selesai" {{ old('activity_status', $pengumuman->activity_status) === 'selesai' ? 'selected' : '' }}>Selesai</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Tanggal Publikasi</label>
                            <input type="date" name="published_at" value="{{ old('published_at', $pengumuman->published_at ? \Carbon\Carbon::parse($pengumuman->published_at)->format('Y-m-d') : '') }}" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Berlaku Hingga</label>
                            <input type="date" name="expired_at" value="{{ old('expired_at', $pengumuman->expired_at ? \Carbon\Carbon::parse($pengumuman->expired_at)->format('Y-m-d') : '') }}" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
                            <p class="text-xs text-gray-400 mt-1">Kosongkan jika tidak ada batas waktu</p>
                        </div>

                        <div x-data="{ photoPreview: '{{ $pengumuman->attachment && preg_match('/\.(jpeg|jpg|gif|png|webp)$/i', $pengumuman->attachment) ? Storage::url($pengumuman->attachment) : '' }}', hasFile: {{ $pengumuman->attachment ? 'true' : 'false' }}, fileName: '{{ $pengumuman->attachment ? basename($pengumuman->attachment) : '' }}' }">
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Lampiran (PDF/Gambar)</label>
                            <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center overflow-hidden group hover:border-amber-400 transition-colors cursor-pointer" x-on:click="$refs.photo.click()">
                                <template x-if="photoPreview"><img :src="photoPreview" class="absolute inset-0 w-full h-full object-cover"></template>
                                <template x-if="hasFile && !photoPreview">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-12 h-12 text-amber-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                        <span class="text-sm font-medium text-gray-700" x-text="fileName"></span>
                                    </div>
                                </template>
                                <div x-show="hasFile" style="display: none;" class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <span class="text-white text-sm font-medium">Klik untuk mengganti lampiran</span>
                                </div>
                                <template x-if="!hasFile">
                                    <div class="text-center text-gray-400">
                                        <svg class="mx-auto h-10 w-10 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span class="text-sm block">Klik untuk memilih lampiran</span>
                                    </div>
                                </template>
                                <input type="file" name="attachment" x-ref="photo" class="hidden" x-on:change="
                                    const file = $refs.photo.files[0];
                                    if (file) {
                                        hasFile = true; fileName = file.name;
                                        if (file.type.startsWith('image/')) {
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL(file);
                                        } else { photoPreview = ''; }
                                    }
                                ">
                            </div>
                            <p class="text-xs text-gray-400 mt-2">Format: PDF, JPG, PNG. Max 5MB.</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2.5 px-4 rounded-xl text-sm transition-colors">Simpan Perubahan</button>
                        <a href="{{ route('admin.pengumuman.index') }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-4 rounded-xl text-sm transition-colors">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>