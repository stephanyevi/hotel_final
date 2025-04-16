<x-app-layout>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .card-hover:hover {
            transform: scale(1.05);
            transition: 0.3s ease-in-out;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        }
        body {
            overflow: hidden;
        }
        .min-h-screen {
            height: 100vh; 
        }
        .container {
            overflow: hidden;
        }
    </style>
</head>
<body class="antialiased">
    <div class="min-h-screen bg-light">
        <div class="container py-3">
            <div class="text-center mb-3">
                <h1 class="display-5 text-primary">Gerenciamento do Hotel</h1>
                <p class="lead text-muted">Escolha uma das opções abaixo para criar novos serviços, quartos ou clientes.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                
                <div class="col-auto">
                    <div class="card card-hover border-primary" style="width: 22rem;">
                        <img src="https://viagemegastronomia.cnnbrasil.com.br/wp-content/uploads/sites/5/2022/10/BA_RA-HOTEL-4.jpg?w=1024" class="card-img-top" alt="Imagem de Categoria">
                        <div class="card-body text-center">
                            <h5 class="card-title">Serviços</h5>
                            <p class="card-text text-muted">Gerencie os serviços oferecidos no hotel.</p>
                            <a href="{{ route('servicos.create') }}" class="btn btn-primary">Adicionar Serviços</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-auto">
                    <div class="card card-hover border-success" style="width: 22rem;">
                        <img src="https://media.istockphoto.com/id/1756553862/pt/foto/modern-luxury-hotel-room.jpg?s=612x612&w=0&k=20&c=vyajZOfYMOV2gPfE_ozOc7l5qpqV5jA9eHLMpCabs4Y=" class="card-img-top" alt="Imagem de Quarto">
                        <div class="card-body text-center">
                            <h5 class="card-title">Quartos</h5>
                            <p class="card-text text-muted">Adicione e gerencie os quartos do hotel.</p>
                            <a href="{{ route('quartos.create') }}" class="btn btn-success">Criar Quarto</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-auto">
                    <div class="card card-hover border-info" style="width: 22rem;">
                        <img src="https://www.roteirosdecharme.com.br/wp-content/uploads/2019/07/Santa-Teresa_527dd019a0e9c99941b16d238b0ea561-1024x682.jpg" class="card-img-top" alt="Imagem de Ferramenta">
                        <div class="card-body text-center">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text text-muted">Tenha controle dos clientes do seu hotel.</p>
                            <a href="{{ route('clientes.create') }}" class="btn btn-info">Adicionar Clientes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

</x-app-layout>