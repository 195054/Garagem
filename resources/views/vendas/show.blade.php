<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Detalhes da Venda
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/vendas/show.css') }}">

    <div class="container-venda form-venda">
        <h3>{{ $venda->valor_venda }}</h3>
        <p><strong>Cliente:</strong> {{ $venda->cliente->nome }}</p>
        <p><strong>Veiculo:</strong> {{ $venda->veiculo->modelo }}</p>
        <p><strong>Data da Venda:</strong> {{ $venda->data_venda}}</p>
        <a href="{{ route('vendas.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>