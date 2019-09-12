<div>

    @if(Session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{Session::get('success')}}
        </div>
    @endif
</div>
