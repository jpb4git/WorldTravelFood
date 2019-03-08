@extends('layouts.admin.admin', ['title' => 'Catégories'])


@section('content')
    <h1 class="w100 bg-dark text-light text-center mt-5 mb-5">All Cats</h1>
    <a href="{{route('admin/cat/form')}}">Ajouter cats</a>

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
                <th scope="row">1</th>
                <td>{{$cat->name}}</td>
                <td><a href="">Modifier</a></td>
                <td><a href="">supprimer</a></td>
            </tr>



    @endforeach

            </tbody>
    </table>
@endsection



