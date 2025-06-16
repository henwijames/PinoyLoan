<?php

use App\Http\Controllers\BorrowersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use App\Models\Borrowers;
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
    $borrowers = Borrowers::limit(5)->get();
    return view('dashboard', compact('borrowers'));
  })->name('dashboard');

  Route::resource('borrowers', BorrowersController::class);

  Route::controller(PaymentController::class)->group(function () {
    Route::get('/borrowers/{borrower}/payments/create', 'create')->name('payments.create');
    Route::post('/borrowers/{borrower}/payments', 'store')->name('payments.store');
    Route::get('/borrowers/{borrower}/payments/', 'show')->name('payments.show');
  });

  Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
});
