@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ URL('/clients/' .$client->id_clients) }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PATCH')}}

            <div class="form-group">

                <label for="name" class="control-label">{{'First Name'}}</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $client->name }}">

            </div>

            <div class="form-group">

                <label for="last_name" class="control-label">{{'Last Name'}}</label>
                <input type="text" class="form-control" name="last_name" id="last_name"
                       value="{{ $client->last_name }}">

            </div>

            <div class="form-group">

                <label for="identification_card" class="control-label">{{'Identification card'}}</label>
                <input type="text" class="form-control" name="identification_card" id="identification_card"
                       value="{{ $client->identification_card }}">

            </div>

            <div class="form-group">

                <label for="address" class="control-label">{{'Address'}}</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $client->address }}">

            </div>

            <div class="form-group">

                <label for="email" class="control-label">{{'Email'}}</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $client->email }}">

            </div>

            <div class="form-group">

                <label for="phone" class="control-label">{{'Phone'}}</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ $client->phone }}">

            </div>

            <div class="form-group">

                <label for="city" class="control-label">{{'City'}}</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ $client->city }}">

            </div>
            <input class="btn btn-success" type="submit" value="Modify">

            <a class="btn btn-primary" href="{{ url('clients') }}">Return</a>


        </form>
    </div>
@endsection
