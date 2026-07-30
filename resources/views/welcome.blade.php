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

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-green-500/20 backdrop-blur-sm border border-green-400/30 text-green-300 text-xs font-semibold px-4 py-2 rounded-full mb-6">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        Website Resmi Desa Blumbang
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                        Selamat Datang di<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 to-green-200">Desa Blumbang</span>
                    </h1>

                    <p class="text-green-100 text-lg leading-relaxed mb-8 max-w-lg">
                        Media digitalisasi informasi desa dan edukasi produk olahan jagung dalam upaya pencegahan stunting untuk masyarakat yang lebih sehat dan sejahtera.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('publik.potensi-jagung.index') }}"
                           class="inline-flex items-center gap-2.5 bg-amber-500 hover:bg-amber-400 text-white font-semibold px-6 py-3.5 rounded-xl shadow-lg hover:shadow-amber-500/30 transition-all duration-200 hover:-translate-y-0.5">
                            🌽 Produk Jagung
                        </a>
                        <a href="{{ route('publik.profil') }}"
                           class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white font-medium px-6 py-3.5 rounded-xl transition-all duration-200 hover:-translate-y-0.5">
                            Profil Desa
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mt-12 pt-10 border-t border-white/10">
                        <div class="stat-item">
                            <p class="text-3xl font-bold text-white">2.847</p>
                            <p class="text-green-300 text-sm mt-1">Jiwa Penduduk</p>
                        </div>
                        <div class="stat-item" style="animation-delay:.1s">
                            <p class="text-3xl font-bold text-white">8</p>
                            <p class="text-green-300 text-sm mt-1">RT/RW</p>
                        </div>
                        <div class="stat-item" style="animation-delay:.2s">
                            <p class="text-3xl font-bold text-white">12+</p>
                            <p class="text-green-300 text-sm mt-1">Produk Jagung</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Floating Cards -->
                <div class="hidden lg:block relative">
                    <!-- Main card -->
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-6 shadow-2xl">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-amber-400 rounded-xl flex items-center justify-center text-xl shadow">🌽</div>
                            <div>
                                <p class="font-semibold text-white text-sm">Program Unggulan</p>
                                <p class="text-green-300 text-xs">Pencegahan Stunting</p>
                            </div>
                        </div>
                        <p class="text-green-100 text-sm leading-relaxed">Desa Blumbang berkomitmen mengurangi angka stunting melalui edukasi gizi dan pengembangan produk olahan jagung bergizi tinggi.</p>
                        <div class="mt-4 flex gap-2">
                            <div class="flex-1 bg-green-500/20 rounded-lg p-3 text-center">
                                <p class="text-white font-bold text-lg">85%</p>
                                <p class="text-green-300 text-xs">Bebas Stunting</p>
                            </div>
                            <div class="flex-1 bg-amber-500/20 rounded-lg p-3 text-center">
                                <p class="text-white font-bold text-lg">12</p>
                                <p class="text-green-300 text-xs">Jenis Produk</p>
                            </div>
                            <div class="flex-1 bg-blue-500/20 rounded-lg p-3 text-center">
                                <p class="text-white font-bold text-lg">3</p>
                                <p class="text-green-300 text-xs">UMKM Aktif</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating badges -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-xl px-4 py-3 flex items-center gap-2">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-gray-800">Terverifikasi</p>
                            <p class="text-xs text-gray-500">Pem. Kab. Boyolali</p>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-amber-500 text-white rounded-xl shadow-xl px-4 py-3">
                        <p class="text-sm font-bold">🌽 Panen Jagung</p>
                        <p class="text-xs text-amber-100">Musim ini meningkat 23%</p>
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
    <section class="bg-amber-50 border-y border-amber-200 py-3 overflow-hidden">
        <div class="flex items-center">
            <div class="bg-amber-500 text-white text-xs font-bold px-4 py-1.5 flex-shrink-0 flex items-center gap-2 z-10">
                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" clip-rule="evenodd"/></svg>
                PENGUMUMAN
            </div>
            <div class="overflow-hidden flex-1 ml-4">
                <div class="marquee-track flex whitespace-nowrap gap-12 text-sm text-amber-900 font-medium">
                    <span>📢 Rapat rutin RT/RW dilaksanakan setiap Jumat pertama bulan ini di Balai Desa</span>
                    <span>🏥 Posyandu balita dijadwalkan tanggal 15 setiap bulan — hadir tepat waktu!</span>
                    <span>💧 Gotong royong saluran irigasi sawah — wajib hadir per kepala keluarga</span>
                    <span>🌽 Penyuluhan pengolahan jagung oleh Dinas Pertanian — Sabtu, 10 Agustus 2025</span>
                    <span>📢 Rapat rutin RT/RW dilaksanakan setiap Jumat pertama bulan ini di Balai Desa</span>
                    <span>🏥 Posyandu balita dijadwalkan tanggal 15 setiap bulan — hadir tepat waktu!</span>
                    <span>💧 Gotong royong saluran irigasi sawah — wajib hadir per kepala keluarga</span>
                    <span>🌽 Penyuluhan pengolahan jagung oleh Dinas Pertanian — Sabtu, 10 Agustus 2025</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FITUR UNGGULAN ===== -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                $fitur = [
                    ['icon' => '🏘️', 'label' => 'Profil Desa', 'color' => 'green', 'href' => route('publik.profil')],
                    ['icon' => '📰', 'label' => 'Berita Desa', 'color' => 'blue', 'href' => route('publik.berita.index')],
                    ['icon' => '📢', 'label' => 'Pengumuman', 'color' => 'amber', 'href' => route('publik.pengumuman.index')],
                    ['icon' => '🏡', 'label' => 'Potensi Desa', 'color' => 'emerald', 'href' => route('publik.potensi-desa.index')],
                    ['icon' => '🌽', 'label' => 'Olahan Jagung', 'color' => 'yellow', 'href' => route('publik.potensi-jagung.index')],
                    ['icon' => '📋', 'label' => 'Layanan Publik', 'color' => 'purple', 'href' => route('publik.layanan.index')],
                ];
                $colors = ['green'=>'bg-green-50 text-green-700 hover:bg-green-100','blue'=>'bg-blue-50 text-blue-700 hover:bg-blue-100','amber'=>'bg-amber-50 text-amber-700 hover:bg-amber-100','emerald'=>'bg-emerald-50 text-emerald-700 hover:bg-emerald-100','yellow'=>'bg-yellow-50 text-yellow-700 hover:bg-yellow-100','purple'=>'bg-purple-50 text-purple-700 hover:bg-purple-100'];
                @endphp
                @foreach ($fitur as $f)
                <a href="{{ $f['href'] }}" class="card-hover {{ $colors[$f['color']] }} rounded-2xl p-4 flex flex-col items-center gap-2 border border-transparent hover:border-current/10 transition-all duration-200">
                    <span class="text-3xl">{{ $f['icon'] }}</span>
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $beritas = [
                    ['kat' => 'Pertanian', 'warna' => 'green', 'judul' => 'Hasil Panen Jagung Meningkat 23% Berkat Program Bibit Unggul', 'ringkas' => 'Program bantuan bibit unggul dari Dinas Pertanian Boyolali berhasil meningkatkan produktivitas jagung di Desa Blumbang secara signifikan...', 'tgl' => '28 Jul 2025', 'bg' => 'from-green-800 to-emerald-600'],
                    ['kat' => 'Kesehatan', 'warna' => 'blue', 'judul' => 'Posyandu Blumbang Raih Penghargaan Terbaik Tingkat Kecamatan', 'ringkas' => 'Kader posyandu Desa Blumbang mendapat penghargaan atas konsistensi dalam program pemantauan tumbuh kembang balita selama 3 tahun berturut-turut...', 'tgl' => '25 Jul 2025', 'bg' => 'from-blue-800 to-blue-600'],
                    ['kat' => 'Infrastruktur', 'warna' => 'amber', 'judul' => 'Jalan Desa Sepanjang 2 Km Telah Selesai Diperbaiki', 'ringkas' => 'Perbaikan jalan dusun yang menghubungkan RT 03 ke jalan provinsi telah rampung dikerjakan. Pengerjaan menggunakan anggaran Dana Desa 2025...', 'tgl' => '20 Jul 2025', 'bg' => 'from-amber-700 to-yellow-600'],
                ];
                @endphp

                @foreach ($beritas as $i => $b)
                <article class="card-hover bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm">
                    <!-- Thumbnail dummy -->
                    <div class="h-48 bg-gradient-to-br {{ $b['bg'] }} relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center opacity-20">
                            <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                        </div>
                        <div class="absolute top-3 left-3">
                            <span class="bg-white/90 text-{{ $b['warna'] }}-700 text-xs font-bold px-2.5 py-1 rounded-full">{{ $b['kat'] }}</span>
                        </div>
                    </div>

                    <div class="p-5">
                        <p class="text-xs text-gray-400 mb-2">{{ $b['tgl'] }}</p>
                        <h3 class="font-bold text-gray-900 mb-2 leading-snug line-clamp-2">{{ $b['judul'] }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">{{ $b['ringkas'] }}</p>
                        <a href="{{ route('publik.berita.index') }}" class="inline-flex items-center gap-1 text-green-600 hover:text-green-700 text-sm font-medium mt-4 transition-colors">
                            Baca Selengkapnya
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== POTENSI JAGUNG HIGHLIGHT ===== -->
    <section class="py-16 bg-gradient-to-br from-amber-50 to-yellow-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text -->
                <div>
                    <div class="inline-flex items-center gap-2 bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-4">
                        🌽 Produk Unggulan Desa
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Olahan Jagung<br><span class="text-amber-600">Bergizi untuk Keluarga</span></h2>
                    <p class="text-gray-600 leading-relaxed mb-6">Desa Blumbang mengembangkan berbagai produk olahan jagung sebagai upaya nyata mencegah stunting. Produk kami kaya protein, vitamin, dan mineral penting untuk tumbuh kembang optimal anak-anak.</p>

                    <div class="grid grid-cols-2 gap-3 mb-8">
                        @foreach(['🥣 Bubur Jagung Instan','🍞 Roti Jagung Fortifikasi','🥤 Susu Jagung Manis','🍪 Camilan Jagung Bergizi'] as $p)
                        <div class="flex items-center gap-2.5 bg-white rounded-xl p-3 border border-amber-100 shadow-sm">
                            <span class="text-xl">{{ explode(' ', $p)[0] }}</span>
                            <span class="text-sm font-medium text-gray-700">{{ implode(' ', array_slice(explode(' ', $p), 1)) }}</span>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('publik.potensi-jagung.index') }}" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-200 hover:-translate-y-0.5 shadow-md hover:shadow-amber-300">
                        Lihat Semua Produk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>

                <!-- Product Cards Grid -->
                <div class="grid grid-cols-2 gap-4">
                    @php
                    $prods = [
                        ['emoji'=>'🥣','name'=>'Bubur Jagung','desc'=>'Kaya karbohidrat & serat, cocok untuk balita','color'=>'amber'],
                        ['emoji'=>'🍞','name'=>'Roti Jagung','desc'=>'Fortifikasi zat besi & vitamin A','color'=>'yellow'],
                        ['emoji'=>'🥤','name'=>'Susu Jagung','desc'=>'Protein tinggi, pengganti susu sapi','color'=>'orange'],
                        ['emoji'=>'🍪','name'=>'Snack Jagung','desc'=>'Camilan sehat rendah gula','color'=>'amber'],
                    ];
                    @endphp
                    @foreach ($prods as $p)
                    <div class="card-hover bg-white rounded-2xl p-5 border border-amber-100 shadow-sm text-center">
                        <div class="text-4xl mb-3">{{ $p['emoji'] }}</div>
                        <h4 class="font-bold text-gray-900 text-sm mb-1">{{ $p['name'] }}</h4>
                        <p class="text-xs text-gray-500">{{ $p['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LAYANAN PUBLIK ===== -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-green-600 font-semibold text-sm uppercase tracking-wider mb-2">Pelayanan Desa</p>
                <h2 class="text-3xl font-bold text-gray-900">Layanan Publik</h2>
                <p class="text-gray-500 mt-2 max-w-md mx-auto text-sm">Informasi mengenai syarat dan prosedur layanan administrasi Desa Blumbang</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                @php
                $layanans = [
                    ['icon'=>'📄','title'=>'Surat Keterangan Domisili','desc'=>'Keterangan tempat tinggal resmi di desa','warna'=>'blue'],
                    ['icon'=>'👶','title'=>'Surat Kelahiran','desc'=>'Pengantar akta kelahiran ke Disdukcapil','warna'=>'green'],
                    ['icon'=>'💒','title'=>'Surat Keterangan Belum Menikah','desc'=>'Untuk keperluan administrasi pernikahan','warna'=>'purple'],
                    ['icon'=>'🤝','title'=>'Surat Pengantar SKCK','desc'=>'Pengantar untuk pengurusan SKCK di Polres','warna'=>'amber'],
                ];
                @endphp
                @foreach ($layanans as $l)
                <div class="card-hover bg-gray-50 hover:bg-white rounded-2xl p-6 border border-gray-100 hover:border-green-200 hover:shadow-md transition-all duration-200">
                    <div class="text-3xl mb-4">{{ $l['icon'] }}</div>
                    <h3 class="font-bold text-gray-900 text-sm mb-2">{{ $l['title'] }}</h3>
                    <p class="text-xs text-gray-500 mb-4">{{ $l['desc'] }}</p>
                    <a href="{{ route('publik.layanan.index') }}" class="text-xs font-semibold text-green-600 hover:text-green-700 flex items-center gap-1 transition-colors">
                        Lihat Syarat
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== POTENSI DESA ===== -->
    <section class="py-16 bg-gradient-to-br from-green-50 to-emerald-50">
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

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @php
                $potensis = [
                    ['emoji'=>'🌾','title'=>'Pertanian Jagung','desc'=>'Lahan pertanian jagung seluas ±120 Ha yang menjadi komoditas utama mata pencaharian warga Desa Blumbang.','bg'=>'from-green-700 to-emerald-600'],
                    ['emoji'=>'🏞️','title'=>'Wisata Alam Perbukitan','desc'=>'Pemandangan perbukitan hijau dengan hamparan sawah terasering yang menjadi daya tarik wisata pedesaan.','bg'=>'from-emerald-700 to-teal-600'],
                    ['emoji'=>'🎭','title'=>'Seni Budaya Lokal','desc'=>'Kesenian tradisional seperti jathilan dan seni batik pewarna alami yang masih lestari di Desa Blumbang.','bg'=>'from-teal-700 to-cyan-600'],
                ];
                @endphp
                @foreach ($potensis as $pot)
                <div class="card-hover rounded-2xl overflow-hidden border border-green-100 shadow-sm bg-white">
                    <div class="h-36 bg-gradient-to-br {{ $pot['bg'] }} flex items-center justify-center">
                        <span class="text-6xl opacity-70">{{ $pot['emoji'] }}</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2">{{ $pot['title'] }}</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">{{ $pot['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== PENGUMUMAN RECENT ===== -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <!-- Pengumuman list -->
                <div class="lg:col-span-2">
                    <div class="flex items-end justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900">Pengumuman Terbaru</h2>
                        <a href="{{ route('publik.pengumuman.index') }}" class="text-green-600 hover:text-green-700 text-sm font-medium">Lihat Semua →</a>
                    </div>
                    <div class="space-y-3">
                        @php
                        $pngs = [
                            ['icon'=>'📅','title'=>'Jadwal Pembagian BLT Dana Desa Triwulan III','tgl'=>'28 Jul 2025','status'=>'Aktif','sc'=>'green'],
                            ['icon'=>'🏥','title'=>'Posyandu Balita — Selasa, 15 Agustus 2025','tgl'=>'25 Jul 2025','status'=>'Mendatang','sc'=>'blue'],
                            ['icon'=>'🌾','title'=>'Musyawarah Rencana Pembangunan Desa 2026','tgl'=>'20 Jul 2025','status'=>'Aktif','sc'=>'green'],
                            ['icon'=>'💧','title'=>'Gotong Royong Bersih Sungai & Saluran Air','tgl'=>'15 Jul 2025','status'=>'Selesai','sc'=>'gray'],
                        ];
                        @endphp
                        @foreach ($pngs as $p)
                        <a href="{{ route('publik.pengumuman.index') }}" class="flex items-start gap-4 p-4 rounded-xl border border-gray-100 hover:border-green-200 hover:bg-green-50 transition-all duration-200 group">
                            <div class="w-10 h-10 bg-gray-100 group-hover:bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors text-xl">
                                {{ $p['icon'] }}
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="font-semibold text-gray-900 text-sm leading-snug mb-1">{{ $p['title'] }}</p>
                                <p class="text-xs text-gray-400">{{ $p['tgl'] }}</p>
                            </div>
                            <span class="flex-shrink-0 text-xs font-medium px-2.5 py-1 rounded-full bg-{{ $p['sc'] }}-100 text-{{ $p['sc'] }}-700">{{ $p['status'] }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>

                <!-- Map / Info panel -->
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Lokasi Balai Desa</h3>
                    <div class="rounded-2xl overflow-hidden border border-gray-200 shadow-sm bg-gray-100 h-52 flex items-center justify-center mb-4">
                        <div class="text-center text-gray-400 p-6">
                            <svg class="w-12 h-12 mx-auto mb-2 text-green-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            <p class="text-sm font-medium text-gray-500">Google Maps akan<br>ditampilkan di sini</p>
                            <p class="text-xs text-gray-400 mt-1">Desa Blumbang, Klego<br>Boyolali, Jawa Tengah</p>
                        </div>
                    </div>
                    <div class="bg-green-50 rounded-xl p-4 border border-green-100">
                        <h4 class="text-sm font-bold text-green-800 mb-2">⏰ Jam Pelayanan</h4>
                        <div class="space-y-1.5 text-xs text-green-700">
                            <div class="flex justify-between"><span>Senin – Kamis</span><span class="font-medium">08.00 – 15.00</span></div>
                            <div class="flex justify-between"><span>Jumat</span><span class="font-medium">08.00 – 11.00</span></div>
                            <div class="flex justify-between text-gray-400"><span>Sabtu – Minggu</span><span>Tutup</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CALL TO ACTION ===== -->
    <section class="py-16 bg-gradient-to-br from-green-800 to-emerald-700">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="text-5xl mb-4">🌽</div>
            <h2 class="text-3xl font-bold text-white mb-4">Bersama Wujudkan Desa Blumbang yang Sehat dan Sejahtera</h2>
            <p class="text-green-200 mb-8 max-w-xl mx-auto">Bergabunglah dalam program pencegahan stunting melalui konsumsi produk olahan jagung bergizi tinggi dari Desa Blumbang.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('publik.potensi-jagung.index') }}" class="bg-amber-500 hover:bg-amber-400 text-white font-semibold px-8 py-3.5 rounded-xl shadow-lg transition-all duration-200 hover:-translate-y-0.5">
                    Kenali Produk Kami
                </a>
                <a href="{{ route('publik.profil') }}" class="bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/30 text-white font-medium px-8 py-3.5 rounded-xl transition-all duration-200 hover:-translate-y-0.5">
                    Tentang Desa Kami
                </a>
            </div>
        </div>
    </section>
</x-publik-layout>
