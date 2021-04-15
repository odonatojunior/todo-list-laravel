@extends('base')

@section('content')
    <form action="{{ "nan" }}" class="search" style="display: none">
      <input type="text" class="search-bar">
      <button class="btn btn-view search-button">
        <i class="fas fa-search"></i>
      </button>
    </form>

    <div class="index-title">
      <h1>Lista</h1>
    </div>
    
        @forelse ($todos as $todo)
            <div class="todo">
                <p class="todo-text">{{ 
                  strlen($todo->todo) > 100 ? 
                  substr($todo->todo,0, 100 ).'...' : 
                  $todo->todo
                }}</p>
                <div class="todo-buttons">
                    <a href="{{ route('todo.show', $todo->id) }}" class="btn btn-view">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-edit">
                      <i class="fas fa-edit"></i>
                    </a>
                    <form method="POST" action="{{ route('todo.destroy', $todo->id) }}" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-exclude">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                </div>
            </div>
        @empty
          <div class="todo">
            <p class="todo-text">Não há todos para serem exibidos</p>  
          </div>            
        @endforelse
        
@endsection