@extends('layout.layout')
@section('title','todo -'.$todo->id)
@section('content')
 <div class="container">
 
     <h1 class="mt-5 text-center">
     {{$todo->title}}
     </h1>
     <div class="row pt-5 justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">
                 
                 <span>Details</span>
                 <span class="badge badge-warning float-lg-right"> {{ boolval($todo->completed)? 'completed':'non completed'}}</span></div>
                 <div class="card-body">
                 {{$todo->description}}
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection
