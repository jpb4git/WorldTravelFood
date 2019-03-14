@extends('admin.layouts.app', ['title' => 'Catalogue'])


@section('content')
    <div class="container">
        <div>
            <button type="submit" name="submitAjoutProduit" class="btn btn-primary mt-4">Ajouter un produit
            </button>
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
                            <button type="submit" name="submitMiseAJourProduit" class="btn btn-primary mt-4">Mise à jour
                            </button>
                        </td>
                        <td>
                            <button type="submit" name="suppressionArticle" value=""
                                    class="btn btn-primary mt-4 ">Supprimer
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>

            @endforeach
        </div>
    </div>

@endsection



