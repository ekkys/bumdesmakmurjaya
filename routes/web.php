<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;



// Website
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/tentang-detail', [WebsiteController::class, 'tentangDetail'])->name('tentang.detail');
Route::get('/legalitas-detail', [WebsiteController::class, 'legalitasDetail'])->name('legalitas.detail');
Route::get('/klien-detail', [WebsiteController::class, 'klienDetail'])->name('klien.detail');
Route::get('/biaya-detail', [WebsiteController::class, 'biayaDetail'])->name('biaya.detail');
Route::get('/unit-detail', [WebsiteController::class, 'unitDetail'])->name('unit.detail'); //nanti link pas klik gambar
Route::get('/tps3r-detail', [WebsiteController::class, 'tps3rDetail'])->name('tps3r.detail');
Route::get('/toko-detail', [WebsiteController::class, 'tokoDetail'])->name('toko.detail');
Route::get('/pinjaman-detail', [WebsiteController::class, 'pinjamanDetail'])->name('pinjaman.detail');
Route::get('/pengangkutan-detail', [WebsiteController::class, 'pengangkutanDetail'])->name('pengangkutan.detail');
Route::get('/pembelian-detail', [WebsiteController::class, 'pembelianDetail'])->name('pembelian.detail');
Route::get('/pemusnahan-detail', [WebsiteController::class, 'pemusnahanDetail'])->name('pemusnahan.detail');


//Admin
Route::resource('home', HomeController::class);
Route::resource('tentang', TentangController::class);
Route::get('tentang/{id}/edit', [TentangController::class, 'edit'])->name('tentang.edit');
Route::put('tentang/{id}', [TentangController::class, 'update'])->name('tentang.update');
Route::get('tentang/{id}', [TentangController::class, 'destroy'])->name('tentang.destroy');
Route::resource('legalitas', LegalitasController::class);
Route::resource('klien', KlienController::class);
Route::resource('unit', UnitController::class);
Route::resource('layanan', LayananController::class);
Route::resource('kontak', KontakController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';