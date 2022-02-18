<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\mainController;
use App\Http\Controllers\Admin\adminController;



Route::middleware(['auth:sanctum', 'verified'])->get('/popular', [adminController::class, 'popular'])->name('dashboard.popular');
