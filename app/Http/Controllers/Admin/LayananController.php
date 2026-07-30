<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Http\Requests\SimpanLayananRequest;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->paginate(10);
        return view('admin.layanan.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(SimpanLayananRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();

        Layanan::create($data);

        return redirect()->route('admin.layanan.index')
            ->with('success', 'Layanan berhasil ditambahkan!');
    }

    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    public function update(SimpanLayananRequest $request, Layanan $layanan)
    {
        $data = $request->validated();
        $data['updated_by'] = auth()->id();
        $layanan->update($data);

        return redirect()->route('admin.layanan.index')
            ->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('admin.layanan.index')
            ->with('success', 'Layanan berhasil dihapus!');
    }
}
