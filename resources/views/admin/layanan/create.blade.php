<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Tambah Layanan Publik</h1>
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
              action="{{ isset($layanan) ? route('admin.layanan.update', $layanan) : route('admin.layanan.store') }}">
            @csrf
            @isset($layanan) @method('PUT') @endisset

            <div class="max-w-3xl space-y-4">
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                    <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">Detail Layanan</h3>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Layanan <span class="text-red-500">*</span></label>
                        <input type="text" name="title" value="{{ old('title', $layanan->title ?? '') }}" required
                               placeholder="Contoh: Surat Keterangan Domisili"
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-400 transition-all">
                        @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Jam Pelayanan</label>
                        <input type="text" name="service_hours"
                               value="{{ old('service_hours', $layanan->service_hours ?? '') }}"
                               placeholder="Contoh: Senin–Jumat, 08.00–15.00 WIB"
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-purple-400 transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Layanan</label>
                        <textarea name="description" class="tinymce w-full border border-gray-200 rounded-xl" placeholder="Penjelasan singkat tentang layanan ini...">{{ old('description', $layanan->description ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Persyaratan</label>
                        <textarea name="requirements" class="tinymce w-full border border-gray-200 rounded-xl">{{ old('requirements', $layanan->requirements ?? '') }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Alur Pelayanan</label>
                        <textarea name="service_flow" class="tinymce w-full border border-gray-200 rounded-xl">{{ old('service_flow', $layanan->service_flow ?? '') }}</textarea>
                    </div>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2.5 px-8 rounded-xl text-sm transition-colors">
                        {{ isset($layanan) ? 'Simpan Perubahan' : 'Tambah Layanan' }}
                    </button>
                    <a href="{{ route('admin.layanan.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2.5 px-8 rounded-xl text-sm transition-colors">Batal</a>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>