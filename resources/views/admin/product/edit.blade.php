@extends('admin.layouts.app', ['title' => 'Mise à jour Fiche Produit'])

@section('content')

    <div class="container mt-5">
        <div class="row bg-primary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">MISE A JOUR PRODUIT </h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-12 ">
                <form action="{{route('admin.products.update',[$product])}}" method="post">
                @csrf
                @method('PUT')
                <!--pour afficher message d'erreur si champs non saisi-->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group row justify-content-center mt-3">
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-3">
                        <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
                        <select class="col-sm-5 form-control" name="category_id">
                            <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
        </div>
        <div class="form-group row justify-content-center mt-3">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-5">
                    <textarea class="form-control" name="description" value="{{ $product->description }}"
                              rows="10"></textarea>
            </div>
        </div>
        <div class="form-group row justify-content-center mt-3">
            <label for="prix" class="col-sm-2 col-form-label">Prix</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="price" value="{{ $product->price}}">
            </div>
        </div>
        <div class="form-group row justify-content-center mt-3">
            <label for="poids" class="col-sm-2 col-form-label">Poids</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="weight" value="{{ $product->weight }}">
            </div>
        </div>
        <div class="form-group row justify-content-center mt-3">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" name="stock" value="{{ $product->stock }}">
            </div>
        </div>
        <div class="text-right">
            <button type="submit" name="submitValidation" class="btn btn-primary mt-5">ENREGISTRER
            </button>
        </div>
        </form>
    </div>
    </div>
    </div>


@endsection