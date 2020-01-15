<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create()
    {
        return view('products.create');
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
        $datos['products'] = Product::paginate(10);

        return view('products.index', $datos);
    }

    public function store(Request $request)
    {
        $datosproducts = request()->except('_token');

        Product::insert($datosproducts);

        return redirect('products')->with('Message', 'Product added successfully');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        Product::destroy($id);
        return redirect('products')->with('Message', 'Product removed');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(request $request, $id)
    {
        $datosproducts = request()->except(['_token', '_method']);
        Product::where('id_products', '=', $id)->update($datosproducts);


        return redirect('products')->with('Message', 'Product successfully modified');
    }


}

//

