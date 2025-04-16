<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Funcionários
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <a href="{{ route('funcionarios.create') }}" 
               style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: bold; display: inline-block;">
                + Novo Funcionário
            </a>

            <div class="bg-white overflow-hidden shadow-xl rounded-lg mt-2 p-2 max-w-4xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead>
                            <tr>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 150px;">Nome</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 130px;">Telefone</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 80px;">Idade</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 150px;">Função</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 130px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($funcionarios as $funcionario)
                                <tr>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $funcionario->nome }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $funcionario->telefone }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $funcionario->idade }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $funcionario->funcao }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">
                                        <div style="display: flex; gap: 4px;">
                                            <a href="{{ route('funcionarios.edit', $funcionario) }}"
                                               style="background-color: #facc15; color: white; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 0.875rem; text-decoration: none;">
                                                Editar
                                            </a>
                                            <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="POST" onsubmit="return confirm('Deseja excluir?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        style="background-color: #ef4444; color: white; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 0.875rem; border: none;">
                                                    Apagar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
