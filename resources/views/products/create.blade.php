<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle del Producto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .product-card {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .product-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            border: 2px solid #f1c40f;
            padding: 5px;
        }
        .product-title {
            color: #f39c12;
            font-weight: bold;
            font-size: 24px;
        }
        .product-price {
            font-size: 28px;
            font-weight: bold;
            color: #000;
        }
        .btn-cart {
            background-color: #f1c40f;
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            transition: 0.3s ease;
        }
        .btn-cart:hover {
            background-color: #d4ac0d;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="product-card d-flex align-items-center">
                <div class="col-md-5">
                    <img src="https://via.placeholder.com/300" alt="Producto" class="product-image">
                </div>
                <div class="col-md-7 ps-4">
                    <h2 class="product-title">Nombre del Producto</h2>
                    <p class="text-muted">Categoría: Electrónica</p>
                    <p class="product-description">
                        Descripción del producto. Este es un producto increíble con características únicas
                        que lo hacen destacar en el mercado. Perfecto para cualquier ocasión.
                    </p>
                    <p class="product-price">$99.99</p>
                    <button class="btn btn-cart">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
