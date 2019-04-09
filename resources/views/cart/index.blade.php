@extends('layouts.app')
@section('title')
    Panier
@stop

@section('content')

    <form action="index.blade.php" method="post">
        <main class="container border mt-5 mb-5">
            <nav class="breadcrumb mt-2">
                <span class="breadcrumb-item active text-primary text-size">RECAPITULATIF DE COMMANDE</span>
                <a class="breadcrumb-item text-dark text-size">IDENTIFICATION</a>
                <a class="breadcrumb-item text-dark text-size">ADRESSE</a>
                <a class="breadcrumb-item text-dark text-size">FRAIS DE PORT</a>
                <a class="breadcrumb-item text-dark text-size">PAIEMENT</a>
            </nav>
            <div class="row bg-secondary text-white justify-content-start py-2">
                <div class="col-sm-12 ">
                    <h1 class="h5 my-auto">COMMANDE</h1>
                </div>
            </div>
            <div class="row mt-4">
                <table class="table">
                    <thead class="bg-dark table-bordered">
                    <tr>
                        <th class="text-white text-left" scope="col">ARTICLE</th>
                        <th class="text-white text-center" scope="col">PRIX</th>
                        <th class="text-white text-center" scope="col">QUANTITE</th>
                        <th class="text-white text-center" scope="col">TOTAL</th>
                        <th class="text-white" scope="col"></th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $total = 0 ?>

                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)

                           <?php $total += $details['price'] * $details['quantity'] ?>

                    <tr class="border-bottom">
                        <td class="align-middle">
                            <a class="text-decoration-none text-primary" href="nom de l'article">{{ $details['name'] }}</a>
                        </td>

                        <td class="text-center align-middle">{{ $details['price'] }} €</td>

                        <td class="text-center align-middle">
                            <input type="number" step="1" value="{{ $details['quantity'] }}" name="produit_quantite" class="form-control"
                                   min="0" max="100">
                        </td>

                        <td class="text-center align-middle">
                            {{ number_format($details['quantity'] * $details['price'], 2) }} €
                        </td>

                        <td class="actions text-center">
                            <button class="btn btn-secondary update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
                            <button class="btn btn-primary remove-from-cart" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>

                        @endforeach
                    @endif


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
                        <h5 class="">Frais de port:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>{{ number_format(7.50, 2) }} €</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 d-flex justify-content-end ">
                        <h5 class="">Total TTC:</h5>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end ">
                        <h5>{{ number_format($total + 7.50, 2) }} €</h5>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col d-flex justify-content-start ">
                        <a href="{{route('home.index')}}" class="btn btn-outline-primary" role="button"
                           aria-pressed="true">CONTINUER MES ACHATS</a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <input class="btn btn-primary" type="submit" value="COMMANDER" name="recalcul">
                    </div>

                </div>

            </div>
        </main>
    </form>
@endsection

@section('scripts')


    <script type="text/javascript">

        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('/panier') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('/panier') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection

