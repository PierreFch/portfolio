@extends('layout')

@section('body-class', 'realisation')

@section('content')
    <div class="page pageRealisation container">
        <section>
            @if (Auth::user())
                <div class="actions">
                    <a href="{{ route('realisation.edit', $realisation) }}" title="Modifier la réalisation">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                            <path d="M384 224v184a40 40 0 01-40 40H104a40 40 0 01-40-40V168a40 40 0 0140-40h167.48"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" />
                            <path
                                d="M459.94 53.25a16.06 16.06 0 00-23.22-.56L424.35 65a8 8 0 000 11.31l11.34 11.32a8 8 0 0011.34 0l12.06-12c6.1-6.09 6.67-16.01.85-22.38zM399.34 90L218.82 270.2a9 9 0 00-2.31 3.93L208.16 299a3.91 3.91 0 004.86 4.86l24.85-8.35a9 9 0 003.93-2.31L422 112.66a9 9 0 000-12.66l-9.95-10a9 9 0 00-12.71 0z"
                                fill="currentColor" />
                        </svg>
                    </a>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('realisations') }}#realisations" title="Retour aux réalisations"
                        class="button button--back">Retour aux réalisations</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 picture">
                    <img src="{{ URL::asset('picture') . '/' . $realisation->image }}" alt="{{ $realisation->titre }}"
                        title="{{ $realisation->titre }}">
                    <div class="gallery row">
                        @if (Auth::user())
                            <div class="col-12">
                                <form action="{{ route('realisation.update', $realisation) }}" method="POST"
                                    enctype="multipart/form-data" class="upload">
                                    @csrf
                                    @method('PUT')
                                    <input type="file" name="images[]" multiple>
                                    <input type="submit" value="Ajouter l'image">
                                </form>
                            </div>
                        @endif
                        @if ($images)
                            @foreach ($images as $image)
                                <div class="col-4 gallery--image">
                                    <a data-fslightbox="" href="{{ URL::asset('picture') . '/' . $image }}">
                                        <img src="{{ URL::asset('picture') . '/' . $image }}" alt="Image">
                                    </a>
                                    @if (Auth::user())
                                        <form action="{{ route('realisation.image.remove', [$realisation, $image]) }}"
                                            method="POST" class="delete">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Supprimer">
                                        </form>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-6 text">
                    <div class="d-flex flex-wrap">
                        <div class="content--top w-100">
                            <h1>{{ $realisation->titre }}</h1>
                            <div class="description">
                                {!! $realisation->{'contexte-objectif'} !!}
                            </div>
                            <div class="details">
                                @if ($realisation->{'participation-individuelle'})
                                    <details>
                                        <summary>Participation individuelle</summary>
                                        {!! $realisation->{'participation-individuelle'} !!}
                                    </details>
                                @endif

                                @if ($realisation->{'analyse-critique'})
                                    <details>
                                        <summary>Analyse critique</summary>
                                        {!! $realisation->{'analyse-critique'} !!}
                                    </details>
                                @endif

                                @if ($realisation->{'resultats'})
                                    <details>
                                        <summary>Résultats</summary>
                                        {!! $realisation->{'resultats'} !!}
                                    </details>
                                @endif
                            </div>
                        </div>
                        <div
                            class="content--bottom w-100 d-flex align-items-center justify-between flex-wrap align-self-end">
                            <div class="location">
                                <svg width="27" height="37" viewBox="0 0 27 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.4389 2C7.12369 2 2 6.87664 2 12.8829C2 19.7939 9.62596 30.7459 12.4261 34.5287C12.5424 34.6884 12.6947 34.8183 12.8707 34.9079C13.0467 34.9975 13.2414 35.0442 13.4389 35.0442C13.6364 35.0442 13.8312 34.9975 14.0072 34.9079C14.1832 34.8183 14.3355 34.6884 14.4518 34.5287C17.2519 30.7475 24.8779 19.7995 24.8779 12.8829C24.8779 6.87664 19.7542 2 13.4389 2Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.439 17.2519C15.5448 17.2519 17.2519 15.5448 17.2519 13.439C17.2519 11.3331 15.5448 9.62598 13.439 9.62598C11.3331 9.62598 9.62598 11.3331 9.62598 13.439C9.62598 15.5448 11.3331 17.2519 13.439 17.2519Z"
                                        stroke="currentColor" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                {{ $realisation->localisation }}
                            </div>
                            <div class="year">
                                <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.2329 4.54199H5.81298C3.70713 4.54199 2 6.24912 2 8.35497V31.2329C2 33.3387 3.70713 35.0458 5.81298 35.0458H31.2329C33.3387 35.0458 35.0458 33.3387 35.0458 31.2329V8.35497C35.0458 6.24912 33.3387 4.54199 31.2329 4.54199Z"
                                        stroke="currentColor" stroke-width="3" stroke-linejoin="round" />
                                    <path d="M8.35497 2V4.54199M28.6909 2V4.54199M35.0458 10.897H2" stroke="currentColor"
                                        stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                {{ $realisation->annee }}
                            </div>
                            <div class="duration">
                                <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.2519 2C8.83159 2 2 8.83159 2 17.2519C2 25.6723 8.83159 32.5038 17.2519 32.5038C25.6723 32.5038 32.5038 25.6723 32.5038 17.2519C32.5038 8.83159 25.6723 2 17.2519 2Z"
                                        stroke="currentColor" stroke-width="3" stroke-miterlimit="10" />
                                    <path d="M17.252 7.08398V18.5229H24.8779" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                {{ $realisation->duree }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php /*
        <section>
            <h2>Mes autres réalisations</h2>
            <div class="row justify-center">
                @foreach ($realisations->take(4) as $otherRealisation)
                    <article class="element realisation col-md-4">
                        <span class="realisation--category">{{ $categories[$realisation->categorie] }}</span>
                        <div class="realisation--picture">
                            <a href="{{ route('realisation.show', ['title' => $otherRealisation->slug]) }}" title="En voir plus sur {{ $otherRealisation->titre }}">
                                <img src="{{ URL::asset('picture') . '/' . $otherRealisation->image }}" alt="{{ $otherRealisation->titre }}" title="{{ $otherRealisation->titre }}">
                            </a>
                        </div>
                        <div class="realisation--content">
                            <h3 class="card-title text-uppercase">{{ $otherRealisation->titre }}</h3>
                            <div class="description">
                                {!! Str::limit($otherRealisation->{'contexte-objectif'}, 200) !!}
                            </div>
                            <a href="{{ route('realisation.show', ['title' => $otherRealisation->slug]) }}"
                                title="En voir plus sur {{ $otherRealisation->titre }}" class="button button--border">En savoir plus</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section> */
        ?>
    </div>
@endsection
