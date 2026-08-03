<x-publik-layout>
    <x-slot name="title">Kontak</x-slot>

    <div class="bg-gradient-to-br from-green-800 to-teal-600 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="text-sm text-green-200 mb-3">
                <a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span>
                <span class="text-white">Kontak</span>
            </nav>
            <h1 class="text-4xl font-bold text-white">Hubungi Kami</h1>
            <p class="text-green-200 mt-2">Informasi kontak dan lokasi Kantor Desa Blumbang</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
            <!-- Info Kontak -->
            <div class="lg:col-span-2 space-y-5">
                <!-- Alamat -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="font-bold text-gray-900 mb-4 pb-2 border-b border-gray-100">📍 Informasi Kantor</h2>
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 text-xl">📍</div>
                            <div>
                                <p class="text-sm font-semibold text-gray-700 mb-1">Alamat</p>
                                <p class="text-sm text-gray-600 leading-relaxed">{{ $pengaturan->address ?? 'Alamat belum diatur' }}</p>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 text-xl">📞</div>
                            <div>
                                <p class="text-sm font-semibold text-gray-700 mb-1">Telepon</p>
                                <a href="tel:{{ $pengaturan->phone ?? '#' }}" class="text-sm text-blue-600 hover:underline">{{ $pengaturan->phone ?? 'Belum diatur' }}</a>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <div class="w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0 text-xl">✉️</div>
                            <div>
                                <p class="text-sm font-semibold text-gray-700 mb-1">Email</p>
                                <a href="mailto:{{ $pengaturan->email ?? '#' }}" class="text-sm text-blue-600 hover:underline">{{ $pengaturan->email ?? 'Belum diatur' }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jam Layanan -->
                <div class="bg-green-50 border border-green-100 rounded-2xl p-6">
                    <h2 class="font-bold text-green-800 mb-4">⏰ Jam Pelayanan</h2>
                    <div class="space-y-2.5">
                        @php
                        $jams = [['Senin', '08.00 – 15.00 WIB'],['Selasa', '08.00 – 15.00 WIB'],['Rabu', '08.00 – 15.00 WIB'],['Kamis', '08.00 – 15.00 WIB'],['Jumat', '08.00 – 11.00 WIB'],['Sabtu', 'Tutup'],['Minggu', 'Tutup']];
                        @endphp
                        @foreach ($jams as $j)
                        <div class="flex justify-between text-sm {{ in_array($j[0], ['Sabtu','Minggu']) ? 'text-gray-400' : 'text-green-800' }}">
                            <span>{{ $j[0] }}</span>
                            <span class="font-medium">{{ $j[1] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Medsos -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="font-bold text-gray-900 mb-4">📱 Media Sosial</h2>
                    <div class="flex flex-wrap gap-3">
                        @if(isset($pengaturan) && $pengaturan->facebook)
                        <a href="{{ $pengaturan->facebook }}" target="_blank" class="flex items-center gap-2.5 bg-blue-50 hover:bg-blue-100 text-blue-700 text-sm font-medium px-4 py-2.5 rounded-xl transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            Facebook
                        </a>
                        @endif
                        @if(isset($pengaturan) && $pengaturan->instagram)
                        <a href="{{ $pengaturan->instagram }}" target="_blank" class="flex items-center gap-2.5 bg-pink-50 hover:bg-pink-100 text-pink-700 text-sm font-medium px-4 py-2.5 rounded-xl transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12c0 3.259.014 3.668.072 4.948.059 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24c3.259 0 3.668-.014 4.948-.072 1.277-.059 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947 0-3.259-.014-3.667-.072-4.947-.059-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                            Instagram
                        </a>
                        @endif
                        @if(isset($pengaturan) && $pengaturan->youtube)
                        <a href="{{ $pengaturan->youtube }}" target="_blank" class="flex items-center gap-2.5 bg-red-50 hover:bg-red-100 text-red-700 text-sm font-medium px-4 py-2.5 rounded-xl transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            YouTube
                        </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Peta & Info Tambahan -->
            <div class="lg:col-span-3 space-y-5">
                <!-- Peta -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                    @if(isset($pengaturan) && $pengaturan->maps_embed)
                        <div class="h-72 w-full">
                            {!! $pengaturan->maps_embed !!}
                        </div>
                    @else
                    <div class="h-72 bg-gray-100 flex items-center justify-center">
                        <div class="text-center text-gray-400">
                            <svg class="w-16 h-16 mx-auto mb-3 text-green-300" fill="currentColor" viewBox="0 0 24 24"><path d="M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5zM15 19l-6-2.11V5l6 2.11V19z"/></svg>
                            <p class="text-sm font-medium text-gray-500">Peta Lokasi</p>
                            <p class="text-xs text-gray-400 mt-1">Peta belum dikonfigurasi</p>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Struktur Pemerintahan -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                    <h2 class="font-bold text-gray-900 mb-5 pb-2 border-b border-gray-100">👥 Struktur Pemerintahan Desa</h2>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @php
                        $perangkat = [
                            ['jabatan' => 'Kepala Desa', 'nama' => 'Suharto, S.Sos'],
                            ['jabatan' => 'Sekretaris Desa', 'nama' => 'Wahyuni, A.Md'],
                            ['jabatan' => 'Kaur Perencanaan', 'nama' => 'Agus Supriyanto'],
                            ['jabatan' => 'Kaur Keuangan', 'nama' => 'Sri Mulyani'],
                            ['jabatan' => 'Kaur TU & Umum', 'nama' => 'Bambang Setiawan'],
                            ['jabatan' => 'Kasi Pemerintahan', 'nama' => 'Eko Prasetyo'],
                        ];
                        @endphp
                        @foreach ($perangkat as $p)
                        <div class="bg-gray-50 rounded-xl p-3 text-center">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-xl mx-auto mb-2">👤</div>
                            <p class="text-xs font-bold text-gray-900">{{ $p['nama'] }}</p>
                            <p class="text-xs text-gray-500 mt-0.5">{{ $p['jabatan'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-publik-layout>
