@extends('layouts.app', ['title' => 'Fiche Produit'])

@section('content')


    <div class="container-fluid ">
        <div class="row row-breadcrumb ">
            <div class="col-md-12 ">
                <nav>
                    <ul class="ul-nav d-flex flex-row rounded-bottom ">
                        <li class=" provenance p-1"><a href="">Vietnam</a></li>
                        <li class=" provenance active p-1" aria-current="page"> / vin de cobra</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    {{--    PRODUCT    --}}
    <div class="container">

        <div class="row ">
            <div class="col-md-4">
                <img class="size-Product img-fluid" src="{{asset('assets/images/' .$product->image)}}" alt="">
            </div>
            <div class="col-md-8">
                <div class="wrapper mb-5">
                    <span><strong>{{$product->nom}}</strong></span>
                    <div class="wrapper-stars">
                        <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="starSize" src="{{asset('assets/images/starOff.svg')}}" alt="">
                        <span><a class="text-primary" href=""> 3 commentaires</a></span> | <span><a class="text-primary"
                                                                                                    href="">Ecrire un commentaire</a></span>
                    </div>
                    <hr>

                    <p class="description"><strong> 1 grande bouteille (70 cl)de vin de riz avec un vrai cobra et
                            scorpion</strong></p>
                    <p class="provenance">provenance : Vietnam</p>
                    <p class="provenance">catégorie : Food</p>
                </div>
                <div class="mt-5">
                    <p class="description ">{{$product->description}}</p>
                </div>
                <div class="mt-5 w-100 d-flex justify-content-end">
                    <a href="">
                    <span class="orange-Text grey p-1 mr-1"><img src="{{asset('assets/images/eye.svg')}}"
                                                                 alt="eye"></span>
                        <span class="orange-Text grey p-1">En savoir +</span>
                    </a>
                </div>
                <div class="mt-5 d-flex justify-content-start ">

                    <div class="row w-100 panier p-3">
                        <div class="col-sm-12 col-lg-4 d-flex align-items-center ">
                            <h4 class="w-100 h1 p-3 bg-primary justify-content-center text-center text-light align-items-center">
                                {{$product->prix}} €
                            </h4>

                        </div>
                        <div class="col-md-8 d-flex flex-row justify-content-center ">
                            <form action="" method="">
                                <div class="d-flex flex-row  w-100 p-3">
                                    <span class="d-flex align-items-center mr-3">QUANTITÉ</span>
                                    <input class="p-1 m-1 d-flex align-items-center " id="qtsInput" type="number"
                                           value="1">
                                    <input class="p-1 m-1 btn btn-secondary" type="submit" value="Ajouter au panier">
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="row w-100">
                    <div class="col-md-12 ">
                        <span class="spot "></span>
                        <span class=" text-center">En rupture de Stock</span>
                    </div>
                </div>
            </div>


        </div>
    </div>


    {{-- COMMENTAIRE --}}
    <div class="container mt-5">
        <div class="row d-flex  flex-column">
            <h4> Commentaires</h4>
            <div class="col-sm-12 w-100  p-2 comFrame d-flex flex-row">
                <div class="row">
                    <div class="col-md-3 d-flex flex-column">
                        <div class="wrapper-stars">
                            <span class="p-2"><strong>Note</strong></span>
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOff.svg')}}" alt="">
                        </div>
                        <span class="p-2">Eric dumont </span>
                        <span class="p-2">2019-03-15</span>
                    </div>
                    <div class="col-md-9">
                        <h5>
                            <strong>Ajoutez du gout à vos plats grâce aux fleurs comestibles</strong>
                        </h5>
                        <p>
                            bonjour,
                            Merci d'avoir fait connaitre que les fleurs étaient également comestibles. Au tout début, je
                            n'avais aucune idée qu'il existaient des fleurs qui pouvaient être mangé. Et pour tous ceux
                            qui
                            veulent vivre une nouvelle expérience sur le plan culinaire, je vous recommande d'opter pour
                            ce
                            pack Découverte Florale, qui donne un nouveau gout aux plats les plus ordinaires.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 w-100  p-2 comFrame d-flex flex-row mt-4">
                <div class="row">
                    <div class="col-md-3 d-flex flex-column">
                        <div class="wrapper-stars">
                            <span class="p-2"><strong>Note</strong></span>
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOn.svg')}}" alt="">
                            <img class="starSize" src="{{asset('assets/images/starOff.svg')}}" alt="">
                        </div>
                        <span class="p-2">Eric dumont </span>
                        <span class="p-2">2019-03-15</span>
                    </div>
                    <div class="col-md-9">
                        <h5>
                            <strong>Ajoutez du gout à vos plats grâce aux fleurs comestibles</strong>
                        </h5>
                        <p>
                            bonjour,
                            Merci d'avoir fait connaitre que les fleurs étaient également comestibles. Au tout début, je
                            n'avais aucune idée qu'il existaient des fleurs qui pouvaient être mangé. Et pour tous ceux
                            qui
                            veulent vivre une nouvelle expérience sur le plan culinaire, je vous recommande d'opter pour
                            ce
                            pack Découverte Florale, qui donne un nouveau gout aux plats les plus ordinaires.
                        </p>
                        <hr>
                    </div>
                </div>
            </div>


        </div>
        {{-- Vous aimerez aussi--}}

        <div class="row mt-5 mb-5">
            <div class="col-sm-12 header-tonique bg-secondary d-flex justify-content-start align-items-center">
                <div class="barre"></div>
                <div class="w-100">
                    <span class="ml-2"><strong> Vous Aimerez aussi ...</strong></span>
                </div>
            </div>
        </div>
        {{-------------------------------  you'll love it    -----------------------------------------------}}
        <div class="row mt-4 mb-5">
            <div class="col-xl-4 text-center">
                <a class="product-a" href="">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}"
                                             alt="basket">
                                        Ajouter
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                     src="{{asset('assets/images/eye.svg')}}"
                                                     alt="eye"> En savoir +</span>
                                        <span class="orange-Text grey p-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 text-center">
                <a class="product-a" href="">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}"
                                             alt="basket">
                                        Ajouter
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                     src="{{asset('assets/images/eye.svg')}}"
                                                     alt="eye"> En savoir +</span>
                                        <span class="orange-Text grey p-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 text-center">
                <a class="product-a" href="">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>M&M's Cookies</strong></h5>
                            <h6 class="card-title">M&M's </h6>
                            <p class="card-text">1,96 Euros</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}"
                                             alt="basket">
                                        Ajouter
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="product-a" href="">
                                             <span class="orange-Text grey p-1 mr-1"><img
                                                     src="{{asset('assets/images/eye.svg')}}"
                                                     alt="eye"> En savoir +</span>
                                        <span class="orange-Text grey p-1"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        {{-----------------------------------------------------------------------------------------------------------}}
    </div>
@endsection
