<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalhes do Cliente
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md p-6">
            <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
            <p><strong>Idade:</strong> {{ $cliente->idade }}</p>
            <p><strong>Email:</strong> {{ $cliente->email }}</p>
            <p><strong>Número:</strong> {{ $cliente->numero }}</p>
            <p><strong>Descrição:</strong> {{ $cliente->descricao }}</p>

            <div class="mt-4">
                <a href="{{ route('clientes.edit', $cliente) }}"
                   class="text-blue-600 hover:underline mr-4">Editar</a>
                <a href="{{ route('clientes.index') }}"
                   class="text-gray-600 hover:underline">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>
