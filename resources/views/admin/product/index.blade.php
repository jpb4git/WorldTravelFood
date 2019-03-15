@extends('admin.layouts.app', ['title' => 'Catalogue'])


@section('content')
    <div class="container">
        <div class="row bg-primary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">PRODUITS</h1>
            </div>
        </div>
        <div>
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary mt-4">Ajouter un produit</a>
        </div>
        <div class="row mt-4 mb-5">
            @foreach ($products as $product)

                <table class="table">
                    <thead>
                    <tr>
                        <th>image</th>
                        <th>Nom</th>
                        <th>catégorie</th>
                        <th>description</th>
                        <th>prix</th>
                        <th>poids</th>
                        <th>stock</th>

                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>
                            <img src="{{ asset('assets/images/mnm.jpg') }}" class="card-img-top w-50 "
                                 alt=>
                        </td>
                        <td> {{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td> {{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->weight }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>
                            <a href="{{ route('admin.products.show', $product) }}"
                               class="btn btn-outline-primary mt-4">Consulter
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('admin.products.edit', $product) }}"
                               class="btn btn-primary mt-4">Modifier
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="suppressionArticle" value=""
                                        class="btn btn-primary mt-4 ">Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>

            @endforeach
        </div>
    </div>

@endsection



