<x-publik-layout>
    <x-slot name="title">Kontak Desa Blumbang</x-slot>

    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-4">Hubungi Pemerintah Desa Blumbang</h1>
            <p class="text-emerald-50 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Informasi alamat, kontak, jam pelayanan, dan struktur pemerintahan Desa Blumbang.
            </p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>

    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pb-24 space-y-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <!-- Kiri: Informasi dan Jam -->
                <div class="space-y-8">
                    <!-- Informasi Kantor Desa -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </span>
                            Informasi Kantor Desa
                        </h2>
                        
                        <div class="space-y-5">
                            <div>
                                <p class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-1">Alamat</p>
                                <p class="text-gray-800 leading-relaxed font-medium">Dk, Jalan, Jl. Raya Klego-Simo No.Km. 1, Blumbang Kidul, Blumbang, Kec. Klego, Kabupaten Boyolali, Jawa Tengah 57385</p>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-1">Telepon</p>
                                <p class="text-gray-800 font-medium">081234567890</p>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-1">Email</p>
                                <p class="text-gray-800 font-medium">info@blumbang.desa.id</p>
                            </div>
                        </div>
                    </div>

                    <!-- Jam Pelayanan -->
                    <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                            <span class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            Jam Pelayanan
                        </h2>
                        
                        <ul class="space-y-4 text-gray-700">
                            <li class="flex justify-between items-center border-b border-gray-50 pb-3">
                                <span class="font-medium">Senin–Kamis</span>
                                <span>07.30–14.00 WIB</span>
                            </li>
                            <li class="flex justify-between items-center border-b border-gray-50 pb-3">
                                <span class="font-medium">Jumat</span>
                                <span>07.30–11.00 WIB</span>
                            </li>
                            <li class="flex justify-between items-center border-b border-gray-50 pb-3">
                                <span class="font-medium">Sabtu</span>
                                <span>07.30–12.30 WIB</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="font-medium text-gray-400">Minggu</span>
                                <span class="text-red-500 font-bold">Tutup</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kanan: Peta & Hubungi Kami -->
                <div class="space-y-8 flex flex-col">
                    
                    <!-- Peta -->
                    <div class="bg-white rounded-3xl p-3 shadow-sm border border-gray-100 flex-grow flex flex-col">
                        <h2 class="text-xl font-bold text-gray-900 mb-3 px-3 pt-3 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Lokasi Kantor Desa
                        </h2>
                        <div class="rounded-2xl overflow-hidden bg-gray-100 flex-grow min-h-[300px]">
                            @if(isset($pengaturan) && $pengaturan->maps_embed)
                                <div class="w-full h-full">
                                    {!! $pengaturan->maps_embed !!}
                                </div>
                            @else
                                <div class="w-full h-full flex items-center justify-center text-center p-6 text-gray-400">
                                    <div>
                                        <svg class="w-16 h-16 mx-auto mb-3 text-emerald-200" fill="currentColor" viewBox="0 0 24 24"><path d="M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM15 19l-6-2.11V5l6 2.11V19z"/></svg>
                                        <p class="font-medium">Peta lokasi belum tersedia.</p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Hubungi Kami (Link) -->
                    <div class="bg-emerald-900 rounded-3xl p-8 shadow-sm text-white">
                        <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="tel:081234567890" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-4 rounded-2xl transition-colors">
                                <svg class="w-6 h-6 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span class="font-semibold">Telepon</span>
                            </a>
                            <a href="mailto:info@blumbang.desa.id" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 p-4 rounded-2xl transition-colors">
                                <svg class="w-6 h-6 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                <span class="font-semibold">Email</span>
                            </a>
                            
                            @if(isset($pengaturan) && $pengaturan->facebook)
                            <a href="{{ $pengaturan->facebook }}" target="_blank" class="flex items-center gap-3 bg-[#1877F2]/20 hover:bg-[#1877F2]/40 p-4 rounded-2xl transition-colors">
                                <svg class="w-6 h-6 text-blue-300" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                <span class="font-semibold">Facebook</span>
                            </a>
                            @endif
                            
                            @if(isset($pengaturan) && $pengaturan->instagram)
                            <a href="{{ $pengaturan->instagram }}" target="_blank" class="flex items-center gap-3 bg-gradient-to-r from-purple-500/20 to-pink-500/20 hover:from-purple-500/40 hover:to-pink-500/40 p-4 rounded-2xl transition-colors">
                                <svg class="w-6 h-6 text-pink-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12c0 3.259.014 3.668.072 4.948.059 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24c3.259 0 3.668-.014 4.948-.072 1.277-.059 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947 0-3.259-.014-3.667-.072-4.947-.059-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                                <span class="font-semibold">Instagram</span>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</x-publik-layout>
