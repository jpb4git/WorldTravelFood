<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">



</head>

<body>

<header>
    <div class="container-fluid p-3">
    <div class="row ">
        <div class="col">
            <div class="d-flex justify-content-center p-2">
                <img src="{{asset('assets/images/logo.png')}}" id="header-logo" class="img-fluid size"
                     alt="Responsive image">
            </div>
        </div>
    </div>
    </div>

</header>

<div>
    @yield('content')
</div>

<footer class="container-fluid p-4">
    <div class="row no-gutters justify-content-center text-center">
        <div class="col-12, col-md-6, col-lg-3">
            <a>
                <img class="logo" src="{{asset('assets/images/logo-WTF-vertical.png')}}" alt="logo world travel food">
            </a>
        </div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
</body>

</html>
