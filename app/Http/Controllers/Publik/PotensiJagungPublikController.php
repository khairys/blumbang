<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PotensiJagung;

class PotensiJagungPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = PotensiJagung::where('status', 'published')->latest();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        $produks = $query->paginate(9)->withQueryString();
        
        return view('publik.potensi_jagung.index', compact('produks'));
    }

    public function show($slug)
    {
        $produk = PotensiJagung::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('publik.potensi_jagung.show', compact('produk'));
    }
}
