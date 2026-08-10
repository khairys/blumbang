<x-publik-layout>
    <x-slot name="title">Produk Olahan Jagung</x-slot>
    <div class="bg-gradient-to-br from-amber-600 to-orange-500 py-14 relative overflow-hidden">
        <div class="absolute top-0 right-0 opacity-10 mt-10 mr-10 text-white"><svg class="w-64 h-64" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-amber-100 mb-3"><a href="{{ route('beranda') }}" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Produk Jagung</span></nav>
            <h1 class="text-4xl font-bold text-white flex items-center gap-3"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg> Produk Olahan Jagung</h1>
            <p class="text-amber-100 mt-2">Inovasi produk bergizi berbasis jagung untuk pencegahan stunting di Desa Blumbang</p>
        </div>
    </div>

    <!-- Edukasi Stunting -->
    <div class="bg-red-50 border-b border-red-100 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-red-700"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                <div class="flex-1">
                    <p class="font-bold text-red-800 text-sm">Tentang Stunting</p>
                    <p class="text-sm text-red-700">Stunting adalah kondisi gagal tumbuh pada anak akibat kekurangan gizi kronis. Konsumsi jagung yang kaya protein, vitamin B, dan mineral dapat membantu mencegah stunting pada balita.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Pencarian -->
        <div class="flex justify-end mb-8">
            <form action="{{ route('publik.potensi-jagung.index') }}" method="GET" class="relative w-full md:w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari konten..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-amber-500">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>

        @if(isset($produks) && $produks->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($produks as $p)
            <article class="bg-white rounded-2xl overflow-hidden border border-amber-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-200 flex flex-col">
                <a href="{{ route('publik.potensi-jagung.show', $p->slug) }}" class="block relative aspect-video">
                    @if ($p->thumbnail)
                    <img src="{{ Storage::url($p->thumbnail) }}" alt="{{ $p->title }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-amber-400 to-orange-400 flex items-center justify-center">
                        <span class="text-white drop-shadow-md"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg></span>
                    </div>
                    @endif
                    <div class="absolute top-3 right-3">
                        <span class="text-xs font-bold bg-white/95 text-amber-700 px-3 py-1 rounded-full shadow-sm">{{ $p->category }}</span>
                    </div>
                </a>
                <div class="p-5 flex-1 flex flex-col">
                    <p class="text-xs text-gray-400 mb-2">{{ $p->created_at->format('d M Y') }}</p>
                    <h3 class="font-bold text-gray-900 mb-2 leading-snug"><a href="{{ route('publik.potensi-jagung.show', $p->slug) }}" class="hover:text-amber-600 transition-colors">{{ $p->title }}</a></h3>
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">{{ $p->summary }}</p>
                    <div class="mt-auto pt-4 border-t border-gray-50">
                        <a href="{{ route('publik.potensi-jagung.show', $p->slug) }}" class="inline-flex items-center gap-1.5 text-amber-600 hover:text-amber-700 text-sm font-semibold transition-colors">
                            Baca Edukasi
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @if ($produks->hasPages())
        <div class="mt-8">{{ $produks->links() }}</div>
        @endif
        @else
        <!-- Empty State -->
        <div class="py-16 text-center bg-amber-50 rounded-2xl border border-amber-100">
            <div class="mb-4 flex justify-center text-amber-300"><svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg></div>
            <h2 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Olahan Jagung</h2>
            <p class="text-gray-500 max-w-md mx-auto">Saat ini belum ada produk olahan jagung atau edukasi yang dipublikasikan. Silakan cek kembali nanti.</p>
        </div>
        @endif
    </div>
</x-publik-layout>