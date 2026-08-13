<x-publik-layout>
    <x-slot name="title">Pengumuman</x-slot>
    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-6 flex items-center gap-2"><a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a> <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span class="text-white">Pengumuman</span></nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Pengumuman Desa</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl">Informasi resmi dan pemberitahuan dari Pemerintah Desa</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Pencarian -->
        <div class="flex justify-end mb-6">
            <form action="{{ route('publik.pengumuman.index') }}" method="GET" class="relative w-full md:w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari pengumuman..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>
        @if(isset($pengumumans) && $pengumumans->isNotEmpty())
        <div class="space-y-4">
            @foreach ($pengumumans as $p)
            <a href="{{ route('publik.pengumuman.show', $p->slug) }}" class="card-hover block bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden transition-all duration-200">
                <div class="flex flex-col sm:flex-row gap-4 p-6">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-start justify-between gap-2 mb-2">
                            <h3 class="font-bold text-gray-900 text-base leading-snug hover:text-emerald-700 transition-colors">{{ $p->title }}</h3>
                            @if($p->expired_at && \Carbon\Carbon::parse($p->expired_at)->isPast())
                                <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-red-100 text-red-700">Kedaluwarsa</span>
                            @else
                                <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-emerald-100 text-emerald-700">Aktif</span>
                            @endif
                        </div>
                        <div class="text-sm text-gray-600 leading-relaxed mb-3 line-clamp-2">{!! strip_tags($p->content) !!}</div>
                        <div class="flex items-center gap-4 text-xs text-gray-400">
                            <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> {{ $p->published_at ? \Carbon\Carbon::parse($p->published_at)->format('d M Y') : $p->created_at->format('d M Y') }}</span>
                            <span class="text-emerald-600 font-medium flex items-center gap-1">Baca selengkapnya <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg></span>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @if ($pengumumans->hasPages())
        <div class="mt-8">{{ $pengumumans->links() }}</div>
        @endif
        @else
        <!-- Dummy data (ketika belum ada pengumuman di DB) -->
        <div class="space-y-4">
            @php $pngs = [
                ['icon'=>'<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>','title'=>'Jadwal Pembagian BLT Dana Desa Triwulan III Tahun 2025','isi'=>'Diberitahukan kepada seluruh warga penerima manfaat BLT Dana Desa bahwa pembagian akan dilaksanakan pada hari Rabu, 30 Juli 2025 di Balai Desa Blumbang mulai pukul 08.00 WIB.','tgl'=>'28 Jul 2025','status'=>'Aktif','sc'=>'emerald'],
                ['icon'=>'<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>','title'=>'Posyandu Balita Bulan Agustus 2025','isi'=>'Posyandu balita Desa Blumbang akan dilaksanakan pada Selasa, 15 Agustus 2025 pukul 08.00-11.00 WIB di Balai Posyandu. Mohon seluruh ibu dengan balita hadir untuk penimbangan dan imunisasi.','tgl'=>'25 Jul 2025','status'=>'Mendatang','sc'=>'emerald'],
                ['icon'=>'<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>','title'=>'Musyawarah Rencana Pembangunan Desa (Musrenbangdes) 2026','isi'=>'Kepala Desa mengundang seluruh tokoh masyarakat, perwakilan RT/RW, dan warga untuk hadir dalam Musrenbangdes pada Jumat, 8 Agustus 2025 pukul 09.00 WIB di Balai Desa.','tgl'=>'20 Jul 2025','status'=>'Mendatang','sc'=>'emerald'],
            ]; @endphp
            @foreach ($pngs as $p)
            <div class="card-hover bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden transition-all duration-200">
                <div class="flex items-start gap-4 p-6">
                    <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center flex-shrink-0 text-gray-500">{!! $p['icon'] !!}</div>
                    <div class="flex-1">
                        <div class="flex flex-wrap items-start justify-between gap-2 mb-2">
                            <h3 class="font-bold text-gray-900 text-base leading-snug">{{ $p['title'] }}</h3>
                            <span class="flex-shrink-0 text-xs font-semibold px-3 py-1 rounded-full bg-{{ $p['sc'] }}-100 text-{{ $p['sc'] }}-700">{{ $p['status'] }}</span>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed mb-3">{{ $p['isi'] }}</p>
                        <p class="text-xs text-gray-400 flex items-center gap-1.5"><svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> Diumumkan: {{ $p['tgl'] }}</p>
                        <span class="inline-block text-xs text-gray-400 italic mt-2">Data akan diisi oleh Admin Desa</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="py-12 text-center bg-white rounded-2xl border border-emerald-100 shadow-sm mt-8">
            <div class="mb-3 text-emerald-300 flex justify-center"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg></div>
            <p class="text-gray-500 font-medium">Belum ada pengumuman.</p>
        </div>
        @endif
    </div>
</x-publik-layout>