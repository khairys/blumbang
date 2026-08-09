<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Layanan;

class LayananPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::where('is_active', true)->latest();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        $layanans = $query->paginate(10)->withQueryString();
        
        return view('publik.layanan.index', compact('layanans'));
    }

    public function show(Layanan $layanan)
    {
        if (!$layanan->is_active) {
            abort(404);
        }
        return view('publik.layanan.show', compact('layanan'));
    }
}
