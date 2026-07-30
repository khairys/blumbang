<x-publik-layout>
    <x-slot name="title">{{ $pengumuman->title }}</x-slot>

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
                <span>📅 {{ $pengumuman->created_at->format('d M Y') }}</span>
                @if ($pengumuman->expired_at)
                <span class="{{ \Carbon\Carbon::parse($pengumuman->expired_at)->isPast() ? 'line-through opacity-60' : '' }}">
                    🔚 Berlaku hingga: {{ \Carbon\Carbon::parse($pengumuman->expired_at)->format('d M Y') }}
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
                {!! nl2br(e($pengumuman->content)) !!}
            </div>

            @if ($pengumuman->attachment)
            <div class="mt-8 pt-5 border-t border-gray-100">
                <a href="{{ Storage::url($pengumuman->attachment) }}" target="_blank"
                   class="inline-flex items-center gap-2 bg-amber-50 hover:bg-amber-100 border border-amber-200 text-amber-700 font-medium text-sm px-5 py-2.5 rounded-xl transition-colors">
                    📎 Unduh Lampiran
                </a>
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
