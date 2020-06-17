@extends('admin.master')


@section('admincontent')

<div class="container mt-3">

    <div class="ml-5">
        <h3 class="text-center">Sell Lists</h3>
        <hr>


        <table class="table ml-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col" class="ml-5">Image</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($posts as $row)
                <tr>
                    <td class="font-weight-bold">{{$row->user->fname}} {{$row->user->lname}}</td>
                    <td ><img src="/storage/{{$row->image}}" class="w-25 ml-5"></td>
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