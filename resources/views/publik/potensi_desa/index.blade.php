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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php $potensis = [
                ['emoji'=>'🌾','title'=>'Pertanian Jagung','kat'=>'Pertanian','desc'=>'Lahan pertanian jagung seluas ±120 Ha yang menjadi komoditas utama. Produksi rata-rata 8 ton/ha per musim dengan varietas unggul.','bg'=>'from-green-700 to-emerald-500'],
                ['emoji'=>'🌾','title'=>'Pertanian Padi','kat'=>'Pertanian','desc'=>'Sawah irigasi teknis seluas ±45 Ha menghasilkan beras premium dengan sistem tanam padi organik yang mulai dikembangkan.','bg'=>'from-green-800 to-green-600'],
                ['emoji'=>'🏞️','title'=>'Wisata Perbukitan','kat'=>'Wisata','desc'=>'Pemandangan perbukitan hijau dengan hamparan sawah terasering menjadi daya tarik wisata pedesaan yang mulai berkembang.','bg'=>'from-emerald-700 to-teal-500'],
                ['emoji'=>'🎭','title'=>'Kesenian Jathilan','kat'=>'Budaya','desc'=>'Kesenian tradisional jathilan yang masih aktif dengan kelompok seni yang rutin tampil pada berbagai acara desa.','bg'=>'from-purple-700 to-purple-500'],
                ['emoji'=>'🏺','title'=>'Kerajinan Anyaman','kat'=>'UMKM','desc'=>'Industri rumahan anyaman bambu dan rotan yang menghasilkan produk keranjang, tampah, dan perabot rumah tangga.','bg'=>'from-amber-700 to-yellow-500'],
                ['emoji'=>'🌿','title'=>'Tanaman Herbal','kat'=>'Pertanian','desc'=>'Budidaya tanaman herbal seperti jahe, kunyit, dan temulawak yang diolah menjadi jamu dan minuman kesehatan.','bg'=>'from-teal-700 to-cyan-500'],
            ]; @endphp
            @foreach ($potensis as $p)
            <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-200">
                <div class="h-44 bg-gradient-to-br {{ $p['bg'] }} flex items-center justify-center">
                    <span class="text-6xl opacity-80">{{ $p['emoji'] }}</span>
                </div>
                <div class="p-5">
                    <span class="text-xs font-semibold bg-green-100 text-green-700 px-2.5 py-1 rounded-full">{{ $p['kat'] }}</span>
                    <h3 class="font-bold text-gray-900 mt-3 mb-2">{{ $p['title'] }}</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $p['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-publik-layout>