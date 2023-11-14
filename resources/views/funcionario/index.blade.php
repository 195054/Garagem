<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/funcionarios/funcionarios.css') }}">
    <div class="container">
        {{-- <h1>Lista de Funcionarios</h1> --}}
        <br>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">Novo Funcionario</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Matricula</th>
                    <th>Cargo</th>
                    <th>Telefone</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td class="colunas">{{ $funcionario->id }}</td>
                        <td id="nome">{{ $funcionario->nome }}</td>
                        <td id="telefone">{{ $funcionario->telefone }}</td>
                        <td>{{ $funcionario->endereco }}</td>
                        <td>
                            <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-info">Detalhes</a>
                            <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $funcionarios->links() }}
    </div>
</x-app-layout>