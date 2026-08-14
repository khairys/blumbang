<x-publik-layout>
    <x-slot name="title">Profil Desa</x-slot>

    <!-- Page Header -->
    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,<svg width=60 height=60 viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'><g fill=\'none\'><g fill=\'%23fff\' fill-opacity=\'1\'><path d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/></g></g></svg>')"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-4">
                <a href="{{ route('beranda') }}" class="hover:text-white font-medium transition-colors">Beranda</a> <span class="mx-2 text-emerald-300">/</span>
                <span class="text-white">Profil Desa</span>
            </nav>
            <h1 class="text-4xl font-extrabold text-white tracking-tight">Profil Desa Blumbang</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl">Kecamatan Klego, Kabupaten Boyolali, Jawa Tengah</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>

    <div class="bg-gray-50 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pb-24">
        <!-- Tab Navigation -->
        <div class="flex gap-2 flex-wrap mb-8 border-b border-gray-200 pb-0">
            <button onclick="showTab('sejarah')" id="tab-sejarah" class="tab-btn active-tab px-5 py-2.5 text-sm font-semibold border-b-2 border-green-600 text-green-700 -mb-px transition-all">Sejarah</button>
            <button onclick="showTab('pandang')" id="tab-pandang" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Selayang Pandang</button>
            <button onclick="showTab('visi')" id="tab-visi" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Visi & Misi</button>
            <button onclick="showTab('geografi')" id="tab-geografi" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Geografi</button>
            <button onclick="showTab('info')" id="tab-info" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Data & Statistik</button>
            <button onclick="showTab('struktur')" id="tab-struktur" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Struktur Organisasi</button>
        </div>

        <!-- Tab Content -->
        <div id="content-sejarah" class="tab-content">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Sejarah Desa Blumbang</h2>
                <div class="prose max-w-none text-gray-600 leading-relaxed space-y-4">
                    @if(isset($profil) && $profil->history)
                        {!! $profil->history !!}
                    @else
                        <p>Belum ada data sejarah desa.</p>
                    @endif
                </div>
            </div>
        </div>

        <div id="content-pandang" class="tab-content hidden">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Selayang Pandang</h2>
                <div class="prose max-w-none text-gray-600 leading-relaxed space-y-4 text-justify">
                    <p>Menurut cerita rakyat yang berkembang di masyarakat, wilayah Desa Blumbang pada masa dahulu merupakan kawasan hutan belantara. Di tengah kawasan tersebut terdapat banyak genangan air atau blumbang yang sering digunakan oleh hewan-hewan, termasuk badak atau warak, untuk berkubang. Keberadaan banyak blumbang tersebut kemudian dipercaya menjadi salah satu asal-usul nama Blumbang.</p>
                    <p>Pada masa terjadinya Perang Diponegoro, sekelompok orang datang dan menetap di kawasan hutan tersebut untuk mencari tempat berlindung. Salah seorang di antaranya adalah Arum Ginang, yang berasal dari Purwokerto. Pada masa itu, kawasan tersebut belum banyak dihuni oleh manusia karena masih berupa hutan dan dikenal sebagai tempat hidup berbagai hewan, termasuk badak atau warak.</p>
                    <p>Arum Ginang kemudian merasa nyaman tinggal di kawasan tersebut bersama para pengikutnya. Seiring berjalannya waktu, keberadaan manusia di kawasan tersebut semakin berkembang. Masyarakat mulai menetap dan memanfaatkan lahan untuk bercocok tanam, sementara hewan-hewan yang sebelumnya menghuni kawasan tersebut perlahan meninggalkan wilayah tersebut.</p>
                    <p>Kawasan permukiman yang semakin berkembang kemudian menjadi sebuah dukuh yang dikenal dengan nama Dukuh Blumbang. Nama tersebut dipercaya berasal dari banyaknya blumbang atau genangan air yang terdapat di wilayah tersebut.</p>
                    <p>Arum Ginang kemudian menetap di wilayah Blumbang hingga akhir hayatnya dan dimakamkan di kawasan tersebut. Karena dianggap sebagai salah satu tokoh awal yang datang dan menetap di wilayah Blumbang, makamnya kemudian dikenal sebagai Makam Arum Ginang. Hingga saat ini, makam tersebut masih dikunjungi oleh anak cucu dan keturunannya.</p>
                    <p>Seiring bertambahnya jumlah penduduk di Dukuh Blumbang, sebagian masyarakat kemudian mencari wilayah baru untuk bercocok tanam. Mereka bergerak ke arah timur Dukuh Blumbang, menuju kawasan yang memiliki kondisi tanah yang cenderung basah dan wilayah yang naik turun.</p>
                    <p>Di kawasan tersebut tumbuh banyak rumput yang oleh masyarakat setempat disebut glagah. Karena tanaman glagah tumbuh dalam jumlah yang luas, masyarakat kemudian menyebut kawasan tersebut sebagai Glagahombo, yang berasal dari kata glagah dan ombo dalam bahasa Jawa yang berarti luas.</p>
                    <p>Perkembangan permukiman di wilayah tersebut kemudian membentuk Dukuh Glagahombo, yang dalam perjalanan selanjutnya menjadi bagian dari wilayah Desa Blumbang bersama dengan Dukuh Blumbang.</p>
                </div>
            </div>
        </div>

        <div id="content-visi" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-green-700 text-white rounded-2xl p-8">
                    <h2 class="text-xl font-bold mb-4">Visi Desa Blumbang</h2>
                    <div class="prose prose-invert max-w-none text-green-100 text-lg font-serif italic">
                        @if(isset($profil) && $profil->vision)
                            {!! $profil->vision !!}
                        @else
                            <p>Belum ada data visi.</p>
                        @endif
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Misi Desa Blumbang</h2>
                    <div class="prose max-w-none text-gray-700">
                        @if(isset($profil) && $profil->mission)
                            {!! $profil->mission !!}
                        @else
                            <p>Belum ada data misi.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div id="content-geografi" class="tab-content hidden space-y-8">
            
            <!-- 1. PENGANTAR -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Kondisi Geografis Desa Blumbang</h2>
                <p class="text-gray-500 mb-6 italic">Gambaran mengenai letak wilayah, batas administrasi, kondisi lingkungan, sumber daya alam, serta penggunaan lahan Desa Blumbang.</p>
                <div class="prose max-w-none text-gray-700 leading-relaxed text-justify">
                    <p>Desa Blumbang merupakan salah satu desa di Kecamatan Klego, Kabupaten Boyolali, Jawa Tengah. Kondisi wilayah Desa Blumbang meliputi karakteristik geografis, pembagian wilayah, kondisi iklim, sumber daya air, jenis tanah, serta penggunaan lahan yang turut memengaruhi kehidupan dan kegiatan ekonomi masyarakat.</p>
                </div>
            </div>

            <!-- 2. LETAK DAN BATAS WILAYAH -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Letak dan Batas Wilayah</h2>
                <p class="text-gray-600 mb-6">Desa Blumbang berada di Kecamatan Klego, Kabupaten Boyolali, Jawa Tengah. Secara administratif, wilayah Desa Blumbang berbatasan dengan beberapa desa di sekitarnya.</p>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 flex items-start gap-4 hover:border-emerald-200 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Utara</p>
                            <p class="font-semibold text-gray-900">Desa Klego</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 flex items-start gap-4 hover:border-emerald-200 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Selatan</p>
                            <p class="font-semibold text-gray-900">Desa Jaten</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 flex items-start gap-4 hover:border-emerald-200 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Timur</p>
                            <p class="font-semibold text-gray-900">Desa Sangge</p>
                        </div>
                    </div>
                    <div class="bg-gray-50 p-5 rounded-xl border border-gray-100 flex items-start gap-4 hover:border-emerald-200 transition-colors">
                        <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Barat</p>
                            <p class="font-semibold text-gray-900 text-sm">Desa Pengkol,<br>Kec. Karanggede</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. PEMBAGIAN WILAYAH -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Pembagian Wilayah</h2>
                <p class="text-gray-600 mb-6">Secara administratif, Desa Blumbang terbagi menjadi dua wilayah kepala dusun yang mencakup dua dukuh, yaitu:</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-green-50 rounded-xl p-6 border border-green-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-green-600 shadow-sm shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-green-600 mb-1 uppercase tracking-wider">Kadus 1</p>
                            <p class="text-xl font-bold text-gray-900">Dukuh Blumbang</p>
                        </div>
                    </div>
                    <div class="bg-emerald-50 rounded-xl p-6 border border-emerald-100 flex items-center gap-4 hover:shadow-md transition-shadow">
                        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-emerald-600 shadow-sm shrink-0">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-emerald-600 mb-1 uppercase tracking-wider">Kadus 2</p>
                            <p class="text-xl font-bold text-gray-900">Dukuh Glagahombo</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-6 border border-gray-100 max-w-sm mx-auto font-mono text-sm text-gray-600 flex justify-center">
                    <div class="text-left w-full max-w-[200px]">
                        <div class="font-bold text-green-700 mb-2 text-base flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            Desa Blumbang
                        </div>
                        <div class="pl-2 border-l-2 border-gray-300 ml-2">
                            <div class="my-2">
                                <span class="inline-block w-4 border-t-2 border-gray-300 mr-2 -translate-y-1"></span>
                                <span class="font-bold text-gray-800">Kadus 1</span>
                                <div class="pl-6 border-l-2 border-gray-300 ml-2 mt-2">
                                    <span class="inline-block w-4 border-t-2 border-gray-300 mr-2 -translate-y-1"></span>
                                    Dk. Blumbang
                                </div>
                            </div>
                            <div class="my-4">
                                <span class="inline-block w-4 border-t-2 border-gray-300 mr-2 -translate-y-1"></span>
                                <span class="font-bold text-gray-800">Kadus 2</span>
                                <div class="pl-6 border-l-2 border-gray-300 ml-2 mt-2 border-transparent">
                                    <span class="inline-block w-4 border-t-2 border-gray-300 mr-2 -translate-y-1"></span>
                                    Dk. Glagahombo
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. IKLIM DAN 5. AIR DAN 6. TANAH -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Kondisi Iklim</h2>
                    <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Berdasarkan data yang tersedia, Desa Blumbang memiliki karakteristik iklim lembap dengan curah hujan sebesar 20 mm/tahun dan jumlah bulan kering sebanyak 6 bulan.</p>
                    <div class="space-y-3">
                        <div class="bg-blue-50 text-blue-800 rounded-xl p-3 font-semibold text-center border border-blue-100 text-sm">
                            Curah Hujan<br><span class="text-lg font-black text-blue-900">20 mm/tahun</span>
                        </div>
                        <div class="bg-orange-50 text-orange-800 rounded-xl p-3 font-semibold text-center border border-orange-100 text-sm">
                            Jumlah Bulan Kering<br><span class="text-lg font-black text-orange-900">6 bulan</span>
                        </div>
                    </div>

                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Sumber Daya Air</h2>
                    <p class="text-sm text-gray-600 leading-relaxed">Kondisi hidrologi Desa Blumbang dipengaruhi oleh keterbatasan sumber air, terutama pada musim kemarau. Kondisi tersebut dapat memengaruhi ketersediaan air bagi kegiatan pertanian dan menyebabkan sebagian lahan mengalami kekeringan.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm flex flex-col">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Jenis Tanah</h2>
                    <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Jenis tanah pada umumnya termasuk tanah aluvial. Karakteristik tanah tersebut cukup mendukung kegiatan pertanian, meskipun kondisi tanah yang relatif labil dapat memengaruhi kondisi beberapa infrastruktur, termasuk jalan di Desa Blumbang.</p>
                    <div class="bg-amber-50 text-amber-800 rounded-xl p-4 font-black text-center border border-amber-100 text-lg uppercase tracking-wider">
                        Tanah Aluvial
                    </div>
                </div>
            </div>

            <!-- 7. KONDISI LINGKUNGAN DAN PERTANIAN -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Kondisi Lingkungan dan Pertanian</h2>
                <p class="text-gray-600 mb-6">Desa Blumbang memiliki karakteristik wilayah dengan kondisi lahan basah dan lahan kering. Kondisi tersebut turut memengaruhi jenis kegiatan pertanian yang berkembang di masyarakat.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border border-green-100 bg-green-50 rounded-2xl p-6 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-green-200 text-green-700 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-green-900 text-lg mb-2">Lahan Basah</h3>
                        <p class="text-green-800 text-sm leading-relaxed">Pengembangan lahan basah diarahkan untuk mendukung kegiatan pertanian dengan penerapan pengelolaan lahan dan penggunaan pupuk organik.</p>
                    </div>
                    <div class="border border-amber-100 bg-amber-50 rounded-2xl p-6 hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 rounded-full bg-amber-200 text-amber-700 flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </div>
                        <h3 class="font-bold text-amber-900 text-lg mb-2">Lahan Kering</h3>
                        <p class="text-amber-800 text-sm leading-relaxed">Lahan kering memiliki potensi untuk pengembangan pertanian tanaman pangan lahan kering, khususnya tanaman palawija.</p>
                    </div>
                </div>
            </div>

            <!-- 8. KOMODITAS PERTANIAN -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-xl font-bold text-gray-900 mb-4">Komoditas Pertanian</h2>
                <p class="text-gray-600 mb-6">Desa Blumbang merupakan daerah penghasil padi tadah hujan dengan luas lahan sebesar 113,8 hektare. Selain padi, komoditas pertanian yang terdapat di Desa Blumbang antara lain jagung, kedelai, ubi kayu, dan berbagai jenis kacang-kacangan.</p>
                
                <div class="flex flex-wrap gap-4">
                    <div class="bg-white border-2 border-emerald-500 text-emerald-800 px-6 py-3 rounded-xl font-bold flex flex-col shadow-sm">
                        <span>Padi</span>
                        <span class="text-xs font-black text-emerald-600 mt-1">113,8 Ha</span>
                    </div>
                    <div class="bg-white border-2 border-yellow-200 text-yellow-800 px-6 py-3 rounded-xl font-bold flex items-center shadow-sm">
                        Jagung
                    </div>
                    <div class="bg-white border-2 border-lime-200 text-lime-800 px-6 py-3 rounded-xl font-bold flex items-center shadow-sm">
                        Kedelai
                    </div>
                    <div class="bg-white border-2 border-orange-200 text-orange-800 px-6 py-3 rounded-xl font-bold flex items-center shadow-sm">
                        Ubi Kayu
                    </div>
                    <div class="bg-white border-2 border-amber-200 text-amber-800 px-6 py-3 rounded-xl font-bold flex items-center shadow-sm">
                        Kacang-kacangan
                    </div>
                </div>
            </div>

            <!-- 9. PETERNAKAN DAN 10. INDUSTRI -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Peternakan -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Potensi Peternakan</h2>
                    <p class="text-gray-600 mb-6 text-sm">Selain sektor pertanian, masyarakat Desa Blumbang juga mengembangkan kegiatan peternakan sebagai salah satu bagian dari potensi ekonomi desa.</p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-200 shadow-sm">
                            <div class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-1">Sapi Potong</div>
                            <div class="font-black text-emerald-700 text-xl">200</div>
                            <div class="text-[10px] text-gray-400 font-bold">EKOR</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-200 shadow-sm">
                            <div class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-1">Kambing</div>
                            <div class="font-black text-emerald-700 text-xl">115</div>
                            <div class="text-[10px] text-gray-400 font-bold">EKOR</div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-200 shadow-sm">
                            <div class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-1">Puyuh</div>
                            <div class="font-black text-emerald-700 text-xl">15.000</div>
                            <div class="text-[10px] text-gray-400 font-bold">EKOR</div>
                        </div>
                    </div>
                </div>

                <!-- Industri -->
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Industri dan Usaha Masyarakat</h2>
                    <p class="text-gray-600 mb-6 text-sm">Selain mengandalkan sektor pertanian dan peternakan, masyarakat Desa Blumbang juga mengembangkan berbagai kegiatan usaha dan industri kecil.</p>
                    
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Mebel', 'Keripik pangsit', 'Pengepul pisang', 'Pembuatan batako', 'Percetakan', 'Kerajinan bambu'] as $industri)
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-100 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-emerald-100 transition-colors">
                            {{ $industri }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- 11. LUAS WILAYAH -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-xl font-bold text-gray-900 mb-6">Luas Wilayah</h2>
                
                <div class="mb-8 flex flex-col md:flex-row items-center gap-6">
                    <div class="bg-emerald-600 text-white p-6 rounded-2xl text-center min-w-[200px] shadow-lg shadow-emerald-600/20 w-full md:w-auto">
                        <div class="text-4xl font-black mb-1">282,77</div>
                        <div class="text-sm font-medium text-emerald-100 uppercase tracking-wider">Hektare (Ha)</div>
                        <div class="text-xs text-emerald-200 mt-2 font-bold bg-black/10 rounded-full py-1 px-3 inline-block">Luas Wilayah Desa</div>
                    </div>
                    <div class="flex-grow grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                        <div class="bg-blue-50 p-5 rounded-2xl border border-blue-100 flex flex-col justify-center">
                            <div class="text-sm text-blue-600 font-bold uppercase tracking-wider mb-1">Tanah Sawah</div>
                            <div class="text-3xl font-black text-blue-900">96,00 <span class="text-lg font-bold text-blue-700">Ha</span></div>
                        </div>
                        <div class="bg-amber-50 p-5 rounded-2xl border border-amber-100 flex flex-col justify-center">
                            <div class="text-sm text-amber-600 font-bold uppercase tracking-wider mb-1">Tanah Kering</div>
                            <div class="text-3xl font-black text-amber-900">186,77 <span class="text-lg font-bold text-amber-700">Ha</span></div>
                        </div>
                    </div>
                </div>

                <!-- 12. VISUALISASI LUAS WILAYAH -->
                <div class="space-y-2 max-w-3xl mx-auto">
                    <div class="flex justify-between text-xs font-bold text-gray-500 uppercase tracking-wider mb-2">
                        <span>Proporsi Penggunaan Lahan</span>
                    </div>
                    <!-- Total 282.77 -->
                    <!-- Sawah: 96 / 282.77 = ~34% -->
                    <!-- Kering: 186.77 / 282.77 = ~66% -->
                    <div class="w-full h-8 flex rounded-full overflow-hidden shadow-inner bg-gray-100">
                        <div class="bg-blue-500 flex items-center justify-center text-white text-xs font-bold" style="width: 34%" title="Tanah Sawah (34%)">
                            34%
                        </div>
                        <div class="bg-amber-500 flex items-center justify-center text-white text-xs font-bold" style="width: 66%" title="Tanah Kering (66%)">
                            66%
                        </div>
                    </div>
                    <div class="flex justify-center gap-6 text-xs font-semibold mt-3 text-gray-600">
                        <div class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-blue-500"></div> Sawah (34%)</div>
                        <div class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-amber-500"></div> Kering (66%)</div>
                    </div>
                    <p class="text-[10px] text-gray-400 text-center mt-6 italic">*Persentase merupakan perkiraan yang dihitung dari luasan tanah sawah dan tanah kering terhadap total wilayah.</p>
                </div>
            </div>

        </div>

        <!-- Data & Statistik -->
        <div id="content-info" class="tab-content hidden">
            
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Statistik Dasar Desa Blumbang</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-emerald-50 rounded-2xl p-6 text-center border border-emerald-100">
                        <div class="mb-2 flex justify-center text-emerald-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Penduduk</div>
                        <div class="text-lg font-bold text-emerald-800">{{ $profil?->stat_penduduk ?? '-' }}</div>
                    </div>
                    <div class="bg-emerald-50 rounded-2xl p-6 text-center border border-emerald-100">
                        <div class="mb-2 flex justify-center text-emerald-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Keluarga (KK)</div>
                        <div class="text-lg font-bold text-emerald-800">{{ $profil?->stat_kk ?? '-' }}</div>
                    </div>
                    <div class="bg-emerald-50 rounded-2xl p-6 text-center border border-emerald-100">
                        <div class="mb-2 flex justify-center text-emerald-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Total RT</div>
                        <div class="text-lg font-bold text-emerald-800">{{ $profil?->stat_rt ?? '-' }}</div>
                    </div>
                    <div class="bg-emerald-50 rounded-2xl p-6 text-center border border-emerald-100">
                        <div class="mb-2 flex justify-center text-emerald-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Total RW</div>
                        <div class="text-lg font-bold text-emerald-800">{{ $profil?->stat_rw ?? '-' }}</div>
                    </div>
                </div>
            </div>

            <!-- Chart Section -->
            <div class="flex flex-col gap-8">
                <!-- Top Row: Pie Charts -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Agama -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-lg transition-shadow duration-300">
                        <div class="mb-6 border-b border-gray-100 pb-4">
                            <h2 class="text-xl font-bold text-gray-800">Statistik Agama</h2>
                            <p class="text-sm text-gray-500 mt-1">Total Penduduk: 2.566 Jiwa</p>
                        </div>
                        <div class="relative h-64 md:h-80 w-full flex justify-center">
                            <canvas id="chartAgama"></canvas>
                        </div>
                    </div>

                    <!-- Status Perkawinan -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-lg transition-shadow duration-300">
                        <div class="mb-6 border-b border-gray-100 pb-4">
                            <h2 class="text-xl font-bold text-gray-800">Status Perkawinan</h2>
                            <p class="text-sm text-gray-500 mt-1">Total Penduduk: 2.566 Jiwa</p>
                        </div>
                        <div class="relative h-64 md:h-80 w-full flex justify-center">
                            <canvas id="chartPerkawinan"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Middle Row: Pendidikan (Bar Chart) -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-6 border-b border-gray-100 pb-4">
                        <h2 class="text-xl font-bold text-gray-800">Tingkat Pendidikan</h2>
                        <p class="text-sm text-gray-500 mt-1">Berdasarkan pendidikan terakhir yang ditamatkan</p>
                    </div>
                    <div class="relative h-[400px] w-full">
                        <canvas id="chartPendidikan"></canvas>
                    </div>
                </div>

                <!-- Bottom Row: Piramida Penduduk -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 md:p-8 hover:shadow-lg transition-shadow duration-300">
                    <div class="mb-6 border-b border-gray-100 pb-4 text-center">
                        <h2 class="text-xl font-bold text-gray-800">Piramida Penduduk</h2>
                        <p class="text-sm text-gray-500 mt-1">Komposisi berdasarkan Kelompok Usia dan Jenis Kelamin</p>
                    </div>
                    <div class="relative h-[500px] w-full">
                        <canvas id="chartPiramida"></canvas>
                    </div>
                </div>
            </div>

            @if(isset($profil) && $profil->general_information)
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm mt-8">
                <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Tambahan</h3>
                <div class="prose max-w-none text-gray-700">
                    {!! $profil->general_information !!}
                </div>
            </div>
            @endif

        </div>

        <div id="content-struktur" class="tab-content hidden space-y-8">
            <!-- Struktur Organisasi Pemdes -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Struktur Organisasi Pemerintah Desa</h2>
                @if(isset($profil) && $profil->organizational_structure)
                    <div class="flex justify-center bg-gray-50 rounded-xl p-4 border border-gray-100">
                        <img src="{{ Storage::url($profil->organizational_structure) }}" alt="Struktur Organisasi Desa Blumbang" class="max-w-full h-auto rounded-lg shadow-sm">
                    </div>
                @else
                    <div class="py-12 text-center bg-gray-50 rounded-xl border border-gray-100">
                        <div class="mb-4 flex justify-center text-gray-300"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
                        <p class="text-gray-500">Belum ada bagan struktur organisasi yang diunggah.</p>
                    </div>
                @endif
            </div>

            <!-- Struktur BPD -->
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Badan Permusyawaratan Desa (BPD)</h2>
                @if(isset($profil) && $profil->bpd_structure)
                    <div class="flex justify-center bg-gray-50 rounded-xl p-4 border border-gray-100">
                        <img src="{{ Storage::url($profil->bpd_structure) }}" alt="Struktur Badan Permusyawaratan Desa Blumbang" class="max-w-full h-auto rounded-lg shadow-sm">
                    </div>
                @else
                    <div class="py-12 text-center bg-gray-50 rounded-xl border border-gray-100">
                        <div class="mb-4 flex justify-center text-gray-300"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                        <p class="text-gray-500">Belum ada bagan struktur Badan Permusyawaratan Desa yang diunggah.</p>
                    </div>
                @endif
            </div>

            <!-- Daftar RW dan RT -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Data RW -->
                <div class="bg-white rounded-2xl p-6 border border-emerald-100 shadow-sm border-t-4 border-t-emerald-600">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        Daftar Ketua RW
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @php
                            $rws = ['Sukirno', 'Sutarno', 'M. Mustofa', 'Suniri'];
                        @endphp
                        @foreach($rws as $index => $rw)
                        <div class="bg-gray-50 rounded-xl p-3 flex items-center gap-3 border border-gray-100 hover:border-emerald-200 transition-colors">
                            <div class="w-14 h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-sm shrink-0">RW 0{{ $index+1 }}</div>
                            <div class="font-medium text-gray-800">{{ $rw }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Data RT -->
                <div class="bg-white rounded-2xl p-6 border border-emerald-100 shadow-sm border-t-4 border-t-emerald-500">
                    <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        Daftar Ketua RT
                    </h3>
                    <div class="grid grid-cols-2 sm:grid-cols-2 gap-3 h-64 overflow-y-auto pr-2 custom-scrollbar">
                        @php
                            $rts = ['M. Mustar', 'Suri', 'Tarsono', 'Suradi', 'Winarsih', 'Sumarno', 'Jarot Prianto', 'Supangat', 'Sumadi', 'Darmo', 'Rosman', 'Sobirin', 'Diman', 'Afrizal', 'Slamet Mulyono', 'Juweni'];
                        @endphp
                        @foreach($rts as $index => $rt)
                        <div class="bg-gray-50 rounded-xl p-2.5 flex items-center gap-2 border border-gray-100 hover:border-emerald-200 transition-colors">
                            <div class="w-12 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center font-bold text-xs shrink-0">RT {{ sprintf("%02d", $index+1) }}</div>
                            <div class="font-medium text-sm text-gray-800 truncate" title="{{ $rt }}">{{ $rt }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <!-- Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <script>
    function showTab(id) {
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-btn').forEach(el => {
            el.classList.remove('border-green-600','text-green-700','font-semibold');
            el.classList.add('border-transparent','text-gray-500','font-medium');
        });
        document.getElementById('content-'+id).classList.remove('hidden');
        const btn = document.getElementById('tab-'+id);
        btn.classList.add('border-green-600','text-green-700','font-semibold');
        btn.classList.remove('border-transparent','text-gray-500','font-medium');
    }

    // Chart.js implementation
    document.addEventListener("DOMContentLoaded", function() {
        Chart.register(ChartDataLabels);

        // Chart Defaults
        Chart.defaults.font.family = "'Plus Jakarta Sans', sans-serif";
        Chart.defaults.color = '#6b7280';
        Chart.defaults.plugins.tooltip.padding = 12;
        Chart.defaults.plugins.tooltip.cornerRadius = 8;

        // 1. Chart Agama (Pie)
        const ctxAgama = document.getElementById('chartAgama').getContext('2d');
        new Chart(ctxAgama, {
            type: 'doughnut',
            data: {
                labels: ['Islam', 'Katholik', 'Kristen', 'Hindu', 'Buddha', 'Khonghucu', 'Kepercayaan'],
                datasets: [{
                    data: [2555, 7, 4, 0, 0, 0, 0],
                    backgroundColor: [
                        '#10b981', // Emerald 500 (Majority)
                        '#3b82f6', // Blue
                        '#f59e0b', // Amber
                        '#8b5cf6', // Purple
                        '#ef4444', // Red
                        '#14b8a6', // Teal
                        '#6b7280'  // Gray
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { boxWidth: 12, padding: 15 } },
                    datalabels: {
                        color: '#ffffff',
                        font: { weight: 'bold', size: 12 },
                        formatter: function(value) {
                            return value > 0 ? value : '';
                        }
                    }
                },
                cutout: '65%'
            }
        });

        // 2. Chart Status Perkawinan (Pie)
        const ctxPerkawinan = document.getElementById('chartPerkawinan').getContext('2d');
        new Chart(ctxPerkawinan, {
            type: 'pie',
            data: {
                labels: ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati'],
                datasets: [{
                    data: [1050, 1237, 56, 223],
                    backgroundColor: [
                        '#60a5fa', // Blue 400
                        '#10b981', // Emerald 500 (Majority)
                        '#f59e0b', // Amber 500
                        '#f43f5e'  // Rose 500
                    ],
                    borderWidth: 0,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { boxWidth: 12, padding: 15 } },
                    datalabels: {
                        color: '#ffffff',
                        font: { weight: 'bold', size: 12 },
                        formatter: function(value) {
                            return value > 0 ? value : '';
                        }
                    }
                }
            }
        });

        // 3. Chart Pendidikan (Horizontal Bar)
        const ctxPendidikan = document.getElementById('chartPendidikan').getContext('2d');
        new Chart(ctxPendidikan, {
            type: 'bar',
            data: {
                labels: [
                    'Tidak/Belum Sekolah', 
                    'Belum Tamat SD/Sederajat', 
                    'Tamat SD/Sederajat', 
                    'Tamat SLTP/Sederajat', 
                    'Tamat SLTA/Sederajat', 
                    'Diploma I/II', 
                    'Akademi/DIII/Sarjana Muda', 
                    'Diploma IV/Strata I', 
                    'Strata II', 
                    'Strata III'
                ],
                datasets: [{
                    label: 'Jumlah Penduduk',
                    data: [535, 261, 594, 592, 446, 9, 31, 93, 5, 0],
                    backgroundColor: '#34d399', // Emerald 400
                    hoverBackgroundColor: '#10b981',
                    borderRadius: 6
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                layout: { padding: { right: 40 } },
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ' ' + context.parsed.x + ' Jiwa';
                            }
                        }
                    },
                    datalabels: {
                        color: '#6b7280',
                        anchor: 'end',
                        align: 'end',
                        font: { weight: 'bold' },
                        formatter: function(value) {
                            return value > 0 ? value : '';
                        }
                    }
                },
                scales: {
                    x: { 
                        grid: { color: '#f3f4f6', drawBorder: false },
                        beginAtZero: true
                    },
                    y: { 
                        grid: { display: false, drawBorder: false }
                    }
                }
            }
        });

        // 4. Chart Piramida Penduduk (Diverging Bar)
        const ctxPiramida = document.getElementById('chartPiramida').getContext('2d');
        
        // Labels from Top (>75) to Bottom (0-4)
        const usiaLabels = ['>75', '70-74', '65-69', '60-64', '55-59', '50-54', '45-49', '40-44', '35-39', '30-34', '25-29', '20-24', '15-19', '10-14', '5-9', '0-4'];
        
        // Laki-laki: Make values negative for left-side display
        const dataLakiLaki = [-47, -48, -60, -54, -69, -77, -84, -95, -91, -106, -96, -107, -112, -99, -107, -76];
        // Perempuan: Positive values for right-side display
        const dataPerempuan = [80, 70, 74, 63, 68, 82, 84, 73, 82, 98, 98, 95, 79, 90, 78, 71];

        new Chart(ctxPiramida, {
            type: 'bar',
            data: {
                labels: usiaLabels,
                datasets: [
                    {
                        label: 'Laki-laki',
                        data: dataLakiLaki,
                        backgroundColor: '#3b82f6', // Blue 500
                        hoverBackgroundColor: '#2563eb',
                        borderRadius: { topLeft: 4, bottomLeft: 4 }
                    },
                    {
                        label: 'Perempuan',
                        data: dataPerempuan,
                        backgroundColor: '#ec4899', // Pink 500
                        hoverBackgroundColor: '#db2777',
                        borderRadius: { topRight: 4, bottomRight: 4 }
                    }
                ]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { 
                        position: 'top',
                        labels: { usePointStyle: true, boxWidth: 10, padding: 20 }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                // Use absolute value in tooltip to hide the negative sign
                                return ' ' + context.dataset.label + ': ' + Math.abs(context.parsed.x) + ' Jiwa';
                            }
                        }
                    },
                    datalabels: {
                        color: '#ffffff',
                        font: { weight: 'bold', size: 11 },
                        formatter: function(value) {
                            return Math.abs(value) > 0 ? Math.abs(value) : '';
                        }
                    }
                },
                scales: {
                    x: {
                        stacked: true,
                        grid: { color: '#f3f4f6', drawBorder: false },
                        ticks: {
                            callback: function(value) {
                                // Format tick labels to show absolute numbers
                                return Math.abs(value);
                            }
                        }
                    },
                    y: {
                        stacked: true,
                        grid: { display: false, drawBorder: false }
                    }
                }
            }
        });
    });
    </script>
    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</x-publik-layout>