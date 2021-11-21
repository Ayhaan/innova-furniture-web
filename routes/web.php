<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Front
Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('/about', [AllController::class, 'about'])->name('about');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');
Route::get('/product-indoor', [AllController::class, 'productIndoor'])->name('indoor');
Route::get('/product-outdoor', [AllController::class, 'productOutdoor'])->name('outdoor');
Route::get('/product-indoor/{product}', [AllController::class, 'productShow'])->name('product');
Route::get('/faq', [AllController::class, "faq"])->name('faq');
Route::get('/moving', [AllController::class, "moving"])->name('moving');
    //Search
Route::get('/product/search', [AllController::class, 'search'])->name('search');


Route::get('/test', function () {
    // dd('test');
    return view("template/product/test");
});

// Back
Route::get('/admin/dashboard', [AdminController::class, 'admin'])->middleware(['auth'])->name('admin');

    // Comments
Route::post('/admin/comment/store', [CommentController::class, 'store'])->name('comment.store');

    // Products 

// Auth
require __DIR__.'/auth.php';




// //EXEMPLE
// Route::get('/admin/skills', [SkillController::class, 'index'])->name('skill.index');
// Route::get('/admin/skills/{id}/show', [SkillController::class, 'show'])->name('skill.show');
// Route::delete('/admin/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skill.delete');
// Route::get('admin/skills/create', [SkillController::class, 'create'])->name('skill.create');
// Route::post('admin/skills/store', [SkillController::class, 'store'])->name('skill.store');
// Route::get('admin/skills/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
// Route::put('admin/skills/{id}/update', [SkillController::class, 'update'])->name('skill.update');