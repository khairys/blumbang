<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Profil Desa</h2>
        </div>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-50 border border-green-300 text-green-800 px-4 py-3 rounded-xl flex items-center gap-2">
                    <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('admin.profil.store') }}">
                @csrf
                <div class="max-w-4xl space-y-5">
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h3 class="font-bold text-gray-900 mb-5 pb-2 border-b">Sejarah Desa</h3>
                        <textarea name="history" rows="8" placeholder="Tuliskan sejarah Desa Blumbang..." class="w-full rounded-xl border-gray-300 text-sm">{{ old('history', $profil?->history) }}</textarea>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h3 class="font-bold text-gray-900 mb-5 pb-2 border-b">Visi & Misi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Visi Desa</label>
                                <textarea name="vision" rows="6" placeholder="Visi Desa Blumbang..." class="w-full rounded-xl border-gray-300 text-sm">{{ old('vision', $profil?->vision) }}</textarea>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Misi Desa</label>
                                <textarea name="mission" rows="6" placeholder="1. ...&#10;2. ..." class="w-full rounded-xl border-gray-300 text-sm">{{ old('mission', $profil?->mission) }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h3 class="font-bold text-gray-900 mb-5 pb-2 border-b">Kondisi Geografis</h3>
                        <textarea name="geography" rows="6" placeholder="Batas wilayah, topografi, iklim..." class="w-full rounded-xl border-gray-300 text-sm">{{ old('geography', $profil?->geography) }}</textarea>
                    </div>
                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                        <h3 class="font-bold text-gray-900 mb-5 pb-2 border-b">Data Umum Desa</h3>
                        <textarea name="general_information" rows="8" placeholder="Jumlah penduduk, KK, RT/RW..." class="w-full rounded-xl border-gray-300 text-sm">{{ old('general_information', $profil?->general_information) }}</textarea>
                    </div>
                    <div class="flex gap-3">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl text-sm">Simpan Profil Desa</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>