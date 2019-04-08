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
    <div class="row mt-3 mb-2">
        <div class="col-xs-12 col-lg-6">
            <article id="formulaire" class="container mw-50 w-25 text-center">
                <form id="formulaire1" method="post">
                    <div class="form-group">
                        <fieldset class="container">
                            <h2 class="nomchamp mb-2">Adresse de livraison</h2>
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for="wording">Libellé</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="wording" type=text required placeholder=" maison">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="label" for="lastname">Nom</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="lastname" type=text required
                                                   placeholder=" Dupont">
                                        </div>
                                        <div class="col-6">
                                            <label class="label" for="firstname">Prénom</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="firstname" type=text required
                                                   placeholder=" Jean">
                                        </div>
                                        <div class="col-6">
                                            <label class="label" for="adresse">Adresse</label>
                                        </div>
                                        <div class="col-6">
                                            <input id="adresse" name="adresse" type=text required
                                                   placeholder=" 99, rue du soleil">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="adresse">Complément d'adresse</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="adresse" type=text
                                               placeholder=" Résidence de l'arbre Bât. D">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=codepostal>C.P.</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=codepostal name=codepostal type=text required
                                               placeholder=" 26000">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=ville>Ville</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=ville name=ville type=text required placeholder=" Valence">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=pays>Pays</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=pays name=pays type=text required placeholder=" France">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                        </fieldset>
                    </div>
                </form>
            </article>
        </div>
        <div class="col-xs-12 col-lg-6">
            <article id="formulaire" class="container mw-50 w-25 text-center">
                <form id="formulaire2" method="post">
                    <div class="form-group justify-content-around">
                        <fieldset class="container">
                            <h2 class="nomchamp mb-2">Adresse de facturation</h2>
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for="wording">Libellé</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="wording" type=text required placeholder=" Travail">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="lastname">Nom</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="lastname" type=text required placeholder=" Dupont">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="firstname">Prénom</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="firstname" type=text required placeholder=" Jean">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="adresse">Adresse</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="adresse" type=text required
                                               placeholder="55, rue du fleuve">
                                    </div>
                                    <div class="col-6">
                                        <label class="label" for="adresse">Complément d'adresse</label>
                                    </div>
                                    <div class="col-6">
                                        <input id="adresse" name="adresse" type=text
                                               placeholder="entreprise Machin">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=codepostal>C.P.</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=codepostal name=codepostal type=text required placeholder="69001">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=ville>Ville</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=ville name=ville type=text required placeholder="Lyon">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="label" for=pays>Pays</label>
                                    </div>
                                    <div class="col-6">
                                        <input id=pays name=pays type=text required placeholder=" France">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                        </fieldset>
                    </div>
                </form>
            </article>
        </div>
    </div>
    </main>
@endsection