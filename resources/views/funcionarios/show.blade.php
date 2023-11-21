<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/funcionarios/index.css') }}">
        <h1>Detalhes do Funcionario</h1>
        <ul>
            <li><strong>ID:</strong> {{ $funcionarios->id }}</li>
            <li><strong>Nome:</strong> {{ $funcionarios->nome }}</li>
            <li><strong>Matricula:</strong> {{  $funcionarios->cpf }}</li>
            <li><strong>Telefone:</strong> {{  $funcionarios->telefone }}</li>
            <li><strong>Cargo:</strong> {{  $funcionarios->cargo }}</li>
        </ul>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>