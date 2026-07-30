<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PotensiDesa;
use App\Models\KategoriPotensi;
use App\Http\Requests\SimpanPotensiDesaRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PotensiDesaController extends Controller
{
    public function index()
    {
        $potensis = PotensiDesa::with('kategori')->latest()->paginate(10);
        return view('admin.potensi_desa.index', compact('potensis'));
    }

    public function create()
    {
        $kategoris = KategoriPotensi::orderBy('name')->get();
        return view('admin.potensi_desa.create', compact('kategoris'));
    }

    public function store(SimpanPotensiDesaRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']) . '-' . now()->timestamp;
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('potensi', 'public');
        }

        PotensiDesa::create($data);

        return redirect()->route('admin.potensi-desa.index')
            ->with('success', 'Potensi desa berhasil ditambahkan!');
    }

    public function edit(PotensiDesa $potensiDesa)
    {
        $kategoris = KategoriPotensi::orderBy('name')->get();
        return view('admin.potensi_desa.edit', ['potensi' => $potensiDesa, 'kategoris' => $kategoris]);
    }

    public function update(SimpanPotensiDesaRequest $request, PotensiDesa $potensiDesa)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('thumbnail')) {
            if ($potensiDesa->thumbnail) Storage::disk('public')->delete($potensiDesa->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('potensi', 'public');
        }

        $potensiDesa->update($data);

        return redirect()->route('admin.potensi-desa.index')
            ->with('success', 'Potensi desa berhasil diperbarui!');
    }

    public function destroy(PotensiDesa $potensiDesa)
    {
        $potensiDesa->delete();
        return redirect()->route('admin.potensi-desa.index')
            ->with('success', 'Potensi desa berhasil dihapus!');
    }
}
