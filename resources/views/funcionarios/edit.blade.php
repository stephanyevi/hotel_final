<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Editar Funcionário</h2>
    </x-slot>

    <div class="py-12 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow">
            <form method="POST" action="{{ route('funcionarios.update', $funcionario) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700">Nome</label>
                    <input type="text" name="nome" value="{{ old('nome', $funcionario->nome) }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Telefone</label>
                    <input type="text" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Idade</label>
                    <input type="number" name="idade" value="{{ old('idade', $funcionario->idade) }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Função</label>
                    <input type="text" name="funcao" value="{{ old('funcao', $funcionario->funcao) }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Atualizar</button>
                <a href="{{ route('funcionarios.index') }}" class="ml-2 text-gray-600 underline">Cancelar</a>
            </form>
        </div>
    </div>
</x-app-layout>
