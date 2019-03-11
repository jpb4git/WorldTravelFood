@extends('admin.admin', ['title' => 'Liste des Catégories'])


@section('content')
    <h1 class="w100 bg-dark text-light text-center mb-5">Products</h1>
    <a class="btn btn-success ml-5 mb-5" href="{{route('product.create')}}">Ajouter un  Produit</a>

    @if (isset($errorsConstraint))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-danger text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $errorsConstraint }}</p>
                </div>
            </div>
        </div>
    @endif
    @if (isset($Addproduct))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $Addproduct }}</p>
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
                <td><img class="img-product-admin" src="{{asset('assets/images/'.$product->image)}}" alt=""></td>
                <form action="/admin/product/edit/{{$product->id}}" method="post">
                    @csrf
                    <td><button type="submit" class="btn btn-secondary" href="/admin/product/edit/{{$product->id}}">Modifier</button></td>
                </form>
                <form action="/admin/product/destroy/{{$product->id}}" method="post">
                    @csrf
                    <td><button type="submit" class="btn btn-primary" href="/admin/product/destroy/{{$product->id}}">supprimer</button></td>
                </form>
            </tr>


            @endforeach

            </tbody>
    </table>
@endsection
