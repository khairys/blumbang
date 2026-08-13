<x-publik-layout>
    <x-slot name="title">{{ $berita->title }}</x-slot>
    <x-slot name="meta_description">{{ $berita->summary }}</x-slot>
    @if($berita->thumbnail)
    <x-slot name="og_image">{{ Storage::url($berita->thumbnail) }}</x-slot>
    @endif

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-20">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-500 mb-6 flex items-center gap-2 font-medium">
            <a href="{{ route('publik.berita.index') }}" class="text-green-600 hover:text-green-700 transition-colors">Berita Desa</a> 
        </nav>
        
        <!-- Judul -->
        <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 leading-tight">{{ $berita->title }}</h1>
        
        <!-- Kategori & Tanggal -->
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-8 font-medium">
            @if ($berita->category)
            <span class="text-green-600 font-bold uppercase tracking-wide text-xs">{{ $berita->category->name }}</span>
            <span class="text-gray-300">•</span>
            @endif
            <span>{{ $berita->created_at->format('d F Y') }}</span>
        </div>
        
        <!-- Foto Utama -->
        @if ($berita->thumbnail)
        <div class="mb-10 rounded-2xl overflow-hidden shadow-sm bg-gray-100">
            <img src="{{ Storage::url($berita->thumbnail) }}" alt="{{ $berita->title }}" class="w-full h-auto object-cover max-h-[500px]">
        </div>
        @endif
        
        <!-- Isi Berita -->
        <div class="prose prose-lg prose-green max-w-none text-gray-700 leading-relaxed mb-12">
            {!! $berita->content !!}
        </div>
        
        <!-- Foto Dokumentasi (opsional jika ada field photo/attachment) -->
        @if (isset($berita->attachment) && $berita->attachment)
        <div class="mb-12">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Foto Dokumentasi</h3>
            <div class="rounded-2xl overflow-hidden shadow-sm bg-gray-100">
                <img src="{{ Storage::url($berita->attachment) }}" alt="Dokumentasi" class="w-full h-auto object-cover max-h-[500px]">
            </div>
        </div>
        @endif
        
        <!-- Sumber / Informasi -->
        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 mb-10">
            <h3 class="text-sm font-bold text-gray-900 mb-2">Sumber/Informasi</h3>
            <p class="text-sm text-gray-600 leading-relaxed">
                Pemerintah Desa Blumbang memastikan informasi ini valid. @if($berita->author) Ditulis oleh {{ $berita->author->name }}. @endif
            </p>
        </div>
        
        <!-- Kembali -->
        <a href="{{ route('publik.berita.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-green-600 font-bold transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
            Kembali ke Berita Desa
        </a>
    </div>
</x-publik-layout>
