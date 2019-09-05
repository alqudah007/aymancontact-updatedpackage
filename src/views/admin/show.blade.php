@extends(config('aymancontactconfig.layouts_app'))
@section('content')

    <div class="col-12 text-left">

        <h1 class="font-weight-light">
            admin.show

        </h1>
        <p class="lead">Manage all the contants form requests </p>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                     <p>
                         {{$contact->id}}
                         {{$contact->name}}
                         {{$contact->phone}}
                         {{$contact->message}}
                     </p>

                    </div>

                </div>
            </div>

        </div>


















@stop


