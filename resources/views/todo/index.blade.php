@extends('base')

@section('content')
    <form action="{{ "nan" }}" class="search" style="display: none">
      <input type="text" class="search-bar">
      <button class="btn btn-view search-button">
        <i class="fas fa-search"></i>
      </button>
    </form>

    <div class="py-4">
      <h1 class="title relative font-bold text-5xl mt-6 mb-3">Lista</h1>
    </div>
    
        @forelse ($todos as $todo)
            <div class="todo">
                <p class="text-gray-300 mr-4">
                  @if ($todo->complete)
                      <i class="fas fa-check-circle"></i>
                  @endif
                  {{ 
                    strlen($todo->todo) > 100 ? 
                    substr($todo->todo,0, 100 ).'...' : 
                    $todo->todo
                  }}
                </p>
                
                <div class="grid gap-2 sm:flex">
                    <a href="{{ route('todo.show', $todo->id) }}" class="btn-actions bg-blue-400 hover:bg-blue-500">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn-actions bg-yellow-400 hover:bg-yellow-500">
                      <i class="fas fa-edit text-yellow-800"></i>
                    </a>
                    <form method="POST" action="{{ route('todo.destroy', $todo->id) }}" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-actions bg-red-600 hover:bg-red-700">
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