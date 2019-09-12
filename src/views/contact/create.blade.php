@extends(config('aymancontactconfig.layouts_app'))
@section('content')
    <div class="col-12 text-center">

        <h1 class="font-weight-light">
            {{-- https://simpleicons.org/ This is my PACKAGE Create
            <img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/simpleicons.svg"/>
            <img height="132" width="132" src="https://unpkg.com/simple-icons@latest/icons/bit.svg"/>
            --}}
            Happy User CRM<sup>👦</sup>

        </h1>
        <p class="lead">A great way to make users Happy 😍 3</p>

        <div class="container">
            {{-- success - error section --}}
            <div class="text-left">
                @include('Aymancontact::layouts._error')
                @include('Aymancontact::layouts._success')
            </div>

            <form action="{{route('contact.store')}}" method="POST">
                @CSRF
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
                            <input name="phone" type="text" class="form-control" placeholder="Recipient's username"
                                   aria-label="Recipient's username" aria-describedby="mobile-form-input">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text" id="country-form-input">@Country</span>
                            </div>
                            <input name="country" type="text" class="form-control" placeholder="Country"
                                   aria-label="Country" aria-describedby="country-form-input">

                        </div>
                    </div>


                </div>

                <div class="form-group ">

                            <textarea name="message" class="form-control mb-3" rows="5" id="formGroupExampleInput2"
                                      placeholder="Another input"></textarea>
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Send</button>
                </div>
            </form>


        </div>




    </div>


@stop
