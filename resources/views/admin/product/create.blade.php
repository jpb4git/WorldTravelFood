@extends('admin.layouts.app', ['title' => 'Ajout Produit'])

@section('content')

    <div class="container mt-5">
        <div class="row bg-primary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">AJOUT D'UN PRODUIT: </h1>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-sm-12 ">
                <form action="{{route('products.store')}}" method="post">
                    <div class="form-group row justify-content-center mt-3">
                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-3">
                        <label for="categorie" class="col-sm-2 col-form-label">Catégorie</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="category" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" name="description" rows="10"required></textarea>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-3">
                        <label for="prix" class="col-sm-2 col-form-label">Prix</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="price" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-3">
                        <label for="poids" class="col-sm-2 col-form-label">Poids</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="weight" required>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center mt-3">
                        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="stock" required>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="submitValidation" class="btn btn-primary mt-5">ENREGISTRER
                        </button>
                    </div>
                </form>
            </div>
        </div>



@endsection
