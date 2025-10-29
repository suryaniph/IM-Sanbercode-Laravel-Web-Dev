<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/daftar', [DaftarController::class, 'daftar']);

Route::post('/home', [DaftarController::class, 'home']);