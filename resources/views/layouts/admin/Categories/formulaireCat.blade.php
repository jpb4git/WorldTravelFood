@extends('layouts.admin.admin', ['title' => 'Catégories'])


@section('content')
    <h1>Ajout Catégorie</h1>
<div class="container mt-5">
    <div class="row">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Nom de la Catégorie</label>
                <input type="text" class="form-control" name="name"   aria-describedby="" placeholder="">
            </div>

            <a href="admin/cat/insert" type="submit" class="btn btn-primary">Submit</a>
        </form>
    </div>
</div>
@endsection
