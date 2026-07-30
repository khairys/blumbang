<x-publik-layout>
    <x-slot name="title">Produk Olahan Jagung</x-slot>
    <div class="bg-gradient-to-br from-amber-600 to-orange-500 py-14 relative overflow-hidden">
        <div class="absolute top-0 right-0 text-[180px] opacity-10 select-none leading-none">🌽</div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-amber-100 mb-3"><a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span><span class="text-white">Produk Jagung</span></nav>
            <h1 class="text-4xl font-bold text-white">🌽 Produk Olahan Jagung</h1>
            <p class="text-amber-100 mt-2">Inovasi produk bergizi berbasis jagung untuk pencegahan stunting di Desa Blumbang</p>
        </div>
    </div>

    <!-- Edukasi Stunting -->
    <div class="bg-red-50 border-b border-red-100 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center gap-4">
                <div class="flex-shrink-0 w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center text-2xl">🏥</div>
                <div class="flex-1">
                    <p class="font-bold text-red-800 text-sm">Tentang Stunting</p>
                    <p class="text-sm text-red-700">Stunting adalah kondisi gagal tumbuh pada anak akibat kekurangan gizi kronis. Konsumsi jagung yang kaya protein, vitamin B, dan mineral dapat membantu mencegah stunting pada balita.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Filter Kategori -->
        <div class="flex flex-wrap gap-2 mb-8">
            @php $kats = ['Semua', 'Makanan Bayi', 'Minuman', 'Camilan', 'Makanan Utama']; @endphp
            @foreach ($kats as $k)
            <button class="px-4 py-1.5 text-sm font-medium rounded-full {{ $k === 'Semua' ? 'bg-amber-500 text-white' : 'bg-amber-50 text-amber-700 hover:bg-amber-100' }} transition-colors">{{ $k }}</button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @php $prods = [
                ['emoji'=>'🥣','title'=>'Bubur Jagung Instan Fortifikasi','kat'=>'Makanan Bayi','desc'=>'Bubur jagung instan yang diperkaya zat besi, vitamin A, dan zinc khusus untuk balita 6-24 bulan. Praktis dan bergizi tinggi.','gizi'=>['Protein: 8g','Zat Besi: 5mg','Vitamin A: 200 IU'],'bg'=>'from-amber-400 to-yellow-300'],
                ['emoji'=>'🥤','title'=>'Susu Jagung Manis','kat'=>'Minuman','desc'=>'Minuman berbasis ekstrak jagung manis dengan kandungan protein nabati tinggi. Alternatif bergizi pengganti susu formula.','gizi'=>['Protein: 4g','Kalsium: 120mg','Vitamin B6: 0.3mg'],'bg'=>'from-yellow-400 to-amber-300'],
                ['emoji'=>'🍞','title'=>'Roti Jagung Kukus','kat'=>'Makanan Utama','desc'=>'Roti berbahan tepung jagung yang dikukus, bebas gluten dan kaya serat. Cocok untuk anak-anak dengan alergi gandum.','gizi'=>['Protein: 6g','Serat: 3g','Vitamin B1: 0.2mg'],'bg'=>'from-orange-400 to-amber-400'],
                ['emoji'=>'🍪','title'=>'Biskuit Jagung Bayam','kat'=>'Camilan','desc'=>'Camilan sehat dari perpaduan tepung jagung dan bayam, kaya zat besi dan vitamin C untuk mencegah anemia pada balita.','gizi'=>['Zat Besi: 3mg','Vitamin C: 15mg','Protein: 3g'],'bg'=>'from-green-400 to-emerald-300'],
                ['emoji'=>'🧃','title'=>'Jus Jagung Wortel','kat'=>'Minuman','desc'=>'Minuman kombinasi jagung dan wortel yang kaya beta-karoten. Baik untuk kesehatan mata dan kekebalan tubuh anak.','gizi'=>['Vitamin A: 400 IU','Beta-karoten: 2mg','Serat: 2g'],'bg'=>'from-orange-500 to-red-400'],
                ['emoji'=>'🍲','title'=>'Sup Krim Jagung','kat'=>'Makanan Utama','desc'=>'Sup krim jagung yang lembut dan bergizi, diperkaya dengan ayam dan sayuran. Sangat mudah dicerna oleh balita.','gizi'=>['Protein: 10g','Zat Besi: 2mg','Vitamin B12: 0.5mcg'],'bg'=>'from-amber-500 to-yellow-400'],
            ]; @endphp
            @foreach ($prods as $p)
            <div class="bg-white rounded-2xl overflow-hidden border border-amber-100 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-200">
                <div class="h-44 bg-gradient-to-br {{ $p['bg'] }} flex items-center justify-center">
                    <span class="text-6xl">{{ $p['emoji'] }}</span>
                </div>
                <div class="p-5">
                    <span class="text-xs font-semibold bg-amber-100 text-amber-700 px-2.5 py-1 rounded-full">{{ $p['kat'] }}</span>
                    <h3 class="font-bold text-gray-900 mt-3 mb-2">{{ $p['title'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">{{ $p['desc'] }}</p>
                    <div class="bg-amber-50 rounded-xl p-3">
                        <p class="text-xs font-semibold text-amber-800 mb-1.5">🌿 Kandungan Gizi</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach ($p['gizi'] as $g)
                            <span class="text-xs bg-white border border-amber-200 text-amber-700 px-2 py-0.5 rounded-full">{{ $g }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-publik-layout>