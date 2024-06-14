@extends('layout')

@section('content')
    <div class="page pageRegister d-flex align-items-center justify-center container">
        <div class="encart--shadow background-white">
            <h1 class="text-uppercase text-center">Créer un compte</h1>
            @if (session('alert-error'))
                <div class="alert alert-error text-center">
                    {{ session('alert-error') }}
                </div>
            @endif
            <form action="{{ route('auth.registration') }}" method="POST" class="register">
                @csrf
                <div class="email">
                    <label for="email"></label>
                    <input type="email" value="{{ old('email') }}" id="email" name="email" placeholder="Email" class="@error('email')is-invalid @enderror">
                </div>
                <div class="password">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" class="@error('password')is-invalid @enderror">
                </div>
                <div class="password">
                    <label for="password_confirmation"></label>
                    <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirmer mot de passe" class="@error('password_confirmation')is-invalid @enderror">
                </div>
                @error ('email')
                    <div class="invalid">{{ $message }}</div>
                @enderror
                @error ('password')
                    <div class="invalid">{{ $message }}</div>
                @enderror
                @error ('password_confirmation')
                    <div class="invalid">{{ $message }}</div>
                @enderror
                <div class="submit text-center">
                    <input type="submit" value="Créer le compte">
                </div>
                <div class="login text-center">
                    <a href="{{ route('auth.login') }}">Se connecter</a>
                </div>
            </form>
        </div>
    </div>
@endsection
