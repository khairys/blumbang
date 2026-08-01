<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Http\Requests\SimpanBeritaRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::with('category')->latest();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        $beritas = $query->paginate(10)->withQueryString();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        $kategoris = KategoriBerita::orderBy('name')->get();
        return view('admin.berita.create', compact('kategoris'));
    }

    public function store(SimpanBeritaRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']) . '-' . now()->timestamp;
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit(Berita $beritum)
    {
        $kategoris = KategoriBerita::orderBy('name')->get();
        return view('admin.berita.edit', ['berita' => $beritum, 'kategoris' => $kategoris]);
    }

    public function update(SimpanBeritaRequest $request, Berita $beritum)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('thumbnail')) {
            if ($beritum->thumbnail) Storage::disk('public')->delete($beritum->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('berita', 'public');
        }

        $beritum->update($data);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus!');
    }
}
