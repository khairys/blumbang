<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard Admin</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-green-700 to-emerald-600 rounded-2xl p-6 text-white shadow-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-xl font-bold">Selamat datang, {{ Auth::user()->name }}! 👋</h1>
                        <p class="text-green-100 text-sm mt-1">Panel Administrasi Website Desa Blumbang</p>
                        <p class="text-green-200 text-xs mt-2">{{ now()->translatedFormat('l, d F Y') }}</p>
                    </div>
                    <div class="hidden sm:block text-6xl opacity-20">🏘️</div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                @php
                $stats = [
                    ['label' => 'Total Berita', 'value' => \App\Models\Berita::count(), 'icon' => '📰', 'color' => 'blue', 'href' => route('admin.berita.index')],
                    ['label' => 'Pengumuman Aktif', 'value' => \App\Models\Pengumuman::where('status', 'published')->count(), 'icon' => '📢', 'color' => 'amber', 'href' => route('admin.pengumuman.index')],
                    ['label' => 'Data Layanan', 'value' => \App\Models\Layanan::count(), 'icon' => '📋', 'color' => 'purple', 'href' => route('admin.layanan.index')],
                    ['label' => 'Potensi Desa', 'value' => \App\Models\PotensiDesa::count(), 'icon' => '🏡', 'color' => 'green', 'href' => route('admin.potensi-desa.index')],
                ];
                $colorMap = ['blue' => 'bg-blue-50 border-blue-200 text-blue-700', 'amber' => 'bg-amber-50 border-amber-200 text-amber-700', 'purple' => 'bg-purple-50 border-purple-200 text-purple-700', 'green' => 'bg-green-50 border-green-200 text-green-700'];
                @endphp

                @foreach ($stats as $s)
                <a href="{{ $s['href'] }}" class="bg-white rounded-2xl border {{ $colorMap[$s['color']] }} p-5 hover:shadow-md transition-shadow block">
                    <div class="text-3xl mb-3">{{ $s['icon'] }}</div>
                    <p class="text-3xl font-bold text-gray-900">{{ $s['value'] }}</p>
                    <p class="text-sm text-gray-500 mt-1">{{ $s['label'] }}</p>
                </a>
                @endforeach
            </div>

            <!-- Quick Access -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <h2 class="font-bold text-gray-900 mb-4">Akses Cepat</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                    @php
                    $menus = [
                        ['icon' => '📰', 'label' => 'Tambah Berita', 'href' => route('admin.berita.create'), 'color' => 'blue'],
                        ['icon' => '📢', 'label' => 'Tambah Pengumuman', 'href' => route('admin.pengumuman.create'), 'color' => 'amber'],
                        ['icon' => '🏡', 'label' => 'Tambah Potensi', 'href' => route('admin.potensi-desa.create'), 'color' => 'emerald'],
                        ['icon' => '🌽', 'label' => 'Tambah Prod. Jagung', 'href' => route('admin.potensi-jagung.create'), 'color' => 'yellow'],
                        ['icon' => '📋', 'label' => 'Tambah Layanan', 'href' => route('admin.layanan.create'), 'color' => 'purple'],
                        ['icon' => '⚙️', 'label' => 'Pengaturan Web', 'href' => route('admin.pengaturan.index'), 'color' => 'gray'],
                    ];
                    $qcColors = ['blue' => 'bg-blue-50 hover:bg-blue-100 text-blue-700', 'amber' => 'bg-amber-50 hover:bg-amber-100 text-amber-700', 'emerald' => 'bg-emerald-50 hover:bg-emerald-100 text-emerald-700', 'yellow' => 'bg-yellow-50 hover:bg-yellow-100 text-yellow-700', 'purple' => 'bg-purple-50 hover:bg-purple-100 text-purple-700', 'gray' => 'bg-gray-50 hover:bg-gray-100 text-gray-700'];
                    @endphp
                    @foreach ($menus as $m)
                    <a href="{{ $m['href'] }}" class="{{ $qcColors[$m['color']] }} rounded-xl p-4 flex flex-col items-center gap-2 text-center transition-colors">
                        <span class="text-2xl">{{ $m['icon'] }}</span>
                        <span class="text-xs font-semibold">{{ $m['label'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Recent Berita & Info -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Berita Terbaru -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="font-bold text-gray-900">Berita Terbaru</h2>
                        <a href="{{ route('admin.berita.index') }}" class="text-xs text-green-600 hover:text-green-700 font-medium">Lihat Semua →</a>
                    </div>
                    @php $beritaRecent = \App\Models\Berita::latest()->take(5)->get(); @endphp
                    @if ($beritaRecent->isEmpty())
                    <div class="text-center py-8 text-gray-400">
                        <p class="text-4xl mb-2">📝</p>
                        <p class="text-sm">Belum ada berita. <a href="{{ route('admin.berita.create') }}" class="text-green-600 hover:underline">Tambah sekarang</a></p>
                    </div>
                    @else
                    <div class="space-y-3">
                        @foreach ($beritaRecent as $b)
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 text-sm">📰</div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate">{{ $b->title }}</p>
                                <p class="text-xs text-gray-400">{{ $b->created_at->diffForHumans() }} · <span class="capitalize">{{ $b->status }}</span></p>
                            </div>
                            <a href="{{ route('admin.berita.edit', $b) }}" class="text-xs text-blue-600 hover:underline flex-shrink-0">Edit</a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>

                <!-- Pengumuman Aktif -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="font-bold text-gray-900">Pengumuman Aktif</h2>
                        <a href="{{ route('admin.pengumuman.index') }}" class="text-xs text-amber-600 hover:text-amber-700 font-medium">Lihat Semua →</a>
                    </div>
                    @php $pengumumanRecent = \App\Models\Pengumuman::latest()->take(5)->get(); @endphp
                    @if ($pengumumanRecent->isEmpty())
                    <div class="text-center py-8 text-gray-400">
                        <p class="text-4xl mb-2">📢</p>
                        <p class="text-sm">Belum ada pengumuman. <a href="{{ route('admin.pengumuman.create') }}" class="text-amber-600 hover:underline">Tambah sekarang</a></p>
                    </div>
                    @else
                    <div class="space-y-3">
                        @foreach ($pengumumanRecent as $p)
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0 text-sm">📢</div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate">{{ $p->title }}</p>
                                <p class="text-xs text-gray-400">{{ $p->created_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('admin.pengumuman.edit', $p) }}" class="text-xs text-amber-600 hover:underline flex-shrink-0">Edit</a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>

            <!-- Website Info -->
            <div class="bg-green-50 border border-green-100 rounded-2xl p-5 flex flex-wrap items-center gap-4">
                <div class="text-3xl">🌐</div>
                <div class="flex-1">
                    <p class="font-semibold text-green-800">Website Publik</p>
                    <p class="text-sm text-green-700">Lihat tampilan website yang dilihat oleh pengunjung umum</p>
                </div>
                <a href="{{ route('beranda') }}" target="_blank" class="bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-5 py-2 rounded-xl transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    Buka Website
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
