<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\todos;

class todoControler extends Controller
{
   public function index(){
      $todos = \App\todos ::all();
       return view('todo.index',['todos'=>$todos]);
   }

   public function show ($todo){
    return view('todo.show')->with('todo',\App\todos ::find($todo));
   }

   public function create(){
       return view('todo.create');
   }
   public function store(Request $request){

      $request ->validate([
    'todoTitle'=>'required|min:6',
    'tododis'=> 'required'
]) ;
    $todo =new todos();
       $todo -> title  = $request->todoTitle;
       $todo -> description = $request->tododis;
       $todo->save();
       $request->session()->flash('success','success todo');
       return redirect('/todo');
   }

   public function edit(todos $todo){
      
       return view('todo.edit') ->with('todo',$todo);
       
   }
   public function update(Request $request, todos $todo){

      $request ->validate([
        'todoTitle'=>'required|min:6',
        'tododis'=> 'required' ]) ;

           $todo -> title  = $request-> get('todoTitle');
           $todo -> description = $request->get('tododis');
           $todo->save();
           $request->session()->flash('success','success dupdate todo');
           return redirect('/todo');

   }

   public function destroy( todos $todo){
      
       $todo->delete();
       session()->flash('success','success deleted todo');
       return redirect('/todo');
   }


}
