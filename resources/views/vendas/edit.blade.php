<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Editar Venda
        </h2>
    </x-slot>

    <link rel="stylesheet" href="{{ asset('css/vendas/edit.css') }}">

    <div class="container-venda">
        <form action="{{ route('vendas.update', $venda->id) }}" method="POST" class="form-venda">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="valor_venda">Valor da Venda</label>
                <input type="int" class="form-control" name="valor_venda" value="{{ $venda->valor_venda }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
        <a href="{{ route('vendas.index') }}" class="btn btn-secondary mt-4">Voltar</a>
    </div>
</x-app-layout>