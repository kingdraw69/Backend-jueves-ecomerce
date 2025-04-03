<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ProductController;

Route::get('/', HomeControler::class);

Route::prefix('/products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index' )->name('products.index');
    Route::get('/create','create')->name('products.create');;
    Route::get('/{id}','show')->name('products.show');;
});


//Route::get('Products/{name}/{category}', function ($name, $category) {
//    echo "producto: $name, y tiene una categoria $category";
//});
