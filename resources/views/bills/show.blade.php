@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header">
                    SALE BILL # {{ str_pad ($bill->id_bills, 4, '0', STR_PAD_LEFT) }}

                </h2>

                <div class="well well-sm">
                    <div class="row">
                        <div class="col-3">
                            <label for="customer name" class="control-label">{{'Customer Name:'}}</label>
                            <div class="col-xs-6">
                                <input class="form-control typeahead" type="text" readonly

                                       value="{{ $client->name." ".$client->last_name}}"/>
                            </div>

                            <label for="seller_name" class="control-label">{{'Seller Name:'}}</label>
                            <div class="col-xs-2">
                                <input class="form-control" type="text" readonly value={{ $user->name }} />
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="customer_identification_card" class="control-label">{{'Customer ID:'}}</label>
                            <div class="col-xs-2">
                                <input class="form-control" type="text" readonly
                                       value={{ $client->identification_card }} />
                            </div>

                            <label for="seller_nit" class="control-label">{{'Seller Nit:'}}</label>
                            <div class="col-xs-4">
                                <input class="form-control" type="text" readonly value={{ $bill->seller_nit }} />
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="customer name" class="control-label">{{'Generated Bill:'}}</label>

                            <div class="col-xs-6">
                                <input class="form-control typeahead" type="text" readonly
                                       value="{{ $bill->generated_bill }}"/>
                            </div>

                            <label for="seller_name" class="control-label">{{'Delivered Bill:'}}</label>
                            <div class="col-xs-2">
                                <input class="form-control" type="text" readonly value={{ $bill->delivered_bill }} />
                            </div>
                        </div>

                        <div class="col-3">
                            <label for="customer name" class="control-label">{{'Overdue Bill:'}}</label>

                            <div class="col-xs-6">
                                <input class="form-control typeahead" type="text" readonly
                                       value="{{ $bill->overdue_bill }}"/>
                            </div>

                            <label for="seller_name" class="control-label">{{'State:'}}</label>
                            <div class="col-xs-2">
                                <input class="form-control" type="text" readonly value={{ $bill->state }} />
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Product</th>

                        <th>Description</th>
                        <th style="width:100px;">Quantity</th>
                        <th style="width:100px;">Price</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$loop->iteration}}</td>

                            <td class="text-body">{{$product->description}}</td>
                            <td class="text-body">{{$product->quantity}}</td>
                            <td class="text-body">$ {{number_format($product->price, 2)}}</td>
                        </tr>
                    @endforeach


                    </tbody>
                    <tfoot>

                    <tr>
                        <td colspan="3" class="text-right"><b>IVA</b></td>
                        <td class="text-right">$ {{ number_format($bill->iva, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right"><b>SubTotal</b></td>
                        <td class="text-right">$ {{ number_format($bill->subtotal, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right"><b>Total</b></td>
                        <td class="text-right">$ {{ number_format($bill->total, 2) }}</td>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
@endsection