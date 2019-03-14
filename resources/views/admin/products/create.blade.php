@extends('admin.admin', ['title' => 'création Catégories'])


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

        </div>
    </div>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col">
                <h1>Add Product </h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form action="store" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        @csrf
                        <label for="name">Nom de la Catégorie</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group w-100">
                        <label for="description">Description</label><br>
                        <textarea name="description" class="areaAdmin"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="weight">weight</label>
                        <input type="text" class="form-control" name="weight">
                    </div>

                    <div class="form-group">
                        <label for="stock">stock</label>
                        <input type="text" class="form-control" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="file">image du produit</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="form-group">
                        <select name="category">
                            <option value="--">Select a catégorie</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Sélectionner l'image du produit</label>
                        <input type="file" id="file" name="file" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
