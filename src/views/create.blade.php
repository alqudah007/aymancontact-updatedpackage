<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/pulse/bootstrap.min.css">
    <title>Start Page Package </title>
    <style>
        .masthead {
            height: 100vh;
            min-height: 500px;
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
        <a class="navbar-brand" href="#">Start Page Package</a>
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
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
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

                <h1 class="font-weight-light">This is my PACKAGE Create</h1>
                <p class="lead">A great starter layout for a landing page</p>

                <div class="container">
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="name-form-input">@NAME</span>
                                    </div>
                                    <input name="name" type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="name-form-input">

                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="mobile-form-input">+966</span>
                                    </div>
                                    <input name="mobile" type="text" class="form-control" placeholder="Recipient's username"
                                           aria-label="Recipient's username" aria-describedby="mobile-form-input">

                                </div>
                            </div>


                        </div>
                        <div class="form-group ">

                            <textarea name="message"  class="form-control mb-3" rows="5" id="formGroupExampleInput2"
                                      placeholder="Another input"></textarea>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <form action="" method="">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Create label</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
            </div>
        </form>
    </div>
</section>

</body>
</html>
