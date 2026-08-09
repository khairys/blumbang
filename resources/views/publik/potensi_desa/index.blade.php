<x-publik-layout>
    <x-slot name="title">Potensi Desa</x-slot>
    <div class="bg-gradient-to-br from-emerald-800 to-teal-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-emerald-200 mb-3"><a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Potensi Desa</span></nav>
            <h1 class="text-4xl font-bold text-white">Potensi Desa Blumbang</h1>
            <p class="text-emerald-200 mt-2">Kekayaan alam, budaya, dan sumber daya manusia Desa Blumbang</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filter Kategori & Pencarian -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            @if(isset($kategoris) && $kategoris->isNotEmpty())
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('publik.potensi-desa.index') }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ !request('kategori') ? 'bg-emerald-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700' }} transition-colors">Semua</a>
                @foreach ($kategoris as $k)
                <a href="{{ route('publik.potensi-desa.index') }}?kategori={{ $k->slug }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ request('kategori') === $k->slug ? 'bg-emerald-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700' }} transition-colors">{{ $k->name }}</a>
                @endforeach
            </div>
            @endif
            
            <form action="{{ route('publik.potensi-desa.index') }}" method="GET" class="relative w-full md:w-64 flex-shrink-0">
                @if(request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari potensi..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>

        @if(isset($potensis) && $potensis->isNotEmpty())
        <!-- Real Data -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($potensis as $p)
            <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200 flex flex-col">
                <a href="{{ route('publik.potensi-desa.show', $p->slug) }}" class="block relative aspect-video">
                    @if ($p->thumbnail)
                    <img src="{{ Storage::url($p->thumbnail) }}" alt="{{ $p->title }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-emerald-700 to-teal-500 flex items-center justify-center">
                        <span class="text-white drop-shadow-md"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></span>
                    </div>
                    @endif
                    @if ($p->kategori)
                    <div class="absolute top-3 left-3">
                        <span class="bg-white/90 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full shadow-sm">{{ $p->kategori->name }}</span>
                    </div>
                    @endif
                </a>
                <div class="p-5 flex-1 flex flex-col">
                    <p class="text-xs text-gray-400 mb-2">{{ $p->created_at->format('d M Y') }}</p>
                    <h3 class="font-bold text-gray-900 mb-2 leading-snug"><a href="{{ route('publik.potensi-desa.show', $p->slug) }}" class="hover:text-emerald-600 transition-colors">{{ $p->title }}</a></h3>
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">{{ $p->summary }}</p>
                    <div class="mt-auto pt-4 border-t border-gray-50">
                        <a href="{{ route('publik.potensi-desa.show', $p->slug) }}" class="inline-flex items-center gap-1.5 text-emerald-600 hover:text-emerald-700 text-sm font-semibold transition-colors">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @if ($potensis->hasPages())
        <div class="mt-8">{{ $potensis->links() }}</div>
        @endif

        @else
        <!-- Empty State -->
        <div class="py-16 text-center bg-emerald-50 rounded-2xl border border-emerald-100">
            <div class="mb-4 flex justify-center text-emerald-300"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></div>
            <h2 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Potensi Desa</h2>
            <p class="text-gray-500 max-w-md mx-auto">Saat ini belum ada data potensi desa yang dipublikasikan. Silakan cek kembali nanti.</p>
        </div>
        @endif
    </div>
</x-publik-layout>