@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">{{ __('Iniciar Sesión') }}</h2>

                    <form method="POST" action="{{ route('ldap.authenticate') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Recuérdame') }}</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">{{ __('Iniciar Sesión') }}</button>

                        @if (Route::has('password.request'))
                        <p class="mt-3 mb-0 text-center">
                            <a href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                        </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
