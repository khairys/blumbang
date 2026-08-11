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
        $pengumumans = Pengumuman::where('status', 'published')->latest()->take(5)->get();
        $popup_pengumuman = Pengumuman::where('status', 'published')->where('is_popup', true)->latest()->first();
        $potensi_jagung = PotensiJagung::where('status', 'published')->latest()->take(4)->get();
        $groupedLayanans = \App\Models\Layanan::where('is_active', true)->orderBy('kategori')->orderBy('title')->get()->groupBy(function($item) {
            return $item->kategori ?: 'Layanan Lainnya';
        });
        $potensi_desa = \App\Models\PotensiDesa::with('kategori')->where('status', 'published')->latest()->take(3)->get();
        $profil = \App\Models\ProfilDesa::first();
        
        return view('welcome', compact('beritas', 'pengumumans', 'popup_pengumuman', 'potensi_jagung', 'groupedLayanans', 'potensi_desa', 'profil'));
    }
}
