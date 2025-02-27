<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('Products', function () {
    echo "listado de todos los productos";
});

Route::get('Products/create', function () {
    echo "formulario para crear un producto";
});


Route::get('Products/{name}', function ($name) {
    echo "producto: $name";
});

Route::get('Products/{name}/{category}', function ($name, $category) {
    echo "producto: $name, y tiene una categoria $category";
});
