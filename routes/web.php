<?php

use Illuminate\Support\Facades\Route;


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
