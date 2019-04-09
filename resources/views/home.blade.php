@extends('layouts.app')
@section('title')
    World Travel Food - accueil
@stop
@section('content')



    {{-------------------------------  Caroussel  --------------------------------------------------}}
    <div class="container-fluid mt-4 mb-5">
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/2.jpg')}}" class="d-block w-100 img-fluid img-car img-responsive"
                         alt="food1">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/1.jpg')}}" class="d-block w-100 img-fluid img-car img-responsive"
                         alt="food2">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/3.jpg')}}" class="d-block w-100 img-fluid img-car img-responsive"
                         alt="food3">
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


    {{-------------------------------  Gammes  --------------------------------------------------}}
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-lg-6 text-center mb-5 ">
                <div class="wrapper m-1  ">
                    <a class="text-decoration-none" href="{{route('product.aperi
                    tif')}}">
                        <div class="bg-primary d-flex justify-content-center align-items-center rounded">
                            <h2 class="text-white">Apetizer food</h2>
                        </div>
                        <div>
                            <img class="img-fluid "
                                 src="https://static.750g.com/images/1200-630/c8b5d6e22615273f117330fc8628a1cb/thinkstockphotos-925210714.jpg"
                                 alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center mb-5">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.vegan')}}">
                        <div class="bg-primary d-flex justify-content-center align-items-center rounded">
                            <h2 class="text-white">Vegan food</h2>
                        </div>
                        <div>
                            <img class="img-fluid"
                                 src="https://envato-shoebox-0.imgix.net/26a0/4931-0326-4e3a-a072-8ac8eefaaea9/FM7_1070.jpg?auto=compress&crop=edges&fit=crop&fm=jpeg&h=630&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=1200&s=528f462aff5a8e64c54f4e33a37ab890"
                                 alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center mb-5">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.bonbons')}}">
                        <div class="bg-primary d-flex justify-content-center align-items-center rounded">
                            <h2 class="text-white">Sweet food</h2>
                        </div>
                        <div>
                            <img class="img-fluid "
                                 src=https://smhttp-ssl-77206.nexcesscdn.net/pub/media/wysiwyg/Blog/Sweet-Dreams.jpg
                                 alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.snacking')}}">
                        <div class="bg-primary d-flex justify-content-center align-items-center rounded">
                            <h2 class="text-white">Bad food</h2>
                        </div>
                        <div>
                            <img class="img-fluid "
                                 src=https://o.aolcdn.com/images/dims?quality=80&thumbnail=1200%2C630&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims3%2FGLOB%2Fcrop%2F5479x2876%2B0%2B0%2Fresize%2F1200x630%21%2Fformat%2Fjpg%2Fquality%2F85%2Fhttp%253A%252F%252Fo.aolcdn.com%252Fhss%252Fstorage%252Fmidas%252Fa4092f647c6567928a7cab0132af95c8%252F204818175%252F475895644.jpg&client=cbc79c14efcebee57402&signature=18eae370d5e271adfbe6e19d70e98b642b9f5760

                                 alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    {{-------------------------------  HEADER SPAN EN CE MOMENT------------------------------------------------}}
    <div class="container-fluid">
        <div class="row ">
            <div class="col bg-secondary mt-2 mb-5">
                <div class="d-flex justify-content-center">
                    <h3 class="police">EN CE MOMENT</h3>
                </div>
            </div>
        </div>
    </div>

    {{-------------------------------  IMG SPAN EN CE MOMENT------------------------------------------------}}
    <div class="container">
        <div class="row">
            <div class="col-sd-6 col-md-4 col-lg-4 text-center ">
                <a class="product-a" href="">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="assets/images/afr_bissap.jpg" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>Bissap</strong></h5>
                            <h6 class="card-title">Afrique</h6>
                            <p class="card-text">5.45€</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}"
                                             alt="basket">

                                    </a>
                                </div>
                                <div class="col">
                                    <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                         src="{{asset('assets/images/eye.svg')}}"
                                                         alt="eye"> </span>
                                        <span class="orange-Text grey p-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sd-6 col-md-4 col-lg-4 text-center">
                <a class="product-a" href="">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="assets/images/afr_Naks-2.jpg" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>Nik Naks</strong></h5>
                            <h6 class="card-title">Afrique</h6>
                            <p class="card-text">2.23€</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}"
                                             alt="basket">

                                    </a>
                                </div>
                                <div class="col">
                                    <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                         src="{{asset('assets/images/eye.svg')}}"
                                                         alt="eye"> </span>
                                        <span class="orange-Text grey p-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sd-6 col-md-4 col-lg-4 text-center">
                <a class="product-a" href="">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="assets/images/eur_donsimon.jpg" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>Don Simon</strong></h5>
                            <h6 class="card-title">Europe</h6>
                            <p class="card-text">8.45€</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}"
                                             alt="basket">

                                    </a>
                                </div>
                                <div class="col">
                                    <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                         src="{{asset('assets/images/eye.svg')}}"
                                                         alt="eye"> </span>
                                        <span class="orange-Text grey p-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-------------------------------  HEADER SPAN BEST SELLERS------------------------------------------------}}
    <div class="container-fluid">
        <div class="row ">
            <div class="col bg-secondary mt-5 mb-5">
                <div class="d-flex justify-content-center">
                    <h3 class="police">BEST SELLERS</h3>
                </div>
            </div>
        </div>
    </div>
    {{-------------------------------  BEST SELLERS    -----------------------------------------------}}
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="card-deck">
                @foreach($products as $product)
                    <div class="col-sd-6 col-md-3 mb-3 p-0 text-center">
                        <div class="card text-center mb-3">
                            <div class="text-center pt-2">
                                <img src="{{asset('assets/images/'.$product->image)}}"
                                     class="card-img-top w-75"
                                     alt="{{$product->image}}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$product->name}}</strong></h5>
                                <h6 class="card-title">{{$product->description}}</h6>
                                <p class="card-text">{{$product->price}}</p>
                            </div>git
                            <div class="card-footer">
                                <div class="row d-flex flex-row">
                                    <div class="col">
                                        <a class="product-a" href="">
                                            <img class="basket-size"
                                                 src="{{asset('assets/images/basket-plus.svg')}}"
                                                 alt="basket">

                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                         src="{{asset('assets/images/eye.svg')}}"
                                                         alt="eye"> </span>
                                            <span class="orange-Text grey p-1"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{------------------------------- CONFIANCE-----------------------------------------------}}

<div class="container-fluid bg-primary">
    <div class="row">
        <div class="col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
            <i class="fas fa-shipping-fast fa-5x"></i>
            <p class="text-light mt-2">LIVRAISON EXPRESS 48h</p>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
            <i class="fas fa-thumbs-up fa-5x"></i>
            <p class="text-light mt-2">150 000 CLIENTS SATISFAITS</p>
        </div>
        <div class="col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
            <i class="fas fa-mobile-alt fa-5x"></i>
            <p class="text-light mt-2">HOTLINE GRATUITE AU 0405060708</p>
        </div>
    </div>
</div>




@endsection

