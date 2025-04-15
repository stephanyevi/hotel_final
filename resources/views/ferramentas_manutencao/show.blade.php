@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detalhes da Ferramenta de Manutenção</h1>
    <div class="card">
        <div class="card-header">
            <h3>{{ $ferramentaManutencao->nome }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> {{ $ferramentaManutencao->descricao }}</p>
            <p><strong>Quantidade:</strong> {{ $ferramentaManutencao->quantidade }}</p>
            <p><strong>Status:</strong> {{ ucfirst($ferramentaManutencao->status) }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('ferramentas-manutencao.edit', $ferramentaManutencao->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('ferramentas-manutencao.index') }}" class="btn btn-secondary">Voltar</a>
            <form action="{{ route('ferramentas-manutencao.destroy', $ferramentaManutencao->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta ferramenta?')">Excluir</button>
            </form>
        </div>
    </div>
</div>
@endsection