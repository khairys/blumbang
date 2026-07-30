<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaPublikController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('category')
            ->where('status', 'published')
            ->latest('published_at')
            ->paginate(9);

        $kategoris = \App\Models\KategoriBerita::all();

        return view('publik.berita.index', compact('beritas', 'kategoris'));
    }

    public function show(string $slug)
    {
        $berita = Berita::with(['category', 'creator'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('publik.berita.show', compact('berita'));
    }
}
