<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\PotensiJagung;
use Illuminate\Support\Str;

// Hapus data lama
PotensiJagung::withTrashed()->forceDelete();

$products = [
    [
        'title' => 'Bubur Jagung',
        'category' => 'Produk Unggulan',
        'summary' => 'Bubur berbahan dasar jagung manis dengan tekstur lembut dan rasa manis alami. Produk unggulan yang dikembangkan dalam program KKN Desa Blumbang.',
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
    ],
    [
        'title' => 'Es Jagung dan Ubi Ungu',
        'category' => 'Minuman',
        'summary' => 'Minuman/dessert segar berbahan jagung manis dan ubi ungu yang dilengkapi dengan nata de coco, sagu mutiara, kuah creamy, dan es.',
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
<li>Susu kental manis (opsional)</li>
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
    ],
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
<li>Kayu manis bubuk (opsional)</li>
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
    ],
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
    ],
    [
        'title' => 'Corn Ribs',
        'category' => 'Camilan',
        'summary' => 'Jagung manis yang dipotong memanjang kemudian diolah dan diberi bumbu serta saus yang menggugah selera. Camilan kreatif berbahan jagung.',
        'content' => '<h2>Tentang Produk</h2>
<p>Corn Ribs atau "tulang rusuk jagung" adalah cara unik menyajikan jagung yang populer di media sosial. Jagung dipotong memanjang seperti tulang rusuk, memberikan tekstur dan tampilan yang menarik.</p>
<h2>Bahan-bahan</h2>
<ul>
<li>Jagung manis, potong memanjang (4–6 bagian per tongkol)</li>
<li>Mentega/butter</li>
<li>Bawang putih, cincang</li>
<li>Garam dan merica</li>
<li>Paprika bubuk</li>
<li>Saus favorit (mayo, saus tomat, atau sambal)</li>
<li>Keju parut (opsional)</li>
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
    ],
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
    ],
    [
        'title' => 'Klepon JASUKE',
        'category' => 'Jajanan Tradisional',
        'summary' => 'Kreasi klepon berbahan jagung dengan isian susu, keju, dan jagung (JASUKE) serta balutan kelapa parut. Paduan tradisional dan modern.',
        'content' => '<h2>Tentang Produk</h2>
<p>Klepon JASUKE (Jagung Susu Keju) adalah kreasi inovatif yang menggabungkan kue tradisional klepon dengan isian modern berupa jagung, susu kental manis, dan keju yang creamy.</p>
<h2>Bahan-bahan</h2>
<ul>
<li>Tepung ketan</li>
<li>Jagung manis, dihaluskan (sebagian untuk adonan, sebagian untuk isian)</li>
<li>Pewarna hijau/pandan (opsional)</li>
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
    ],
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
    ],
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
    ],
    [
        'title' => 'Korean Corn Cheese',
        'category' => 'Camilan',
        'summary' => 'Olahan jagung ala Korea dengan margarin, gula, susu kental manis, dan keju mozzarella. Manis, gurih, dan cocok sebagai camilan kekinian.',
        'content' => '<h2>Tentang Produk</h2>
<p>Korean Corn Cheese adalah camilan populer ala Korea yang diadaptasi menggunakan jagung manis lokal Desa Blumbang. Perpaduan rasa manis jagung dengan keju mozzarella yang meleleh menjadikannya camilan yang digemari berbagai kalangan.</p>
<h2>Bahan-bahan</h2>
<ul>
<li>Jagung manis, dipipil (atau jagung kaleng tiriskan)</li>
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
<li><strong>Pindah ke wadah</strong> — Tuang jagung ke dalam wadah tahan panas (mangkuk atau loyang kecil).</li>
<li><strong>Tambahkan keju</strong> — Tutup permukaan jagung dengan keju mozzarella yang sudah diparut/disobek.</li>
<li><strong>Lelehkan keju</strong> — Panaskan sebentar di atas api kecil atau dalam microwave/oven hingga keju meleleh.</li>
<li><strong>Sajikan</strong> — Tambahkan mayones di atasnya, sajikan segera selagi keju masih meleleh.</li>
</ol>',
        'status' => 'published',
    ],
];

foreach ($products as $p) {
    PotensiJagung::create([
        'title' => $p['title'],
        'category' => $p['category'],
        'summary' => $p['summary'],
        'content' => $p['content'],
        'status' => $p['status'],
        'slug' => Str::slug($p['title']) . '-' . time() . '-' . rand(100, 999),
        'created_by' => 1,
        'updated_by' => 1,
    ]);
    sleep(1); // ensure unique timestamp in slug
}

echo "Seeded " . count($products) . " produk olahan jagung.\n";
