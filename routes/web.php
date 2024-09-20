<?php

use App\Http\Controllers\Authors_Controller;
use App\Http\Controllers\Books_Controller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin/', 'as' => 'admin.'], function () {
    Route::group(['prefix' => 'books/', 'as' => 'books.'], function () {
        Route::get('/', [Books_Controller::class, 'index'])->name('index');
        Route::get('/create', [Books_Controller::class, 'create'])->name('create');
        Route::post('/store', [Books_Controller::class, 'store'])->name('store');
        Route::get('/edit/{id}', [Books_Controller::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [Books_Controller::class, 'update'])->name('update');
        Route::get('/delete/{id}', [Books_Controller::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'authors/', 'as' => 'authors.'], function () {
        Route::get('/', [Authors_Controller::class, 'index'])->name('index');
        Route::post('/add/create', [Authors_Controller::class, 'store'])->name('store');
        Route::get('/delete/{id}', [Authors_Controller::class, 'delete'])->name('delete');

    });
});
