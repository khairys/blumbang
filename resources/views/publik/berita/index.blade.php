<x-publik-layout>
    <x-slot name="title">Berita Desa</x-slot>
    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-6 flex items-center gap-2">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a> 
                <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white">Berita Desa</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Berita Desa</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl">Informasi terbaru mengenai kegiatan, pelayanan, pembangunan, dan kehidupan masyarakat Desa Blumbang.</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filter Kategori & Pencarian -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-10">
            @php
                $kategoriList = ['Pemerintahan', 'Pembangunan', 'Kesehatan', 'Sosial', 'Pertanian', 'Ekonomi', 'Pendidikan'];
            @endphp
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('publik.berita.index') }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ !request('kategori') ? 'bg-green-600 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-green-50 hover:text-green-700 hover:border-green-200' }} transition-colors">Semua</a>
                @foreach ($kategoriList as $k)
                @php
                    $kSlug = Str::slug($k);
                @endphp
                <a href="{{ route('publik.berita.index', ['kategori' => $kSlug]) }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ request('kategori') === $kSlug ? 'bg-green-600 text-white' : 'bg-white border border-gray-200 text-gray-600 hover:bg-green-50 hover:text-green-700 hover:border-green-200' }} transition-colors">{{ $k }}</a>
                @endforeach
            </div>
            
            <form action="{{ route('publik.berita.index') }}" method="GET" class="relative w-full md:w-72 flex-shrink-0">
                @if(request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita..." class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent transition-all shadow-sm">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>

        @if(isset($beritas) && $beritas->isNotEmpty())
        <!-- Daftar Berita -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($beritas as $b)
            <article class="card-hover bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm transition-all duration-200 flex flex-col h-full group">
                <div class="h-48 relative overflow-hidden bg-gray-100 flex-shrink-0">
                    @if ($b->thumbnail)
                    <img src="{{ Storage::url($b->thumbnail) }}" alt="{{ $b->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    @else
                    <div class="absolute inset-0 bg-gradient-to-br from-green-800 to-emerald-600 flex items-center justify-center opacity-90">
                        <svg class="w-16 h-16 text-white/30" fill="currentColor" viewBox="0 0 24 24"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                    </div>
                    @endif
                    @if ($b->category)
                    <div class="absolute top-3 left-3">
                        <span class="bg-white/95 text-green-700 text-xs font-bold px-2.5 py-1 rounded-full shadow-sm">{{ $b->category->name }}</span>
                    </div>
                    @endif
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <div class="text-xs text-gray-400 mb-3 font-medium">
                        {{ $b->created_at->format('d F Y') }}
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3 leading-snug line-clamp-2 group-hover:text-green-600 transition-colors">{{ $b->title }}</h3>
                    @if ($b->summary)
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">{{ $b->summary }}</p>
                    @endif
                    <div class="mt-auto pt-4 border-t border-gray-50">
                        <a href="{{ route('publik.berita.show', $b->slug) }}" class="inline-flex items-center gap-1.5 text-green-600 hover:text-green-700 text-sm font-bold transition-colors">
                            Baca Selengkapnya
                            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        
        @if ($beritas->hasPages())
        <div class="mt-10">
            {{ $beritas->links() }}
        </div>
        @endif

        @else
        <!-- Empty State -->
        <div class="py-16 text-center">
            @if(request('search') || request('kategori'))
                <div class="w-20 h-20 bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Berita tidak ditemukan.</h3>
                <p class="text-gray-500 max-w-sm mx-auto mb-6">Coba gunakan kata kunci yang berbeda atau hapus filter untuk melihat semua berita.</p>
                <a href="{{ route('publik.berita.index') }}" class="inline-flex items-center gap-2 bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 font-semibold px-6 py-2.5 rounded-full transition-colors shadow-sm">
                    Reset Filter
                </a>
            @else
                <div class="w-20 h-20 bg-green-50 text-green-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15M9 11l3 3L22 4"/></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Belum ada berita yang dipublikasikan.</h3>
                <p class="text-gray-500 max-w-md mx-auto mb-8">Informasi kegiatan dan berita Desa Blumbang akan diperbarui oleh Pemerintah Desa secara berkala.</p>
                <a href="{{ route('beranda') }}" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold px-6 py-2.5 rounded-full transition-all hover:-translate-y-0.5 shadow-md shadow-green-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Kembali ke Beranda
                </a>
            @endif
        </div>
        @endif
    </div>
</x-publik-layout>