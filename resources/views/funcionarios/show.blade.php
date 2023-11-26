<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/funcionarios/show.css') }}">
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Funcionarios') }}
        </h2>
    </x-slot>
    <section class="funcionariostyle-details">
      <div class="funcionariostyle-content">
        <div class="funcionariostyle-meta">
          <span class="funcionariostyle-label">ID:</span>
          <span class="funcionariostyle-info">{{ $funcionarios->id }}</span>
        </div>
        <div class="funcionariostyle-meta">
          <span class="funcionariostyle-label">Matricula:</span>
          <span class="funcionariostyle-info">{{ $funcionarios->matricula }}</span>
        </div>
        <div class="funcionariostyle-meta">
          <span class="funcionariostyle-label">Nome:</span>
          <span class="funcionariostyle-info">{{ $funcionarios->nome }}</span>
        </div>
        <div class="funcionariostyle-meta">
          <span class="funcionariostyle-label">Telefone:</span>
          <span class="funcionariostyle-info">{{ $funcionarios->telefone }}</span>
        </div>
        <div class="funcionariostyle-meta">
          <span class="funcionariostyle-label">Cargo:</span>
          <span class="funcionariostyle-info">{{ $funcionarios->cargo }}</span>
        </div>
      </div>
      <a href="{{ route('funcionarios.index') }}" class="btn-return">Voltar</a>
    </section>
  </x-app-layout>
