<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">



</head>

<body>

<header>

    <div class="container-fluid bg-primary ">

        <div class="row ">
            <div class="col p-2 text-white d-flex justify-content-center  ">
                <i class="font-family fas fa-shipping-fast fa-1x "> Livraison offerte dès 50€ d'achat !!</i>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-secondary p-3">

        <div class="row ">
            <div class="col-lg-2">
                <div class="input-group d-flex justify-content-start">
                    <input type="text" class="form-control" placeholder="recherche">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <a class="nav-link text-decoration-none text-dark " href="#">
                        <i class="fas fa-user"> Mon compte</i>
                    </a>
                    <span class="border-right"></span>
                    <a class="nav-link text-decoration-none text-dark " href="{{route('panier.recapitulatif')}}">
                        <i class="fas fa-shopping-basket"> Mon panier</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col">
            <div class="d-flex justify-content-center p-2">
                <img src="{{asset('assets/images/logo.png')}}" id="header-logo" class="img-fluid size"
                     alt="Responsive image">
            </div>
        </div>
    </div>

</header>


<hr class="style1">

<nav class="navbar-light navbar-expand-lg navbar-expand-sm navbar-expand-md">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-center collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav justify-content-center">

            <li class="nav-item">
                <a class="nav-link" href="{{route('home.index')}}">ACCUEIL</a>
            </li>
            <li class="nav-item dropdown">

            <li class="nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false" href="{{--route('layouts.pays.showAll')--}}">CONTINENTS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Amérique</a>
                    <a class="dropdown-item" href="#">Asie</a>
                    <a class="dropdown-item" href="#">Afrique</a>
                    <a class="dropdown-item" href="#">Europe</a>
                    <a class="dropdown-item" href="#">Océanie</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Autres</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false" href="{{--route('layouts.cat.showAll')--}}">CATÉGORIES</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Boissons</a>
                    <a class="dropdown-item" href="#">Bonbons</a>
                    <a class="dropdown-item" href="#">Food</a>
                    <a class="dropdown-item" href="#">Apéritif</a>
                    <a class="dropdown-item" href="#">Vegan</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Autres</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{--route('layouts.concept.showAll')--}}">LE CONCEPT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{--route('layouts.contact.showAll')--}}">CONTACT</a>
            </li>
        </ul>
    </div>
</nav>

    <div>
        @yield('content')
    </div>

<footer class="container-fluid blue p-4">
    <div class="avantages row no-gutters row no-gutters justify-content-center text-center pb-3">
        <div class="col-12, col-md-6, col-lg-3">
            <a href="">
                <i class="fab fa-cc-paypal "></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
                <i class="fab fa-cc-visa"></i>
                Paiement sécurisé
            </a>
        </div>
        <div class="col-12, col-md-6, col-lg-3">
            <a href="">
                <i class="fas fa-shopping-bag"></i>
                Take away
            </a>
        </div>
        <div class="col-12, col-md-6, col-lg-3">
            <a href="" >
                <i class="fas fa-shipping-fast"></i>
                Livraison sous 24 heures
            </a>
        </div>

    </div>
    <div class="row no-gutters justify-content-center text-center">
        <div class="col-12, col-md-6, col-lg-3">
            <a>
                <img class="logo" src="{{asset('assets/images/logo-WTF-vertical.png')}}" alt="logo world travel food">
            </a>
            <a href="">Service client</a>
        </div>
        <div class="col-12, col-md-6, col-lg-3">
            <a href="">
                <i class="fas fa-envelope"></i>
                Contact
            </a>
        </div>
        <div class="col-12, col-md-6, col-lg-3">
            <form action="" method="post">
                <div class="form-inline">
                    <label for="mail" class="mr-3">S'inscrire à la newsletter</label>
                    <input type="email" class="form-control" name="mail" placeholder="email">
                    <button type="submit" name="submitNewsletter" class="btn btn-success">OK</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row justify-content-center py-4">
        <a href="" class="mx-2">
            <img class="RSociaux" src="{{asset('assets/images/facebook.png')}}" alt="logo facebook">
        </a>
        <a href="" class="mx-2">
            <img class="RSociaux" src="{{asset('assets/images/instagram.png')}}" alt="logo instagram">
        </a>
        <a href="" class="mx-2">
            <img class="RSociaux" src="{{asset('assets/images/youtube.png')}}" alt="logo youtube">
        </a>
        <a href="" class="mx-2">
            <img class="RSociaux" src="{{asset('assets/images/twitter.png')}}" alt="logo twitter">
        </a>
        <a href="" class="mx-2">
            <img class="RSociaux" src="{{asset('assets/images/pinterest.png')}}" alt="logo pinterest">
        </a>
    </div>
    <div class="legal row justify-content-center">
        <a href="" class="px-5 py-2">Conditions générales de vente</a>
        <a href="" class="px-5 py-2">Mentions légales</a>
        <a href="" class="px-5 py-2">Politique de confidentialité</a>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>
