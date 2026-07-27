<?php

use App\Http\Controllers\EmployeeAddressController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\TokenMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('employee', EmployeeController::class)
    ->middleware(TokenMiddleware::class.':general-token');

Route::get('userland', fn () => 'access granted')
    ->middleware(TokenMiddleware::class.':simple-token');

Route::resource('employee.address', EmployeeAddressController::class)
    ->middleware(TokenMiddleware::class.':general-token');

require __DIR__.'/auth.php';
