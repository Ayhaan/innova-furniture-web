<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;


// Front
Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('/about', [AllController::class, 'about'])->name('about');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');
Route::get('/product-indoor', [AllController::class, 'productIndoor'])->name('indoor');
Route::get('/product-outdoor', [AllController::class, 'productOutdoor'])->name('outdoor');
Route::get('/product-indoor/{product}', [AllController::class, 'productShow'])->name('product');


Route::get('/test', function () {
    // dd('test');
    return view("template/product/test");
});

// Back
Route::get('/admin/dashboard', [AdminController::class, 'admin'])->middleware(['auth'])->name('admin');

// Auth
require __DIR__.'/auth.php';
