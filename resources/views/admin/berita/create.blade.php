<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Berita</h2>
        </div>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-50 border border-green-300 text-green-800 px-4 py-3 rounded-xl flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.berita.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 space-y-5">
                        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
                            <h3 class="font-bold text-gray-900 pb-2 border-b border-gray-100">Konten Berita</h3>
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul Berita <span class=\"text-red-500\">*</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="summary" class="block text-sm font-medium text-gray-700 mb-1">Ringkasan </label>
                    <textarea id="summary" name="summary" rows="5" 
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">{{ old('summary') }}</textarea>
                    @error('summary') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Isi Berita <span class=\"text-red-500\">*</span></label>
                    <textarea id="content" name="content" rows="5" required
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">{{ old('content') }}</textarea>
                    @error('content') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                            <h3 class="font-bold text-gray-900 pb-2 border-b border-gray-100">Pengaturan</h3>
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status <span class="text-red-500">*</span></label>
                    <select id="status" name="status" required class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
<option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Dipublikasikan</option>

                    </select>
                    @error('status') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                                <select name="category_id" class="w-full rounded-xl border-gray-300 text-sm">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategoris as $k)
                                    <option value="{{ $k->id }}" {{ old('category_id') == $k->id ? 'selected' : '' }}>{{ $k->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Thumbnail</label>
                    <input type="file" name="thumbnail" accept="image/*"
                        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-green-50 file:text-green-700 hover:file:bg-green-100">
                    @error('thumbnail') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>        </div>
                        <div class="flex gap-3">
                            <button type="submit" class="flex-1 bg-green-600 hover:bg-green-700 text-white font-semibold py-2.5 rounded-xl transition-colors text-sm">Simpan</button>
                            <a href="{{ route('admin.berita.index') }}" class="flex-1 text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 rounded-xl transition-colors text-sm">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>