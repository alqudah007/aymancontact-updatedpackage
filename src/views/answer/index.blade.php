<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    SHOW #1
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">

                {{--XXXX--}}



                <div class="card  mt-3">
                    <div class="card-header">Responses for this contact</div>

                    <div class="card-body">



                        @foreach($contact->answers as $answer)

                            <label for="formGroupExampleInput2 text-left">
                                <small class="text-muted cat text-left ">
                                    <strong class=" text-info">NO :{{$loop->iteration}}</strong>  |
                                    <i class="far fa-clock text-info"></i>Date : {{$answer->created_at->format('d.m.Y')}} |
                                    <i class="far fa-clock text-info"></i>Time : {{$answer->created_at->format('H:i:s')}} |
                                    <i class="fas fa-users text-info"></i> {{$answer->created_at->diffForHumans()}}
                                </small>
                            </label>
                            <div class="mb-5 pl-4">
        <textarea readonly name="body" class="form-control mb-3" rows="5"
                  id="formGroupExampleInput2"
                  placeholder="{{$answer->body}}"></textarea>


                                @if($answer->uploaded_file_path)
                                    <div class="" >
                                        📁 Attachment:  <a href='{{asset("storage/uploaded_files/$answer->uploaded_file_path")}}'>click to  view </a>

                                    </div>
                                @endif

                            </div>
                            <hr>
                        @endforeach

                        {{--  # asset recommended by laravel --->storage
                                # we do symbolic storage\app\public\ ==>storage

                                <img src="{{url('storage/app/uploaded_files/')}}{{$answer->uploaded_file_path}}" width="150px">


                                <img src="{{asset('storage/123.gif')}}" width="150px">
                                <img src="{{url('storage/123.gif')}}" width="150px">
                                <img src="{{url('storage/x/2.gif')}}" width="150px">

                                #--- public
                                <img src="{{asset('imgs/demo.jpg')}}" width="150px">
                                <img src="{{asset('demo222.jpg')}}" width="150px">--}}



                    </div>
                </div>




                {{--XXXX--}}




            </div>
        </div>
    </div>


</div>














