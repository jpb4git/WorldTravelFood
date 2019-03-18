@extends('admin.app', ['title' => 'Back-Create'])

@section('content')
    <div class="row ">
        <table class="table">
            <thead class="bg-dark table-bordered">
            <tr>
                <th class="text-white text-left" scope="col">N°</th>
                <th class="text-white text-left" scope="col">ARTICLE</th>
                <th class="text-white text-center" scope="col">PRICE</th>
                <th class="text-white text-center" scope="col">STOCK</th>
            </tr>
            </thead>

            <tbody>
            <tr class="border-bottom table-bordered">
                <td>
                    <h6>#</h6>
                </td>

                <td>
                    <h5><strong>{{ $newProduct['title']}}</strong></h5>
                </td>

                <td class="text-center">
                    <h6>{{ $newProduct['price']}}€</h6>
                </td>

                <td class="text-center">
                    <h5><strong>{{ $newProduct['stock']}}</strong></h5>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection