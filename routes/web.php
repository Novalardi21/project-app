<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index'])->name('landing');

// maps
Route::get('/maps', [MapController::class, 'index'])->name('maps.index');

// donation
Route::get('/donate', [DonationController::class, 'donation'])->name('donation.index');
Route::get('/maps/donate/{location}', [MapController::class, 'donateToLocation'])->name('maps.donate');
Route::post('/donate', [DonationController::class, 'store'])
    ->middleware('auth')
    ->name('donation.store');

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update'); // Route baru
});

// about
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Auth
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
Route::get('/donasi', [AdminController::class, 'HalamanTitikDonasi'])->name('admin.titik-donasi');
Route::get('/donasi/tambah', [AdminController::class, 'HalamanTambahTitikDonasi'])->name('admin.tambah-donasi');
Route::post('/admin/store', [AdminController::class, 'StoreDonasi'])->name('admin.titik.store');
Route::get('/donasi/{id}/edit', [AdminController::class, 'HalamanEditDonasi'])->name('admin.titik.edit');
Route::post('/donasi/{id}/update', [AdminController::class, 'UpdateDonasi'])->name('admin.titik.update');
Route::get('/pengguna', [AdminController::class, 'HalamanPengguna'])->name('admin.pengguna');

Route::post('/admin/pengguna/{id}/toggle-status', [AdminController::class, 'toggleStatus'])->name('admin.users.toggleStatus');

Route::get('/admin/donasi', [AdminController::class, 'HalamanDonasi'])->name('admin.donasi');
Route::get('/admin/donasi/{id}/edit', [AdminController::class, 'HalamanDetailDonation'])->name('admin.donasi.edit');
Route::patch('/admin/donasi/{id}/update-status', [AdminController::class, 'UpdateDonasiStatus'])->name('admin.donasi.update-status');

Route::post('/donation/verify', [DonationController::class, 'uploadProof'])
    ->name('donation.uploadProof')
    ->middleware('auth');
