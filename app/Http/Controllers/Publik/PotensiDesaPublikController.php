<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PotensiDesa;
use Illuminate\Http\Request;

class PotensiDesaPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = PotensiDesa::with('kategori')->where('status', 'published')->latest();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        if ($request->has('kategori')) {
            $query->whereHas('kategori', function($q) use ($request) {
                $q->where('slug', $request->kategori);
            });
        }
        
        $potensis = $query->paginate(9)->withQueryString();
        $kategoris = \App\Models\KategoriPotensi::all();
        
        return view('publik.potensi_desa.index', compact('potensis', 'kategoris'));
    }

    public function show($slug)
    {
        $potensi = PotensiDesa::with('kategori')->where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('publik.potensi_desa.show', compact('potensi'));
    }
}
