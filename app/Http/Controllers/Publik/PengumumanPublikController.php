<?php

namespace App\Http\Controllers\Publik;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;

use Illuminate\Http\Request;

class PengumumanPublikController extends Controller
{
    public function index(Request $request)
    {
        $query = Pengumuman::where('status', 'published')
            ->orderBy('published_at', 'desc');
            
        if ($request->has('search') && $request->search != '') {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }
        
        if ($request->has('filter') && in_array($request->filter, ['aktif', 'mendatang', 'selesai'])) {
            $query->where('activity_status', $request->filter);
        }

        $pengumumans = $query->paginate(10)->withQueryString();

        return view('publik.pengumuman.index', compact('pengumumans'));
    }

    public function show(string $slug)
    {
        $pengumuman = Pengumuman::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('publik.pengumuman.show', compact('pengumuman'));
    }
}
