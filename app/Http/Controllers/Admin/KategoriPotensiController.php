<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\KategoriPotensi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriPotensiController extends Controller
{
    public function index()
    {
        $kategoris = KategoriPotensi::withCount('potensiDesa')->orderBy('name')->paginate(20);
        return view('admin.kategori_potensi.index', compact('kategoris'));
    }
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:100|unique:kategori_potensi,name']);
        KategoriPotensi::create(['name' => $request->name, 'slug' => Str::slug($request->name)]);
        return redirect()->route('admin.kategori-potensi.index')->with('success', 'Kategori berhasil ditambahkan!');
    }
    public function update(Request $request, KategoriPotensi $kategoriPotensi)
    {
        $request->validate(['name' => 'required|string|max:100|unique:kategori_potensi,name,' . $kategoriPotensi->id]);
        $kategoriPotensi->update(['name' => $request->name, 'slug' => Str::slug($request->name)]);
        return redirect()->route('admin.kategori-potensi.index')->with('success', 'Kategori berhasil diperbarui!');
    }
    public function destroy(KategoriPotensi $kategoriPotensi)
    {
        $kategoriPotensi->delete();
        return redirect()->route('admin.kategori-potensi.index')->with('success', 'Kategori berhasil dihapus!');
    }
}