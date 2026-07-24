<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use iluminate\Support\Facades\controller;
use app\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\View; 
Route::get('/', function ($id) {
    echo 'selamat datang di website laravel';
});
Route::get('about', function () {
    echo 'nim: 25967 <br>
    nama: Alfenno Septian Ramadhan <br>
    kelas: IX RPLB<br>' ;
});
route::get('artikel/{id}', function ($id) {
    echo 'halaman artikel dengan id ' . $id;
});
Route::get('/', [WelcomeController::class, 'web']);
Route::get('siswa', function ($id) {}); 
Route::put('siswa', function ($id) {}); 
Route::delete('siswa', function ($id) {}); 
Route::get('siswa/{id}', function ($id) {}); 
Route::put('siswa/{id}', function ($id) {}); 
Route::delete('siswa/{id}', function ($id) {});
Route::get('/name', function () {return view('hello', ['name' => 'Andi']); }); 
Route::get('/dashboard', function () {return view('layout.master');});
