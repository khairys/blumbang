<x-publik-layout>
    <x-slot name="title">{{ $produk->title }}</x-slot>
    <x-slot name="meta_description">{{ $produk->summary }}</x-slot>
    @if($produk->thumbnail)
    <x-slot name="og_image">{{ Storage::url($produk->thumbnail) }}</x-slot>
    @endif
    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-20 pb-32 relative overflow-hidden">
        <div class="absolute top-0 right-0 opacity-10 mt-10 mr-10 text-white"><svg class="w-64 h-64" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 mb-6">
                <span class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">{{ $produk->category }}</span>
                <span class="text-emerald-100 text-sm flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> {{ $produk->created_at->format('d M Y') }}</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">{{ $produk->title }}</h1>
            <p class="text-emerald-100 text-lg md:text-xl font-medium max-w-2xl mx-auto">{{ $produk->summary }}</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#ffffff"/>
            </svg>
        </div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20 pb-20">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            @if($produk->thumbnail)
            <div class="w-full h-[400px]">
                <img src="{{ Storage::url($produk->thumbnail) }}" alt="{{ $produk->title }}" class="w-full h-full object-cover">
            </div>
            @endif
            <div class="p-8 md:p-12">
                <div class="prose prose-lg prose-amber max-w-none text-gray-700">
                    {!! $produk->content !!}
                </div>
                
                <div class="mt-12 pt-8 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                    <a href="{{ route('publik.potensi-jagung.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-amber-600 font-medium transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Kembali ke Daftar Konten
                    </a>
                    
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-gray-400">Bagikan:</span>
                        <a href="https://wa.me/?text={{ urlencode($produk->title . ' - ' . route('publik.potensi-jagung.show', $produk->slug)) }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-50 hover:bg-green-100 text-gray-400 hover:text-green-600 flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-publik-layout>