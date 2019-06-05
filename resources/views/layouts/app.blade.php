<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('bootstrap-4.3.1/css/bootstrap.min.css')}}">
    
    <title>@yield('title')</title>
  </head>
  <body>
  <div class="container bg-light">
<h5>@yield('head')</h5>

    @yield('content')


  </div>



    @include('layouts.footer')

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('bootstrap-4.3.1/css/bootstrap.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </body>
</html>