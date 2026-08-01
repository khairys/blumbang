<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Http\Requests\SimpanPengumumanRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index(Request $request)
    {
        $query = Pengumuman::latest();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        $pengumumans = $query->paginate(10)->withQueryString();
        return view('admin.pengumuman.index', compact('pengumumans'));
    }

    public function create()
    {
        return view('admin.pengumuman.create');
    }

    public function store(SimpanPengumumanRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']) . '-' . now()->timestamp;
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('attachment')) {
            $data['attachment'] = $request->file('attachment')->store('pengumuman', 'public');
        }

        Pengumuman::create($data);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil ditambahkan!');
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', compact('pengumuman'));
    }

    public function update(SimpanPengumumanRequest $request, Pengumuman $pengumuman)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('attachment')) {
            if ($pengumuman->attachment) Storage::disk('public')->delete($pengumuman->attachment);
            $data['attachment'] = $request->file('attachment')->store('pengumuman', 'public');
        }

        $pengumuman->update($data);

        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil diperbarui!');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->route('admin.pengumuman.index')
            ->with('success', 'Pengumuman berhasil dihapus!');
    }
}
