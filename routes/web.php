<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi! Selamat Datang di Website Laravel';
});

Route::get('/about', function () {
    return 'NIS : 25967<br> Nama : Alfenno Septian<br> Kelas : XI RPLB';
});

Route::get('/world', [WelcomeController::class, 'hello']);

Route::get('siswa', function ($id) {});
Route::post('siswa', function ($id) {});
Route::put('siswa', function ($id) {});
Route::delete('siswa', function ($id) {});
Route::get('siswa/{id}', function ($id) {});
Route::put('siswa/{id}', function ($id) {});
Route::delete('siswa/{id}', function ($id) {});


Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID: " . $id;
});