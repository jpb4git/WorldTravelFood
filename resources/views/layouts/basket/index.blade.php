@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <form action="index.blade.php" method="post">
        <main class="container border mt-4 mb-5">
            <div class="row">
                <table class="table">
                    <thead class="bg-primary table-bordered">
                    <tr>
                        <th class="text-white text-left" scope="col">Article</th>
                        <th class="text-white text-center" scope="col">Prix</th>
                        <th class="text-white text-center" scope="col">Quantité</th>
                        <th class="text-white text-center" scope="col">Total</th>
                        <th class="text-white" scope="col"></th>
                    </tr>
                    </thead>

                    <tbody>
                    @for($i = 0; $i < 3; $i++)
                        <tr class="border-bottom">
                            <td>
                                <img class="w-25"
                                     src="https://thumbs.dreamstime.com/t/products-colorful-stuck-stripes-text-alphabets-written-over-background-79309192.jpg"
                                     alt="product image">
                                <a class="text-decoration-none text-primary" href="nom de l'article">Nom de
                                    l'article</a>
                            </td>

                            <td class="text-center">100€</td>

                            <td class="text-center">
                                <input type="number" step="1" value="" name="produit_quantite" class="form-control"
                                       min="0" max="100">
                            </td>

                            <td class="text-center">100€</td>

                            <td class="text-center">
                                <button class="btn btn-danger" type="submit" name="supprimer_produit">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endfor

                    </tbody>
                </table>
            </div>

            <div class="container mb-2">
                <form>
                    <div class="form-row">
                        <div class="col-lg-2">
                            <label for="REDUC">BONS DE REDUCTION</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="reduction" class="form-control form-control-sm">
                        </div>
                        <div class="col-lg-3">
                            <input class=" btn btn-outline-primary" type="submit" value="AJOUTER" name="ajout">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Total produit HT:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>€</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Frais de port:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>€</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Total TTC:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>€</h5>
                    </div>
                </div>
            <div class="row pt-5">
                <div class="col d-flex justify-content-start ">
                    <input class="text-right btn btn-outline-primary" type="submit" value="CONTINUER MES ACHATS"
                           name="return">
                </div>
                <div class="col d-flex justify-content-end">
                    <input class="btn btn-primary" type="submit" value="COMMANDER" name="recalcul">
                </div>

            </div>

            </div>
        </main>
    </form>
@endsection

