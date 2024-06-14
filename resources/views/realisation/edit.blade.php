@extends('layout')

@section('body-class', 'edit-realisation')

@section('content')
    <div class="page pageRealisation edit container">
        <h1 class="text-center">Modifier la réalisation {{ $realisation->titre }}</h1>
        <form action="{{ route('realisation.update', $realisation) }}" method="POST" enctype="multipart/form-data"
            class="edit">
            @csrf
            @method('PUT')
            <fieldset>
                <div>
                    <label>Catégorie de la réalisation : </label>
                    <select id="categorie" name="categorie">
                        <option value="">-- Sélectionner une catégorie --</option>
                        <option value="webdesign" @if (old('categorie', $realisation->categorie) === 'webdesign') selected @endif>Webdesign</option>
                        <option value="integration-web" @if (old('categorie', $realisation->categorie) === 'integration-web') selected @endif>Intégration web
                        </option>
                        <option value="developpement-web" @if (old('categorie', $realisation->categorie) === 'developpement-web') selected @endif>Développement
                            web</option>
                        <option value="wordpress" @if (old('categorie', $realisation->categorie) === 'wordpress') selected @endif>WordPress</option>
                    </select>
                    @error('categorie')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="titre">Titre de la réalisation : </label>
                    <input type="text" value="{{ old('titre', $realisation->titre) }}" id="titre" name="titre">
                    @error('titre')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="image">Image principale :</label>
                    <input type="file" id="image" name="image">
                    @if ($currentImage && !$errors->has('image'))
                        <p>Image actuelle : {{ $currentImage }}</p>
                        <input type="hidden" name="current_image" value="{{ $currentImage }}">
                    @endif
                    @error('image')
                        <div class="invalid">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="localisation">Lieu : </label>
                    <input type="text" value="{{ old('localisation', $realisation->localisation) }}" id="localisation"
                        name="localisation">
                    @error('localisation')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="annee">Année : </label>
                    <input type="text" value="{{ old('annee', $realisation->annee) }}" id="annee" name="annee">
                    @error('annee')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="duree">Durée : </label>
                    <input type="text" value="{{ old('duree', $realisation->duree) }}" id="duree" name="duree">
                    @error('duree')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
            <fieldset>
                <div>
                    <label for="contexte-objectif">Contexte et objectif : </label>
                    <textarea id="contexte-objectif" class="tinymce" name="contexte-objectif">{{ old('contexte-objectif', $realisation->{'contexte-objectif'}) }}</textarea>
                    @error('contexte-objectif')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="participation-individuelle">Participation individuelle : </label>
                    <textarea id="participation-individuelle" class="tinymce" name="participation-individuelle">{{ old('participation-individuelle', $realisation->{'participation-individuelle'}) }}</textarea>
                    @error('participation-individuelle')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="analyse-critique">Analyse critique : </label>
                    <textarea id="analyse-critique" class="tinymce" name="analyse-critique">{{ old('analyse-critique', $realisation->{'analyse-critique'}) }}</textarea>
                    @error('analyse-critique')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="resultats">Résultats : </label>
                    <textarea id="resultats" class="tinymce" name="resultats">{{ old('resultats', $realisation->resultats) }}</textarea>
                    @error('resultats')
                        <div class="invalid"> {{ $message }}</div>
                    @enderror
                </div>
            </fieldset>
            <div class="submit">
                <input type="submit" value="Modifier la réalisation">
            </div>
        </form>
    </div>
@endsection
