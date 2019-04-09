@extends('layouts.app')
@section('title')
    Mes commandes
@stop
@section('content')
    <form action="" method="post">
        <main class="container border mt-5 mb-5">
            <div class="row bg-secondary text-white justify-content-start py-2">
                <div class="col-sm-12 ">
                    <h1 class="h5 my-auto">MES COMMANDES</h1>
                </div>
            </div>
            <div class="row mt-3">
                <table class="table">

                    @foreach ($user->orders as $order)
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
                                {{$order->number}}
                            </td>
                            <td>

                            </td>

                            <td class="text-center"></td>

                            <td class="text-center">

                            </td>

                            <td class="text-center"></td>

                        </tr>
                        <tr class="border-bottom">
                            <td>

                            </td>
                            <td>

                            </td>

                            <td class="text-center"></td>

                            <td class="text-center">

                            </td>

                            <td class="text-center">{{$order->price}} €</td>

                        </tr>

                        @endforeach

                        </tbody>
                </table>
            </div>
        </main>
    </form>
@endsection