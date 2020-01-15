<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillProduct;
use App\Client;
use App\Product;
use App\Seller;
use App\State;
use Illuminate\Http\Request;


class billsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $search = $request->get('searchbytype');
        $type = $request->get('type');
        $variablesurl=$request->all();

        $datos['bills'] = Bill::searchbytype($type, $search)->paginate(10)->appends($variablesurl);

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
        $sellers = Seller::all();
        $clients = Client::all();
        $states = State::all();
        return view('bills.create', compact('states', 'sellers'), compact('clients'));
    }


    public function show($id)
    {
        $products = Product::all();
        $bill = Bill::findOrFail($id);
        $client = Client::findOrFail($bill->id_clients);
        $seller = Seller::findOrFAil($bill->id_sellers);
        return view('bills.show', compact('bill', 'products', 'client', 'seller'));
    }

    public function addproducts($id)
    {
        $bill = Bill::find($id);
        $products = Product::all();
        return view('bills.addproducts', compact('bill', 'products'));
    }

    public function createBillProduct($id)
    {
        $bill = Bill::find($id);
        return view(
            'billsProducts.create',
            [
                'bill' => $bill,
                'products' => Product::all(),
                'clients' => Client::all(),
                'sellers' => Seller::all()
            ]
        );
    }

    public function storeBillProduct(Request $request, $id)
    {

        $bill = Bill::find($id);
        $validData = $request->validate(
            [
                'id_products' => 'required',
                'product_quantity' => 'required',
                'unit_price' => 'required',
                'total_product_value' => 'required'
            ]
        );

        $product = Product::find($validData['id_products']);
        $validData['unit_price'] = $product->price;
        $bill->products()->attach(
            $validData['id_products'],
            [
                'product_quantity' => $validData['product_quantity'],
                'unit_price' => $validData['unit_price'],
                'total_product_value' => $validData['product_quantity'] * $validData['unit_price']
            ]
        );
        $bill->save();

        return redirect('bills');
    }


}
