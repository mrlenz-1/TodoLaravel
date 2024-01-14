<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home() {
        $todos = Todo::all();
        return view('home',['todos'=>$todos]);
    }
    public function store(Request $request){
      $validatedData = $request ->validate(['title'=>'required','max:124']);  
      Todo::create($validatedData);
      return back();

    }
    public function edit($id){
      $todos = Todo::findOrFail($id);
      return view('update',['todo'=>$todos]);

    }
    public function update(Request $request, Todo $todo){
      $validatedData = $request ->validate(['title'=>'required|max:124']);
      
      $todo->update($validatedData);
      return redirect(route('home'));


    }
    public function delete(Todo $todo){
      $todo->delete();
      return back();
    }


}
