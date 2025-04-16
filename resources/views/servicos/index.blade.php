<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Serviços do Hotel
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('servicos.create') }}" 
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Novo Serviço
            </a>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-4">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Nome</th>
                            <th class="px-4 py-2">Descrição</th>
                            <th class="px-4 py-2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicos as $servico)
                            <tr>
                                <td class="border px-4 py-2">{{ $servico->nome }}</td>
                                <td class="border px-4 py-2">{{ $servico->descricao }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('servicos.show', $servico) }}" class="text-blue-500 hover:underline">Ver</a> |
                                    <a href="{{ route('servicos.edit', $servico) }}" class="text-yellow-500 hover:underline">Editar</a> |
                                    <form action="{{ route('servicos.destroy', $servico) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Confirmar exclusão?')" class="text-red-500 hover:underline">
                                            Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
