<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Layanan;

class LayananPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::where('is_active', true)->orderBy('kategori')->orderBy('sub_kategori')->orderBy('title');
        
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
            $layanans = $query->get();
            $isSearching = true;
            return view('publik.layanan.index', compact('layanans', 'isSearching'));
        }
        
        // Group by category only
        $groupedLayanans = $query->get()->groupBy(function($item) {
            return $item->kategori ?: 'Layanan Lainnya';
        });
        
        $isSearching = false;
        
        return view('publik.layanan.index', compact('groupedLayanans', 'isSearching'));
    }

    public function show(Layanan $layanan)
    {
        if (!$layanan->is_active) {
            abort(404);
        }
        return view('publik.layanan.show', compact('layanan'));
    }

    public function kategori($kategori)
    {
        // Unslug the category name (e.g., 'surat-keterangan' to 'Surat Keterangan')
        $kategoriName = str_replace('-', ' ', $kategori);
        
        $layanans = Layanan::where('is_active', true)
            ->where('kategori', 'like', $kategoriName)
            ->orderBy('title')
            ->get();
            
        if ($layanans->isEmpty()) {
            abort(404);
        }
        
        // Ensure proper capitalization for display
        $kategoriTitle = ucwords($kategoriName);
        
        return view('publik.layanan.kategori', compact('layanans', 'kategoriTitle'));
    }
}
