<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/car/search', [CarController::class, 'search'])->name('car.index');
Route::resource('car', CarController::class);

Route::get('/sign-up', [SignUpController::class, 'create'])->name('signup');
Route::get('/sign-in', [SignInController::class, 'create'])->name('signin');
