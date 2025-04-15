<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Detalhes do Serviço</h2>
    </x-slot>

    <div class="p-4 max-w-2xl mx-auto bg-white rounded shadow">
        <p><strong>Nome:</strong> {{ $servico->nome }}</p>
        <p><strong>Descrição:</strong> {{ $servico->descricao }}</p>

        <a href="{{ route('servicos.index') }}" class="inline-block mt-4 text-blue-600 underline">Voltar</a>
    </div>
</x-app-layout>
