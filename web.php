<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

Route::get('/', function () {
    return 'Halo, Selamat Datang di Laravel Nurul!';
});

Route::get('/halo', [HalamanController::class, 'SelamatDatang']);