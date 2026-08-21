<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Pengumuman;

$p = Pengumuman::where('slug', 'jalan-sehat-bersama-warga-desa-blumbang-dalam-rangka-hut-kemerdekaan-republik-indonesia')->first();
if ($p) {
    $p->attachment = 'pengumuman/jalan-sehat.jpeg';
    $p->save();
    echo "Pengumuman updated successfully.\n";
} else {
    echo "Pengumuman not found.\n";
}
