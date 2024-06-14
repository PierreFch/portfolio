@extends('layout')

@section('content')
    <div class="page pageLogin d-flex align-items-center justify-center container">
        <div class="encart--shadow background-white">
            <div class="d-flex align-items-center justify-center flex-column">
                <h1 class="text-uppercase text-center">Se connecter</h1>
                <form action="{{ route('auth.authentication') }}" method="POST" class="login">
                    @csrf
                    <div class="email">
                        <label for="email"></label>
                        <input type="email" value="{{ old('email') }}" id="email" name="email" placeholder="Email"
                            class="@error('email')is-invalid @enderror">
                    </div>
                    <div class="password">
                        <label for="password"></label>
                        <input type="password" id="password" name="password" placeholder="Mot de passe"
                            class="@error('password')is-invalid @enderror">
                    </div>
                    @error('email')
                        <div class="invalid">{{ $message }}</div>
                    @enderror
                    @error('password')
                        <div class="invalid">{{ $message }}</div>
                    @enderror
                    @if (session('error-login'))
                        <div class="alert alert-error">
                            {{ session('error-login') }}
                        </div>
                    @endif
                    <div class="submit text-center">
                        <input type="submit" value="Se connecter">
                    </div>
                    {{-- <div class="register text-center">
                        <a href="{{ route('auth.register') }}">Créer un compte</a>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
