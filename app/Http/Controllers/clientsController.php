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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datos['clients'] = Client::paginate(5);

        return view('clients.index', $datos);
    }



    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required',
                'last_name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'city' => 'required',
                'identification_card' => 'required|unique:clients'

            ]
        );

        $client = new Client();
        $client->name = $validate['name'];
        $client->last_name = $validate['last_name'];
        $client->identification_card = intval($validate['identification_card']);
        $client->address = $validate['address'];
        $client->city = $validate['city'];
        $client->phone = intval($validate['phone']);
        $client->save();

        return redirect('clients')->with('Message', ' Customer added successfully');
    }


    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        Client::destroy($id);
        return redirect('clients')->with('Message', 'Customer removed');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(request $request, $id)
    {
        $validaData = $request->validate(
            [
                'name' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'last_name' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'address' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'phone' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'city' => 'required'

            ]
        );
        $validaData = $request->validate(
            [
                'identification_card' => 'required'

            ]
        );
        $datosclients = request()->except(['_token', '_method']);
        Client::where('id_clients', '=', $id)->update($datosclients);


        return redirect('clients')->with('Message', 'Customer successfully modified');
    }




} //

