<x-publik-layout>
    <x-slot name="title">{{ $berita->title }}</x-slot>
    <x-slot name="meta_description">{{ $berita->summary }}</x-slot>
    @if($berita->thumbnail)
    <x-slot name="og_image">{{ Storage::url($berita->thumbnail) }}</x-slot>
    @endif

    <!-- Header -->
    <div class="bg-gradient-to-br from-blue-800 to-blue-600 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-blue-200 mb-4">
                <a href="/" class="hover:text-white">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('publik.berita.index') }}" class="hover:text-white">Berita</a>
                <span class="mx-2">/</span>
                <span class="text-white line-clamp-1">{{ Str::limit($berita->title, 40) }}</span>
            </nav>
            @if ($berita->category)
            <span class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full">{{ $berita->category->name }}</span>
            @endif
            <h1 class="text-3xl lg:text-4xl font-bold text-white mt-3 leading-tight">{{ $berita->title }}</h1>
            <div class="flex items-center gap-4 text-blue-200 text-sm mt-3">
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> {{ $berita->created_at->format('d M Y') }}</span>
                @if ($berita->author)
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg> {{ $berita->author->name }}</span>
                @endif
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Content -->
            <div class="lg:col-span-2">
                @if ($berita->thumbnail)
                <img src="{{ Storage::url($berita->thumbnail) }}" alt="{{ $berita->title }}"
                     class="w-full rounded-2xl object-cover max-h-80 mb-6">
                @endif

                @if ($berita->summary)
                <p class="text-lg text-gray-600 leading-relaxed font-medium mb-6 p-4 bg-blue-50 border-l-4 border-blue-400 rounded-r-xl">
                    {{ $berita->summary }}
                </p>
                @endif

                <div class="prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-4">
                    {!! $berita->content !!}
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-5">
                <!-- Berita Lain -->
                @php $lainnya = \App\Models\Berita::where('id', '!=', $berita->id)->where('status','published')->latest()->take(5)->get(); @endphp
                @if ($lainnya->isNotEmpty())
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100 flex items-center gap-2"><span class="text-green-600"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg></span> Berita Lainnya</h3>
                    <div class="space-y-3">
                        @foreach ($lainnya as $b)
                        <a href="{{ route('publik.berita.show', $b->slug) }}" class="block group">
                            <p class="text-sm font-medium text-gray-800 group-hover:text-blue-600 leading-snug transition-colors line-clamp-2">{{ $b->title }}</p>
                            <p class="text-xs text-gray-400 mt-0.5">{{ $b->created_at->format('d M Y') }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Kembali -->
                <a href="{{ route('publik.berita.index') }}"
                   class="flex items-center gap-2 text-blue-600 hover:text-blue-700 text-sm font-medium transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Kembali ke Daftar Berita
                </a>
            </div>
        </div>
    </div>
</x-publik-layout>
