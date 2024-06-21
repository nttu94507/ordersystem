<?php

use App\Http\Middleware\userAuth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([auth::class])->group(function () {
    Route::get('/items', [App\Http\Controllers\ItemsController::class, 'index'])->name('item');
    Route::post('/items/store', [App\Http\Controllers\ItemsController::class, 'store'])->name('item');
    
});


// Route::post('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');

