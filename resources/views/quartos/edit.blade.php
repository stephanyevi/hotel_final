<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Quarto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <form method="POST" action="{{ route('quartos.update', $quarto->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700">Número</label>
                        <input type="text" name="numero" value="{{ old('numero', $quarto->numero) }}" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Status</label>
                        <textarea name="descricao" class="w-full border rounded px-3 py-2">{{ old('descricao', $quarto->descricao) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700">Preço</label>
                        <input type="number" step="0.01" name="preco" value="{{ old('preco', $quarto->preco) }}" class="w-full border rounded px-3 py-2">
                    </div>

                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Atualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
