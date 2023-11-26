<x-app-layout>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/veiculos/create.css') }}">
        <title>Novo Veiculo</title>
    </head>
    <body>
            <div class="container">
                <h1>Novo Veiculo</h1>
                <form action="{{ route('veiculos.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                    @csrf
                    <div class="form-group">
                        <label for="placa">Placa:</label>
                        <input type="int" name="placa">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input type="text" name="modelo">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" name="marca">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input type="int" name="valor">
                    </div>
                    <div class="form-group">
                        <label for="cor">Cor:</label>
                        <input type="text" name="cor">
                    </div>
                    <div class="form-group">
                        <label for="ano">Ano:</label>
                        <input type="int" name="ano">
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form> 
                </div>
            </body>
</x-app-layout>


