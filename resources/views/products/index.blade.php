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
        }
        .container {
            margin-top: 30px;
        }
        .product-card {
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">Lista de Productos</h1>
    
    <div class="row">
        <div class="col-md-4">
            <div class="card product-card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Laptop HP</h5>
                    <p class="card-text">Laptop potente para programadores.</p>
                    <p class="text-muted">Precio: $2500</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Mouse Logitech</h5>
                    <p class="card-text">Mouse inalámbrico ergonómico.</p>
                    <p class="text-muted">Precio: $150</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card product-card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Monitor Samsung</h5>
                    <p class="card-text">Monitor 24" Full HD.</p>
                    <p class="text-muted">Precio: $800</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
