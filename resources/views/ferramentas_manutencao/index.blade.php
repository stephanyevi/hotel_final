<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')
        <div class="container mt-4">

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ferramentas de manutenção') }}
            </h2>
        </x-slot>

            <a href="{{ route('ferramentas-manutencao.create') }}" class="btn btn-success mb-3">Adicionar Nova Ferramenta</a>

            <div class="card">
                <div class="card-body">
                <div class="card-header">
                    <h3 class="card-title">Lista de Ferramentas</h3>
                </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ferramentas as $ferramenta)
                                <tr>
                                    <td>{{ $ferramenta->id }}</td>
                                    <td>{{ $ferramenta->nome }}</td>
                                    <td>{{ $ferramenta->quantidade }}</td>
                                    <td>{{ ucfirst($ferramenta->status) }}</td>
                                    <td>
                                        <a href="{{ route('ferramentas-manutencao.edit', $ferramenta->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('ferramentas-manutencao.destroy', $ferramenta->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nenhuma ferramenta encontrada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>




<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Quarto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('quartos.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700">Número</label>
                        <input type="text" name="numero" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Descrição</label>
                        <textarea name="descricao" class="w-full border rounded px-3 py-2"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Preço</label>
                        <input type="number" step="0.01" name="preco" class="w-full border rounded px-3 py-2">
                    </div>

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
