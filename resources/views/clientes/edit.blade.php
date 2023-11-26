<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/clientes/edit.css') }}">
        <title>Editar Cliente</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Cliente</h1>
            <form action="{{ route('clientes.update', $clientes->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="int" name="cpf" value="{{ $clientes->cpf }}">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="{{ $clientes->nome }}">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="int" name="telefone" value="{{ $clientes->telefone }}">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco" value="{{ $clientes->endereco }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>