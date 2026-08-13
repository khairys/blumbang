<x-publik-layout>
    <x-slot name="title">{{ $layanan->title }}</x-slot>
    
    <div class="bg-gray-50 min-h-screen py-16 lg:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <!-- Header -->
                <div class="bg-emerald-600 px-8 py-10 text-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-800 to-emerald-600 opacity-90"></div>
                    <!-- Decorative -->
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-emerald-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-emerald-700/30 rounded-full blur-3xl"></div>
                    
                    <div class="relative z-10">
                        <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-3">{{ $layanan->title }}</h1>
                        @if($layanan->kategori)
                        <span class="inline-block bg-white/20 backdrop-blur-sm border border-white/30 text-emerald-50 text-xs font-bold px-4 py-1.5 rounded-full tracking-wide uppercase">
                            {{ $layanan->kategori }}
                        </span>
                        @endif
                    </div>
                </div>

                <!-- Content -->
                <div class="p-8 md:p-12 space-y-12">
                    
                    @if($layanan->description)
                    <!-- Tentang Layanan -->
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <span class="text-emerald-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                            Tentang Layanan
                        </h2>
                        <div class="text-gray-600 leading-relaxed text-sm md:text-base">
                            {!! $layanan->description !!}
                        </div>
                    </div>
                    @endif

                    @if($layanan->requirements)
                    <!-- Persyaratan Administrasi -->
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <span class="text-emerald-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></span>
                            Persyaratan Administrasi
                        </h2>
                        <div class="prose prose-emerald prose-sm md:prose-base max-w-none text-gray-700 bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            {!! $layanan->requirements !!}
                        </div>
                    </div>
                    @endif

                    <!-- Catatan (Menggunakan field service_flow jika ada) -->
                    @if($layanan->service_flow)
                    <div>
                        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
                            <span class="text-amber-500"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg></span>
                            Catatan
                        </h2>
                        <div class="text-gray-600 leading-relaxed text-sm md:text-base border-l-4 border-amber-400 pl-4 py-1">
                            {!! $layanan->service_flow !!}
                        </div>
                    </div>
                    @endif

                    <hr class="border-gray-100">

                    <!-- Info Praktis (Jam, Biaya, Lokasi) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h2 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                                <span class="text-emerald-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                                Jam Pelayanan
                            </h2>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex justify-between"><span>Senin–Kamis:</span> <span class="font-medium text-gray-900">07.30–14.00 WIB</span></li>
                                <li class="flex justify-between"><span>Jumat:</span> <span class="font-medium text-gray-900">07.30–11.00 WIB</span></li>
                                <li class="flex justify-between"><span>Sabtu:</span> <span class="font-medium text-gray-900">07.30–12.30 WIB</span></li>
                                <li class="flex justify-between"><span>Minggu:</span> <span class="font-bold text-red-500">Tutup</span></li>
                            </ul>
                        </div>

                        <div class="space-y-8">
                            <div>
                                <h2 class="text-lg font-bold text-gray-900 mb-2 flex items-center gap-2">
                                    <span class="text-emerald-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span>
                                    Biaya
                                </h2>
                                <p class="text-sm text-gray-900 font-medium bg-emerald-50 text-emerald-800 px-4 py-2 rounded-lg inline-block">
                                    Gratis
                                </p>
                            </div>
                            
                            <div>
                                <h2 class="text-lg font-bold text-gray-900 mb-2 flex items-center gap-2">
                                    <span class="text-emerald-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></span>
                                    Lokasi Pelayanan
                                </h2>
                                <p class="text-sm text-gray-600 leading-relaxed">
                                    {{ $pengaturan?->address ?? 'Dk, Jalan, Jl. Raya Klego-Simo No.Km. 1, Blumbang Kidul, Blumbang, Kec. Klego, Kabupaten Boyolali, Jawa Tengah 57385' }}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-8 text-center">
                <a href="{{ route('publik.layanan.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-emerald-600 font-bold transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Kembali ke Layanan Publik
                </a>
            </div>

        </div>
    </div>
</x-publik-layout>