@extends('layouts.app')
@section('title')
    Mes commandes
@stop
@section('content')
    <form action="index.blade.php" method="post">
        <main class="container border mt-5 mb-5">
            <div class="row bg-secondary text-white justify-content-start py-2">
                <div class="col-sm-12 ">
                    <h1 class="h5 my-auto">MES COMMANDES</h1>
                </div>
            </div>
            <div class="row mt-3">
                <table class="table">

                    @for($i = 0; $i < 3; $i++)

                        <thead class="bg-dark table-bordered">
                        <tr>
                            <th class="text-white text-left" scope="col">REFERENCE</th>
                            <th class="text-white text-left" scope="col">ARTICLE</th>
                            <th class="text-white text-center" scope="col">PRIX</th>
                            <th class="text-white text-center" scope="col">QUANTITE</th>
                            <th class="text-white text-center" scope="col">TOTAL</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr class="border-bottom">
                            <td>
                                1234567890
                            </td>
                            <td>
                                <img class="w-25"
                                     src="https://thumbs.dreamstime.com/t/products-colorful-stuck-stripes-text-alphabets-written-over-background-79309192.jpg"
                                     alt="product image">
                                <a class="text-decoration-none text-primary" href="nom de l'article">Nom de
                                    l'article</a>
                            </td>

                            <td class="text-center">100€</td>

                            <td class="text-center">
                                    1
                            </td>

                            <td class="text-center"></td>

                                </button>
                            </td>
                        </tr>
                        <tr class="border-bottom">
                            <td>

                            </td>
                            <td>
                                <img class="w-25"
                                     src="https://thumbs.dreamstime.com/t/products-colorful-stuck-stripes-text-alphabets-written-over-background-79309192.jpg"
                                     alt="product image">
                                <a class="text-decoration-none text-primary" href="nom de l'article">Nom de
                                    l'article</a>
                            </td>

                            <td class="text-center">100€</td>

                            <td class="text-center">
                            1
                            </td>

                            <td class="text-center">200€</td>

                            </button>
                            </td>
                        </tr>
                        @endfor

                        </tbody>
                </table>
            </div>
        </main>
    </form>
@endsection