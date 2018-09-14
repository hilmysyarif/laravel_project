@extends('layouts.backend.backend')

@section('site-title')
  Login
@endsection


@section('content')
<div class="col-md-4 col-xs-offset-4">
  <div class="login-logo">
    <a href="{{ url('/#/') }}"><b>Intertec</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>

      </div>
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
@endsection
