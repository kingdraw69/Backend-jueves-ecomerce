@extends('layout.app')

@section('title', 'Lista de Productos')

@section('content')
    <h2 class="text-center text-warning">Productos Disponibles</h2>
    <div class="text-center mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-success"> Agregar Producto</a>
    </div>

    <div class="row">
        @foreach($productos as $producto)
            <div class="col-md-4 mb-4"> 
                <div class="card h-100 shadow-sm">
                    <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text text-muted">${{ number_format($producto->precio, 2) }}</p>
                        <a href="{{ route('products.show', $producto->id) }}" class="btn btn-warning w-100">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


