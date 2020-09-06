@extends('layout.layout')
@section('title','All todos')
@section('content')

   <div class="container">
       <div class="row pt-3 justify-content-center">
           <div class="card" style="width:50%">
           <div class="card-header text-center">
            <h1>All todos</h1>
           </div>
          @if (session()->has('success'))
              <div class="alert alert-danger">
                {{session()->get('success')}}
              </div>
              @endif
           <div class="card-body">
           <ul class="list-group">
           @forelse ($todos as $todo)
           <li class="list-group-item text-muted">
           {{$todo->title}}
           <span class="float-right">
           <a href="/todo/{{$todo->id}}/delete" style="color:red;">
           <i class="fa fa-trash-o "></i></a>
           </span>
           <span class="float-right ">
           <a href="/todo/{{$todo->id}}/edit" style="color:green;">
           <i class="fa fa-edit mr-2"></i></a>
           </span>
           <span class="float-right">
           <a href="/todo/{{$todo->id}}" >
           <i class="fa fa-eye mr-2"></i></a>
           </span>
           </li>
           @empty
             <p>No users</p>
           @endforelse
           </ul>
           </div>
           </div>
       </div>
   </div>
   @endsection
