<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('admin');
});


Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::group(['prefix' => 'users/', 'as' => 'users.'], function () {
        Route::get('/profile', [UserController::class, 'index'])->name('profile');
        Route::get('/changePassword', [UserController::class, 'edit'])->name('changePassword');
        Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
    });

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
        Route::get('/create', [AuthorController::class, 'create'])->name('create');
        Route::post('/store', [AuthorController::class, 'store'])->name('store');
        Route::get('/edit{author}', [AuthorController::class, 'edit'])->name('edit');
        Route::put('/update/{author}', [AuthorController::class, 'update'])->name('update');
        Route::get('/delete/{author}', [AuthorController::class, 'destroy'])->name('delete');
        Route::get('/show/{author}', [AuthorController::class, 'show'])->name('show');
    });

    Route::group(['prefix' => 'categories/', 'as' => 'categories.'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [CategoryController::class, 'destroy'])->name('delete');
    });



});

Route::group(['prefix' => 'test/', 'as' => 'test.'], function () {
    Route::get('/', [TestController::class, 'index'])->name('index');
    Route::get('/getBooks/{author}', [TestController::class, 'getBooksOfAuthor'])->name('getBooks');

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
