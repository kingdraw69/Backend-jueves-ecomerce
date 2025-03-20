@extends('layout.app')

@section('title', 'Detalles del Producto')

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Imagen del producto -->
        <div class="col-md-5 d-flex justify-content-center">
            <img src="{{ $producto->imagen }}" class="img-fluid border rounded" alt="{{ $producto->nombre }}">
        </div>
        
        <!-- Información del producto -->
        <div class="col-md-7">
            <h2 class="text-warning">{{ $producto->nombre }}</h2>
            <p><strong>Categoría:</strong> {{ $producto->categoria }}</p>
            <p>{{ $producto->descripcion }}</p>
            <h3 class="text-dark">${{ number_format($producto->precio, 2) }}</h3>

            <button class="btn btn-warning mt-3">Agregar al Carrito</button>
        </div>
    </div>
</div>
@endsection


