@extends('layouts.app')

@section('content')

    <br class="container">

        @if(Session::has('Message'))
            <div class="alert alert-success" role="alert">
            {{Session::get('Message')}}
            </div>
        @endif




    <a href="{{ url('bills/create') }}" class="btn btn-success">Add bill</a>


    <table class="table table-light table-light">

        <thead class=thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Generated Bill</th>
            <th>Delivered Bill</th>
            <th>Overdue Bill</th>
            <th>State</th>
            <th>Detail</th>
            <th>Iva</th>
            <th>Subtotal</th>
            <th>Total</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bills as $bill)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$bill->generated_bill}}</td>
                <td>{{$bill->delivered_bill}}</td>
                <td>{{$bill->overdue_bill}}</td>
                <td>{{$bill->state}}</td>
                <td>{{$bill->detail}}</td>
                <td>{{$bill->iva}}</td>
                <td>{{$bill->subtotal}}</td>
                <td>{{$bill->total}}</td>
                <td>

                    <a class="btn btn-warning" href="{{ url('/bills/'.$bill->id_bills.'/edit') }}">Edit</a>

                    <form method="post" action="{{ url('/bills/'.$bill->id_bills) }}" style="display:inline">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" onclick="return confirm('delete?');" >delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </br>
@endsection
