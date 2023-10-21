@extends('layouts.mainlayout')
@section('title', 'Product')

@section('content')
    <h1>
        Ini halaman Product
    </h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
        @foreach ($productlist as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->name}}</td>
            </tr>
        @endforeach    
    </table>
@endsection