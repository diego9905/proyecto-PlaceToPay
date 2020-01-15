@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ URL('/sellers/' .$seller->id_sellers) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}

            <div class="form-group">

                <label for="first_name" class="control-label">{{'First Name'}}</label>
                <input type="text" class="form-control" name="first_name" id="first_name"
                       value="{{ $seller->first_name }}">

            </div>

            <div class="form-group">

                <label for="last_name" class="control-label">{{'Last Name'}}</label>
                <input type="text" class="form-control" name="last_name" id="last_name"
                       value="{{ $seller->last_name }}">

            </div>

            <div class="form-group">

                <label for="nit" class="control-label">{{'Nit'}}</label>
                <input type="text" class="form-control" name="nit" id="nit"
                       value="{{ $seller->nit }}">

            </div>

            <div class="form-group">

                <label for="address" class="control-label">{{'Address'}}</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $seller->address }}">

            </div>

            <div class="form-group">

                <label for="email" class="control-label">{{'Email'}}</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $seller->email }}">

            </div>

            <div class="form-group">

                <label for="phone" class="control-label">{{'Phone'}}</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $seller->phone }}">

            </div>

            <div class="form-group">

                <label for="city" class="control-label">{{'City'}}</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ $seller->city }}">

            </div>
            <input class="btn btn-success" type="submit" value="Modify">

            <a class="btn btn-primary" href="{{ url('sellers') }}">Return</a>


        </form>
    </div>
@endsection
