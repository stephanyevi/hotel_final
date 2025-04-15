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
            margin: 0; 
            overflow: hidden; 
        }
        .container {
            padding-top: 1rem; 
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 0.5rem; 
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
                <h1>Adicionar Ferramenta de Manutenção</h1>
                <p class="text-muted">Preencha as informações abaixo para cadastrar uma nova ferramenta de manutenção.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('ferramentas-manutencao.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome da ferramenta" required>
                                </div>

                                <div class="mb-3">
                                    <label for="descricao" class="form-label">Descrição</label>
                                    <textarea name="descricao" id="descricao" class="form-control" rows="3" placeholder="Descreva a ferramenta" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="quantidade" class="form-label">Quantidade</label>
                                    <input type="number" name="quantidade" id="quantidade" class="form-control" min="1" placeholder="Digite a quantidade disponível" required>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="disponível">Disponível</option>
                                        <option value="em uso">Em uso</option>
                                        <option value="em manutenção">Em manutenção</option>
                                    </select>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <a href="{{ route('ferramentas-manutencao.index') }}" class="btn btn-danger">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
