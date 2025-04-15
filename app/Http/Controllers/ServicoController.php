<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        Servico::create($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço criado com sucesso.');
    }

    public function show(Servico $servico)
    {
        return view('servicos.show', compact('servico'));
    }

    public function edit(Servico $servico)
    {
        return view('servicos.edit', compact('servico'));
    }

    public function update(Request $request, Servico $servico)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $servico->update($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado com sucesso.');
    }

    public function destroy(Servico $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index')->with('success', 'Serviço removido.');
    }
}
