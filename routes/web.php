<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    echo 'Selamat datang di laravel';
});

Route::get('about', function () {
    echo 'nis: 25967 <br>
    nama: Alfenno Septian Ramadhan <br>
    kelas: IX RPLB<br>';
});

Route::get('artikel/{id}', function ($id) {
    echo 'halaman artikel dengan id ' . $id; 
});

Route::get('siswa', function () {}); 
Route::post('siswa', function () {}); 
Route::get('siswa/{id}', function ($id) {}); 
Route::put('siswa/{id}', function ($id) {}); 
Route::delete('siswa/{id}', function ($id) {});

Route::get('/name', function () {
    return view('hello', ['name' => 'Andi']);
});

Route::get('/dashboard', function () {
    return view('layout.master');
});

Route::get('/hello', [WelcomeController::class, 'hello']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
