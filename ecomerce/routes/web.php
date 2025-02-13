<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ userController::class, 'welcome']) ->name('welcome');
Route::get('/about',[userController::class, 'about']) ->name('about');
Route::get('/contact',[userController::class, 'contact']) ->name('contact');
Route::get('/service',[userController::class, 'service']) ->name('service');
Route::get('/product',[userController::class, 'product']) ->name('product');
Route::get('/pricing',[userController::class, 'pricing']) ->name('pricing');
Route::get('/signin',[userController::class, 'signin']) ->name('signin');