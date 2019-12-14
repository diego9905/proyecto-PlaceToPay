<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class clientsController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function create()
    {

        return view('clients.create');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datos['clients']=Client::paginate(5);

        return view('clients.index',$datos);
    }

    public function store(Request $request)
    {
        //$datosclients = request()->all();






        $datosclients=request()->except('_token');

        Client::insert($datosclients);


        return response()->json($datosclients);
    }

    public function destroy($id)
    {
        Client::destroy($id);
        return redirect('clients');
    }
    public function edit($id)
    {
        $client= Client::findOrFail($id);
         return view('clients.edit', compact('client'));
    }
    public function update(request $request, $id)
    {
        $datosclients=request()->except(['_token', '_method']);
        Client::where('id_clients','=',$id)->update($datosclients);

        $client= Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }
} //

