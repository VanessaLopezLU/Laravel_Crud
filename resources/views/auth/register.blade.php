@extends('layouts.plantilla')
@section('tituloPagina','Crud Laravel 8')

@section('content')
<style>
    .container{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 22px;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background: #fccb90; /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #db8ddc, #d8363a, #dd3675, #b44593); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right,#db8ddc, #d8363a, #dd3675, #b44593); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        color: #070303;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 2rem;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 10px;
        border: 1px solid #ced4da;
        padding: 12px;
    }

    .btn-primary {
        background: #fccb90; /* fallback for old browsers */
        background: -webkit-linear-gradient(to right,  #db8ddc, #d8363a, #dd3675, #b44593); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right,  #db8ddc, #d8363a, #dd3675, #b44593); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        border: none;
        border-radius: 10px;
        padding: 12px 20px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: #ee7724; /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #db8ddc, #d8363a, #dd3675, #b44593); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #c195d4, #d8363a, #dd3675, #b44593); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center> <div style="justify-content: center" class="card-header">{{ __('Registrarse') }}</div></center>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('nombre')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirmar contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="text-center">
                            <button type="submit" onclick="window.location='{{ route("personas.inicio") }}'" class="btn btn-primary">{{ __('Registrar') }}</button>

                        </div>
                        
            </div>
        </div>
    </div>
</div>
@endsection
