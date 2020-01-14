@extends('layouts.app')

@section('content')

    <br class="container">

        @if(Session::has('Message')){{
    Session::get('Message')
}}
        @endif

    </br>

    <a href="{{ url('clients/create') }}" class="btn btn-success">Add customer</a>


    <table class="table table-light table-light">

        <thead class=thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Identification card</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$client->name}} {{$client->last_name}}</td>
                <td>{{$client->identification_card}}</td>
                <td>{{$client->address}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->city}}</td>
                <td>

                    <a class="btn btn-warning" href="{{ url('/clients/'.$client->id_clients.'/edit') }}">Edit</a>

                    <form method="post" action="{{ url('/clients/'.$client->id_clients) }}" style="display:inline">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('delete?');">delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection










