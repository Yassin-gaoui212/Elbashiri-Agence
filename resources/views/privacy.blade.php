@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block">Politique de confidentialité</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    {{ $description }}
                </p>
            </div>
        </div>
    </div>

    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="prose prose-lg prose-blue mx-auto">
                <h2>Collecte des informations</h2>
                <p>
                    Nous collectons des informations lorsque vous remplissez notre formulaire de contact ou vous inscrivez à notre newsletter. Les informations collectées incluent votre nom, votre adresse e-mail et votre numéro de téléphone.
                </p>

                <h2>Utilisation des informations</h2>
                <p>
                    Les informations que nous collectons sont utilisées pour :
                </p>
                <ul>
                    <li>Vous contacter en réponse à vos demandes</li>
                    <li>Vous envoyer des informations sur nos services</li>
                    <li>Améliorer nos services et notre site web</li>
                </ul>

                <h2>Protection des informations</h2>
                <p>
                    Nous mettons en œuvre une variété de mesures de sécurité pour protéger vos informations personnelles. Nous utilisons des protocoles de cryptage pour protéger les informations sensibles transmises en ligne.
                </p>

                <h2>Divulgation à des tiers</h2>
                <p>
                    Nous ne vendons, n'échangeons ni ne transférons vos informations personnelles à des tiers. Cela ne comprend pas les tiers de confiance qui nous aident à exploiter notre site web ou à mener nos activités, tant que ces parties conviennent de garder ces informations confidentielles.
                </p>

                <h2>Consentement</h2>
                <p>
                    En utilisant notre site, vous consentez à notre politique de confidentialité.
                </p>

                <h2>Modifications de notre politique de confidentialité</h2>
                <p>
                    Si nous décidons de modifier notre politique de confidentialité, nous publierons ces modifications sur cette page.
                </p>

                <h2>Contact</h2>
                <p>
                    Si vous avez des questions concernant cette politique de confidentialité, vous pouvez nous contacter en utilisant les informations ci-dessous :
                </p>
                <ul>
                    <li>Email : elbashiriagence@gmail.com</li>
                    <li>Téléphone : +212 763212738</li>
                    <li>Adresse : Rue Exa JAMAL EDDINE EL AFGHANI , Nador, Maroc</li>
                </ul>
            </div>
        </div>
    </div>
@endsection 