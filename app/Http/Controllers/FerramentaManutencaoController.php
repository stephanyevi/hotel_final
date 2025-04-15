<?php

namespace App\Http\Controllers;

use App\Models\FerramentaManutencao;
use Illuminate\Http\Request;

class FerramentaManutencaoController extends Controller
{
    public function index()
    {
        $ferramentas = FerramentaManutencao::all();
        return view('ferramentas_manutencao.index', compact('ferramentas'));
    }

    public function create()
    {
        return view('ferramentas_manutencao.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'quantidade' => 'required|integer|min:1',
            'status' => 'required|in:disponível,em uso,em manutenção',
        ]);

        FerramentaManutencao::create($validated);

        return redirect()->route('ferramentas-manutencao.index');
    }

    public function edit($id)
    {
        $ferramentaManutencao = FerramentaManutencao::findOrFail($id);
        return view('ferramentas_manutencao.edit', compact('ferramentaManutencao'));
    }


    public function update(Request $request, $id)
    {
        $ferramentaManutencao = FerramentaManutencao::findOrFail($id);
        
        $ferramentaManutencao->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'quantidade' => $request->quantidade,
            'status' => $request->status,
        ]);

        return redirect()->route('ferramentas-manutencao.index');
    }


    public function destroy($id)
    {
        $ferramenta = FerramentaManutencao::findOrFail($id);
        $ferramenta->delete();

        return redirect()->route('ferramentas-manutencao.index');
    }

    public function show(FerramentaManutencao $ferramentaManutencao)
    {
        return view('ferramentas_manutencao.show', compact('ferramentaManutencao'));
    }
}
