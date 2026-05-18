<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenerbitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::resource('kategori', KategoriController::class);
route::resource('penerbit', PenerbitController::class);
route::resource('buku', BukuController::class);