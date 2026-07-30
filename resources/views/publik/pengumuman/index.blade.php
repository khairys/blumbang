<x-publik-layout>
    <x-slot name="title">Pengumuman</x-slot>
    <div class="bg-gradient-to-br from-amber-600 to-yellow-500 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-amber-100 mb-3"><a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Pengumuman</span></nav>
            <h1 class="text-4xl font-bold text-white">Pengumuman Desa</h1>
            <p class="text-amber-100 mt-2">Informasi resmi dan pemberitahuan dari Pemerintah Desa Blumbang</p>
        </div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="space-y-4">
            @php $pngs = [
                ['icon'=>'📅','title'=>'Jadwal Pembagian BLT Dana Desa Triwulan III Tahun 2025','isi'=>'Diberitahukan kepada seluruh warga penerima manfaat BLT Dana Desa bahwa pembagian akan dilaksanakan pada hari Rabu, 30 Juli 2025 di Balai Desa Blumbang mulai pukul 08.00 WIB.','tgl'=>'28 Jul 2025','status'=>'Aktif','sc'=>'green'],
                ['icon'=>'🏥','title'=>'Posyandu Balita Bulan Agustus 2025','isi'=>'Posyandu balita Desa Blumbang akan dilaksanakan pada Selasa, 15 Agustus 2025 pukul 08.00-11.00 WIB di Balai Posyandu. Mohon seluruh ibu dengan balita hadir untuk penimbangan dan imunisasi.','tgl'=>'25 Jul 2025','status'=>'Mendatang','sc'=>'blue'],
                ['icon'=>'🌾','title'=>'Musyawarah Rencana Pembangunan Desa (Musrenbangdes) 2026','isi'=>'Kepala Desa mengundang seluruh tokoh masyarakat, perwakilan RT/RW, dan warga untuk hadir dalam Musrenbangdes pada Jumat, 8 Agustus 2025 pukul 09.00 WIB di Balai Desa.','tgl'=>'20 Jul 2025','status'=>'Mendatang','sc'=>'blue'],
                ['icon'=>'💧','title'=>'Gotong Royong Bersih Sungai dan Saluran Irigasi','isi'=>'Dalam rangka menyambut musim tanam, seluruh warga diwajibkan mengikuti gotong royong pembersihan saluran irigasi pada Minggu, 27 Juli 2025 pukul 07.00 WIB.','tgl'=>'15 Jul 2025','status'=>'Selesai','sc'=>'gray'],
                ['icon'=>'📋','title'=>'Pemutakhiran Data Penduduk Semester II 2025','isi'=>'Bagi warga yang belum memiliki KTP Elektronik atau Kartu Keluarga yang belum diperbarui, segera melapor ke kantor desa dengan membawa berkas yang diperlukan hingga akhir Agustus 2025.','tgl'=>'10 Jul 2025','status'=>'Aktif','sc'=>'green'],
            ]; @endphp
            @foreach ($pngs as $p)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="flex items-start gap-4 p-6">
                    <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl">{{ $p['icon'] }}</div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-start justify-between gap-2 mb-2">
                            <h3 class="font-bold text-gray-900 text-base leading-snug">{{ $p['title'] }}</h3>
                            <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-{{ $p['sc'] }}-100 text-{{ $p['sc'] }}-700">{{ $p['status'] }}</span>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed mb-3">{{ $p['isi'] }}</p>
                        <p class="text-xs text-gray-400">📅 Diumumkan: {{ $p['tgl'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-publik-layout>