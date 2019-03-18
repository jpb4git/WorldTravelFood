@extends('admin.app', ['title' => 'Back-edit'])

@section('content')

    <main class="container-fluid">
        <div class="row bg-secondary text-white justify-content-start pt-5 pb-5 ">
            <div class="col">
                <nav class="navbar navbar-light bg-secondary">
                    <a class="navbar-brand" href="{{route('products.index')}}">DASHBOARD</a>
                </nav>
            </div>
        </div>
        <div class="row ">
            <table class="table">
                <thead class="bg-dark table-bordered">
                <tr>
                    <th class="text-white text-left" scope="col">N°</th>
                    <th class="text-white text-left" scope="col">ARTICLE</th>
                    <th class="text-white text-center" scope="col">PRICE</th>
                    <th class="text-white text-center" scope="col">STOCK</th>
                    <th class="text-white text-center" scope="col">DELETE</th>
                </tr>
                </thead>

                <tbody>
                    <tr class="border-bottom table-bordered">
                        <td>
                            <h6>{{ $product->id}}</h6>
                        </td>

                        <td>
                            <h5><strong>{{ $product->name}}</strong></h5>
                        </td>

                        <td class="text-center">
                            <h6>{{ $product->price }}€</h6>
                        </td>

                        <td class="text-center">
                            <h5><strong>{{ $product->stock}}</strong></h5>
                        </td>
                        <form action="showAll.blade.php" method="post">
                            <td class="text-center">
                                <button class="btn btn-success mr-3" type="submit" name="editer_produit">
                                    <i class="far fa-edit"></i>
                                </button>
                                <button class="btn btn-danger ml-3" type="submit" name="supprimer_produit">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

@endsection
