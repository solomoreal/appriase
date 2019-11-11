@extends('layouts.app')

@section('content')

{{-- new form --}}

<div class="container bg-info">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Staff Registration</div>
      <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" name="name" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">name</label>
                </div>              
            </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" href="login.html">Register</button>
        </form>
        <div class="text-center">
        <a class="d-block small mt-3" href="{{route('login')}}">Login Page</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
@endsection
