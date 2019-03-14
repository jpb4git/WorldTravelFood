<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">


<div id="mySidenav" class="sidenav">

    <a class="justify-content-center align-items-center logo" href="{{route('index')}}">
        <div class="wrapper-logo-admin d-flex flex-row justify-content-center align-items-center">
            <img src="{{asset('assets/images/logo.png')}}" class="adminImgLogo" alt="Responsive image">
        </div>
    </a>


    <a href="/admin"><i class="far fa-address-book"></i></a>
    <a href="//admin"><i class="fas fa-fingerprint"></i></a>
    <hr>
    <a href="{{route('cat.index')}}"> <i class="fas fa-archive"></i></a>
    <a href="{{route('product.index')}}"><i class="fas fa-carrot"></i></a>
    <a href="/admin"><i class="fas fa-globe"></i></a>
    <hr>
    <a href="/admin"><i class="far fa-clipboard"></i></a>
    <a href="/admin"><i class="fas fa-gift"></i></a>
    <a href="/admin"><i class="fas fa-truck"></i></a>
    <a href="/admin"><i class="far fa-address-card"></i> </a>
    <hr>
    <a href="{{route('home.index')}}"><i class="fas fa-sign-out-alt"></i></a>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()">open</span>
