<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/funcionarios/index.css') }}">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Lista Funcionarios') }}
        </h2>
    </x-slot>
    <div class="container">
        <form action="{{ route('funcionarios.index') }}" method="GET" class="search-form">
            <div class="search-container">
                <input type="text" name="search" placeholder="Pesquisar funcionarios..." value="{{ request()->query('search') }}" class="search-input">
                <button type="submit" class="search-button">Pesquisar</button>
            </div>
        </form>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-primary">Novo Funcionario</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionarios as $funcionario)
                    <tr>
                        <td class="colunas">{{ $funcionario->id }}</td>
                        <td id="nome">{{ $funcionario->matricula }}</td>
                        <td class="colunas">{{ $funcionario->nome }}</td>
                        <td class="colunas">{{ $funcionario->telefone }}</td>
                        <td class="colunas">{{ $funcionario->cargo }}</td>
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
        <br>
        {{ $funcionarios->links() }}
        <br>
    </div>
</x-app-layout>

