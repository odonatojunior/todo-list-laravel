@extends('base')

@section('content')

  <div class="action-title">
    <h1 class="text-3xl">Crie seu Todo</h1>
    <a class="btn hover:text-gray-300" href="{{ route('todo.index') }}"> <i class="fas fa-caret-left"></i>&zwj; Voltar </a>
  </div>

  <form method="POST" action="{{ route('todo.store') }}">
    @method('POST')
    @csrf


    <div class="my-4">
      <label class="text-2xl" for="todo">Tarefa:</label>
      <input class="min-w-full mt-2 p-2 text-gray-700 rounded" type="text" name="todo" id="todo" value="{{ old('todo') }}" required > <br>
    </div>

    <div class="my-4">
      <label class="text-xl" for="isComplete">Completo?</label>
      <input type="hidden" name="isComplete" value="0">
      <input type="checkbox" name="isComplete" id="isComplete" value="1"> <br>
    </div>

    @error('todo')
      <p style="color: red">{{ $message }}</p>
    @enderror

    <input class="btn bg-green-600 hover:bg-green-700" type="submit" name="command" value="Salvar">
    <input class="btn bg-red-600 hover:bg-red-700" type="reset" value="Limpar">

  </form>
  
@endsection