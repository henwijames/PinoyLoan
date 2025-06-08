<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

// Guest routes
Route::middleware('guest')->group(function () {
  Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
  });

  Route::controller(RegisterUserController::class)->group(function () {
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store');
  });
});

// Auth routes
Route::middleware('auth')->group(function () {
  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');

  Route::get('/loans', function () {
    return view('loans');
  })->name('loans');

  Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
});
