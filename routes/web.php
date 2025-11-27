<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index'])->name('landing');

// maps
Route::get('/maps', [MapController::class, 'index'])->name('maps.index');

// donation
Route::get('/donate', [DonationController::class, 'donation'])->name('donation.index');

// login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// login google

Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])
    ->name('google.redirect')
    ->middleware('guest');

Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])
    ->name('google.callback')
    ->middleware('guest');


// dashboard admin
Route::get('/dashboard', [AdminController::class, 'HalamanAdmin'])->name('admin.index');
