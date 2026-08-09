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
            <button onclick="showTab('info')" id="tab-info" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Data & Statistik</button>
            <button onclick="showTab('struktur')" id="tab-struktur" class="tab-btn px-5 py-2.5 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-green-700 -mb-px transition-all">Struktur Organisasi</button>
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
                    <div class="mb-4 text-green-200"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg></div>
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
                    <div class="mb-4 text-green-600"><svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
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
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm space-y-8">
                <h2 class="text-2xl font-bold text-gray-900">Statistik Desa Blumbang</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <div class="bg-green-50 rounded-2xl p-6 text-center border border-green-100">
                        <div class="mb-2 flex justify-center text-green-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Penduduk</div>
                        <div class="text-lg font-bold text-green-800">{{ $profil?->stat_penduduk ?? '-' }}</div>
                    </div>
                    <div class="bg-blue-50 rounded-2xl p-6 text-center border border-blue-100">
                        <div class="mb-2 flex justify-center text-blue-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Keluarga</div>
                        <div class="text-lg font-bold text-blue-800">{{ $profil?->stat_kk ?? '-' }}</div>
                    </div>
                    <div class="bg-purple-50 rounded-2xl p-6 text-center border border-purple-100">
                        <div class="mb-2 flex justify-center text-purple-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Total RT</div>
                        <div class="text-lg font-bold text-purple-800">{{ $profil?->stat_rt ?? '-' }}</div>
                    </div>
                    <div class="bg-indigo-50 rounded-2xl p-6 text-center border border-indigo-100">
                        <div class="mb-2 flex justify-center text-indigo-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Total RW</div>
                        <div class="text-lg font-bold text-indigo-800">{{ $profil?->stat_rw ?? '-' }}</div>
                    </div>
                    <div class="bg-orange-50 rounded-2xl p-6 text-center border border-orange-100">
                        <div class="mb-2 flex justify-center text-orange-600"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/></svg></div>
                        <div class="text-sm font-medium text-gray-500 mb-1">Luas Wilayah</div>
                        <div class="text-lg font-bold text-orange-800">{{ $profil?->stat_luas_wilayah ?? '-' }}</div>
                    </div>
                </div>

                @if(isset($profil) && $profil->general_information)
                <div class="pt-6 border-t border-gray-100">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Informasi Tambahan</h3>
                    <div class="prose max-w-none text-gray-700">
                        {!! $profil->general_information !!}
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div id="content-struktur" class="tab-content hidden">
            <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Struktur Organisasi Pemerintah Desa</h2>
                @if(isset($profil) && $profil->organizational_structure)
                    <div class="flex justify-center bg-gray-50 rounded-xl p-4 border border-gray-100">
                        <img src="{{ Storage::url($profil->organizational_structure) }}" alt="Struktur Organisasi Desa Blumbang" class="max-w-full h-auto rounded-lg shadow-sm">
                    </div>
                @else
                    <div class="py-12 text-center bg-gray-50 rounded-xl border border-gray-100">
                        <div class="mb-4 flex justify-center text-gray-300"><svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg></div>
                        <p class="text-gray-500">Belum ada bagan struktur organisasi yang diunggah.</p>
                    </div>
                @endif
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