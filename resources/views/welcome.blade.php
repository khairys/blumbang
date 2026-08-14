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
                </div>

            </div>
        </div>

        <!-- Wave - fills gap seamlessly -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>

    <!-- ===== MENGENAL DESA BLUMBANG ===== -->
    <section class="py-24 bg-white relative overflow-hidden" data-aos="fade-up">
        <!-- Subtle background element -->
        <div class="absolute -left-20 top-20 w-72 h-72 bg-emerald-50 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute right-0 bottom-0 w-96 h-96 bg-green-50 rounded-full blur-3xl opacity-50 translate-x-1/3 translate-y-1/3"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-8 tracking-tight">Mengenal Desa Blumbang</h2>
            <div class="text-gray-600 text-lg leading-relaxed space-y-5 mb-12">
                <p>
                    Desa Blumbang merupakan salah satu desa di Kecamatan Klego, Kabupaten Boyolali, Jawa Tengah. Desa Blumbang memiliki dua wilayah dusun, yaitu Dukuh Blumbang dan Dukuh Glagahombo.
                </p>
                <p>
                    Masyarakat Desa Blumbang memiliki berbagai potensi di bidang pertanian, peternakan, usaha, dan kerajinan yang menjadi bagian dari kehidupan serta perekonomian masyarakat desa. Kenali lebih dekat sejarah, wilayah, pemerintahan, masyarakat, dan berbagai potensi Desa Blumbang.
                </p>
            </div>
            <a href="{{ route('publik.profil') }}" class="group relative inline-flex items-center gap-2 bg-gradient-to-r from-green-600 to-emerald-600 text-white font-bold px-9 py-4 rounded-full overflow-hidden shadow-lg shadow-green-600/30 hover:shadow-green-600/50 transition-all duration-300 hover:-translate-y-1">
                <span class="absolute inset-0 bg-white/20 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out"></span>
                <span class="relative z-10">Kenali Desa Blumbang</span>
                <svg class="w-5 h-5 relative z-10 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>

    <!-- ===== PENGUMUMAN TERBARU ===== -->
    <section class="py-16 bg-gray-50 border-y border-gray-100" data-aos="fade-up">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">Pengumuman Terbaru</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Informasi dan pemberitahuan terbaru dari Pemerintah Desa Blumbang untuk masyarakat.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                @if(isset($pengumumans) && $pengumumans->isNotEmpty())
                    @foreach ($pengumumans->take(3) as $p)
                    <a href="{{ route('publik.pengumuman.show', $p->slug) }}" class="flex flex-col bg-white p-7 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-emerald-900/5 hover:border-emerald-200 transition-all duration-500 group hover:-translate-y-1">
                        <div class="mb-4 flex justify-between items-start">
                            @php
                                $statusClass = 'bg-emerald-100 text-emerald-700';
                                if($p->activity_status === 'mendatang') $statusClass = 'bg-blue-100 text-blue-700';
                                if($p->activity_status === 'selesai') $statusClass = 'bg-gray-100 text-gray-600';
                            @endphp
                            <span class="text-[10px] font-bold uppercase tracking-wider px-3 py-1.5 rounded-full {{ $statusClass }}">
                                {{ ucfirst($p->activity_status ?? 'Aktif') }}
                            </span>
                            <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:bg-emerald-50 group-hover:text-emerald-600 transition-colors">
                                <svg class="w-4 h-4 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                        <h3 class="font-bold text-gray-900 text-xl mb-3 group-hover:text-emerald-600 transition-colors leading-snug">{{ $p->title }}</h3>
                        <p class="text-sm text-gray-500 mb-5 line-clamp-2 leading-relaxed flex-grow">{!! strip_tags($p->content) !!}</p>
                        <div class="pt-4 border-t border-gray-50 flex items-center justify-between">
                            <p class="text-xs font-semibold text-gray-400 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                {{ $p->published_at ? \Carbon\Carbon::parse($p->published_at)->format('d M Y') : $p->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </a>
                    @endforeach
                @else
                    <div class="col-span-full py-8 text-center bg-white rounded-2xl border border-gray-100">
                        <p class="text-gray-500 font-medium">Belum ada pengumuman.</p>
                    </div>
                @endif
            </div>

            <div class="text-center">
                <a href="{{ route('publik.pengumuman.index') }}" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-bold transition-colors">
                    Lihat Semua Pengumuman
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== LAYANAN PUBLIK ===== -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Layanan Publik</h2>
                <p class="text-gray-500 max-w-2xl mx-auto text-lg">Temukan informasi mengenai persyaratan dan dokumen yang perlu disiapkan sebelum mengurus layanan di Kantor Desa Blumbang.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                @if(isset($groupedLayanans) && $groupedLayanans->isNotEmpty())
                    @foreach($groupedLayanans as $kategori => $layanans)
                        <a href="{{ route('publik.layanan.kategori', Str::slug($kategori)) }}" class="group bg-white rounded-3xl p-8 border border-gray-100 hover:border-emerald-300 hover:shadow-2xl hover:shadow-emerald-900/10 transition-all duration-500 relative overflow-hidden flex flex-col h-full hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                            <!-- Decorative blob -->
                            <div class="absolute -right-12 -top-12 w-32 h-32 bg-gradient-to-br from-emerald-50 to-green-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-700 ease-out"></div>
                            
                            <div class="relative z-10 flex items-center justify-between mb-8">
                                <h3 class="text-2xl font-extrabold text-gray-900 group-hover:text-emerald-700 transition-colors">{{ $kategori }}</h3>
                                <div class="w-10 h-10 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm group-hover:shadow-md">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-0.5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </div>
                            </div>
                            
                            <ul class="space-y-4 mb-8 w-full flex-1 relative z-10">
                                @foreach($layanans as $layanan)
                                    <li class="flex items-start gap-3 text-gray-600 text-sm font-medium group/item hover:text-emerald-700 transition-colors">
                                        <div class="mt-0.5 p-1 bg-gray-50 rounded-full group-hover/item:bg-emerald-100 transition-colors">
                                            <svg class="w-3 h-3 text-gray-400 group-hover/item:text-emerald-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/></svg>
                                        </div>
                                        <span class="transform group-hover/item:translate-x-1 transition-transform duration-300">{{ $layanan->title }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </a>
                    @endforeach
                @else
                    <div class="col-span-full py-10 text-center rounded-2xl border border-gray-100">
                        <p class="text-gray-500 font-medium">Belum ada layanan publik yang ditambahkan.</p>
                    </div>
                @endif
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('publik.layanan.index') }}" class="inline-flex items-center gap-2 bg-emerald-100 text-emerald-700 hover:bg-emerald-200 hover:text-emerald-800 font-bold px-8 py-3.5 rounded-full transition-colors">
                    Lihat Semua Layanan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== BERITA DESA ===== -->
    <section class="py-20 bg-gray-50 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Berita Desa</h2>
                <p class="text-gray-500 max-w-2xl mx-auto text-lg">Ikuti berbagai kegiatan dan perkembangan terbaru yang berlangsung di Desa Blumbang.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="100">
                @if(isset($beritas) && $beritas->isNotEmpty())
                    @foreach ($beritas as $b)
                    <a href="{{ route('publik.berita.show', $b->slug) }}" class="block bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-green-900/5 transition-all duration-500 hover:-translate-y-2 group">
                        <!-- Thumbnail -->
                        <div class="h-56 bg-gradient-to-br from-green-800 to-emerald-600 relative overflow-hidden">
                            @if ($b->thumbnail)
                            <img src="{{ Storage::url($b->thumbnail) }}" alt="{{ $b->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                            <div class="absolute inset-0 flex items-center justify-center opacity-20 group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            </div>
                            @endif
                            <div class="absolute top-4 left-4">
                                <span class="bg-white/95 backdrop-blur-md text-green-700 text-xs font-extrabold px-3 py-1.5 rounded-full shadow-sm uppercase tracking-wide">
                                    {{ $b->category ? $b->category->name : 'Kesehatan' }}
                                </span>
                            </div>
                        </div>

                        <div class="p-7 flex flex-col h-full relative">
                            <p class="text-xs text-gray-400 font-semibold mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                {{ $b->created_at->format('d F Y') }}
                            </p>
                            <h3 class="font-bold text-gray-900 text-xl mb-4 leading-snug line-clamp-2 group-hover:text-green-600 transition-colors">{{ $b->title }}</h3>
                            <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-6">{{ $b->summary }}</p>
                            
                            <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between">
                                <span class="inline-flex items-center gap-1.5 text-green-600 group-hover:text-green-700 text-sm font-bold transition-colors">
                                    Baca Selengkapnya
                                </span>
                                <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-600 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                @else
                <div class="col-span-full py-8 text-center bg-white rounded-2xl border border-gray-100">
                    <p class="text-gray-500">Belum ada berita terbaru.</p>
                </div>
                @endif
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('publik.berita.index') }}" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-bold transition-colors">
                    Lihat Semua Berita
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== POTENSI DESA ===== -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Potensi Desa Blumbang</h2>
                <p class="text-gray-500 max-w-2xl mx-auto text-lg">Desa Blumbang memiliki berbagai potensi yang berasal dari sumber daya alam, pertanian, peternakan, kerajinan, dan kegiatan usaha masyarakat.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" data-aos="fade-up" data-aos-delay="100">
                @if(isset($potensi_desa) && $potensi_desa->isNotEmpty())
                    @foreach ($potensi_desa as $pot)
                    <a href="{{ route('publik.potensi-desa.show', $pot->slug) }}" class="block rounded-3xl overflow-hidden border border-gray-100 shadow-sm bg-gray-50 hover:bg-white hover:shadow-xl hover:shadow-emerald-900/5 hover:-translate-y-2 hover:border-emerald-200 transition-all duration-500 group p-8 relative">
                        <div class="absolute top-0 right-0 p-6 opacity-0 group-hover:opacity-100 transform translate-x-4 group-hover:translate-x-0 transition-all duration-300">
                            <svg class="w-6 h-6 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                        <div class="w-16 h-16 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white group-hover:scale-110 group-hover:-rotate-3 transition-all duration-500 shadow-sm">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-extrabold text-2xl text-gray-900 mb-3 group-hover:text-emerald-700 transition-colors">{{ $pot->title }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ $pot->summary }}</p>
                    </a>
                    @endforeach
                @else
                    <div class="col-span-full py-10 text-center bg-gray-50 rounded-2xl border border-gray-100 shadow-sm">
                        <p class="text-gray-500 font-medium">Belum ada potensi desa yang ditambahkan.</p>
                    </div>
                @endif
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('publik.potensi-desa.index') }}" class="inline-flex items-center gap-2 bg-emerald-600 text-white hover:bg-emerald-700 font-bold px-8 py-3.5 rounded-full transition-colors shadow-lg shadow-emerald-600/30">
                    Jelajahi Potensi Desa
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== POTENSI JAGUNG HIGHLIGHT ===== -->
    <section class="py-24 relative overflow-hidden bg-gradient-to-br from-amber-50 to-white" data-aos="fade-up">
        <!-- Wave top -->
        <div class="absolute top-[-1px] left-0 right-0 transform rotate-180" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#ffffff"/>
            </svg>
        </div>

        <div class="absolute -right-64 -top-64 w-[500px] h-[500px] bg-amber-200/40 rounded-full blur-3xl -z-10"></div>
        <div class="absolute -left-64 -bottom-64 w-[500px] h-[500px] bg-yellow-200/40 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                <!-- Text Content (Left) -->
                <div class="lg:col-span-5 relative z-10">

                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Potensi Jagung<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 to-yellow-600">Desa Blumbang</span>
                    </h2>
                    
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Jagung merupakan salah satu hasil pertanian Desa Blumbang yang memiliki potensi untuk dikembangkan menjadi berbagai produk pangan.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-10">
                        Melalui pengolahan dan inovasi, jagung dapat dimanfaatkan menjadi berbagai kreasi pangan lokal yang memiliki nilai tambah serta mendukung pemanfaatan bahan pangan yang tersedia di lingkungan masyarakat.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('publik.potensi-jagung.index') }}" class="inline-flex justify-center items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold px-8 py-4 rounded-xl transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-amber-500/30">
                            Jelajahi Potensi Jagung
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Product Grid (Right) -->
                <div class="lg:col-span-7 relative z-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 h-full" data-aos="fade-left" data-aos-delay="100">
                        @php
                            $featured = isset($potensi_jagung) ? $potensi_jagung->where('title', 'Bubur Jagung')->first() : null;
                            $cornRibs = isset($potensi_jagung) ? $potensi_jagung->where('title', 'Corn Ribs')->first() : null;
                            $esJagung = isset($potensi_jagung) ? $potensi_jagung->where('title', 'Es Jagung dan Ubi Ungu')->first() : null;
                        @endphp

                        @if($featured && $cornRibs && $esJagung)
                            <!-- 1. Featured: Bubur Jagung (Besar, Kiri) -->
                            <a href="{{ route('publik.potensi-jagung.show', $featured->slug) }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-500 sm:row-span-2 min-h-[380px] flex flex-col border border-white">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/95 via-gray-900/40 to-transparent z-10 transition-opacity duration-300"></div>
                                
                                @if($featured->thumbnail)
                                    <img src="{{ Storage::url($featured->thumbnail) }}" alt="{{ $featured->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                @endif
                                
                                <div class="absolute top-5 left-5 z-20">
                                    <span class="bg-amber-500 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1.5">
                                        ⭐ Produk Unggulan
                                    </span>
                                </div>
                                
                                <div class="relative z-20 mt-auto p-6">
                                    <h3 class="text-3xl font-extrabold text-white mb-3 leading-tight">{{ $featured->title }}</h3>
                                    <p class="text-gray-200 text-sm line-clamp-3 mb-5 leading-relaxed">{{ $featured->summary }}</p>
                                    <span class="inline-flex items-center gap-1.5 bg-white/20 hover:bg-white/30 backdrop-blur-md px-4 py-2 rounded-lg text-white font-semibold text-sm transition-colors">
                                        Lihat Produk <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </span>
                                </div>
                            </a>

                            <div class="flex flex-col gap-6">
                                <!-- 2. Corn Ribs (Kanan Atas) -->
                                <a href="{{ route('publik.potensi-jagung.show', $cornRibs->slug) }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex-1 flex flex-col min-h-[180px] border border-white">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent z-10"></div>
                                    
                                    @if($cornRibs->thumbnail)
                                        <img src="{{ Storage::url($cornRibs->thumbnail) }}" alt="{{ $cornRibs->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    @endif
                                    
                                    <div class="relative z-20 mt-auto p-5">
                                        <h4 class="text-xl font-bold text-white mb-2">{{ $cornRibs->title }}</h4>
                                        <p class="text-gray-300 text-xs line-clamp-2 mb-3">{{ $cornRibs->summary }}</p>
                                        <span class="inline-flex items-center gap-1 text-amber-400 font-bold text-xs group-hover:text-amber-300 transition-colors">
                                            Jelajahi <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </span>
                                    </div>
                                </a>

                                <!-- 3. Es Jagung dan Ubi Ungu (Kanan Bawah) -->
                                <a href="{{ route('publik.potensi-jagung.show', $esJagung->slug) }}" class="group relative bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex-1 flex flex-col min-h-[180px] border border-white">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent z-10"></div>
                                    
                                    @if($esJagung->thumbnail)
                                        <img src="{{ Storage::url($esJagung->thumbnail) }}" alt="{{ $esJagung->title }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    @endif
                                    
                                    <div class="relative z-20 mt-auto p-5">
                                        <h4 class="text-xl font-bold text-white mb-2">{{ $esJagung->title }}</h4>
                                        <p class="text-gray-300 text-xs line-clamp-2 mb-3">{{ $esJagung->summary }}</p>
                                        <span class="inline-flex items-center gap-1 text-amber-400 font-bold text-xs group-hover:text-amber-300 transition-colors">
                                            Jelajahi <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- Wave bottom -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>

    <!-- ===== KUNJUNGI KANTOR DESA ===== -->
    <section class="py-20 bg-white" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Info panel -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Kunjungi Kantor Desa Blumbang</h2>
                    
                    <div class="space-y-8">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                Jam Pelayanan
                            </h3>
                            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                                <ul class="space-y-3 text-sm text-gray-700">
                                    <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                                        <span class="font-semibold">Senin–Kamis</span>
                                        <span>07.30–14.00 WIB</span>
                                    </li>
                                    <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                                        <span class="font-semibold">Jumat</span>
                                        <span>07.30–11.00 WIB</span>
                                    </li>
                                    <li class="flex justify-between items-center border-b border-gray-200 pb-3">
                                        <span class="font-semibold">Sabtu</span>
                                        <span>07.30–12.30 WIB</span>
                                    </li>
                                    <li class="flex justify-between items-center">
                                        <span class="font-semibold text-gray-400">Minggu</span>
                                        <span class="text-red-500 font-bold">Tutup</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Alamat Kantor Desa
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                {{ $pengaturan->address ?? 'Dk, Jalan, Jl. Raya Klego-Simo No.Km. 1, Blumbang Kidul, Blumbang, Kec. Klego, Kabupaten Boyolali, Jawa Tengah 57385' }}
                            </p>
                            <a href="https://maps.app.goo.gl/YkemhwdYr4gVPTrS7" target="_blank" class="inline-flex items-center gap-2 text-green-600 hover:text-green-700 font-bold transition-colors">
                                Lihat Lokasi di Google Maps
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="rounded-3xl overflow-hidden border border-gray-200 shadow-xl bg-gray-100 h-[400px] flex items-center justify-center">
                    @if(isset($pengaturan) && $pengaturan->maps_embed)
                        <div class="w-full h-full">
                            {!! $pengaturan->maps_embed !!}
                        </div>
                    @else
                        <div class="text-center text-gray-400 p-6">
                            <svg class="w-16 h-16 mx-auto mb-3 text-green-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            <p class="font-medium text-gray-500">Peta belum dikonfigurasi</p>
                        </div>
                    @endif
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
                
                const statsSection = document.querySelector('.grid.grid-cols-2.md\\:grid-cols-5');
                if(statsSection) observer.observe(statsSection);
            } else {
                animateCounters();
            }
        });
    </script>
</x-publik-layout>
