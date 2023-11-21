<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Vendas
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/vendas/index.css') }}">

    <div class="container-venda">
        <a href="{{ route('vendas.create') }}" class="btn btn-primary">Adicionar Venda</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Valor da Venda</th>
                    <th>Cliente</th>
                    <th>Data da Venda</th>
                    <th>Veiculo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendas as $venda)
                    <tr>
                        <td>{{ $venda->id }}</td>
                        <td>{{ $venda->valor_venda }}</td>
                        <td>{{ $venda->cliente->nome }}</td>
                        <td>{{ $venda->data_venda }}</td>
                        <td>
                            <a href="{{ route('vendas.show', $venda->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>