<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\PengaturanWebsite;
use App\Models\ProfilDesa;
use App\Models\KategoriBerita;
use App\Models\KategoriPotensi;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Layanan;
use App\Models\PotensiDesa;
use App\Models\PotensiJagung;

class BlumbangSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@blumbang.desa.id'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        PengaturanWebsite::updateOrCreate(
            ['id' => 1],
            [
                'village_name' => 'Desa Blumbang',
                'website_description' => 'Website resmi Desa Blumbang — Media Digitalisasi Informasi Desa dan Edukasi Produk Olahan Jagung dalam Upaya Pencegahan Stunting.',
                'email' => 'info@blumbang.desa.id',
                'phone' => '081234567890',
                'address' => 'Jl. Balai Desa No.1, Desa Blumbang, Kec. Klego, Kab. Boyolali, Jawa Tengah 57385',
                'operating_hours' => '<p><strong>Senin – Kamis:</strong> 08.00 – 15.00 WIB<br><strong>Jumat:</strong> 08.00 – 11.00 WIB<br><strong>Sabtu – Minggu:</strong> Libur Pelayanan</p>',
                'facebook' => 'https://facebook.com/desablumbang',
                'instagram' => 'https://instagram.com/desablumbang',
                'maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15822.45719941162!2d110.74811915!3d-7.3971932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a0b5b15b3c3b1%3A0x5027a76e3568c00!2sBlumbang%2C%20Klego%2C%20Boyolali%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
            ]
        );

        ProfilDesa::updateOrCreate(
            ['id' => 1],
            [
                'history' => '<p>Desa Blumbang memiliki sejarah yang kaya dan telah berdiri sejak puluhan tahun yang lalu, berawal dari pemukiman kecil petani jagung yang berkembang menjadi komunitas yang kuat. Nama "Blumbang" sendiri berasal dari kata "kolam" atau sumber air, merepresentasikan sumber kehidupan masyarakat.</p>',
                'vision' => '<p>Menjadikan Desa Blumbang yang Maju, Sejahtera, Mandiri, dan Berbudaya melalui pengembangan potensi lokal, khususnya sektor pertanian jagung.</p>',
                'mission' => '<ul><li>Meningkatkan kualitas sumber daya manusia melalui pendidikan dan penyuluhan kesehatan.</li><li>Mengembangkan potensi ekonomi desa melalui inovasi produk olahan jagung.</li><li>Meningkatkan kualitas pelayanan publik berbasis digital.</li><li>Mewujudkan lingkungan yang asri dan bersih.</li></ul>',
                'geography' => '<p>Desa Blumbang terletak di dataran menengah Kabupaten Boyolali dengan suhu udara sejuk yang sangat mendukung untuk sektor pertanian, khususnya tanaman jagung, sayur-mayur, dan palawija.</p>',
                'general_information' => '<p>Penduduk Desa Blumbang mayoritas bermata pencaharian sebagai petani dan peternak. Desa ini juga sedang giat dalam mengedukasi warga terkait inovasi olahan jagung untuk meningkatkan gizi keluarga dan mencegah stunting.</p>',
                'stat_penduduk' => 2450,
                'stat_kk' => 780,
                'stat_rt' => 24,
                'stat_rw' => 6,
                'stat_luas_wilayah' => 250.5,
                'created_by' => $admin->id,
                'updated_by' => $admin->id
            ]
        );

        $katBeritaPemerintahan = KategoriBerita::firstOrCreate(['slug' => 'pemerintahan'], ['name' => 'Pemerintahan']);
        $katBeritaPembangunan = KategoriBerita::firstOrCreate(['slug' => 'pembangunan'], ['name' => 'Pembangunan']);
        $katBeritaKesehatan = KategoriBerita::firstOrCreate(['slug' => 'kesehatan'], ['name' => 'Kesehatan Masyarakat']);

        $katPotensiPertanian = KategoriPotensi::firstOrCreate(['slug' => 'pertanian'], ['name' => 'Pertanian']);
        $katPotensiUMKM = KategoriPotensi::firstOrCreate(['slug' => 'umkm'], ['name' => 'UMKM']);

        $beritas = [
            [
                'category_id' => $katBeritaKesehatan->id,
                'title' => 'Penyuluhan Gizi: Cegah Stunting dengan Produk Olahan Jagung',
                'summary' => 'Pemerintah Desa Blumbang mengadakan penyuluhan gizi bagi ibu balita untuk mencegah stunting menggunakan potensi jagung lokal.',
                'content' => '<p>Dalam upaya menurunkan angka stunting, Pemerintah Desa Blumbang bekerja sama dengan Puskesmas Klego mengadakan penyuluhan gizi. Fokus utama kali ini adalah pemanfaatan jagung, yang merupakan komoditas utama desa, menjadi olahan makanan sehat seperti puding jagung dan susu jagung yang disukai anak-anak.</p>',
                'status' => 'published'
            ],
            [
                'category_id' => $katBeritaPembangunan->id,
                'title' => 'Gotong Royong Perbaikan Jalan Usaha Tani RT 03',
                'summary' => 'Warga RT 03 Desa Blumbang kompak melakukan perbaikan jalan usaha tani untuk melancarkan distribusi hasil panen.',
                'content' => '<p>Sebagai bentuk kemandirian desa, warga RT 03 akhir pekan lalu melaksanakan gotong royong perbaikan jalan usaha tani. Perbaikan ini diharapkan dapat mempermudah akses kendaraan pengangkut hasil panen, terutama saat musim panen jagung tiba.</p>',
                'status' => 'published'
            ],
            [
                'category_id' => $katBeritaPemerintahan->id,
                'title' => 'Penyaluran BLT Dana Desa Tahap IV Tahun 2026',
                'summary' => 'Pemerintah Desa Blumbang telah menyalurkan Bantuan Langsung Tunai (BLT) Dana Desa tahap keempat dengan lancar.',
                'content' => '<p>Penyaluran BLT Dana Desa Tahap IV telah sukses dilaksanakan di Balai Desa Blumbang. Kegiatan ini dihadiri oleh Kepala Desa dan jajaran perangkat desa, memastikan bantuan tepat sasaran kepada warga yang membutuhkan.</p>',
                'status' => 'published'
            ]
        ];

        foreach ($beritas as $b) {
            Berita::firstOrCreate(
                ['slug' => Str::slug($b['title'])],
                array_merge($b, [
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                    'published_at' => now()->subDays(rand(1, 10))
                ])
            );
        }

        Pengumuman::firstOrCreate(
            ['slug' => 'jadwal-posyandu-balita-agustus'],
            [
                'title' => 'Jadwal Posyandu Balita Bulan Agustus 2026',
                'content' => '<p>Diberitahukan kepada seluruh ibu yang memiliki balita, kegiatan Posyandu akan dilaksanakan pada hari Rabu, 12 Agustus 2026 di Balai Desa. Akan ada pembagian Makanan Tambahan (PMT) berupa olahan jagung bergizi.</p>',
                'status' => 'published',
                'is_popup' => 1,
                'expired_at' => now()->addDays(7),
                'created_by' => $admin->id,
                'updated_by' => $admin->id,
                'published_at' => now()
            ]
        );

        Pengumuman::firstOrCreate(
            ['slug' => 'kerja-bakti-bersih-desa'],
            [
                'title' => 'Kerja Bakti Rutin Bersih Desa',
                'content' => '<p>Mari bersama-sama menjaga kebersihan lingkungan. Kerja bakti rutin akan diadakan serentak di setiap RT pada hari Minggu besok mulai pukul 07.00 WIB.</p>',
                'status' => 'published',
                'is_popup' => 0,
                'expired_at' => now()->addDays(3),
                'created_by' => $admin->id,
                'updated_by' => $admin->id,
                'published_at' => now()
            ]
        );

        $layanans = [
            [
                'title' => 'Surat Keterangan Domisili',
                'requirements' => '<ul><li>Fotokopi KTP</li><li>Fotokopi KK</li><li>Surat Pengantar dari RT/RW</li></ul>',
                'service_flow' => '<ol><li>Datang ke Balai Desa membawa persyaratan.</li><li>Menyerahkan berkas ke petugas.</li><li>Menunggu proses cetak dan tanda tangan Kepala Desa (sekitar 15 menit).</li></ol>',
                'service_hours' => 'Senin-Jumat, 08.00-14.30 WIB',
                'description' => '<p>Layanan pembuatan Surat Keterangan Domisili bagi warga pendatang atau warga yang membutuhkan bukti alamat domisili saat ini.</p>',
                'is_active' => 1,
            ],
            [
                'title' => 'Surat Keterangan Tidak Mampu (SKTM)',
                'requirements' => '<ul><li>Fotokopi KTP dan KK</li><li>Surat Pengantar RT/RW</li><li>Foto Rumah (Tampak Depan, Samping, Dalam)</li></ul>',
                'service_flow' => '<ol><li>Pengajuan berkas di loket pelayanan.</li><li>Verifikasi data oleh perangkat desa.</li><li>Penerbitan surat.</li></ol>',
                'service_hours' => 'Senin-Jumat, 08.00-14.30 WIB',
                'description' => '<p>SKTM biasanya digunakan untuk keperluan pendaftaran sekolah, bantuan kesehatan, atau bantuan sosial lainnya.</p>',
                'is_active' => 1,
            ],
            [
                'title' => 'Surat Pengantar Pembuatan SKCK',
                'requirements' => '<ul><li>Fotokopi KTP</li><li>Fotokopi KK</li><li>Fotokopi Akta Kelahiran</li><li>Pengantar RT/RW</li></ul>',
                'service_flow' => '<ol><li>Serahkan persyaratan.</li><li>Petugas akan membuatkan surat pengantar untuk dibawa ke Polsek setempat.</li></ol>',
                'service_hours' => 'Senin-Jumat, 08.00-14.30 WIB',
                'description' => '<p>Surat pengantar desa wajib dimiliki sebelum mengurus SKCK di Polsek/Polres.</p>',
                'is_active' => 1,
            ]
        ];

        foreach ($layanans as $l) {
            Layanan::firstOrCreate(
                ['slug' => Str::slug($l['title'])],
                array_merge($l, [
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ])
            );
        }

        PotensiDesa::firstOrCreate(
            ['slug' => 'kerajinan-anyaman-bambu'],
            [
                'kategori_id' => $katPotensiUMKM->id,
                'title' => 'Kerajinan Anyaman Bambu',
                'summary' => 'Produk kerajinan rumah tangga berupa caping, tampah, dan keranjang yang dibuat oleh ibu-ibu PKK.',
                'description' => '<p>Selain bertani, masyarakat Blumbang memiliki keahlian turun-temurun dalam membuat anyaman bambu. Produk ini sering dijual ke pasar tradisional di Boyolali dan menjadi sumber penghasilan tambahan.</p>',
                'status' => 'published',
                'created_by' => $admin->id,
                'updated_by' => $admin->id,
            ]
        );

        PotensiDesa::firstOrCreate(
            ['slug' => 'peternakan-sapi-perah'],
            [
                'kategori_id' => $katPotensiPertanian->id,
                'title' => 'Peternakan Sapi Perah',
                'summary' => 'Beberapa kelompok tani di Blumbang mulai mengembangkan peternakan sapi perah.',
                'description' => '<p>Susu sapi murni dari Desa Blumbang dikirim setiap pagi ke KUD terdekat. Kotoran sapi juga dimanfaatkan sebagai pupuk organik untuk ladang jagung.</p>',
                'status' => 'published',
                'created_by' => $admin->id,
                'updated_by' => $admin->id,
            ]
        );

        $jagungs = [
            [
                'title' => 'Susu Jagung Manis (Sujami)',
                'category' => 'Minuman Sehat',
                'summary' => 'Minuman bergizi tinggi dari ekstrak jagung manis, sangat baik untuk pertumbuhan balita.',
                'content' => '<p>Susu jagung adalah inovasi minuman sehat dari Desa Blumbang. Minuman ini diproduksi tanpa pengawet buatan dan kaya akan serat, karbohidrat, serta vitamin B yang sangat efektif sebagai Pemberian Makanan Tambahan (PMT) untuk mencegah stunting pada anak balita.</p>',
                'status' => 'published'
            ],
            [
                'title' => 'Puding Jagung Lumer',
                'category' => 'Cemilan',
                'summary' => 'Puding lembut berbahan dasar jagung murni yang disukai anak-anak.',
                'content' => '<p>Puding jagung menjadi alternatif cemilan sehat bagi anak-anak yang sulit makan sayur. Rasanya yang manis alami dan teksturnya yang lembut menjadikannya menu favorit di Posyandu Desa Blumbang.</p>',
                'status' => 'published'
            ],
            [
                'title' => 'Nasi Jagung Instan (Tiwul Jagung)',
                'category' => 'Makanan Pokok',
                'summary' => 'Pengganti nasi putih yang rendah gula dan tinggi serat, cocok untuk penderita diabetes.',
                'content' => '<p>Beras jagung instan yang diproduksi oleh Kelompok Tani Desa Blumbang. Cara penyajiannya sangat mudah, cukup diseduh air panas dan dikukus sebentar. Sangat baik untuk diet dan kesehatan pencernaan.</p>',
                'status' => 'published'
            ]
        ];

        foreach ($jagungs as $j) {
            PotensiJagung::firstOrCreate(
                ['slug' => Str::slug($j['title'])],
                array_merge($j, [
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ])
            );
        }
    }
}