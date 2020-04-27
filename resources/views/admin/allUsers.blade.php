@extends('admin.master')


@section('admincontent')

<div class="container">
    <div class="ml-5">
        <h2 class="text-center "> Users </h2>

        <hr>

        <!-- Search User -->
        <form action="{{ route('search')}}" method="GET" class="search-form">
            
            <input type="text" name="search" class="col-3 mb-2 form-control" value="{{request()->input('search') }}" placeholder="search for user">  
        </form>

       

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Interest</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $row)
                <tr>
                    <td> {{$row->fname}} </td>
                    <td>{{$row->lname}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->profile->address}}</td>
                    <td> <img src="{{$row->profile->profileImage()}}" class="w-50"></td>
                    <td>{{$row->profile->interest}}</td>
                    <td>{{$row->profile->phoneno}}</td>
                    <td> <a href="{{route('admin.editUsers',$row->id)}}" class="btn btn-primary">Edit</a> </td>
                    <td>    
                        <a href="{{route('delete',$row->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                @endforeach
            </thbody>
    </table>
    </div>
</div>

@endsection