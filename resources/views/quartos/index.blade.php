<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quartos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('quartos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Novo Quarto
            </a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Número</th>
                                <th class="px-4 py-2">Descrição</th>
                                <th class="px-4 py-2">Preço</th>
                                <th class="px-4 py-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quartos as $quarto)
                                <tr class="border-t">
                                    <td class="px-4 py-2">{{ $quarto->numero }}</td>
                                    <td class="px-4 py-2">{{ $quarto->descricao }}</td>
                                    <td class="px-4 py-2">R$ {{ number_format($quarto->preco, 2, ',', '.') }}</td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('quartos.edit', $quarto) }}" class="text-blue-500">Editar</a>
                                        <form action="{{ route('quartos.destroy', $quarto) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500 ml-2" onclick="return confirm('Tem certeza?')">Excluir</button>
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
