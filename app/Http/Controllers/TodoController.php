<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
    	$todo = Todo::all();
    	return view('todo')->with('todo', $todo);
    }

    public function store(Request $request)
    {
    	$todo_item = $request->input('todo_item');
    	$todo = new Todo;
    	$todo->item = $todo_item;
    	$todo->save();

    	$todo = Todo::all();
    	return view('todo')->with('todo', $todo);
    }

    public function destroy(Request $request, Todo $td) 
    {
        $td->delete();
        
        return redirect('todo');
    }

    public function update(Request $request)
    {
        $id_todo = $request->input('id_todo');
        $todo = Todo::find($id_todo);
        $todo->item = $request -> input('todo_item');
        $todo->save();

        return redirect('todo');
    }

    public function edit($id)
    {
        $todo = Todo::all();
        $todo_edit = Todo::find($id);
        //dd($todo_edit);
        return view('todo') -> with('todo', $todo) -> with('todo_edit', $todo_edit);
    }
}
