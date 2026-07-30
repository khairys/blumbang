<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PotensiJagung;
use App\Http\Requests\SimpanPotensiJagungRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PotensiJagungController extends Controller
{
    public function index()
    {
        $produk = PotensiJagung::latest()->paginate(10);
        return view('admin.potensi_jagung.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.potensi_jagung.create');
    }

    public function store(SimpanPotensiJagungRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']) . '-' . now()->timestamp;
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('jagung', 'public');
        }

        PotensiJagung::create($data);

        return redirect()->route('admin.potensi-jagung.index')
            ->with('success', 'Konten jagung berhasil ditambahkan!');
    }

    public function edit(PotensiJagung $potensiJagung)
    {
        return view('admin.potensi_jagung.edit', ['produk' => $potensiJagung]);
    }

    public function update(SimpanPotensiJagungRequest $request, PotensiJagung $potensiJagung)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();

        if ($request->hasFile('thumbnail')) {
            if ($potensiJagung->thumbnail) Storage::disk('public')->delete($potensiJagung->thumbnail);
            $data['thumbnail'] = $request->file('thumbnail')->store('jagung', 'public');
        }

        $potensiJagung->update($data);

        return redirect()->route('admin.potensi-jagung.index')
            ->with('success', 'Konten jagung berhasil diperbarui!');
    }

    public function destroy(PotensiJagung $potensiJagung)
    {
        $potensiJagung->delete();
        return redirect()->route('admin.potensi-jagung.index')
            ->with('success', 'Konten jagung berhasil dihapus!');
    }
}
