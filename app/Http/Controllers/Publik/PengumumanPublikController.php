<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;

class PengumumanPublikController extends Controller
{
    public function index()
    {
        $pengumumans = Pengumuman::where('status', 'published')
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('publik.pengumuman.index', compact('pengumumans'));
    }

    public function show(string $slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('publik.pengumuman.show', compact('pengumuman'));
    }
}
