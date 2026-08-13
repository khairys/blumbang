<x-publik-layout>
    <x-slot name="title">{{ $produk->title }} — Potensi Jagung</x-slot>

    {{-- Hero --}}
    <div class="relative bg-gradient-to-br from-amber-600 via-yellow-500 to-green-600 pt-16 pb-24 overflow-hidden">
        <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/3"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-yellow-100 mb-5 flex items-center gap-2 flex-wrap">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="{{ route('publik.potensi-jagung.index') }}" class="hover:text-white transition-colors">Potensi Jagung</a>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white">{{ $produk->title }}</span>
            </nav>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 bg-white/20 text-white text-xs font-bold px-3 py-1.5 rounded-full mb-4 border border-white/30">
                        🌽 {{ $produk->category }}
                    </div>
                    @if($produk->category === 'Produk Unggulan')
                    <div class="inline-flex items-center gap-2 bg-amber-300/30 text-yellow-100 text-xs font-bold px-3 py-1.5 rounded-full mb-4 ml-2 border border-amber-300/40">
                        ⭐ Produk Unggulan
                    </div>
                    @endif
                    <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-4">{{ $produk->title }}</h1>
                    <p class="text-yellow-50 text-lg leading-relaxed">{{ $produk->summary }}</p>
                </div>
                <div class="flex justify-center lg:justify-end">
                    @if($produk->thumbnail)
                        <img src="{{ Storage::url($produk->thumbnail) }}" alt="{{ $produk->title }}" class="w-full max-w-sm h-64 object-cover rounded-2xl shadow-2xl border-4 border-white/30">
                    @else
                        <div class="w-full max-w-sm h-64 bg-gradient-to-br from-white/20 to-white/5 rounded-2xl border-4 border-white/20 flex flex-col items-center justify-center gap-3">
                            <span class="text-8xl">🌽</span>
                            <p class="text-white/60 text-sm text-center">Foto produk akan ditambahkan<br>via Admin Panel</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#ffffff"/>
            </svg>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            {{-- Konten Utama --}}
            <div class="lg:col-span-2 space-y-8">
                {{-- Konten CMS (deskripsi, bahan, cara) --}}
                @if($produk->content)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
                    <div class="prose prose-lg max-w-none
                        prose-headings:text-gray-900 prose-headings:font-bold
                        prose-p:text-gray-700 prose-p:leading-relaxed
                        prose-li:text-gray-700 prose-li:leading-relaxed
                        prose-strong:text-gray-900
                        prose-h2:text-xl prose-h2:border-b prose-h2:border-amber-200 prose-h2:pb-2 prose-h2:mb-4
                        prose-ol:list-decimal prose-ul:list-disc
                    ">
                        {!! $produk->content !!}
                    </div>
                </div>
                @else
                <div class="bg-amber-50 border border-amber-100 rounded-2xl p-8 text-center">
                    <p class="text-amber-700">Konten detail produk ini belum diisi. Silakan lengkapi melalui Admin Panel.</p>
                </div>
                @endif

                {{-- Catatan --}}
                <div class="bg-green-50 border border-green-200 rounded-2xl p-6 flex gap-4">
                    <div class="w-10 h-10 bg-green-100 rounded-xl flex-shrink-0 flex items-center justify-center text-green-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div class="text-sm text-green-800">
                        <strong>Catatan:</strong> Resep dan panduan ini dikembangkan dalam kegiatan KKN Multidisiplin Universitas Diponegoro. Produk berbahan dasar jagung dapat menjadi alternatif pangan lokal sebagai bagian dari pola makan yang beragam dan seimbang.
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="space-y-5">
                {{-- Info Produk --}}
                <div class="bg-gradient-to-br from-amber-50 to-yellow-50 border border-amber-200 rounded-2xl p-6">
                    <h3 class="font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <span>📋</span> Info Produk
                    </h3>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Kategori</span>
                            <span class="font-semibold text-gray-900">{{ $produk->category }}</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Status</span>
                            <span class="inline-flex items-center gap-1 text-green-700 font-semibold">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                Aktif
                            </span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Tanggal</span>
                            <span class="font-semibold text-gray-900">{{ $produk->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                </div>

                {{-- Kembali ke Potensi Jagung --}}
                <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">
                    <h3 class="font-bold text-gray-900 mb-3 text-sm">Jelajahi Produk Lainnya</h3>
                    <a href="{{ route('publik.potensi-jagung.index') }}"
                       class="flex items-center gap-3 w-full bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-4 rounded-xl transition-colors text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/></svg>
                        Lihat Semua Produk Olahan
                    </a>
                </div>

                {{-- Produk lainnya --}}
                @php
                    $lainnya = \App\Models\PotensiJagung::where('status', 'published')
                        ->where('id', '!=', $produk->id)
                        ->limit(5)
                        ->get();
                @endphp
                @if($lainnya->isNotEmpty())
                <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">
                    <h3 class="font-bold text-gray-900 mb-3 text-sm">🌽 Kreasi Olahan Lainnya</h3>
                    <div class="space-y-2">
                        @foreach($lainnya as $l)
                        <a href="{{ route('publik.potensi-jagung.show', $l->slug) }}"
                           class="flex items-center gap-3 p-2 rounded-xl hover:bg-amber-50 transition-colors group">
                            <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-amber-300 to-yellow-400 flex items-center justify-center flex-shrink-0 text-lg">🥣</div>
                            <div class="flex-1 min-w-0">
                                <div class="text-sm font-semibold text-gray-900 group-hover:text-amber-700 transition-colors truncate">{{ $l->title }}</div>
                                <div class="text-xs text-gray-500">{{ $l->category }}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</x-publik-layout>