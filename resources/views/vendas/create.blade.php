<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Adicionar Venda
        </h2>
    </x-slot>
    <header>
        <link rel="stylesheet" href="{{ asset('css/vendas/index.css') }}">
    </header>
    <div class="container-venda">
        <form action="{{ route('vendas.store') }}" method="POST" class="form-venda">
            @csrf
            <div class="form-group">
                <label for="data_venda">Data da Venda</label>
                <input type="date" class="form-control" name="data_venda" required>
            </div>
            <div class="form-group">
                <label for="valor_venda">Valor da Venda</label>
                <input type="values" class="form-control" name="valor_venda" required>
            </div>
            <div class="form-group">
                <label for="id_cliente">Cliente</label>
                <select class="form-control" name="id_cliente" required>
                    <option value="">Selecione um cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_veiculo">Veiculo</label>
                <select class="form-control" name="id_veiculo" required>
                    <option value="">Selecione um veiculo</option>
                    @foreach($veiculos as $veiculo)
                        <option value="{{ $veiculo->id }}">{{ $veiculo->modelo}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</x-app-layout>