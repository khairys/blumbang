<x-app-layout>
    <x-slot name="header"><h1 class="text-lg font-bold text-gray-900">Kategori Potensi Desa</h1></x-slot>
    <div class="p-6 space-y-5">
        @if(session("success"))
        <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm">{{ session("success") }}</div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-5">
                <h2 class="font-bold text-gray-900 mb-4">Tambah Kategori Baru</h2>
                <form method="POST" action="{{ route("admin.kategori-potensi.store") }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Nama Kategori</label>
                        <input type="text" name="name" value="{{ old("name") }}" required
                               placeholder="Contoh: Pertanian"
                               class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        @error("name")<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-2.5 rounded-xl text-sm transition-colors">
                        + Tambah Kategori
                    </button>
                </form>
            </div>
            <div class="lg:col-span-2 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="p-5 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-bold text-gray-900">Daftar Kategori</h2>
                    <span class="text-sm text-gray-500">Total: {{ $kategoris->total() }}</span>
                </div>
                <table class="w-full text-sm">
                    <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th class="text-left px-4 py-3">Nama</th>
                            <th class="text-left px-4 py-3">Slug</th>
                            <th class="text-center px-4 py-3">Jumlah Potensi</th>
                            <th class="text-right px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($kategoris as $item)
                        <tr class="hover:bg-gray-50 transition-colors" x-data="{ editing: false }">
                            <td class="px-4 py-3" x-show="!editing">
                                <p class="font-medium text-gray-900">{{ $item->name }}</p>
                            </td>
                            <td class="px-4 py-3 text-gray-400 text-xs" x-show="!editing">{{ $item->slug }}</td>
                            <td class="px-4 py-3 text-center" x-show="!editing">
                                <span class="bg-green-100 text-green-700 text-xs font-bold px-2.5 py-1 rounded-full">{{ $item->potensi_desa_count }}</span>
                            </td>
                            <td class="px-4 py-3 text-right" x-show="!editing">
                                <div class="inline-flex items-center gap-1">
                                    <button @click="editing = true" class="bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-medium px-3 py-1.5 rounded-lg transition-colors">Edit</button>
                                    @if($item->potensi_desa_count == 0)
                                    <form method="POST" action="{{ route("admin.kategori-potensi.destroy", $item) }}" onsubmit="return confirm("Hapus kategori ini?")">
                                        @csrf @method("DELETE")
                                        <button type="submit" class="bg-red-50 hover:bg-red-100 text-red-600 text-xs font-medium px-3 py-1.5 rounded-lg transition-colors">Hapus</button>
                                    </form>
                                    @else
                                    <span class="text-xs text-gray-400 px-2">Ada isi</span>
                                    @endif
                                </div>
                            </td>
                            <td colspan="4" class="px-4 py-3" x-show="editing" x-cloak>
                                <form method="POST" action="{{ route("admin.kategori-potensi.update", $item) }}" class="flex items-center gap-2">
                                    @csrf @method("PUT")
                                    <input type="text" name="name" value="{{ $item->name }}" required class="flex-1 px-3 py-1.5 border border-green-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-xs font-medium px-4 py-1.5 rounded-lg">Simpan</button>
                                    <button type="button" @click="editing = false" class="bg-gray-100 hover:bg-gray-200 text-gray-700 text-xs font-medium px-4 py-1.5 rounded-lg">Batal</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="px-4 py-12 text-center text-gray-400">Belum ada kategori.</td></tr>
                        @endforelse
                    </tbody>
                </table>
                @if($kategoris->hasPages())
                <div class="px-4 py-3 border-t border-gray-100">{{ $kategoris->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>