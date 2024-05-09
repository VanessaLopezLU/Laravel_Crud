@extends('layouts.plantilla')
@section('tituloPagina','Crud Laravel 8')

@section('content')
<section class="h-100 gradient-form" style="background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-8">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-10" style="justify-content: center" >
                            <div class="card-body p-md-5 mx-md-3">

                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Bienvenido a Nuestra Aplicación</h4>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    
                                    <p>Por favor ingresa tu cuenta</p>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="email">Correo electrónico</label>
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <label class="form-label" for="password">Contraseña</label>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuérdame') }}
                                            </label>
                                        </div>

                                        @if (Route::has('password.request'))
                                            <a class="text-muted" href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                                        @endif
                                    </div>

                                    <div class="text-center pt-1 mb- pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar sesión</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
