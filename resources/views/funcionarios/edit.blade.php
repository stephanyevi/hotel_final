<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Funcionário
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md p-6">
            <form method="POST" action="{{ route('funcionarios.update', $funcionario) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" name="nome" value="{{ old('nome', $funcionario->nome) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Telefone</label>
                    <input type="text" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Idade</label>
                    <input type="number" name="idade" value="{{ old('idade', $funcionario->idade) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Função</label>
                    <input type="text" name="funcao" value="{{ old('funcao', $funcionario->funcao) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="flex gap-4">
                    <button type="submit"
                            style="background-color: #38a169; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem;">
                        Atualizar
                    </button>
                    <a href="{{ route('funcionarios.index') }}"
                       style="background-color: #e53e3e; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none;">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
