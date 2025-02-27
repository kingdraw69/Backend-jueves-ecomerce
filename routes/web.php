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

Route::get('Products/computados', function () {
    echo "producto: computador";
});
Route::get('Products/teclado', function () {
    echo "producto: computador";
});
Route::get('Products/mouse', function () {
    echo "producto: mouse";
});

Route::get('Products/{name}', function ($name) {
    echo "producto: $name";
});

Route::get('Products/{name}/{category}', function ($name, $category) {
    echo "producto: $name, y tiene una categoria $category";
});
