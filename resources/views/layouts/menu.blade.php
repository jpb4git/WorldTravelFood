<style>
    hr.style1 {
        border-top: 8px solid #67c7c6;
    }

</style>


<div class="container-fluid navbar-center">
    <br>
    <hr class="style1">
    <br>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">WTF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">ACCUEIL <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{-- route('layouts.product.showAll') --}}" class="nav-link">BOUTIQUE</a>
                </li>
                <li class="nav-item">
                    <a href="{{-- route('layouts.pays.showAll') --}}" class="nav-link">PAYS</a>
                </li>
                <li class="nav-item">
                    <a href="{{--route('layouts.cat.showAll') --}}" class="nav-link">CATÉGORIES</a>
                </li>
                <li class="nav-item">
                    <a href="{{--route('layouts.concept.showAll') --}}" class="nav-link">CONCEPT</a>
                </li>
                <li class="nav-item">
                    <a href="{{--route('layouts.contact.showAll') --}}" class="nav-link">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
