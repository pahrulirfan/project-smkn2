<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');






Route::get('/product', [ProductController::class, 'index'])->name('product.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/guru/{nama}', function($nama){
    return "Nama guru $nama";
});


Route::get('/siswa', function(){

    $array_nama = ["Risa","Rudi","Bambang"];

    return view('universitas.mahasiswa')->with('mahasiswa', $array_nama);

});
