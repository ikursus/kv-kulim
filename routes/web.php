<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Route::get(alamat, function);
Route::get('/', HomeController::class);

// Route::get(alamat, function);
// Route untuk paparkan borang registration
Route::get('/register', [RegistrationController::class, 'paparBorang']);
// Route untuk terima data pendaftaran
Route::post('/register-data', [RegistrationController::class, 'terimaData']);

// Routing untuk paparkan borang login
Route::get('/login', [LoginController::class, 'create']);
// Route untuk terima data login
Route::post('/login-data', [LoginController::class, 'store']);
