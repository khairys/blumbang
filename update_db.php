<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\Layanan;
use App\Models\Pengumuman;
use App\Models\PotensiDesa;
use App\Models\PotensiJagung;
use App\Models\ProfilDesa;
use App\Models\PengaturanWebsite;
use Illuminate\Support\Str;

echo "Starting DB update...\n";
use Illuminate\Support\Facades\DB;

DB::statement('SET FOREIGN_KEY_CHECKS=0;');

// 1. BERITA
Berita::truncate();
KategoriBerita::truncate();

$katKesehatan = KategoriBerita::create(['name' => 'Kesehatan Masyarakat', 'slug' => 'kesehatan-masyarakat']);
$katPembangunan = KategoriBerita::create(['name' => 'Pembangunan', 'slug' => 'pembangunan']);
$katPemerintahan = KategoriBerita::create(['name' => 'Pemerintahan', 'slug' => 'pemerintahan']);

Berita::create([
    'kategori_berita_id' => $katKesehatan->id,
    'title' => 'Penyuluhan Gizi: Cegah Stunting dengan Produk Olahan Jagung',
    'slug' => 'penyuluhan-gizi-cegah-stunting-dengan-produk-olahan-jagung',
    'summary' => 'Pemerintah Desa Blumbang mengadakan penyuluhan gizi bagi ibu balita sebagai bagian dari upaya meningkatkan pemanfaatan pangan lokal.',
    'content' => '<p>Pemerintah Desa Blumbang mengadakan penyuluhan gizi bagi ibu balita sebagai bagian dari upaya meningkatkan pemanfaatan pangan lokal.</p>',
    'created_at' => '2026-08-09 00:00:00'
]);

Berita::create([
    'kategori_berita_id' => $katPembangunan->id,
    'title' => 'Gotong Royong Perbaikan Jalan Usaha Tani RT 03',
    'slug' => 'gotong-royong-perbaikan-jalan-usaha-tani-rt-03',
    'summary' => 'Warga Desa Blumbang melaksanakan gotong royong untuk memperbaiki jalan usaha tani guna mendukung aktivitas dan distribusi hasil pertanian.',
    'content' => '<p>Warga Desa Blumbang melaksanakan gotong royong untuk memperbaiki jalan usaha tani guna mendukung aktivitas dan distribusi hasil pertanian.</p>',
    'created_at' => '2026-08-09 00:00:00'
]);

Berita::create([
    'kategori_berita_id' => $katPemerintahan->id,
    'title' => 'Penyaluran BLT Dana Desa Tahap IV Tahun 2026',
    'slug' => 'penyaluran-blt-dana-desa-tahap-iv-tahun-2026',
    'summary' => 'Pemerintah Desa Blumbang melaksanakan penyaluran Bantuan Langsung Tunai Dana Desa tahap keempat kepada masyarakat penerima manfaat.',
    'content' => '<p>Pemerintah Desa Blumbang melaksanakan penyaluran Bantuan Langsung Tunai Dana Desa tahap keempat kepada masyarakat penerima manfaat.</p>',
    'created_at' => '2026-08-09 00:00:00'
]);

// 2. LAYANAN
Layanan::truncate();

$layanans = [
    'Administrasi Kependudukan' => [
        'Akta Kelahiran', 'Akta Kematian', 'Kartu Keluarga', 'Kartu Identitas Anak (KIA)', 'KTP-el', 'SKPWNI Pindah Datang', 'SKPWNI Pindah Keluar'
    ],
    'Surat Keterangan' => [
        'Domisili Tempat Tinggal', 'Domisili Usaha', 'Surat Keterangan Tidak Mampu (SKTM)', 'Surat Keterangan Umum', 'Surat Keterangan Usaha'
    ],
    'Surat Pengantar' => [
        'Izin Keramaian', 'Pengantar Nikah', 'Pengantar SKCK', 'Pengantar Umum'
    ]
];

foreach ($layanans as $kategori => $items) {
    foreach ($items as $item) {
        Layanan::create([
            'title' => $item,
            'slug' => Str::slug($item),
            'kategori' => $kategori,
            'content' => '<p>Persyaratan dan prosedur untuk ' . $item . '.</p>',
            'is_active' => true
        ]);
    }
}

// 3. PENGUMUMAN
Pengumuman::truncate();
Pengumuman::create([
    'title' => 'Jadwal Posyandu Balita Bulan Agustus 2026',
    'slug' => 'jadwal-posyandu-balita-bulan-agustus-2026',
    'content' => '<p>Jadwal Posyandu Balita Bulan Agustus 2026</p>',
    'created_at' => '2026-08-09 00:00:00',
    'is_popup' => false
]);
Pengumuman::create([
    'title' => 'Kerja Bakti Rutin Bersih Desa',
    'slug' => 'kerja-bakti-rutin-bersih-desa',
    'content' => '<p>Kerja Bakti Rutin Bersih Desa</p>',
    'created_at' => '2026-08-09 00:00:00',
    'is_popup' => false
]);

// 4. POTENSI DESA
PotensiDesa::truncate();
PotensiDesa::create([
    'title' => 'Pertanian',
    'slug' => 'pertanian',
    'summary' => 'Desa Blumbang memiliki potensi pertanian berupa padi, jagung, kedelai, ubi kayu, dan berbagai tanaman pangan lainnya.',
    'content' => '<p>Desa Blumbang memiliki potensi pertanian berupa padi, jagung, kedelai, ubi kayu, dan berbagai tanaman pangan lainnya.</p>'
]);
PotensiDesa::create([
    'title' => 'Peternakan',
    'slug' => 'peternakan',
    'summary' => 'Kegiatan peternakan masyarakat meliputi sapi potong, kambing, dan berbagai usaha peternakan lainnya.',
    'content' => '<p>Kegiatan peternakan masyarakat meliputi sapi potong, kambing, dan berbagai usaha peternakan lainnya.</p>'
]);
PotensiDesa::create([
    'title' => 'Kerajinan',
    'slug' => 'kerajinan',
    'summary' => 'Kerajinan anyaman bambu menjadi salah satu kegiatan masyarakat yang menghasilkan berbagai produk rumah tangga.',
    'content' => '<p>Kerajinan anyaman bambu menjadi salah satu kegiatan masyarakat yang menghasilkan berbagai produk rumah tangga.</p>'
]);
PotensiDesa::create([
    'title' => 'Usaha Masyarakat',
    'slug' => 'usaha-masyarakat',
    'summary' => 'Berbagai usaha masyarakat berkembang di Desa Blumbang, antara lain mebel, keripik pangsit, pengepul pisang, pembuatan batako, percetakan, dan kerajinan bambu.',
    'content' => '<p>Berbagai usaha masyarakat berkembang di Desa Blumbang, antara lain mebel, keripik pangsit, pengepul pisang, pembuatan batako, percetakan, dan kerajinan bambu.</p>'
]);

// 5. POTENSI JAGUNG
// Update descriptions of the 3 featured items
$bj = PotensiJagung::where('title', 'Bubur Jagung')->first();
if ($bj) {
    $bj->summary = 'Bubur berbahan dasar jagung dengan tekstur lembut yang dikembangkan sebagai salah satu kreasi pangan lokal Desa Blumbang.';
    $bj->save();
}

$cr = PotensiJagung::where('title', 'Corn Ribs')->first();
if ($cr) {
    $cr->summary = 'Kreasi olahan jagung yang dikembangkan sebagai salah satu alternatif pangan berbahan dasar jagung.';
    $cr->save();
}

$ej = PotensiJagung::where('title', 'Es Jagung dan Ubi Ungu')->first();
if ($ej) {
    $ej->summary = 'Kreasi minuman berbahan jagung dan ubi ungu yang memanfaatkan bahan pangan lokal.';
    $ej->save();
}

// 6. PROFIL DESA & PENGATURAN
$profil = ProfilDesa::first();
if ($profil) {
    $profil->stat_penduduk = '2566';
    $profil->stat_kk = '924';
    $profil->stat_rt = '16';
    $profil->stat_rw = '4';
    $profil->save();
}

$pengaturan = PengaturanWebsite::first();
if ($pengaturan) {
    $pengaturan->address = 'Dk, Jalan, Jl. Raya Klego-Simo No.Km. 1, Blumbang Kidul, Blumbang, Kec. Klego, Kabupaten Boyolali, Jawa Tengah 57385';
    $pengaturan->website_description = 'Website resmi Pemerintah Desa Blumbang sebagai pusat informasi dan layanan bagi masyarakat.';
    
    // Check if operating_hours is JSON or array
    $hours = [
        'senin_kamis' => '07.30–14.00 WIB',
        'jumat' => '07.30–11.00 WIB',
        'sabtu' => '07.30–12.30 WIB',
        'minggu' => 'Tutup'
    ];
    // Cast appropriately based on model
    $pengaturan->operating_hours = $hours; // Laravel casts it to json automatically if configured
    $pengaturan->save();
}

DB::statement('SET FOREIGN_KEY_CHECKS=1;');
echo "DB update complete!\n";
