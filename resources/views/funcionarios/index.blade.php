<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Funcionários</h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('funcionarios.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Novo Funcionário</a>

        <div class="mt-4 bg-white shadow-sm rounded-lg p-4">
            <table class="w-full">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Idade</th>
                        <th>Função</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                        <tr class="border-t">
                            <td>{{ $funcionario->nome }}</td>
                            <td>{{ $funcionario->telefone }}</td>
                            <td>{{ $funcionario->idade }}</td>
                            <td>{{ $funcionario->funcao }}</td>
                            <td class="flex gap-2">
                                <a href="{{ route('funcionarios.show', $funcionario) }}" class="text-blue-600">Ver</a>
                                <a href="{{ route('funcionarios.edit', $funcionario) }}" class="text-yellow-600">Editar</a>
                                <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST" onsubmit="return confirm('Deseja excluir?')">
                                    @csrf @method('DELETE')
                                    <button class="text-red-600">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
