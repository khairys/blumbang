<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriBeritaController extends Controller
{
    public function index()
    {
        $kategoris = KategoriBerita::withCount('beritas')->orderBy('name')->paginate(20);
        return view('admin.kategori_berita.index', compact('kategoris'));
    }
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:100|unique:kategori_berita,name']);
        KategoriBerita::create(['name' => $request->name, 'slug' => Str::slug($request->name)]);
        return redirect()->route('admin.kategori-berita.index')->with('success', 'Kategori berhasil ditambahkan!');
    }
    public function update(Request $request, KategoriBerita $kategoriBeritum)
    {
        $request->validate(['name' => 'required|string|max:100|unique:kategori_berita,name,' . $kategoriBeritum->id]);
        $kategoriBeritum->update(['name' => $request->name, 'slug' => Str::slug($request->name)]);
        return redirect()->route('admin.kategori-berita.index')->with('success', 'Kategori berhasil diperbarui!');
    }
    public function destroy(KategoriBerita $kategoriBeritum)
    {
        $kategoriBeritum->delete();
        return redirect()->route('admin.kategori-berita.index')->with('success', 'Kategori berhasil dihapus!');
    }
}