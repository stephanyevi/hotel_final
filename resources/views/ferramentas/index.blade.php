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

