@extends('admin.admin', ['title' => 'Modification Catégories'])


@section('content')

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col">
                <h1>Modification Catégorie</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form action="/admin/cat/update/{{$cat->id}}" method="post">
                    <div class="form-group">
                        @csrf
                        <label for="exampleInputEmail1">Nom de la Catégorie</label>
                        <input type="text" class="form-control" name="name" value="{{$cat->name}}">
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

                    <button type="submit" class="btn btn-primary" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
