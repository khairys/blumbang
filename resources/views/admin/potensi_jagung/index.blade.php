<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Produk Jagung & Stunting</h2>
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
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="flex items-center justify-between p-5 border-b">
                    <h3 class="font-bold text-gray-900">Daftar Konten Jagung</h3>
                    <a href="{{ route('admin.potensi-jagung.create') }}" class="inline-flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white text-sm font-medium px-4 py-2 rounded-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Tambah Konten
                    </a>
                </div>
                <table class="w-full text-sm">
                    <thead class="bg-gray-50"><tr>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Judul</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Kategori</th>
                        <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Status</th>
                        <th class="text-right px-5 py-3 text-xs font-semibold text-gray-500 uppercase">Aksi</th>
                    </tr></thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($produk as $p)
                        <tr class="hover:bg-gray-50">
                            <td class="px-5 py-3 font-medium text-gray-900">{{ $p->title }}</td>
                            <td class="px-5 py-3 text-gray-500">{{ $p->category }}</td>
                            <td class="px-5 py-3"><span class="px-2.5 py-0.5 text-xs font-semibold rounded-full {{ $p->status === 'published' ? 'bg-amber-100 text-amber-700' : 'bg-gray-100 text-gray-600' }}">{{ $p->status === 'published' ? 'Dipublikasikan' : 'Draft' }}</span></td>
                            <td class="px-5 py-3 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="{{ route('admin.potensi-jagung.edit', $p) }}" class="text-blue-600 text-xs font-medium">Edit</a>
                                    <form method="POST" action="{{ route('admin.potensi-jagung.destroy', $p) }}" onsubmit="return confirm('Hapus?')">@csrf @method('DELETE')<button class="text-red-500 text-xs font-medium">Hapus</button></form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="px-5 py-12 text-center text-gray-400"><p class="text-4xl mb-2">🌽</p><p>Belum ada konten jagung.</p></td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>