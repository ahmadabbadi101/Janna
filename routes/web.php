<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TableController;

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

Route::get('/admin/employees', [EmployeeController::class, "index"]);
Route::get('/admin/employees/create', [EmployeeController::class, "create"]);
Route::post('/admin/employees', [EmployeeController::class, "store"]);
Route::get('/admin/employees/{employee}/edit', [EmployeeController::class, "edit"]);
Route::put('/admin/employees/{employee}', [EmployeeController::class, "update"]);
Route::delete('/admin/employees/{employee}', [EmployeeController::class, "destroy"]);

Route::get('/admin/tables', [TableController::class, "index"]);
Route::get('/admin/tables/create', [TableController::class, "create"]);
Route::post('/admin/tables', [TableController::class, "store"]);
Route::get('/admin/tables/{table}/edit', [TableController::class, "edit"]);
Route::put('/admin/tables/{table}', [TableController::class, "update"]);
Route::delete('/admin/tables/{table}', [TableController::class, "destroy"]);