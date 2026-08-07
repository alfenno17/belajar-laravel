<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('about', function () {
    return view('about', [
        'nis' => '25967',
        'nama' => 'Alfenno Septian Ramadhan',
        'kelas' => 'IX RPLB',
    ]);
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
