<x-publik-layout>
    <x-slot name="title">{{ $layanan->title }}</x-slot>
    <div class="bg-gradient-to-br from-purple-800 to-purple-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-purple-200 mb-3">
                <a href="/" class="hover:text-white">Beranda</a>
                <span class="mx-2">/</span>
                <a href="{{ route('publik.layanan.index') }}" class="hover:text-white">Layanan Publik</a>
                <span class="mx-2">/</span>
                <span class="text-white">{{ $layanan->title }}</span>
            </nav>
            <h1 class="text-3xl md:text-4xl font-bold text-white">{{ $layanan->title }}</h1>
            @if($layanan->service_hours)
            <div class="mt-3 inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm border border-white/30 text-white text-sm font-medium px-4 py-1.5 rounded-full">
                <span class="flex items-center gap-1.5"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg> {{ $layanan->service_hours }}</span>
            </div>
            @endif
        </div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-6">
        @if($layanan->description)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2"><span class="text-purple-600"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></span> Tentang Layanan Ini</h2>
            <div class="prose prose-purple max-w-none text-gray-700 leading-relaxed">{!! $layanan->description !!}</div>
        </div>
        @endif
        @if($layanan->requirements)
        <div class="bg-blue-50 rounded-2xl border border-blue-100 p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2"><span class="text-blue-600"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"/></svg></span> Persyaratan Administrasi</h2>
            <div class="prose prose-blue max-w-none text-gray-700">{!! $layanan->requirements !!}</div>
        </div>
        @endif
        @if($layanan->service_flow)
        <div class="bg-green-50 rounded-2xl border border-green-100 p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2"><span class="text-green-600"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></span> Alur Pelayanan</h2>
            <div class="prose prose-green max-w-none text-gray-700">{!! $layanan->service_flow !!}</div>
        </div>
        @endif
        <div class="bg-amber-50 rounded-2xl border border-amber-100 p-6 flex flex-wrap gap-6">
            @if($layanan->service_hours)
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-amber-200 rounded-xl flex items-center justify-center text-amber-700"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <div><p class="text-xs font-semibold text-amber-800 uppercase tracking-wide">Jam Pelayanan</p><p class="text-sm text-gray-700 font-medium">{{ $layanan->service_hours }}</p></div>
            </div>
            @endif
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-green-200 rounded-xl flex items-center justify-center text-green-700"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
                <div><p class="text-xs font-semibold text-green-800 uppercase tracking-wide">Biaya</p><p class="text-sm text-gray-700 font-medium">Gratis</p></div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-200 rounded-xl flex items-center justify-center text-blue-700"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                <div><p class="text-xs font-semibold text-blue-800 uppercase tracking-wide">Lokasi</p><p class="text-sm text-gray-700 font-medium">{{ $pengaturan?->address ?? 'Kantor Desa Blumbang' }}</p></div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-wrap items-center gap-5">
            <div class="text-green-600"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></div>
            <div class="flex-1"><p class="font-bold text-gray-900 mb-1">Butuh Informasi Lebih Lanjut?</p><p class="text-sm text-gray-500">Hubungi kantor desa kami untuk informasi lebih lanjut.</p></div>
            <div class="flex flex-wrap gap-3">
                @if($pengaturan?->phone)<a href="tel:{{ $pengaturan->phone }}" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-5 py-2.5 rounded-xl transition-colors"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg> {{ $pengaturan->phone }}</a>@endif
                <a href="{{ route('publik.kontak') }}" class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium px-5 py-2.5 rounded-xl transition-colors">Halaman Kontak →</a>
            </div>
        </div>
        <a href="{{ route('publik.layanan.index') }}" class="inline-flex items-center gap-2 text-sm text-purple-600 hover:text-purple-700 font-medium">← Kembali ke Daftar Layanan</a>
    </div>
</x-publik-layout>