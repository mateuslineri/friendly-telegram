<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients', compact('clients'));
    }

    public function create()
    {
        return view('newClient');
    }

    public function store(Request $request)
    {
        $msg = [
            'clientName.required' => 'Nome é um campo obrigatório',
            'clientName.min' => 'Por favor, insira o nome completo',
            'clientAge.required' => 'Idade é um campo obrigatório',
            'clientAge.max' => 'Idade incorreta',
            'clientAddress.required' => 'Endereço é um campo obrigatírio',
            'clientAddress.min' => 'Por favor, insira o endereço completo',
            'clientEmail.required' => 'Email é um campo obrigatório',
            'clientEmail.email' => 'Por favor, insira um endereço de email válido',
            'clientEmail.unique' => 'O email informado já está cadastrado'
        ];
        
        $request->validate([
            'clientName' => 'required|min:5',
            'clientAge' => 'required|max:3',
            'clientAddress' => 'required|min:3',
            'clientEmail' => 'required|email|unique:App\Client,email',
        ], $msg); 
        
        $client = new Client();
        $client->name = $request->input('clientName');
        $client->age = $request->input('clientAge');
        $client->address = $request->input('clientAddress');
        $client->email = $request->input('clientEmail');

        $client->save();

        return redirect('clients');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
