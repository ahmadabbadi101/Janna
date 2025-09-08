<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DishController;

Route::view('/', 'welcome');
Route::view('/menu', 'menu');
Route::view('/admin', 'admin');
Route::view('/cart', 'cart');

Route::get('/login', [SessionController::class, "create"]);
Route::post('/login', [SessionController::class, "store"]);
Route::delete('/logout', [SessionController::class, "destroy"]);

Route::get('/admin/dishes', [DishController::class, "index"]);
Route::get('/admin/dishes/create', [DishController::class, "create"]);
Route::post('/admin/dishes', [DishController::class, "store"]);
Route::delete('/admin/dishes/{dish}', [DishController::class, "destroy"]);