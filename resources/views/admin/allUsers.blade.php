@extends('admin.master')


@section('admincontent')

<div class="container">
    <div class="ml-5">
        <h2 class="text-center mt-5"> Users </h2>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Interest</th>
                    <th scope="col">Phone no</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($user as $row)
                <tr>
                    <td> {{$row->fname}} </td>
                    <td>{{$row->lname}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->profile->address}}</td>
                    <td>{{$row->profile->interest}}</td>
                    <td>{{$row->profile->phoneno}}</td>
                    <td> <a href="#" class="btn btn-primary">Edit</a> </td>
                    <td> <a href="#" class="btn btn-danger">Delete</a> </td>
                </tr>

                @endforeach
            </thbody>
    </table>
    </div>
</div>

@endsection