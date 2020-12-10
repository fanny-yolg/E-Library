<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/books', 'App\Http\Controllers\BookController@index');

// Admin Page Routes
Route::get('/admin', 'App\Http\Controllers\BookController@adminPage');
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::post('/books', 'App\Http\Controllers\BookController@store');

Route::get('/book/admin', 'App\Http\Controllers\BookController@database');
Route::get('books/{book}/edit', 'App\Http\Controllers\BookController@edit');
Route::get('/books/{book}', 'App\Http\Controllers\BookController@show');

Route::put('books/{book}', 'App\Http\Controllers\BookController@update');

Route::delete('/book/{book}', 'App\Http\Controllers\BookController@destroy');

// Route::patch('/book/{id}', 'App\Http\Controllers\BookController@update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
