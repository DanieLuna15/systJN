@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('title', 'Iniciar Sesión')

@section('auth_body')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Contraseña --}}
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="Contraseña">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- Recordarme y Enlace de Olvidar Contraseña --}}
        <div class="row mb-3 align-items-center">
            <div class="col-6 d-flex align-items-center">
                <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="ml-1">
                        Recordarme
                    </label>
                </div>
            </div>
            <div class="col-6 text-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm">¿Olvidaste tu contraseña?</a>
                @endif
            </div>
        </div>


        {{-- Botón de Login --}}
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </div>
        </div>
    </form>
@endsection
