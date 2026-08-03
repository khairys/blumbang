<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\ProfilDesa;

class ProfilDesaPublikController extends Controller
{
    public function index()
    {
        $profil = ProfilDesa::first();
        return view('publik.profil', compact('profil'));
    }
}
