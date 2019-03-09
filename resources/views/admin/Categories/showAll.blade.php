@extends('admin.admin', ['title' => 'Catégories'])


@section('content')
    <h1 class="w100 bg-dark text-light text-center mt-5 mb-5">All Cats</h1>
    <a class="btn btn-primary" href="{{route('cat.create')}}">Ajouter cats</a>

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
                <td><a class="btn btn-primary" href="/admin/cat/update/{{$cat->id}}">Modifier</a></td>
                <td><a class="btn btn-primary" href="/admin/cat/destroy/{{$cat->id}}">supprimer</a></td>
            </tr>


            @endforeach

            </tbody>
    </table>
@endsection



