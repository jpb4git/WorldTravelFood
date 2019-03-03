@extends('layouts.app', ['title' => 'Fiche Produit'])

@section('content')
    <style>
        .orange {
            background-color: #dd352e !important;
        }

        .orange-Text {
            color: #dd352e !important;
        }

        .blue {
            background-color: #67c7c6 !important;
        }

        .grey {
            background-color: #a5babc !important;
        }

        .grey-Text {
            color: #a5babc !important;
        }


        .stars {
            width: 1em;
            height: 1em;
        }

        .size-Product {
            width: 300px;
            height: 300px;
        }

        .description {
            font-size: 0.7em;
        }

        .provenance {
            font-size: 0.6em;
        }

        .row-breadcrumb {
            padding: 0;
            margin: 0 auto;
        }

        .ul-nav {
            list-style-type: none;
        }

        .right-price {
            border-right-style: solid;
        }

        .content-price {

        content_prices .left {
            width: 157px;
            text-align: center;
            border-right: 3px solid;
        }

         .spot {

            width: 125px!important;
            height: 125px!important;
            border-radius: 50%!important;

        }

         .spotAlert {
            border: 1px solid red;
            background-color: red;
        }

        }
    </style>
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
    <div class="container ">

        <div class="row ">
            <div class="col-md-4">
                <img class="size-Product img-fluid" src="{{asset('assets/images/gamme.jpg')}}" alt="">
            </div>
            <div class="col-md-8">
                <div class="wrapper mb-5">
                    <span><strong>VIN DE COBRA & SCORPION - GRANDE BOUTEILLE</strong></span>
                    <div class="wrapper-stars">
                        <img class="stars img-fluid" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="stars img-fluid" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="stars img-fluid" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="stars img-fluid" src="{{asset('assets/images/starOn.svg')}}" alt="">
                        <img class="stars img-fluid" src="{{asset('assets/images/starOff.svg')}}" alt="">
                        <span><a class="orange-Text" href=""> 3 commantaire</a></span> | <span><a class="orange-Text"
                                                                                                  href="">Ecrire un commentaire</a></span>
                    </div>
                    <hr>

                    <p class="description"><strong> 1 grande bouteille (70 cl)de vin de riz avec un vrai cobra et
                            scorpion</strong></p>
                    <p class="provenance">provenance : Vietnam</p>
                </div>
                <div class="mt-5">
                    <p class="description ">Vous cherchez l'alcool le plus extrême et le plus insolite. Félicitations !
                        Vous êtes arrivés sur la bonne page, celle de l'alcool entomophage. Découvrez ici notre Vin de
                        Cobra & Scorpion, une idée innovante pour un cadeau insolite. L'alcool de serpent possède un
                        piquant révolutionnaire.</p>
                </div>
                <div class="mt-5 w-100 d-flex justify-content-end">
                    <span class="orange-Text grey p-1 mr-1"><img src="{{asset('assets/images/eye.svg')}}"
                                                                 alt="eye"></span>
                    <span class="orange-Text grey p-1">En savoir +</span>
                </div>
                <div class="mt-5 w-100 d-flex justify-content-start bg-info">
                    <div class="wrapper-price">
                        <div class="row">
                            <div class="col-md-3 content-price ">
                                <h4 class="h4 p-1">89,90 €</h4>
                            </div>
                            <div class="col-md-9">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row-fluid bg-light ">
                    <div class="col-md-12 ">
                        <span class="spot spotAlert">7</span>
                        <span class=" text-center bg-danger">En rupture de Sotck</span>
                    </div>
                </div>
            </div>


        </div>
@endsection
