<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [SessionController::class, "create"]);
Route::post('/login', [SessionController::class, "store"]);
Route::delete('/logout', [SessionController::class, "destroy"]);

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/cart', function () {
    return view('cart');
});