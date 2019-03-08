@extends('admin.admin', ['title' => 'Catégories'])


@section('content')

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col">
                <h1>Ajout Catégorie</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form action="store" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="exampleInputEmail1">Nom de la Catégorie</label>
                        <input type="text" class="form-control" name="name" aria-describedby="" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
