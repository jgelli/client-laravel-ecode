<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class ClientController extends Controller
{
    

    public function index()
    {

        if(session()->has('LoggedClient'))
        {
            $client = Client::where('email', '=', session('LoggedClient'))->first();
            $addres = Address::where('id', '=', $client->address_id)->first();
            $data = array('client'=>$client, 'address'=>$addres);
            return view('client.edit', $data);
        } else {
            return view('client.login');
        }
    }


    public function signUp()
    {
        return view('client.register');
    }

    public function signIn()
    {
        return view('client.login');
    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'nome'  => 'required',
            'email' => 'required|unique:clients|max:255',
            'cpf'   => 'required|min:11',
            'rg'    => 'required|min:9',
            'data_nascimento' => 'required',
            'cep'    => 'required|max:9',
            'estado'    => 'required',
            'cidade'    => 'required',
            'bairro'    => 'required|min:9',
            'numero'    => 'required|max:4',
            'telefone'    => 'required|min:8',
            'celular'    => 'required|min:9',
            'password'    => 'required|min:8',

            
        ]);

        $password = $request['password'];
        if($password === $request['password_confirm'])
        {
            $password = Hash::make($request['password']);

            $address = Address::create([
                'cep' => $request['cep'], 
                'endereco' => $request['endereco'], 
                'numero' => $request['numero'], 
                'bairro' => $request['bairro'], 
                'complemento' => $request['complemento'], 
                'estado' => $request['estado'], 
                'cidade' => $request['cidade']
            ]);

            $client = Client::create([
                'nome' => $request['nome'], 
                'email' => $request['email'], 
                'password' => $password, 
                'cpf' => $request['cpf'],
                'rg' => $request['rg'],
                'data_nascimento' => $request['data_nascimento'], 
                'sexo' => $request['sexo'],  
                'telefone' => $request['telefone'], 
                'celular' => $request['celular'],
                'address_id' => $address->id
            ]);

        } else {
            session()->flash('error', 'Senhas não são iguais!');
            return redirect()->back()->withInput();
        }

        session()->flash('success', 'Cliente criado com sucesso');

        $data = array('client'=>$request);
        return view('client.register', $data);
    }

    public function editById($id) 
    {
        $client = Client::where('id', '=', $id)->first();
        $addres = Address::where('id', '=', $client->address_id)->first();
        $data = array('client'=>$client, 'address'=>$addres);
        return view('admin.client.edit', $data);

    }

    public function edit(Request $request) {
        $validated = $request->validate([
            'nome'  => 'required',
            'cpf'   => 'required|min:11',
            'rg'    => 'required|min:9',
            'data_nascimento' => 'required',
            'cep'    => 'required|max:9',
            'estado'    => 'required',
            'cidade'    => 'required',
            'bairro'    => 'required|min:9',
            'numero'    => 'required|max:4',
            'telefone'    => 'required|min:8',
            'celular'    => 'required|min:9',

            
        ]);

        $email = $request['email'];
        if (session('LoggedClient')) {
            $email = session('LoggedClient');
        }

        $client = Client::where('email', '=', $email)->first()->update([
            'nome' => $request['nome'],  
            'cpf' => $request['cpf'],
            'rg' => $request['rg'],
            'data_nascimento' => $request['data_nascimento'], 
            'sexo' => $request['sexo'], 
            'telefone' => $request['telefone'], 
            'celular' => $request['celular'],
        ]);
        
        $client = Client::where('email', '=', $email)->first();

        $addres = Address::where('id', '=', $client->address_id)->first()->update([
            'cep' => $request['cep'], 
            'endereco' => $request['endereco'], 
            'numero' => $request['numero'], 
            'bairro' => $request['bairro'], 
            'complemento' => $request['complemento'], 
            'estado' => $request['estado'], 
            'cidade' => $request['cidade']
        ]);
        session()->flash('success', 'Dados atualizados com sucesso!');
        if (Auth::check()) {
            return redirect('/admin');
        }
        return redirect('/');

    }

    public function login(Request $request) {
        $client = Client::where('email', $request['email'])->first();
        if (isset($client) && !is_null($client)) 
        {
            $password = $request['password'];
            if(Hash::check($password, $client->password))
            {
                session()->put('LoggedClient', $client->email);
                return redirect('/');
            }
        }
        session()->flash('error', 'Email ou Senha inválidos!');
        return redirect('client/signin');

    }

    public function logout() {
        if(session()->has('LoggedClient'))
        {
            session()->pull('LoggedClient');
        }
        return redirect('/');
    }

}
