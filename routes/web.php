<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::view('/', 'welcome');

Route::get('/login', [SessionController::class, "create"]);
Route::post('/login', [SessionController::class, "store"]);
Route::delete('/logout', [SessionController::class, "destroy"]);

Route::view('/menu', 'menu');
Route::view('/admin', 'admin');
Route::view('/cart', 'cart');