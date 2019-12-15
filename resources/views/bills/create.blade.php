@extends('layouts.app')

@section('content')

    <div class="container">



        <form action="{{('/bills')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            @include('bills.form',['Modo'=>'crear'])


        </form>
    </div>
@endsection
