<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactController::class, 'home'])->name('home');
Route::get('/about', [ContactController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'storeContact'])->name('storeContact');
