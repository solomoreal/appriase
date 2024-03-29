<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Appraisal') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('main.css')}}">
        <link href="{{asset('css/heroic-features.css')}}" rel="stylesheet">


        <!-- Styles -->
        
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Tega Appraise</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  @guest
                  <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">signin</a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="#">signout</a>
                  </li>
                  @endguest
                  </ul>
              </div>
            </div>
          </nav>
        
          <!-- Page Content -->
          <div class="container">
        
            <!-- Jumbotron Header -->
            <header class="jumbotron my-4 overlay w-100 h-100" style="background: url({{asset('img/tegacover.jpg')}});min-height: 70vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            color: green;
            font-weight: bolder;
            position: relative;">
              <h1 class="display-3">Welcome To Tega Appraise!</h1>
              <p class="lead">Say good bye to paper appraisal forms, here you can via your evaluation report and appraise other employees. No bias just login and begin.</p>
            <a href="{{route('login')}}" class="btn btn-primary btn-lg">Start Here!</a>
            </header>
        
            <!-- Page Features -->
            
            <!-- /.row -->
        
          </div>
          <!-- /.container -->
        
          <!-- Footer -->
          <footer class="py-5 bg-dark">
            <div class="container">
              <p class="m-0 text-center text-white">Copyright &copy; Tega 2019</p>
            </div>
            <!-- /.container -->
          </footer>
        
          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         
    </body>
</html>
