@extends('layout')

@section('body-class', 'create-realisation')

@section('content')
    <div class="page pageRealisation create container">
        <h1 class="text-center">Ajouter une realisation</h1>
        <form action="{{ route('realisation.store', $realisation) }}" method="POST" enctype="multipart/form-data"
            class="add">
            @csrf
            <fieldset>
                <div>
                    <label>Catégorie de la realisation : </label>
                    <select id="categorie" name="categorie">
                        <option value="">-- Selectionner une catégorie --</option>
                        <option value="webdesign">Webdesign</option>
                        <option value="integration-web">Intégration web</option>
                        <option value="developpement-web">Développement web</option>
                        <option value="wordpress">WordPress</option>
                    </select>
                    @error('categorie')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="titre">Titre de la réalisation : </label>
                    <input type="text" value="{{ old('titre') }}" id="titre" name="titre">
                    @error('titre')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="image">Image principale : </label>
                    <input type="file" value="{{ $image = old('image') }}" id="image" name="image">
                    @error('image')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="localisation">Lieu : </label>
                    <input type="text" value="{{ old('localisation') }}" id="localisation" name="localisation">
                    @error('localisation')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="annee">Année : </label>
                    <input type="text" value="{{ old('annee') }}" id="annee" name="annee">
                    @error('annee')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="duree">Durée : </label>
                    <input type="text" value="{{ old('duree') }}" id="duree" name="duree">
                    @error('duree')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="contexte-objectif">Contexte et objectif : </label>
                    <textarea id="contexte-objectif" class="tinymce" name="contexte-objectif">{{ old('contexte-objectif') }}</textarea>
                    @error('contexte-objectif')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="participation-individuelle">Participation individuelle : </label>
                    <textarea id="participation-individuelle" class="tinymce" name="participation-individuelle">{{ old('participation-individuelle') }}</textarea>
                    @error('participation-individuelle')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="analyse-critique">Analyse critique : </label>
                    <textarea id="analyse-critique" class="tinymce" name="analyse-critique">{{ old('analyse-critique') }}</textarea>
                    @error('analyse-critique')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="resultats">Résultats : </label>
                    <textarea id="resultats" class="tinymce" name="resultats">{{ old('resultats') }}</textarea>
                    @error('resultats')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
            <div class="submit">
                <input type="submit" value="Ajouter la realisation">
            </div>
        </form>
    </div>
@endsection
