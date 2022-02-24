<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\mainController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\subCategoryController;

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


//Routes for popular items 
Route::middleware(['auth:sanctum', 'verified'])->get('/popular', [adminController::class, 'popular'])->name('dashboard.popular');
Route::middleware(['auth:sanctum', 'verified'])->post('/popular/add', [adminController::class, 'addPop'])->name('store.popular');
Route::middleware(['auth:sanctum', 'verified'])->get('/popular/edit/{id}', [adminController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/popular/update/{id}', [adminController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('delete/popular/{id}', [adminController::class, 'delete']);

//Routes for frontend - about 
Route::get('/', [mainController::class, 'index'])->name('home');
Route::get('/about', [mainController::class, 'about'])->name('about');


//Admin Brand All Brand
Route::prefix('brand')->group(function(){

    Route::get('/view', [brandController::class, 'BrandView'])->name('all.brand');
    Route::post('/add', [brandController::class, 'addBrand'])->name('store.brand');
    Route::get('/edit/{id}', [brandController::class, 'editBrand'])->name('edit.brand');
    Route::post('/update/{id}', [brandController::class, 'updateBrand'])->name('update.brand');
    Route::get('/delete/brand/{id}', [brandController::class, 'deleteBrand'])->name('delete.brand');
});



//Admin Category All Category
Route::prefix('category')->group(function(){

    Route::get('/view', [categoryController::class, 'category_view'])->name('all.category');
    Route::post('/add', [categoryController::class, 'addCategory'])->name('store.category');
    Route::get('/edit/{id}', [categoryController::class, 'editCategory'])->name('edit.category');
    Route::post('/update/{id}', [categoryController::class, 'updateCategory'])->name('update.category');
    Route::get('/delete/category/{id}', [categoryController::class, 'deleteCategory'])->name('delete.category');
});


//Admin SubCategory All subCategory
Route::prefix('subcategory')->group(function(){

    Route::get('/view', [subCategoryController::class, 'subCategory_view'])->name('all.subCategory');
    // Route::post('/add', [categoryController::class, 'addSubCategory'])->name('store.category');
    // Route::get('/edit/{id}', [categoryController::class, 'editSubCategory'])->name('edit.category');
    // Route::post('/update/{id}', [categoryController::class, 'updateSubCategory'])->name('update.category');
    // Route::get('/delete/category/{id}', [categoryController::class, 'deleteSubCategory'])->name('delete.category');
});

