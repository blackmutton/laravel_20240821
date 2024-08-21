<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DogController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/cars', function () {
//     return view('car.index');
// })->name('cars.index');
// Route::get('/cars_create', function () {
//     return view('car.create');
// })->name('cars.create');
// Route::get('/cars_edit', function () {
//     return view('car.edit');
// })->name('cars.edit');

Route::get('/cars_excel', [CarController::class, 'excel'])->name('cars.excel');
Route::resource('cars', CarController::class);
// Route::get('/', function () {
//     return route('car.index');
// });

// Route::get('/dogs_excel', [DogController::class, 'excel']);
// Route::resource('dogs', DogController::class);
