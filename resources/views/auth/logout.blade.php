@extends('layout')

@section('content')
    <div class="page pageLogout container d-flex align-items-center justify-center">
        <div class="encart--shadow text-center">
            <h1 class="text-uppercase text-center mb-3">Se déconnecter</h1>
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <div class="text-center">
                    <input type="submit" value="Se déconnecter">
                </div>
            </form>
        </div>
    </div>
@endsection
