<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Layanan;

class LayananPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::where('is_active', true)->orderBy('kategori')->orderBy('title');
        
        $isSearching = false;

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('kategori', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
            $isSearching = true;
        }

        if ($request->has('kategori') && !empty($request->kategori) && $request->kategori != 'Semua') {
            // Revert slug if necessary, but actually we can just pass the exact string from the view
            $query->where('kategori', $request->kategori);
            $isSearching = true; 
        }
        
        $layanans = $query->get();

        return view('publik.layanan.index', compact('layanans', 'isSearching'));
    }

    public function show(Layanan $layanan)
    {
        if (!$layanan->is_active) {
            abort(404);
        }
        return view('publik.layanan.show', compact('layanan'));
    }
}
