<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MBN - 日本語訓練-教育機関</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
  </head>
  <body>
      
@extends('layouts.header')
    
      <main role="main">
        <!-- CONTENT -->
@yield('content')
        <!-- FOOTER -->
        <footer class="container">
          <p class="float-right"><a href="#">Back to top</a></p>
          <p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::asset('js/jquery-slim.min.js') }}"><\/script>')</script>
        <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    </body>
</html>
