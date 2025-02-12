<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('booking', 'booking')->name('booking');
    Route::post('booking', 'bookingStore')->name('bookingStore');
    Route::get('service/category/{service:label}', 'serviceList')->name('serviceList');
    Route::get('service/{service:slug}','serviceDetail')->name('serviceDetail');
    
   
});
Route::controller(CustomerAuthController::class)->group(function () {
    Route::get('customerRegister', 'registerPage')->name('customerRegister');
    Route::get('customerLogin', 'loginPage')->name('customerLogin');
    Route::post('customerRegister', 'customerRegister')->name('customerRegister');
    Route::post('customerLogin', 'customerLogin')->name('customerLogin');
    
});
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::post('upload', [UploadController::class, 'store'])->name('upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});
require __DIR__ . '/auth.php';
