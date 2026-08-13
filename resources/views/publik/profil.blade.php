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

        <div id="content-geografi" class="tab-content hidden">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Kondisi Geografis</h2>
                <div class="prose max-w-none text-gray-700">
                    @if(isset($profil) && $profil->geography)
                        {!! $profil->geography !!}
                    @else
                        <p>Belum ada data geografis.</p>
                    @endif
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
                    legend: { position: 'bottom', labels: { boxWidth: 12, padding: 15 } }
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
                    legend: { position: 'bottom', labels: { boxWidth: 12, padding: 15 } }
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
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return ' ' + context.parsed.x + ' Jiwa';
                            }
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