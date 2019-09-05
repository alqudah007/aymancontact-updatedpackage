@extends(config('aymancontactconfig.layouts_app'))
@section('content')

    <div class="col-12 text-left">

        <h1 class="font-weight-light">
            admin.show

        </h1>
        <p class="lead">Manage all the contants form requests </p>
        <img src="{!! $map !!}">

        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <i class="far fa-clock text-info"></i>Date / Time : {{$contact->created_at}}

                        </div>
                        <div class="card-body">
                            <small class="text-muted cat">
                                <i class="far fa-clock text-info"></i>Date / Time : {{$contact->created_at}}
                                <i class="fas fa-users text-info"></i>
                            </small>
                            <h5 class="card-title">   Name : {{$contact->name}} </h5>
                            <p class="card-text"> Phone: {{$contact->phone}} </p>
                            <p class="card-text">{{$contact->message}}</p>
                            <a href="#" class="btn btn-primary">Reply {{$contact->id}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Detail's</h4>
                            <h6 class="card-subtitle mb-2"> <span class="badge badge-success">name </span>
                                 {{$contact->name}}</h6>
                            <p class="card-text">
                                <span class="badge badge-danger">phone </span>
                                {{$contact->phone}} </p>
                        </div>

                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="badge badge-success">ip </span>
                                 {{$contact->ip}} </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="badge badge-success">city </span>
                                {{$contact->city}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">region_name </span>
                                {{$contact->region_name}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">country_name </span>
                                {{$contact->country_name}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">continent_name </span>
                                 {{$contact->continent_name}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">timezone </span>
                                 {{$contact->timezone}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">latitude </span>
                                 {{$contact->latitude}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">longitude </span>
                                {{$contact->longitude}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">currency_code </span>
                                {{$contact->currency_code}}</a>
                            <a href="#"
                               class="list-group-item list-group-item-action">
                                <span class="badge badge-success">currency_converter </span>
                                 {{$contact->currency_converter}}</a>

                        </div>


                        <div class="card-body">
                            <a href="#" class="card-link text-danger">Read more</a>
                            <a href="#" class="card-link text-warning">Book a Trip</a>
                        </div>
                    </div>
                </div>


            </div>


        </div>


















@stop


