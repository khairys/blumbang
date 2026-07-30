<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\KategoriBerita;
use App\Models\KategoriPotensi;
use App\Models\PengaturanWebsite;

class DataAwalSeeder extends Seeder
{
    public function run(): void
    {
        // Kategori Berita
        $kategoris = ['Pemerintahan', 'Pertanian', 'Kesehatan', 'Pendidikan', 'Infrastruktur', 'Sosial', 'Kegiatan'];
        foreach ($kategoris as $k) {
            KategoriBerita::firstOrCreate(['slug' => Str::slug($k)], ['name' => $k]);
        }

        // Kategori Potensi
        $potensiKats = ['Pertanian', 'UMKM', 'Produk Lokal', 'Wisata', 'Budaya'];
        foreach ($potensiKats as $k) {
            KategoriPotensi::firstOrCreate(['slug' => Str::slug($k)], ['name' => $k]);
        }

        // Pengaturan Website (single record)
        PengaturanWebsite::firstOrCreate(['id' => 1], [
            'village_name' => 'Desa Blumbang',
            'email'        => 'desa@blumbang.desa.id',
            'phone'        => '(0276) 123-4567',
            'address'      => 'Jl. Raya Blumbang, Klego, Boyolali, Jawa Tengah 57386',
            'facebook'     => 'https://facebook.com/desablumbang',
            'instagram'    => 'https://instagram.com/desablumbang',
            'youtube'      => null,
            'maps_embed'   => null,
        ]);
    }
}
