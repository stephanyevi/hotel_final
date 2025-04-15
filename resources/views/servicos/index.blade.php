<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Serviços do Hotel</h2>
    </x-slot>

    <div class="p-4">
        <a href="{{ route('servicos.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">Novo Serviço</a>

        <table class="mt-4 w-full border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nome</th>
                    <th class="border px-4 py-2">Descrição</th>
                    <th class="border px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td class="border px-4 py-2">{{ $servico->nome }}</td>
                        <td class="border px-4 py-2">{{ $servico->descricao }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('servicos.show', $servico) }}" class="text-blue-600">Ver</a> |
                            <a href="{{ route('servicos.edit', $servico) }}" class="text-yellow-600">Editar</a> |
                            <form action="{{ route('servicos.destroy', $servico) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600" onclick="return confirm('Confirmar exclusão?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
