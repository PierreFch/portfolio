@extends ('layout')
@include('php.functions')

@section('body-class', 'contact')

@section('content')
    <div class="page pageContact container">
        <div class="row">
            <div class="col-12 col-md-7 pr-5">
                <h1>Pierre <span>Faucheur</span><small>Webdesigner & développeur front-end</small></h1>
                <h2>Intégrateur web chez Nerepix depuis 2021</h2>
                <div class="description mb-4">
                    <p>
                        Passionné par le numérique, je suis chaque jour en quête de nouvelles connaissances. Ouvert
                        d’esprit, je
                        façonne mon expérience en orientant ma curiosité sur différents métiers du numérique :
                        webdesign, UX et UI design et
                        développement front.
                    </p>
                    <p>
                        Imaginez maintenant relier ces différents domaines sur un seul et même projet. Cela me
                        permet de
                        concevoir
                        graphiquement et techniquement des solutions sur mesure en prenant en compte l’humain et ses
                        comportements.
                    </p>
                </div>
                <a href="{{ route('realisations') }}" title="Voir mes réalisations" class="button">
                    Voir mes réalisations
                </a>
            </div>
            <div class="col-12 col-md-5 background-secondary">
                <div class="profil-picture mb-5">
                    {!! pictureTag('data/images/pierre-faucheur', 'Photo de profil Pierre Faucheur - intégrateur web et webdesigner en Normandie',) !!}
                </div>
                <div class="coordonnees d-flex flex-column justify-center">
                    @include ('coords')
                </div>
            </div>
        </div>
    </div>
@endsection
