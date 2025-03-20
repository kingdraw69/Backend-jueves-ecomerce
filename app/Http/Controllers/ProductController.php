<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $productos = Product::all(); 
        $productos = [
            (object) ['id' => 1, 'nombre' => 'Producto 1', 'imagen' => 'https://via.placeholder.com/150', 'precio' => 50000],
            (object) ['id' => 2, 'nombre' => 'Producto 2', 'imagen' => 'https://via.placeholder.com/150', 'precio' => 75000],
        ];
        return view('products.index', compact('productos'));//retornar un lista de productos
    }
    public function create(){
        return view('products.create'); // Cargar la vista de creación de productos
        
    }
    public function show($id){
        $producto = Product::findOrFail($id);
        return view('products.show', compact('producto'));
    }
    
}
