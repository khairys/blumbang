<x-publik-layout>
    <x-slot name="title">Beranda</x-slot>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero-pattern relative overflow-hidden min-h-[90vh] flex items-center">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-green-900/95 via-green-800/85 to-emerald-900/90"></div>

        <!-- Decorative circles -->
        <div class="absolute top-20 right-20 w-64 h-64 bg-green-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-emerald-600/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-green-700/5 rounded-full blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20 text-center">
            <div class="flex flex-col items-center">
                <!-- Content -->
                <div class="w-full" data-aos="zoom-in" data-aos-duration="1000">

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Selamat Datang di<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 to-green-200">{{ $pengaturan?->village_name ?? 'Desa Blumbang' }}</span>
                    </h1>

                    <p class="text-green-100 text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
                        Temukan informasi desa, layanan publik, berita, kegiatan, dan berbagai potensi Desa Blumbang.
                    </p>

                    <div class="flex flex-wrap gap-5 justify-center mt-4">
                        <a href="{{ route('publik.profil') }}"
                           class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-emerald-400 to-emerald-500 text-white font-bold px-9 py-4 rounded-full overflow-hidden shadow-lg hover:shadow-emerald-500/50 transition-all duration-300 hover:-translate-y-1">
                            <span class="absolute inset-0 bg-white/20 group-hover:bg-transparent transition-colors"></span>
                            <span class="relative z-10 tracking-wide">Jelajahi Desa</span>
                            <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="{{ route('publik.layanan.index') }}"
                           class="group inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-md border border-white/20 text-white font-bold px-9 py-4 rounded-full shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-white/40">
                            <span class="tracking-wide">Layanan Publik</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </a>
                    </div>

                    <!-- Stats -->
                    <h3 class="text-white/80 text-sm font-semibold tracking-widest uppercase mt-12 mb-6">Desa Blumbang dalam Angka</h3>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-4 pt-4 border-t border-white/10">
                        <div class="stat-item">
                            <p class="text-4xl font-extrabold text-white count-up" data-target="{{ $profil?->stat_penduduk ? preg_replace('/[^0-9]/', '', $profil->stat_penduduk) : '2566' }}">0</p>
                            <p class="text-green-200 font-medium text-xs sm:text-sm mt-1">Penduduk</p>
                        </div>
                        <div class="stat-item">
                            <p class="text-4xl font-extrabold text-white count-up" data-target="{{ $profil?->stat_kk ? preg_replace('/[^0-9]/', '', $profil->stat_kk) : '924' }}">0</p>
                            <p class="text-green-200 font-medium text-xs sm:text-sm mt-1">Kepala Keluarga</p>
                        </div>
                        <div class="stat-item">
                            <p class="text-4xl font-extrabold text-white count-up" data-target="{{ $profil?->stat_rt ? preg_replace('/[^0-9]/', '', $profil->stat_rt) : '16' }}">0</p>
                            <p class="text-green-200 font-medium text-xs sm:text-sm mt-1">RT</p>
                        </div>
                        <div class="stat-item">
                            <p class="text-4xl font-extrabold text-white count-up" data-target="{{ $profil?->stat_rw ? preg_replace('/[^0-9]/', '', $profil->stat_rw) : '4' }}">0</p>
                            <p class="text-green-200 font-medium text-xs sm:text-sm mt-1">RW</p>
                        </div>
                        <div class="stat-item md:col-span-1 col-span-2">
                            <p class="text-4xl font-extrabold text-white count-up" data-target="2">0</p>
                            <p class="text-green-200 font-medium text-xs sm:text-sm mt-1">Dusun</p>
                        </div>
                    </div>
                    <p class="text-green-200/50 text-xs mt-6 italic">*Data Desa Blumbang</p>
                </div>

            </div>
        </div>

        <!-- Wave - fills gap seamlessly -->
        <div class="absolute bottom-0 left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </section>

    <!-- ===== PENGUMUMAN MARQUEE ===== -->
    <section class="bg-amber-50 border-y border-amber-200 py-3 overflow-hidden" data-aos="fade-up">
        <div class="flex items-center">
            <div class="bg-amber-500 text-white text-xs font-bold px-4 py-1.5 flex-shrink-0 flex items-center gap-2 z-10">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"/></svg>
                PENGUMUMAN
            </div>
            <div class="overflow-hidden flex-1 ml-4">
                <div class="marquee-track flex whitespace-nowrap gap-12 text-sm text-amber-900 font-medium">
                    @if(isset($pengumumans) && $pengumumans->isNotEmpty())
                        @foreach($pengumumans as $p)
                            <span class="flex items-center gap-1"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg> {{ $p->title }} — <a href="{{ route('publik.pengumuman.show', $p->slug) }}" class="underline hover:text-amber-700">Baca detail</a></span>
                        @endforeach
                        <!-- Duplicate for seamless loop -->
                        @foreach($pengumumans as $p)
                            <span class="flex items-center gap-1"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg> {{ $p->title }} — <a href="{{ route('publik.pengumuman.show', $p->slug) }}" class="underline hover:text-amber-700">Baca detail</a></span>
                        @endforeach
                    @else
                        <span class="flex items-center gap-1"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg> Selamat Datang di Website Resmi {{ $pengaturan?->village_name ?? 'Desa Blumbang' }}</span>
                        <span class="flex items-center gap-1"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg> Website ini dikelola oleh Pemerintah Desa untuk mempermudah pelayanan masyarakat.</span>
                        <!-- Duplicate for seamless loop -->
                        <span class="flex items-center gap-1"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg> Selamat Datang di Website Resmi {{ $pengaturan?->village_name ?? 'Desa Blumbang' }}</span>
                        <span class="flex items-center gap-1"><svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg> Website ini dikelola oleh Pemerintah Desa untuk mempermudah pelayanan masyarakat.</span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FITUR UNGGULAN ===== -->
    <section class="py-16 bg-gray-50" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                $fitur = [
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>', 'label' => 'Profil Desa', 'color' => 'green', 'href' => route('publik.profil')],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15M9 11l3 3L22 4"/></svg>', 'label' => 'Berita Desa', 'color' => 'blue', 'href' => route('publik.berita.index')],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>', 'label' => 'Pengumuman', 'color' => 'amber', 'href' => route('publik.pengumuman.index')],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg>', 'label' => 'Potensi Desa', 'color' => 'emerald', 'href' => route('publik.potensi-desa.index')],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg>', 'label' => 'Olahan Jagung', 'color' => 'yellow', 'href' => route('publik.potensi-jagung.index')],
                    ['icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>', 'label' => 'Layanan Publik', 'color' => 'purple', 'href' => route('publik.layanan.index')],
                ];
                $colors = ['green'=>'bg-green-50 text-green-700 hover:bg-green-100','blue'=>'bg-blue-50 text-blue-700 hover:bg-blue-100','amber'=>'bg-amber-50 text-amber-700 hover:bg-amber-100','emerald'=>'bg-emerald-50 text-emerald-700 hover:bg-emerald-100','yellow'=>'bg-yellow-50 text-yellow-700 hover:bg-yellow-100','purple'=>'bg-purple-50 text-purple-700 hover:bg-purple-100'];
                @endphp
                @foreach ($fitur as $f)
                <a href="{{ $f['href'] }}" class="card-hover {{ $colors[$f['color']] }} rounded-2xl p-4 flex flex-col items-center gap-2 border border-transparent hover:border-current/10 transition-all duration-200">
                    <span class="text-current">{!! $f['icon'] !!}</span>
                    <span class="text-xs font-semibold text-center">{{ $f['label'] }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== BERITA TERBARU ===== -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-10">
                <div>
                    <p class="text-green-600 font-semibold text-sm uppercase tracking-wider mb-2">Update Terkini</p>
                    <h2 class="text-3xl font-bold text-gray-900">Berita Desa</h2>
                </div>
                <a href="{{ route('publik.berita.index') }}" class="hidden sm:inline-flex items-center gap-1.5 text-green-600 hover:text-green-700 font-medium text-sm transition-colors">
                    Lihat Semua
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">
                @if(isset($beritas) && $beritas->isNotEmpty())
                    @foreach ($beritas as $b)
                    <a href="{{ route('publik.berita.show', $b->slug) }}" class="block card-hover bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow group">
                        <!-- Thumbnail -->
                        <div class="h-48 bg-gradient-to-br from-green-800 to-emerald-600 relative overflow-hidden">
                            @if ($b->thumbnail)
                            <img src="{{ Storage::url($b->thumbnail) }}" alt="{{ $b->title }}" class="w-full h-full object-cover">
                            @else
                            <div class="absolute inset-0 flex items-center justify-center opacity-20">
                                <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            </div>
                            @endif
                            @if ($b->category)
                            <div class="absolute top-3 left-3">
                                <span class="bg-white/90 text-green-700 text-xs font-bold px-2.5 py-1 rounded-full">{{ $b->category->name }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="p-5 flex flex-col h-full">
                            <p class="text-xs text-gray-400 mb-2">{{ $b->created_at->format('d M Y') }}</p>
                            <h3 class="font-bold text-gray-900 mb-2 leading-snug line-clamp-2 group-hover:text-green-600 transition-colors">{{ $b->title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">{{ $b->summary }}</p>
                            <div class="mt-auto pt-2">
                                <span class="inline-flex items-center gap-1 text-green-600 group-hover:text-green-700 text-sm font-medium transition-colors">
                                    Baca Selengkapnya
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @else
                <div class="col-span-full py-8 text-center bg-gray-50 rounded-2xl border border-gray-100">
                    <p class="text-gray-500">Belum ada berita terbaru.</p>
                </div>
                @endif
            </div>
        </div>
    </section>

    <!-- ===== LAYANAN PUBLIK ===== -->
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-green-600 font-semibold text-sm uppercase tracking-wider mb-2">Pelayanan Desa</p>
                <h2 class="text-3xl font-bold text-gray-900">Layanan Publik</h2>
                <p class="text-gray-500 mt-2 max-w-md mx-auto text-sm">Informasi mengenai syarat dan prosedur layanan administrasi Desa Blumbang</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">
                @if(isset($groupedLayanans) && $groupedLayanans->isNotEmpty())
                    @foreach($groupedLayanans as $kategori => $layanans)
                        <a href="{{ route('publik.layanan.kategori', Str::slug($kategori)) }}" class="group bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:scale-[1.02] transition-all duration-300 relative overflow-hidden flex flex-col h-full">
                            <!-- Background Decoration -->
                            <div class="absolute -right-10 -top-10 w-32 h-32 bg-emerald-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500 pointer-events-none"></div>
                            
                            <div class="relative z-10 flex-1 flex flex-col h-full items-start">
                                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-5 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300">
                                    @if($kategori == 'Surat Keterangan')
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    @elseif($kategori == 'Surat Pengantar')
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    @else
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/></svg>
                                    @endif
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-6">{{ $kategori }}</h3>
                                
                                <!-- Daftar Layanan (Selalu Tampil) -->
                                <ul class="space-y-3 mb-6 w-full">
                                    @foreach($layanans as $layanan)
                                        <li class="flex items-start gap-2 text-gray-600 text-sm font-medium">
                                            <svg class="w-4 h-4 text-emerald-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            {{ $layanan->title }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="mt-auto relative z-10 w-full pt-4 border-t border-gray-100 flex justify-between items-center">
                                <span class="inline-flex items-center gap-1.5 text-sm text-emerald-600 font-bold group-hover:text-emerald-700 group-hover:underline underline-offset-4 decoration-2 transition-all">
                                    Selengkapnya
                                </span>
                                <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300 shadow-sm group-hover:shadow-md">
                                    <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="col-span-full py-10 text-center bg-gray-50 rounded-2xl border border-gray-100">
                        <div class="mb-3 text-gray-400 flex justify-center"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                        <p class="text-gray-500 font-medium">Belum ada layanan publik yang ditambahkan.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- ===== POTENSI DESA ===== -->
    <section class="py-16 bg-gradient-to-br from-green-50 to-emerald-50" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-10">
                <div>
                    <p class="text-green-600 font-semibold text-sm uppercase tracking-wider mb-2">Kekayaan Desa</p>
                    <h2 class="text-3xl font-bold text-gray-900">Potensi Desa Blumbang</h2>
                </div>
                <a href="{{ route('publik.potensi-desa.index') }}" class="hidden sm:inline-flex items-center gap-1.5 text-green-600 font-medium text-sm hover:text-green-700 transition-colors">
                    Selengkapnya
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="100">
                @if(isset($potensi_desa) && $potensi_desa->isNotEmpty())
                    @foreach ($potensi_desa as $pot)
                    <a href="{{ route('publik.potensi-desa.show', $pot->slug) }}" class="block card-hover rounded-2xl overflow-hidden border border-green-100 shadow-sm bg-white hover:shadow-md transition-shadow group">
                        <div class="h-36 bg-gradient-to-br from-green-700 to-emerald-600 flex items-center justify-center relative">
                            @if($pot->thumbnail)
                            <img src="{{ Storage::url($pot->thumbnail) }}" alt="{{ $pot->title }}" class="w-full h-full object-cover">
                            @else
                            <span class="text-white/60"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg></span>
                            @endif
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-gray-900 mb-2 line-clamp-1 group-hover:text-green-600 transition-colors">{{ $pot->title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">{{ $pot->summary }}</p>
                        </div>
                    </a>
                    @endforeach
                @else
                    <div class="col-span-full py-10 text-center bg-white rounded-2xl border border-green-100 shadow-sm">
                        <div class="mb-3 text-gray-400 flex justify-center"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg></div>
                        <p class="text-gray-500 font-medium">Belum ada potensi desa yang ditambahkan.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- ===== POTENSI JAGUNG HIGHLIGHT ===== -->
    <section class="py-20 relative overflow-hidden" data-aos="fade-up">
        <!-- Background Decor -->
        <div class="absolute inset-0 bg-gradient-to-br from-amber-50/80 via-emerald-50/60 to-white -z-10"></div>
        <div class="absolute -right-64 -top-64 w-[500px] h-[500px] bg-amber-100/50 rounded-full blur-3xl -z-10"></div>
        <div class="absolute -left-64 -bottom-64 w-[500px] h-[500px] bg-emerald-100/50 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Text Content (Left) -->
                <div class="lg:col-span-5 relative z-10">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 text-white text-xs font-bold px-4 py-1.5 rounded-full mb-6 shadow-md shadow-amber-500/20">
                        <span class="text-sm">🌽</span> Program KKN Multidisiplin
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Potensi Jagung<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-green-500">Desa Blumbang</span>
                    </h2>
                    
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Mengembangkan hasil panen lokal menjadi pangan bernilai tambah. Terdapat <strong class="text-amber-600">10 Kreasi Olahan</strong> jagung bergizi yang dikembangkan untuk mendukung pemanfaatan pangan lokal keluarga.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('publik.potensi-jagung.index') }}" class="inline-flex justify-center items-center gap-2 bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-700 hover:to-green-700 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-emerald-500/30">
                            Selengkapnya
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Grid (Right) -->
                <div class="lg:col-span-7 relative z-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 h-full" data-aos="fade-up" data-aos-delay="100">
                        @php
                            $featured = isset($potensi_jagung) ? $potensi_jagung->where('title', 'Bubur Jagung')->first() : null;
                            $cornRibs = isset($potensi_jagung) ? $potensi_jagung->where('title', 'Corn Ribs')->first() : null;
                            $esJagung = isset($potensi_jagung) ? $potensi_jagung->where('title', 'Es Jagung dan Ubi Ungu')->first() : null;
                        @endphp

                        @if($featured && $cornRibs && $esJagung)
                            <!-- 1. Featured: Bubur Jagung (Besar, Kiri) -->
                            <a href="{{ route('publik.potensi-jagung.show', $featured->slug) }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 sm:row-span-2 min-h-[320px] flex flex-col">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent z-10 transition-opacity duration-300 group-hover:opacity-90"></div>
                                
                                @if($featured->thumbnail)
                                    <img src="{{ Storage::url($featured->thumbnail) }}" alt="{{ $featured->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                @endif
                                
                                <div class="absolute top-4 left-4 z-20">
                                    <span class="bg-amber-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1.5">
                                        ⭐ Produk Unggulan
                                    </span>
                                </div>
                                
                                <div class="relative z-20 mt-auto p-6">
                                    <div class="transform group-hover:-translate-y-2 transition-transform duration-300">
                                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">{{ $featured->title }}</h3>
                                        <p class="text-gray-200 text-sm line-clamp-2 mb-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">{{ $featured->summary }}</p>
                                        <span class="inline-flex items-center gap-1.5 text-amber-400 font-semibold text-sm group-hover:text-amber-300">
                                            Lihat Resep <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </span>
                                    </div>
                                </div>
                            </a>

                            <div class="flex flex-col gap-4">
                                <!-- 2. Corn Ribs (Kanan Atas) -->
                                <a href="{{ route('publik.potensi-jagung.show', $cornRibs->slug) }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 h-48 flex flex-col">
                                    <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/80 via-emerald-900/10 to-transparent z-10 transition-opacity duration-300 group-hover:opacity-90"></div>
                                    
                                    @if($cornRibs->thumbnail)
                                        <img src="{{ Storage::url($cornRibs->thumbnail) }}" alt="{{ $cornRibs->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    @endif
                                    
                                    <div class="relative z-20 mt-auto p-5">
                                        <div class="transform group-hover:-translate-y-1 transition-transform duration-300">
                                            <h4 class="text-lg font-bold text-white mb-1">{{ $cornRibs->title }}</h4>
                                            <span class="inline-flex items-center gap-1.5 text-emerald-300 font-semibold text-xs group-hover:text-emerald-200">
                                                Eksplorasi <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                <!-- 3. Es Jagung dan Ubi Ungu (Kanan Bawah) -->
                                <a href="{{ route('publik.potensi-jagung.show', $esJagung->slug) }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500 h-48 flex flex-col">
                                    <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 via-purple-900/10 to-transparent z-10 transition-opacity duration-300 group-hover:opacity-90"></div>
                                    
                                    @if($esJagung->thumbnail)
                                        <img src="{{ Storage::url($esJagung->thumbnail) }}" alt="{{ $esJagung->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    @endif
                                    
                                    <div class="relative z-20 mt-auto p-5">
                                        <div class="transform group-hover:-translate-y-1 transition-transform duration-300">
                                            <h4 class="text-lg font-bold text-white mb-1">{{ $esJagung->title }}</h4>
                                            <span class="inline-flex items-center gap-1.5 text-purple-300 font-semibold text-xs group-hover:text-purple-200">
                                                Eksplorasi <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @else
                            <div class="col-span-full py-12 text-center bg-white rounded-2xl border border-emerald-100 shadow-sm">
                                <div class="mb-3 text-amber-300 flex justify-center"><span class="text-5xl">🌽</span></div>
                                <p class="text-gray-500 font-medium">Belum ada produk olahan jagung atau thumbnail belum diatur.</p>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>


    

    <!-- ===== PENGUMUMAN RECENT ===== -->
    <section class="py-16 bg-white" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Pengumuman list -->
                <div class="lg:col-span-2" data-aos="fade-right">
                    <div class="flex items-end justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Pengumuman Terbaru</h2>
                        <a href="{{ route('publik.pengumuman.index') }}" class="text-green-600 hover:text-green-700 text-sm font-medium">Lihat Semua →</a>
                    </div>
                    <div class="space-y-3">
                        @if(isset($pengumumans) && $pengumumans->isNotEmpty())
                            @foreach ($pengumumans as $p)
                            <a href="{{ route('publik.pengumuman.show', $p->slug) }}" class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-green-200 hover:bg-green-50 transition-all duration-200 group">
                                <div class="w-10 h-10 bg-gray-100 group-hover:bg-green-100 text-gray-400 group-hover:text-green-600 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-semibold text-gray-900 text-sm leading-snug mb-1 truncate">{{ $p->title }}</p>
                                    <p class="text-xs text-gray-400">{{ $p->created_at->format('d M Y') }}</p>
                                </div>
                                @if($p->expired_at && \Carbon\Carbon::parse($p->expired_at)->isPast())
                                    <span class="flex-shrink-0 text-xs font-medium px-2.5 py-1 rounded-full bg-red-100 text-red-700">Kedaluwarsa</span>
                                @else
                                    <span class="flex-shrink-0 text-xs font-medium px-2.5 py-1 rounded-full bg-green-100 text-green-700">Aktif</span>
                                @endif
                            </a>
                            @endforeach
                        @else
                            <div class="py-8 text-center bg-gray-50 rounded-2xl border border-gray-100">
                                <p class="text-gray-500 text-sm">Belum ada pengumuman terbaru.</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Map / Info panel -->
                <div data-aos="fade-left">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Lokasi Balai Desa</h3>
                    <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm bg-gray-100 h-52 flex items-center justify-center mb-4">
                        @if(isset($pengaturan) && $pengaturan->maps_embed)
                            <div class="w-full h-full">
                                {!! $pengaturan->maps_embed !!}
                            </div>
                        @else
                            <div class="text-center text-gray-400 p-6">
                                <svg class="w-12 h-12 mx-auto mb-2 text-green-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                                <p class="text-sm font-medium text-gray-500">Peta belum dikonfigurasi</p>
                                <p class="text-xs text-gray-400 mt-1">{{ $pengaturan->address ?? 'Alamat belum diatur' }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="bg-green-50 rounded-xl p-4 border border-green-100">
                        <h4 class="text-sm font-bold text-green-800 mb-2 flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Jam Pelayanan</h4>
                        <div class="prose prose-sm prose-green">
                            @if(isset($pengaturan) && is_array($pengaturan->operating_hours))
                                <div class="space-y-1.5 text-xs text-green-700">
                                    <div class="flex justify-between"><span>Senin – Kamis</span><span class="font-medium">{{ $pengaturan->operating_hours['senin_kamis'] ?? '07.30 - 14.00 WIB' }}</span></div>
                                    <div class="flex justify-between"><span>Jumat</span><span class="font-medium">{{ $pengaturan->operating_hours['jumat'] ?? '07.30 - 11.00 WIB' }}</span></div>
                                    <div class="flex justify-between"><span>Sabtu</span><span class="font-medium">{{ $pengaturan->operating_hours['sabtu'] ?? '07.30 - 12.30 WIB' }}</span></div>
                                    <div class="flex justify-between text-gray-400"><span>Minggu</span><span>Tutup</span></div>
                                </div>
                            @elseif(isset($pengaturan) && $pengaturan->operating_hours)
                                {!! $pengaturan->operating_hours !!}
                            @else
                                <div class="space-y-1.5 text-xs text-green-700">
                                    <div class="flex justify-between"><span>Senin – Kamis</span><span class="font-medium">08.00 – 15.00</span></div>
                                    <div class="flex justify-between"><span>Jumat</span><span class="font-medium">08.00 – 11.00</span></div>
                                    <div class="flex justify-between text-gray-400"><span>Sabtu – Minggu</span><span>Tutup</span></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== POPUP PENGUMUMAN ===== -->
    @if(isset($popup_pengumuman))
    <div id="announcementPopup" class="fixed inset-0 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300 z-[9999]">
        <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full relative overflow-hidden transform scale-95 transition-transform duration-300 popup-content">
            <!-- Close Button -->
            <button onclick="closePopup({{ $popup_pengumuman->id }})" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-black/50 hover:bg-black/70 text-white rounded-full transition-colors z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <!-- Image/Poster -->
            @if($popup_pengumuman->attachment)
                <img src="{{ Storage::url($popup_pengumuman->attachment) }}" alt="{{ $popup_pengumuman->title }}" class="w-full max-h-[60vh] object-contain bg-gray-100">
            @else
                <div class="h-32 bg-amber-500 flex items-center justify-center">
                    <span class="text-white"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg></span>
                </div>
            @endif

            <!-- Content -->
            <div class="p-6">
                <div class="flex items-center gap-2 text-xs font-semibold text-amber-600 mb-2 uppercase tracking-wide">
                    Pengumuman Penting
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $popup_pengumuman->title }}</h3>
                <div class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3">
                    {!! strip_tags($popup_pengumuman->content) !!}
                </div>
                
                <a href="{{ route('publik.pengumuman.show', $popup_pengumuman->slug) }}" class="block w-full py-3 px-4 bg-green-600 hover:bg-green-700 text-white text-center font-medium rounded-xl transition-colors">
                    Baca Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const popupId = 'popup_dismissed_' + {{ $popup_pengumuman->id }};
            const popupEl = document.getElementById('announcementPopup');
            const popupContent = popupEl.querySelector('.popup-content');
            
            // If not dismissed in this session, show it
            if (!sessionStorage.getItem(popupId)) {
                // Remove hidden class to display block, then fade in slightly after
                popupEl.classList.remove('hidden');
                setTimeout(() => {
                    popupEl.classList.remove('opacity-0');
                    popupContent.classList.remove('scale-95');
                    popupContent.classList.add('scale-100');
                }, 50);
            }
        });

        function closePopup(id) {
            const popupId = 'popup_dismissed_' + id;
            sessionStorage.setItem(popupId, 'true');
            
            const popupEl = document.getElementById('announcementPopup');
            const popupContent = popupEl.querySelector('.popup-content');
            
            // Fade out
            popupEl.classList.add('opacity-0');
            popupContent.classList.remove('scale-100');
            popupContent.classList.add('scale-95');
            
            setTimeout(() => {
                popupEl.classList.add('hidden');
            }, 300);
        }
    </script>
    @endif

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll('.count-up');
            const speed = 100;

            const animateCounters = () => {
                const duration = 2000;
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const startTime = performance.now();
                    
                    const updateCount = (currentTime) => {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const easeOut = 1 - Math.pow(1 - progress, 3);
                        
                        counter.innerText = Math.floor(easeOut * target);
                        
                        if (progress < 1) {
                            requestAnimationFrame(updateCount);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    requestAnimationFrame(updateCount);
                });
            }
            
            if(window.IntersectionObserver) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if(entry.isIntersecting) {
                            animateCounters();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                const statsSection = document.querySelector('.grid.grid-cols-2.md\\:grid-cols-4');
                if(statsSection) observer.observe(statsSection);
            } else {
                animateCounters();
            }
        });
    </script>
</x-publik-layout>

