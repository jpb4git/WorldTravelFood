@extends('layouts.app', ['title' => 'Home'])
@section('content')
<style>

    .container-fluid{


    }

    .img-car {
        height: 500px;
    }
</style>

    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/car-1.jpeg')}}" class="d-block w-100 img-fluid img-car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>caption n 1 </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/car-2.jpeg')}}" class="d-block w-100 img-fluid img-car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>caption n 2 </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/car-4.jpeg')}}" class="d-block w-100 img-fluid img-car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Test</h5>
                        <p>caption n 3 </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
   @
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
              t
            </div>
            <div class="col-md-4 text-center">T
            </div>
            <div class="col-md-4 text-center">T
            </div>
        </div>
    </div>



@endsection

