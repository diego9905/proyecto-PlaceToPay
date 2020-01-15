@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="well well-sm">
            <form action="{{ url('bills') }}/{{ $bill->id_bills }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group col-4">
                    <input type="hidden" readonly="readonly" class="form-control hidden" id="id_bills" name="id_bills"
                           placeholder="0" value="{{ $bill->id_bills }}">
                </div>
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

                <p><br></p>
                <a class="btn btn-dark" href="{{ route('billsProducts.post',  $bill->id_bills ) }}"> Save </a>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>

        </div>


    </div>

@endsection
