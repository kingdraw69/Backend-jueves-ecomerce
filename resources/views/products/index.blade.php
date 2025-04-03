@extends('layout.app')

@section('title', 'Lista de Productos')

@section('content')
    <h2 class="text-center text-warning">Productos Disponibles</h2>
    <div class="text-center mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-success"> Agregar Producto</a>
    </div>

    <div class="row">
        @foreach($listProducts as $product)


            <div class="col-md-4 mb-4"> 
                <div class="product-card">
                    <img src="{{ $product->url_image }}" class="img-fluid" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="text-muted">categorá: {{ $product->category_id }}</p>
                        <div class="product-price">${{$product->price}}</div>
                        <button class="btn btn-primary">Agragar añ carrito</button>
                    </div>
                </div>
            </div>
        @endforeach
        
        {{$lisrProducts->links()}}

    </div>
@endsection


