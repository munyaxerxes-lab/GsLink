<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('orders', 'orders')->name('orders');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('stations', 'stations')->name('stations');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('notifications', 'notifications')->name('notifications');
});


require __DIR__.'/settings.php';
