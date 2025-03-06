<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');//retornar un lista de productos
    }
    public function create(){
        return view('products.create'); // Cargar la vista de creación de productos
        
    }
    public function show($name){
        echo "PRODUCTO: $name";

    }
    
}
