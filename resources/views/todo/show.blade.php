@extends('base')

@section('content')
    
    <div class="action-title">
      <h1 class="text-3xl">Todo #{{ $todo->id }}</h1>
      <a class="btn hover:text-gray-300" href="{{ route('todo.index') }}"> <i class="fas fa-caret-left"></i>&zwj; Voltar </a>
    </div>

    <p><strong>ID:</strong> {{ $todo->id }}</p>
    <p><strong>Todo:</strong> {{ $todo->todo }}</p>
    <p><strong>Completo:</strong> {{ $todo->complete ? "Sim" : "Não" }}</p>


@endsection