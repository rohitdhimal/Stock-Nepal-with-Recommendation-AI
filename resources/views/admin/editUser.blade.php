@extends('admin.master')


@section('admincontent')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 mt-2">
    <div class="card shadow">
    <div class="card-header text-center font-weight-bold">Update New Post</div>
    <div class="card-body">
    <form action="{{route('admin.updateUsers',$users->id)}}" enctype="multipart/form-data" method="POST" class="md-form"> 
    
        @csrf    
        @method('PATCH')
        <div class="row">
            <div class="col-10 offset-1">

                <div class="form-group row">
                    <label for="fname" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">First Name</label>
                    <input type="text" name="fname" value="{{old('fname') ?? $users->fname}}" placeholder="fname" class="form-control @error('fname') is-invalid @enderror" id="fname" required autocomplete="fname" autofocus>
                        @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="lname" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Last Name</label>
                    <input type="text" name="lname" value="{{old('lname') ?? $users->lname}}" placeholder="lname Here" class="form-control @error('lname') is-invalid @enderror" id="lname" required autocomplete="lname" autofocus>
                        @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="email" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Email</label>
                    <input type="text" name="email" value="{{old('email') ?? $users->email}}" placeholder=" email Here" class="form-control @error('email') is-invalid @enderror" id="email" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Update User Info</button>
                </div>
                                
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>


@endsection