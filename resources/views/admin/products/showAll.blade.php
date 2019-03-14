@extends('admin.admin', ['title' => 'Liste des Catégories'])


@section('content')
    <h1 class="w100 bg-dark text-light text-center mb-5">Products</h1>
    <a class="btn btn-success ml-5 mb-5" href="{{route('products.create')}}">Ajouter un Produit</a>

    @if (isset($errorsConstraint))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-danger text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $errorsConstraint }}</p>
                </div>
            </div>
        </div>
    @endif
    @if (isset($addProd))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $addProd}}</p>
                </div>
            </div>
        </div>
    @endif
    @if (isset($supprProd))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $supprProd }}</p>
                </div>
            </div>
        </div>
    @endif
    @if (isset($updateProd))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $updateProd }}</p>
                </div>
            </div>
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">weight</th>
            <th scope="col">stock</th>
            <th scope="col">catégorie</th>
            <th scope="col">img</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        @foreach($products as $product)
            <tbody>
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->stock}}</td>
                <td>{{ $product->category ? $product->category->name : 'nomane' }}</td>
                <td><img class="img-product-admin" src="{{asset('assets/images/imgcatalogue/'.$product->image)}}"
                         alt=""></td>

                <td><a class="btn btn-secondary" href="{{ route('products.edit', ['product' => $product]) }}">Modifier</a></td>
                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="post">
                        @csrf
                        @method('DELETE')<input type="submit" class="btn btn-primary" value="supprimer">
                    </form>
                </td>
            </tr>


            @endforeach

            </tbody>
    </table>
@endsection
