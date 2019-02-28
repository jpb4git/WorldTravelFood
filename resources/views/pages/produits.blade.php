@extends('layouts.master', ['title' => 'Catalogue'])


@section('content')
    <h1>Produits</h1>
    <?php dump($arr); ?>
    <ul>
        @foreach($arr as $test)
            <li>
                {{$test}}
            </li>
        @endforeach
    </ul>
@endsection
