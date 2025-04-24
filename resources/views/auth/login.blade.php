
@extends('layouts.app') {{-- o layouts.login si decides moverlo aparte --}}

@section('login_title', 'Accede a tu cuenta')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" name="email" class="form-control" required autofocus>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="remember" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Recordar sesión</label>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-warning text-white">Ingresar</button>
    </div>

    <div class="text-end mt-2">
        <a href="{{ route('password.request') }}" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
    </div>
</form>
@endsection
