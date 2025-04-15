<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Quarto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('quartos.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700">Número</label>
                        <input type="text" name="numero" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Descrição</label>
                        <textarea name="descricao" class="w-full border rounded px-3 py-2"></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Preço</label>
                        <input type="number" step="0.01" name="preco" class="w-full border rounded px-3 py-2">
                    </div>

                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
