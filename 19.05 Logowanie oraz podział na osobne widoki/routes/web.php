<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Strona główna
Route::get('/', function () {
    return view('homepage');
})->name('home');

// Widoki formularzy
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

// Obsługa formularzy
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);