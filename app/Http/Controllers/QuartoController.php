<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use Illuminate\Http\Request;

class QuartoController extends Controller
{
    public function index()
    {
        $quartos = Quarto::all();
        return view('quartos.index', compact('quartos'));
    }

    public function create()
    {
        return view('quartos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|string',
            'descricao' => 'required|string',
            'preco' => 'required|numeric|min:0',
        ]);

        Quarto::create($request->only('numero', 'descricao', 'preco'));

        return redirect()->route('quartos.index')->with('success', 'Quarto criado com sucesso!');
    }

    public function edit(Quarto $quarto)
    {
        return view('quartos.edit', compact('quarto'));
    }

    public function update(Request $request, Quarto $quarto)
    {
        $request->validate([
            'numero' => 'required',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
        ]);

        $quarto->update($request->all());

        return redirect()->route('quartos.index')->with('success', 'Quarto atualizado com sucesso.');
    }

    public function destroy(Quarto $quarto)
    {
        $quarto->delete();
        return redirect()->route('quartos.index')->with('success', 'Quarto excluído!');
    }
}
