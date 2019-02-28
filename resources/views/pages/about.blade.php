@extends('layouts.master', ['title' => 'Panier'])


@section('content')
    <h1>About Page</h1>

    <ul>
        @foreach($arr as $test)
            <li>
                {{$test}}
            </li>
        @endforeach
    </ul>
@endsection

