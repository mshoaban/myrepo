<?php

use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('welcome');
    });

     Route::get('/helo', function () {
        return 'Helo World ';
    });

     

     Route::group(['prefix' => 'posts'], function() {
         Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
         Route::get('profile/{id}', [App\Http\Controllers\PostController::class, 'userprofile'])->name('post.userprofile');
     });

    //Crud Product Routes 
     Route::group(['prefix' => 'products'], function() {
          Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
        Route::put('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
     });
        // Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        // Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        // Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        // Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        // Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
        // Route::put('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');


