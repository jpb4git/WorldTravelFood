<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">


</head>

<body>

<header>

    <div class="container-fluid bg-primary ">

        <div class="row ">
            <div class="col p-2 text-white d-flex justify-content-center  ">
                <i class="font-family fas fa-shipping-fast fa-1x"> Livraison offerte dès 50€ d'achat !!</i>
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
                    @guest
                        <a class="nav-link text-decoration-none text-dark"
                           href="{{ route('login') }}">
                            <i class="fas fa-user"></i> {{ __('Connexion') }}
                        </a>
                        <span class="border-right"></span>
                        @if (Route::has('register'))
                            <a class="nav-link text-decoration-none text-dark"
                               href="{{ route('register') }}">
                                <i class="fas fa-plus-circle"></i> {{ __('Créer mon compte') }}
                            </a>
                        @endif
                    @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/user/account">Mon compte</a>
                            <a class="dropdown-item" href="/user/addresses">Mes adresses</a>
                            <a class="dropdown-item" href="{{ route('user.orders') }}">Mes commandes</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @endguest
                    <span class="border-right"></span>
                    <a class="nav-link text-decoration-none text-dark " href="{{route('cart.index')}}">
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


<nav class="navbar-light navbar-expand-lg navbar-expand-sm navbar-expand-md mt-2">

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
                   aria-expanded="false" href="{{--route('product.index')--}}">CATÉGORIES</a>
                <div class="dropdown-menu">
                    @php
                    $categories = \App\Category::all();
                    @endphp
                    @foreach($categories as $category)
                        <a class="dropdown-item" href="{{ route('category.show', $category) }}">{{ $category->name }}</a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Autres</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('concept.index')}}">LE CONCEPT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact.index')}}">CONTACT</a>
            </li>

            <!-- Authentication Links -->

        </ul>

    </div>
</nav>

@if(Session::has('success'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif

<div>
    @yield('content')
</div>

<footer class="container-fluid bg-secondary pt-5">
    <div class="row pb-3 ">

        <div class="col-lg-4">
            <a class="text-decoration-none" href="">
                <i class="fab fa-cc-paypal fa-2x mr-3"></i>
                <i class="fab fa-cc-mastercard fa-2x mr-3"></i>
                <i class="fab fa-cc-amex fa-2x mr-3"></i>
                <i class="fab fa-cc-visa fa-2x mr-3"></i>
                Paiement sécurisé
            </a>
        </div>
        <div class="col-lg1">
            <a class="text-decoration-none" href="">
                <i class="fas fa-envelope fa-2x mr-3"></i>
                Contact
            </a>
        </div>
        <div class="col-lg-5">
            <form class="form-inline">
                <div class="form-group">
                    <label for="staticEmail2" class="sr-only">Email</label>
                    <input type="text" readonly class="form-control-plaintext text-right mr-3" id="staticEmail2"
                           value="Newsletter">
                </div>
                <div class="form-group ">
                    <input type="password" class="form-control" id="staticEmail2" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-primary ml-2">OK</button>
            </form>
        </div>
        <div class="col-lg-2">
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
    </div>
    <div class="legal row ">
        <div class="col-lg-12 d-flex justify-content-center">
            <a href="" class="px-5 py-2">Conditions générales de vente</a>
            <a href="" class="px-5 py-2">Mentions légales</a>
            <a href="" class="px-5 py-2">Politique de confidentialité</a>
        </div>
    </div>
</footer>

@yield('scripts')


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
