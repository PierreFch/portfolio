@extends('layout')

@section('body-class', '404')

@section('content')
    <div class="page page404 d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center justify-center text-center">
            <div>
                <h1 class="error-message">404</h1>
                <p>Oups, page non trouvée..</p>
            </div>
            <a href="/" class="button button--back">Retour à la page d'accueil</a>
        </div>
    </div>
@endsection
