<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Detalhes do Funcionário</h2>
    </x-slot>

    <div class="py-12 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow">
            <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
            <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
            <p><strong>Idade:</strong> {{ $funcionario->idade }}</p>
            <p><strong>Função:</strong> {{ $funcionario->funcao }}</p>

            <div class="mt-4">
                <a href="{{ route('funcionarios.edit', $funcionario) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Editar</a>
                <a href="{{ route('funcionarios.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Voltar</a>
            </div>
        </div>
    </div>
</x-app-layout>
