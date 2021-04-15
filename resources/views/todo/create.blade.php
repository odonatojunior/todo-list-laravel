@extends('base')

@section('content')
  <form method="POST" action="{{ route('todo.store') }}">
    @method('POST')
    @csrf


    <div class="form-controller">
      <label for="todo">Tarefa:</label>
      <input type="text" name="todo" id="todo" value="{{ old('todo') }}" required style="width: 100%; height: 36px; padding: 0 .5rem"> <br>
    </div>

    <div class="form-controller">
      <label for="isComplete">Completo?</label>
      <input type="hidden" name="isComplete" value="0">
      <input type="checkbox" name="isComplete" id="isComplete" value="1"> <br>
    </div>

    @error('todo')
      <p style="color: red">{{ $message }}</p>
    @enderror

    <input class="btn btn-send" type="submit" name="command" value="Salvar">
    <input class="btn btn-exclude" type="reset" value="Limpar">

  </form>
  
@endsection