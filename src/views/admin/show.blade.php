@extends(config('aymancontactconfig.layouts_app'))
@section('content')

    <div class="col-12">

        <h1 class="font-weight-light">
            admin.show
        </h1>
        <p class="lead"></p>

        <div class="container-fluid content-row">
            <div class="row">


                <div class="col-sm-8 ">
                    <div class="card {{--h-100--}} ">
                        <div class="card-header">
                            <i class="far fa-clock text-info"></i>
                            <h5> Name : {{$contact->name}}</h5>
                        </div>
                        <div class="card-body">
                            <small class="text-muted cat ">
                                <i class="far fa-clock text-info"></i>Date : {{$contact->created_at->format('d.m.Y')}} |
                                <i class="far fa-clock text-info"></i>Time : {{$contact->created_at->format('H:i:s')}} |
                                <i class="fas fa-users text-info"></i> {{$contact->created_at->diffForHumans()}}
                            </small>
                            <div class="mt-1">
                                <textarea rows="10" readonly class="form-control">{{$contact->message}}</textarea>
                            </div>

                        </div>

                    </div>

                    {{--REPLIES SECTION--}}

                    <div class="card mt-3">
                       {{-- <div class="card-header">Responses for this contact</div>--}}
                        <div class="card-body">
                            @include('Aymancontact::answer.create', ['contact' => $contact])
                        </div>
                    </div>


                      @include('Aymancontact::answer.index', ['contact' => $contact])


                </div>


                <div class="col-sm-4 ">
                    <div class="card h-100">
                        <h5 class="card-header">Detail's</h5>
                        <div class="card-body">
                            <ul class="list-group ">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    name
                                    <span class="btn-outline-warning">
                                          {{$contact->name}}
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-lg-start">
                                    Phone
                                    <span class="btn-outline-warning">
                                           {{$contact->phone}}
                                    </span>
                                </li>
                            </ul>


                            <ul class="list-group mt-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    IP
                                    <span class="btn- btn-outline-warning">{{$contact->ip}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    City
                                    <span class="btn-outline-warning">{{$contact->city}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Region name
                                    <span
                                        class="btn-outline-warning">@if(isset($contact->region_name)){{$contact->region_name}} @else
                                            N/A @endif</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Country:
                                    <span class="btn-outline-warning">{{$contact->country_name}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Continent:
                                    <span class="btn-outline-warning">{{$contact->continent_name}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    timezone:
                                    <span class="btn-outline-warning">{{$contact->timezone}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Currency Code:
                                    <span class="btn-outline-warning">{{$contact->currency_code}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Currency Converter
                                    <span class="btn-outline-warning">{{$contact->currency_converter}}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href='https://www.google.com/maps/place/search?q={{$contact->latitude}},{{$contact->longitude}}'
                                       target="_blank" class=" btn btn-outline-warning">google map link</a>
                                </li>


                            </ul>


                        </div>

                        <div class="card-body">

                            <div id="Container"
                                 style="padding-bottom:0px; height:200px; position:relative; display:block; width: 100%">
                                <iframe id="ViostreamIframe"
                                        width="100%" height="100%"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDd6Ji4n9fpIJrVLDuge30ua0Cg8vpR25A
                                 &q={{$contact->latitude}},{{$contact->longitude}}"
                                        frameborder="0" allowfullscreen=""
                                        style="position:absolute; top:0; left: 0"></iframe>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>

















@stop


