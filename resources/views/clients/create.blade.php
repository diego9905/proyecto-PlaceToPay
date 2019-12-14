@extends('layouts.app')

@section('content')

<div class="container">



<form action="{{('/clients')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    @include('clients.form',['Modo'=>'crear'])


</form>
</div>
@endsection
