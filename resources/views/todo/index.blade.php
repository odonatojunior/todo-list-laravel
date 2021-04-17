@extends('base')

@section('content')
    <form action="{{ "nan" }}" class="search" style="display: none">
      <input type="text" class="search-bar">
      <button class="btn btn-view search-button">
        <i class="fas fa-search"></i>
      </button>
    </form>

    <div class="py-4">
      <h1 class="font-bold text-5xl mt-6 mb-3">Lista</h1>
    </div>
    
        @forelse ($todos as $todo)
            <div class="bg-gray-800 px-4 py-2 mb-2 flex justify-between rounded items-center">
                <p class="todo-text">{{ 
                  strlen($todo->todo) > 100 ? 
                  substr($todo->todo,0, 100 ).'...' : 
                  $todo->todo
                }}</p>
                
                <div class="flex">
                    <a href="{{ route('todo.show', $todo->id) }}" class="p-3 bg-blue-400 rounded mr-1 hover:bg-blue-500 transition-all">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a href="{{ route('todo.edit', $todo->id) }}" class="p-3 bg-yellow-400 rounded mr-1 hover:bg-yellow-500  transition-all">
                      <i class="fas fa-edit text-yellow-800"></i>
                    </a>
                    <form method="POST" action="{{ route('todo.destroy', $todo->id) }}" style="display: inline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="p-3 bg-red-600 rounded mr-1 hover:bg-red-700  transition-all">
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