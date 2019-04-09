@extends('layouts.app')
@section('title')
    Mes adresses
@stop
@section('content')
    <main class="container border mt-5 mb-5">
        <div class="row bg-secondary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">MES ADRESSES</h1>
            </div>
        </div>
        <div class="row mt-3 mb-2 mr-5">
            <?php $count=1;?>
            @foreach ($user->addresses as $address)
                <div class="col-xs-12 col-lg-6">
                    <form class="" action="/user/addresses" method="get">
                    <article id="formulaire" class="container mw-50 w-25 text-center">
                        <form id="formulaire1" method="post">
                            <div class="form-group">
                                <fieldset class="container">
                                    <h2 class="nomchamp mb-2">Adresse <?php echo $count++?></h2>
                                    <div class="row justify-content-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="label" for="street">Rue</label>
                                            </div>
                                            <div class="col-6">
                                                <input id="adresse" name="street" type=text required
                                                       placeholder="{{ $address->street }}">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="label" for="zip_code">Code postal</label>
                                                </div>
                                                <div class="col-6">
                                                    <input id="adresse" name="zip_code" type=text required
                                                           placeholder="{{ $address->zip_code }}">
                                                </div>
                                                <div class="col-6">
                                                    <label class="label" for="complement">Complément</label>
                                                </div>
                                                <div class="col-6">
                                                    <input id="adresse" name="complement" type=text required
                                                           placeholder="{{ $address->complement }}">
                                                </div>
                                                <div class="col-6">
                                                    <label class="label" for="city">Ville</label>
                                                </div>
                                                <div class="col-6">
                                                    <input id="adresse" name="city" type=text required
                                                           placeholder="{{ $address->city }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="label" for="country">Pays</label>
                                            </div>
                                            <div class="col-6">
                                                <input id="adresse" name="country" type=text
                                                       placeholder="{{ $address->country }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="label" for=last_name>Nom</label>
                                            </div>
                                            <div class="col-6">
                                                <input id=adresse name=last_name type=text required
                                                       placeholder="{{ $address->last_name }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="label" for=first_name>Prénom</label>
                                            </div>
                                            <div class="col-6">
                                                <input id=ville name=first_name type=text required
                                                       placeholder="{{ $address->first_name }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="label" for=wording>Libellé</label>
                                            </div>
                                            <div class="col-6">
                                                <input id=pays name=wording type=text required
                                                       placeholder="{{ $address->wording }}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                                </fieldset>
                            </div>
                        </form>
                    </article>
                    </form>
                </div>
            @endforeach
        </div>
    </main>
@endsection