<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
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
Route::get('/unit-detail', [WebsiteController::class, 'unitDetail'])->name('unit.detail');

Route::get('/tps3r-detail', [WebsiteController::class, 'tps3rDetail'])->name('tps3r.detail');
Route::get('/toko-detail', [WebsiteController::class, 'tokoDetail'])->name('toko.detail');
Route::get('/pinjaman-detail', [WebsiteController::class, 'pinjamanDetail'])->name('pinjaman.detail');
Route::get('/pengangkutan-detail', [WebsiteController::class, 'pengangkutanDetail'])->name('pengangkutan.detail');
Route::get('/pembelian-detail', [WebsiteController::class, 'pembelianDetail'])->name('pembelian.detail');
Route::get('/pemusnahan-detail', [WebsiteController::class, 'pemusnahanDetail'])->name('pemusnahan.detail');


//Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::resource('home', HomeController::class);
Route::resource('tentang', TentangController::class);
Route::resource('legalitas', LegalitasController::class);
Route::resource('klien', KlienController::class);
Route::resource('unit', UnitController::class);
Route::resource('layanan', LayananController::class);
Route::resource('biaya', BiayaController::class);
Route::resource('kontak', KontakController::class);
Route::resource('galeri', GaleriController::class);
