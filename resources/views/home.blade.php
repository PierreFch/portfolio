@extends ('layout')

@section('body-class', 'home')

@section('content')
    <div class="page pageHome">
        <section class="hero">
            <div class="parallax"></div>
            <div class="container">
                <h1>Pierre <span>Faucheur</span><small>Webdesigner & développeur front-end</small></h1>
                <a href="{{ route('realisations') }}" title="Voir mes réalisations" class="button">
                    Voir mes réalisations
                </a>
            </div>
        </section>
        <section class="competences">
            <div class="container">
                <h2>Mes compétences <span>à votre service</span></h2>
                <div class="row">
                    <div class="col-12 col-md-6 encart">
                        <div class="encart--top">
                            <div class="picto">
                                <svg width="59" height="51" viewBox="0 0 59 51" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.9446 36.8935H6.6652C3.00403 36.8935 0 34.0869 0 30.6658V6.71789C0 3.29633 3.00403 0.489258 6.6652 0.489258H47.2197C50.8808 0.489258 53.8849 3.29633 53.8849 6.71789V8.42846H49.4257V6.71789C49.4257 5.57752 48.44 4.65601 47.2197 4.65601H6.6652C5.44481 4.65601 4.45911 5.57752 4.45911 6.71789V30.7092C4.45911 31.8495 5.44481 32.7711 6.6652 32.7711H16.9446V36.8935Z"
                                            fill="currentColor" />
                                    </g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M53.8642 42.8087H44.6871V38.5368H53.8642C54.1971 38.5368 54.4828 38.267 54.4828 37.9523V18.122C54.4828 17.8072 54.1971 17.5374 53.8642 17.5374H32.8947C32.5618 17.5374 32.277 17.8072 32.277 18.122V19.7408H27.7598V18.122C27.7598 15.4689 30.0417 13.3105 32.8476 13.3105H53.8167C56.6226 13.3105 58.905 15.4689 58.905 18.122V37.9523C58.9521 40.6058 56.6697 42.8087 53.8642 42.8087Z"
                                            fill="currentColor" />
                                    </g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M25.5446 46.4532H35.9211V27.3337H25.5446V46.4532ZM36.0553 50.702H25.4104C23.1741 50.702 21.3403 48.8488 21.3403 46.5888V27.1981C21.3403 24.9381 23.1741 23.085 25.4104 23.085H36.1C38.3363 23.085 40.1701 24.9381 40.1701 27.1981V46.5888C40.1701 48.8488 38.3363 50.702 36.0553 50.702Z"
                                            fill="currentColor" />
                                    </g>
                                </svg>
                            </div>
                            <h3>Webdesign <span>UX et UI design</span></h3>
                        </div>
                        <div class="encart--bottom">
                            <p>
                                Passionné par le webdesign, je fusionne esthétique et fonctionnalité pour créer des
                                expériences
                                utilisateur uniques. Mon approche centrée sur l'utilisateur me permet de concevoir des
                                interfaces accessibles qui facilitent l'interaction et la navigation.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 encart">
                        <div class="encart--top">
                            <div class="picto">
                                <svg width="68" height="68" viewBox="0 0 68 68" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.2615 61H28.0077V55.5H25.2917C24.4459 55.4835 17.0231 55.0242 17.0231 44.5C17.0231 39.0192 15.1969 35.5735 12.8983 33.5C15.1969 31.4265 17.0231 27.9808 17.0231 22.5C17.0231 11.9758 24.4459 11.5165 25.2615 11.5H28.0077V6H25.256C20.5079 6.011 11.5308 9.476 11.5308 22.5C11.5308 30.2 6.92271 30.7225 6 30.75L6.03845 36.25C6.26363 36.25 11.5308 36.3435 11.5308 44.5C11.5308 57.524 20.5079 60.989 25.2615 61ZM60.9616 30.75C60.7364 30.75 55.4692 30.6565 55.4692 22.5C55.4692 9.476 46.4921 6.011 41.7385 6H38.9923V11.5H41.7083C42.5541 11.5165 49.9769 11.9758 49.9769 22.5C49.9769 27.9808 51.8031 31.4265 54.1017 33.5C51.8031 35.5735 49.9769 39.0192 49.9769 44.5C49.9769 55.0242 42.5541 55.4835 41.7385 55.5H38.9923V61H41.744C46.4921 60.989 55.4692 57.524 55.4692 44.5C55.4692 36.8 60.0773 36.2775 61 36.25L60.9616 30.75Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <h3>Intégration web <span>HTML, SCSS, JavaScript, jQuery et Vue JS</span></h3>
                        </div>
                        <div class="encart--bottom">
                            <p>
                                Fort d'une expérience en intégration web avec plus de 50 projets et 2 ans d'activité en
                                entreprise, je m'assure de veiller aux
                                respect des normes et des bonnes pratiques pour assurer une expérience utilisateur optimale.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 encart">
                        <div class="encart--top">
                            <div class="picto">
                                <svg width="73" height="73" viewBox="0 0 73 73" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.1272 14L0 36.5L22.1272 59L27.6096 53.4253L10.9647 36.5L27.6096 19.5747L22.1272 14ZM50.8728 59L73 36.5L50.8728 14L45.3904 19.5747L62.0353 36.5L45.3904 53.4253L50.8728 59Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                            <h3>Développement web <span>PHP et Laravel</span></h3>
                        </div>
                        <div class="encart--bottom">
                            <p>
                                Ayant des bases PHP, j'aime m'amuser avec Laravel pour développer des petites applications
                                web. À titre d'exemple, j'ai pu développer un outil de génération de factures et la création
                                d'un CRUD pour la gestion des réalisations présentes sur mon portfolio.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 encart">
                        <div class="encart--top">
                            <div class="picto">
                                <svg width="58" height="58" viewBox="0 0 58 58" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_813_261)">
                                        <path
                                            d="M51.8839 16.4923C53.9807 20.3274 55.0768 24.6292 55.071 29C55.0721 33.5624 53.8754 38.0452 51.6006 42C49.3257 45.9548 46.0524 49.243 42.108 51.5359L50.0714 28.5128C51.5591 24.795 52.055 21.8167 52.055 19.1777C52.0561 18.2798 51.9989 17.3828 51.8839 16.4923ZM32.596 16.7446C33.5906 16.6957 34.583 16.6106 35.5714 16.4894C36.9779 16.3067 36.8126 14.2419 35.409 14.3173C35.409 14.3173 31.1663 14.6421 28.449 14.6421C25.8767 14.6421 21.5615 14.2796 21.5615 14.2796C20.1492 14.21 19.9665 16.3473 21.3846 16.4198C21.3846 16.4198 22.6867 16.5706 24.1048 16.6373L28.1619 27.7675L22.4344 44.8746L12.9398 16.675C13.9357 16.6249 14.9299 16.5447 15.921 16.4343C17.3333 16.2516 17.168 14.1868 15.7615 14.268C15.7615 14.268 11.542 14.6015 8.816 14.6015C8.3317 14.6015 7.7575 14.5812 7.1485 14.5638C11.8697 7.6125 19.8998 2.9348 29 2.9348C35.7889 2.9348 41.9659 5.5274 46.6059 9.7788C46.4957 9.773 46.3855 9.7556 46.2666 9.7556C43.7059 9.7556 41.8876 11.9886 41.8876 14.384C41.8876 16.5329 43.1259 18.3541 44.4483 20.4972C45.443 22.2401 46.6001 24.4702 46.6001 27.6921C46.6001 29.9048 45.7446 32.5119 44.6136 36.0992L42.0152 44.7615L32.5902 16.704L32.596 16.7446ZM29 55.0594C26.5068 55.0618 24.0262 54.7063 21.634 54.0038L29.4553 31.2736L37.468 53.2324C37.5289 53.36 37.5898 53.4789 37.6565 53.592C34.8747 54.5676 31.9479 55.0656 29 55.0652M2.929 29C2.92477 25.3444 3.69366 21.7293 5.1852 18.3918L17.6175 52.4639C13.2137 50.3257 9.50071 46.9911 6.90314 42.8417C4.30557 38.6922 2.92835 33.8954 2.929 29ZM29 0C13.0123 0 0 13.0123 0 29C0 44.9877 13.0123 58 29 58C44.9877 58 58 44.9877 58 29C58 13.0123 44.9877 0 29 0Z"
                                            fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_813_261">
                                            <rect width="58" height="58" fill="currentColor" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3>WordPress <span>Elementor, Divi et thème personnalisé</span></h3>
                        </div>
                        <div class="encart--bottom">
                            <p>
                                Avec plusieurs expériences dans la création de sites e-commerce et de sites vitrine, je
                                m'adapte aux besoins spécifiques de chaque projets. Je suis opérationnel sur différents
                                constructeurs
                                de page, tels qu'Elementor, Divi ou le développement sur mesure d'un thème personnalisé.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <a href="{{ route('contact') }}" title="Me contacter" class="button">
                        Me contacter
                    </a>
                </div>
            </div>
        </section>
        <section class="experience">
            <div class="container">
                <h2>Mon expérience</h2>
                <div class="row">
                    <div class="col-12 experience-line">
                        <div class="row">
                            <div class="circle">
                                <span></span>
                            </div>
                            <div class="text">
                                <h3>Intégrateur web</h3>
                                <div class="data">
                                    <p>2021 - aujourd'hui</p>
                                    <p class="location">Nerepix à Caen (14)</p>
                                </div>
                                <div class="description">
                                    <p>
                                        En tant qu'intégrateur web chez Nerepix, j'ai acquis une solide expérience en
                                        réalisant des intégrations web sur mesure, en respectant les normes du web.
                                        J'ai eu l'opportunité de travailler sur une multitude de projets différents, en
                                        collaborant étroitement avec les différentes équipes de l'agence.
                                    </p>
                                    <div class="missions">
                                        <h4>Mes missions</h4>
                                        <ul>
                                            <li>
                                                Intégration web : par le biais des langages HTML, CSS (SCSS) et JavaScript,
                                                je
                                                mets en forme
                                                les sites internet à l'aide de maquettes graphiques.
                                            </li>
                                            <li>
                                                Chef de projet : chargé du suivi des projets et du respect des délais, je
                                                fais
                                                preuve d'organisation pour maintenir une communication et un suivi
                                                rigoureux.
                                            </li>
                                            <li>
                                                COPIL : en tant que membre du co-pilotage de l'entreprise, j'accompagne les
                                                gérants dans la gestion de l'entreprise et suis activement impliqué dans la
                                                vie
                                                de l'agence.
                                            </li>
                                            <li>
                                                Représentant technique sur le réseau professionnel Pause café Caen.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 experience-line">
                        <div class="row">
                            <div class="circle">
                                <span></span>
                            </div>
                            <div class="text">
                                <h3>Chef de projet web</h3>
                                <div class="data">
                                    <p>2021</p>
                                    <p class="location">L'Agence Eponyme à Chambéry (73)</p>
                                </div>
                                <div class="description">
                                    <p>
                                        Pour ma première expérience professionnelle dans le web, j'ai eu l'opportunité
                                        d'exercer un stage de huit semaines en tant que chef de projet web.
                                        Ma mission principale était de développer un site e-commerce avec WordPress et
                                        Woocommerce pour
                                        LIKEN France, spécialiste en mobilier de sécurité incendie à Chambéry (Savoie).
                                    </p>
                                    <div class="missions">
                                        <h4>Mes missions</h4>
                                        <ul>
                                            <li>
                                                Développement d'un site e-commerce avec WordPress et Woocommerce. J'ai été
                                                en charge de la gestion, de l'organisation et de l'exécution des actions.
                                            </li>
                                            <li>
                                                Maintenance du site internet de la brasserie BAS (Brasserie Artisanale de
                                                Sabaudia) : mise à jour des interfaces, intégration web, référencement
                                                naturel et prise en charge des bugs et des demandes de modifications.
                                            </li>
                                            <li>
                                                Print : mise à jour du catalogue produits de LIKEN France.
                                            </li>
                                            <li>
                                                Veille graphique
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 experience-line">
                        <div class="row">
                            <div class="circle">
                                <span></span>
                            </div>
                            <div class="text">
                                <h3>Conseiller technicien cycle</h3>
                                <div class="data">
                                    <p>2019 - 2020</p>
                                    <p class="location">Technopolys à La Motte-Servolex (73)</p>
                                </div>
                                <div class="description">
                                    <p>
                                        Avant le web, j'ai suivi une formation en alternance dans la vente et maintenance
                                        de vélos. En théorie, mon rôle était de travailler en atelier et d'aller au contact
                                        des clients dans une démarche de conseil sur les modèles en exposition. En pratique,
                                        j'ai fait de
                                        la vente d'articles de sport (skis, chaussures de trail...), de la location et
                                        maintenance de skis et de l'emballage de commandes.
                                    </p>
                                    <div class="missions">
                                        <h4>Mes missions</h4>
                                        <ul>
                                            <li>
                                                Vente d'articles de sport : chaussures de trail ou de randonnées, skis
                                                alpins, chaussures de ski, sacs...
                                            </li>
                                            <li>
                                                Location hivernale : skis alpins, skis de fond, snowboards, raquettes à
                                                neige et fartage des skis et snowboards en atelier.
                                            </li>
                                            <li>
                                                Location estivale de vélos : VTT, VTC et route.
                                            </li>
                                            <li>
                                                Emballage de commandes internet.
                                            </li>
                                            <li>
                                                Missions diverses : pose d'adhésif sur les panneaux d'exposition,
                                                installation de caméras de sécurité, réarrangement des espaces de stockage, réception des marchandises...
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <a href="{{ route('contact') }}" title="Me contacter" class="button">
                        Me contacter
                    </a>
                </div>
            </div>
        </section>
        <section class="realisations">
            <div class="container">
                <h2>Mes dernières réalisations <span>Spécialement pour vous</span></h2>
                <div class="row">
                    @foreach ($realisations->take(3) as $realisation)
                    <article class="element realisation col-sm-6 col-md-4 {{ $realisation->categorie }}">
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
                </div>
                <div class="bottom">
                    <a href="{{ route('realisations') }}" title="Voir toutes mes réalisations"
                        class="button">
                        Voir toutes mes réalisations
                    </a>
                </div>
            </div>
        </section>
        <section class="histoire">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 pr-5 text">
                        <h2>Mon histoire</h2>
                        <h3>Intégrateur web chez Nerepix depuis 2021</h3>
                        <div class="description">
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
                        <div class="bottom">
                            <a href="{{ route('realisations') }}" title="Voir mes réalisations"
                                class="button">
                                Voir mes réalisations
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 profil-picture">
                        <img src="{{ URL::asset('data/images/pierre-faucheur.png') }}" title="" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
