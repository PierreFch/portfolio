@extends ('layout')
@include('php.functions')

@section('body-class', 'mentions')

@section('content')
    <div class="page pageMentions container my-2">
        <h1>Mentions légales</h1>
        <section>
            <h2>Informations légales</h2>
            <div class="description">
                <p>
                    Téléphone : 06 43 82 56 51
                </p>
                <p>
                    Email : <a href="mailto:contact@pierrefaucheur.fr">contact@pierrefaucheur.fr</a>
                </p>
            </div>
        </section>
        <section>
            <h2>Responsable de la publication</h2>
            <div class="description">
                <p>
                    Nom : Pierre Faucheur
                </p>
                <p>
                    Téléphone : 06 43 82 56 51
                </p>
                <p>
                    Email : <a href="mailto:contact@pierrefaucheur.fr">contact@pierrefaucheur.fr</a>
                </p>
            </div>
        </section>
        <section>
            <h2>Hébergement</h2>
            <div class="description">
                <p>
                    Nom de l'hébergeur : OVH
                </p>
                <p>
                    Adresse : 2 Rue Kellermann - 59100 ROUBAIX
                </p>
                <p>
                    Téléphone : 09 72 10 10 07
                </p>
                <p>
                    Numéro SIRET :424 761 419 00045
                </p>
            </div>
        </section>
        <section>
            <h2>Propriété intellectuelle</h2>
            <div class="description">
                <p>
                    Le contenu du site, incluant les textes, images, vidéos, etc., est la propriété de Pierre Faucheur
                    et est protégé par les lois sur la propriété intellectuelle. Toute reproduction ou utilisation sans
                    autorisation est strictement interdite.
                </p>
            </div>
        </section>
        <section>
            <h2>Liens externes</h2>
            <div class="description">
                <p>
                    Le site peut contenir des liens vers des sites externes. Pierre Faucheur n'est pas responsable du
                    contenu de ces sites et décline toute responsabilité quant à leur contenu ou à leur utilisation.
                </p>
            </div>
        </section>
        <section>
            <h2>Collecte de données personnelles</h2>
            <div class="description">
                <p>
                    Aucune donnée personnelle n'est collectée sur le site internet.
                </p>
            </div>
        </section>
        <section>
            <h2>Cookies</h2>
            <div class="description">
                <p>
                    Le site utilise des cookies pour améliorer votre expérience de navigation. Vous pouvez gérer les cookies
                    dans les paramètres de votre navigateur.
                </p>
            </div>
        </section>
    </div>
@endsection
