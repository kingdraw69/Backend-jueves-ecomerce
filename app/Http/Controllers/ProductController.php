<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');//retornar un lista de productos
    }
    public function create(){
        echo "formulario para crear un producto";

    }
    public function show($name){
        echo "PRODUCTO: $name";

    }
}
