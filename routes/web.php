<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi! Selamat Datang di Website Laravel';
});

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

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/app', function () {
    return view('child');
});

Route::get('/home', function () {
    return view('home');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('app');
