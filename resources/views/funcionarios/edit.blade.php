<x-app-layout>
    <style>
        body {
            background-color: #fff; /* Fundo branco */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            color: #fff;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }
        .btn-success {
            background-color: #28a745;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
    </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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