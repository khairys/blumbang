<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Edit Potensi Desa</h1>
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
              action="{{ isset($potensi) ? route('admin.potensi-desa.update', $potensi) : route('admin.potensi-desa.store') }}"
              enctype="multipart/form-data">
            @csrf
            @isset($potensi) @method('PUT') @endisset

            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                <div class="xl:col-span-2 space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Detail Potensi</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Judul <span class="text-red-500">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $potensi->title ?? '') }}" required
                                   placeholder="Nama potensi desa..."
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400 transition-all">
                            @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Ringkasan</label>
                            <textarea name="summary" rows="3" placeholder="Ringkasan singkat..."
                                      class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400 transition-all resize-none">{{ old('summary', $potensi->summary ?? '') }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Lengkap</label>
                            <textarea name="description" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Ceritakan potensi ini secara lengkap...">{{ old('description', $potensi->description ?? '') }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                        <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Pengaturan</h3>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Status</label>
                            <select name="status" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400 bg-white">
                                <option value="draft" {{ old('status', $potensi->status ?? 'draft') === 'draft' ? 'selected' : '' }}>○ Draft</option>
                                <option value="published" {{ old('status', $potensi->status ?? '') === 'published' ? 'selected' : '' }}>✓ Publikasikan</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Kategori</label>
                            <select name="kategori_id" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400 bg-white">
                                <option value="">— Pilih Kategori —</option>
                                @foreach ($kategoris as $k)
                                <option value="{{ $k->id }}" {{ old('kategori_id', $potensi->kategori_id ?? '') == $k->id ? 'selected' : '' }}>{{ $k->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div x-data="{ photoPreview: null }">
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Foto / Thumbnail</label>
                            
                            <div x-show="!photoPreview" class="mb-3">
                                @if(isset($potensi) && $potensi->thumbnail)
                                <img src="{{ Storage::url($potensi->thumbnail) }}" alt="Thumbnail" class="w-full h-48 object-cover rounded-xl border border-gray-100 shadow-sm">
                                <p class="text-xs text-gray-400 mt-1">Foto saat ini</p>
                                @else
                                <div class="w-full h-48 bg-gray-50 flex items-center justify-center rounded-xl border border-dashed border-gray-300">
                                    <span class="text-gray-400 text-sm">Belum ada foto</span>
                                </div>
                                @endif
                            </div>

                            <div x-show="photoPreview" class="mb-3" style="display: none;">
                                <span class="block w-full h-48 bg-cover bg-no-repeat bg-center rounded-xl border border-gray-100 shadow-sm"
                                      x-bind:style="'background-image: url(\'' + photoPreview + '\');'"></span>
                                <p class="text-xs text-green-600 mt-1 font-medium">Foto baru yang akan diunggah</p>
                            </div>

                            <input type="file" name="thumbnail" accept="image/*" x-ref="photo"
                                   x-on:change="
                                        const reader = new FileReader();
                                        reader.onload = (e) => { photoPreview = e.target.result; };
                                        reader.readAsDataURL($refs.photo.files[0]);
                                   "
                                   class="w-full text-sm text-gray-500
                                          file:mr-3 file:py-2 file:px-4
                                          file:rounded-lg file:border-0
                                          file:text-sm file:font-medium
                                          file:bg-emerald-50 file:text-emerald-700
                                          hover:file:bg-emerald-100 cursor-pointer">
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-2.5 px-4 rounded-xl text-sm transition-colors">
                            {{ isset($potensi) ? 'Simpan' : 'Tambah' }}
                        </button>
                        <a href="{{ route('admin.potensi-desa.index') }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-4 rounded-xl text-sm transition-colors">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>