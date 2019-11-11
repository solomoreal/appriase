@extends('layouts.app')

@section('content')

<body class="bg-info">

    <div class="container">
      <div class="card card-login mx-auto mt-5 rounded-circle">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-block rounded-circle" type="submit">Login</button>
          </form>
          <div class="text-center">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

          </div>
        </div>
      </div>
    </div>
  
@endsection
