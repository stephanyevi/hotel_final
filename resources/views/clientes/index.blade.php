<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Clientes
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <a href="{{ route('clientes.create') }}" 
               style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: bold; display: inline-block;">
                + Novo Cliente
            </a>

            <div class="bg-white overflow-hidden shadow-xl rounded-lg mt-2 p-2 max-w-5xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead>
                            <tr>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 150px;">Nome</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 80px;">Idade</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 200px;">Email</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 100px;">Número</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 200px;">Descrição</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 130px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $cliente->nome }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $cliente->idade }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $cliente->email }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $cliente->numero }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $cliente->descricao }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">
                                        <div style="display: flex; gap: 4px;">
                                            <a href="{{ route('clientes.edit', $cliente) }}"
                                               style="background-color: #facc15; color: white; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 0.875rem; text-decoration: none;">
                                                Editar
                                            </a>
                                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
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
