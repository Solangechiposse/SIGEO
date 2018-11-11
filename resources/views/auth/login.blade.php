@extends('layouts.templateLogin')
	<title>Login Form</title>

  @section('style')
    <link href="{{ asset('css/form-login.css') }}" rel="stylesheet">
  @endsection

@section('content')
<div class="main-content">

  <form class="form-login" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      <div class="form-log-in-with-email">
          <div class="form-white-background">
            <div class="form-title-row">
              <h1>Log in</h1>
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

                  <div class="form-row">
                      <button type="submit">Entrar</button>
                  </div>
          </div>
          <a class="form-forgotten-password" href="{{ route('password.request') }}">
              Esqueceu o Password? &middot;
          </a>
      </div>
</form>
    </div>
@endsection
