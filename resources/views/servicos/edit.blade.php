<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Serviço
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md p-6">
            <form method="POST" action="{{ route('servicos.update', $servico) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" name="nome" value="{{ old('nome', $servico->nome) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Descrição</label>
                    <textarea name="descricao" rows="4" required
                              class="mt-1 block w-full border-gray-300 rounded-md">{{ old('descricao', $servico->descricao) }}</textarea>
                </div>

                <div class="flex gap-4">
                    <button type="submit"
                            style="background-color: #38a169; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem;">
                        Atualizar
                    </button>
                    <a href="{{ route('servicos.index') }}"
                       style="background-color: #e53e3e; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none;">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
