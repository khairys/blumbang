<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $pengaturan?->website_description ?? 'Website resmi Desa Blumbang — Media Digitalisasi Informasi Desa dan Edukasi Produk Olahan Jagung dalam Upaya Pencegahan Stunting' }}">
    <title>{{ $title ?? 'Beranda' }} — Desa Blumbang</title>
    
    <!-- Open Graph / Meta SEO -->
    <meta property="og:title" content="{{ $title ?? 'Beranda' }} — Desa Blumbang">
    <meta property="og:description" content="{{ $meta_description ?? $pengaturan?->website_description ?? 'Portal Informasi resmi Desa Blumbang sebagai media digitalisasi desa dan transparansi pelayanan publik.' }}">
    <meta property="og:image" content="{{ isset($og_image) ? url($og_image) : (isset($pengaturan?->logo) ? url(Storage::url($pengaturan->logo)) : url('/favicon.ico')) }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:type" content="website">
    @if($pengaturan?->favicon)
    <link rel="icon" type="image/png" href="{{ Storage::url($pengaturan->favicon) }}">
    @else
    <link rel="icon" type="image/png" href="/favicon.ico">
    @endif

    <!-- AOS CSS for Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif { font-family: 'Merriweather', serif; }

        /* Gradient text */
        .text-gradient {
            background: linear-gradient(135deg, #16a34a, #15803d, #166534);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .text-gradient-corn {
            background: linear-gradient(135deg, #f59e0b, #d97706, #92400e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Hero pattern */
        .hero-pattern {
            background-color: #064e3b;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23065f46' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Card hover */
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.12);
        }

        /* Nav link */
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: #16a34a;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        /* Scroll to top */
        #scrollTop {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        #scrollTop.visible {
            opacity: 1;
        }

        /* Stats counter animation */
        @keyframes countUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .stat-item {
            animation: countUp 0.6s ease forwards;
        }

        /* Mobile menu */
        #mobileMenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }
        #mobileMenu.open {
            max-height: 600px;
        }

        /* Marquee */
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .marquee-track {
            animation: marquee 25s linear infinite;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- NAVBAR -->
    <nav class="bg-white/95 backdrop-blur-md border-b border-gray-200 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="{{ route('beranda') }}" class="flex items-center gap-3">
                    @if(isset($pengaturan) && $pengaturan->logo)
                    <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center shadow-md flex-shrink-0 overflow-hidden p-1 border border-gray-100">
                        <img src="{{ Storage::url($pengaturan->logo) }}" alt="Logo" class="w-full h-full object-contain">
                    </div>
                    @else
                    <div class="w-10 h-10 bg-gradient-to-br from-green-600 to-emerald-700 rounded-xl flex items-center justify-center shadow-md flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    @endif
                    <div class="hidden sm:block">
                        <p class="font-bold text-green-800 leading-tight text-sm">{{ $pengaturan->village_name ?? 'Desa Blumbang' }}</p>
                        <p class="text-xs text-gray-500 leading-tight">{{ $pengaturan?->website_description ?? 'Website Resmi Desa' }}</p>
                    </div>
                </a>

                <!-- Desktop Nav -->
                <div class="hidden lg:flex items-center gap-6">
                    <a href="{{ route('beranda') }}" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 {{ request()->routeIs('beranda') ? 'active text-green-700' : '' }}">Beranda</a>
                    <a href="{{ route('publik.profil') }}" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 {{ request()->routeIs('publik.profil') ? 'active text-green-700' : '' }}">Profil Desa</a>
                    <a href="{{ route('publik.berita.index') }}" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 {{ request()->routeIs('publik.berita*') ? 'active text-green-700' : '' }}">Berita</a>
                    <a href="{{ route('publik.pengumuman.index') }}" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 {{ request()->routeIs('publik.pengumuman*') ? 'active text-green-700' : '' }}">Pengumuman</a>

                    <!-- Dropdown Potensi -->
                    <div class="relative group">
                        <button class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 flex items-center gap-1">
                            Potensi
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute top-full left-0 mt-2 w-52 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="p-1">
                                <a href="{{ route('publik.potensi-desa.index') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">
                                    Potensi Desa
                                </a>
                                <a href="{{ route('publik.potensi-jagung.index') }}" class="block px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                    Produk Olahan Jagung
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('publik.layanan.index') }}" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 {{ request()->routeIs('publik.layanan*') ? 'active text-green-700' : '' }}">Layanan</a>
                    <a href="{{ route('publik.kontak') }}" class="nav-link text-sm font-medium text-gray-700 hover:text-green-700 {{ request()->routeIs('publik.kontak') ? 'active text-green-700' : '' }}">Kontak</a>
                </div>

                <div class="flex items-center gap-3">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="hidden lg:inline-flex items-center gap-1.5 text-sm font-medium text-green-700 bg-green-50 hover:bg-green-100 border border-green-200 rounded-lg px-4 py-2 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/></svg>
                        Admin Panel
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="hidden lg:inline-flex items-center gap-1.5 text-sm font-semibold text-white bg-green-600 hover:bg-green-700 rounded-xl px-5 py-2.5 transition-colors shadow-sm">
                        Masuk Sistem
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    </a>
                    @endauth

                    <!-- Mobile hamburger -->
                    <button id="menuBtn" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors" onclick="document.getElementById('mobileMenu').classList.toggle('open')">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden bg-white border-t border-gray-100">
            <div class="px-4 py-3 space-y-1">
                <a href="{{ route('beranda') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Beranda</a>
                <a href="{{ route('publik.profil') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Profil Desa</a>
                <a href="{{ route('publik.berita.index') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Berita</a>
                <a href="{{ route('publik.pengumuman.index') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Pengumuman</a>
                <a href="{{ route('publik.potensi-desa.index') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Potensi Desa</a>
                <a href="{{ route('publik.potensi-jagung.index') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">Produk Olahan Jagung</a>
                <a href="{{ route('publik.layanan.index') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Layanan Publik</a>
                <a href="{{ route('publik.kontak') }}" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700 rounded-lg">Kontak</a>
                @auth
                <a href="{{ url('/dashboard') }}" class="block px-3 py-2 text-sm font-medium text-green-700 bg-green-50 rounded-lg">Admin Panel</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="bg-gradient-to-b from-gray-900 to-slate-950 text-white pt-16 pb-8 border-t-4 border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Branding -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        @if(isset($pengaturan) && $pengaturan->logo)
                        <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center p-1 shadow-md">
                            <img src="{{ Storage::url($pengaturan->logo) }}" alt="Logo" class="w-full h-full object-contain">
                        </div>
                        @else
                        <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        </div>
                        @endif
                        <div>
                            <p class="font-bold text-lg">{{ $pengaturan->village_name ?? 'Desa Blumbang' }}</p>
                            <p class="text-gray-400 text-sm font-semibold">Website Resmi Desa</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm">{{ $pengaturan?->website_description ?? 'Website resmi Desa Blumbang sebagai media digitalisasi informasi desa dan edukasi produk olahan jagung dalam upaya pencegahan stunting.' }}</p>
                    <div class="flex gap-3 mt-4">
                        @if(isset($pengaturan) && $pengaturan->facebook)
                        <a href="{{ $pengaturan->facebook }}" target="_blank" class="w-9 h-9 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        @endif
                        @if(isset($pengaturan) && $pengaturan->instagram)
                        <a href="{{ $pengaturan->instagram }}" target="_blank" class="w-9 h-9 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12c0 3.259.014 3.668.072 4.948.059 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24c3.259 0 3.668-.014 4.948-.072 1.277-.059 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947 0-3.259-.014-3.667-.072-4.947-.059-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        @endif
                        @if(isset($pengaturan) && $pengaturan->youtube)
                        <a href="{{ $pengaturan->youtube }}" target="_blank" class="w-9 h-9 bg-white/10 hover:bg-white/20 rounded-lg flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h3 class="font-semibold text-sm uppercase tracking-wider text-gray-300 mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('beranda') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="{{ route('publik.profil') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Profil Desa</a></li>
                        <li><a href="{{ route('publik.berita.index') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Berita Desa</a></li>
                        <li><a href="{{ route('publik.pengumuman.index') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Pengumuman</a></li>
                        <li><a href="{{ route('publik.layanan.index') }}" class="text-sm text-gray-400 hover:text-white transition-colors">Layanan Publik</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-semibold text-sm uppercase tracking-wider text-gray-300 mb-4">Kontak</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 text-gray-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            <span class="text-sm text-gray-400">{{ $pengaturan->address ?? 'Alamat belum diatur' }}</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span class="text-sm text-gray-400">{{ $pengaturan->phone ?? 'Telepon belum diatur' }}</span>
                        </li>
                        <li class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span class="text-sm text-gray-400">{{ $pengaturan->email ?? 'Email belum diatur' }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-6 flex flex-col sm:flex-row justify-between items-center gap-3">
                <p class="text-sm text-gray-500">© {{ date('Y') }} Pemerintah {{ $pengaturan->village_name ?? 'Desa Blumbang' }}. Semua hak dilindungi.</p>
                <p class="text-xs text-gray-600">Dibangun dengan ❤️ untuk masyarakat {{ $pengaturan->village_name ?? 'Desa Blumbang' }}</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top -->
    <button id="scrollTop" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="fixed bottom-6 right-6 w-11 h-11 bg-green-600 hover:bg-green-700 text-white rounded-full shadow-lg flex items-center justify-center transition-all z-40">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
    </button>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 50,
            easing: 'ease-out-cubic',
        });
        
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('scrollTop');
            if (window.scrollY > 400) btn.classList.add('visible');
            else btn.classList.remove('visible');
        });
    </script>
</body>
</html>
