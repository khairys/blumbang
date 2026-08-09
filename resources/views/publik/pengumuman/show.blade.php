<x-publik-layout>
    <x-slot name="title">{{ $pengumuman->title }}</x-slot>
    <x-slot name="meta_description">{{ strip_tags(Str::limit($pengumuman->content, 150)) }}</x-slot>
    @if($pengumuman->attachment && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $pengumuman->attachment))
    <x-slot name="og_image">{{ Storage::url($pengumuman->attachment) }}</x-slot>
    @endif

    <div class="bg-gradient-to-br from-amber-600 to-yellow-500 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-amber-100 mb-4">
                <a href="/" class="hover:text-white">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('publik.pengumuman.index') }}" class="hover:text-white">Pengumuman</a>
                <span class="mx-2">/</span>
                <span class="text-white">Detail</span>
            </nav>
            <h1 class="text-3xl font-bold text-white leading-tight">{{ $pengumuman->title }}</h1>
            <div class="flex flex-wrap items-center gap-3 text-amber-100 text-sm mt-3">
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg> {{ $pengumuman->created_at->format('d M Y') }}</span>
                @if ($pengumuman->expired_at)
                <span class="{{ \Carbon\Carbon::parse($pengumuman->expired_at)->isPast() ? 'line-through opacity-60' : '' }}">
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> Berlaku hingga: {{ \Carbon\Carbon::parse($pengumuman->expired_at)->format('d M Y') }}</span>
                </span>
                @endif
                <span class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    {{ $pengumuman->status === 'published' ? 'Aktif' : 'Draft' }}
                </span>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
            <div class="prose prose-gray max-w-none text-gray-700 leading-relaxed space-y-4">
                {!! $pengumuman->content !!}
            </div>

            @if ($pengumuman->attachment)
            <div class="mt-8 pt-5 border-t border-gray-100">
                @php
                    $isImage = preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $pengumuman->attachment);
                @endphp

                @if($isImage)
                <p class="text-sm font-semibold text-gray-700 mb-3">Lampiran Gambar:</p>
                <div class="bg-gray-50 rounded-2xl border border-gray-100 p-2 text-center">
                    <img src="{{ Storage::url($pengumuman->attachment) }}" alt="Lampiran" class="max-w-full max-h-[600px] object-contain mx-auto rounded-xl shadow-sm">
                </div>
                @else
                <a href="{{ Storage::url($pengumuman->attachment) }}" target="_blank"
                   class="inline-flex items-center gap-2 bg-amber-50 hover:bg-amber-100 border border-amber-200 text-amber-700 font-medium text-sm px-5 py-2.5 rounded-xl transition-colors">
                    <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/></svg> Unduh Lampiran Dokumen</span>
                </a>
                @endif
            </div>
            @endif
        </div>

        <div class="mt-6">
            <a href="{{ route('publik.pengumuman.index') }}"
               class="inline-flex items-center gap-2 text-amber-600 hover:text-amber-700 text-sm font-medium transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                Kembali ke Daftar Pengumuman
            </a>
        </div>
    </div>
</x-publik-layout>
