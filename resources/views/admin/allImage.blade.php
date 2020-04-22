@extends('admin.master')


@section('admincontent')
<div class="container">
    <div class="ml-5">
        <h2 class="text-center mt-3"> Image </h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User id</th>
                    <th scope="col">Caption</th>
                    <th scope="col">category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

               @foreach( $posts as $post )
                <tr>
                    <td> {{$post->user_id}} </td>
                    <td> {{$post->caption}}  </td>
                    <td> {{$post->category}} </td>
                    <td> {{$post->image}} </td>
                    <td> {{$post->created_at}}</td>
                    <td> <a href="#" class="btn btn-primary">Edit</a> </td>
                    <td> <a href="#" class="btn btn-danger">Delete</a> </td>
                </tr>
                @endforeach

               
            </thbody>
    </table>
    </div>
</div>

@endsection