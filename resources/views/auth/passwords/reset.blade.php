@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('title', 'Restablecer Contraseña')

@section('auth_body')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        {{-- Email --}}
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
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

        {{-- Nueva Contraseña --}}
        <div class="input-group mb-3">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                   name="password" required autocomplete="new-password" placeholder="Nueva Contraseña">
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

        {{-- Confirmar Contraseña --}}
        <div class="input-group mb-3">
            <input id="password-confirm" type="password" class="form-control"
                   name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>

        {{-- Botón de Resetear Contraseña --}}
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Restablecer Contraseña</button>
            </div>
        </div>
    </form>
@endsection
