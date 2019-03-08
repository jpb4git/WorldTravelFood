@extends('layouts.app', ['title' => 'Catalogue'])


@section('content')
    <div class="container">
        {{--            TITRE CATÉGORIE                      --}}
        <div class="row mt-5 mb-5">
            <div class="col-sm-12 header-tonique bg-secondary d-flex justify-content-start align-items-center">
                <div class="barre"></div>
                <div class="w-100">
                    <span class="ml-2"><strong> Bonbons</strong></span>
                </div>
            </div>
        </div>

        {{--            trier par                      --}}
        <div class="row mt-5 mb-5">
            <div class="col-sm-12 header-tonique bg-secondary d-flex justify-content-start align-items-center">
                <div class="barre"></div>
                <div class="w-100">
                    <span class="ml-2"><strong> trier par</strong></span>
                    <span class="pl-3">

                          <select>
                            <option>--</option>
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
                             <option>de A à Z</option>
                             <option>de Z à A</option>
                              <option>produits en stock</option>
                          </select>

                    </span>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            @foreach ($products as $product)
            <div class="col-xl-3 text-center">
                <a class="product-a" href="{{$product -> id}}">
                    <div class="card text-center mb-3">
                        <div class="text-center pt-2">
                            <img src="{{asset('assets/images/mnm.jpg')}}" class="card-img-top w-50 " alt="product 1 ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{$product->title}}</strong></h5>
                            <h6 class="card-title">{{$product->provenance}}</h6>
                            <p class="card-text">{{$product->price}}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row d-flex flex-row">
                                <div class="col">
                                    <a class="product-a" href="">
                                        <img class="basket-size" src="{{asset('assets/images/basket-plus.svg')}}" alt="basket">
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
            @endforeach
        </div>


        {{--            trier par                      --}}
        <div class="row mt-5 mb-5">
            <div class="col-sm-12 header-tonique bg-secondary d-flex justify-content-start align-items-center">
                <div class="barre"></div>
                <div class="w-100">
                    <span class="ml-2"><strong> trier par</strong></span>
                    <span class="pl-3">

                          <select>
                            <option>--</option>
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
                             <option>de A à Z</option>
                             <option>de Z à A</option>
                              <option>produits en stock</option>
                          </select>

                    </span>
                </div>
            </div>
        </div>
    </div>

@endsection
