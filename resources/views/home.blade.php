@extends('layouts.app')
@section('title')
    Page d'accueil
@stop
@section('content')



    {{-------------------------------  Caroussel  --------------------------------------------------}}
    <div class="container-fluid mt-5 mb-5">
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
                        <p>n</p>
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


        {{-------------------------------  Gammes  --------------------------------------------------}}
    <div class="container-fluid ">
        <div class="row mt-4">
            <div class="col-lg-3 text-center">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.food')}}">
                    <div class="bg-primary d-flex justify-content-center align-items-center">
                        <h2 class="text-white police">luxury food</h2>
                    </div>
                    <div>
                        <img class="img-fluid" src="https://static.750g.com/images/1200-630/c8b5d6e22615273f117330fc8628a1cb/thinkstockphotos-925210714.jpg" alt="">
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.food')}}">
                    <div class="bg-primary d-flex justify-content-center align-items-center">
                        <h2 class="text-white police">vegan food</h2>
                    </div>
                    <div>
                        <img class="img-fluid" src= "https://envato-shoebox-0.imgix.net/26a0/4931-0326-4e3a-a072-8ac8eefaaea9/FM7_1070.jpg?auto=compress&crop=edges&fit=crop&fm=jpeg&h=630&mark=https%3A%2F%2Felements-assets.envato.com%2Fstatic%2Fwatermark2.png&markalign=center%2Cmiddle&markalpha=18&w=1200&s=528f462aff5a8e64c54f4e33a37ab890" alt="">
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.food')}}">
                    <div class="bg-primary d-flex justify-content-center align-items-center">
                        <h2 class="text-white police">sweet food</h2>
                    </div>
                    <div>
                        <img class="img-fluid " src= https://smhttp-ssl-77206.nexcesscdn.net/pub/media/wysiwyg/Blog/Sweet-Dreams.jpg
                             alt="">
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="wrapper m-1">
                    <a class="text-decoration-none" href="{{route('product.food')}}">
                    <div class="bg-primary d-flex justify-content-center align-items-center">
                        <h2 class="text-white police">bad food</h2>
                    </div>
                    <div>
                        <img class="img-fluid " src=https://o.aolcdn.com/images/dims?quality=80&thumbnail=1200%2C630&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims3%2FGLOB%2Fcrop%2F5479x2876%2B0%2B0%2Fresize%2F1200x630%21%2Fformat%2Fjpg%2Fquality%2F85%2Fhttp%253A%252F%252Fo.aolcdn.com%252Fhss%252Fstorage%252Fmidas%252Fa4092f647c6567928a7cab0132af95c8%252F204818175%252F475895644.jpg&client=cbc79c14efcebee57402&signature=18eae370d5e271adfbe6e19d70e98b642b9f5760

                             alt="">
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




        {{-------------------------------  HEADER SPAN EN CE MOMENT------------------------------------------------}}
       <div class="container-fluid">
           <div class="row mt-5 mb-5">
               <div class="col header-tonique bg-secondary">
                   <div class="w-100 d-flex justify-content-center">
                       <h3 class="police">EN CE MOMENT</h3>
                   </div>
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
                <a class="product-a" href="{{route('product.show', ['id' => 1]) }}">
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
                <a class="product-a" href="{{route('product.show', ['id' => 1]) }}">
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





@endsection

