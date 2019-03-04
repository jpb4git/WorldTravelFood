<style>

    div.dropdown-menu a {
        font-family: 'Nunito', sans-serif;
    }

    a.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav {
        font-family: Amatic SC, cursive;
    }

    a.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
        color: #67c7c6;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #2a2a2a;
    }

    .dropdown-item:focus, .dropdown-item:hover {
        opacity: 0.8;
        background-color: #67c7c6;
    }

    a.nav-link {
        letter-spacing: 0.1rem;
    }

    nav {
        color: #ffffff;
        font-size: 20px;
        font-weight: bold;
    }

    hr.style1 {
        border-top: 6px solid #67c7c6;
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 5rem;
        padding-left: .5rem;
    }


</style>

<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">

<hr class="style1">

<nav class="navbar-light navbar-expand-lg navbar-expand-sm navbar-expand-md">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-center collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav justify-content-center">

            <li class="nav-item">
                <a class="nav-link" href="#">ACCUEIL</a>
            </li>
            <li class="nav-item dropdown">

            <li class="nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false" href="{{-- route('layouts.pays.showAll') --}}">CONTINENTS</a>
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
                   aria-expanded="false" href="{{--route('layouts.cat.showAll') --}}">CATÉGORIES</a>
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
                <a class="nav-link" href="{{--route('layouts.concept.showAll') --}}">LE CONCEPT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{--route('layouts.contact.showAll') --}}">CONTACT</a>
            </li>
        </ul>
    </div>
</nav>