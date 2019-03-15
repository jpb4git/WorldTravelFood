@extends('admin.admin', ['title' => 'Liste des Catégories'])


@section('content')
    <h1 class="w100 bg-dark text-light text-center mb-5">Catégories</h1>
    <a class="btn btn-success ml-5 mb-5" href="{{route('admin.categories.create')}}">Ajouter une catégorie</a>

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
    @if (isset($pudateCat))
        <div class="row toaster-info">
            <div class="col">
                <div class="bg-success text-center p-3 mt-5 mb-5">
                    <p class="text-light">{{ $updateCat }}</p>
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

        @foreach($categories as $category)
            <tbody>
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>

                <td>
                    <form action="{{route('admin.categories.edit',[$category])}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-secondary"
                                href="{{ route('admin.categories.edit', ['category' => $category])}}">Modifier
                        </button>
                    </form>
                </td>


                <td>
                    <form action="{{ route('admin.categories.destroy', $category) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-primary" value="supprimer">
                    </form>
                </td>


            </tr>


            @endforeach

            </tbody>
    </table>
@endsection



