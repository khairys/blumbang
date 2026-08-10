<x-publik-layout>
    <x-slot name="title">Berita Desa</x-slot>
    <div class="bg-gradient-to-br from-green-900 via-green-800 to-emerald-800 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-green-300 mb-3"><a href="{{ route('beranda') }}" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Berita</span></nav>
            <h1 class="text-4xl font-bold text-white">Berita Desa</h1>
            <p class="text-green-200 mt-2">Informasi terkini seputar aktivitas dan program desa</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filter Kategori & Pencarian -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            @if(isset($kategoris) && $kategoris->isNotEmpty())
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('publik.berita.index') }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ !request('kategori') ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-green-50 hover:text-green-700' }} transition-colors">Semua</a>
                @foreach ($kategoris as $k)
                <a href="{{ route('publik.berita.index') }}?kategori={{ $k->slug }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ request('kategori') === $k->slug ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-green-50 hover:text-green-700' }} transition-colors">{{ $k->name }}</a>
                @endforeach
            </div>
            @endif
            
            <form action="{{ route('publik.berita.index') }}" method="GET" class="relative w-full md:w-64 flex-shrink-0">
                @if(request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>

        @if(isset($beritas) && $beritas->isNotEmpty())
        <!-- Real Data -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($beritas as $b)
            <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200">
                @if ($b->thumbnail)
                <img src="{{ Storage::url($b->thumbnail) }}" alt="{{ $b->title }}" class="w-full h-44 object-cover">
                @else
                <div class="h-44 bg-gradient-to-br from-blue-700 to-blue-500 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                </div>
                @endif
                <div class="p-5">
                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                        <span>{{ $b->created_at->format('d M Y') }}</span>
                        @if ($b->category)<span>•</span><span class="text-green-600 font-medium">{{ $b->category->name }}</span>@endif
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2 leading-snug line-clamp-2">{{ $b->title }}</h3>
                    @if ($b->summary)
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">{{ $b->summary }}</p>
                    @endif
                    <a href="{{ route('publik.berita.show', $b->slug) }}" class="inline-flex items-center gap-1 text-green-600 hover:text-green-700 text-sm font-medium mt-4 transition-colors">
                        Baca Selengkapnya
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        @if ($beritas->hasPages())
        <div class="mt-8">{{ $beritas->links() }}</div>
        @endif

        @else
        <!-- Dummy data (ketika belum ada berita di DB) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $dummies = [
                ['kat'=>'Pertanian','warna'=>'green','judul'=>'Hasil Panen Jagung Meningkat 23% Berkat Program Bibit Unggul','ringkas'=>'Program bantuan bibit unggul dari Dinas Pertanian Boyolali berhasil meningkatkan produktivitas jagung di Desa Blumbang secara signifikan tahun ini.','tgl'=>'28 Jul 2025','bg'=>'from-green-700 to-emerald-500'],
                ['kat'=>'Kesehatan','warna'=>'blue','judul'=>'Posyandu Blumbang Raih Penghargaan Terbaik Tingkat Kecamatan','ringkas'=>'Kader posyandu mendapat penghargaan atas konsistensi dalam program pemantauan tumbuh kembang balita selama 3 tahun berturut-turut.','tgl'=>'25 Jul 2025','bg'=>'from-blue-700 to-blue-500'],
                ['kat'=>'Infrastruktur','warna'=>'amber','judul'=>'Jalan Desa Sepanjang 2 Km Telah Selesai Diperbaiki','ringkas'=>'Perbaikan jalan dusun yang menghubungkan RT 03 ke jalan provinsi telah rampung dikerjakan menggunakan Dana Desa 2025.','tgl'=>'20 Jul 2025','bg'=>'from-amber-600 to-yellow-500'],
                ['kat'=>'Sosial','warna'=>'purple','judul'=>'Pelatihan Pengolahan Jagung untuk Ibu PKK Desa Blumbang','ringkas'=>'Sebanyak 45 ibu PKK mengikuti pelatihan membuat produk olahan jagung bergizi yang diselenggarakan bersama Dinas Ketahanan Pangan.','tgl'=>'18 Jul 2025','bg'=>'from-purple-700 to-purple-500'],
                ['kat'=>'Pemerintahan','warna'=>'teal','judul'=>'Laporan APBDes 2025 Semester I Telah Dipublikasikan','ringkas'=>'Pemerintah Desa Blumbang telah mempublikasikan laporan realisasi anggaran semester pertama tahun 2025 sebagai wujud transparansi.','tgl'=>'15 Jul 2025','bg'=>'from-teal-700 to-teal-500'],
                ['kat'=>'Pertanian','warna'=>'green','judul'=>'Penyuluhan Teknik Tanam Jagung Terpadu di Desa Blumbang','ringkas'=>'Balai Penyuluhan Pertanian menyelenggarakan penyuluhan teknik budidaya jagung hibrida yang efisien dan ramah lingkungan.','tgl'=>'10 Jul 2025','bg'=>'from-green-800 to-green-600'],
            ];
            @endphp
            @foreach ($dummies as $b)
            <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200">
                <div class="h-44 bg-gradient-to-br {{ $b['bg'] }} relative flex items-center justify-center">
                    <svg class="w-16 h-16 text-white/20" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                    <div class="absolute top-3 left-3"><span class="bg-white/90 text-{{ $b['warna'] }}-700 text-xs font-bold px-2.5 py-1 rounded-full">{{ $b['kat'] }}</span></div>
                </div>
                <div class="p-5">
                    <p class="text-xs text-gray-400 mb-2">{{ $b['tgl'] }}</p>
                    <h3 class="font-bold text-gray-900 mb-2 leading-snug line-clamp-2">{{ $b['judul'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3">{{ $b['ringkas'] }}</p>
                    <span class="inline-block text-xs text-gray-400 italic mt-4">Data akan diisi oleh Admin Desa</span>
                </div>
            </article>
            @endforeach
        </div>

        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-xl p-4 text-center text-sm text-blue-700">
            <span class="mr-1"><svg class="w-4 h-4 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span> Belum ada berita yang dipublikasikan. Admin dapat menambahkan berita melalui
            @auth <a href="{{ route('admin.berita.create') }}" class="font-semibold underline">Panel Admin</a>. @else Panel Admin. @endauth
        </div>
        @endif
    </div>
</x-publik-layout>