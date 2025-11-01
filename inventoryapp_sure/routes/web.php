<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoriesController;


Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/register', [FormController::class, 'form']);

Route::post('/welcome', [FormController::class, 'bergabung']);

//CRUD
// C => Create Data
Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'store']);

// R => Read Data
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);

// U => Update Data
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/category/{id}/edit', [CategoriesController::class, 'update']);


