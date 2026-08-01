<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\PotensiJagung;

class BerandaController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('category')->where('status', 'published')->latest()->take(3)->get();
        $pengumumans = Pengumuman::where('status', 'published')->latest()->take(3)->get();
        $potensi_jagung = PotensiJagung::where('status', 'published')->latest()->take(3)->get();
        
        return view('welcome', compact('beritas', 'pengumumans', 'potensi_jagung'));
    }
}
