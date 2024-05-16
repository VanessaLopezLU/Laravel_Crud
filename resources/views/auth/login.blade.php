@extends('layouts.plantilla')
@section('tituloPagina','Crud Laravel 8')

@section('content')
<style>
    .container{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 22px;
    }
</style>
<section class="h-80 gradient-form" style="background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-80">
            <div class="col-xl-8">
                <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-7" style="justify-content: center" >
                            <div class="card-body p-md-5 mx-md-3">

                                <div class="text-center">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">Bienvenido a Nuestra Aplicación</h4>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    
                                    <p>Por favor ingresa tu cuenta</p>

                                    <div data-mdb-input-init class="form-outline mb-2">
                                        <label class="form-label" for="email">Correo electrónico</label>
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electrónico">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-2">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>

                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuérdame') }}
                                            </label>
                                        </div>
                                        <br>
                                        @if (Route::has('password.request'))
                                            <a class="text-muted" href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                                        @endif
                                    </div>

                                    <div class="text-center pt-1 mb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Iniciar sesión</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex align-items-center gradient-custom-2"> 
                            <img src="https://elcomercio.pe/resizer/_mnck4MRteqr_vIzjXBfnJKS7uE=/980x528/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/6F6QHVSCSNDKHG4AF4RPMIOX7A.png" alt="" width="284" height="800">
                            <!-- Aquí puedes agregar cualquier contenido adicional que desees -->
                        </div>
                        
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
</section>

@endsection
