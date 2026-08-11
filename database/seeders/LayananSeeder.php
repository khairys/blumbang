<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;
use Illuminate\Support\Str;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bersihkan data lama agar tidak tumpang tindih
        Layanan::truncate();

        $layanans = [
            // SURAT KETERANGAN
            [
                'title' => 'Surat Keterangan Umum',
                'kategori' => 'Surat Keterangan',
                'sub_kategori' => null
            ],
            [
                'title' => 'SKTM',
                'kategori' => 'Surat Keterangan',
                'sub_kategori' => null
            ],
            [
                'title' => 'Domisili Tempat Tinggal',
                'kategori' => 'Surat Keterangan',
                'sub_kategori' => null
            ],
            [
                'title' => 'Surat Keterangan Usaha',
                'kategori' => 'Surat Keterangan',
                'sub_kategori' => null
            ],
            [
                'title' => 'Domisili Usaha',
                'kategori' => 'Surat Keterangan',
                'sub_kategori' => null
            ],
            // SURAT PENGANTAR
            [
                'title' => 'Pengantar Umum',
                'kategori' => 'Surat Pengantar',
                'sub_kategori' => null
            ],
            [
                'title' => 'Pengantar SKCK',
                'kategori' => 'Surat Pengantar',
                'sub_kategori' => null
            ],
            [
                'title' => 'Izin Keramaian',
                'kategori' => 'Surat Pengantar',
                'sub_kategori' => null
            ],
            [
                'title' => 'Pengantar Nikah',
                'kategori' => 'Surat Pengantar',
                'sub_kategori' => null
            ],
            // ADMINISTRASI KEPENDUDUKAN
            [
                'title' => 'Kartu Keluarga',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ],
            [
                'title' => 'KTP-el',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ],
            [
                'title' => 'SKPWNI Pindah Datang',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ],
            [
                'title' => 'SKPWNI Pindah Keluar',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ],
            [
                'title' => 'Akta Kelahiran',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ],
            [
                'title' => 'Akta Kematian',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ],
            [
                'title' => 'KIA',
                'kategori' => 'Administrasi Kependudukan',
                'sub_kategori' => null
            ]
        ];

        foreach ($layanans as $layananData) {
            Layanan::create([
                'title' => $layananData['title'],
                'kategori' => $layananData['kategori'],
                'sub_kategori' => $layananData['sub_kategori'],
                'slug' => Str::slug($layananData['title']) . '-' . now()->timestamp . '-' . rand(100,999),
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1
            ]);
        }
    }
}
