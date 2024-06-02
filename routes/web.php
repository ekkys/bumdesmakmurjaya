<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hero');
});

Route::resource('admin', AdminController::class);
Route::resource('tentang', TentangController::class);
