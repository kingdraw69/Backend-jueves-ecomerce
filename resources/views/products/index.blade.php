<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Productos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 40px;
        }
        .product-card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            overflow: hidden;
            background: white;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid #f1c40f;
        }
        .product-title {
            font-weight: bold;
            color: #f39c12;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #000;
        }
        .btn-cart {
            background-color: #f1c40f;
            color: black;
            font-weight: bold;
            border: none;
            padding: 8px 15px;
            transition: 0.3s ease;
        }
        .btn-cart:hover {
            background-color: #d4ac0d;
        }
        .btn-add {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            transition: 0.3s ease;
        }
        .btn-add:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">Lista de Productos</h1>

    

    <div class="row">
        <!-- Producto 1 -->
        <div class="col-md-4">
            <div class="card product-card mb-4">
                <img src="https://via.placeholder.com/300" alt="Laptop HP" class="product-image">
                <div class="card-body text-center">
                    <h5 class="product-title">Laptop HP</h5>
                    <p class="text-muted">Laptop potente para programadores.</p>
                    <p class="product-price">$2500</p>
                    <a href="#" class="btn btn-cart">Ver más</a>
                    <!-- Botón para ir al formulario de agregar producto -->
                    <div class="text-end mb-4">
                        <a href="{{ route('products.create') }}" class="btn btn-add">Agregar Producto</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4">
            <div class="card product-card mb-4">
                <img src="https://via.placeholder.com/300" alt="Mouse Logitech" class="product-image">
                <div class="card-body text-center">
                    <h5 class="product-title">Mouse Logitech</h5>
                    <p class="text-muted">Mouse inalámbrico ergonómico.</p>
                    <p class="product-price">$150</p>
                    <a href="#" class="btn btn-cart">Ver más</a>
                    <div class="text-end mb-4">
                        <a href="{{ route('products.create') }}" class="btn btn-add">Agregar Producto</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4">
            <div class="card product-card mb-4">
                <img src="https://via.placeholder.com/300" alt="Monitor Samsung" class="product-image">
                <div class="card-body text-center">
                    <h5 class="product-title">Monitor Samsung</h5>
                    <p class="text-muted">Monitor 24" Full HD.</p>
                    <p class="product-price">$800</p>
                    <a href="#" class="btn btn-cart">Ver más</a>
                    <div class="text-end mb-4">
                        <a href="{{ route('products.create') }}" class="btn btn-add">Agregar Producto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

