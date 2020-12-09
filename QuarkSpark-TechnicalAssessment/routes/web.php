<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/books', 'App\Http\Controllers\BookController@index');

// Admin Page Routes
Route::get('/admin', 'App\Http\Controllers\BookController@adminPage');
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::post('/books', 'App\Http\Controllers\BookController@store');
