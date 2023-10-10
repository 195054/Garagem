<body>
        <div class="container">
            <h1>Novo Cliente</h1>
            <form action="{{ route('cliente.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento">
                </div>
                <div class="form-group">
                    <label for="nacionalidade">Nacionalidade:</label>
                    <input type="text" name="nacionalidade">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('autores.index') }}" class="btn btn-secondary">Cancelar</a>
                </form> 
            </div>
        </body>


