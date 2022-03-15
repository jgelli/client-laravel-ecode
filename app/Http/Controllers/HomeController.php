<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        
        $clients = Client::paginate(15);
        if ($request->has('search')) {
            $clients = Client::where('nome', 'like', '%' . $request->input('search') . '%')
            ->orWhere('sexo', 'like', '%' . $request->input('search') . '%')
            ->orWhere('email', 'like', '%' . $request->input('search') . '%')
            ->orWhere('created_at', 'like', '%' . $request->input('search') . '%')
            ->paginate(15);
        }
        $data = array('clients'=>$clients);
        return view('home', $data);
    }
}
