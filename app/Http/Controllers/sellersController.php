<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;

class sellersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create()
    {
        return view('sellers.create');
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
        $datos['sellers'] = Seller::paginate(10);

        return view('sellers.index', $datos);
    }

    public function store(Request $request)
    {
        $datosellers = request()->except('_token');

        Seller::insert($datosellers);

        return redirect('sellers')->with('Message', 'Seller added successfully');
    }


    public function destroy($id)
    {
        $seller = Seller::findOrFail($id);
        Seller::destroy($id);
        return redirect('sellers')->with('Message', 'Seller removed');
    }

    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        return view('sellers.edit', compact('seller'));
    }

    public function update(request $request, $id)
    {
        $datossellers = request()->except(['_token', '_method']);
        Seller::where('id', '=', $id)->update($datossellers);


        return redirect('sellers')->with('Message', 'Seller successfully modified');
    }


}
