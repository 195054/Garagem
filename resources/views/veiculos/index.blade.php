<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/veiculos/index.css') }}">
    <div class="container">
        {{-- <h1>Lista de Veiculos</h1> --}}
        <br>
        <a href="{{ route('veiculos.create') }}" class="btn btn-primary">Novo Veiculo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Valor</th>
                    <th>Cor</th>
                    <th>Ano</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                    <tr>
                        <td class="colunas">{{ $veiculo->id }}</td>
                        <td id="placa">{{ $veiculo->placa }}</td>
                        <td id="modelo">{{ $veiculo->modelo }}</td>
                        <td id="marca">{{ $veiculo->marca }}</td>
                        <td id="valor">{{ $veiculo->valor }}</td>
                        <td id="cor">{{ $veiculo->cor }}</td>
                        <td id="ano">{{ $veiculo->ano }}</td>
                        <td>
                            <a href="{{ route('veiculos.show', $veiculo->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('veiculos.destroy', $veiculo->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $veiculos->links() }}
    </div>
</x-app-layout>