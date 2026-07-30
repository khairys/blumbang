<x-publik-layout>
    <x-slot name="title">Profil Desa</x-slot>

    <!-- Page Header -->
    <div class="bg-gradient-to-br from-green-800 to-emerald-700 py-14 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,<svg width=60 height=60 viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'><g fill=\'none\'><g fill=\'%23fff\' fill-opacity=\'1\'><path d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/></g></g></svg>')"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-green-300 mb-3">
                <a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span>
                <span class="text-white">Profil Desa</span>
            </nav>
            <h1 class="text-4xl font-bold text-white">Profil Desa Blumbang</h1>
            <p class="text-green-200 mt-2">Kecamatan Klego, Kabupaten Boyolali, Jawa Tengah</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Tab Navigation -->
        <div class="flex gap-2 flex-wrap mb-8 border-b border-gray-200 pb-0">
            <button onclick="showTab('sejarah')" id="tab-sejarah" class="tab-btn active-tab px-5 py-2.5 text-sm font-semibold border-b-2 border-green-600 text-green-700 -mb-px transition-all">Sejarah</button>
            <button onclick="showTab('visi')" id="tab-visi" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Visi & Misi</button>
            <button onclick="showTab('geografi')" id="tab-geografi" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Geografi</button>
            <button onclick="showTab('info')" id="tab-info" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Data Umum</button>
        </div>

        <!-- Tab Content -->
        <div id="content-sejarah" class="tab-content">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Sejarah Desa Blumbang</h2>
                    <div class="prose text-gray-600 leading-relaxed space-y-4">
                        <p>Desa Blumbang merupakan salah satu desa yang terletak di wilayah Kecamatan Klego, Kabupaten Boyolali, Provinsi Jawa Tengah. Konon nama "Blumbang" berasal dari kata dalam bahasa Jawa yang berarti "kolam" atau "genangan air", merujuk pada kondisi geografis daerah ini yang dahulu banyak terdapat sumber mata air dan rawa.</p>
                        <p>Sejak berdirinya, Desa Blumbang telah melalui berbagai periode penting dalam sejarahnya. Pada era kerajaan Mataram, wilayah ini merupakan bagian dari tanah perdikan yang dikelola oleh para abdi dalem. Seiring berjalannya waktu, desa ini berkembang menjadi pusat pertanian yang subur dengan komoditas utama jagung dan padi.</p>
                        <p>Di era modern, Desa Blumbang terus berbenah dan bertransformasi. Inovasi dalam bidang pengolahan hasil pertanian, khususnya jagung, menjadi salah satu kebanggaan desa ini. Program digitalisasi desa yang dimulai sejak tahun 2023 menjadi tonggak baru dalam upaya meningkatkan pelayanan publik dan pemberdayaan masyarakat.</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="bg-green-50 rounded-2xl p-6 border border-green-100">
                        <h3 class="font-bold text-green-800 mb-3">📊 Data Singkat</h3>
                        <div class="space-y-2.5">
                            @php $stats = [['Kepala Desa','Suharto, S.Sos'],['Luas Wilayah','485 Ha'],['Jumlah Penduduk','2.847 jiwa'],['Jumlah KK','834 KK'],['Jumlah RT','24 RT'],['Jumlah RW','8 RW']]; @endphp
                            @foreach ($stats as $s)
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-600">{{ $s[0] }}</span>
                                <span class="font-semibold text-gray-900">{{ $s[1] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="bg-amber-50 rounded-2xl p-6 border border-amber-100">
                        <h3 class="font-bold text-amber-800 mb-2">🌽 Komoditas Unggulan</h3>
                        <p class="text-sm text-amber-700">Jagung Hibrida — Luas tanam ±120 Ha per musim tanam</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="content-visi" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-green-700 text-white rounded-2xl p-8">
                    <div class="text-4xl mb-4">🎯</div>
                    <h2 class="text-xl font-bold mb-4">Visi Desa Blumbang</h2>
                    <p class="leading-relaxed text-green-100 text-lg font-serif italic">"Terwujudnya Desa Blumbang yang Maju, Mandiri, Sehat, dan Sejahtera Berbasis Pertanian serta Kearifan Lokal menuju Masyarakat yang Beradab"</p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <div class="text-4xl mb-4">📋</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Misi Desa Blumbang</h2>
                    <ol class="space-y-3">
                        @php $misi = ['Meningkatkan kualitas pelayanan publik yang transparan dan akuntabel','Mengembangkan potensi pertanian jagung sebagai komoditas unggulan desa','Mendorong pemberdayaan perempuan dan generasi muda melalui UMKM produk olahan jagung','Meningkatkan derajat kesehatan masyarakat melalui edukasi gizi dan pencegahan stunting','Membangun infrastruktur desa yang memadai untuk mendukung pertumbuhan ekonomi lokal']; @endphp
                        @foreach ($misi as $i => $m)
                        <li class="flex gap-3 text-sm text-gray-700">
                            <span class="w-6 h-6 bg-green-100 text-green-700 rounded-full text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">{{ $i+1 }}</span>
                            <span>{{ $m }}</span>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>

        <div id="content-geografi" class="tab-content hidden">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Kondisi Geografis</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-4">Batas Wilayah</h3>
                        <div class="space-y-3">
                            @php $batas=[['Utara','Desa Klego & Desa Sumber'],['Selatan','Desa Karangmojo'],['Barat','Desa Banyuurip'],['Timur','Desa Tanjungsari']]; @endphp
                            @foreach($batas as $b)
                            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl">
                                <span class="text-sm font-medium text-gray-500 w-16">{{ $b[0] }}</span>
                                <span class="text-sm text-gray-800 font-semibold">{{ $b[1] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 mb-4">Data Geografis</h3>
                        <div class="space-y-3">
                            @php $geo=[['Ketinggian','±450 mdpl'],['Curah Hujan','±2.200 mm/tahun'],['Suhu Rata-rata','24 – 32°C'],['Topografi','Berbukit & datar'],['Jenis Tanah','Latosol & Aluvial']]; @endphp
                            @foreach ($geo as $g)
                            <div class="flex justify-between text-sm p-3 bg-gray-50 rounded-xl">
                                <span class="text-gray-500">{{ $g[0] }}</span>
                                <span class="font-semibold text-gray-800">{{ $g[1] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="content-info" class="tab-content hidden">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                @php $info=[['👥','2.847','Total Penduduk','jiwa'],['👨','1.423','Laki-laki','jiwa'],['👩','1.424','Perempuan','jiwa'],['🏠','834','Kepala Keluarga','KK'],['🎓','89%','Melek Huruf','tingkat'],['🌾','62%','Mata Pencaharian','petani'],['🏥','1','Puskesmas Pembantu','unit'],['🏫','2','Sekolah Dasar','unit']]; @endphp
                @foreach ($info as $inf)
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm text-center">
                    <div class="text-3xl mb-2">{{ $inf[0] }}</div>
                    <p class="text-2xl font-bold text-gray-900">{{ $inf[1] }}</p>
                    <p class="text-xs text-gray-500 mt-1">{{ $inf[2] }}</p>
                    <p class="text-xs text-gray-400">{{ $inf[3] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

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
    </script>
</x-publik-layout>