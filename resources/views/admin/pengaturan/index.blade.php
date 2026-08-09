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

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Deskripsi Singkat Website</label>
                        <textarea name="website_description" rows="2"
                                  placeholder="Website resmi Desa Blumbang sebagai media digitalisasi informasi desa dan edukasi..."
                                  class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400 transition-all resize-none">{{ old('website_description', $pengaturan?->website_description) }}</textarea>
                        <p class="text-xs text-gray-400 mt-1">Teks ini akan muncul di pojok kiri atas (Navbar), Footer, dan di hasil pencarian Google.</p>
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

                    <div x-data="{ photoPreview: '{{ $pengaturan?->logo ? Storage::url($pengaturan->logo) : '' }}' }">
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Logo Desa</label>
                        
                        <div class="relative w-full h-32 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center overflow-hidden group hover:border-green-400 transition-colors cursor-pointer"
                             x-on:click="$refs.photo.click()">
                            
                            <template x-if="photoPreview">
                                <img :src="photoPreview" class="absolute inset-0 w-full h-full object-contain p-4">
                            </template>
                            
                            <div x-show="photoPreview" style="display: none;" class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-8 h-8 text-white mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-white text-sm font-medium">Klik untuk mengganti logo</span>
                            </div>

                            <template x-if="!photoPreview">
                                <div class="text-center">
                                    <svg class="mx-auto h-8 w-8 text-gray-400 mb-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span class="text-sm text-gray-500 block">Klik untuk memilih logo</span>
                                </div>
                            </template>

                            <input type="file" name="logo" accept="image/*" x-ref="photo" class="hidden"
                                   x-on:change="
                                        const file = $refs.photo.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL(file);
                                        }
                                   ">
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Format PNG/SVG disarankan. Max 2MB.</p>
                    </div>

                    <div x-data="{ photoPreview: '{{ $pengaturan?->favicon ? Storage::url($pengaturan->favicon) : '' }}' }">
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Favicon Website</label>
                        
                        <div class="relative w-32 h-32 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 flex items-center justify-center overflow-hidden group hover:border-blue-400 transition-colors cursor-pointer"
                             x-on:click="$refs.photo.click()">
                            
                            <template x-if="photoPreview">
                                <img :src="photoPreview" class="absolute inset-0 w-full h-full object-contain p-4">
                            </template>
                            
                            <div x-show="photoPreview" style="display: none;" class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <svg class="w-6 h-6 text-white mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                                <span class="text-white text-xs font-medium text-center">Ganti<br>Favicon</span>
                            </div>

                            <template x-if="!photoPreview">
                                <div class="text-center">
                                    <svg class="mx-auto h-8 w-8 text-gray-400 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span class="text-xs text-gray-500 block">Pilih Favicon</span>
                                </div>
                            </template>

                            <input type="file" name="favicon" accept="image/*,.ico" x-ref="photo" class="hidden"
                                   x-on:change="
                                        const file = $refs.photo.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL(file);
                                        }
                                   ">
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Format PNG atau ICO. Disarankan 32x32 px. Max 500KB.</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Embed Google Maps</label>
                        <p class="text-xs text-gray-400 mb-1.5">Buka Google Maps → Share → Embed a map → Copy kode HTML-nya</p>
                        <textarea name="maps_embed" rows="4"
                                  placeholder='<iframe src="https://www.google.com/maps/embed?..." ...></iframe>'
                                  class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm font-mono focus:outline-none focus:ring-2 focus:ring-green-400 transition-all resize-none">{{ old('maps_embed', $pengaturan?->maps_embed) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Jam Pelayanan Operasional</label>
                        <p class="text-xs text-gray-400 mb-1.5">Jadwal operasional balai desa. Bisa berupa list atau tabel.</p>
                        <textarea name="operating_hours" class="tinymce w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm">{{ old('operating_hours', $pengaturan?->operating_hours) }}</textarea>
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