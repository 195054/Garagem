<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/cliente.css') }}">
        <h1>Detalhes do Cliente</h1>
        <ul>
            <li><strong>ID:</strong> {{ $cliente->id }}</li>
            <li><strong>Nome:</strong> {{ $cliente->nome }}</li>
            <li><strong>CPF:</strong> {{  $cliente->cpf }}</li>
            <li><strong>Telefone:</strong> {{  $cliente->telefone }}</li>
            <li><strong>Endereço:</strong> {{  $cliente->endereco }}</li>
        </ul>
        <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>