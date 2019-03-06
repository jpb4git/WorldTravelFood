@extends('layouts.app', ['title' => 'Votre Panier'])

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-sm-12">
                <h1 class="h5 my-auto bg-primary p-2 text-white ">VOS ADRESSES</h1>
            </div>
        </div>
        <form>
            <div class="row pt-5">
                <label class="col-sm-3 col-form-label" for="libelleAdresse">Choisissez une adresse de livraison</label>

                <div class="col-sm-3">
                    <select class="custom-select" name="libelleAdresse">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="form-check form-check-inline mt-3">
                <input class="mr-2" type="checkbox" name="" value="">
                <label class="form-check-label" for="">Utiliser la même adresse pour la facturation</label>
            </div>
        </form>
        <div class="row my-5">
            <div class="col-lg-6">
                <div class="border border-primary p-2">
                    <span class="text-primary">VOTRE ADRESSE DE LIVRAISON</span>
                    <p>Prenom Nom<br>
                        adresse<br>
                        code postal Ville<br>
                        pays</p>
                    <a href="">Mettre à jour</a>
                </div>
            </div>

            <div class=" col-lg-6 ">
                <div class="border border-primary p-2">
                    <span class="text-primary">VOTRE ADRESSE DE FACTURATION</span>
                    <p>Prenom Nom<br>
                        adresse<br>
                        code postal Ville<br>
                        pays</p>
                    <a href="">Mettre à jour</a>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" name="submitNouvelleAdresse" class="btn btn-primary">AJOUTEZ UNE NOUVELLE ADRESSE
            </button>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="text-left py-5">
                    <button type="submit" name="submitPrecedentNouvelleAdresse" class="btn btn-primary">PRÉCEDENT
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="text-right py-5">
                    <button type="submit" name="submitSuivantNouvelleAdresse" class="btn btn-primary">SUIVANT
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection