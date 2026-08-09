<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Kelola Profil Desa</h1>
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
        <form method="POST" action="{{ route('admin.profil.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="max-w-4xl space-y-5">
                <div class="bg-blue-50 border border-blue-200 rounded-xl px-4 py-3 text-sm text-blue-700 flex items-start gap-2">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                    <p>Data profil desa hanya ada satu record. Isi semua field dan klik simpan untuk memperbarui.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📜 Sejarah Desa</h3>
                    <textarea name="history" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Tuliskan sejarah singkat Desa Blumbang, kapan desa ini berdiri, siapa tokoh-tokoh penting, dll...">{{ old('history', $profil?->history) }}</textarea>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">🎯 Visi & Misi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Visi Desa</label>
                            <textarea name="vision" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Tulis visi Desa Blumbang...">{{ old('vision', $profil?->vision) }}</textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Misi Desa</label>
                            <textarea name="mission" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="1. Mewujudkan...&#10;2. Meningkatkan...&#10;3. Mengembangkan...">{{ old('mission', $profil?->mission) }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">🗺️ Kondisi Geografis</h3>
                    <textarea name="geography" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Batas wilayah, topografi, luas wilayah, iklim, dll...">{{ old('geography', $profil?->geography) }}</textarea>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📊 Statistik Data & Informasi Umum</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah Penduduk</label>
                            <input type="text" name="stat_penduduk" value="{{ old('stat_penduduk', $profil?->stat_penduduk) }}" placeholder="Misal: 2.847 Jiwa" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah Kepala Keluarga (KK)</label>
                            <input type="text" name="stat_kk" value="{{ old('stat_kk', $profil?->stat_kk) }}" placeholder="Misal: 812 KK" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah RT</label>
                            <input type="text" name="stat_rt" value="{{ old('stat_rt', $profil?->stat_rt) }}" placeholder="Misal: 24" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Jumlah RW</label>
                            <input type="text" name="stat_rw" value="{{ old('stat_rw', $profil?->stat_rw) }}" placeholder="Misal: 6" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Luas Wilayah</label>
                            <input type="text" name="stat_luas_wilayah" value="{{ old('stat_luas_wilayah', $profil?->stat_luas_wilayah) }}" placeholder="Misal: 154 Hektar" class="w-full px-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        </div>
                    </div>

                    <label class="block text-sm font-medium text-gray-700 mb-1.5">Penjelasan Tambahan (Opsional)</label>
                    <textarea name="general_information" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Penjelasan demografi tambahan...">{{ old('general_information', $profil?->general_information) }}</textarea>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">👥 Struktur Organisasi</h3>
                    
                    <div x-data="{ photoPreview: '{{ $profil?->organizational_structure ? Storage::url($profil->organizational_structure) : '' }}' }">
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Bagan Struktur Organisasi</label>
                        
                        <div class="relative w-full h-48 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center overflow-hidden group hover:border-green-400 transition-colors cursor-pointer"
                             x-on:click="$refs.photo.click()">
                            
                            <template x-if="photoPreview">
                                <img :src="photoPreview" class="absolute inset-0 w-full h-full object-contain p-2">
                            </template>
                            
                            <div x-show="photoPreview" style="display: none;" class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-white text-sm font-medium">Klik untuk mengganti gambar</span>
                            </div>

                            <template x-if="!photoPreview">
                                <div class="text-center">
                                    <svg class="mx-auto h-10 w-10 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span class="text-sm text-gray-500 block">Klik untuk memilih gambar</span>
                                </div>
                            </template>

                            <input type="file" name="organizational_structure" accept="image/*" x-ref="photo" class="hidden"
                                   x-on:change="
                                        const file = $refs.photo.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL(file);
                                        }
                                   ">
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Format gambar (JPG, PNG). Max 5MB.</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-xl text-sm transition-colors">
                        💾 Simpan Profil Desa
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>