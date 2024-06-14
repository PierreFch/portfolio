@extends('layout')

@section('body-class', 'realisations')

@section('content')
    <div class="page pageRealisations">
        <section class="hero">
            <div class="parallax"></div>
            <div class="container d-flex flex-wrap align-items-center h-100">
                <div class="container--top w-100">
                    <h1>Mes réalisations</h1>
                    <p class="w-75 mx-auto">
                        Découvrez mon portfolio de réalisations en webdesign et développement front-end. Je mets à votre
                        disposition mes créations qui
                        témoignent de ma passion pour la conception web. Plongez dans mes réalisations fictives (ou presque)
                        et prenons le temps d'en discuter autour d'un café (ou d'un thé) !
                    </p>
                </div>
                <div class="container--bottom w-100 align-self-end">
                    <a href="#realisations" title="Voir mes réalisations">
                        Voir mes réalisations
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 10.6673L9 18.6673L1 10.6673M9 17.5562L9 1.33398" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <section id="realisations" class="container">
            {{-- <div class="filter">
                <button id="btn-toutes-categories" class="active">Toutes les catégories</button>
                <button id="btn-webdesign">Webdesign</button>
                <button id="btn-integration-web">Intégration web</button>
                <button id="btn-developpement-web">Développement web</button>
                <button id="btn-wordpress">WordPress</button>
            </div> --}}
            @if (Auth::user())
                <div class="action add">
                    <a href="{{ route('realisation.create') }}" title="Ajouter une réalisation" class="button box">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M256 112v288M400 256H112" />
                        </svg>
                        Ajouter une réalisation
                    </a>
                </div>
            @endif
            <div class="realisations--content row">
                @foreach ($realisations as $realisation)
                    <article class="element realisation col-12 col-md-4 {{ $realisation->categorie }}">
                        @if (Auth::user())
                            <div class="actions">
                                <a href="{{ route('realisation.edit', $realisation) }}" class="edit box">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                        <path
                                            d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path
                                            d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="{{ route('realisation.delete', $realisation) }}" class="delete box">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                        <path
                                            d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                        <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                            stroke-width="32" d="M80 112h352" />
                                        <path
                                            d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" />
                                    </svg>
                                </a>
                            </div>
                        @endif
                        <span class="realisation--category">{{ $categories[$realisation->categorie] }}</span>
                        <div class="realisation--picture">
                            <a href="{{ route('realisation.show', $realisation->slug) }}"
                                title="En voir plus sur {{ $realisation->titre }}">
                                <img src="{{ URL::asset('picture') . '/' . $realisation->image }}"
                                    alt="{{ $realisation->titre }}" title="{{ $realisation->titre }}">
                            </a>
                        </div>
                        <div class="realisation--content">
                            <h3 class="card-title text-uppercase">{{ $realisation->titre }}</h3>
                            <div class="description">
                                <p>
                                    {!! Str::limit($realisation->{'contexte-objectif'}, 200) !!}
                                </p>
                            </div>
                            <a href="{{ route('realisation.show', $realisation->slug) }}"
                                title="En voir plus sur {{ $realisation->titre }}" class="button button--border">En savoir
                                plus</a>
                        </div>
                    </article>
                @endforeach
                {{ $realisations->links('pagination::bootstrap-4') }}
            </div>
        </section>
    </div>
@endsection
