<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Manajemen Berita</h1>
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
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 p-5 border-b border-gray-100">
                <div>
                    <h2 class="font-bold text-gray-900">Daftar Berita</h2>
                    <p class="text-sm text-gray-500 mt-0.5">Total: {{ $beritas->total() }} berita</p>
                </div>
                <div class="flex items-center gap-2">
                    <form action="{{ route('admin.berita.index') }}" method="GET" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari berita..." class="pl-9 pr-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-green-400">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </form>
                    <a href="{{ route('admin.berita.create') }}"
                       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl transition-colors shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Tambah Berita
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th class="text-left px-4 py-3">Judul</th>
                            <th class="text-left px-4 py-3 hidden md:table-cell">Kategori</th>
                            <th class="text-left px-4 py-3">Status</th>
                            <th class="text-left px-4 py-3 hidden sm:table-cell">Tanggal</th>
                            <th class="text-right px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($beritas as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3">
                                <p class="font-medium text-gray-900 line-clamp-1">{{ $item->title }}</p>
                                @if($item->summary)<p class="text-xs text-gray-400 mt-0.5 line-clamp-1">{{ $item->summary }}</p>@endif
                            </td>
                            <td class="px-4 py-3 hidden md:table-cell">
                                <span class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-0.5 rounded-full">{{ $item->category?->name ?? 'Tanpa Kategori' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full {{ $item->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">
                                    {{ $item->status === 'published' ? '✓ Publikasi' : '○ Draft' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-gray-500 text-xs hidden sm:table-cell">{{ $item->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-3 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <a href="{{ route('admin.berita.edit', $item) }}"
                                           class="inline-flex items-center gap-1 bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-medium px-3 py-1.5 rounded-lg transition-colors">
                                            Edit
                                        </a>
                                        <form method="POST" action="{{ route('admin.berita.destroy', $item) }}"
                                              onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center gap-1 bg-red-50 hover:bg-red-100 text-red-600 text-xs font-medium px-3 py-1.5 rounded-lg transition-colors">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="px-4 py-16 text-center">
                            <div class="text-gray-300 text-5xl mb-3">📰</div>
                            <p class="text-gray-500 font-medium">Belum ada berita</p>
                            <p class="text-gray-400 text-sm mt-1">Klik tombol "Tambah Berita" untuk mulai menulis</p>
                        </td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($beritas->hasPages())
            <div class="px-4 py-3 border-t border-gray-100">{{ $beritas->links() }}</div>
            @endif
        </div>
    </div>
</x-app-layout>