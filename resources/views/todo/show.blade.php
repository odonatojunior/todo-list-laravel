@extends('base')

@section('content')
    
    <h1 class="todo">Todo #{{ $todo->id }}</h1>
    <p><strong>ID:</strong> {{ $todo->id }}</p>
    <p><strong>Todo:</strong> {{ $todo->todo }}</p>
    <p><strong>Completo:</strong> {{ $todo->complete ? "Sim" : "Não" }}</p>


@endsection