<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">


<div id="mySidenav" class="sidenav">

    <a class="justify-content-center align-items-center logo" href="{{route('index')}}">
        <div class="wrapper-logo-admin d-flex flex-row justify-content-center align-items-center">
            <img src="{{asset('assets/images/logo.png')}}" class="adminImgLogo" alt="Responsive image">Administration
        </div>
    </a>


    <a href="/admin"><i class="far fa-address-book"></i> Users</a>
    <a href="//admin"><i class="fas fa-fingerprint"></i> Droits</a>
    <hr>
    <a href="{{route('cat.index')}}"> <i class="fas fa-archive"></i> Categories</a>
    <a href="{{route('product.index')}}"><i class="fas fa-carrot"></i> Produits</a>
    <a href="/admin"><i class="fas fa-globe"></i> Pays</a>
    <hr>
    <a href="/admin"><i class="far fa-clipboard"></i> Commandes</a>
    <a href="/admin"><i class="fas fa-gift"></i> Cadeaux</a>
    <a href="/admin"><i class="fas fa-truck"></i> Transporteurs</a>
    <a href="/admin"><i class="far fa-address-card"></i> Clients</a>
    <hr>
    <a href="{{route('home.index')}}"><i class="fas fa-sign-out-alt"></i> Exit</a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>
