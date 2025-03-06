@extends('app')

@section('title', 'Agregar Producto')

@section('content')
    <div class="card mx-auto shadow p-4" style="max-width: 500px;">
        <h2 class="text-center text-warning">🆕 Agregar Nuevo Producto</h2>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre del Producto:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción:</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio ($):</label>
                <input type="number" name="precio" class="form-control" step="0.01" required>
            </div>
            <div class="mb-3">
                <label class="form-label">URL de Imagen:</label>
                <input type="url" name="imagen" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning w-100">💾 Guardar Producto</button>
        </form>
    </div>
@endsection
