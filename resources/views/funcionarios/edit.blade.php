<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/funcionarios/edit.css') }}">
        <title>Editar Funcionario</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Funcionario</h1>
            <form action="{{ route('funcionarios.update', $funcionarios->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="matricula">Matricula:</label>
                    <input type="int" name="matricula" value="{{ $funcionarios->matricula }}">
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo:</label>
                    <input type="text" name="cargo" value="{{ $funcionarios->cargo }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="int" name="telefone" value="{{ $funcionarios->telefone }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $funcionarios->nome }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>