<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PengaturanWebsite;
use App\Http\Requests\SimpanPengaturanWebsiteRequest;
use Illuminate\Support\Facades\Storage;

class PengaturanWebsiteController extends Controller
{
    public function index()
    {
        $pengaturan = PengaturanWebsite::first();
        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    public function store(SimpanPengaturanWebsiteRequest $request)
    {
        $data = $request->validated();
        $pengaturan = PengaturanWebsite::first();

        if ($request->hasFile('logo')) {
            if ($pengaturan && $pengaturan->logo) {
                Storage::disk('public')->delete($pengaturan->logo);
            }
            $data['logo'] = $request->file('logo')->store('pengaturan', 'public');
        }

        PengaturanWebsite::updateOrCreate(['id' => 1], $data);

        return redirect()->route('admin.pengaturan.index')
            ->with('success', 'Pengaturan berhasil disimpan!');
    }
}
