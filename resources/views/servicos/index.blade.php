<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Serviços do Hotel
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <a href="{{ route('servicos.create') }}" 
               style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: bold; display: inline-block;">
                + Novo Serviço
            </a>

            <div class="bg-white overflow-hidden shadow-xl rounded-lg mt-2 p-2 max-w-3xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead>
                            <tr>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 150px;">Nome</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 250px;">Descrição</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 130px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicos as $servico)
                                <tr>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $servico->nome }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $servico->descricao }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">
                                        <div style="display: flex; gap: 4px;">
                                            <a href="{{ route('servicos.edit', $servico) }}"
                                               style="background-color: #facc15; color: white; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 0.875rem; text-decoration: none;">
                                                Editar
                                            </a>
                                            <form action="{{ route('servicos.destroy', $servico) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
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
