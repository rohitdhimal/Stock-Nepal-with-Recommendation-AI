@extends('admin.master')


@section('admincontent')

<div class="container mt-5">

<h3 class="text-center">Image Category</h3> <hr>

        @if(session('message'))
            <div class="alert alert-success shadow " role="alert">
                <p class="text-center">{{ session('message') }}</p>  
            </div>
        @endif

    <div class="row justify-content-center mt-5 mb-5">
        <div class="card shadow ">
        <div class="card-header">Add Category</div>
            <div class="card-body px-5 py-3 mb-5">
                <form action=" {{route('category.store')}} " method="POST" class="md-form">
                    @csrf
                    <div class="row">
                        <div class="mt-2 col-10 offset-1">

                            <div class="form-group row">
                                <label for="category" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Category Name</label>
                                <input type="text" name="category"  placeholder="Image category Here" class="form-control @error('category') is-invalid @enderror" id="category" required autocomplete="category" autofocus>
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="row pt-3">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Add Category</button>
                            </div>
                                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

        <table class="table ml-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Category</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

               @foreach( $category as $cat )
                <tr>
                    <td> {{$cat->id}} </td>
                    <td> {{$cat->category}}  </td>
                    <td> 
                        <a href="{{route('category.delete',$cat->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

               
            </thbody>
        </table>

</div>

@endsection