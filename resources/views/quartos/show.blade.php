<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Quarto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <div class="mb-4">
                    <strong class="text-gray-700">Número do Quarto:</strong>
                    <p>{{ $quarto->numero }}</p>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700">Descrição:</strong>
                    <p>{{ $quarto->descricao }}</p>
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700">Preço:</strong>
                    <p>R$ {{ number_format($quarto->preco, 2, ',', '.') }}</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('quartos.edit', $quarto->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Editar
                    </a>
                    <a href="{{ route('quartos.index') }}" class="ml-2 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
