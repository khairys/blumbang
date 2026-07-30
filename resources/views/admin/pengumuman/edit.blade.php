<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Pengumuman</h2>
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
            <form method="POST" action="{{ route('admin.pengumuman.update', $pengumuman) }}" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1">Judul</label><input type="text" name="title" value="{{ old('title', $pengumuman->title) }}" required class="w-full rounded-xl border-gray-300 text-sm"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1">Isi</label><textarea name="content" rows="8" class="w-full rounded-xl border-gray-300 text-sm">{{ old('content', $pengumuman->content) }}</textarea></div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5 space-y-4">
                            <div><label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <select name="status" class="w-full rounded-xl border-gray-300 text-sm">
                                    <option value="draft" {{ $pengumuman->status === 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ $pengumuman->status === 'published' ? 'selected' : '' }}>Aktif</option>
                                </select></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1">Berlaku Hingga</label><input type="datetime-local" name="expired_at" value="{{ old('expired_at', $pengumuman->expired_at ? \Carbon\Carbon::parse($pengumuman->expired_at)->format('Y-m-d\TH:i') : '') }}" class="w-full rounded-xl border-gray-300 text-sm"></div>
                            <div><label class="block text-sm font-medium text-gray-700 mb-1">Lampiran Baru</label><input type="file" name="attachment" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-amber-50 file:text-amber-700"></div>
                        </div>
                        <div class="flex gap-3">
                            <button type="submit" class="flex-1 bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2.5 rounded-xl text-sm">Simpan</button>
                            <a href="{{ route('admin.pengumuman.index') }}" class="flex-1 text-center bg-gray-100 text-gray-700 font-medium py-2.5 rounded-xl text-sm">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>