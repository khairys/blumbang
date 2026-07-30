<x-publik-layout>
    <x-slot name="title">Layanan Publik</x-slot>
    <div class="bg-gradient-to-br from-purple-800 to-purple-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-purple-200 mb-3"><a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Layanan Publik</span></nav>
            <h1 class="text-4xl font-bold text-white">Layanan Publik Desa</h1>
            <p class="text-purple-200 mt-2">Panduan prosedur dan persyaratan layanan administrasi Desa Blumbang</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Info Jam Layanan -->
        <div class="bg-green-50 border border-green-200 rounded-2xl p-5 mb-8 flex flex-wrap items-center gap-4">
            <div class="text-3xl">⏰</div>
            <div>
                <p class="font-bold text-green-800">Jam Pelayanan Kantor Desa</p>
                <p class="text-sm text-green-700">Senin – Kamis: 08.00 – 15.00 WIB &nbsp;|&nbsp; Jumat: 08.00 – 11.00 WIB &nbsp;|&nbsp; Sabtu – Minggu: Tutup</p>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php $layanans = [
                ['icon'=>'📄','title'=>'Surat Keterangan Domisili','desc'=>'Keterangan tempat tinggal resmi di wilayah Desa Blumbang','syarat'=>['KTP asli & fotokopi','Kartu Keluarga','Surat pengantar RT/RW'],'waktu'=>'1 hari kerja','biaya'=>'Gratis'],
                ['icon'=>'👶','title'=>'Surat Pengantar Kelahiran','desc'=>'Pengantar untuk pengurusan akta kelahiran ke Disdukcapil','syarat'=>['Surat keterangan lahir dari bidan/RS','KTP kedua orang tua','Kartu Keluarga','Buku nikah'],'waktu'=>'1 hari kerja','biaya'=>'Gratis'],
                ['icon'=>'💒','title'=>'Surat Keterangan Belum Menikah','desc'=>'Untuk keperluan administrasi pernikahan dan lainnya','syarat'=>['KTP asli & fotokopi','Kartu Keluarga','Pas foto 3x4 (2 lembar)','Surat pengantar RT/RW'],'waktu'=>'1 hari kerja','biaya'=>'Gratis'],
                ['icon'=>'🤝','title'=>'Surat Pengantar SKCK','desc'=>'Pengantar untuk pengurusan SKCK ke Polres Boyolali','syarat'=>['KTP asli & fotokopi','Kartu Keluarga','Pas foto 4x6 (4 lembar)','Surat pengantar RT/RW'],'waktu'=>'1 hari kerja','biaya'=>'Gratis'],
                ['icon'=>'🏠','title'=>'Surat Keterangan Tidak Mampu (SKTM)','desc'=>'Untuk keperluan beasiswa, pengobatan, dan bantuan sosial','syarat'=>['KTP asli & fotokopi','Kartu Keluarga','Surat pengantar RT/RW','Dokumen pendukung'],'waktu'=>'2 hari kerja','biaya'=>'Gratis'],
                ['icon'=>'🌾','title'=>'Surat Keterangan Kepemilikan Tanah','desc'=>'Keterangan kepemilikan tanah/lahan pertanian di desa','syarat'=>['KTP asli & fotokopi','Kartu Keluarga','Bukti kepemilikan (sertifikat/SPPT)','Surat pengantar RT/RW'],'waktu'=>'3 hari kerja','biaya'=>'Gratis'],
            ]; @endphp
            @foreach ($layanans as $l)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl">{{ $l['icon'] }}</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-base mb-1">{{ $l['title'] }}</h3>
                        <p class="text-sm text-gray-500 mb-4">{{ $l['desc'] }}</p>
                        <div class="mb-4">
                            <p class="text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Persyaratan:</p>
                            <ul class="space-y-1">
                                @foreach ($l['syarat'] as $s)
                                <li class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="w-3.5 h-3.5 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    {{ $s }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="flex gap-4 text-xs">
                            <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full font-medium">⏱ {{ $l['waktu'] }}</span>
                            <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full font-medium">💰 {{ $l['biaya'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-publik-layout>