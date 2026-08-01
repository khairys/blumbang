<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel – {{ config('app.name', 'Desa Blumbang') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 antialiased">
<div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden">

    {{-- ===== SIDEBAR ===== --}}
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
           class="fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-green-900 to-green-800 flex flex-col transform transition-transform duration-200 ease-in-out lg:static lg:translate-x-0">

        {{-- Logo --}}
        <div class="flex items-center gap-3 px-5 py-5 border-b border-white/10">
            <div class="w-9 h-9 bg-white/20 rounded-xl flex items-center justify-center text-xl">🏘️</div>
            <div>
                <p class="text-white font-bold text-sm leading-tight">Desa Blumbang</p>
                <p class="text-green-300 text-xs">Panel Administrator</p>
            </div>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 px-3 py-4 overflow-y-auto space-y-1">
            <p class="text-green-400 text-xs font-semibold uppercase tracking-wider px-3 mb-2">Menu Utama</p>

            <a href="{{ route('dashboard') }}"
               class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Dashboard
            </a>

            <p class="text-green-400 text-xs font-semibold uppercase tracking-wider px-3 mt-4 mb-2">Konten</p>

            <a href="{{ route('admin.profil.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.profil.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
                Profil Desa
            </a>

            <a href="{{ route('admin.berita.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.berita.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                Berita
            </a>

            <a href="{{ route('admin.pengumuman.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.pengumuman.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                </svg>
                Pengumuman
            </a>

            <a href="{{ route('admin.layanan.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.layanan.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                </svg>
                Layanan Publik
            </a>

            <a href="{{ route('admin.potensi-desa.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.potensi-desa.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 21l1.9-5.7a8.5 8.5 0 113.8 3.8L3 21"/>
                </svg>
                Potensi Desa
            </a>

            <a href="{{ route('admin.potensi-jagung.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.potensi-jagung.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 3v1m0 16v1M4.22 4.22l.707.707M18.364 18.364l.707.707M1 12h1m20 0h1M4.22 19.778l.707-.707M18.364 5.636l.707-.707M12 7a5 5 0 100 10 5 5 0 000-10z"/>
                </svg>
                Produk Jagung
            </a>

            <p class="text-green-400 text-xs font-semibold uppercase tracking-wider px-3 mt-4 mb-2">Sistem</p>

            <a href="{{ route('admin.pengaturan.index') }}"
               class="sidebar-link {{ request()->routeIs('admin.pengaturan.*') ? 'active' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Pengaturan Website
            </a>

            <a href="{{ route('beranda') }}" target="_blank"
               class="sidebar-link">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                Lihat Website
            </a>
        </nav>

        {{-- User Info --}}
        <div class="border-t border-white/10 px-4 py-4">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-white/20 rounded-full flex items-center justify-center text-white font-bold text-sm">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white text-sm font-semibold truncate">{{ Auth::user()->name }}</p>
                    <p class="text-green-300 text-xs truncate">{{ Auth::user()->email }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-green-400 hover:text-white transition-colors" title="Logout">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    {{-- Overlay --}}
    <div x-show="sidebarOpen" @click="sidebarOpen = false"
         class="fixed inset-0 z-40 bg-black/50 lg:hidden" x-transition></div>

    {{-- ===== MAIN CONTENT ===== --}}
    <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

        {{-- Topbar --}}
        <header class="bg-white border-b border-gray-100 px-4 sm:px-6 py-3 flex items-center justify-between flex-shrink-0">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = true" class="text-gray-500 hover:text-gray-700 lg:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                @isset($header)
                    <div class="text-gray-800">{{ $header }}</div>
                @endisset
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 text-sm text-gray-600 hover:text-gray-900">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-green-700 font-bold text-sm">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <span class="hidden sm:inline">{{ Auth::user()->name }}</span>
                </a>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 overflow-y-auto">
            {{ $slot }}
        </main>
    </div>
</div>
</body>
</html>
