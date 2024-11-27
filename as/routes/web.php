<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class, 'showAllProducts']);
Route::get('products/create', [ProductController::class, 'createProduct']);
Route::post('products', [ProductController::class, 'createFormProduct']);
Route::get('products/{id}/edit', [ProductController::class, 'editFormProduct']);
Route::put('products/{id}', [ProductController::class, 'updateProduct']);
Route::delete('products/{id}', [ProductController::class, 'deleteProduct']);

Route::get('categories', [CategoryController::class, 'showAllCategories']);
Route::get('categories/create', [CategoryController::class, 'createCategory']);
Route::post('categories', [CategoryController::class, 'createFormCategory']);
Route::get('categories/{id}/edit', [CategoryController::class, 'editFormCategory']);
Route::put('categories/{id}', [CategoryController::class, 'updateCategory']);
Route::delete('categories/{id}', [CategoryController::class, 'deleteCategory']);

Route::get('suppliers', [SupplierController::class, 'showAllSuppliers']);
Route::get('suppliers/create', [SupplierController::class, 'createSupplier']);
Route::post('suppliers', [SupplierController::class, 'createFormSupplier']);
Route::get('suppliers/{id}/edit', [SupplierController::class, 'editFormSupplier']);
Route::put('suppliers/{id}', [SupplierController::class, 'updateSupplier']);
Route::delete('suppliers/{id}', [SupplierController::class, 'deleteSupplier']);