@extends(config('aymancontactconfig.layouts_app'))
@section('content')
    <div class="col-12 text-center">

        <h1 class="font-weight-light">
            {{-- https://simpleicons.org/ This is my PACKAGE Create
            <img height="32" width="32" src="https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/simpleicons.svg"/>
            <img height="132" width="132" src="https://unpkg.com/simple-icons@latest/icons/bit.svg"/>
            --}}
            A great starter layout for a landing page

        </h1>
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

                            <textarea name="message" class="form-control mb-3" rows="5" id="formGroupExampleInput2"
                                      placeholder="Another input"></textarea>
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">Send</button>
                </div>
            </form>


        </div>

    </div>


@stop
