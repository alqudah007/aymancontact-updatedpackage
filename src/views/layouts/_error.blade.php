<div>

@if( $errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{$error}}
            </div>
        @endforeach
    @endif
</div>
