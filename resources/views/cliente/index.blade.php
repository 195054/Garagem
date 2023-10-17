<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/cliente/cliente.css') }}">
    <div class="container">
        {{-- <h1>Lista de Cliente</h1> --}}
        <br>
        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Novo Cliente</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $cliente)
                    <tr>
                        <td class="colunas">{{ $cliente->id }}</td>
                        <td id="nome">{{ $cliente->nome }}</td>
                        <td id="telefone">{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>
                            <a href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>