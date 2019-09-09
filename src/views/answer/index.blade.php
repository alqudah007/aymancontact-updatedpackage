<div class=" ">

    @foreach($contact->answers as $answer)

        <label for="formGroupExampleInput2 text-left">
            <small class="text-muted cat text-left ">
                <i class="far fa-clock text-info"></i>NO : {{$loop->iteration}} |
                <i class="far fa-clock text-info"></i>Date : {{$answer->created_at->format('d.m.Y')}} |
                <i class="far fa-clock text-info"></i>Time : {{$answer->created_at->format('H:i:s')}} |
                <i class="fas fa-users text-info"></i> {{$answer->created_at->diffForHumans()}}
            </small>
        </label>

        <textarea readonly name="body" class="form-control mb-3" rows="2"
                  id="formGroupExampleInput2"
                  placeholder="{{$answer->body}}"></textarea>
        <hr>

        <div>
            <a href="{{url('app/uploaded_files/')}}{{$answer->uploaded_file_path}}">click to
                view {{$answer->uploaded_file_path}}</a>


            # asset recommended by laravel --->storage
            # we do symbolic storage\app\public\ ==>storage

            <img src="{{url('storage/app/uploaded_files/')}}{{$answer->uploaded_file_path}}" width="150px">

            <img src="{{asset('storage/123.gif')}}" width="150px">
            <img src="{{url('storage/123.gif')}}" width="150px">
            <img src="{{url('storage/x/2.gif')}}" width="150px">

            #--- public
            <img src="{{asset('imgs/demo.jpg')}}" width="150px">
            <img src="{{asset('demo222.jpg')}}" width="150px">


        </div>
    @endforeach


</div>



