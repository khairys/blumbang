<x-publik-layout>
    <x-slot name="title">{{ $potensi->title }}</x-slot>
    <x-slot name="meta_description">{{ $potensi->summary }}</x-slot>
    @if($potensi->thumbnail)
    <x-slot name="og_image">{{ Storage::url($potensi->thumbnail) }}</x-slot>
    @endif
    <div class="bg-gradient-to-br from-emerald-800 to-teal-600 pt-20 pb-24 relative overflow-hidden">
        <div class="absolute top-0 right-0 opacity-10 mt-10 mr-10 text-white"><svg class="w-64 h-64" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center gap-2 mb-6">
                @if($potensi->kategori)
                <span class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">{{ $potensi->kategori->name }}</span>
                @endif
                <span class="text-emerald-100 text-sm flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> {{ $potensi->created_at->format('d M Y') }}</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">{{ $potensi->title }}</h1>
            <p class="text-emerald-100 text-lg md:text-xl font-medium max-w-2xl mx-auto">{{ $potensi->summary }}</p>
        </div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-12 relative z-20 pb-20">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
            @if($potensi->thumbnail)
            <div class="w-full h-[400px]">
                <img src="{{ Storage::url($potensi->thumbnail) }}" alt="{{ $potensi->title }}" class="w-full h-full object-cover">
            </div>
            @endif
            <div class="p-8 md:p-12">
                <div class="prose prose-lg prose-emerald max-w-none text-gray-700">
                    {!! $potensi->description !!}
                </div>
                
                <div class="mt-12 pt-8 border-t border-gray-100 flex flex-wrap items-center justify-between gap-4">
                    <a href="{{ route('publik.potensi-desa.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-emerald-600 font-medium transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                        Kembali ke Daftar Potensi
                    </a>
                    
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-medium text-gray-400">Bagikan:</span>
                        <a href="https://wa.me/?text={{ urlencode($potensi->title . ' - ' . route('publik.potensi-desa.show', $potensi->slug)) }}" target="_blank" class="w-10 h-10 rounded-full bg-gray-50 hover:bg-green-100 text-gray-400 hover:text-green-600 flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-publik-layout>