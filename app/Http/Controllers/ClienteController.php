<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Cliente::create($request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
            'email' => 'required|email|unique:clientes',
            'numero' => 'required',
            'descricao' => 'nullable',
        ]));

        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->validate([
            'nome' => 'required',
            'idade' => 'required|integer',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'numero' => 'required',
            'descricao' => 'nullable',
        ]));

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente deletado!');
    }
}
