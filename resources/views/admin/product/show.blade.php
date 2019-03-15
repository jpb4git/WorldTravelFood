@extends('admin.layouts.app', ['title' => 'Fiche produit'])

@section('content')

    <div class="container">

        <div class="row pb-5">
            <h1>{{$product->name}}</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="size-Product img-fluid" src="{{ asset('assets/images/'.$product->image) }}" alt="">
            </div>
            <div class="col-md-8">
                <p>Catégorie: {{$product->category->name}}</p>
                <p>Description: </p>
                <p>{{$product->description}}</p>
                <p>Prix: {{$product->price}} euros</p>
                <p>Poids: {{$product->weight}}</p>
                <p>Stock: {{$product->stock}}</p>
            </div>
        </div>
    </div>

@endsection