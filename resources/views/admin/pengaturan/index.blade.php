<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengaturan Website</h2>
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
            <form method="POST" action="{{ route('admin.pengaturan.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="max-w-3xl space-y-5">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
                        <h3 class="font-bold text-gray-900 pb-2 border-b">Informasi Umum</h3>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Nama Desa</label><input type="text" name="village_name" value="{{ old('village_name', $pengaturan?->village_name) }}" required class="w-full rounded-xl border-gray-300 text-sm"></div>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Email</label><input type="email" name="email" value="{{ old('email', $pengaturan?->email) }}" class="w-full rounded-xl border-gray-300 text-sm"></div>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label><input type="text" name="phone" value="{{ old('phone', $pengaturan?->phone) }}" class="w-full rounded-xl border-gray-300 text-sm"></div>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label><textarea name="address" rows="3" class="w-full rounded-xl border-gray-300 text-sm">{{ old('address', $pengaturan?->address) }}</textarea></div>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
                        <h3 class="font-bold text-gray-900 pb-2 border-b">Media Sosial</h3>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Facebook URL</label><input type="url" name="facebook" value="{{ old('facebook', $pengaturan?->facebook) }}" placeholder="https://facebook.com/..." class="w-full rounded-xl border-gray-300 text-sm"></div>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Instagram URL</label><input type="url" name="instagram" value="{{ old('instagram', $pengaturan?->instagram) }}" placeholder="https://instagram.com/..." class="w-full rounded-xl border-gray-300 text-sm"></div>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">YouTube URL</label><input type="url" name="youtube" value="{{ old('youtube', $pengaturan?->youtube) }}" placeholder="https://youtube.com/..." class="w-full rounded-xl border-gray-300 text-sm"></div>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
                        <h3 class="font-bold text-gray-900 pb-2 border-b">Logo & Peta</h3>
                        @if($pengaturan?->logo)
                        <div><img src="{{ Storage::url($pengaturan->logo) }}" class="h-20 object-contain"><p class="text-xs text-gray-400 mt-1">Logo saat ini</p></div>
                        @endif
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Upload Logo Baru</label><input type="file" name="logo" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-green-50 file:text-green-700"></div>
                        <div><label class="block text-sm font-medium text-gray-700 mb-1">Embed Google Maps</label><textarea name="maps_embed" rows="4" placeholder='&lt;iframe src="..." ...&gt;&lt;/iframe&gt;' class="w-full rounded-xl border-gray-300 text-sm font-mono text-xs">{{ old('maps_embed', $pengaturan?->maps_embed) }}</textarea></div>
                    </div>
                    <div class="flex gap-3">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl text-sm">Simpan Pengaturan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>