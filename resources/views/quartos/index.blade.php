<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Quartos
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="w-full px-4 sm:px-6 lg:px-8"> {{-- Removido max-w-7xl --}}
            <a href="{{ route('quartos.create') }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                + Novo Quarto
            </a>

            {{-- Defini o bloco com largura reduzida, agora max-w-3xl --}}
            <div class="bg-white overflow-hidden shadow-xl rounded-lg mt-4 p-4 max-w-3xl mx-auto">
                <div class="overflow-x-auto"> {{-- Adiciona rolagem horizontal se necessário --}}
                    <table class="w-full divide-y divide-gray-200 table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Número</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Preço</th>
                                <th class="px-4 py-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quartos as $quarto)
                                <tr>
                                    <td class="border px-4 py-2">{{ $quarto->numero }}</td>
                                    <td class="border px-4 py-2">{{ $quarto->descricao }}</td>
                                    <td class="border px-4 py-2">R$ {{ number_format($quarto->preco, 2, ',', '.') }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('quartos.edit', $quarto) }}" class="text-yellow-500 hover:underline">Editar</a> |
                                        <form action="{{ route('quartos.destroy', $quarto) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Tem certeza?')" class="text-red-500 hover:underline">
                                                Apagar
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
    </div>
</x-app-layout>
