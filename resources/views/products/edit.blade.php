@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ URL('/products/' .$product->id_products) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}

            <div class="form-group">

                <label for="description" class="control-label">{{'Description'}}</label>
                <input type="text" class="form-control" name="description" id="description" value="{{ $product->description }}">

            </div>

            <div class="form-group">

                <label for="quantity" class="control-label">{{'Quantity'}}</label>
                <input type="text" class="form-control" name="quantity" id="quantity"
                       value="{{ $product->quantity }}">

            </div>

            <div class="form-group">

                <label for="price" class="control-label">{{'Price'}}</label>
                <input type="text" class="form-control" name="price" id="price"
                       value="{{ $product->price }}">


            <input class="btn btn-success" type="submit" value="Modify">

            <a class="btn btn-primary" href="{{ url('products') }}">Return</a>


        </form>
    </div>
@endsection
