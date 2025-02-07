<?php

use App\Http\Controllers\Customer\CustomerAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('customer.dashboard');
})->name('dashboard');
Route::post('/customerLogout', [CustomerAuthController::class, 'logout'])->name('customerLogout');
