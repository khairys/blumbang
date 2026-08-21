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

        // --- KATEGORI POTENSI ---
        $katPotensiData = [
          0 => 
        [
            'id' => 1,
            'name' => 'Pertanian',
            'slug' => 'pertanian',
          ],
          1 => 
        [
            'id' => 2,
            'name' => 'UMKM',
            'slug' => 'umkm',
          ],
          2 => 
        [
            'id' => 3,
            'name' => 'Wisata',
            'slug' => 'wisata',
          ],
          3 => 
        [
            'id' => 4,
            'name' => 'Kuliner',
            'slug' => 'kuliner',
          ],
        ];
        foreach ($katPotensiData as $k) {
            KategoriPotensi::firstOrCreate(['slug' => $k['slug']], ['name' => $k['name']]);
        }

        // --- PENGUMUMAN ---
        $pengumumanData = [
          0 => 
        [
            'title' => 'Jadwal Posyandu Balita Bulan Agustus 2026',
            'content' => '<p>Jadwal Posyandu Balita Bulan Agustus 2026</p>',
            'status' => 'draft',
            'is_popup' => 0,
            'expired_at' => NULL,
            'published_at' => NULL,
          ],
          1 => 
        [
            'title' => 'Kerja Bakti Rutin Bersih Desa',
            'content' => '<p>Kerja Bakti Rutin Bersih Desa</p>',
            'status' => 'draft',
            'is_popup' => 0,
            'expired_at' => NULL,
            'published_at' => NULL,
          ],
          2 => 
        [
            'title' => 'Jalan Sehat Bersama Warga Desa Blumbang dalam Rangka HUT Kemerdekaan Republik Indonesia',
            'content' => '<p>Dalam rangka memperingati Hari Ulang Tahun (HUT] Kemerdekaan Republik Indonesia, Pemerintah Desa Blumbang bersama masyarakat akan menyelenggarakan kegiatan Jalan Sehat Bersama Warga Desa Blumbang.</p>
        
        <p>Kegiatan ini menjadi salah satu rangkaian perayaan HUT Kemerdekaan Republik Indonesia yang dilaksanakan secara serentak dengan melibatkan masyarakat dari seluruh wilayah Desa Blumbang. Selain sebagai bentuk perayaan kemerdekaan, kegiatan ini diharapkan dapat menjadi sarana untuk mempererat kebersamaan, meningkatkan semangat gotong royong, serta mendorong pola hidup sehat di lingkungan masyarakat.</p>
        
        <p><strong>Informasi Kegiatan</strong></p>
        <ul>
            <li><strong>Hari/Tanggal:</strong> Minggu, 9 Agustus 2026</li>
            <li><strong>Waktu:</strong> Pagi hari</li>
            <li><strong>Tempat:</strong> Wilayah Desa Blumbang</li>
            <li><strong>Peserta:</strong> Seluruh masyarakat Desa Blumbang</li>
        </ul>
        
        <p><strong>Rangkaian Kegiatan</strong></p>
        <p>Kegiatan jalan sehat akan dilaksanakan dengan rute yang melintasi wilayah Desa Blumbang dan diikuti oleh masyarakat dari berbagai dusun, RT, dan RW.</p>
        <p>Selain jalan sehat, kegiatan juga dapat dirangkaikan dengan berbagai kegiatan kebersamaan dan hiburan masyarakat sebagai bagian dari peringatan HUT Kemerdekaan Republik Indonesia.</p>
        

        <p><strong>Ajakan kepada Masyarakat</strong></p>
        <p>Pemerintah Desa Blumbang mengajak seluruh masyarakat untuk turut berpartisipasi dan memeriahkan kegiatan jalan sehat ini dengan tetap menjaga ketertiban dan kebersihan selama kegiatan berlangsung.</p>
        <p>Kegiatan ini diharapkan dapat menjadi momentum untuk mempererat tali silaturahmi antarwarga serta menumbuhkan semangat kebersamaan dalam memperingati Hari Kemerdekaan Republik Indonesia.</p>
        <p>Mari rayakan HUT Kemerdekaan Republik Indonesia dengan semangat kebersamaan, kesehatan, dan gotong royong bersama seluruh warga Desa Blumbang.</p>
        
        <p><em>Pemerintah Desa Blumbang</em><br>
        <em>Kecamatan Klego, Kabupaten Boyolali</em></p>',
            'status' => 'published',
            'is_popup' => 0,
            'attachment' => 'pengumuman/jalan-sehat.jpeg',
            'expired_at' => NULL,
            'published_at' => '2026-08-09 07:00:00',
          ],
        ];
        foreach ($pengumumanData as $p) {
            Pengumuman::firstOrCreate(
                ['slug' => Str::slug($p['title'])],
                array_merge($p, [
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ])
            );
        }

        // --- POTENSI DESA ---
        $potensiDesaData = [
          0 => 
        [
            'kategori_id' => NULL,
            'title' => 'Pertanian',
            'summary' => 'Desa Blumbang memiliki potensi pertanian berupa padi, jagung, kedelai, ubi kayu, dan berbagai tanaman pangan lainnya.',
            'description' => NULL,
            'status' => 'draft',
            'thumbnail' => NULL,
          ],
          1 => 
        [
            'kategori_id' => NULL,
            'title' => 'Peternakan',
            'summary' => 'Kegiatan peternakan masyarakat meliputi sapi potong, kambing, dan berbagai usaha peternakan lainnya.',
            'description' => NULL,
            'status' => 'draft',
            'thumbnail' => NULL,
          ],
          2 => 
        [
            'kategori_id' => NULL,
            'title' => 'Kerajinan',
            'summary' => 'Kerajinan anyaman bambu menjadi salah satu kegiatan masyarakat yang menghasilkan berbagai produk rumah tangga.',
            'description' => NULL,
            'status' => 'draft',
            'thumbnail' => NULL,
          ],
          3 => 
        [
            'kategori_id' => NULL,
            'title' => 'Usaha Masyarakat',
            'summary' => 'Berbagai usaha masyarakat berkembang di Desa Blumbang, antara lain mebel, keripik pangsit, pengepul pisang, pembuatan batako, percetakan, dan kerajinan bambu.',
            'description' => NULL,
            'status' => 'draft',
            'thumbnail' => NULL,
          ],
          4 => 
        [
            'kategori_id' => 3,
            'title' => 'Ekowisata Bukit Wonopotro',
            'summary' => 'Bukit Wonopotro merupakan salah satu potensi wisata alam yang berada di Dukuh Glagahombo, Desa Blumbang, Kecamatan Klego, Kabupaten Boyolali.',
            'description' => '<p><strong>Potensi Wisata Alam Desa Blumbang</strong></p>
        
        <p>Bukit Wonopotro merupakan salah satu potensi wisata alam yang berada di Dukuh Glagahombo, Desa Blumbang, Kecamatan Klego, Kabupaten Boyolali. Kawasan ini memanfaatkan karakter wilayah perbukitan yang memiliki suasana alami serta pemandangan yang menjadi daya tarik tersendiri bagi masyarakat dan pengunjung.</p>
        
        <p>Potensi Bukit Wonopotro mulai dikembangkan sebagai objek wisata sejak sekitar tahun 2019 dan kemudian diresmikan sebagai kawasan ekowisata pada 30 November 2021. Dalam perkembangannya, kawasan ini tidak hanya diarahkan sebagai tempat rekreasi, tetapi juga mengusung unsur edukasi dan konservasi.</p>
        
        <p>Pada masa pengembangannya, Bukit Wonopotro dilengkapi dengan berbagai fasilitas dan daya tarik, antara lain gardu pandang, area bermain, rumah pohon, tanaman obat, serta kawasan penangkaran atau konservasi satwa. Kawasan ini juga pernah dikembangkan dengan konsep wisata edukasi yang memadukan potensi alam, lingkungan, dan kegiatan masyarakat.</p>
        
        <p><strong>Perjalanan Pengembangan</strong></p>
        <p>Pengembangan Bukit Wonopotro melibatkan berbagai unsur, mulai dari Pemerintah Desa Blumbang, BUMDes, karang taruna, kelompok masyarakat, hingga pihak swasta. Salah satu bentuk kerja sama yang pernah dilakukan adalah pengembangan konservasi Rusa Timor bersama Pertamina Fuel Terminal Boyolali dan kelompok masyarakat Desa Blumbang.</p>
        
        <p>Dalam pengembangannya, kawasan Wonopotro juga pernah mendapatkan berbagai kegiatan peningkatan fasilitas. Pada 2022, misalnya, dilakukan kegiatan gotong royong yang mencakup pembuatan spot foto, pagar pengaman, papan penunjuk arah, papan informasi kawasan wisata, video profil, serta pengelolaan media sosial.</p>
        
        <p>Keberadaan berbagai fasilitas tersebut menunjukkan bahwa Bukit Wonopotro pernah memiliki aktivitas pengembangan dan menjadi salah satu bagian dari upaya Desa Blumbang dalam mengembangkan potensi wisata berbasis masyarakat.</p>
        
        <p><strong>Potensi yang Pernah Dikembangkan</strong></p>
        <p>Bukit Wonopotro memiliki sejumlah potensi yang dapat menjadi dasar pengembangan wisata desa, antara lain:</p>
        
        <ul>
        <li><strong>Wisata Alam</strong><br>
        Kawasan perbukitan dengan suasana alami yang dapat dimanfaatkan sebagai tempat rekreasi dan menikmati pemandangan.</li>
        
        <li><strong>Wisata Edukasi</strong><br>
        Potensi pengembangan edukasi mengenai lingkungan, tanaman, satwa, dan konservasi.</li>
        
        <li><strong>Konservasi Satwa</strong><br>
        Kawasan Wonopotro pernah dikembangkan sebagai lokasi konservasi Rusa Timor serta menjadi bagian dari pengembangan wisata konservasi.</li>
        
        <li><strong>Area Rekreasi Keluarga</strong><br>
        Pada masa pengembangannya, kawasan ini memiliki fasilitas seperti playground dan area permainan yang ditujukan untuk pengunjung keluarga.</li>
        
        <li><strong>Potensi Ekonomi Masyarakat</strong><br>
        Pengembangan wisata dapat membuka peluang bagi masyarakat sekitar melalui kegiatan kuliner, penjualan produk lokal, jasa wisata, maupun kegiatan ekonomi pendukung lainnya.</li>
        </ul>
        
        <p><strong>Tantangan Pengelolaan</strong></p>
        <p>Dalam perjalanannya, pengembangan Bukit Wonopotro juga menghadapi tantangan dalam hal pengelolaan dan keberlanjutan. Penelitian mengenai pengembangan kawasan ini pada 2022 mencatat bahwa setelah dibuka untuk masyarakat masih terdapat berbagai aspek yang perlu diperbaiki, khususnya terkait fasilitas dan pengelolaan.</p>
        
        <p>Kondisi tersebut menunjukkan bahwa pembangunan fasilitas wisata perlu diikuti dengan pengelolaan yang berkelanjutan. Perawatan fasilitas, pengelolaan kawasan, promosi, keterlibatan masyarakat, serta pembagian peran antar-pihak menjadi faktor penting agar potensi wisata dapat terus memberikan manfaat bagi desa.</p>
        
        <p><strong>Peluang Pengembangan Kembali</strong></p>
        <p>Meskipun pengelolaannya menghadapi berbagai tantangan, Bukit Wonopotro masih memiliki peluang untuk dikembangkan kembali sebagai salah satu potensi wisata Desa Blumbang.</p>
        
        <p>Status Ekowisata Bukit Wonopotro sebagai desa wisata rintisan tercatat dalam data Dinas Kepemudaan, Olahraga, dan Pariwisata Provinsi Jawa Tengah berdasarkan SK Bupati Boyolali Nomor 556/186 Tahun 2023.</p>
        
        <p>Dengan potensi alam, sejarah pengembangan, pengalaman pengelolaan sebelumnya, serta keterlibatan masyarakat yang telah ada, pengembangan kembali Wonopotro dapat diarahkan secara bertahap sesuai dengan kondisi dan kemampuan desa.</p>
        
        <p>Beberapa aspek yang dapat menjadi perhatian dalam pengembangan ke depan meliputi:</p>
        <ul>
        <li>Penataan dan perawatan fasilitas yang telah tersedia.</li>
        <li>Pengembangan kembali daya tarik wisata berbasis alam dan edukasi.</li>
        <li>Penguatan kegiatan konservasi dan lingkungan.</li>
        <li>Pelibatan masyarakat dan kelompok pemuda desa.</li>
        <li>Pengembangan produk kuliner dan UMKM lokal sebagai pendukung wisata.</li>
        <li>Promosi melalui media digital dan media sosial.</li>
        <li>Penyusunan konsep pengelolaan wisata yang berkelanjutan.</li>
        <li>Pengembangan kawasan secara bertahap sesuai dengan potensi dan kebutuhan masyarakat.</li>
        </ul>
        
        <p><strong>Wonopotro sebagai Potensi Masa Depan Desa</strong></p>
        <p>Bukit Wonopotro merupakan salah satu contoh potensi Desa Blumbang yang telah melalui proses pengembangan dan pernah dimanfaatkan sebagai kawasan wisata dan edukasi. Pengalaman tersebut dapat menjadi modal bagi desa untuk mengevaluasi pengelolaan sebelumnya dan menentukan arah pengembangan yang lebih sesuai pada masa mendatang.</p>
        
        <p>Dengan pengelolaan yang terarah, keterlibatan masyarakat, pemeliharaan fasilitas, serta pemanfaatan teknologi digital untuk promosi dan informasi, Bukit Wonopotro memiliki peluang untuk kembali dikembangkan sebagai salah satu destinasi wisata berbasis alam dan masyarakat di Desa Blumbang.</p>
        
        <p>Bukit Wonopotro bukan hanya tentang tempat wisata, tetapi juga tentang potensi alam dan ruang yang dapat dikembangkan bersama untuk memberikan manfaat bagi masyarakat Desa Blumbang.</p>',
            'status' => 'published',
            'thumbnail' => 'berita/berita-wonopotro.jpg',
          ],
          5 => 
        [
            'kategori_id' => 4,
            'title' => 'Kampung Sate Tongseng Glagahombo',
            'summary' => 'Dukuh Glagahombo, Desa Blumbang, memiliki sebuah identitas kuliner yang telah berkembang bersama perjalanan masyarakatnya, yaitu usaha sate dan tongseng.',
            'description' => '<p><strong>Potensi Kuliner, Ekonomi, dan Identitas Masyarakat Desa Blumbang</strong></p>
        
        <p>Dukuh Glagahombo, Desa Blumbang, memiliki sebuah identitas kuliner yang telah berkembang bersama perjalanan masyarakatnya, yaitu usaha sate dan tongseng. Kuliner tersebut bukan hanya menjadi bagian dari kegiatan ekonomi sebagian masyarakat, tetapi juga menjadi salah satu ciri khas yang melekat pada masyarakat Glagahombo.</p>
        
        <p>Perjalanan tersebut memiliki sejarah yang cukup panjang. Pada awalnya, sebagian besar masyarakat Glagahombo menggantungkan kehidupan dari sektor pertanian. Namun, keterbatasan hasil pertanian mendorong sebagian masyarakat mencari alternatif mata pencaharian di luar desa. Salah satu usaha yang kemudian berkembang adalah berjualan sate dan tongseng. Penelitian mengenai masyarakat Glagahombo mencatat bahwa perkembangan usaha tersebut berkaitan erat dengan perpindahan sebagian masyarakat ke wilayah perkotaan, terutama Jakarta dan kawasan Jabodetabek.</p>
        
        <p><strong>Dari Desa Pertanian Menjadi Sentra Perantau Kuliner</strong></p>
        <p>Perkembangan usaha sate dan tongseng menjadi salah satu contoh bagaimana masyarakat Desa Blumbang beradaptasi terhadap kondisi ekonomi. Salah satu tokoh yang dikenal dalam perjalanan tersebut adalah Jumiran, yang merintis usaha sate dan tongseng di Jakarta sekitar tahun 1960-an.</p>
        
        <p>Setelah usahanya berkembang, keterlibatan masyarakat Glagahombo lainnya semakin meningkat. Sebagian warga kemudian mengikuti jejak tersebut dengan bekerja sebagai pedagang sate dan tongseng di berbagai wilayah perkotaan, khususnya Jabodetabek. Jaringan tersebut berkembang dari hubungan keluarga dan masyarakat desa sehingga membentuk komunitas perantau yang tetap memiliki hubungan dengan kampung halaman.</p>
        
        <p>Perpindahan masyarakat untuk mencari penghidupan di luar daerah pada akhirnya tidak hanya memberikan perubahan pada kehidupan ekonomi keluarga, tetapi juga membentuk identitas baru bagi Glagahombo. Sate dan tongseng kemudian dikenal sebagai salah satu usaha yang banyak dijalankan oleh masyarakat asal wilayah tersebut.</p>
        
        <p><strong>Monumen Sate Tongseng</strong></p>
        <p>Perjalanan tersebut kemudian diabadikan melalui Monumen Sate Tongseng yang berada di Dukuh Glagahombo.</p>
        
        <p>Monumen tersebut diresmikan pada 11 September 2010 dan pembangunannya dilakukan melalui swadaya masyarakat. Keberadaannya menjadi simbol kebanggaan masyarakat Glagahombo sekaligus pengingat terhadap perjalanan warga yang berhasil mengembangkan usaha sate dan tongseng hingga ke berbagai wilayah.</p>
        
        <p>Monumen ini memiliki bentuk yang khas. Di bagian atasnya terdapat tokoh pewayangan Semar dan Gareng bersama perlengkapan yang menggambarkan aktivitas pedagang sate. Perpaduan antara simbol budaya Jawa dan aktivitas ekonomi masyarakat menjadikan monumen tersebut tidak hanya sebagai penanda wilayah, tetapi juga sebagai representasi identitas masyarakat Glagahombo.</p>
        
        <p>Bagi masyarakat setempat, keberadaan monumen tersebut menggambarkan sebuah perjalanan: dari masyarakat yang sebelumnya banyak bergantung pada pertanian, kemudian berkembang melalui usaha kuliner hingga mampu membangun kehidupan ekonomi di berbagai daerah.</p>
        
        <p><strong>Potensi Ekonomi yang Berkembang di Perantauan</strong></p>
        <p>Salah satu keunikan potensi sate dan tongseng Glagahombo adalah bahwa perkembangannya tidak hanya terjadi di dalam desa.</p>
        
        <p>Sebagian masyarakat memilih merantau ke wilayah yang memiliki pasar lebih besar. Jakarta dan kawasan Jabodetabek menjadi salah satu tujuan utama para pedagang sate dan tongseng asal Glagahombo. Melalui usaha tersebut, masyarakat memperoleh sumber penghasilan sekaligus membangun jaringan sosial antarsesama perantau.</p>
        
        <p>Fenomena tersebut memberikan gambaran bahwa potensi ekonomi Desa Blumbang tidak selalu berada di dalam batas wilayah desa. Sebagian potensi masyarakat justru berkembang melalui jaringan warga yang berada di luar daerah.</p>
        
        <p>Jaringan perantau tersebut juga tetap memiliki hubungan dengan kampung halaman. Keberadaan Ikatan Kerukunan Keluarga Glagahombo (IKKG] menjadi salah satu contoh bagaimana masyarakat Glagahombo di perantauan menjaga hubungan sosial dan berkontribusi terhadap daerah asalnya. Pada 2026, IKKG bahkan tercatat melakukan kerja sama dengan Bank Jateng Cabang Jakarta.</p>
        
        <p><strong>Potensi yang Dapat Dikembangkan di Desa</strong></p>
        <p>Kondisi tersebut sebenarnya memberikan peluang bagi Desa Blumbang untuk mengembangkan sate dan tongseng bukan hanya sebagai mata pencaharian masyarakat, tetapi sebagai potensi ekonomi dan identitas desa.</p>
        
        <p>Beberapa potensi yang dapat dikembangkan antara lain:</p>
        
        <ul>
        <li><strong>Wisata Kuliner</strong><br>
        Mengembangkan Glagahombo sebagai salah satu tujuan kuliner sate dan tongseng dengan mengangkat sejarah masyarakat sebagai bagian dari pengalaman pengunjung.</li>
        
        <li><strong>Identitas dan Branding Desa</strong><br>
        Menjadikan sate dan tongseng sebagai salah satu identitas khas Desa Blumbang yang dapat diperkenalkan melalui berbagai media.</li>
        
        <li><strong>Pemberdayaan Masyarakat</strong><br>
        Mendorong masyarakat yang memiliki keterampilan memasak dan usaha kuliner untuk mengembangkan produk secara lebih terorganisasi.</li>
        
        <li><strong>Jaringan Perantau</strong><br>
        Menghubungkan pelaku usaha sate dan tongseng yang berada di Jabodetabek dan daerah lainnya dengan masyarakat di Desa Blumbang.</li>
        
        <li><strong>Pengembangan Produk Lokal</strong><br>
        Tidak hanya menjual sate dan tongseng sebagai makanan siap santap, tetapi juga dapat dikembangkan menjadi produk bumbu, makanan olahan, atau produk kuliner lain yang memiliki identitas Glagahombo.</li>
        
        <li><strong>Promosi Digital</strong><br>
        Memanfaatkan website desa dan media sosial untuk memperkenalkan sejarah, lokasi, kuliner, serta pelaku usaha sate dan tongseng asal Glagahombo.</li>
        </ul>
        
        <p><strong>Griyo Sate: Membawa Kuliner Perantauan Kembali ke Kampung Halaman</strong></p>
        <p>Salah satu upaya untuk mempertahankan identitas kuliner tersebut adalah keberadaan Griyo Sate IKKG di Glagahombo.</p>
        
        <p>Griyo Sate dikembangkan sebagai tempat yang dapat memperkenalkan kembali kuliner sate dan tongseng kepada masyarakat di kampung halaman. Keberadaannya juga memiliki makna penting karena sebagian besar pelaku usaha sate dan tongseng justru menjalankan usahanya di luar daerah. Dengan adanya tempat usaha di Glagahombo, masyarakat dan pengunjung memiliki kesempatan untuk menikmati kuliner tersebut langsung di daerah asalnya.</p>
        
        <p>Saat ini Griyo Sate IKKG juga tercatat sebagai tempat usaha kuliner di Glagahombo dan menjadi salah satu lokasi yang dapat dikaitkan dengan identitas sate dan tongseng di wilayah tersebut.</p>
        
        <p><strong>Menghubungkan Perantauan dengan Kampung Halaman</strong></p>
        <p>Salah satu kekuatan terbesar potensi sate dan tongseng Glagahombo bukan hanya pada produknya, tetapi pada jaringan masyarakatnya.</p>
        
        <p>Masyarakat yang merantau membawa keterampilan, pengalaman, dan jaringan usaha ke berbagai kota. Sementara itu, kampung halaman tetap menjadi bagian dari identitas mereka.</p>
        
        <p>Hubungan tersebut dapat menjadi modal sosial bagi Desa Blumbang untuk mengembangkan potensi ekonomi ke depan. Para perantau dapat menjadi bagian dari jaringan promosi, pemasaran, investasi, maupun pengembangan usaha masyarakat di desa.</p>
        
        <p>Dengan demikian, aktivitas merantau tidak harus dipandang semata-mata sebagai hilangnya tenaga produktif dari desa. Jaringan perantau juga dapat menjadi aset sosial dan ekonomi apabila hubungan dengan kampung halaman dapat dipelihara dan dikembangkan.</p>
        
        <p><strong>Peluang Pengembangan ke Depan</strong></p>
        <p>Potensi sate dan tongseng Glagahombo memiliki dasar yang cukup kuat: sejarah yang panjang, identitas masyarakat, jaringan perantau, monumen sebagai simbol, serta pengalaman masyarakat dalam menjalankan usaha kuliner.</p>
        
        <p>Ke depan, potensi tersebut dapat dikembangkan secara bertahap melalui penguatan identitas kuliner, pengembangan wisata kuliner, pembinaan pelaku UMKM, promosi digital, serta peningkatan hubungan antara masyarakat di desa dengan komunitas perantau.</p>
        
        <p>Pengembangan tersebut tidak harus membuat seluruh masyarakat kembali dari perantauan. Sebaliknya, masyarakat yang berada di desa dan masyarakat yang merantau dapat menjadi bagian dari ekosistem ekonomi yang sama.</p>
        
        <p>Desa dapat menjadi pusat identitas dan pengembangan, sementara jaringan perantau menjadi salah satu penghubung untuk memperluas pasar dan memperkenalkan nama Glagahombo ke berbagai daerah.</p>
        
        <p><strong>Sate dan Tongseng sebagai Identitas Desa</strong></p>
        <p>Monumen Sate Tongseng menjadi pengingat bahwa sebuah potensi desa dapat tumbuh dari pengalaman dan perjuangan masyarakatnya.</p>
        
        <p>Dari lahan pertanian, masyarakat mencari peluang baru. Dari sebuah usaha yang dirintis oleh seorang warga, berkembang jaringan pedagang sate dan tongseng di berbagai daerah. Dari perjalanan para perantau tersebut, lahirlah sebuah identitas yang kemudian diabadikan melalui monumen di kampung halaman.</p>
        
        <p>Kini, tantangannya bukan hanya mempertahankan cerita tersebut, tetapi bagaimana menjadikannya sebagai potensi yang dapat terus berkembang bagi generasi berikutnya.</p>
        
        <p>Sate dan tongseng bukan sekadar kuliner bagi masyarakat Glagahombo. Ia merupakan bagian dari perjalanan ekonomi, budaya, dan identitas masyarakat Desa Blumbang.</p>',
            'status' => 'published',
            'thumbnail' => 'berita/berita-ikkg.png',
          ],
        ];
        foreach ($potensiDesaData as $pd) {
            PotensiDesa::firstOrCreate(
                ['slug' => Str::slug($pd['title'])],
                array_merge($pd, [
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ])
            );
        }

        // --- POTENSI JAGUNG ---
        $potensiJagungData = [
          0 => 
        [
            'title' => 'Bubur Jagung',
            'category' => 'Produk Unggulan',
            'summary' => 'Bubur berbahan dasar jagung dengan tekstur lembut yang dikembangkan sebagai salah satu kreasi pangan lokal Desa Blumbang.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Bubur jagung merupakan salah satu inovasi pengolahan jagung yang dikembangkan dalam kegiatan multidisiplin KKN Desa Blumbang. Produk ini menggunakan jagung manis sebagai bahan utama dan dikembangkan sebagai salah satu bentuk pemanfaatan hasil panen lokal menjadi produk pangan olahan.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>3 bonggol jagung manis</li>
        <li>400 ml air</li>
        <li>4 sendok makan gula pasir</li>
        <li>2 sachet santan bubuk</li>
        <li>1 sendok makan vanilla essence</li>
        <li>2 ruas daun pandan</li>
        <li>1 sendok makan tepung maizena</li>
        <li>Keju parut secukupnya</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Siapkan jagung</strong> — Pipil seluruh jagung manis, kemudian blender hingga halus.</li>
        <li><strong>Masak adonan</strong> — Masukkan jagung yang telah dihaluskan ke dalam panci. Tambahkan air, gula pasir, santan, vanilla essence, dan daun pandan.</li>
        <li><strong>Masak hingga mengental</strong> — Masak hingga adonan mendidih dan mulai mengental. Larutkan tepung maizena kemudian masukkan ke dalam adonan. Aduk hingga tercampur merata.</li>
        <li><strong>Dinginkan</strong> — Setelah bubur matang dan mencapai kekentalan yang diinginkan, dinginkan hingga hangat.</li>
        <li><strong>Sajikan</strong> — Tuangkan bubur ke dalam wadah dan tambahkan keju parut sebagai topping.</li>
        </ol>
        <p><em>Catatan: Untuk produksi komersial, takaran dan prosedur sebaiknya diuji kembali untuk memastikan konsistensi hasil, keamanan pangan, dan daya simpan.</em></p>',
            'status' => 'published',
            'thumbnail' => 'potensi/bubur_jagung.jpg',
          ],
          1 => 
        [
            'title' => 'Es Jagung dan Ubi Ungu',
            'category' => 'Minuman',
            'summary' => 'Kreasi minuman berbahan jagung dan ubi ungu yang memanfaatkan bahan pangan lokal.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Es Jagung dan Ubi Ungu adalah kreasi minuman/dessert segar yang memadukan rasa manis jagung dengan warna ungu cantik dari ubi ungu. Sajian ini cocok untuk cuaca panas dan menggugah selera.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Jagung manis, dipipil</li>
        <li>Ubi ungu, dikukus dan dipotong dadu</li>
        <li>Nata de coco</li>
        <li>Sagu mutiara, direbus</li>
        <li>Santan</li>
        <li>Gula pasir</li>
        <li>Es batu</li>
        <li>Susu kental manis (opsional]</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Siapkan bahan</strong> — Kukus ubi ungu hingga matang, dinginkan dan potong dadu. Rebus sagu mutiara hingga transparan, tiriskan.</li>
        <li><strong>Buat kuah</strong> — Rebus santan dengan gula dan sedikit garam hingga mendidih dan sedikit mengental. Dinginkan.</li>
        <li><strong>Susun isian</strong> — Masukkan jagung manis, ubi ungu, nata de coco, dan sagu mutiara ke dalam gelas.</li>
        <li><strong>Tambahkan es dan kuah</strong> — Tuangkan kuah santan dan tambahkan es batu secukupnya.</li>
        <li><strong>Sajikan</strong> — Sajikan segera selagi dingin.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/es_jagung_ubi.webp',
          ],
          2 => 
        [
            'title' => 'Klappertaart Jagung',
            'category' => 'Kue & Dessert',
            'summary' => 'Olahan dessert klappertaart dengan tambahan jagung manis, susu, telur, maizena, kismis, dan keju. Tekstur lembut dengan rasa yang kaya.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Klappertaart Jagung merupakan adaptasi dari kue khas Manado dengan tambahan jagung manis sebagai bahan lokal. Teksturnya yang lembut dan rasa yang creamy menjadikannya pilihan dessert yang menarik.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Jagung manis, dipipil</li>
        <li>Susu cair</li>
        <li>Telur</li>
        <li>Tepung maizena</li>
        <li>Gula pasir</li>
        <li>Mentega</li>
        <li>Kismis</li>
        <li>Keju parut</li>
        <li>Kayu manis bubuk (opsional]</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Masak campuran dasar</strong> — Masak susu, jagung, gula, dan mentega dalam panci hingga mendidih.</li>
        <li><strong>Tambahkan maizena</strong> — Larutkan maizena dengan sedikit susu dingin, tuang ke dalam adonan panas sambil terus diaduk hingga mengental.</li>
        <li><strong>Masukkan telur</strong> — Kecilkan api, masukkan telur satu per satu sambil diaduk cepat.</li>
        <li><strong>Tuang ke loyang</strong> — Tuang adonan ke dalam loyang, taburi kismis dan keju parut di atasnya.</li>
        <li><strong>Panggang</strong> — Panggang dalam oven hingga matang dan berwarna keemasan.</li>
        <li><strong>Sajikan</strong> — Dinginkan sebelum disajikan.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/klepart_jagung.jpg',
          ],
          3 => 
        [
            'title' => 'Es Cendol Jagung',
            'category' => 'Minuman',
            'summary' => 'Cendol berbahan jagung yang disajikan bersama sirup gula merah dan santan. Segar dan cocok dinikmati di siang hari.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Es Cendol Jagung adalah kreasi minuman tradisional yang menggunakan jagung sebagai bahan dasar cendolnya, memberikan warna alami yang menarik dan rasa yang khas.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Jagung manis, blender halus</li>
        <li>Tepung sagu</li>
        <li>Tepung beras</li>
        <li>Santan</li>
        <li>Gula merah, disisir</li>
        <li>Garam</li>
        <li>Es batu</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Buat adonan cendol</strong> — Campur jagung yang sudah diblender dengan tepung sagu dan tepung beras. Masak sambil diaduk hingga mengental.</li>
        <li><strong>Cetak cendol</strong> — Gunakan cetakan cendol atau saringan berlubang, tekan adonan ke dalam air dingin hingga berbentuk cendol.</li>
        <li><strong>Buat kuah santan</strong> — Rebus santan dengan garam hingga mendidih, dinginkan.</li>
        <li><strong>Buat sirup gula merah</strong> — Rebus gula merah dengan sedikit air hingga larut dan mengental.</li>
        <li><strong>Sajikan</strong> — Susun cendol dalam gelas, tuang santan dan sirup gula merah, tambahkan es batu.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/escendol_jagung.jpg',
          ],
          4 => 
        [
            'title' => 'Corn Ribs',
            'category' => 'Camilan',
            'summary' => 'Kreasi olahan jagung yang dikembangkan sebagai salah satu alternatif pangan berbahan dasar jagung.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Corn Ribs atau "tulang rusuk jagung" adalah cara unik menyajikan jagung yang populer di media sosial. Jagung dipotong memanjang seperti tulang rusuk, memberikan tekstur dan tampilan yang menarik.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Jagung manis, potong memanjang (4–6 bagian per tongkol]</li>
        <li>Mentega/butter</li>
        <li>Bawang putih, cincang</li>
        <li>Garam dan merica</li>
        <li>Paprika bubuk</li>
        <li>Saus favorit (mayo, saus tomat, atau sambal]</li>
        <li>Keju parut (opsional]</li>
        <li>Daun parsley/seledri</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Potong jagung</strong> — Belah jagung menjadi 4–6 bagian memanjang dengan hati-hati mengikuti jalur biji jagung.</li>
        <li><strong>Bumbui</strong> — Lumuri jagung dengan campuran mentega, bawang putih, garam, merica, dan paprika bubuk.</li>
        <li><strong>Panggang/goreng</strong> — Panggang di atas pan/grill hingga matang dan sedikit karamel, atau goreng sebentar dengan minyak panas.</li>
        <li><strong>Tambahkan topping</strong> — Tambahkan saus pilihan, keju parut, dan taburan daun seledri.</li>
        <li><strong>Sajikan</strong> — Sajikan segera selagi hangat.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/corn_ribs.jpg',
          ],
          5 => 
        [
            'title' => 'Nagasari Jagung Manis',
            'category' => 'Jajanan Tradisional',
            'summary' => 'Olahan nagasari tradisional dengan tambahan jagung manis dan pisang yang dibungkus menggunakan daun pisang. Harum dan lezat.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Nagasari Jagung Manis adalah kreasi kue tradisional Jawa yang dipadukan dengan jagung lokal. Aroma daun pisang dan rasa manis jagung menjadikannya kudapan yang khas dan otentik.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Tepung beras</li>
        <li>Jagung manis, dipipil</li>
        <li>Pisang raja/kepok, potong</li>
        <li>Santan kental</li>
        <li>Gula pasir</li>
        <li>Garam</li>
        <li>Daun pisang untuk membungkus</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Buat adonan</strong> — Campurkan tepung beras, jagung yang sudah diblender, santan, gula, dan garam. Aduk rata.</li>
        <li><strong>Masak adonan</strong> — Masak adonan di atas api sedang sambil diaduk hingga setengah matang dan mengental.</li>
        <li><strong>Bungkus</strong> — Ambil selembar daun pisang, letakkan 2 sdm adonan, tambahkan potongan pisang di tengah, tutup dengan adonan lagi.</li>
        <li><strong>Lipat</strong> — Lipat daun pisang membentuk persegi, semat dengan lidi atau tusuk gigi.</li>
        <li><strong>Kukus</strong> — Kukus selama 20–25 menit hingga matang. Sajikan hangat atau dingin.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/nagasari_jagung.jpg',
          ],
          6 => 
        [
            'title' => 'Klepon JASUKE',
            'category' => 'Jajanan Tradisional',
            'summary' => 'Kreasi klepon berbahan jagung dengan isian susu, keju, dan jagung (JASUKE] serta balutan kelapa parut. Paduan tradisional dan modern.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Klepon JASUKE (Jagung Susu Keju] adalah kreasi inovatif yang menggabungkan kue tradisional klepon dengan isian modern berupa jagung, susu kental manis, dan keju yang creamy.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Tepung ketan</li>
        <li>Jagung manis, dihaluskan (sebagian untuk adonan, sebagian untuk isian]</li>
        <li>Pewarna hijau/pandan (opsional]</li>
        <li>Keju parut</li>
        <li>Susu kental manis</li>
        <li>Kelapa parut, dikukus</li>
        <li>Garam</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Buat isian</strong> — Campur jagung manis pipil, keju parut, dan susu kental manis. Sisihkan.</li>
        <li><strong>Buat adonan</strong> — Campurkan tepung ketan, jagung halus, garam, dan air secukupnya. Uleni hingga dapat dibentuk.</li>
        <li><strong>Bentuk klepon</strong> — Ambil sedikit adonan, pipihkan, beri isian JASUKE di tengah, bulatkan kembali.</li>
        <li><strong>Rebus</strong> — Rebus dalam air mendidih hingga klepon mengapung, angkat, tiriskan.</li>
        <li><strong>Balut</strong> — Balut klepon dengan kelapa parut yang sudah dikukus. Sajikan.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/klepon_jasuke.jpg',
          ],
          7 => 
        [
            'title' => 'Pukis Jagung Manis',
            'category' => 'Kue & Dessert',
            'summary' => 'Kue pukis dengan tambahan jagung manis sebagai salah satu bahan utama, menghasilkan rasa yang lebih manis alami dan tekstur yang lembut.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Pukis Jagung Manis adalah variasi kue pukis tradisional yang diperkaya dengan jagung manis lokal. Rasa manis alami jagung memberikan cita rasa unik yang berbeda dari pukis biasa.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Jagung manis, diblender halus</li>
        <li>Tepung terigu</li>
        <li>Telur</li>
        <li>Gula pasir</li>
        <li>Santan</li>
        <li>Ragi/fermipan</li>
        <li>Margarin cair</li>
        <li>Garam</li>
        <li>Topping: keju, meses, atau jagung manis</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Buat adonan</strong> — Kocok telur dan gula hingga mengembang. Masukkan jagung halus, tepung, santan, ragi, dan margarin. Aduk rata.</li>
        <li><strong>Diamkan</strong> — Tutup adonan dan diamkan selama 30 menit hingga mengembang.</li>
        <li><strong>Panggang</strong> — Panaskan cetakan pukis, olesi dengan margarin. Tuang adonan hingga setengah penuh, biarkan hingga setengah matang.</li>
        <li><strong>Tambahkan topping</strong> — Tambahkan topping pilihan, lanjutkan memanggang hingga matang.</li>
        <li><strong>Sajikan</strong> — Angkat dan sajikan hangat.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/pukis_jagung_manis.jpg',
          ],
          8 => 
        [
            'title' => 'Dadar Gulung Jagung',
            'category' => 'Jajanan Tradisional',
            'summary' => 'Dadar gulung dengan isian kelapa, jagung manis, dan susu kental manis. Paduan cita rasa yang manis dan gurih dalam balutan dadar tipis.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Dadar Gulung Jagung adalah kreasi kue tradisional yang memadukan dadar tipis pandan dengan isian kelapa parut yang dicampur jagung manis dan susu kental manis.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li><strong>Dadar:</strong> Tepung terigu, telur, santan, air pandan, garam</li>
        <li><strong>Isian:</strong> Kelapa parut, jagung manis pipil, gula merah sisir, garam, air</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Buat isian</strong> — Masak kelapa parut, jagung, gula merah, dan garam dengan sedikit air hingga kering dan matang. Dinginkan.</li>
        <li><strong>Buat adonan dadar</strong> — Campurkan tepung, telur, santan, air pandan, dan garam. Aduk rata hingga tidak bergerindil.</li>
        <li><strong>Buat dadar</strong> — Panaskan wajan dadar anti lengket, tuang satu sendok sayur adonan, putar hingga tipis dan merata. Masak hingga matang.</li>
        <li><strong>Gulung</strong> — Letakkan isian di tengah dadar, lipat sisi kiri kanan, gulung dengan rapat.</li>
        <li><strong>Sajikan</strong> — Sajikan dalam keadaan hangat atau suhu ruang.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/dadar_gulung_jagung.jpg',
          ],
          9 => 
        [
            'title' => 'Korean Corn Cheese',
            'category' => 'Camilan',
            'summary' => 'Olahan jagung ala Korea dengan margarin, gula, susu kental manis, dan keju mozzarella. Manis, gurih, dan cocok sebagai camilan kekinian.',
            'content' => '<h2>Tentang Produk</h2>
        <p>Korean Corn Cheese adalah camilan populer ala Korea yang diadaptasi menggunakan jagung manis lokal Desa Blumbang. Perpaduan rasa manis jagung dengan keju mozzarella yang meleleh menjadikannya camilan yang digemari berbagai kalangan.</p>
        <h2>Bahan-bahan</h2>
        <ul>
        <li>Jagung manis, dipipil (atau jagung kaleng tiriskan]</li>
        <li>Margarin/butter</li>
        <li>Gula pasir</li>
        <li>Susu kental manis</li>
        <li>Keju mozzarella, parut/sobek</li>
        <li>Mayones</li>
        <li>Garam sedikit</li>
        </ul>
        <h2>Cara Pembuatan</h2>
        <ol>
        <li><strong>Tumis jagung</strong> — Lelehkan margarin dalam wajan, masukkan jagung. Tambahkan gula dan garam, aduk rata. Masak hingga jagung sedikit karamel.</li>
        <li><strong>Tambahkan susu</strong> — Tuang susu kental manis, aduk hingga tercampur. Koreksi rasa.</li>
        <li><strong>Pindah ke wadah</strong> — Tuang jagung ke dalam wadah tahan panas (mangkuk atau loyang kecil].</li>
        <li><strong>Tambahkan keju</strong> — Tutup permukaan jagung dengan keju mozzarella yang sudah diparut/disobek.</li>
        <li><strong>Lelehkan keju</strong> — Panaskan sebentar di atas api kecil atau dalam microwave/oven hingga keju meleleh.</li>
        <li><strong>Sajikan</strong> — Tambahkan mayones di atasnya, sajikan segera selagi keju masih meleleh.</li>
        </ol>',
            'status' => 'published',
            'thumbnail' => 'potensi/korean_corn_cheese.jpg',
          ],
        ];
        foreach ($potensiJagungData as $pj) {
            PotensiJagung::firstOrCreate(
                ['slug' => Str::slug($pj['title'])],
                array_merge($pj, [
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ])
            );
        }
    }
}
