@extends('layout.master')

@section('Title')
    <title>BigBlaxk Login</title>
@endsection

@section('Content')

  <div class="container">
      <h4 class="text-center"> Login </h4>
      <form method='post' action="{{ route('BigBlaxkLoginPost') }}" class="col-sm-8 col-sm-offset-2">
          <div class="form-group">
              <input class="form-control" type="text" name="BlaxkUserI" required>
          </div>

          <div class="form-group">
            <input class="form-control" type="password" name="BlaxkPassI" required>
        </div>

        <div class="form-group">
            {{ csrf_field() }}
            <input class="btn btn-primary btn-block " type="submit" >
        </div>
      </form>
  </div>

@endsection