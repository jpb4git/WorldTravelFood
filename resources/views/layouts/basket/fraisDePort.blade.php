@extends('layouts.app', ['title' => 'Fiche Produit'])


@section('content')

    <div class="bandeau container mt-5">
        <a class="fdp"><strong>FRAIS DE PORT</strong></a>
    </div>

    <div class="livraison container justify-content-center mt-4 mb-4">
        <a><strong>Choisissez votre mode de livraison</strong></a>


        <a>Choississez une option de livraison pour l'adresse : Mon adresse</a>

        <div class="choix container row justify-content-center">

            <div class="col">
                <h1 class="h5 mt-3 mb-3">Transport</h1>
                <form>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="Checkbox1"
                               value="option1" checked>
                        <label class="custom-control-label" for="Checkbox1">

                            <a> transporteur 1</a></label>
                        <i class="fas fa-shipping-fast"></i>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="Checkbox2"
                               value="option2" checked>
                        <label class="custom-control-label" for="Checkbox2">
                            <a>transporteur 2</a></label>
                        <i class="fas fa-shipping-fast"></i>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="Checkbox3"
                               value="option3" checked>
                        <label class="custom-control-label" for="Checkbox3">
                            <a>transporteur 3</a></label>
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                </form>
            </div>

            <div class="col">
                <p class="h5 mt-3 mb-3">Infos</p>
                <p>Entre votre commande et la livraison chez vous le délai moyen constaté est de 4 à 5 jours ouvrés pour
                    une expédition en France</p>
            </div>

            <div class="col">

                <h1 class="h5 mt-3 mb-3">Prix</h1>
                <a>5,00 € HT</a>
                <br>
                <a>5,00 € HT</a>
                <br>
                <a>5,00 € HT</a>

            </div>
        </div>
        <div class="custom-control custom-checkbox mb-5">
            <h1 class="h5">Conditions générales de vente</h1>
            <form>
                <input class="custom-control-input" type="checkbox" id="Checkbox4" value="option4"
                       checked>
                <label class="custom-control-label mt-2" for="Checkbox4"> J'ai lu et j'accepte les conditions générales de
                    vente
                    et j'y adhère sans réserve. <strong>(Lire les Conditions Générales de Vente)</strong> </label>

                <input type="submit" class="ml-3 btn btn-primary" value="Accepter">

            </form>
        </div>

        <input type="submit" class="ml-3 btn btn-outline-primary" value="Suivant">
        <input type="submit" class="right ml-3 btn btn-outline-primary" value="Précédent">

    </div>

@endsection