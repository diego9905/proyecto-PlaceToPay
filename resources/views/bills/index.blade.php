@extends('layouts.app')

@section('content')

    <br class="container">

    @if(Session::has('Message'))
        <div class="alert alert-success" role="alert">
            {{Session::get('Message')}}
        </div>
    @endif
    <h4 class="page-header">

        Export data

        <p>
            click <a href="{{ route('bills.pdf') }}">aqui</a>
            para descargar en PDF las facturas
        </p>

        <p>
            click <a href="{{ route('bills.excel') }}">aqui</a>
            para descargar en Excel las facturas
        </p>
        <form action="{{ route('bills.import.excel') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <input type="file" name="file">

            <button>Importar Usuarios</button>
        </form>

    </h4>
    <nav class="navbar navbar-light float-lg-right">
        <form class="form-inline">
            <select name="type" class="form-control" id="exampleFormControlSelect1">
                <option>category</option>
                <option>company_name</option>
                <option>generated_bill</option>
                <option>overdue_bill</option>
                <option>state</option>
                <option>total</option>
            </select>
            <input name="searchbytype" class="form-control mr-sm-2" type="searchbytype" placeholder="Search by type"
                   aria-label="searchbytype">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>



    <a href="{{ url('bills/create') }}" class="btn btn-success">Add bill</a>


    <table class="table table-light table-light">

        <thead class=thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Generated Bill</th>
            <th>Overdue Bill</th>
            <th>State</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bills as $bill)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <a href="{{url('bills/show/' . $bill->id_bills)}}">
                        {{$bill->company_name}}
                    </a>
                </td>
                <td>{{$bill->generated_bill}}</td>
                <td>{{$bill->overdue_bill}}</td>
                <td>{{$bill->state}}</td>
                <td>{{$bill->total}}</td>
                <td>

                    <a class="btn btn-dark" href="{{ url('/bills/'.$bill->id_bills.'/billsProducts/create') }}">Add
                        Products</a>
                    <a class="btn btn-warning" href="{{ url('/bills/'.$bill->id_bills.'/edit') }}">Edit</a>
                    <form method="post" action="{{ url('/bills/'.$bill->id_bills) }}" style="display:inline">
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

    {{ $bills->links() }}

@endsection
