@extends('admin.admin', ['title' => 'administration'])


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-logo-admin d-flex flex-sm-column flex-lg-row">
                    <img src="{{asset('assets/images/logo.png')}}" class="adminImgLogo" alt="Responsive image">
                    <h1 class="ml-5 h1-color"> Administration </h1>
                    <h1 class="ml-5 h1-color">World Travel Food</h1>
                </div>
                <hr>
                <h1 class="ml-5 d-flex align-items-center">
                    <div class="vapor">Dashboard</div>
                </h1>
            </div>
        </div>
        <div class="row mt-0 ">
            <div class="col-12 text-center mb-3 border-2 rounded">
                <i class="fas fa-database w-100 big-icon text-light"></i>
            </div>
                
            <div class="row">
                   <div class="wrapper-indocator">
                       <div class="header">
                           <img src="" alt="">
                       </div>
                       <div class="body"></div>
                       <div class="footer"></div>
                   </div> 
            </div>
        </div>
        <hr>
        <div class="row mt-1 mb-5">
            <div class="col-12 text-center mb-3 border-2 rounded">
                <i class="fas fa-database w-100 big-icon text-light"></i>
            </div>
         
        </div>
    </div>
    <hr>
@endsection
