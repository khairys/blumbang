<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Layanan</h2>
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
            <form method="POST" action="{{ route('admin.layanan.store') }}">
                @csrf
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4 max-w-3xl">
                    <h3 class="font-bold text-gray-900 pb-2 border-b border-gray-100">Detail Layanan</h3>
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Nama Layanan <span class=\"text-red-500\">*</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                    @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="service_hours" class="block text-sm font-medium text-gray-700 mb-1">Jam Pelayanan </label>
                    <input type="text" id="service_hours" name="service_hours" value="{{ old('service_hours') }}" 
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">
                    @error('service_hours') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Layanan </label>
                    <textarea id="description" name="description" rows="5" 
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="requirements" class="block text-sm font-medium text-gray-700 mb-1">Persyaratan </label>
                    <textarea id="requirements" name="requirements" rows="5" 
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">{{ old('requirements') }}</textarea>
                    @error('requirements') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label for="service_flow" class="block text-sm font-medium text-gray-700 mb-1">Alur Pelayanan </label>
                    <textarea id="service_flow" name="service_flow" rows="5" 
                        class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-green-500 focus:border-green-500 text-sm">{{ old('service_flow') }}</textarea>
                    @error('service_flow') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div><div class="flex gap-3 pt-2">
                        <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold px-8 py-2.5 rounded-xl text-sm">Simpan</button>
                        <a href="{{ route('admin.layanan.index') }}" class="bg-gray-100 text-gray-700 font-medium px-8 py-2.5 rounded-xl text-sm">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>