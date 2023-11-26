<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/veiculos/edit.css') }}">
        <title>Editar Veiculo</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Veiculo</h1>
            <form action="{{ route('veiculos.update', $veiculos->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="placa">Placa:</label>
                    <input type="int" name="placa" value="{{ $veiculos->placa }}">
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" value="{{ $veiculos->modelo }}">
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" name="marca" value="{{ $veiculos->marca }}">
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="text" name="valor" value="{{ $veiculos->valor }}">
                </div>
                <div class="form-group">
                    <label for="cor">Cor:</label>
                    <input type="text" name="cor" value="{{ $veiculos->cor }}">
                </div>
                <div class="form-group">
                    <label for="ano">Ano:</label>
                    <input type="int" name="ano" value="{{ $veiculos->ano }}">
                </div>
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
                <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-app-layout>