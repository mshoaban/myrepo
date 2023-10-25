<?php

use Illuminate\Support\Facades\Route;



    Route::get('/welcome', function () {
        return view('welcome');
    });

    //Crud Product Routes 

        Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
        Route::put('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');


