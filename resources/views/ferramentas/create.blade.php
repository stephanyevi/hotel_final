<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Criar Ferramenta
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        <form action="{{ route('ferramentas.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block">Nome</label>
                <input type="text" name="nome" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block">Quantidade</label>
                <input type="number" name="quantidade" class="w-full border px-3 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block">Status</label>
                <select name="status" class="w-full border px-3 py-2 rounded" required>
                    <option value="disponível">Disponível</option>
                    <option value="em uso">Em uso</option>
                    <option value="manutenção">Manutenção</option>
                </select>
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Salvar</button>
        </form>
    </div>
</x-app-layout>
