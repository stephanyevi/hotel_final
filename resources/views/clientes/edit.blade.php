<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Cliente
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md p-6">
            <form method="POST" action="{{ route('clientes.update', $cliente) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" name="nome" value="{{ $cliente->nome }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Idade</label>
                    <input type="number" name="idade" value="{{ $cliente->idade }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ $cliente->email }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Número</label>
                    <input type="text" name="numero" value="{{ $cliente->numero }}"
                           class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Descrição</label>
                    <textarea name="descricao" rows="4"
                              class="mt-1 block w-full border-gray-300 rounded-md">{{ $cliente->descricao }}</textarea>
                </div>

                <div class="flex gap-4">
                    <button type="submit"
                            style="background-color: #38a169; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem;">
                        Atualizar
                    </button>
                    <a href="{{ route('clientes.index') }}"
                       style="background-color: #e53e3e; color: white; font-weight: bold; padding: 0.5rem 1rem; border-radius: 0.375rem; text-decoration: none;">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
