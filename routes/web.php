<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/investor', [HomeController::class, 'investor'])->name('investor');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
