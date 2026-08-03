<x-publik-layout>
    <x-slot name="title">Layanan Publik</x-slot>
    <div class="bg-gradient-to-br from-purple-800 to-purple-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-purple-200 mb-3"><a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Layanan Publik</span></nav>
            <h1 class="text-4xl font-bold text-white">Layanan Publik Desa</h1>
            <p class="text-purple-200 mt-2">Panduan prosedur dan persyaratan layanan administrasi Desa Blumbang</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Info Jam Layanan -->
        <div class="bg-green-50 border border-green-200 rounded-2xl p-5 mb-8 flex flex-wrap items-center gap-4">
            <div class="text-3xl">⏰</div>
            <div>
                <p class="font-bold text-green-800">Jam Pelayanan Kantor Desa</p>
                <p class="text-sm text-green-700">Senin – Kamis: 08.00 – 15.00 WIB &nbsp;|&nbsp; Jumat: 08.00 – 11.00 WIB &nbsp;|&nbsp; Sabtu – Minggu: Tutup</p>
            </div>
        </div>
        <!-- Pencarian -->
        <div class="flex justify-end mb-6">
            <form action="{{ route('publik.layanan.index') }}" method="GET" class="relative w-full md:w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari layanan..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>
        
        @if(isset($layanans) && $layanans->isNotEmpty())
        <!-- Real Data -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach ($layanans as $l)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex flex-col sm:flex-row items-start gap-4">
                    <div class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center flex-shrink-0 text-2xl">📄</div>
                    <div class="flex-1">
                        <h3 class="font-bold text-gray-900 text-base mb-1">{{ $l->title }}</h3>
                        <p class="text-sm text-gray-500 mb-4">{{ $l->description }}</p>
                        @if($l->requirements)
                        <div class="mb-4">
                            <p class="text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">Persyaratan:</p>
                            <div class="prose prose-sm prose-purple max-w-none text-gray-600">
                                {!! $l->requirements !!}
                            </div>
                        </div>
                        @endif
                        <div class="flex flex-wrap gap-4 text-xs">
                            @if($l->processing_time)
                            <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full font-medium">⏱ {{ $l->processing_time }}</span>
                            @endif
                            <span class="bg-green-50 text-green-700 px-3 py-1 rounded-full font-medium">💰 Gratis</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if ($layanans->hasPages())
        <div class="mt-8">{{ $layanans->links() }}</div>
        @endif

        @else
        <!-- Empty State -->
        <div class="py-16 text-center bg-purple-50 rounded-2xl border border-purple-100">
            <div class="text-6xl mb-4 opacity-50">📋</div>
            <h2 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Layanan</h2>
            <p class="text-gray-500 max-w-md mx-auto">Saat ini belum ada informasi layanan publik yang ditambahkan. Silakan cek kembali nanti.</p>
        </div>
        @endif
    </div>
</x-publik-layout>