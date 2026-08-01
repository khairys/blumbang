<x-app-layout>
    <x-slot name="header">
        <h1 class="text-lg font-bold text-gray-900">Manajemen Potensi Desa</h1>
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
                    <h2 class="font-bold text-gray-900">Daftar Potensi Desa</h2>
                    <p class="text-sm text-gray-500 mt-0.5">Total: {{ $potensis->total() }} data</p>
                </div>
                <div class="flex items-center gap-2">
                    <form action="{{ route('admin.potensi-desa.index') }}" method="GET" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari potensi..." class="pl-9 pr-4 py-2 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </form>
                    <a href="{{ route('admin.potensi-desa.create') }}"
                       class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl transition-colors shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Tambah Potensi
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
                            <th class="text-right px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-50">
                        @forelse ($potensis as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    @if($item->thumbnail)
                                    <img src="{{ Storage::url($item->thumbnail) }}" class="w-10 h-10 rounded-lg object-cover flex-shrink-0">
                                    @else
                                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center text-lg flex-shrink-0">🏡</div>
                                    @endif
                                    <div>
                                        <p class="font-medium text-gray-900 line-clamp-1">{{ $item->title }}</p>
                                        @if($item->summary)<p class="text-xs text-gray-400 mt-0.5 line-clamp-1">{{ $item->summary }}</p>@endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 hidden md:table-cell">
                                <span class="text-xs bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded-full">{{ $item->kategori?->name ?? '—' }}</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full {{ $item->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-amber-100 text-amber-700' }}">
                                    {{ $item->status === 'published' ? '✓ Publikasi' : '○ Draft' }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <a href="{{ route('admin.potensi-desa.edit', $item) }}"
                                       class="inline-flex items-center gap-1 bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-medium px-3 py-1.5 rounded-lg transition-colors">Edit</a>
                                    <form method="POST" action="{{ route('admin.potensi-desa.destroy', $item) }}" onsubmit="return confirm('Hapus data ini?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="inline-flex items-center gap-1 bg-red-50 hover:bg-red-100 text-red-600 text-xs font-medium px-3 py-1.5 rounded-lg transition-colors">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="px-4 py-16 text-center">
                            <div class="text-gray-300 text-5xl mb-3">🏡</div>
                            <p class="text-gray-500 font-medium">Belum ada data potensi desa</p>
                        </td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @if($potensis->hasPages())
            <div class="px-4 py-3 border-t border-gray-100">{{ $potensis->links() }}</div>
            @endif
        </div>
    </div>
</x-app-layout>