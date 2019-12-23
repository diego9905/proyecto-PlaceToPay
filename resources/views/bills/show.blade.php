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
                        <div class="col-4">
                            <label for="customer name" class="control-label">{{'Customer Name:'}}</label>

                            <div class="col-xs-6">
                                <input class="form-control typeahead" type="text" readonly
                                       value="{{ $bill->customer_name }}"/>
                            </div>

                            <label for="seller_name" class="control-label">{{'Seller Name:'}}</label>
                            <div class="col-xs-2">
                                <input class="form-control" type="text" readonly value={{ $bill->seller_name }} />
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="customer_identification_card" class="control-label">{{'Customer ID:'}}</label>
                            <div class="col-xs-2">
                                <input class="form-control" type="text" readonly
                                       value={{ $bill->customer_identification_card }} />
                            </div>

                            <label for="seller_nit" class="control-label">{{'Seller Nit:'}}</label>
                            <div class="col-xs-4">
                                <input class="form-control" type="text" readonly value={{ $bill->seller_nit }} />
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th style="width:100px;">Cantidad</th>
                        <th style="width:100px;">P.U</th>
                        <th style="width:100px;">Total</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><b>IVA</b></td>
                        <td class="text-right">$ {{ number_format($bill->iva, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right"><b>Sub Total</b></td>
                        <td class="text-right">$ {{ number_format($bill->subTotal, 2) }}</td>
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