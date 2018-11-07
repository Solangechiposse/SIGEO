@extends('layouts.app')

@section('content')
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

  <form class="form-login" method="POST" action="{{ route('password.request') }}"">
    {{ csrf_field() }}
      <div class="form-log-in-with-email">
          <div class="form-white-background">
            <div class="form-title-row">
              <h1>Log in</h1>
            </div>
            <input type="hidden" name="token" value="{{ $token }}">

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

                  <div class="form-row{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password">
                          <span>Password</span>
                          <input id="password" type="password" class="form-control" name="password" required>

                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </label>
                  </div>

                  <div class="form-row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                      <label for="password">
                          <span>Confirmar Password</span>
                          <input id="password" type="password" class="form-control" name="password_confirmation" required>

                          @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                      </label>
                  </div>

                  <div class="form-row">
                      <button type="submit">Reset Password</button>
                  </div>
          </div>
      </div>
</form>
    </div>
@endsection
