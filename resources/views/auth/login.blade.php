@extends('layouts.app')

<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url(img/back2.jpeg);
        background-size: cover;
        font-family: "Comfortaa", sans-serif;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
        
            <div class="login">
                <img src="{{ asset('img/user.png') }}" class="usuario" width="100" height="100" alt="">
                <h1>{{ __('Login') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-12 text-md-left">{{ __('E-mail do usuário:') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Seu e-mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 text-md-left">{{ __('Senha:') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Sua senha" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
