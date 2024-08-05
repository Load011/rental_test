<?php

use App\Http\Controllers\Frontend\CarController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.dashboard');
// });

Route::get('/', [HomepageController::class, 'index'])->name('frontend.dashboard');
Route::get('/services', [ServiceController::class, 'index'])->name('frontend.services');
Route::get('/cars', [CarController::class, 'index'])->name('frontend.services');
Route::get('/cars/{slug}', [CarController::class, 'show'])->name('car.show');
Route::get('/contact', [ContactController::class,'index'])->name('frontend.contact');
