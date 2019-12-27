<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Client;
use App\Product;
use App\State;
use App\User;
use Illuminate\Http\Request;


class billsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos['bills'] = Bill::paginate(5);

        return view('bills.index', $datos);
    }

    public function store(Request $request)
    {
        $validaData = $request->validate(
            [
                'generated_bill' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'iva' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'subtotal' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'total' => 'required'

            ]
        );

        $datosbills = request()->except('_token');

        Bill::insert($datosbills);

        return redirect('bills')->with('Message', 'Bill added successfully');
    }

    public function destroy($id)
    {
        $bill = Bill::findOrFail($id);
        Bill::destroy($id);
        return redirect('bills')->with('Message', 'Bill removed');
    }

    public function edit($id)
    {
        $clients = Client::all();
        $states = State::all();
        $bill = Bill::findOrFail($id);
        return view('bills.edit', compact('bill', 'clients'), compact('states'));
    }

    public function update(request $request, $id)
    {
        $validaData = $request->validate(
            [
                'generated_bill' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'iva' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'subtotal' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'total' => 'required'

            ]
        );
        $datosbills = request()->except(['_token', '_method']);
        Bill::where('id_bills', '=', $id)->update($datosbills);


        return redirect('bills')->with('Message', 'Bill successfully modified');
    }

    public function create()
    {
        $users = User::all();
        $clients = Client::all();
        $states = State::all();
        return view('bills.create', compact('states', 'users'), compact('clients'));
    }

    public function show($id)
    {

        $products = Product::all();
        $bill = Bill::findOrFail($id);
        $client = Client::findOrFail($bill->id_clients);
        $user = User::findOrFAil($bill->id_users);
        return view('bills.show', compact('bill', 'products', 'client', 'user'));
    }



}
