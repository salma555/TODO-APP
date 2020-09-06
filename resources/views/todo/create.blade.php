@extends('layout.layout')
@section('title', 'create todo')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h1>create new todo</h1>
              </div>
              <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                  <form action="/create" method="POST">
                    @csrf
                      <div class="form-group">
                          <input type="text" name="todoTitle" class="form-control" placeholder="enter todo title" value="{{old('todoTitle')}}">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="tododis" rows="3" placeholder="enter todo description"></textarea>
                      </div>
                      <div class="form-group text-center">
                          <button type="submit" class="btn btn-success" style="width:40%"> CREATE TODO</button></div>

                  </form>
              </div>
          </div>
      </div>
    </div>

</div>

@endsection
