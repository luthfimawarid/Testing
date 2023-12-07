<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-Z99pjrDmAd4XDOjwbE9tC4C7UcyzBpTbJPUG5tAV9BDJQpmd7cF+2Z9uyIXAOfkT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @yield('stylesheets')
  </head>
  <body>
  <nav>
    @include('pamer.nav')
</nav>
<main>
    @yield('content')
</main>
<footer>
    @include('pamer.footer')
</footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-rbs4g2DQ1A23KDJfDE5Cv9ljXVKDO9jiOwCmgM5j7z8bR9U4qZlfS9n9ATal0zK4" crossorigin="anonymous"></script>