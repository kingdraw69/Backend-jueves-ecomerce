@extends('layout.app')

@section('title', 'Detalles del Producto')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Imagen del producto -->
        <div class="col-md-5 d-flex justify-content-center">
            <img src="{{ $product->url_image }}" class="img-fluid border rounded" alt="{{ $product->name }}">
        </div>
        
        <!-- Información del producto -->
        <div class="col-md-7">
            <h2 class="text-warning">{{ $product->name }}</h2>
            <p><strong>Categoría:</strong> {{ $product->category_id }}</p>
            <p>{{ $product->description }}</p>
            <h3 class="text-dark">${{ number_format($producto->price) }}</h3>

            <button class="btn btn-warning mt-3">Agregar al Carrito</button>
        </div>
    </div>
</div>
@endsection


