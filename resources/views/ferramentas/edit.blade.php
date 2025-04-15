<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Ferramenta
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        <form action="{{ route('ferramentas.update', $ferramenta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block">Nome</label>
                <input type="text" name="nome" value="{{ $ferramenta->nome }}" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block">Quantidade</label>
                <input type="number" name="quantidade" value="{{ $ferramenta->quantidade }}" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block">Status</label>
                <select name="status" class="w-full border px-3 py-2 rounded" required>
                    <option value="disponível" {{ $ferramenta->status == 'disponível' ? 'selected' : '' }}>Disponível</option>
                    <option value="em uso" {{ $ferramenta->status == 'em uso' ? 'selected' : '' }}>Em uso</option>
                    <option value="manutenção" {{ $ferramenta->status == 'manutenção' ? 'selected' : '' }}>Manutenção</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Atualizar</button>
        </form>
    </div>
</x-app-layout>
