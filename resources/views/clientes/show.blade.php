<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/clientes/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    <section class="clienthe-details">
      <div class="clienthe-content">
        <div class="clienthe-meta">
          <span class="clienthe-label">ID:</span>
          <span class="clienthe-info">{{ $cliente->id }}</span>
        </div>
        <div class="clienthe-meta">
          <span class="clienthe-label">CPF:</span>
          <span class="clienthe-info">{{ $cliente->cpf }}</span>
        </div>
        <div class="clienthe-meta">
          <span class="clienthe-label">Nome:</span>
          <span class="clienthe-info">{{ $cliente->nome }}</span>
        </div>
        <div class="clienthe-meta">
          <span class="clienthe-label">Endereço:</span>
          <span class="clienthe-info">{{ $cliente->endereco }}</span>
        </div>
        <div class="clienthe-meta">
          <span class="clienthe-label">Telefone:</span>
          <span class="clienthe-info">{{ $cliente->telefone }}</span>
        </div>
      </div>
      <a href="{{ route('clientes.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>