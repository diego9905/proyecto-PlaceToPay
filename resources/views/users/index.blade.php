@extends('layouts.app')

@section('content')

    <br class="container">

        @if(Session::has('Message')){{
    Session::get('Message')
}}
        @endif

    </br>

    <a href="{{ url('users/create') }}" class="btn btn-success">Add user</a>


    <table class="table table-light table-light">

        <thead class=thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Nit</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}} {{$user->last_name}}</td>
                <td>{{$user->nit}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->city}}</td>
                <td>

                    <a class="btn btn-warning" href="{{ url('/users/'.$user->id.'/edit') }}">Edit</a>

                    <form method="post" action="{{ url('/users/'.$user->id) }}" style="display:inline">
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










