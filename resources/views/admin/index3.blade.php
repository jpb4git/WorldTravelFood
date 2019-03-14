@extends('admin.admin', ['title' => 'administration'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-logo-admin d-flex flex-sm-column flex-lg-row">
                    <img src="{{asset('assets/images/logo.png')}}" class="adminImgLogo" alt="Responsive image">
                    <h1 class="ml-5 h1-color"> Administration </h1>
                    <h1 class="ml-5 h1-color">World Travel Food</h1>
                </div>
                <hr>
                <h1 class="ml-5 d-flex align-items-center">
                    <div class="vapor">Dashboard</div>
                </h1>
            </div>
        </div>
        <div class="row mt-0 ">
            <div class="col-12 text-center mb-3 border-2 rounded">

                <i class="fas fa-database w-100 big-icon text-light"></i>

            </div>

            <div class="col-sm-12 col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-carrot big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Produits : <strong>{{$productCount}}</strong></h5>
                                <p class="card-text">Produits presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-archive big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"> Categories : <strong>{{$catCount}}</strong></h5>
                                <p class="card-text">Catégories presentes dans la base de données. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="far fa-address-card big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Clients : <strong>{{$userCount}}</strong></h5>
                                <p class="card-text">Clients enregistrés dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-globe big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Pays : <strong>18</strong></h5>
                                <p class="card-text">Pays presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-truck big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Transporteurs : <strong>4</strong></h5>
                                <p class="card-text">Transporteurs presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="far fa-address-book big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Utilisateurs : <strong>{{$userCount}}</strong></h5>
                                <p class="card-text">Utilisateurs presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-fingerprint big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Droits : <strong>4</strong></h5>
                                <p class="card-text">Rôles presents dans la base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-1 mb-5">
            <div class="col-12 text-center mb-3 border-2 rounded">

                <i class="fas fa-database w-100 big-icon text-light"></i>

            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fab fa-cc-visa big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Commandes passées ce mois : <strong>{{$orderCount}}</strong></h5>
                                <p class="card-text">Nombre de commandes passées toutes catégories confondues</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-gift big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Cadeaux en base de données : <strong>88</strong></h5>
                                <p class="card-text">Cadeaux present en base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fab fa fa-percent big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Remises existantes: <strong>18</strong></h5>
                                <p class="card-text">Remises créees en base de données.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fab fa fa-percent big-icon color-active"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Remises appliquées: <strong>5</strong></h5>
                                <p class="card-text">Remises appliquées actuellement.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 card-admin">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <i class="fas fa-archive big-icon"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"> 2018 : <strong>15815</strong></h5>
                                <p class="card-text">Commandes passées pour l'année 2018 </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection
