<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Inicio de Sesión')</title>

    <!-- Bootstrap y fuente -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff;
            margin: 0;
        }
        .topbar {
            background-color: #f49e17;
            padding: 15px 0;
            color: white;
        }
        .topbar a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 600;
        }
        
    </style>
</head>
<body>
    <div class="topbar d-flex justify-content-between px-4">
        <div>
            <img src="{{ asset('images/logo-unab.png') }}" alt="Logo UNAB" height="40">
        </div>
        <div>
            <a href="#">Iniciar sesión</a>
            <a href="#">Registrarse</a>
        </div>
    </div>

    <div class="container text-center mt-4">
        <img src="{{ asset('images/logo-unab.png') }}" alt="Logo UNAB" height="100">
        <h3 class="mt-3">Sistema de Gestión Universitaria</h3>
    </div>

    <div class="login-box mt-4">
        @yield('content')
    </div>

    <div class="footer">
        Universidad Autónoma de Bucaramanga - UNAB © {{ date('Y') }}<br>
        © {{ date('Y') }} UNAB Tienda. Todos los derechos reservados.
    </div>
</body>
</html>
