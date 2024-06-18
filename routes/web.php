<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;



// Website
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/tentang-detail', [WebsiteController::class, 'tentangDetail'])->name('tentang.detail');
Route::get('/legalitas-detail', [WebsiteController::class, 'legalitasDetail'])->name('legalitas.detail');
Route::get('/biaya-detail', [WebsiteController::class, 'biayaDetail'])->name('biaya.detail');
Route::get('/unit-detail', [WebsiteController::class, 'unitDetail'])->name('unit.detail'); //nanti link pas klik gambar
Route::get('/tps3r-detail', [WebsiteController::class, 'tps3rDetail'])->name('tps3r.detail');
Route::get('/toko-detail', [WebsiteController::class, 'tokoDetail'])->name('toko.detail');
Route::get('/pinjaman-detail', [WebsiteController::class, 'pinjamanDetail'])->name('pinjaman.detail');
//Admin
Route::resource('home', HomeController::class);
Route::resource('tentang', TentangController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';