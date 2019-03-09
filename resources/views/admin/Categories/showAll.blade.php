@extends('admin.admin', ['title' => 'Liste des Catégories'])


@section('content')
    <h1 class="w100 bg-dark text-light text-center mt-5 mb-5">Catégories</h1>
    <a class="btn btn-success ml-5 mb-5" href="{{route('cat.create')}}">Ajouter une  catégorie</a>

    @if (isset($errorsConstraint))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-danger text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $errorsConstraint }}</p>
                </div>
            </div>
        </div>
    @endif
    @if (isset($AddCat))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $AddCat }}</p>
                </div>
            </div>
        </div>
    @endif
    @if (isset($supprCat))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $supprCat }}</p>
                </div>
            </div>
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        @foreach($cats as $cat)
            <tbody>
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->name}}</td>
                <form action="/admin/cat/edit/{{$cat->id}}" method="post">
                    @csrf
                    <td><button type="submit" class="btn btn-secondary" href="/admin/cat/edit/{{$cat->id}}">Modifier</button></td>
                </form>
                <form action="/admin/cat/destroy/{{$cat->id}}" method="post">
                    @csrf
                    <td><button type="submit" class="btn btn-primary" href="/admin/cat/destroy/{{$cat->id}}">supprimer</button></td>
                </form>


            </tr>


            @endforeach

            </tbody>
    </table>
@endsection



