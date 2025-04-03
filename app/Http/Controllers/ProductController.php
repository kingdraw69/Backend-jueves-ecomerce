<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $listproducts = Product::all(); 
        

        return view('products.index',['listProducts' => $listproducts]);//retornar un lista de productos
    }
    public function create(){
        return view('products.create'); // Cargar la vista de creación de productos
        
    }
    public function show($id){
        $producto = Product::findOrFail($id);
        return view('products.show', compact('producto'));
    }
    
}
