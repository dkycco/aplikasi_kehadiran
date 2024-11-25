<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['role:admin', 'auth:web'])->group(function() {
    Route::get('/', function() {
        return 'Hello Admin';
    });
});

Route::middleware(['role:dosen', 'auth:web'])->group(function() {
    Route::get('/', function() {
        return 'Hello Dosen';
    });
});

Route::middleware(['role:mahasiswa', 'auth:mahasiswa'])->group(function() {
    Route::get('/', function() {
        return 'Hello Mahasiswa';
    });
});
