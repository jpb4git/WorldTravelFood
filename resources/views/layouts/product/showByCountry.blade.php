@extends('layouts.app', ['title' => 'Catalogue'])


@section('content')

    <div class="wrap-country-prod">
        <div class="jumbotron jumbotron-fluid jumboImg">
            <div class="container-fluid d-flex justify-content-center">
                <div class="row">
                    <div class="col-4 d-flex justify-content-end">

                    </div>
                    <div class="col-8">
                        <h1 class="display-4">Amérique</h1>
                        <p class="lead">accroche Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto
                            aspernatur aut consequatur culpa</p>
                    </div>
                </div>


            </div>
        </div>
        <img class="img-fluid imgCard ml-5"  src="{{asset('assets/images/pays/america.jpg')}}" alt="">
    </div>

    <div class="container">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
        <div class="row mt-4 mb-5">
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
        <div class="row mt-4 mb-5">
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
        <div class="row mt-4 mb-5">
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
        <div class="row mt-4 mb-5">
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
            <div class="col-xl-3 text-center">
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
