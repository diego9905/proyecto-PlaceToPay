@extends('layouts.app')

@section('content')

    <br class="container">

        @if(Session::has('Message')){{
    Session::get('Message')
}}
        @endif

    </br>

    <a href="{{ url('sellers/create') }}" class="btn btn-success">Add Seller</a>


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
        @foreach($sellers as $seller)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$seller->first_name}} {{$seller->last_name}}</td>
                <td>{{$seller->nit}}</td>
                <td>{{$seller->address}}</td>
                <td>{{$seller->email}}</td>
                <td>{{$seller->phone}}</td>
                <td>{{$seller->city}}</td>
                <td>

                    <a class="btn btn-warning" href="{{ url('/sellers/'.$seller->id_sellers.'/edit') }}">Edit</a>

                    <form method="post" action="{{ url('/sellers/'.$seller->id_sellers) }}" style="display:inline">
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










