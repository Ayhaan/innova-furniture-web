<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;



//---------------------------- FRONT ----------------------------
Route::get('/', [AllController::class, 'home'])->name('home');
Route::get('/about', [AllController::class, 'about'])->name('about');
Route::get('/contact', [AllController::class, 'contact'])->name('contact');
Route::get('/product-indoor', [AllController::class, 'productIndoor'])->name('indoor');
Route::get('/product-indoor/{product}', [AllController::class, 'productShow'])->name('product');
Route::get('/product-outdoor', [AllController::class, 'productOutdoor'])->name('outdoor');
    //range price
Route::post('/product-indoor/range', [AllController::class, 'range'])->name('ayhan');
Route::get('/faq', [AllController::class, "faq"])->name('faq');
Route::get('/moving', [AllController::class, "moving"])->name('moving');
    //Search
Route::get('/product/search', [AllController::class, 'search'])->name('search');


//---------------------------- BACK ADMIN ----------------------------
Route::get('/admin/dashboard', [AdminController::class, 'admin'])->middleware(['auth'])->name('admin');
Route::middleware(['auth', 'admin'])->group(function () {
        // Products
    Route::get('/admin/products-indoor', [ProductController::class, 'index'])->name('product.index'); 
    Route::get('/admin/product/{product}/show', [ProductController::class, 'show'])->name('product.show');
    Route::get('admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/admin/product/search', [ProductController::class, 'search'])->name('search.back');
    Route::post('admin/product/store-product', [ProductController::class, 'store'])->name('product.store');
        // products-image-crop (apart)
    Route::post('crop',[ProductController::class, 'store_image'])->name('crop.store');
    Route::get('img-all',[ProductController::class, 'getimage'])->name('img.get');
    Route::get('remove-img/{i}', [ProductController::class, "destroy_img"])->name('img.destroy');
    Route::get('admin/product/store-product/rollback/{name}', [ProductController::class, 'rollback'])->name('product.rollback');
    Route::get('admin/product/store-product/cancel', [ProductController::class, 'cancel'])->name('product.cancel');
        // Users
    Route::get('/admin/users', [AdminController::class, "users"])->name('users.index');
        // Comments
    Route::post('/admin/comment/store', [CommentController::class, 'store'])->name('comment.store');
        //OPIGNION
        //FAQ
        //Parteners
        //About
        //Moving
        //Contact
        
});







//---------------------------- AUTH ----------------------------
require __DIR__.'/auth.php';




// //EXEMPLE
// Route::get('/admin/skills', [SkillController::class, 'index'])->name('skill.index');
// Route::get('/admin/skills/{id}/show', [SkillController::class, 'show'])->name('skill.show');
// Route::delete('/admin/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skill.delete');
// Route::get('admin/skills/create', [SkillController::class, 'create'])->name('skill.create');
// Route::post('admin/skills/store', [SkillController::class, 'store'])->name('skill.store');
// Route::get('admin/skills/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
// Route::put('admin/skills/{id}/update', [SkillController::class, 'update'])->name('skill.update');