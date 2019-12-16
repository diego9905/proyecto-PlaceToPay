<?php

namespace App\Http\Controllers;

use App\Bill;
use App\State;
use Illuminate\Http\Request;


class billsController extends Controller
{
    public function index()
    {
        $datos['bills']=Bill::paginate(5);

        return view('bills.index',$datos);
    }
    public function store(Request $request)
    {


        $datosbills=request()->except('_token');

        Bill::insert($datosbills);

        return redirect('bills')->with('Message','Bill added successfully');

    }

    public function destroy($id)
    {
        $bill= Bill::findOrFail($id);
        Bill::destroy($id);
        return redirect('bills')->with('Message','Bill removed');
    }

    public function edit($id)
    {
        $states = State::all();
        $bill=Bill::findOrFail($id);
        return view('bills.edit', compact('bill'), compact('states'));
    }

    public function update(request $request, $id)
    {
        $datosbills=request()->except(['_token', '_method']);
        Bill::where('id_bills','=',$id)->update($datosbills);


        return redirect('bills')->with('Message','Bill successfully modified');

    }

    public function create()
    {
        $states = State::all();
        return view('bills.create', compact('states'));
    }
}
