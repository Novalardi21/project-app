<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;

Route::get('/', function () {
return redirect()->route('maps.index');
});

Route::get('/maps', [MapController::class, 'index'])->name('maps.index');
