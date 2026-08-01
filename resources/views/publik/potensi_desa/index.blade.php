<x-publik-layout>
    <x-slot name="title">Potensi Desa</x-slot>
    <div class="bg-gradient-to-br from-emerald-800 to-teal-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-emerald-200 mb-3"><a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Potensi Desa</span></nav>
            <h1 class="text-4xl font-bold text-white">Potensi Desa Blumbang</h1>
            <p class="text-emerald-200 mt-2">Kekayaan alam, budaya, dan sumber daya manusia Desa Blumbang</p>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filter Kategori & Pencarian -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
            @if(isset($kategoris) && $kategoris->isNotEmpty())
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('publik.potensi-desa.index') }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ !request('kategori') ? 'bg-emerald-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700' }} transition-colors">Semua</a>
                @foreach ($kategoris as $k)
                <a href="{{ route('publik.potensi-desa.index') }}?kategori={{ $k->slug }}"
                   class="px-4 py-1.5 text-sm font-medium rounded-full {{ request('kategori') === $k->slug ? 'bg-emerald-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700' }} transition-colors">{{ $k->name }}</a>
                @endforeach
            </div>
            @endif
            
            <form action="{{ route('publik.potensi-desa.index') }}" method="GET" class="relative w-full md:w-64 flex-shrink-0">
                @if(request('kategori'))
                    <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                @endif
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari potensi..." class="w-full pl-10 pr-4 py-2 border border-gray-200 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400">
                <svg class="w-4 h-4 text-gray-400 absolute left-3.5 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </form>
        </div>

        @if(isset($potensis) && $potensis->isNotEmpty())
        <!-- Real Data -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($potensis as $p)
            <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200 flex flex-col">
                <a href="{{ route('publik.potensi-desa.show', $p->slug) }}" class="block relative aspect-video">
                    @if ($p->thumbnail)
                    <img src="{{ Storage::url($p->thumbnail) }}" alt="{{ $p->title }}" class="w-full h-full object-cover">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-emerald-700 to-teal-500 flex items-center justify-center">
                        <span class="text-6xl drop-shadow-md">🏡</span>
                    </div>
                    @endif
                    @if ($p->kategori)
                    <div class="absolute top-3 left-3">
                        <span class="bg-white/90 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full shadow-sm">{{ $p->kategori->name }}</span>
                    </div>
                    @endif
                </a>
                <div class="p-5 flex-1 flex flex-col">
                    <p class="text-xs text-gray-400 mb-2">{{ $p->created_at->format('d M Y') }}</p>
                    <h3 class="font-bold text-gray-900 mb-2 leading-snug"><a href="{{ route('publik.potensi-desa.show', $p->slug) }}" class="hover:text-emerald-600 transition-colors">{{ $p->title }}</a></h3>
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4">{{ $p->summary }}</p>
                    <div class="mt-auto pt-4 border-t border-gray-50">
                        <a href="{{ route('publik.potensi-desa.show', $p->slug) }}" class="inline-flex items-center gap-1.5 text-emerald-600 hover:text-emerald-700 text-sm font-semibold transition-colors">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @if ($potensis->hasPages())
        <div class="mt-8">{{ $potensis->links() }}</div>
        @endif

        @else
        <!-- Dummy Data -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php $dummies = [
                ['emoji'=>'🌾','title'=>'Pertanian Jagung','kat'=>'Pertanian','desc'=>'Lahan pertanian jagung seluas ±120 Ha yang menjadi komoditas utama. Produksi rata-rata 8 ton/ha per musim dengan varietas unggul.','bg'=>'from-green-700 to-emerald-500'],
                ['emoji'=>'🌾','title'=>'Pertanian Padi','kat'=>'Pertanian','desc'=>'Sawah irigasi teknis seluas ±45 Ha menghasilkan beras premium dengan sistem tanam padi organik yang mulai dikembangkan.','bg'=>'from-green-800 to-green-600'],
                ['emoji'=>'🏞️','title'=>'Wisata Perbukitan','kat'=>'Wisata','desc'=>'Pemandangan perbukitan hijau dengan hamparan sawah terasering menjadi daya tarik wisata pedesaan yang mulai berkembang.','bg'=>'from-emerald-700 to-teal-500'],
                ['emoji'=>'🎭','title'=>'Kesenian Jathilan','kat'=>'Budaya','desc'=>'Kesenian tradisional jathilan yang masih aktif dengan kelompok seni yang rutin tampil pada berbagai acara desa.','bg'=>'from-purple-700 to-purple-500'],
                ['emoji'=>'🏺','title'=>'Kerajinan Anyaman','kat'=>'UMKM','desc'=>'Industri rumahan anyaman bambu dan rotan yang menghasilkan produk keranjang, tampah, dan perabot rumah tangga.','bg'=>'from-amber-700 to-yellow-500'],
                ['emoji'=>'🌿','title'=>'Tanaman Herbal','kat'=>'Pertanian','desc'=>'Budidaya tanaman herbal seperti jahe, kunyit, dan temulawak yang diolah menjadi jamu dan minuman kesehatan.','bg'=>'from-teal-700 to-cyan-500'],
            ]; @endphp
            @foreach ($dummies as $p)
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200">
                <div class="h-44 bg-gradient-to-br {{ $p['bg'] }} flex items-center justify-center relative">
                    <span class="text-6xl opacity-80">{{ $p['emoji'] }}</span>
                    <div class="absolute top-3 left-3">
                        <span class="bg-white/90 text-emerald-700 text-xs font-bold px-3 py-1 rounded-full shadow-sm">{{ $p['kat'] }}</span>
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-bold text-gray-900 mb-2">{{ $p['title'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $p['desc'] }}</p>
                    <span class="inline-block text-xs text-gray-400 italic mt-4">Data akan diisi oleh Admin Desa</span>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="mt-8 bg-emerald-50 border border-emerald-200 rounded-xl p-4 text-center text-sm text-emerald-700">
            ℹ️ Belum ada data potensi desa. Admin dapat menambahkannya melalui
            @auth <a href="{{ route('admin.potensi-desa.create') }}" class="font-semibold underline">Panel Admin</a>. @else Panel Admin. @endauth
        </div>
        @endif
    </div>
</x-publik-layout>