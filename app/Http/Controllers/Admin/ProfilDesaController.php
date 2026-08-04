<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilDesa;
use App\Http\Requests\SimpanProfilDesaRequest;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profil = ProfilDesa::first();
        return view('admin.profil.index', compact('profil'));
    }

    public function store(SimpanProfilDesaRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = auth()->id();
        $data['updated_by'] = auth()->id();

        $profil = ProfilDesa::first();

        if ($request->hasFile('organizational_structure')) {
            if ($profil && $profil->organizational_structure) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($profil->organizational_structure);
            }
            $data['organizational_structure'] = $request->file('organizational_structure')->store('profil', 'public');
        }

        ProfilDesa::updateOrCreate(['id' => 1], $data);

        return redirect()->route('admin.profil.index')
            ->with('success', 'Profil desa berhasil disimpan!');
    }
}
