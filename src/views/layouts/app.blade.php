<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <title>{{ config('app.name', 'package for contact us page') }}</title>
    <style>
        .mastheadx {
            min-height: 100vh;
            /*min-height: 500px;*/
            /*background-image:  url('https://source.unsplash.com/1920x1080/?gray,abstract')*/;
            background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed !important;
        }
    </style>
</head>
<body>





<nav class="navbar navbar-expand-lg   shadow  mb-5">
    <div class="container">
        <a class="navbar-brand" href="/">{{config('app.name', 'package for contact us page')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item active">

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.index')}}">contact index</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.create')}}">create New</a>
                </li>

            </ul>


        </div>
    </div>
</nav>



<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 ">

                @yield('content')




            </div>
        </div>
    </div>
</header>


{{-- let browser detect your location --}}
<script>

    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
</script>
<p id="demo"></p>
</body>
</html>
