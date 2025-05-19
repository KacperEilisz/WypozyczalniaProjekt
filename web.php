<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//Strona glowna czyli logowanie, rejestracja itp
Route::get('/', function () {
    return view('homepage');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);