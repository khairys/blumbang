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
        <!-- Pencarian -->
        <div class="flex justify-end mb-6">
            <form action="{{ route('publik.pengumuman.index') }}" method="GET" class="relative w-full md:w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari pengumuman..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-amber-500">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>
        @if(isset($pengumumans) && $pengumumans->isNotEmpty())
        <div class="space-y-4">
            @foreach ($pengumumans as $p)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden hover:shadow-md transition-shadow">
                <div class="flex flex-col sm:flex-row gap-4 p-6">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-start justify-between gap-2 mb-2">
                            <h3 class="font-bold text-gray-900 text-base leading-snug">{{ $p->title }}</h3>
                            @if($p->expired_at && \Carbon\Carbon::parse($p->expired_at)->isPast())
                                <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-red-100 text-red-700">Kedaluwarsa</span>
                            @else
                                <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-green-100 text-green-700">Aktif</span>
                            @endif
                        </div>
                        <div class="text-sm text-gray-600 leading-relaxed mb-3 prose prose-sm max-w-none">{!! $p->content !!}</div>
                        <div class="flex items-center gap-4 text-xs text-gray-400">
                            <span>📅 Diumumkan: {{ $p->published_at ? \Carbon\Carbon::parse($p->published_at)->format('d M Y') : $p->created_at->format('d M Y') }}</span>
                            @if($p->attachment)
                            <a href="{{ Storage::url($p->attachment) }}" target="_blank" class="flex items-center gap-1 text-amber-600 hover:text-amber-700 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/></svg>
                                Lampiran
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if ($pengumumans->hasPages())
        <div class="mt-8">{{ $pengumumans->links() }}</div>
        @endif
        @else
        <!-- Dummy data (ketika belum ada pengumuman di DB) -->
        <div class="space-y-4">
            @php $pngs = [
                ['icon'=>'📅','title'=>'Jadwal Pembagian BLT Dana Desa Triwulan III Tahun 2025','isi'=>'Diberitahukan kepada seluruh warga penerima manfaat BLT Dana Desa bahwa pembagian akan dilaksanakan pada hari Rabu, 30 Juli 2025 di Balai Desa Blumbang mulai pukul 08.00 WIB.','tgl'=>'28 Jul 2025','status'=>'Aktif','sc'=>'green'],
                ['icon'=>'🏥','title'=>'Posyandu Balita Bulan Agustus 2025','isi'=>'Posyandu balita Desa Blumbang akan dilaksanakan pada Selasa, 15 Agustus 2025 pukul 08.00-11.00 WIB di Balai Posyandu. Mohon seluruh ibu dengan balita hadir untuk penimbangan dan imunisasi.','tgl'=>'25 Jul 2025','status'=>'Mendatang','sc'=>'blue'],
                ['icon'=>'🌾','title'=>'Musyawarah Rencana Pembangunan Desa (Musrenbangdes) 2026','isi'=>'Kepala Desa mengundang seluruh tokoh masyarakat, perwakilan RT/RW, dan warga untuk hadir dalam Musrenbangdes pada Jumat, 8 Agustus 2025 pukul 09.00 WIB di Balai Desa.','tgl'=>'20 Jul 2025','status'=>'Mendatang','sc'=>'blue'],
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
                        <span class="inline-block text-xs text-gray-400 italic mt-2">Data akan diisi oleh Admin Desa</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-8 bg-amber-50 border border-amber-200 rounded-xl p-4 text-center text-sm text-amber-700">
            ℹ️ Belum ada pengumuman. Admin dapat menambahkannya melalui
            @auth <a href="{{ route('admin.pengumuman.create') }}" class="font-semibold underline">Panel Admin</a>. @else Panel Admin. @endauth
        </div>
        @endif
    </div>
</x-publik-layout>