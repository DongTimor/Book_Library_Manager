<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin/', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'books/', 'as' => 'books.'], function () {
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::get('/create', [BookController::class, 'create'])->name('create');
        Route::post('/store', [BookController::class, 'store'])->name('store');
        Route::get('/edit/{book}', [BookController::class, 'edit'])->name('edit');
        Route::put('/update/{book}', [BookController::class, 'update'])->name('update');
        Route::get('/delete/{book}', [BookController::class, 'destroy'])->name('delete');
        Route::get('/show/{book}', [BookController::class, 'show'])->name('show');
        Route::get('/search', [BookController::class, 'search'])->name('search');

    });

    Route::group(['prefix' => 'authors/', 'as' => 'authors.'], function () {
        Route::get('/', [AuthorController::class, 'index'])->name('index');
        Route::post('/add/create', [AuthorController::class, 'store'])->name('store');
        Route::get('/delete/{author}', [AuthorController::class, 'delete'])->name('delete');

    });

});
