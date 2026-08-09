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
                ⏱ {{ $layanan->service_hours }}
            </div>
            @endif
        </div>
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 space-y-6">
        @if($layanan->description)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2"><span>📋</span> Tentang Layanan Ini</h2>
            <div class="prose prose-purple max-w-none text-gray-700 leading-relaxed">{!! $layanan->description !!}</div>
        </div>
        @endif
        @if($layanan->requirements)
        <div class="bg-blue-50 rounded-2xl border border-blue-100 p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2"><span>📎</span> Persyaratan Administrasi</h2>
            <div class="prose prose-blue max-w-none text-gray-700">{!! $layanan->requirements !!}</div>
        </div>
        @endif
        @if($layanan->service_flow)
        <div class="bg-green-50 rounded-2xl border border-green-100 p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2"><span>🔄</span> Alur Pelayanan</h2>
            <div class="prose prose-green max-w-none text-gray-700">{!! $layanan->service_flow !!}</div>
        </div>
        @endif
        <div class="bg-amber-50 rounded-2xl border border-amber-100 p-6 flex flex-wrap gap-6">
            @if($layanan->service_hours)
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-amber-200 rounded-xl flex items-center justify-center">⏰</div>
                <div><p class="text-xs font-semibold text-amber-800 uppercase tracking-wide">Jam Pelayanan</p><p class="text-sm text-gray-700 font-medium">{{ $layanan->service_hours }}</p></div>
            </div>
            @endif
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-green-200 rounded-xl flex items-center justify-center">💰</div>
                <div><p class="text-xs font-semibold text-green-800 uppercase tracking-wide">Biaya</p><p class="text-sm text-gray-700 font-medium">Gratis</p></div>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-blue-200 rounded-xl flex items-center justify-center">📍</div>
                <div><p class="text-xs font-semibold text-blue-800 uppercase tracking-wide">Lokasi</p><p class="text-sm text-gray-700 font-medium">{{ $pengaturan?->address ?? 'Kantor Desa Blumbang' }}</p></div>
            </div>
        </div>
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex flex-wrap items-center gap-5">
            <div class="text-4xl">📞</div>
            <div class="flex-1"><p class="font-bold text-gray-900 mb-1">Butuh Informasi Lebih Lanjut?</p><p class="text-sm text-gray-500">Hubungi kantor desa kami untuk informasi lebih lanjut.</p></div>
            <div class="flex flex-wrap gap-3">
                @if($pengaturan?->phone)<a href="tel:{{ $pengaturan->phone }}" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-5 py-2.5 rounded-xl transition-colors">📞 {{ $pengaturan->phone }}</a>@endif
                <a href="{{ route('publik.kontak') }}" class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 text-sm font-medium px-5 py-2.5 rounded-xl transition-colors">Halaman Kontak →</a>
            </div>
        </div>
        <a href="{{ route('publik.layanan.index') }}" class="inline-flex items-center gap-2 text-sm text-purple-600 hover:text-purple-700 font-medium">← Kembali ke Daftar Layanan</a>
    </div>
</x-publik-layout>