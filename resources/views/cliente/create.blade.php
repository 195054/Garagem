<body>
        <div class="container">
            <h1>Novo Cliente</h1>
            <form action="{{ route('cliente.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="int" name="cpf">
                </div>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="int" name="telefone">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
                </form> 
            </div>
        </body>


