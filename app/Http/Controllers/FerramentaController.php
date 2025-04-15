<?php

namespace App\Http\Controllers;

use App\Models\Ferramenta;
use Illuminate\Http\Request;

class FerramentaController extends Controller
{
    public function index()
    {
        $ferramentas = Ferramenta::all();
        return view('ferramentas.index', compact('ferramentas'));
    }

    public function create()
    {
        return view('ferramentas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:0',
            'status' => 'required|in:disponível,em uso,danificada',
        ]);

        Ferramenta::create($request->all());
        return redirect()->route('ferramentas.index')->with('success', 'Ferramenta criada com sucesso!');
    }

    public function show(Ferramenta $ferramenta)
    {
        return view('ferramentas.show', compact('ferramenta'));
    }

    public function edit(Ferramenta $ferramenta)
    {
        return view('ferramentas.edit', compact('ferramenta'));
    }

    public function update(Request $request, Ferramenta $ferramenta)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|integer|min:0',
            'status' => 'required|in:disponível,em uso,danificada',
        ]);

        $ferramenta->update($request->all());
        return redirect()->route('ferramentas.index')->with('success', 'Ferramenta atualizada com sucesso!');
    }

    public function destroy(Ferramenta $ferramenta)
    {
        $ferramenta->delete();
        return redirect()->route('ferramentas.index')->with('success', 'Ferramenta removida com sucesso!');
    }
}
