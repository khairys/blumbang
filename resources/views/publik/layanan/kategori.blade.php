<x-publik-layout>
    <x-slot name="title">Layanan Publik - {{ $kategoriTitle }}</x-slot>

    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-emerald-100 mb-4">
                <a href="{{ route('beranda') }}" class="hover:text-white font-medium transition-colors">Beranda</a> 
                <span class="mx-2 text-emerald-300">/</span>
                <a href="{{ route('publik.layanan.index') }}" class="hover:text-white font-medium transition-colors">Layanan Publik</a>
                <span class="mx-2 text-emerald-300">/</span>
                <span class="text-white">{{ $kategoriTitle }}</span>
            </nav>
            <h1 class="text-4xl font-extrabold text-white tracking-tight">{{ $kategoriTitle }}</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl">Daftar lengkap layanan administrasi untuk kategori {{ $kategoriTitle }}</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>
    
    <div class="bg-gray-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 pb-24">
            
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                    Pilih Layanan
                </h2>
                <a href="{{ route('publik.layanan.index') }}" class="text-sm font-medium text-emerald-600 hover:text-emerald-700 flex items-center gap-1 bg-emerald-50 px-4 py-2 rounded-lg hover:bg-emerald-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Kembali
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($layanans as $l)
                <a href="{{ route('publik.layanan.show', $l) }}" class="group block bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 transition-all duration-300 overflow-hidden relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="p-6 h-full flex flex-col relative z-10">
                        <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-emerald-700 transition-colors">{{ $l->title }}</h3>
                        
                        @if($l->description)
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">{{ strip_tags($l->description) }}</p>
                        @endif
                        
                        <div class="mt-auto pt-4 border-t border-gray-50 flex items-center justify-between text-sm">
                            <span class="font-medium text-emerald-600">Lihat Persyaratan</span>
                            <div class="w-8 h-8 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        </div>
    </div>
</x-publik-layout>
