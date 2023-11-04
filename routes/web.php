<?php

use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return view('welcome');
    });

     Route::get('/helo', function () {
        return 'Helo World ';
    });

     //Users Routes 
Route::middleware(['role_or_permission:manage users'])->group(function () {
        Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
        Route::get('/add-user', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
        Route::get('/view-user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.view');
        Route::get('/edit-user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
        Route::put('/update-user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
        Route::post('/add-user', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
        Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');
    });
     //Commetns Routes 
     Route::post('/', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');

     
     //Posts Routes
    

     Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index')->middleware('auth');
     Route::get('/posts/add-post', [App\Http\Controllers\PostController::class, 'create'])->name('post.create')->middleware('auth');
     Route::get('/posts/profile/{id}', [App\Http\Controllers\PostController::class, 'userprofile'])->name('post.userprofile')->middleware('auth');
     Route::post('/posts/add-post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store')->middleware('auth');

Route::middleware(['role_or_permission:manage users'])->group(function () {
    Route::get('/posts/pending', [App\Http\Controllers\PostController::class, 'pendingposts'])->name('post.pending');
    
    Route::put('/posts/update-post/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::get('/posts/delete-post/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
    
});


    //Crud Product Routes 
     Route::group(['prefix' => 'products', 'middleware' => 'auth'], function() {
          Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
        Route::put('/update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
     });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
