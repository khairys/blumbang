<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Edit Konten Jagung</h1>
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
              action="{{ isset($produk) ? route('admin.potensi-jagung.update', $produk) : route('admin.potensi-jagung.store') }}"
              enctype="multipart/form-data">
            @csrf
            @isset($produk) @method('PUT') @endisset

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="xl:col-span-2 space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Detail Konten</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Judul <span class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $produk->title ?? '') }}" required
                                   placeholder="Judul konten jagung..."
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all">
                            @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Ringkasan</label>
                            <textarea name="summary" rows="3" placeholder="Ringkasan singkat konten ini..."
                                      class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 transition-all resize-none">{{ old('summary', $produk->summary ?? '') }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Isi / Konten Lengkap</label>
                            <input id="content" type="hidden" name="content" value="{{ old('content', $produk->content ?? '') }}">
                            <trix-editor input="content" class="trix-content prose max-w-none w-full border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400" placeholder="Tulis konten lengkap di sini (informasi gizi, cara pengolahan, manfaat, dll)..."></trix-editor>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Pengaturan</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Status</label>
                            <select name="status" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 bg-white">
                                <option value="draft" {{ old('status', $produk->status ?? 'draft') === 'draft' ? 'selected' : '' }}>○ Draft</option>
                                <option value="published" {{ old('status', $produk->status ?? '') === 'published' ? 'selected' : '' }}>✓ Publikasikan</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Kategori Konten <span class="text-red-500">*</span></label>
                            <select name="category" required class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-amber-400 bg-white">
                                <option value="">— Pilih Kategori —</option>
                                <option value="Potensi Jagung" {{ old('category', $produk->category ?? '') == 'Potensi Jagung' ? 'selected' : '' }}>Potensi Jagung</option>
                                <option value="Kandungan Gizi" {{ old('category', $produk->category ?? '') == 'Kandungan Gizi' ? 'selected' : '' }}>Kandungan Gizi</option>
                                <option value="Produk Olahan" {{ old('category', $produk->category ?? '') == 'Produk Olahan' ? 'selected' : '' }}>Produk Olahan</option>
                                <option value="Dokumentasi" {{ old('category', $produk->category ?? '') == 'Dokumentasi' ? 'selected' : '' }}>Dokumentasi</option>
                                <option value="Panduan" {{ old('category', $produk->category ?? '') == 'Panduan' ? 'selected' : '' }}>Panduan</option>
                                
                            </select>
                            @error('category')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        @isset($produk)
                            @if($produk->thumbnail)
                            <div>
                                <img src="{{ Storage::url($produk->thumbnail) }}" alt="" class="w-full h-36 object-cover rounded-xl border border-gray-100">
                                <p class="text-xs text-gray-400 mt-1">Gambar saat ini</p>
                            </div>
                            @endif
                        @endisset

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ isset($produk) && $produk->thumbnail ? 'Ganti Gambar' : 'Upload Gambar' }}</label>
                            <input type="file" name="thumbnail" accept="image/*"
                                   class="w-full text-sm text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100 cursor-pointer">
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2.5 px-4 rounded-xl text-sm transition-colors">
                            {{ isset($produk) ? 'Simpan' : 'Tambah' }}
                        </button>
                        <a href="{{ route('admin.potensi-jagung.index') }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-4 rounded-xl text-sm transition-colors">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>