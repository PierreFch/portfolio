<?php
require_once 'portfolio/vendor/autoload.php';
?>

@php
    use Illuminate\Support\Facades\Request;
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pierre Faucheur">
    <meta name="keywords" content="Webdesign, Développement front-end, UX/UI design, Intégration web, HTML, CSS, JavaScript, Responsive design, Conception graphique,Expérience utilisateur, Accessibilité web">
    <meta name="description" content="Webdesigner et développeur front-end, j'offre mon expertise à vos besoins en m'adaptant à chaque projet web dans une démarche centrée utilisateur (user centric)">

    @if(Route::currentRouteName() == 'auth.login')
        <meta name="robots" content="noindex, nofollow">
    @endif

    <title>Pierre Faucheur - webdesigner et développeur front-end</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('data/images/favicon.png') }}">

    <!-- Fonts -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('data/css/main.css') }}">
</head>

<body class="@yield('body-class', '')">
    <header>
        @if (Auth::user())
            <div class="logged">
                <div class="container">
                    Connecté
                </div>
            </div>
        @endif
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"
                            @if(request()->routeIs('home')) aria-current="page" @endif>
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z" />
                            </svg>                            
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('realisations') }}"
                            class="{{ request()->routeIs('realisations') ? 'active' : '' }}"
                            @if(request()->routeIs('realisations')) aria-current="page" @endif>
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M21 6c0-1.654-1.346-3-3-3a2.993 2.993 0 0 0-2.815 2h-6.37A2.993 2.993 0 0 0 6 3C4.346 3 3 4.346 3 6c0 1.302.839 2.401 2 2.815v6.369A2.997 2.997 0 0 0 3 18c0 1.654 1.346 3 3 3a2.993 2.993 0 0 0 2.815-2h6.369a2.994 2.994 0 0 0 2.815 2c1.654 0 3-1.346 3-3a2.997 2.997 0 0 0-2-2.816V8.816A2.996 2.996 0 0 0 21 6zm-3-1a1.001 1.001 0 1 1-1 1c0-.551.448-1 1-1zm-2.815 12h-6.37A2.99 2.99 0 0 0 7 15.184V8.816A2.99 2.99 0 0 0 8.815 7h6.369A2.99 2.99 0 0 0 17 8.815v6.369A2.99 2.99 0 0 0 15.185 17zM6 5a1.001 1.001 0 1 1-1 1c0-.551.448-1 1-1zm0 14a1.001 1.001 0 0 1 0-2 1.001 1.001 0 0 1 0 2zm12 0a1.001 1.001 0 0 1 0-2 1.001 1.001 0 0 1 0 2z" />
                            </svg>                            
                            Réalisations
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                            @if(request()->routeIs('contact')) aria-current="page" @endif>
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z" />
                            </svg>                            
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/pierre-faucheur" target="_blank" class="social-link" aria-label="Consulter le profil LinkedIn de Pierre Faucheur (ouverture dans une nouvelle fenêtre)">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.98 3.5C4.98 4.881 3.87 6 2.5 6C1.13 6 0.02 4.881 0.02 3.5C0.02 2.12 1.13 1 2.5 1C3.87 1 4.98 2.12 4.98 3.5ZM5 8H0V24H5V8ZM12.982 8H8.014V24H12.983V15.601C12.983 10.931 19.012 10.549 19.012 15.601V24H24V13.869C24 5.989 15.078 6.276 12.982 10.155V8Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @if (!Request::is('contact'))
            <div class="footer--top">
                <div class="container">
                    <h2>Réfléchissons et concevons ensemble</h2>
                    <div class="coordonnees d-flex flex-wrap justify-center">
                        @include ('coords')
                    </div>
                </div>
            </div>
        @endif
        <div class="footer--bottom">
            <div class="container">
                © Pierre Faucheur - 2023
                <nav>
                    <ul>
                        <li>
                            <a href="{{ route('mentions') }}">Mentions légales</a>
                        </li>
                        @if (Auth::user())
                            <li>
                                <a href="{{ route('auth.signout') }}">Déconnexion</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

    <script src="{{ asset('data/js/script.js') }}"></script>
    <script src="{{ asset('data/js/tinymce/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('data/js/form.js') }}"></script>
    <script src="{{ asset('data/js/fslightbox.js') }}"></script>
</body>

</html>
