<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Novo Serviço</h2>
    </x-slot>

    <div class="p-4 max-w-2xl mx-auto">
        <form method="POST" action="{{ route('servicos.store') }}">
            @csrf
            <div class="mb-4">
                <label class="block">Nome</label>
                <input type="text" name="nome" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Descrição</label>
                <textarea name="descricao" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <button class="bg-green-600 text-white px-4 py-2 rounded">Salvar</button>
        </form>
    </div>
</x-app-layout>
