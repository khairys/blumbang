<x-publik-layout>
    <x-slot name="title">Layanan Publik</x-slot>
    
    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-6 flex items-center gap-2">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a> 
                <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white">Layanan Publik</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Layanan Publik Desa</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl">Informasi persyaratan dan layanan administrasi yang tersedia di Desa Blumbang.</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>
    
    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pb-24">
            
            <!-- Jam Pelayanan -->
            @php
                $dayOfWeek = date('N'); // 1 (Senin) - 7 (Minggu)
                $dayNames = [
                    1 => 'Senin', 2 => 'Selasa', 3 => 'Rabu', 4 => 'Kamis',
                    5 => 'Jumat', 6 => 'Sabtu', 7 => 'Minggu'
                ];
                $todayName = $dayNames[$dayOfWeek];
                $todayHours = '';
                
                if ($dayOfWeek >= 1 && $dayOfWeek <= 4) {
                    $todayHours = '07.30 - 14.00 WIB';
                } elseif ($dayOfWeek == 5) {
                    $todayHours = '07.30 - 11.00 WIB';
                } elseif ($dayOfWeek == 6) {
                    $todayHours = '07.30 - 12.30 WIB';
                } else {
                    $todayHours = 'Tutup';
                }
            @endphp
            
            <div class="bg-white rounded-2xl p-6 md:p-8 shadow-sm border border-emerald-100 mb-12">
                <div class="flex flex-col md:flex-row gap-8 items-start md:items-center justify-between">
                    <div>
                        <h2 class="text-lg font-bold text-gray-900 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Jam Pelayanan Desa
                        </h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-1 text-sm text-gray-600">
                            <div>Senin–Kamis: 07.30–14.00 WIB</div>
                            <div>Jumat: 07.30–11.00 WIB</div>
                            <div>Sabtu: 07.30–12.30 WIB</div>
                            <div>Minggu: <span class="text-red-500 font-medium">Tutup</span></div>
                        </div>
                    </div>
                    
                    <div class="bg-emerald-50 text-emerald-800 rounded-xl px-6 py-4 min-w-[250px] border border-emerald-100/50">
                        <p class="text-xs font-bold uppercase tracking-wider text-emerald-600 mb-1">Pelayanan Hari Ini</p>
                        <p class="text-lg font-bold">
                            {{ $todayName }}@if($todayHours != 'Tutup'), {{ $todayHours }} @else — <span class="text-red-500">Tutup</span> @endif
                        </p>
                    </div>
                </div>
            </div>

            <!-- Filter & Pencarian -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
                @php
                    $kategoriList = ['Administrasi Kependudukan', 'Surat Keterangan', 'Surat Pengantar'];
                @endphp
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('publik.layanan.index') }}"
                       class="px-4 py-2 text-sm font-medium rounded-full {{ !request('kategori') ? 'bg-emerald-600 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-200' }} transition-colors shadow-sm">Semua</a>
                    @foreach ($kategoriList as $k)
                    <a href="{{ route('publik.layanan.index', ['kategori' => $k]) }}"
                       class="px-4 py-2 text-sm font-medium rounded-full {{ request('kategori') === $k ? 'bg-emerald-600 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-200' }} transition-colors shadow-sm">{{ $k }}</a>
                    @endforeach
                </div>
                
                <form action="{{ route('publik.layanan.index') }}" method="GET" class="relative w-full md:w-80 flex-shrink-0">
                    @if(request('kategori'))
                        <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                    @endif
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari layanan (contoh: SKTM)..." class="w-full pl-11 pr-4 py-3 bg-white border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-transparent transition-all shadow-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </form>
            </div>
            
            @if(isset($layanans) && $layanans->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                    @foreach ($layanans as $l)
                    <a href="{{ route('publik.layanan.show', $l) }}" class="card-hover group flex flex-col bg-white rounded-3xl p-6 border border-gray-100 shadow-sm transition-all duration-300">
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-emerald-600 transition-colors">{{ $l->title }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-6">
                            {{ $l->summary ?? Str::limit(strip_tags($l->content), 100) }}
                        </p>
                        <div class="mt-auto pt-4 border-t border-gray-50 flex items-center">
                            <span class="inline-flex items-center gap-1.5 text-sm text-emerald-600 font-bold group-hover:text-emerald-700 transition-colors">
                                Lihat Persyaratan 
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </span>
                        </div>
                    </a>
                    @endforeach
                </div>
            @else
                <div class="py-16 text-center bg-white rounded-3xl border border-gray-100 shadow-sm mb-16">
                    <div class="w-20 h-20 bg-gray-50 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    @if(request('search') || request('kategori'))
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Layanan tidak ditemukan.</h3>
                        <p class="text-gray-500 max-w-sm mx-auto mb-6">Coba gunakan kata kunci yang berbeda atau hapus filter untuk melihat semua layanan.</p>
                        <a href="{{ route('publik.layanan.index') }}" class="inline-flex items-center gap-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 font-semibold px-6 py-2.5 rounded-full transition-colors shadow-sm">
                            Reset Filter
                        </a>
                    @else
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Belum ada layanan publik.</h3>
                        <p class="text-gray-500 max-w-sm mx-auto">Informasi layanan administrasi desa akan segera diperbarui.</p>
                    @endif
                </div>
            @endif

            <!-- Catatan Penting -->
            <div class="bg-amber-50 border-l-4 border-amber-500 rounded-r-2xl p-6 md:p-8">
                <h3 class="text-amber-800 font-bold text-lg mb-2 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    Catatan Penting
                </h3>
                <p class="text-amber-700 text-sm leading-relaxed">
                    Persyaratan dan ketentuan pelayanan dapat berubah sesuai dengan kebijakan Pemerintah Desa dan instansi terkait. Masyarakat disarankan memastikan kelengkapan dokumen sebelum datang ke kantor Desa Blumbang.
                </p>
            </div>
            
        </div>
    </div>
</x-publik-layout>