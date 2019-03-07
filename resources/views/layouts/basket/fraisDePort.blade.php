@extends('layouts.app', ['title' => 'Fiche Produit'])


@section('content')

    <div class="container">
        <div class="bandeau d-flex align-items-center mt-5">
            <a class="fdp ml-3"><strong>FRAIS DE PORT</strong></a>
        </div>
    </div>

    <div class="livraison container justify-content-center mt-4 mb-4">
        <a><strong>Choisissez votre mode de livraison</strong></a>


        <a>Choississez une option de livraison pour l'adresse : Mon adresse</a>

        <div class="mt-4 choix container row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Transport</th>
                    <th scope="col">Délais</th>
                    <th scope="col">Prix</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox1"
                                       value="option1" checked>
                                <label class="custom-control-label" for="Checkbox1">
                                    <a> transporteur 1</a></label>
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                        </form>
                    </th>
                    <td>3-4 jours</td>
                    <td>8,00 € HT</td>
                </tr>
                <tr>
                    <th scope="row">
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox2"
                                       value="option2" checked>
                                <label class="custom-control-label" for="Checkbox2">
                                    <a> transporteur 1</a></label>
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                        </form>
                    </th>
                    <td>4-5 jours</td>
                    <td>6,00 € HT</td>
                </tr>
                <tr>
                    <th scope="row">
                        <form>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="Checkbox3"
                                       value="option3" checked>
                                <label class="custom-control-label" for="Checkbox3">
                                    <a> transporteur 1</a></label>
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                        </form>
                    </th>
                    <td>5-7 jours</td>
                    <td>4,00 € HT</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="custom-control custom-checkbox mb-5">
            <h1 class="h5">Conditions générales de vente</h1>
            <form>
                <input class="custom-control-input" type="checkbox" id="Checkbox4" value="option4"
                       checked>
                <label class="custom-control-label mt-2" for="Checkbox4"> J'ai lu et j'accepte les conditions générales
                    de
                    vente
                    et j'y adhère sans réserve. <strong>(Lire les Conditions Générales de Vente)</strong> </label>

                <input type="submit" class="ml-3 btn btn-primary" value="Accepter">

            </form>
        </div>

        <input type="submit" class="ml-3 btn btn-outline-primary" value="Suivant">
        <input type="submit" class="right ml-3 btn btn-outline-primary" value="Précédent">

    </div>

@endsection