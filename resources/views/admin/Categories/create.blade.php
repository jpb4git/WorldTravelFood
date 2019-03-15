@extends('admin.admin', ['title' => 'création Catégories'])


@section('content')

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col">
                <h1>Ajout Catégorie</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <form action="{{route('admin.categories.store')}}" method="POST">
                    <div class="form-group">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger toaster-info">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="exampleInputEmail1">Nom de la Catégorie</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                    </div>

                    <button type="submit" class="btn btn-primary" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
