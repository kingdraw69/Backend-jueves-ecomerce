<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ProductController;

Route::get('/', HomeControler::class);
Route::get('products',[ProductController::class, 'index'] );
Route::get('products/create',[ProductController::class, 'create'] )->name('products.create');
Route::get('products/{name}',[ProductController::class, 'show'] );

//Route::get('Products/{name}/{category}', function ($name, $category) {
//    echo "producto: $name, y tiene una categoria $category";
//});
