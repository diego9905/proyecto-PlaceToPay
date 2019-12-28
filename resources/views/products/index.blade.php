@extends('layouts.app')

@section('content')

    <br class="container">

        @if(Session::has('Message')){{
    Session::get('Message')
}}
        @endif

    </br>
    <div class="container">
        <div class="row-cols-1">
    <a href="{{ url('products/create') }}" class="btn btn-success">Add products</a>

    <div class="container">
        <div class="row justify-content-center">
    <table class="table table-light table-light">
        <thead class=thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Description</th>
            <th>Reference</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->reference}}</td>
                <td>{{$product->price}}</td>
                <td>

                    <a class="btn btn-warning" href="{{ url('/products/'.$product->id_products.'/edit') }}">Edit</a>

                    <form method="post" action="{{ url('/products/'.$product->id_products) }}" style="display:inline">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('delete?');">delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection










