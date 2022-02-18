<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\mainController;
use App\Http\Controllers\Admin\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [adminController::class, 'index'])->name('dashboard');

Route::get('/', [mainController::class, 'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/popular', [adminController::class, 'popular'])->name('dashboard.popular');
Route::middleware(['auth:sanctum', 'verified'])->post('/popular/add', [adminController::class, 'addPop'])->name('store.popular');
Route::middleware(['auth:sanctum', 'verified'])->get('/popular/edit/{id}', [adminController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/popular/update/{id}', [adminController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('delete/popular/{id}', [adminController::class, 'delete']);


Route::get('/about', [mainController::class, 'about'])->name('about');

