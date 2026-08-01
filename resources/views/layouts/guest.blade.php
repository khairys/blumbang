<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Admin – Desa Blumbang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="antialiased">
    <div class="min-h-screen flex">
        {{-- Left Panel --}}
        <div class="hidden lg:flex lg:flex-1 bg-gradient-to-br from-green-900 via-green-800 to-emerald-700 flex-col justify-between p-12 relative overflow-hidden">
            {{-- Pattern --}}
            <div class="absolute inset-0 opacity-10">
                <svg width="100%" height="100%" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <defs><pattern id="grain" width="10" height="10" patternUnits="userSpaceOnUse"><circle cx="5" cy="5" r="1" fill="white"/></pattern></defs>
                    <rect width="100%" height="100%" fill="url(#grain)"/>
                </svg>
            </div>
            <div class="relative">
                <div class="flex items-center gap-3 mb-12">
                    <div class="w-12 h-12 bg-white/20 rounded-2xl flex items-center justify-center text-2xl">🏘️</div>
                    <div>
                        <p class="text-white font-bold text-xl">Desa Blumbang</p>
                        <p class="text-green-300 text-sm">Boyolali, Jawa Tengah</p>
                    </div>
                </div>
                <h1 class="text-4xl font-bold text-white leading-tight mb-4">
                    Panel Administrasi<br>Website Desa
                </h1>
                <p class="text-green-200 text-lg leading-relaxed">
                    Kelola seluruh konten website desa secara mudah dan mandiri tanpa memerlukan keahlian teknis.
                </p>
            </div>
            <div class="relative grid grid-cols-3 gap-4">
                @foreach([['📰','Kelola Berita'],['📢','Pengumuman'],['🌽','Produk Jagung']] as $f)
                <div class="bg-white/10 rounded-2xl p-4 text-center">
                    <p class="text-3xl mb-2">{{ $f[0] }}</p>
                    <p class="text-white text-xs font-medium">{{ $f[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Right Panel - Login Form --}}
        <div class="flex-1 lg:max-w-md flex flex-col justify-center px-8 py-12 bg-white">
            <div class="w-full max-w-sm mx-auto">
                <div class="lg:hidden flex items-center gap-2 mb-8">
                    <div class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center text-xl">🏘️</div>
                    <p class="font-bold text-gray-900">Desa Blumbang</p>
                </div>
                <h2 class="text-2xl font-bold text-gray-900 mb-1">Masuk ke Panel Admin</h2>
                <p class="text-gray-500 text-sm mb-8">Gunakan akun administrator untuk melanjutkan</p>

                {{ $slot }}

                <p class="text-center text-xs text-gray-400 mt-8">
                    <a href="{{ route('beranda') }}" class="text-green-600 hover:underline">← Kembali ke Website Publik</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
