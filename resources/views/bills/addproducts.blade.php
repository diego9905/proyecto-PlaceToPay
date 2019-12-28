@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="well well-sm">
            <div class="row">
                <div class="col-5">
                    <label for="id_products" class="id_products">{{'Product '}}</label>
                    <select name="id_products" id="id_products" class="form-control" required="required">
                        @foreach($products as $product)
                            <option value="{{  $product['id_products'] }}">{{ $product['description'] }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="row-cols-lg-2">

                    <label for="product_quantity" class="control-label">{{'Quantity'}}</label>
                    <input type="text" class="form-control" name="product_quantity" id="product_quantity"
                           value="{{ old('Product Quantity' )}}">

                </div>


            </div>
        </div>


    </div>
@endsection






