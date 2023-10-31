<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/clientes.css') }}">
        <h1>Detalhes do Cliente</h1>
        <ul>
            <li><strong>ID:</strong> {{ $clientes->id }}</li>
            <li><strong>Nome:</strong> {{ $clientes->nome }}</li>
            <li><strong>CPF:</strong> {{  $clientes->cpf }}</li>
            <li><strong>Telefone:</strong> {{  $clientes->telefone }}</li>
            <li><strong>Endereço:</strong> {{  $clientes->endereco }}</li>
        </ul>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>