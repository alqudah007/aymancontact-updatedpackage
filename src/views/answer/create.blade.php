<div class="">
    <form action="{{route('answer.store',$contact)}}" method="POST" enctype="multipart/form-data">
        @CSRF
        {{--<label for="formGroupExampleInput2">Enter the reply</label>--}}
        <div>
            <textarea name="body" class="form-control mb-3" rows="6" id="editor" placeholder="add answer"></textarea>
        </div>


       {{-- <div class="input-group input-group-sm mt-3 border-danger">
            <label class="custom-file  border border-danger" id="customFile">
                <input type="file" class="border border-danger custom-file-input">
                <span class="custom-file-control form-control-file">+ Add file</span>
            </label>
        </div>--}}
        <div class="mt-3">
            <input type="file" name="uploaded_file" >
        </div>



        <div class="text-right mt-2">
            <button onclick="form().submit()" class="btn btn-outline-success">Reply</button>

        </div>

    </form>


    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>

    <script>
        window.addEventListener('load', function () {

            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

        }, false);


    </script>

</div>


