<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800">Novo Funcionário</h2>
    </x-slot>

    <div class="py-12 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow">
            <form method="POST" action="{{ route('funcionarios.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700">Nome</label>
                    <input type="text" name="nome" value="{{ old('nome') }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Telefone</label>
                    <input type="text" name="telefone" value="{{ old('telefone') }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Idade</label>
                    <input type="number" name="idade" value="{{ old('idade') }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Função</label>
                    <input type="text" name="funcao" value="{{ old('funcao') }}" class="w-full border rounded px-3 py-2" required>
                </div>

                <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
                <a href="{{ route('funcionarios.index') }}" class="ml-2 text-gray-600 underline">Voltar</a>
            </form>
        </div>
    </div>
</x-app-layout>
