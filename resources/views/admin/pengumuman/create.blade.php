<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Tambah Pengumuman</h1>
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
        <form method="POST"
              action="{{ isset($pengumuman) ? route('admin.pengumuman.update', $pengumuman) : route('admin.pengumuman.store') }}"
              enctype="multipart/form-data">
            @csrf
            @isset($pengumuman) @method('PUT') @endisset

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="xl:col-span-2 space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Isi Pengumuman</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Judul <span class="text-red-500">*</span></label>
                            <input type="text" name="title"
                                   value="{{ old('title', $pengumuman->title ?? '') }}" required
                                   placeholder="Judul pengumuman..."
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                            @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Isi Pengumuman <span class="text-red-500">*</span></label>
                            <textarea name="content" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Tulis isi pengumuman lengkap di sini...">{{ old('content', $pengumuman->content ?? '') }}</textarea>
                            @error('content')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Pengaturan</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Status <span class="text-red-500">*</span></label>
                            <select name="status" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 bg-white">
                                <option value="draft" {{ old('status', $pengumuman->status ?? 'draft') === 'draft' ? 'selected' : '' }}>○ Draft</option>
                                <option value="published" {{ old('status', $pengumuman->status ?? '') === 'published' ? 'selected' : '' }}>✓ Aktifkan</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Tanggal Publikasi</label>
                            <input type="date" name="published_at"
                                   value="{{ old('published_at', isset($pengumuman) && $pengumuman->published_at ? \Carbon\Carbon::parse($pengumuman->published_at)->format('Y-m-d') : '') }}"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Berlaku Hingga</label>
                            <input type="date" name="expired_at"
                                   value="{{ old('expired_at', isset($pengumuman) && $pengumuman->expired_at ? \Carbon\Carbon::parse($pengumuman->expired_at)->format('Y-m-d') : '') }}"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400">
                            <p class="text-xs text-gray-400 mt-1">Kosongkan jika tidak ada batas waktu</p>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Lampiran (PDF/Gambar)</label>
                            @isset($pengumuman)
                                @if($pengumuman->attachment)
                                <div class="mb-2">
                                    <a href="{{ Storage::url($pengumuman->attachment) }}" target="_blank"
                                       class="text-xs text-amber-600 hover:underline flex items-center gap-1">
                                        📎 Lampiran terlampir (klik untuk lihat)
                                    </a>
                                </div>
                                @endif
                            @endisset
                            <input type="file" name="attachment"
                                   class="w-full text-sm text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 cursor-pointer">
                            <p class="text-xs text-gray-400 mt-1">Max 5MB. Format: PDF, JPG, PNG</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2.5 px-4 rounded-xl text-sm transition-colors">
                            {{ isset($pengumuman) ? 'Simpan' : 'Tambah' }}
                        </button>
                        <a href="{{ route('admin.pengumuman.index') }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-4 rounded-xl text-sm transition-colors">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>