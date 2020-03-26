@extends('layouts.authentication')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="logo-container d-flex justify-content-center mb-2">
        <img class="logo" src="{{ asset('img/logo.png')}}">
    </div>
    <h4 class="text-center">
        Recuperar Senha
    </h4>
    
    <div class="form-group row">
        <div class="col-md-12">
            <label for="email" class="col-form-label">{{ __('Endereço de e-mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-2">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary col">
                {{ __('Enviar Link de Recuperação de Senha') }}
            </button>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-12">
            <a type="button" class="btn btn-light col" href="/login">Cancelar</a>
        </div>
    </div>
</form>
@endsection
