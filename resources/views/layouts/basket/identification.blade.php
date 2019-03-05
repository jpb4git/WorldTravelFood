@extends('layouts.app', ['title' => 'Votre Panier'])

@section('content')
<div class="container mt-5">
    <div class="row bg-primary text-white justify-content-start py-2">
        <div class="col-sm-12 ">
            <h1 class="h5 my-auto">IDENTIFICATION</h1>
        </div>

    </div>

    <div class="row my-5">
        <div class="col-lg-6 ">
            <span>CRÉEZ VOTRE COMPTE</span>
                 <p class="mt-3">Saisissez votre adresse mail pour créer votre compte : </p>
                <form action="" method="post">
                    <div class="form-inline">
                        <input type="email" class="form-control mb-5" name="mail" placeholder="email">
                    </div>
                    <div>
                        <button type="submit" name="submitCreationCompte" class="btn btn-primary">CRÉEZ VOTRE COMPTE
                        </button>
                    </div>
                </form>
        </div>
        <div class="col-lg-6">
            <span>DÉJÀ INSCRIT?</span>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="mail" class="mr-3 mt-3">Votre adresse mail</label>
                        <input type="email" class="form-control" name="mail" placeholder="email">
                        <label for="mail" class="mr-3 mt-3">Votre mot de passe</label>
                        <input type="password" class="form-control mb-5" name="motdepasse" placeholder="xxxxxxx">
                    </div>
                    <div>
                        <button type="submit" name="submitIdentification" class="btn btn-primary">IDENTIFICATION
                        </button>
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection