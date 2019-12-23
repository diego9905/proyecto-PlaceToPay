<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Client;
use App\State;
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
        $clients = Client::all();
        $states = State::all();
        return view('bills.create', compact('states'), compact('clients'));
    }

    public function show($id)
    {
        $bill = Bill::findOrFail($id);
        return view('bills.show', compact('bill'));
    }
}
