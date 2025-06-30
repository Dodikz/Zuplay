<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('Pages.admins.Dashboard.index');
    })->name('dashboard');

    // Cafetariahhh
    Route::get('/makanan', function () {
        return view('Pages.admins.Cafetaria.food.index');
    })->name('makanan');
    Route::get('/minuman', function () {
        return view('Pages.admins.Cafetaria.drink.index');
    })->name('minuman');

    Route::get('/jadwal-booking', function () {
        return view('Pages.admins.Bookings.booking-management.index');
    })->name('jadwal-booking');
    Route::get('/kelola-booking', function () {
        return view('Pages.admins.Bookings.booking-options.index');
    })->name('kelola-booking');
    Route::get('/opsi-booking', function () {
        return view('Pages.admins.Bookings.booking-scedule.index');
    })->name('opsi-booking');
    Route::get('/timer-booking', function () {
        return view('Pages.admins.Bookings.booking-timers.index');
    })->name('timer-booking');


    Route::get('/pc-room', function () {
        return view('Pages.admins.Facilities.Pc-room.index');
    })->name('pc');
    Route::get('/ps-room', function () {
        return view('Pages.admins.Facilities.Ps-room.index');
    })->name('ps');
    Route::get('/futsal', function () {
        return view('Pages.admins.Facilities.Futsal.index');
    })->name('futsal');
    Route::get('/badminton', function () {
        return view('Pages.admins.Facilities.Badminton.index');
    })->name('badminton');
    Route::get('/voli', function () {
        return view('Pages.admins.Voli..index');
    })->name('voli');
    Route::get('/basket', function () {
        return view('Pages.admins.Facilities.Basket.index');
    })->name('basket');


    Route::get('/laporan-penyewaan', function () {
        return view('Pages.admins.Report.Bookings.index');
    })->name('laporan-penyewaan');
    Route::get('/laporan-fnb', function () {
        return view('Pages.admins.Report.Cafetaria.index');
    })->name('laporan-fnb');
});
