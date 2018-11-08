@extends('layouts.app')
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reset Password</title>

  @section('style')
    <link href="{{ asset('css/form-login.css') }}" rel="stylesheet">
  @endsection
</head>
@section('content')
<div class="main-content">
  <div class="panel-body">
                      @if (session('status'))
                          <div class="alert alert-success">
                              {{ session('status') }}
                          </div>
                      @endif
  <form class="form-login" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
      <div class="form-log-in-with-email">
          <div class="form-white-background">
            <div class="form-title-row">
              <h1>Reset Password</h1>
            </div>
                  <div class="form-row{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label>
                        <span>Email</span>
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </label>
                  </div>

                  <div class="form-row">
                      <button type="submit">Send Password Reset Link</button>
                  </div>
          </div>
      </div>
</form>
    </div>
@endsection
