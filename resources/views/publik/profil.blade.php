<x-publik-layout>
    <x-slot name="title">Profil Desa</x-slot>

    <!-- Page Header -->
    <div class="bg-gradient-to-br from-green-800 to-emerald-700 py-14 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,<svg width=60 height=60 viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'><g fill=\'none\'><g fill=\'%23fff\' fill-opacity=\'1\'><path d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/></g></g></svg>')"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <nav class="text-sm text-green-300 mb-3">
                <a href="/" class="hover:text-white">Beranda</a> <span class="mx-2">/</span>
                <span class="text-white">Profil Desa</span>
            </nav>
            <h1 class="text-4xl font-bold text-white">Profil Desa Blumbang</h1>
            <p class="text-green-200 mt-2">Kecamatan Klego, Kabupaten Boyolali, Jawa Tengah</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Tab Navigation -->
        <div class="flex gap-2 flex-wrap mb-8 border-b border-gray-200 pb-0">
            <button onclick="showTab('sejarah')" id="tab-sejarah" class="tab-btn active-tab px-5 py-2.5 text-sm font-semibold border-b-2 border-green-600 text-green-700 -mb-px transition-all">Sejarah</button>
            <button onclick="showTab('visi')" id="tab-visi" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Visi & Misi</button>
            <button onclick="showTab('geografi')" id="tab-geografi" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Geografi</button>
            <button onclick="showTab('info')" id="tab-info" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Data Umum</button>
        </div>

        <!-- Tab Content -->
        <div id="content-sejarah" class="tab-content">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Sejarah Desa Blumbang</h2>
                <div class="prose max-w-none text-gray-600 leading-relaxed space-y-4">
                    @if(isset($profil) && $profil->history)
                        {!! $profil->history !!}
                    @else
                        <p>Belum ada data sejarah desa.</p>
                    @endif
                </div>
            </div>
        </div>

        <div id="content-visi" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-green-700 text-white rounded-2xl p-8">
                    <div class="text-4xl mb-4">🎯</div>
                    <h2 class="text-xl font-bold mb-4">Visi Desa Blumbang</h2>
                    <div class="prose prose-invert max-w-none text-green-100 text-lg font-serif italic">
                        @if(isset($profil) && $profil->vision)
                            {!! $profil->vision !!}
                        @else
                            <p>Belum ada data visi.</p>
                        @endif
                    </div>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                    <div class="text-4xl mb-4">📋</div>
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Misi Desa Blumbang</h2>
                    <div class="prose max-w-none text-gray-700">
                        @if(isset($profil) && $profil->mission)
                            {!! $profil->mission !!}
                        @else
                            <p>Belum ada data misi.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div id="content-geografi" class="tab-content hidden">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Kondisi Geografis</h2>
                <div class="prose max-w-none text-gray-700">
                    @if(isset($profil) && $profil->geography)
                        {!! $profil->geography !!}
                    @else
                        <p>Belum ada data geografis.</p>
                    @endif
                </div>
            </div>
        </div>

        <div id="content-info" class="tab-content hidden">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Data Umum Desa</h2>
                <div class="prose max-w-none text-gray-700">
                    @if(isset($profil) && $profil->general_information)
                        {!! $profil->general_information !!}
                    @else
                        <p>Belum ada data umum desa.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
    function showTab(id) {
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-btn').forEach(el => {
            el.classList.remove('border-green-600','text-green-700','font-semibold');
            el.classList.add('border-transparent','text-gray-500','font-medium');
        });
        document.getElementById('content-'+id).classList.remove('hidden');
        const btn = document.getElementById('tab-'+id);
        btn.classList.add('border-green-600','text-green-700','font-semibold');
        btn.classList.remove('border-transparent','text-gray-500','font-medium');
    }
    </script>
</x-publik-layout>