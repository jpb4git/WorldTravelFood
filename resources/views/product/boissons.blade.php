@extends('layouts.app')
@section('title')
    Catégorie - BOISSONS
@stop

@section('content')
    <div class="container">


        {{--            trier par                      --}}
        <div class="row mt-5 mb-5">
            <div class="col-sm-12 header-tonique bg-secondary d-flex justify-content-start align-items-center">
                <div class="barre"></div>
                <div class="w-100">
                    <span class="ml-2"><strong>Boissons</strong></span>
                </div>
            </div>
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
            <div class="card-deck">
                @foreach($products as $product)
                    <div class="col-sd-6 col-md-3 mb-3 p-0 text-center">
                        <div class="card text-center mb-3">
                            <div class="text-center pt-2">
                                <img src="{{asset('assets/images/'.$product->image)}}"
                                     class="card-img-top w-75"
                                     alt="{{$product->name}}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$product->name}}</strong></h5>
                                <h6 class="card-title">{{$product->description}}</h6>
                                <p class="card-text">{{$product->price}} €</p>
                            </div>
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

@endsection
