<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/veiculos/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Veiculos') }}
        </h2>
    </x-slot>
    <section class="veichulos-details">
      <div class="veichulos-content">
        <div class="veichulos-meta">
          <span class="veichulos-label">ID:</span>
          <span class="veichulos-info">{{ $veiculos->id }}</span>
        </div>
        <div class="veichulos-meta">
          <span class="veichulos-label">Placa:</span>
          <span class="veichulos-info">{{ $veiculos->placa }}</span>
        </div>
        <div class="veichulos-meta">
          <span class="veichulos-label">Modelo:</span>
          <span class="veichulos-info">{{ $veiculos->modelo }}</span>
        </div>
        <div class="veichulos-meta">
          <span class="veichulos-label">Marca:</span>
          <span class="veichulos-info">{{ $veiculos->marca }}</span>
        </div>
        <div class="veichulos-meta">
          <span class="veichulos-label">Valor:</span>
          <span class="veichulos-info">{{ $veiculos->valor }}</span>
        </div>
        <div class="veichulos-meta">
          <span class="veichulos-label">Cor:</span>
          <span class="veichulos-info">{{ $veiculos->cor }}</span>
        </div>
        <div class="veichulos-meta">
          <span class="veichulos-label">Ano:</span>
          <span class="veichulos-info">{{ $veiculos->ano }}</span>
        </div>
      </div>
      <a href="{{ route('veiculos.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>