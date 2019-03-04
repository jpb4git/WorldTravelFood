<header>

    <div class="container-fluid primary  ">

        <div class="row ">
            <div class="col p-2 text-white d-flex justify-content-center  ">
                <i class="font-family fas fa-shipping-fast fa-1x "> Livraison offerte dès 50€ d'achat !!</i>
            </div>
        </div>
    </div>

    <div class="container-fluid secondary p-3">

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
                    <a class="nav-link text-decoration-none text-dark " href="index.blade.php">
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
    </div>

</header>

