<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Kelola Profil Desa</h1>
    </x-slot>
    <div class="p-6 space-y-5">
        @if(session('success'))
        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm">
            <svg class="w-5 h-5 flex-shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            {{ session('success') }}
        </div>
        @endif
        @if($errors->any())
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $err)<li>{{ $err }}</li>@endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{ route('admin.profil.store') }}">
            @csrf
            <div class="max-w-4xl space-y-5">
                <div class="bg-blue-50 border border-blue-200 rounded-xl px-4 py-3 text-sm text-blue-700 flex items-start gap-2">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                    <p>Data profil desa hanya ada satu record. Isi semua field dan klik simpan untuk memperbarui.</p>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📜 Sejarah Desa</h3>
                    <input id="history" type="hidden" name="history" value="{{ old('history', $profil?->history) }}">
                    <trix-editor input="history" class="trix-content prose max-w-none w-full border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Tuliskan sejarah singkat Desa Blumbang, kapan desa ini berdiri, siapa tokoh-tokoh penting, dll..."></trix-editor>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">🎯 Visi & Misi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Visi Desa</label>
                            <input id="vision" type="hidden" name="vision" value="{{ old('vision', $profil?->vision) }}">
                            <trix-editor input="vision" class="trix-content prose max-w-none w-full border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Tulis visi Desa Blumbang..."></trix-editor>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1.5">Misi Desa</label>
                            <input id="mission" type="hidden" name="mission" value="{{ old('mission', $profil?->mission) }}">
                            <trix-editor input="mission" class="trix-content prose max-w-none w-full border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="1. Mewujudkan...&#10;2. Meningkatkan...&#10;3. Mengembangkan..."></trix-editor>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">🗺️ Kondisi Geografis</h3>
                    <input id="geography" type="hidden" name="geography" value="{{ old('geography', $profil?->geography) }}">
                    <trix-editor input="geography" class="trix-content prose max-w-none w-full border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Batas wilayah, topografi, luas wilayah, iklim, dll..."></trix-editor>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                    <h3 class="font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-100">📊 Data Umum Desa</h3>
                    <p class="text-xs text-gray-400 mb-3">Isi dengan data statistik desa seperti jumlah penduduk, KK, RT/RW, mata pencaharian, dll</p>
                    <input id="general_information" type="hidden" name="general_information" value="{{ old('general_information', $profil?->general_information) }}">
                    <trix-editor input="general_information" class="trix-content prose max-w-none w-full border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400" placeholder="Jumlah Penduduk: 2.847 jiwa&#10;Jumlah KK: 812 KK&#10;Jumlah RT: 24 RT&#10;Jumlah RW: 6 RW&#10;..."></trix-editor>
                </div>

                <div class="flex gap-3">
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-8 rounded-xl text-sm transition-colors">
                        💾 Simpan Profil Desa
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>