<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Quartos
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full px-4 sm:px-6 lg:px-8">
            <a href="{{ route('quartos.create') }}" 
               style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; font-weight: bold; display: inline-block;">
                + Novo Quarto
            </a>

            <div class="bg-white overflow-hidden shadow-xl rounded-lg mt-4 p-4 max-w-3xl mx-auto">
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead>
                            <tr>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 80px;">Número</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 150px;">Status</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 100px;">Preço</th>
                                <th class="px-2 py-2 whitespace-nowrap" style="width: 130px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quartos as $quarto)
                                <tr>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $quarto->numero }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">{{ $quarto->descricao }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">R$ {{ number_format($quarto->preco, 2, ',', '.') }}</td>
                                    <td class="border px-2 py-2 whitespace-nowrap">
                                        <div style="display: flex; gap: 4px;">
                                            <a href="{{ route('quartos.edit', $quarto) }}"
                                               style="background-color: #facc15; color: white; font-weight: bold; padding: 2px 8px; border-radius: 4px; font-size: 0.875rem; text-decoration: none;">
                                                Editar
                                            </a>
                                            <form action="{{ route('quartos.destroy', $quarto) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
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
