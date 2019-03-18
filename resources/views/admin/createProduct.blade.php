@extends('admin.app', ['title' => 'Back-Create'])

@section('content')

    <main class="container-fluid">
        <div class="row bg-secondary text-white justify-content-start pt-5 pb-5 ">
            <div class="col">
                <nav class="navbar navbar-light bg-secondary">
                    <a class="navbar-brand" href="{{route('products.index')}}">DASHBOARD</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="panel panel-default mt-5 ml-5">
                    <div class="panel-heading">
                        <h2 class="panel-title">CREATE AN ARTICLE</h2>
                    </div>
                    <div class="panel-body">
                        <form class="" action="{{ route('products.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" name="title" placeholder="title product">
                            </div>
                            <div class="form-group">
                                <label for="price">price</label>
                                <input type="text" class="form-control" name="price" placeholder="price product">
                            </div>
                            <div class="form-group">
                                <label for="stock">stock</label>
                                <input type="number" class="form-control" name="stock" placeholder="stock quantity">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

