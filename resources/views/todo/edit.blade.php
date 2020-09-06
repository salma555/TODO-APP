@extends('layout.layout')
@section('title', 'edit todo')
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  <h1>edit todo</h1>
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
                  <form action="/todo/{{$todo->id}}" method="POST">
                    @csrf
                      <div class="form-group">
                          <input type="text" name="todoTitle" class="form-control" placeholder="enter todo title" value="{{ $todo -> Title}}">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="tododis" rows="3" placeholder="enter todo description">{{$todo -> description}}</textarea>
                      </div>
                      <div class="form-group text-center">
                          <button type="submit" class="btn btn-success" style="width:40%"> update TODO</button></div>

                  </form>
              </div>
          </div>
      </div>
    </div>

</div>

@endsection
