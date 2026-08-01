<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PengaturanWebsiteController;
use App\Http\Controllers\Admin\ProfilDesaController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\PengumumanController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\PotensiDesaController;
use App\Http\Controllers\Admin\PotensiJagungController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Publik\BerandaController::class, 'index'])->name('beranda');

// Public Pages
use App\Http\Controllers\Publik\BeritaPublikController;
use App\Http\Controllers\Publik\PengumumanPublikController;
Route::prefix('desa')->name('publik.')->group(function () {
    Route::get('/profil', fn() => view('publik.profil'))->name('profil');
    Route::get('/berita', [BeritaPublikController::class, 'index'])->name('berita.index');
    Route::get('/berita/{slug}', [BeritaPublikController::class, 'show'])->name('berita.show');
    Route::get('/pengumuman', [PengumumanPublikController::class, 'index'])->name('pengumuman.index');
    Route::get('/pengumuman/{slug}', [PengumumanPublikController::class, 'show'])->name('pengumuman.show');
    Route::get('/layanan', [App\Http\Controllers\Publik\LayananPublikController::class, 'index'])->name('layanan.index');
    Route::get('/potensi-desa', [App\Http\Controllers\Publik\PotensiDesaPublikController::class, 'index'])->name('potensi-desa.index');
    Route::get('/potensi-desa/{slug}', [App\Http\Controllers\Publik\PotensiDesaPublikController::class, 'show'])->name('potensi-desa.show');
    Route::get('/potensi-jagung', [App\Http\Controllers\Publik\PotensiJagungPublikController::class, 'index'])->name('potensi-jagung.index');
    Route::get('/potensi-jagung/{slug}', [App\Http\Controllers\Publik\PotensiJagungPublikController::class, 'show'])->name('potensi-jagung.show');
    Route::get('/kontak', fn() => view('publik.kontak'))->name('kontak');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('pengaturan', PengaturanWebsiteController::class)->only(['index', 'store']);
    Route::resource('profil', ProfilDesaController::class)->only(['index', 'store']);
    Route::resource('berita', BeritaController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('potensi-desa', PotensiDesaController::class);
    Route::resource('potensi-jagung', PotensiJagungController::class);
});

require __DIR__.'/auth.php';
