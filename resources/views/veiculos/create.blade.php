<x-app-layout>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Novo Veiculo</title>
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
            }
            input[type="text"],
            input[type="date"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #3a0d0d;
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


