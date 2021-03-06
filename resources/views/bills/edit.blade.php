@extends('layouts.app')

@section('content')
    <div class="well well-sm">
        <div class="row">
            <div class="container">
                <form action="{{ URL('/bills/' .$bill->id_bills) }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}

                    <div class="col-6">
                        <div class="form-group">

                            <label for="generated_bill" class="control-label">{{'Generated Bill'}}</label>
                            <input type="date" class="form-control" name="generated_bill" id="generated_bill"
                                   value="{{ $bill->generated_bill }}">

                        </div>

                        <div class="form-group">

                            <label for="delivered_bill" class="control-label">{{'Delivered Name'}}</label>
                            <input type="date" class="form-control" name="delivered_bill" id="delivered_bill"
                                   value="{{ $bill->delivered_bill }}">

                        </div>
                        <div class="col-6">

                        </div>

                        <div class="form-group">

                            <label for="overdue_bill" class="control-label">{{'Overdue Bill'}}</label>
                            <input type="date" class="form-control" name="overdue_bill" id="overdue_bill"
                                   value="{{ $bill->overdue_bill }}">

                        </div>

                        <div class="form-group">

                            <label for="company_name" class="control-label">{{'Company Name'}}</label>
                            <input type="text" class="form-control" name="company_name" id="company_name"
                                   value="{{ $bill->company_name }}">

                        </div>

                        <div class="col-6">
                        </div>


                        <div class="form-group">

                            <label for="state" class="control-label"> {{'State'}}</label>
                            <select name="state" id="state" class="form-control" required="required">
                                @foreach($states as $state)
                                    <option value="{{  $state['name'] }}">{{ $state['name'] }}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">

                            <label for="detail" class="control-label">{{'Detail'}}</label>
                            <input type="text" class="form-control" name="detail" id="detail"
                                   value="{{ $bill->detail }}">

                        </div>
                        <div class="col-6">
                        </div>

                        <div class="form-group">

                            <label for="iva" class="control-label">{{'Iva'}}</label>
                            <input type="text" class="form-control" name="iva" id="iva" value="{{ $bill->iva }}">

                        </div>

                        <div class="form-group">

                            <label for="subtotal" class="control-label">{{'Subtotal'}}</label>
                            <input type="text" class="form-control" name="subtotal" id="subtotal"
                                   value="{{ $bill->subtotal }}">

                        </div>
                        <div class="col-6">
                        </div>


                        <div class="form-group">

                            <label for="total" class="control-label">{{'Total'}}</label>
                            <input type="text" class="form-control" name="total" id="total" value="{{ $bill->total }}">

                        </div>
                    </div>

                    <input class="btn btn-success" type="submit" value="Modify">

                    <a class="btn btn-primary" href="{{ url('bills') }}">Return</a>


                </form>
            </div>
        </div>
    </div>
@endsection
