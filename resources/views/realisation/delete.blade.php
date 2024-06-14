@extends('layout')

@section('body-class', 'delete-realisation')

@section('content')
    <div class="page pageRealisation delete container d-flex align-items-center justify-center flex-column">
        <h1>Supprimer cette réalisation ?</h1>
        <div class="buttons-container mt-3">
            <a href="{{ route('realisations') }}#realisations" title="Retour aux réalisations"
                class="button button--back">Retour aux réalisations</a>
            <form action="{{ route('realisation.destroy', $realisation) }}" method="POST" enctype="multipart/form-data"
                class="delete">
                @csrf
                @method('DELETE')
                <input type="submit" value="Supprimer">
            </form>
        </div>
    </div>
@endsection
