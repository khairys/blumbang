<x-publik-layout>
    <x-slot name="title">Potensi Jagung Desa Blumbang</x-slot>

    {{-- ===== HERO ===== --}}
    <div class="relative bg-gradient-to-br from-yellow-600 via-amber-500 to-green-600 pt-20 pb-32 overflow-hidden">
        {{-- Decorative circles --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/3"></div>
        <div class="absolute top-16 left-1/4 w-4 h-4 bg-white/30 rounded-full"></div>
        <div class="absolute bottom-20 right-1/4 w-6 h-6 bg-white/20 rounded-full"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-yellow-100 mb-6 flex items-center gap-2">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white">Potensi Jagung</span>
            </nav>
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-4">
                    Potensi Jagung<br>Desa Blumbang
                </h1>
                <p class="text-xl text-yellow-50 mb-8 leading-relaxed max-w-2xl">
                    Mengenal potensi jagung lokal dan berbagai inovasi olahannya sebagai bagian dari pemanfaatan pangan lokal Desa Blumbang.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#produk-olahan" class="inline-flex items-center gap-2 bg-white text-amber-700 font-bold px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-50 transition-colors">
                        🍽️ Lihat Olahan Jagung
                    </a>
                    <a href="#potensi-jagung" class="inline-flex items-center gap-2 bg-white/20 text-white border border-white/40 font-bold px-6 py-3 rounded-xl hover:bg-white/30 transition-colors">
                        Pelajari Potensinya
                    </a>
                </div>
            </div>
        </div>

        {{-- Wave --}}
        <div class="absolute bottom-[-1px] left-0 right-0" style="line-height:0">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width: 100%;">
                <path d="M0 80L1440 80L1440 40C1200 75 960 5 720 20C480 35 240 75 0 40L0 80Z" fill="#f9fafb"/>
            </svg>
        </div>
    </div>

    {{-- ===== PENGANTAR ===== --}}
    <div id="potensi-jagung" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4 leading-tight">Jagung sebagai Potensi Pangan Lokal</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>Desa Blumbang memiliki potensi pertanian yang salah satunya berasal dari komoditas jagung. Jagung dapat dimanfaatkan sebagai bahan pangan dalam berbagai bentuk olahan, baik untuk konsumsi keluarga maupun sebagai produk yang memiliki nilai tambah.</p>
                    <p>Pemanfaatan jagung melalui berbagai inovasi olahan dapat menjadi salah satu cara untuk memperkenalkan pangan lokal sekaligus membuka peluang pengembangan produk di tingkat masyarakat.</p>
                </div>
                
                <h2 class="text-2xl font-extrabold text-gray-900 mt-8 mb-4 leading-tight">Potensi Jagung di Desa Blumbang</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>Jagung merupakan salah satu komoditas pertanian yang dapat dimanfaatkan lebih lanjut menjadi berbagai jenis pangan. Selain dikonsumsi secara langsung, jagung dapat diolah menjadi makanan dan minuman dengan bentuk, rasa, dan cara penyajian yang beragam.</p>
                    <p>Pengembangan berbagai olahan jagung memberikan peluang untuk meningkatkan pemanfaatan hasil pertanian lokal sehingga tidak hanya dijual sebagai bahan mentah, tetapi juga dapat dikembangkan menjadi produk pangan dengan nilai tambah.</p>
                </div>
            </div>
            
            {{-- Alur Nilai Tambah --}}
            <div class="bg-gradient-to-br from-amber-50 to-green-50 rounded-3xl p-8 border border-amber-100 h-full flex flex-col justify-center">
                <div class="flex flex-col items-center gap-0">
                    @foreach([
                        ['🌽', 'Jagung Lokal', 'bg-yellow-100 border-yellow-300 text-yellow-800'],
                        ['⚙️', 'Pengolahan', 'bg-orange-100 border-orange-300 text-orange-800'],
                        ['🥣', 'Produk Olahan', 'bg-green-100 border-green-300 text-green-800'],
                        ['📈', 'Nilai Tambah', 'bg-emerald-100 border-emerald-300 text-emerald-800'],
                    ] as $step)
                    <div class="w-full flex flex-col items-center">
                        <div class="w-full max-w-xs border-2 {{ $step[2] }} rounded-xl px-6 py-4 flex items-center gap-4 text-center justify-center">
                            <span class="text-3xl">{{ $step[0] }}</span>
                            <div class="font-bold text-lg">{{ $step[1] }}</div>
                        </div>
                        @if(!$loop->last)
                        <div class="w-1 h-6 bg-amber-300"></div>
                        <div class="w-4 h-4 border-b-2 border-r-2 border-amber-300 rotate-45 -mt-3 mb-2"></div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- ===== JAGUNG SEBAGAI PANGAN LOKAL (EDUKASI) ===== --}}
    <div class="bg-gradient-to-br from-green-50 to-emerald-50 py-20 mb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Jagung sebagai Bagian dari Pangan Lokal</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @foreach([
                    ['🌾', 'Sumber Karbohidrat', 'Jagung dapat menjadi salah satu sumber karbohidrat dalam menu makanan sehari-hari.', 'bg-amber-50 border-amber-200 text-amber-700'],
                    ['🌿', 'Mengandung Serat', 'Jagung mengandung serat yang menjadi bagian dari pola makan yang baik.', 'bg-green-50 border-green-200 text-green-700'],
                    ['💊', 'Mengandung Zat Gizi', 'Jagung mengandung berbagai zat gizi yang dapat melengkapi keberagaman makanan.', 'bg-blue-50 border-blue-200 text-blue-700'],
                    ['🍽️', 'Dapat Dikombinasikan dengan Pangan Lain', 'Jagung dapat dikombinasikan dengan sumber protein, sayuran, buah, dan bahan pangan lainnya untuk menciptakan menu yang lebih beragam.', 'bg-purple-50 border-purple-200 text-purple-700'],
                ] as $item)
                <div class="bg-white border-2 {{ $item[3] }} rounded-2xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="text-4xl mb-3">{{ $item[0] }}</div>
                    <h3 class="font-bold text-gray-900 mb-2">{{ $item[1] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $item[2] }}</p>
                </div>
                @endforeach
            </div>
            
            <div class="bg-amber-100 border border-amber-200 rounded-2xl p-5 text-center max-w-3xl mx-auto">
                <p class="text-amber-800 text-sm font-medium">Catatan: Pemanfaatan jagung sebagai pangan sebaiknya dilakukan sebagai bagian dari pola makan beragam dan seimbang, bukan sebagai satu-satunya sumber gizi.</p>
            </div>
        </div>
    </div>

    {{-- ===== 10 KREASI OLAHAN ===== --}}
    <div id="produk-olahan" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Kreasi Olahan Jagung</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Beragam olahan yang dikembangkan dari jagung sebagai bahan pangan lokal.</p>
        </div>

        @php
            $produks = \App\Models\PotensiJagung::where('status', 'published')->orderBy('id')->get();
            $unggulan = $produks->first();
            $lainnya = $produks->skip(1);
        @endphp

        @if($unggulan)
        {{-- FEATURED: Bubur Jagung --}}
        <div id="produk-unggulan" class="mb-12 bg-gradient-to-r from-amber-500 to-yellow-400 rounded-3xl overflow-hidden shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-8 md:p-12 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-2 bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 self-start border border-white/30">
                        ⭐ Produk Unggulan
                    </div>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-3">Produk Unggulan: Bubur Jagung</h3>
                    <p class="text-yellow-50 text-base leading-relaxed mb-6">
                        Bubur jagung merupakan salah satu olahan yang dikembangkan menggunakan jagung sebagai bahan utama. Produk ini memiliki tekstur lembut dan dapat menjadi salah satu alternatif pemanfaatan jagung sebagai pangan olahan.
                    </p>
                    <a href="{{ route('publik.potensi-jagung.show', $unggulan->slug) }}" class="inline-flex items-center gap-2 bg-white text-amber-600 font-bold px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-50 transition-colors self-start">
                        Lihat Detail Produk
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
                <div class="bg-white/10 flex items-center justify-center min-h-48 md:min-h-0">
                    @if($unggulan->thumbnail)
                        <img src="{{ Storage::url($unggulan->thumbnail) }}" alt="{{ $unggulan->title }}" class="w-full h-full object-cover">
                    @else
                        <div class="text-center py-12 px-8">
                            <span class="text-9xl">🌽</span>
                            <p class="text-white/70 text-sm mt-2">Foto produk unggulan</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        {{-- Grid produk lainnya --}}
        @if($lainnya->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($lainnya as $p)
            <article class="card-hover bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm transition-all duration-300 flex flex-col group">
                <a href="{{ route('publik.potensi-jagung.show', $p->slug) }}" class="block relative aspect-video">
                    @if($p->thumbnail)
                        <img src="{{ Storage::url($p->thumbnail) }}" alt="{{ $p->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-amber-300 via-yellow-300 to-green-400 flex items-center justify-center">
                            <span class="text-6xl drop-shadow">🌽</span>
                        </div>
                    @endif
                    <div class="absolute top-3 left-3">
                        <span class="text-xs font-bold bg-white/95 text-amber-700 px-2.5 py-1 rounded-full shadow-sm">{{ $p->category }}</span>
                    </div>
                </a>
                <div class="p-5 flex-1 flex flex-col">
                    <h3 class="font-bold text-gray-900 mb-2 leading-snug text-lg">{{ $p->title }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed line-clamp-3 mb-4 flex-1">{{ $p->summary }}</p>
                    <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                        <a href="{{ route('publik.potensi-jagung.show', $p->slug) }}" class="inline-flex items-center gap-1.5 text-amber-600 hover:text-amber-700 text-sm font-bold transition-colors group-hover:gap-2.5">
                            Lihat Resep
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        @endif
    </div>

    {{-- ===== PANDUAN PRODUKSI ===== --}}
    <div class="bg-gray-900 py-20 mb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-white mb-3">Panduan Produksi Bubur Jagung</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Panduan ini memberikan gambaran kebutuhan bahan untuk beberapa skala produksi bubur jagung. Takaran perlu disesuaikan kembali melalui uji coba produksi sebelum digunakan sebagai standar produksi tetap.</p>
            </div>
            <div class="bg-gray-800 rounded-2xl overflow-hidden border border-gray-700 shadow-xl max-w-4xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-amber-500">
                                <th class="text-left px-6 py-4 font-bold text-white">Target</th>
                                <th class="text-center px-4 py-4 font-bold text-white">Jagung</th>
                                <th class="text-center px-4 py-4 font-bold text-white">Air</th>
                                <th class="text-center px-4 py-4 font-bold text-white">Gula</th>
                                <th class="text-center px-4 py-4 font-bold text-white">Santan</th>
                                <th class="text-center px-4 py-4 font-bold text-white">Maizena</th>
                                <th class="text-center px-4 py-4 font-bold text-white">Pandan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach([
                                ['5 cup', '3 buah', '400 ml', '4 sdm', '2 sachet', '1 sdm', '2 ruas'],
                                ['10 cup', '6 buah', '800 ml', '8 sdm', '4 sachet', '2 sdm', '4 ruas'],
                                ['25 cup', '15 buah', '2 L', '20 sdm', '10 sachet', '5 sdm', '10 ruas'],
                                ['50 cup', '30 buah', '4 L', '40 sdm', '20 sachet', '10 sdm', '20 ruas'],
                                ['100 cup', '60 buah', '8 L', '80 sdm', '40 sachet', '20 sdm', '40 ruas'],
                            ] as $i => $row)
                            <tr class="{{ $i % 2 === 0 ? 'bg-gray-800' : 'bg-gray-750' }} hover:bg-gray-700 transition-colors">
                                <td class="px-6 py-4 font-bold text-amber-300">{{ $row[0] }}</td>
                                @foreach(array_slice($row, 1) as $cell)
                                <td class="px-4 py-4 text-center text-gray-300">{{ $cell }}</td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== QUALITY CONTROL ===== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Menjaga Kualitas Produk</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            @foreach([
                ['Sebelum Produksi', '🔍', ['Kondisi bahan baku', 'Kebersihan lingkungan', 'Kesiapan alat dan peralatan'], 'border-blue-200 bg-blue-50'],
                ['Saat Produksi', '⚙️', ['Ketepatan takaran', 'Tahapan pengolahan', 'Kebersihan proses'], 'border-amber-200 bg-amber-50'],
                ['Setelah Produksi', '✅', ['Tekstur', 'Rasa dan aroma', 'Tampilan', 'Kondisi kemasan'], 'border-green-200 bg-green-50'],
            ] as $qc)
            <div class="border-2 {{ $qc[3] }} rounded-2xl p-6">
                <div class="text-3xl mb-3">{{ $qc[1] }}</div>
                <h3 class="font-bold text-gray-900 text-lg mb-4">{{ $qc[0] }}</h3>
                <ul class="space-y-2">
                    @foreach($qc[2] as $item)
                    <li class="flex items-start gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        <p class="text-center text-sm text-gray-500 italic">Standar ini digunakan sebagai panduan dasar untuk menjaga konsistensi proses dan hasil produk.</p>
    </div>

    {{-- ===== PELUANG PENGEMBANGAN USAHA ===== --}}
    <div class="bg-gray-50 py-20 mb-20 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Peluang Pengembangan Produk</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                @foreach([
                    ['💪', 'Kekuatan', ['Bahan baku dapat berasal dari hasil pertanian lokal.', 'Proses pengolahan relatif sederhana.', 'Produk dapat dikembangkan dalam berbagai variasi.'], 'bg-white border-gray-200 text-green-700'],
                    ['⚠️', 'Kelemahan', ['Daya tahan produk tertentu relatif pendek.', 'Branding dan kemasan masih perlu dikembangkan.', 'Konsistensi produksi perlu diperhatikan.'], 'bg-white border-gray-200 text-red-700'],
                    ['🚀', 'Peluang', ['Produk dapat dikembangkan sebagai usaha rumah tangga.', 'Dapat dikembangkan oleh kelompok masyarakat.', 'Dapat dipasarkan melalui media digital.'], 'bg-white border-gray-200 text-blue-700'],
                    ['🛡️', 'Tantangan', ['Persaingan dengan produk sejenis.', 'Perubahan harga bahan baku.', 'Perubahan selera konsumen.'], 'bg-white border-gray-200 text-orange-700'],
                ] as $s)
                <div class="border {{ $s[3] }} rounded-2xl p-6 shadow-sm">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-2xl">{{ $s[0] }}</span>
                        <div class="font-bold text-gray-900 text-lg">{{ $s[1] }}</div>
                    </div>
                    <ul class="space-y-2">
                        @foreach($s[2] as $item)
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ===== BRANDING & DIGITALISASI ===== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Mengenalkan Produk Lokal</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach([
                ['🌐', 'Website Desa', 'Website Desa Blumbang dapat menjadi media untuk memperkenalkan produk dan informasi olahan jagung kepada masyarakat.', 'border-blue-200 bg-blue-50'],
                ['📱', 'Media Sosial', 'Media sosial dapat digunakan untuk memperkenalkan produk, proses pembuatan, dan kegiatan pengembangan olahan jagung.', 'border-pink-200 bg-pink-50'],
                ['🔲', 'QR Code', 'QR Code dapat digunakan untuk mengarahkan masyarakat menuju halaman informasi produk secara cepat.', 'border-green-200 bg-green-50'],
            ] as $b)
            <div class="border-2 {{ $b[3] }} rounded-2xl p-6 text-center">
                <div class="text-4xl mb-4">{{ $b[0] }}</div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">{{ $b[1] }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed">{{ $b[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== DOKUMENTASI ===== --}}
    <div class="bg-gradient-to-br from-amber-50 to-green-50 py-16 mb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Dokumentasi Pengembangan Olahan Jagung</h2>
            <p class="text-gray-500 max-w-2xl mx-auto mb-10">Bagian ini berisi dokumentasi kegiatan pengembangan dan pengolahan jagung di Desa Blumbang, mulai dari persiapan, pengolahan, edukasi, produksi, hingga hasil akhir.</p>

            {{-- Placeholder Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                @foreach(['Persiapan', 'Pengolahan', 'Edukasi', 'Produksi', 'Produk', 'Penyuluhan', 'Kegiatan', 'Hasil Akhir'] as $dok)
                <div class="aspect-square bg-gradient-to-br from-white to-gray-50 rounded-2xl flex flex-col items-center justify-center gap-2 hover:shadow-sm transition-shadow cursor-pointer border border-gray-200">
                    <span class="text-3xl text-gray-300">📷</span>
                    <span class="text-xs text-gray-500 font-medium">{{ $dok }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ===== TENTANG KEGIATAN KKN ===== --}}
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-20 text-center">
        <h3 class="font-bold text-gray-900 mb-2">Tentang Kegiatan</h3>
        <p class="text-sm text-gray-600">
            Pengembangan dan dokumentasi olahan jagung ini merupakan bagian dari kegiatan Kuliah Kerja Nyata Universitas Diponegoro di Desa Blumbang.
        </p>
    </div>

</x-publik-layout>