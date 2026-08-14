<x-publik-layout>
    <x-slot name="title">Pengumuman</x-slot>
    <div class="bg-gradient-to-br from-emerald-800 via-emerald-700 to-green-600 pt-16 pb-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center md:text-left">
            <nav class="text-sm text-emerald-100 mb-6 flex items-center justify-center md:justify-start gap-2">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a> 
                <svg class="w-3 h-3 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white">Pengumuman</span>
            </nav>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">Pengumuman Desa</h1>
            <p class="text-emerald-50 mt-3 text-lg max-w-2xl mx-auto md:mx-0">Informasi resmi dan pemberitahuan dari Pemerintah Desa Blumbang untuk masyarakat.</p>
        </div>
        <!-- Wave -->
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 60L1440 60L1440 30C1200 60 960 0 720 15C480 30 240 60 0 30L0 60Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Pencarian & Filter -->
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8">
            <div class="flex flex-wrap gap-2 w-full sm:w-auto">
                <a href="{{ route('publik.pengumuman.index', ['search' => request('search')]) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors {{ !request('filter') ? 'bg-emerald-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:bg-emerald-50' }}">Semua</a>
                <a href="{{ route('publik.pengumuman.index', ['filter' => 'aktif', 'search' => request('search')]) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors {{ request('filter') === 'aktif' ? 'bg-emerald-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:bg-emerald-50' }}">Aktif</a>
                <a href="{{ route('publik.pengumuman.index', ['filter' => 'mendatang', 'search' => request('search')]) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors {{ request('filter') === 'mendatang' ? 'bg-emerald-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:bg-emerald-50' }}">Mendatang</a>
                <a href="{{ route('publik.pengumuman.index', ['filter' => 'selesai', 'search' => request('search')]) }}" class="px-4 py-2 rounded-full text-sm font-medium transition-colors {{ request('filter') === 'selesai' ? 'bg-emerald-600 text-white' : 'bg-white text-gray-600 border border-gray-200 hover:bg-emerald-50' }}">Selesai</a>
            </div>

            <form action="{{ route('publik.pengumuman.index') }}" method="GET" class="relative w-full sm:w-64">
                @if(request('filter'))
                    <input type="hidden" name="filter" value="{{ request('filter') }}">
                @endif
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari pengumuman..." class="w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>

        @if(isset($pengumumans) && $pengumumans->isNotEmpty())
            <div class="space-y-4">
                @foreach ($pengumumans as $p)
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden transition-all duration-200 hover:shadow-md">
                    <div class="p-6 md:p-8">
                        <div class="flex flex-wrap items-center gap-2 mb-3">
                            @php
                                $statusClass = 'bg-emerald-100 text-emerald-700';
                                if($p->activity_status === 'mendatang') $statusClass = 'bg-blue-100 text-blue-700';
                                if($p->activity_status === 'selesai') $statusClass = 'bg-gray-100 text-gray-600';
                            @endphp
                            <span class="text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full {{ $statusClass }}">
                                {{ ucfirst($p->activity_status ?? 'Aktif') }}
                            </span>
                        </div>
                        <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-3">
                            {{ $p->title }}
                        </h2>
                        <div class="text-gray-600 leading-relaxed mb-6 line-clamp-3">
                            {!! strip_tags($p->content) !!}
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-4 border-t border-gray-50">
                            <div class="text-sm text-gray-500 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                Diumumkan: {{ $p->published_at ? \Carbon\Carbon::parse($p->published_at)->format('d M Y') : $p->created_at->format('d M Y') }}
                            </div>
                            <a href="{{ route('publik.pengumuman.show', $p->slug) }}" class="inline-flex items-center gap-2 text-emerald-600 font-bold hover:text-emerald-700 transition-colors">
                                Baca Selengkapnya 
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @if ($pengumumans->hasPages())
                <div class="mt-8">{{ $pengumumans->links() }}</div>
            @endif
        @else
            <!-- Empty State -->
            <div class="py-16 px-6 text-center bg-white rounded-3xl border border-gray-100 shadow-sm mt-8">
                <div class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center mx-auto mb-5 text-emerald-500">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Belum Ada Pengumuman</h3>
                <p class="text-gray-500 max-w-md mx-auto mb-8 leading-relaxed">
                    Saat ini belum terdapat pengumuman yang dipublikasikan oleh Pemerintah Desa Blumbang.<br><br>
                    Informasi terbaru akan ditampilkan pada halaman ini setelah pengumuman dipublikasikan oleh admin desa.
                </p>
                <a href="{{ route('beranda') }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-full transition-colors">
                    Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</x-publik-layout>