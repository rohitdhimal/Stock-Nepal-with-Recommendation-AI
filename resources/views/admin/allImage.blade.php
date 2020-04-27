@extends('admin.master')


@section('admincontent')
<div class="container">
    <div class="ml-5">
        <h2 class="text-center mt-3"> Image </h2>

        <hr>

        <form action="{{ route('admin.search')}}" method="GET" class="search-form">
            
            <input type="text" name="search" class="col-3 mb-2 ml-2 form-control" value="{{request()->input('search') }}" placeholder="search for Image">  
        </form>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">User id</th>
                    <th scope="col">Caption</th>
                    <th scope="col">category</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Image</th>
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
                    <td> {{$post->created_at}}</td>
                    <td><img src="/storage/{{$post->image}}" style="height:200px; widhth:200px "> </td>
                    <td> <a href="{{route('admin.editImages',$post->id)}}" class="btn btn-primary">Edit</a> </td>
                    <td> 
                        <a href="{{route('admin.delete',$post->id)}}" class="btn btn-danger">Delete</a> 
                    </td>
                </tr>
                @endforeach

               
            </thbody>
    </table>
    </div>
</div>

@endsection