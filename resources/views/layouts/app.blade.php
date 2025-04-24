<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            margin: 0;
        }
        .topbar {
            background-color: #f49e17;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
        }
        .topbar a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }
        .login-container {
            max-width: 480px;
            margin: 50px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .login-header {
            background-color: #f49e17;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
        }
        .footer {
            text-align: center;
            color: #999;
            font-size: 0.85rem;
            margin-top: 50px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="topbar d-flex justify-content-between align-items-center">
        <div>
            <img src="{{ asset('images/logo-unab.png') }}" alt="Logo UNAB" height="40">
        </div>
        <div>
            @if (Route::has('login'))
                <a href="{{ route('login') }}">Iniciar sesión</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Registrarse</a>
            @endif
        </div>
    </div>

    <div class="container text-center mt-4">
        <img src="{{ asset('images/logo-unab.png') }}" alt="Logo UNAB" height="100">
        <h4 class="mt-3">Sistema de Gestión Universitaria</h4>
    </div>

    <main class="login-container">
        <div class="login-header">
            @yield('login_title', 'Iniciar Sesión')
        </div>
        @yield('content')
    </main>

    <div class="footer">
        Universidad Autónoma de Bucaramanga - UNAB © {{ date('Y') }}<br>
        Todos los derechos reservados.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
