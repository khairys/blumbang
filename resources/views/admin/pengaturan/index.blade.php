<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Pengaturan Website</h1>
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
        <form method="POST" action="{{ route('admin.pengaturan.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="max-w-3xl space-y-5">
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                    <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">🏘️ Informasi Desa</h3>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Desa <span class="text-red-500">*</span></label>
                        <input type="text" name="village_name"
                               value="{{ old('village_name', $pengaturan?->village_name) }}" required
                               placeholder="Desa Blumbang"
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                            <input type="email" name="email" value="{{ old('email', $pengaturan?->email) }}"
                                   placeholder="desa@blumbang.desa.id"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Nomor Telepon</label>
                            <input type="text" name="phone" value="{{ old('phone', $pengaturan?->phone) }}"
                                   placeholder="(0276) 123-4567"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Alamat Lengkap</label>
                        <textarea name="address" rows="3"
                                  placeholder="Jl. Raya Blumbang, Kec. Klego, Kab. Boyolali, Jawa Tengah"
                                  class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all resize-none">{{ old('address', $pengaturan?->address) }}</textarea>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                    <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">📱 Media Sosial</h3>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Facebook</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 rounded-l-xl bg-gray-50 text-gray-500 text-sm">facebook.com/</span>
                            <input type="text" name="facebook"
                                   value="{{ old('facebook', $pengaturan ? str_replace('https://facebook.com/', '', $pengaturan->facebook) : '') }}"
                                   placeholder="desablumbang"
                                   class="flex-1 px-4 py-2.5 border border-gray-200 rounded-r-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Instagram</label>
                        <div class="flex">
                            <span class="inline-flex items-center px-3 border border-r-0 border-gray-200 rounded-l-xl bg-gray-50 text-gray-500 text-sm">instagram.com/</span>
                            <input type="text" name="instagram"
                                   value="{{ old('instagram', $pengaturan ? str_replace('https://instagram.com/', '', $pengaturan->instagram) : '') }}"
                                   placeholder="desablumbang"
                                   class="flex-1 px-4 py-2.5 border border-gray-200 rounded-r-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">YouTube (URL lengkap)</label>
                        <input type="url" name="youtube" value="{{ old('youtube', $pengaturan?->youtube) }}"
                               placeholder="https://youtube.com/@desablumbang"
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all">
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                    <h3 class="font-semibold text-gray-800 pb-2 border-b border-gray-100">🖼️ Logo & Peta</h3>

                    @if($pengaturan?->logo)
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Logo saat ini:</p>
                        <img src="{{ Storage::url($pengaturan->logo) }}" alt="Logo" class="h-20 object-contain bg-gray-50 p-2 rounded-xl border border-gray-200">
                    </div>
                    @endif

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ $pengaturan?->logo ? 'Ganti Logo' : 'Upload Logo Desa' }}</label>
                        <input type="file" name="logo" accept="image/*"
                               class="w-full text-sm text-gray-500 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-medium file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer">
                        <p class="text-xs text-gray-400 mt-1">Format PNG/SVG disarankan. Max 2MB.</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Embed Google Maps</label>
                        <p class="text-xs text-gray-400 mb-1.5">Buka Google Maps → Share → Embed a map → Copy kode HTML-nya</p>
                        <textarea name="maps_embed" rows="4"
                                  placeholder='<iframe src="https://www.google.com/maps/embed?..." ...></iframe>'
                                  class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm font-mono focus:outline-none focus:ring-2 focus:ring-green-400 transition-all resize-none">{{ old('maps_embed', $pengaturan?->maps_embed) }}</textarea>
                    </div>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-xl text-sm transition-colors">
                        💾 Simpan Pengaturan
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>