<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $todos = Todo::all();
    return view('todo.index')->with("todos", $todos);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('todo.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate(
      $this->getRules(),
      $this->getErrorMessages()
    );

    $todo = new Todo();
    $todo->todo = $request->input('todo');
    $todo->complete = $request->input('isComplete');
    $todo->save();

    return redirect(route('todo.index'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $todo = Todo::find($id);
    if($todo){
      return view('todo.show')->with("todo", $todo);
    } else {
      abort(404);
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $todo = Todo::find($id);
    return view('todo.edit')->with("todo", $todo);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $todo = Todo::find($id);
    $todo->todo = $request->input('todo');
    $todo->complete = $request->input('isComplete');    

    $todo->save();
    return redirect(route('todo.index'));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    Todo::destroy($id);
    return redirect(route('todo.index'));
  }

  // public function search($id){
  //   $todo = Todo::find($id);
  //   return view('todo.search')-with("todo", $todo);
  // }

  public function getRules()
  {
    return [
      'todo' => 'required | max:400'
    ];
  }

  public function getErrorMessages()
  {
    return [
      'todo.required|todo.string' => 'preencha o ToDo seu animal'
    ];
  }
}
