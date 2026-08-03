<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Layanan;

class LayananPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = Layanan::latest();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        $layanans = $query->paginate(10)->withQueryString();
        
        return view('publik.layanan.index', compact('layanans'));
    }
}
