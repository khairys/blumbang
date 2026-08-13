<x-publik-layout>
    <x-slot name="title">Potensi Jagung Desa Blumbang</x-slot>

    {{-- ===== HERO ===== --}}
    <div class="relative bg-gradient-to-br from-yellow-600 via-amber-500 to-green-600 pt-20 pb-32 overflow-hidden">
        {{-- Decorative circles --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full translate-y-1/2 -translate-x-1/3"></div>
        <div class="absolute top-16 left-1/4 w-4 h-4 bg-white/30 rounded-full"></div>
        <div class="absolute bottom-20 right-1/4 w-6 h-6 bg-white/20 rounded-full"></div>
        <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-yellow-200/40 rounded-full"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-yellow-100 mb-6 flex items-center gap-2">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-white">Potensi Jagung</span>
            </nav>
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 bg-white/20 text-white text-sm font-semibold px-4 py-1.5 rounded-full mb-4 border border-white/30">
                    <span>🌽</span> Program KKN Multidisiplin · Universitas Diponegoro
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-4">
                    Potensi Jagung<br>Desa Blumbang
                </h1>
                <p class="text-xl text-yellow-50 mb-8 leading-relaxed max-w-2xl">
                    Mengembangkan hasil panen lokal menjadi pangan bernilai tambah dan mendukung pemanfaatan pangan lokal untuk kesejahteraan masyarakat.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#produk-olahan" class="inline-flex items-center gap-2 bg-white text-amber-700 font-bold px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-50 transition-colors">
                        🍽️ Lihat Produk Olahan
                    </a>
                    <a href="#produk-unggulan" class="inline-flex items-center gap-2 bg-white/20 text-white border border-white/40 font-bold px-6 py-3 rounded-xl hover:bg-white/30 transition-colors">
                        ⭐ Bubur Jagung Unggulan
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-block bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Pengantar</div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4 leading-tight">Dari Hasil Panen Menjadi Produk Bernilai Tambah</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>Desa Blumbang memiliki potensi pertanian yang salah satunya berasal dari komoditas jagung. Selama ini jagung dapat dimanfaatkan sebagai bahan pangan maupun hasil pertanian yang memiliki nilai ekonomi.</p>
                    <p>Melalui kegiatan Kuliah Kerja Nyata (KKN) Universitas Diponegoro, potensi jagung Desa Blumbang dikembangkan melalui berbagai inovasi pengolahan pangan. Pengolahan tersebut bertujuan menghasilkan variasi produk makanan, memperkenalkan pemanfaatan bahan pangan lokal, meningkatkan nilai tambah hasil panen, serta membuka peluang pengembangan produk bagi masyarakat.</p>
                    <p class="font-semibold text-amber-700">Dari jagung lokal, menjadi produk pangan yang lebih beragam dan bernilai.</p>
                </div>
            </div>
            {{-- Alur Nilai Tambah --}}
            <div class="bg-gradient-to-br from-amber-50 to-green-50 rounded-3xl p-8 border border-amber-100">
                <h3 class="font-bold text-gray-800 mb-6 text-center">Alur Nilai Tambah Jagung</h3>
                <div class="flex flex-col items-center gap-0">
                    @foreach([
                        ['🌽', 'Panen', 'Jagung Desa Blumbang', 'bg-yellow-100 border-yellow-300 text-yellow-800'],
                        ['⚙️', 'Pengolahan', 'Pemilihan · Pengolahan · Pengemasan', 'bg-orange-100 border-orange-300 text-orange-800'],
                        ['🥣', 'Produk', 'Berbagai olahan berbahan dasar jagung', 'bg-green-100 border-green-300 text-green-800'],
                        ['📈', 'Nilai Tambah', 'Pangan lokal · Diversifikasi · Peluang usaha', 'bg-emerald-100 border-emerald-300 text-emerald-800'],
                    ] as $step)
                    <div class="w-full flex flex-col items-center">
                        <div class="w-full border-2 {{ $step[3] }} rounded-xl px-4 py-3 flex items-center gap-3">
                            <span class="text-2xl">{{ $step[0] }}</span>
                            <div>
                                <div class="font-bold text-sm">{{ $step[1] }}</div>
                                <div class="text-xs opacity-75">{{ $step[2] }}</div>
                            </div>
                        </div>
                        @if(!$loop->last)
                        <div class="w-0.5 h-4 bg-amber-300"></div>
                        <div class="w-3 h-3 border-b-2 border-r-2 border-amber-300 rotate-45 -mt-2 mb-1"></div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- ===== JAGUNG SEBAGAI PANGAN LOKAL ===== --}}
    <div class="bg-gradient-to-br from-green-50 to-emerald-50 py-20 mb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-block bg-green-100 text-green-700 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Edukasi Pangan</div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Jagung sebagai Pangan Lokal</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Jagung dapat dimanfaatkan sebagai salah satu bahan pangan dalam menu sehari-hari sebagai bagian dari pola makan yang beragam dan seimbang.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @foreach([
                    ['🌾', 'Karbohidrat', 'Sumber energi yang mendukung aktivitas sehari-hari.', 'bg-amber-50 border-amber-200 text-amber-700'],
                    ['🌿', 'Serat', 'Membantu pencernaan dan bagian dari pola makan sehat.', 'bg-green-50 border-green-200 text-green-700'],
                    ['💊', 'Vitamin & Mineral', 'Melengkapi kebutuhan zat gizi harian keluarga.', 'bg-blue-50 border-blue-200 text-blue-700'],
                    ['🍽️', 'Pangan Beragam', 'Dikombinasikan dengan protein, sayur, dan buah untuk gizi seimbang.', 'bg-purple-50 border-purple-200 text-purple-700'],
                ] as $item)
                <div class="bg-white border-2 {{ $item[3] }} rounded-2xl p-6 text-center hover:shadow-md transition-shadow">
                    <div class="text-4xl mb-3">{{ $item[0] }}</div>
                    <h3 class="font-bold text-gray-900 mb-2">{{ $item[1] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $item[2] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    {{-- ===== 10 KREASI OLAHAN ===== --}}
    <div id="produk-olahan" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="text-center mb-12">
            <div class="inline-block bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Kreasi Olahan</div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">10 Kreasi Olahan Jagung</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Jagung lokal dapat dikembangkan menjadi berbagai produk makanan dan minuman. Berikut kreasi olahan yang dikembangkan dalam kegiatan KKN.</p>
        </div>

        @php
            $produks = \App\Models\PotensiJagung::where('status', 'published')->orderBy('id')->get();
            $unggulan = $produks->first();
            $lainnya = $produks->skip(1);
        @endphp

        @if($unggulan)
        {{-- FEATURED: Bubur Jagung --}}
        <div id="produk-unggulan" class="mb-8 bg-gradient-to-r from-amber-500 to-yellow-400 rounded-3xl overflow-hidden shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-8 md:p-12 flex flex-col justify-center">
                    <div class="inline-flex items-center gap-2 bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 self-start border border-white/30">
                        ⭐ Produk Unggulan
                    </div>
                    <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-3">{{ $unggulan->title }}</h3>
                    <p class="text-yellow-50 text-base leading-relaxed mb-6">{{ $unggulan->summary }}</p>
                    <a href="{{ route('publik.potensi-jagung.show', $unggulan->slug) }}" class="inline-flex items-center gap-2 bg-white text-amber-600 font-bold px-6 py-3 rounded-xl shadow-lg hover:bg-yellow-50 transition-colors self-start">
                        Pelajari Selengkapnya
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
                <div class="bg-white/10 flex items-center justify-center min-h-48 md:min-h-0">
                    @if($unggulan->thumbnail)
                        <img src="{{ Storage::url($unggulan->thumbnail) }}" alt="{{ $unggulan->title }}" class="w-full h-full object-cover">
                    @else
                        <div class="text-center py-12 px-8">
                            <span class="text-9xl">🌽</span>
                            <p class="text-white/70 text-sm mt-2">Foto produk akan ditambahkan</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endif

        {{-- Grid 9 produk lainnya --}}
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

    {{-- ===== PERENCANAAN PRODUKSI ===== --}}
    <div class="bg-gray-900 py-20 mb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-block bg-amber-500/20 text-amber-300 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Panduan Produksi</div>
                <h2 class="text-3xl font-extrabold text-white mb-3">Perencanaan Produksi Bubur Jagung</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Tabel kebutuhan bahan berdasarkan target produksi untuk membantu mempersiapkan bahan secara tepat dan efisien.</p>
            </div>
            <div class="bg-gray-800 rounded-2xl overflow-hidden border border-gray-700 shadow-xl">
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
                <div class="px-6 py-4 bg-gray-900/50 border-t border-gray-700">
                    <p class="text-xs text-gray-500"><em>* Tabel mengikuti materi perencanaan produksi KKN. Sebelum digunakan sebagai SOP, lakukan uji coba dan validasi oleh tim produksi. Sediakan stok cadangan 5–10%.</em></p>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== QUALITY CONTROL ===== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="text-center mb-12">
            <div class="inline-block bg-green-100 text-green-700 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Quality Control</div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Menjaga Konsistensi Produk</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Standar kualitas produksi untuk memastikan bubur jagung yang dihasilkan memiliki kualitas yang konsisten.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['Sebelum Produksi', '🔍', ['Kondisi bahan baku', 'Kebersihan lingkungan', 'Kesiapan alat dan peralatan'], 'border-blue-200 bg-blue-50'],
                ['Saat Produksi', '⚙️', ['Ketepatan takaran bahan', 'Tahapan proses produksi', 'Kebersihan selama pengolahan'], 'border-amber-200 bg-amber-50'],
                ['Setelah Produksi', '✅', ['Tekstur dan kekentalan', 'Rasa dan aroma', 'Tampilan dan kemasan'], 'border-green-200 bg-green-50'],
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
    </div>

    {{-- ===== PELUANG USAHA: SWOT / HPP / BEP ===== --}}
    <div class="bg-gradient-to-br from-slate-900 to-gray-800 py-20 mb-20" x-data="{ tab: 'swot' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-block bg-white/10 text-amber-300 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Peluang Usaha</div>
                <h2 class="text-3xl font-extrabold text-white mb-3">Analisis Pengembangan Usaha</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Tinjauan menyeluruh dari potensi usaha olahan jagung berdasarkan analisis SWOT, perhitungan biaya produksi, dan titik impas.</p>
            </div>

            {{-- Tabs --}}
            <div class="flex justify-center gap-2 mb-10">
                @foreach([['swot', 'Analisis SWOT'], ['hpp', 'HPP'], ['bep', 'BEP']] as $t)
                <button @click="tab = '{{ $t[0] }}'"
                    :class="tab === '{{ $t[0] }}' ? 'bg-amber-500 text-white shadow-lg' : 'bg-white/10 text-gray-300 hover:bg-white/20'"
                    class="px-5 py-2.5 rounded-xl font-semibold text-sm transition-all">
                    {{ $t[1] }}
                </button>
                @endforeach
            </div>

            {{-- SWOT --}}
            <div x-show="tab === 'swot'" x-transition>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach([
                        ['💪', 'Kekuatan', 'Strengths', ['Bahan baku jagung tersedia secara lokal', 'Modal usaha relatif kecil', 'Proses produksi relatif sederhana', 'Produk memiliki rasa yang dapat diterima konsumen'], 'bg-green-500/20 border-green-500/50 text-green-300'],
                        ['⚠️', 'Kelemahan', 'Weaknesses', ['Daya tahan produk relatif pendek', 'Belum memiliki brand dan kemasan yang kuat', 'Pemasaran masih terbatas', 'Perlu pelatihan produksi yang konsisten'], 'bg-red-500/20 border-red-500/50 text-red-300'],
                        ['🚀', 'Peluang', 'Opportunities', ['Belum terdapat pesaing sejenis di lingkungan desa', 'Peluang pasar untuk makanan praktis dan terjangkau', 'Dapat dikembangkan untuk kegiatan Posyandu/PMT', 'Dapat menjadi usaha kelompok PKK atau BUMDes'], 'bg-blue-500/20 border-blue-500/50 text-blue-300'],
                        ['🛡️', 'Ancaman', 'Threats', ['Munculnya pesaing baru', 'Perubahan harga bahan baku', 'Perubahan selera konsumen', 'Keterbatasan modal untuk ekspansi'], 'bg-orange-500/20 border-orange-500/50 text-orange-300'],
                    ] as $s)
                    <div class="border {{ $s[4] }} rounded-2xl p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl">{{ $s[0] }}</span>
                            <div>
                                <div class="font-bold text-white text-lg">{{ $s[1] }}</div>
                                <div class="text-xs opacity-60">{{ $s[2] }}</div>
                            </div>
                        </div>
                        <ul class="space-y-2">
                            @foreach($s[3] as $item)
                            <li class="flex items-start gap-2 text-sm text-gray-300">
                                <svg class="w-4 h-4 mt-0.5 flex-shrink-0 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- HPP --}}
            <div x-show="tab === 'hpp'" x-transition>
                <div class="max-w-3xl mx-auto">
                    <div class="bg-white/10 border border-white/20 rounded-2xl p-8 mb-6">
                        <h3 class="text-xl font-bold text-white mb-2">Apa itu HPP?</h3>
                        <p class="text-gray-400 mb-6">Harga Pokok Produksi (HPP) adalah total biaya yang dikeluarkan untuk menghasilkan suatu produk sampai siap dijual.</p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                            @foreach([
                                ['💰', 'Biaya Bahan Baku', 'Biaya seluruh bahan yang digunakan langsung dalam produksi.'],
                                ['👥', 'Biaya Tenaga Kerja', 'Biaya tenaga kerja yang terlibat langsung dalam proses produksi.'],
                                ['🔧', 'Biaya Overhead', 'Biaya pendukung produksi seperti gas, listrik, dan kemasan.'],
                            ] as $k)
                            <div class="bg-white/10 rounded-xl p-4 text-center">
                                <div class="text-2xl mb-2">{{ $k[0] }}</div>
                                <div class="font-bold text-amber-300 text-sm mb-1">{{ $k[1] }}</div>
                                <div class="text-xs text-gray-400">{{ $k[2] }}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="bg-amber-500/20 border border-amber-500/40 rounded-xl p-5">
                            <p class="text-amber-200 font-semibold mb-2">📌 Rumus HPP</p>
                            <p class="text-white font-bold text-lg text-center py-2">HPP = Total Biaya Produksi ÷ Jumlah Produk</p>
                        </div>
                    </div>
                    <div class="bg-white/10 border border-white/20 rounded-2xl p-8">
                        <h3 class="text-lg font-bold text-white mb-4">Contoh Perhitungan</h3>
                        <div class="space-y-3 mb-6">
                            @foreach([['Total biaya produksi', 'Rp 350.000'], ['Jumlah produk', '100 bungkus']] as $r)
                            <div class="flex justify-between items-center border-b border-white/10 pb-3">
                                <span class="text-gray-400">{{ $r[0] }}</span>
                                <span class="text-white font-semibold">{{ $r[1] }}</span>
                            </div>
                            @endforeach
                        </div>
                        <div class="bg-green-500/20 border border-green-500/40 rounded-xl p-4 text-center">
                            <p class="text-green-300 text-sm mb-1">HPP per bungkus</p>
                            <p class="text-white font-extrabold text-3xl">Rp 3.500</p>
                        </div>
                        <p class="text-xs text-gray-500 mt-4 text-center"><em>* Contoh perhitungan berdasarkan materi KKN. Biaya aktual dapat berbeda.</em></p>
                    </div>
                </div>
            </div>

            {{-- BEP --}}
            <div x-show="tab === 'bep'" x-transition>
                <div class="max-w-3xl mx-auto">
                    <div class="bg-white/10 border border-white/20 rounded-2xl p-8 mb-6">
                        <h3 class="text-xl font-bold text-white mb-2">Apa itu BEP?</h3>
                        <p class="text-gray-400 mb-6">Break Even Point (BEP) adalah kondisi ketika usaha berada pada titik impas — tidak memperoleh keuntungan maupun mengalami kerugian. BEP membantu mengetahui minimal produk yang harus terjual untuk balik modal.</p>
                        <div class="bg-amber-500/20 border border-amber-500/40 rounded-xl p-5 mb-4">
                            <p class="text-amber-200 font-semibold mb-2">📌 Rumus BEP</p>
                            <p class="text-white font-bold text-center py-2">BEP (unit) = Biaya Tetap ÷ (Harga Jual − Biaya Variabel per Unit)</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach([
                            ['🏗️', 'Modal/Biaya Tetap', 'Biaya yang tidak berubah meskipun jumlah produksi berubah, seperti peralatan produksi.', 'border-blue-500/40 bg-blue-500/10'],
                            ['💵', 'Harga Jual', 'Harga per unit yang ditetapkan untuk konsumen, harus lebih tinggi dari HPP.', 'border-green-500/40 bg-green-500/10'],
                            ['📦', 'Biaya Variabel', 'Biaya yang berubah sesuai jumlah produksi, seperti bahan baku.', 'border-orange-500/40 bg-orange-500/10'],
                        ] as $b)
                        <div class="border {{ $b[3] }} rounded-2xl p-5 text-center">
                            <div class="text-3xl mb-3">{{ $b[0] }}</div>
                            <div class="font-bold text-white mb-2">{{ $b[1] }}</div>
                            <div class="text-xs text-gray-400">{{ $b[2] }}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-6 bg-white/10 border border-white/20 rounded-2xl p-6 text-center">
                        <p class="text-gray-400 mb-2 text-sm">Dengan mengetahui BEP, pelaku usaha dapat merencanakan target penjualan yang realistis.</p>
                        <p class="text-white font-bold">Produk perlu terjual minimal <span class="text-amber-300">X unit</span> untuk mencapai titik impas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== BRANDING & DIGITALISASI ===== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
        <div class="text-center mb-12">
            <div class="inline-block bg-purple-100 text-purple-700 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Branding & Pemasaran</div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Membawa Produk Lokal ke Ruang Digital</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">Digitalisasi membantu produk lokal memiliki identitas, informasi, dan media promosi yang lebih mudah diakses.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach([
                ['🌐', 'Website Desa', 'Pusat informasi dan katalog produk olahan jagung Desa Blumbang yang dapat diakses oleh siapapun.', 'border-blue-200 bg-blue-50'],
                ['📱', 'Media Sosial', 'Media promosi untuk memperluas jangkauan dan memperkenalkan produk kepada masyarakat lebih luas.', 'border-pink-200 bg-pink-50'],
                ['🔲', 'QR Code', 'QR Code dapat mengarahkan masyarakat langsung menuju halaman produk dan informasi pemesanan.', 'border-green-200 bg-green-50'],
            ] as $b)
            <div class="border-2 {{ $b[3] }} rounded-2xl p-6">
                <div class="text-4xl mb-4">{{ $b[0] }}</div>
                <h3 class="font-bold text-gray-900 text-lg mb-2">{{ $b[1] }}</h3>
                <p class="text-sm text-gray-600 leading-relaxed">{{ $b[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- ===== DOKUMENTASI KKN ===== --}}
    <div class="bg-gradient-to-br from-amber-50 to-green-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-block bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">Dokumentasi KKN</div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-3">Dokumentasi Kegiatan</h2>
            <p class="text-gray-500 max-w-2xl mx-auto mb-10">Foto kegiatan KKN akan ditambahkan di bagian ini. Anda dapat mengelola konten dokumentasi melalui panel admin.</p>

            {{-- Placeholder Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                @foreach(['Persiapan', 'Pengolahan', 'Edukasi', 'Produksi', 'Produk', 'Penyuluhan', 'Kegiatan', 'Hasil Akhir'] as $dok)
                <div class="aspect-square bg-gradient-to-br from-amber-200 to-green-200 rounded-2xl flex flex-col items-center justify-center gap-2 hover:shadow-md transition-shadow cursor-pointer border-2 border-white">
                    <span class="text-3xl">🌽</span>
                    <span class="text-xs text-gray-600 font-medium">{{ $dok }}</span>
                </div>
                @endforeach
            </div>

            <div class="inline-flex items-center gap-2 bg-amber-500 text-white font-bold px-6 py-3 rounded-xl shadow-lg hover:bg-amber-600 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                Upload Foto via Admin Panel
            </div>

            <div class="mt-8 text-sm text-gray-500">
                Dokumentasi ini merupakan bagian dari pelaksanaan kegiatan multidisiplin KKN <strong>Universitas Diponegoro</strong> di Desa Blumbang.
            </div>
        </div>
    </div>

</x-publik-layout>