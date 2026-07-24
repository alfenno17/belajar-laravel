<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi! Selamat Datang di Website Laravel';
});

//Route::get('/about', [PageController::class, 'about']);

Route::get('/world', [WelcomeController::class, 'hello']);

Route::get('siswa', function () {});
Route::post('siswa', function () {});
Route::put('siswa', function () {});
Route::delete('siswa', function () {});
Route::get('siswa/{id}', function ($id) {});
Route::put('siswa/{id}', function ($id) {});
Route::delete('siswa/{id}', function ($id) {});


Route::get('/articles/{id}', function ($id) {
    return "Ini adalah halaman Artikel dengan ID: " . $id;
});