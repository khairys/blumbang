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
                        {{ $pengaturan?->website_description ?? 'Portal Informasi resmi Desa Blumbang sebagai media digitalisasi desa dan transparansi pelayanan publik.' }}
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="{{ route('publik.layanan.index') }}"
                           class="inline-flex items-center gap-2.5 bg-green-500 hover:bg-green-400 text-white font-semibold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-green-500/30 transition-all duration-200 hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            Layanan Publik
                        </a>
                        <a href="{{ route('publik.profil') }}"
                           class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white font-medium px-6 py-3.5 rounded-xl transition-all duration-200 hover:-translate-y-0.5">
                            Profil Desa
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>

                    <!-- Stats -->
                    <!-- Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12 pt-10 border-t border-white/10">
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                            <p class="text-3xl font-bold text-white">{{ $profil?->stat_penduduk ? preg_replace('/[^0-9]/', '', $profil->stat_penduduk) : '2.847' }}</p>
                            <p class="text-green-300 text-sm mt-1">Jiwa Penduduk</p>
                        </div>
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                            <p class="text-3xl font-bold text-white">{{ $profil?->stat_rt ? preg_replace('/[^0-9]/', '', $profil->stat_rt) : '24' }}</p>
                            <p class="text-green-300 text-sm mt-1">Total RT</p>
                        </div>
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                            <p class="text-3xl font-bold text-white">{{ $profil?->stat_rw ? preg_replace('/[^0-9]/', '', $profil->stat_rw) : '6' }}</p>
                            <p class="text-green-300 text-sm mt-1">Total RW</p>
                        </div>
                        <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                            <p class="text-3xl font-bold text-white">{{ $profil?->stat_luas_wilayah ? preg_replace('/[^0-9]/', '', $profil->stat_luas_wilayah) : '154' }}</p>
                            <p class="text-green-300 text-sm mt-1">Hektar Wilayah</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 80L1440 80L1440 40C1200 80 960 0 720 20C480 40 240 80 0 40L0 80Z" fill="#f9fafb"/>
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
                    <article class="card-hover bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
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
                            <h3 class="font-bold text-gray-900 mb-2 leading-snug line-clamp-2"><a href="{{ route('publik.berita.show', $b->slug) }}" class="hover:text-green-600">{{ $b->title }}</a></h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">{{ $b->summary }}</p>
                            <div class="mt-auto pt-2">
                                <a href="{{ route('publik.berita.show', $b->slug) }}" class="inline-flex items-center gap-1 text-green-600 hover:text-green-700 text-sm font-medium transition-colors">
                                    Baca Selengkapnya
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </article>
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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5" data-aos="fade-up" data-aos-delay="100">
                @if(isset($layanans) && $layanans->isNotEmpty())
                    @foreach ($layanans as $l)
                    <div class="card-hover bg-gray-50 hover:bg-white rounded-2xl p-6 border border-gray-100 hover:border-green-200 hover:shadow-md transition-all duration-200">
                        <div class="mb-4 text-green-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                        <h3 class="font-bold text-gray-900 text-sm mb-2 line-clamp-2">{{ $l->title }}</h3>
                        <p class="text-xs text-gray-500 mb-4 line-clamp-3">{{ strip_tags($l->description) }}</p>
                        <a href="{{ route('publik.layanan.index') }}" class="text-xs font-semibold text-green-600 hover:text-green-700 flex items-center gap-1 transition-colors">
                            Lihat Syarat
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
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
                    <div class="card-hover rounded-2xl overflow-hidden border border-green-100 shadow-sm bg-white">
                        <div class="h-36 bg-gradient-to-br from-green-700 to-emerald-600 flex items-center justify-center relative">
                            @if($pot->thumbnail)
                            <img src="{{ Storage::url($pot->thumbnail) }}" alt="{{ $pot->title }}" class="w-full h-full object-cover">
                            @else
                            <span class="text-white/60"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg></span>
                            @endif
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-gray-900 mb-2 line-clamp-1"><a href="{{ route('publik.potensi-desa.show', $pot->slug) }}" class="hover:text-green-600">{{ $pot->title }}</a></h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">{{ $pot->summary }}</p>
                        </div>
                    </div>
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
    <section class="py-16 bg-gradient-to-br from-emerald-50/50 to-stone-50/50" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text -->
                <div>
                    <div class="inline-flex items-center gap-1.5 bg-emerald-100 text-emerald-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg> Inovasi Program KKN
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Olahan Jagung<br><span class="text-emerald-600">Bergizi untuk Keluarga</span></h2>
                    <p class="text-gray-600 leading-relaxed mb-6">Desa Blumbang mengembangkan berbagai produk olahan jagung sebagai upaya nyata mencegah stunting. Produk kami kaya protein, vitamin, dan mineral penting untuk tumbuh kembang optimal anak-anak.</p>

                    <div class="grid grid-cols-2 gap-3 mb-8">
                        @foreach(['Bubur Jagung Instan','Roti Jagung Fortifikasi','Susu Jagung Manis','Camilan Jagung Bergizi'] as $p)
                        <div class="flex items-center gap-2.5 bg-white rounded-xl p-3 border border-emerald-100 shadow-sm">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span class="text-sm font-medium text-gray-700">{{ $p }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('publik.potensi-jagung.index') }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-200 hover:-translate-y-0.5 shadow-md hover:shadow-emerald-300">
                        Lihat Semua Produk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                <!-- Product Cards Grid -->
                <div class="grid grid-cols-2 gap-4" data-aos="fade-up" data-aos-delay="100">
                    @if(isset($potensi_jagung) && $potensi_jagung->isNotEmpty())
                        @foreach ($potensi_jagung as $p)
                        <div class="card-hover bg-white rounded-2xl p-5 border border-emerald-100 shadow-sm text-center">
                            @if($p->thumbnail)
                            <div class="w-16 h-16 mx-auto mb-3 rounded-xl overflow-hidden">
                                <img src="{{ Storage::url($p->thumbnail) }}" alt="{{ $p->title }}" class="w-full h-full object-cover">
                            </div>
                            @else
                            <div class="mb-3 border border-amber-50 rounded-xl bg-emerald-50 w-16 h-16 flex items-center justify-center mx-auto text-emerald-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                            </div>
                            @endif
                            <h4 class="font-bold text-gray-900 text-sm mb-1 line-clamp-1"><a href="{{ route('publik.potensi-jagung.show', $p->slug) }}" class="hover:text-emerald-600">{{ $p->title }}</a></h4>
                            <p class="text-xs text-gray-500 line-clamp-2">{{ $p->summary }}</p>
                        </div>
                        @endforeach
                    @else
                        <!-- Empty State -->
                        <div class="col-span-2 py-10 text-center bg-emerald-50 rounded-2xl border border-emerald-100">
                            <div class="mb-3 text-gray-400 flex justify-center"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg></div>
                            <p class="text-gray-500 font-medium">Belum ada produk olahan jagung.</p>
                        </div>
                    @endif
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
                            @if(isset($pengaturan) && $pengaturan->operating_hours)
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

    <!-- ===== CALL TO ACTION ===== -->
    <section class="py-16 bg-gradient-to-br from-green-800 to-emerald-700" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-4 flex justify-center text-emerald-200"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
            <h2 class="text-3xl font-bold text-white mb-4">Mari Bersama Membangun Desa Blumbang</h2>
            <p class="text-green-200 mb-8 max-w-xl mx-auto">Kami terus berinovasi memberikan pelayanan terbaik dan mengembangkan potensi lokal untuk kesejahteraan masyarakat Desa Blumbang.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('publik.layanan.index') }}" class="bg-white text-green-800 hover:bg-gray-50 font-semibold px-8 py-3.5 rounded-xl shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                    Lihat Layanan Publik
                </a>
                <a href="{{ route('publik.profil') }}" class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/30 text-white font-medium px-8 py-3.5 rounded-xl transition-all duration-200 hover:-translate-y-0.5">
                    Jelajahi Profil Desa
                </a>
            </div>
        </div>
    </section>

    <!-- ===== POPUP PENGUMUMAN ===== -->
    @if(isset($popup_pengumuman))
    <div id="announcementPopup" class="fixed inset-0 z-[9999] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
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
</x-publik-layout>
