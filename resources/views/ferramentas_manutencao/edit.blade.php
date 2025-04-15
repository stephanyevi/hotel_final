<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #f8f9fa; 
            overflow-x: hidden; 
        }
        .container {
            padding-top: 1rem; 
        }
        h1 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #343a40;
            margin-top: 0.5rem; 
            margin-bottom: 1rem;
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 2rem;
        }
        label {
            font-weight: 500;
            color: #495057;
        }
        .btn-success {
            background-color: #198754;
            border-color: #198754;
        }
        .btn-success:hover {
            background-color: #157347;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5c636a;
        }
    </style>
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <div class="container">
            <div class="text-center mb-4">
                <h1>Editar Ferramenta de Manutenção</h1>
                <p class="text-muted">Modifique os dados abaixo para atualizar a ferramenta de manutenção.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('ferramentas-manutencao.update', $ferramentaManutencao->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control" value="{{ $ferramentaManutencao->nome }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea name="descricao" id="descricao" class="form-control" rows="4" required>{{ $ferramentaManutencao->descricao }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="quantidade" class="form-label">Quantidade</label>
                                    <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" value="{{ $ferramentaManutencao->quantidade }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="disponível" {{ $ferramentaManutencao->status == 'disponível' ? 'selected' : '' }}>Disponível</option>
                                        <option value="em uso" {{ $ferramentaManutencao->status == 'em uso' ? 'selected' : '' }}>Em uso</option>
                                        <option value="em manutenção" {{ $ferramentaManutencao->status == 'em manutenção' ? 'selected' : '' }}>Em manutenção</option>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                                    <a href="{{ route('ferramentas-manutencao.index') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
