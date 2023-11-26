<x-app-layout>
    <div class="author-details-layout">
        <link rel="stylesheet" href="{{ asset('css/veiculos/show.css') }}">
        <h1>Detalhes do Veiculo</h1>
        <ul>
            <li><strong>ID:</strong> {{ $veiculos->id }}</li>
            <li><strong>Placa:</strong> {{ $veiculos->placa }}</li>
            <li><strong>Modelo:</strong> {{  $veiculos->modelo }}</li>
            <li><strong>Marca:</strong> {{  $veiculos->marca }}</li>
            <li><strong>Valor:</strong> {{  $veiculos->valor }}</li>
        </ul>
        <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</x-app-layout>