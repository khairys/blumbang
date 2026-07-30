<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Berita</h2>
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
                <div class="flex items-center justify-between p-5 border-b border-gray-100">
                    <h3 class="font-bold text-gray-900">Daftar Berita</h3>
                    <a href="{{ route('admin.berita.create') }}" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white text-sm font-medium px-4 py-2 rounded-xl transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        Tambah Berita
                    </a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Judul</th>
                                <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Kategori</th>
                                <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="text-left px-5 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Tanggal</th>
                                <th class="text-right px-5 py-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse ($beritas as $b)
                            <tr class="hover:bg-gray-50">
                                <td class="px-5 py-3 font-medium text-gray-900 max-w-xs truncate">{{ $b->title }}</td>
                                <td class="px-5 py-3 text-gray-500">{{ $b->category?->name ?? '-' }}</td>
                                <td class="px-5 py-3">
                                    <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full {{ $b->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-600' }}">
                                        {{ $b->status === 'published' ? 'Dipublikasikan' : 'Draft' }}
                                    </span>
                                </td>
                                <td class="px-5 py-3 text-gray-500">{{ $b->created_at->format('d M Y') }}</td>
                                <td class="px-5 py-3 text-right">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('admin.berita.edit', $b) }}" class="text-blue-600 hover:text-blue-700 text-xs font-medium">Edit</a>
                                        <form method="POST" action="{{ route('admin.berita.destroy', $b) }}" onsubmit="return confirm('Hapus berita ini?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600 text-xs font-medium">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-5 py-12 text-center text-gray-400">
                                    <p class="text-4xl mb-2">📝</p>
                                    <p>Belum ada berita. <a href="{{ route('admin.berita.create') }}" class="text-green-600 hover:underline">Tambah sekarang</a></p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if($beritas->hasPages())
                <div class="p-4 border-t border-gray-100">{{ $beritas->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>