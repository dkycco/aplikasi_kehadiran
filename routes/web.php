<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('auth/login');
});

Route::get('/logout' , [LoginController::class, 'logout'])->name('logout');

Route::middleware(['role:admin', 'auth:web'])->group(function() {
    Route::get('/dashboard', function() {
        return 'Hello Admin';
    });
});

Route::middleware(['role:dosen', 'auth:web'])->group(function() {
    Route::get('/dashboard', function() {
        return 'Hello Dosen';
    });
});

Route::middleware(['role:mahasiswa', 'auth:mahasiswa'])->group(function() {
    Route::get('/dashboard', function() {
        return 'Hello Mahasiswa';
    });
});

FacadesAuth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
