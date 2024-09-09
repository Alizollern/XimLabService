<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');


Route::get('/products',function(){
    return view('products');
})->name('products');


