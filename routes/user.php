<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/home', function () {
        return view('');
    })->name('home');
    Route::get('/fasilitas', function () {
        return view('');
    })->name('home');
    Route::get('/', function () {
        return view('');
    })->name('home');
    Route::get('/home', function () {
        return view('');
    })->name('home');
    Route::get('/home', function () {
        return view('');
    })->name('home');
});
