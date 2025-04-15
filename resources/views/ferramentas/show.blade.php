<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Detalhes da Ferramenta
        </h2>
    </x-slot>

    <div class="py-4 px-6">
        <p><strong>Nome:</strong> {{ $ferramenta->nome }}</p>
        <p><strong>Quantidade:</strong> {{ $ferramenta->quantidade }}</p>
        <p><strong>Status:</strong> {{ $ferramenta->status }}</p>

        <a href="{{ route('ferramentas.index') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Voltar</a>
    </div>
</x-app-layout>
