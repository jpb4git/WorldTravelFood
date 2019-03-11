@extends('layouts.app', ['title' => 'Home'])
@section('content')



    {{-------------------------------  GAMMES  --------------------------------------------------}}
    <div class="container mt-5 mb-5">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href=""></a>
                    <img src="{{asset('assets/images/car-1.jpg')}}" class="d-block w-100 img-fluid img-car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>caption n 1 </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/car-2.jpg')}}" class="d-block w-100 img-fluid img-car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>caption n 2</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/car-3.jpg')}}" class="d-block w-100 img-fluid img-car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>caption n 3 </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container">
        {{-------------------------------  GAMMES  --------------------------------------------------}}
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <div class="wrapper m-1">
                    <div class="wave bg-secondary d-flex justify-content-center align-items-center">
                        <h2>Gamme</h2>
                    </div>
                    <div><img class="w-50 img-fluid" src="{{asset('assets/images/gamme.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="wrapper m-1">
                    <div class="wave"></div>
                    <div><img class="w-50 img-fluid" src="{{asset('assets/images/gamme.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center m">
                <div class="wrapper">
                    <div class="wave m-1"></div>
                    <div><img class="w-50 img-fluid" src="{{asset('assets/images/gamme.jpg')}}" alt=""></div>
                </div>
            </div>
        </div>
        {{-------------------------------  HEADER SPAN EN CE MOMENT------------------------------------------------}}
        <div class="row mt-5 mb-5">
            <div class="col-sm-12 header-tonique bg-secondary">
                <div class="w-100 d-flex justify-content-center">
                    <span>En ce Moment</span>
                </div>
            </div>
        </div>
        {{-------------------------------  IMG SPAN EN CE MOMENT------------------------------------------------}}

        <div class="row mt-4  d-flex justify-content-start">
            <div class="col-md-8 text-left p-0 m-0">
                <img class="new-left" src="{{asset('assets/images/new-3.jpg')}}" alt="">
            </div>
            <div class="col-md-4 text-left p-0">
                <div class="row d-flex flex-column ">
                    <div class="col-md-6 text-left p-0 m-0">
                        <img class="new-right" src="{{asset('assets/images/new-2.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 text-left p-0 m-0">
                        <img class="new-right" src="{{asset('assets/images/new-1.jpg')}}" alt="">

                    </div>
                </div>
            </div>
        </div>

        {{-------------------------------  HEADER SPAN BEST SELLERS------------------------------------------------}}
        <div class="row mt-5 mb-5 " >
            <div class="col-sm-12 p-0">
                <div class="w-100 d-flex justify-content-center header-tonique blue">
                    <span>BEST SELLERS !</span>
                </div>
            </div>
        </div>
        {{-------------------------------  BEST SELLERS    -----------------------------------------------}}
        <div class="row mt-4 mb-5">
            <div class="col-xl-3 text-center">
                <a class="product-a" href="{{route('product.getProduct', ['id' => 1]) }}">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 text-center">
                <a class="product-a" href="{{route('product.getProduct', ['id' => 1]) }}">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 text-center">
                <a class="product-a" href="">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 text-center">
                <a class="product-a" href="">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {{-----------------------------------------------------------------------------------------------------------}}
        <div class="row mt-4 mb-5">
            <div class="col-xl-3 text-center">
                <a class="product-a" href="">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 text-center">
                <a class="product-a" href="">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 text-center">
                <a class="product-a" href="">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 text-center">
                <a class="product-a" href="">
                    <div class="card text-center">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-------------------------------  CONFIANCE    -----------------------------------------------}}
        <div class="row mt-5 ">
            <div class="col-sm-12 p-0">
                <div class="d-flex justify-content-center header-tonique bg-secondary">
                    <span>CONFIANCE</span>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 bg-primary d-flex flex-column justify-content-center align-items-center p-0 m-0">
                <img class="w-25 text-center" src="{{asset('assets/images/car.svg')}}" alt="car">
                <p class="text-light mb-0">DÉJÀ PLUS DE </p>
                <p class="text-light">69884 COMMANDES</p>
            </div>
            <div class="col-md-4 bg-primary d-flex flex-column justify-content-center align-items-center p-0 m-0">
                <img class="w-25 text-center " src="{{asset('assets/images/car.svg')}}" alt="car">
                <p class="text-light mb-0">DÉJÀ PLUS DE </p>
                <p class="text-light">69884 COMMANDES</p>
            </div>
            <div class="col-md-4 bg-primary d-flex flex-column justify-content-center align-items-center p-0 m-0">
                <img class="w-25 text-center" src="{{asset('assets/images/car.svg')}}" alt="car">
                <p class="text-light mb-0">DÉJÀ PLUS DE </p>
                <p class="text-light">69884 COMMANDES</p>
            </div>
        </div>

    </div>



@endsection

