<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/pulse/bootstrap.min.css">
    <title>{{ config('app.name', 'package for contact us page') }}</title>
    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
            /*background-image:  url('https://source.unsplash.com/1920x1080/?gray,abstract')*/ ;
            background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">{{config('app.name', 'package for contact us page')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/call')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create')}}">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('address')}}">Address Geo location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('address2')}}">Address Geo location 2 </a>
                    <a class="nav-link" href="{{route('address3')}}">Address Geo location 3 Guzzle</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">

                @yield('content')
                <button onclick="getLocation()">Try It</button>

                <p id="demo"></p>
            </div>
        </div>
    </div>
</header>


<!-- Page Content -->
{{--<section class="py-5">


<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

</section>--}}
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
</body>
</html>
