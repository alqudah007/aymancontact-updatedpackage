@extends(config('aymancontactconfig.layouts_app'))
@section('content')


   <h3> admin.index  </h3>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table class="table  table-sm table-hover text-wrap text-break">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col"  >#</th>
                            <th scope="col"  >Name</th>
                            <th scope="col"  >message</th>
                            <th scope="col"  >Mobile</th>
                            <th scope="col"  >@actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($allcontacts as $contact)
                            {{ $loop->iteration }} /{{ $loop->count }}
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td class="">{{$contact->name}}</td>
                                <td class="col-sm-2">{{ \Str::limit($contact->message,150) }}</td>
                                <td class="">{{$contact->mobile}}</td>
                                <td class="">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-warning">View</button>
                                        <button type="button" class="btn btn-success">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>




















@stop


