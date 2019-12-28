@extends('layouts.app')

@section('content')

    <div class="container">
        @if($errors->any())
            <div class="alert  alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{('/sellers')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            @include('sellers.form',['Modo'=>'crear'])


        </form>
    </div>
@endsection
