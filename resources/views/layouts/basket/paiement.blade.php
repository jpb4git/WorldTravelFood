@extends('layouts.app', ['title' => 'Fiche Produit'])
@section('content')


    <div class="container">
        <div class="bandeau d-flex align-items-center mt-5">
            <a class="fdp ml-3"><strong>PAIEMENT</strong></a>
        </div>
    </div>

    <div class="livraison container justify-content-center mt-4 mb-4">
        <strong>Choisissez votre mode de payement</strong>


        <table class="table">
            <thead>
            <tr>
                <th scope="col"><img class="w-25"
                                     src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRADPSpvxc9T6Uz1P31xVSoSO8fxtpzmff6ZXHnHj-_bE71D4IHFg">
                </th>
                <td class="align-middle">Payer par carte bancaire</td>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"><img class="w-25" src="http://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c530.png">
                </th>
                <td class="align-middle">Payer par carte ou par compte Paypal</td>
            </tr>
            <tr>
                <th scope="row"><img class="w-25"
                                     src="https://particuliers.attijariwafabank-europe.fr/uploads/extra/58e66b0b86da6_cheque_classique.png">
                </th>
                <td class="align-middle">Payer par chèque</td>
            </tr>
            <tr>
                <th scope="row"><img class="w-25" src="https://www.paytutor.com/img/virement.png"></th>
                <td class="align-middle">Payer par virement bancaire</td>
            </tr>
            </tbody>
        </table>

    </div>


@endsection