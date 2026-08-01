<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::with('category')
            ->where('status', 'published')
            ->latest('published_at');
            
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }

        $beritas = $query->paginate(9)->withQueryString();

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
