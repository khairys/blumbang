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

        // Parse comma-separated string to array for industri
        if (isset($data['geografi_json']['industri']) && is_string($data['geografi_json']['industri'])) {
            $data['geografi_json']['industri'] = array_map('trim', explode(',', $data['geografi_json']['industri']));
            $data['geografi_json']['industri'] = array_filter($data['geografi_json']['industri']);
        }

        // Parse newline-separated string to array for RT/RW
        if (isset($data['daftar_rt_rw']['rt']) && is_string($data['daftar_rt_rw']['rt'])) {
            $data['daftar_rt_rw']['rt'] = array_map('trim', explode("\n", $data['daftar_rt_rw']['rt']));
            $data['daftar_rt_rw']['rt'] = array_filter($data['daftar_rt_rw']['rt']);
        }
        if (isset($data['daftar_rt_rw']['rw']) && is_string($data['daftar_rt_rw']['rw'])) {
            $data['daftar_rt_rw']['rw'] = array_map('trim', explode("\n", $data['daftar_rt_rw']['rw']));
            $data['daftar_rt_rw']['rw'] = array_filter($data['daftar_rt_rw']['rw']);
        }

        $profil = ProfilDesa::first();

        if ($request->hasFile('organizational_structure')) {
            if ($profil && $profil->organizational_structure) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($profil->organizational_structure);
            }
            $data['organizational_structure'] = $request->file('organizational_structure')->store('profil', 'public');
        }

        if ($request->hasFile('bpd_structure')) {
            if ($profil && $profil->bpd_structure) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($profil->bpd_structure);
            }
            $data['bpd_structure'] = $request->file('bpd_structure')->store('profil', 'public');
        }

        ProfilDesa::updateOrCreate(['id' => 1], $data);

        return redirect()->route('admin.profil.index')
            ->with('success', 'Profil desa berhasil disimpan!');
    }
}
