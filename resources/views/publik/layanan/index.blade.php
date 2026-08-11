<x-publik-layout>
    <x-slot name="title">Layanan Publik</x-slot>
    
    <style>
        .service-details {
            transition: all 0.4s ease-in-out;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateY(-10px);
        }
        .service-details.expanded {
            max-height: 2000px; /* large enough */
            opacity: 1;
            transform: translateY(0);
            padding-top: 1.5rem;
            margin-top: 1.5rem;
            border-top: 1px dashed #e5e7eb;
        }
    </style>

    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-4"><a href="{{ route('beranda') }}" class="hover:text-white font-medium transition-colors">Beranda</a> <span class="mx-2 text-emerald-300">/</span><span class="text-white">Layanan Publik</span></nav>
            <h1 class="text-4xl font-extrabold text-white tracking-tight">Layanan Publik Desa</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl">Panduan prosedur dan persyaratan layanan administrasi desa</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>
    
    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pb-24">
            
            <!-- Pencarian -->
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-12">
                @php
                    $dayOfWeek = date('N'); // 1 (Senin) - 7 (Minggu)
                    $dayNames = [
                        1 => 'Senin', 2 => 'Selasa', 3 => 'Rabu', 4 => 'Kamis',
                        5 => 'Jumat', 6 => 'Sabtu', 7 => 'Minggu'
                    ];
                    $todayName = $dayNames[$dayOfWeek];
                    $todayHours = '';
                    
                    $opHours = is_array($pengaturan?->operating_hours) ? $pengaturan->operating_hours : [];
                    
                    if ($dayOfWeek >= 1 && $dayOfWeek <= 4) {
                        $todayHours = $opHours['senin_kamis'] ?? '07.30 - 14.00 WIB';
                    } elseif ($dayOfWeek == 5) {
                        $todayHours = $opHours['jumat'] ?? '07.30 - 11.00 WIB';
                    } elseif ($dayOfWeek == 6) {
                        $todayHours = $opHours['sabtu'] ?? '07.30 - 12.30 WIB';
                    } else {
                        $todayHours = 'Tutup / Libur';
                    }
                @endphp
                <!-- Info Jam Layanan -->
                <div class="bg-white border border-gray-200 rounded-full py-2.5 px-5 flex items-center gap-3 shadow-sm w-full md:w-auto">
                    <div class="text-emerald-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                    <p class="text-sm text-gray-700 font-medium">Layanan Hari Ini ({{ $todayName }}): <span class="text-gray-500 font-normal">{{ $todayHours }}</span></p>
                </div>

                <form action="{{ route('publik.layanan.index') }}" method="GET" class="relative w-full md:w-80">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari layanan (cth: SKTM)..." class="w-full pl-11 pr-4 py-3 bg-white border border-gray-200 rounded-full text-sm focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500 shadow-sm transition-shadow">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </form>
            </div>
            
            @if($isSearching)
                <!-- HASIL PENCARIAN -->
                <div class="mb-6"><h2 class="text-xl font-bold text-gray-800">Hasil Pencarian: "{{ request('search') }}"</h2></div>
                @if(isset($layanans) && $layanans->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($layanans as $l)
                        <a href="{{ route('publik.layanan.show', $l) }}" class="group block bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-300 overflow-hidden">
                            <div class="p-6 h-full flex flex-col">
                                <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center text-emerald-600 mb-4 group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                </div>
                                <h3 class="font-bold text-gray-900 text-lg mb-1 group-hover:text-emerald-700 transition-colors">{{ $l->title }}</h3>
                                @if($l->kategori)<span class="text-xs text-emerald-600 font-medium mb-3 block">{{ $l->kategori }}</span>@endif
                                
                                <div class="mt-auto pt-4 flex items-center justify-between">
                                    <span class="inline-flex items-center gap-1.5 text-sm text-emerald-600 font-bold group-hover:text-emerald-800 transition-colors">
                                        Lihat Syarat <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                @else
                    <div class="py-16 text-center bg-white rounded-3xl border border-gray-100 shadow-sm">
                        <div class="mb-4 flex justify-center text-gray-300"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                        <h2 class="text-xl font-bold text-gray-700 mb-2">Tidak Ditemukan</h2>
                        <p class="text-gray-500">Layanan dengan kata kunci tersebut tidak ada.</p>
                    </div>
                @endif
                <div class="mt-10 text-center"><a href="{{ route('publik.layanan.index') }}" class="inline-flex items-center gap-2 text-emerald-600 hover:text-emerald-800 font-semibold bg-emerald-50 px-6 py-3 rounded-full transition-colors"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg> Kembali ke Daftar Layanan</a></div>
            @else
                
                <!-- 3 KARTU UTAMA LAYANAN -->
                @if(isset($groupedLayanans) && $groupedLayanans->isNotEmpty())
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        @foreach($groupedLayanans as $kategori => $layanans)
                            <a href="{{ route('publik.layanan.kategori', Str::slug($kategori)) }}" class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 relative overflow-hidden flex flex-col min-h-[300px]">
                                <!-- Background Decoration -->
                                <div class="absolute -right-10 -top-10 w-40 h-40 bg-emerald-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500 ease-in-out pointer-events-none"></div>
                                
                                <div class="relative z-10 flex-1">
                                    <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300 shadow-sm">
                                        @if($kategori == 'Surat Keterangan')
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        @elseif($kategori == 'Surat Pengantar')
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        @else
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/></svg>
                                        @endif
                                    </div>
                                    <h2 class="text-2xl font-extrabold text-gray-900 mb-3">{{ $kategori }}</h2>
                                    
                                    <!-- Preview List (Hover Effect) -->
                                <div class="absolute inset-x-0 bottom-0 top-auto bg-white/95 backdrop-blur shadow-[0_-10px_40px_rgba(0,0,0,0.1)] p-8 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out border-t border-gray-100 z-20">
                                    <h4 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                                        Daftar Layanan
                                    </h4>
                                    <ul class="space-y-3">
                                        @foreach($layanans as $layanan)
                                            <li class="flex items-start gap-2 text-gray-700 text-sm font-medium">
                                                <svg class="w-4 h-4 text-emerald-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                                {{ $layanan->title }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="py-20 text-center bg-white rounded-3xl border border-gray-100 shadow-sm">
                        <div class="mb-4 flex justify-center text-gray-300"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                        <h2 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Layanan</h2>
                        <p class="text-gray-500 max-w-md mx-auto">Saat ini belum ada informasi layanan publik yang ditambahkan.</p>
                    </div>
                @endif
            @endif
        </div>
    </div>
</x-publik-layout>