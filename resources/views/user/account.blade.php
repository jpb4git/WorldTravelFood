@extends('layouts.app')
@section('title')
    Mon Compte
@stop
@section('content')
    <main class="container border mt-5 mb-5">
        <div class="row bg-secondary text-white justify-content-start py-2">
            <div class="col-sm-12 ">
                <h1 class="h5 my-auto">MON COMPTE</h1>
            </div>
        </div>
    <article id="formulaire" class="container w-50 mt-3 mb-3 justify-content-center text-center mb-3">
        <form id="formulaire" method="post">
            <div class="form-group">
                <label class="nomchamp" for="InputEmail">Adresse e-mail actuelle :</label>
                <h6><strong>{{ $user->email }}</strong></h6>
                <input type="email" class="form-control" id="NewEmail" aria-describedby="emailHelp"
                       placeholder="nouvelle adresse e-mail">
                <small id="emailHelp" class="form-text text-muted mb-2">Nous ne partagerons jamais votre e-mail avec des
                    tiers.
                </small>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
            <div class="form-group">
                <label class="nomchamp" for="InputPassword">Modifier le mot de passe</label>
                <input type="password" class="form-control" id="Password" placeholder="ancien">
                <input type="password" class="form-control" id="NewPassword" placeholder="nouveau">
                <small id="emailHelp" class="form-text text-muted mb-2">MINIMUM 6 CARACTERES.
                </small>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
        </form>
    </article>
    </main>
@endsection