@extends('base')

@section('content')

  <form method="POST" action="{{ route('todo.update', $todo->id) }}">
    @method('PUT')
    @csrf

    <div class="form-controller">
      <label for="todo">Tarefa:</label>
      <input type="text" name="todo" id="todo" value="{{ $todo->todo }}" required style="width: 100%; height: 36px; padding: 0 .5rem"> <br>
    </div>

    <div class="form-controller">
      <label for="isComplete">Completo?</label>
      <input type="hidden" name="isComplete" value="0">
      <input type="checkbox" name="isComplete" id="isComplete" value="1" {{$todo->complete ? "checked" : ""}}> <br>
    </div>

    @error('todo')
      <p style="color: red">{{ $message }}</p>
    @enderror

    <input class="btn btn-send" type="submit" name="command" value="Salvar">

  </form>
  
@endsection