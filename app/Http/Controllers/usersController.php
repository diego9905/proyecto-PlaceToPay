<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function create()
    {
        return view('users.create');
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
        $datos['users'] = User::paginate(5);

        return view('users.index', $datos);
    }

    public function store(Request $request)
    {
        $datosusers = request()->except('_token');

        User::insert($datosusers);

        return redirect('users')->with('Message', 'User added successfully');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        User::destroy($id);
        return redirect('users')->with('Message', 'User removed');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(request $request, $id)
    {
        $datosusers = request()->except(['_token', '_method']);
        User::where('id', '=', $id)->update($datosusers);


        return redirect('users')->with('Message', 'User successfully modified');
    }


}
