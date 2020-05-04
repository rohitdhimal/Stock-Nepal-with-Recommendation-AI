@extends('layouts.app')

@section('content')


    <div class="container">
    <div class="row justify-content-center">


    <div class="col-md-10 mt-5">

    <div class="card shadow">
    <div class="card-header text-center font-weight-bold bg-dark text-light">Update Profile</div>
    <div class="card-body">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post" class="md-form">
        @csrf    
        @method('PATCH')

        <div class="row">
            <div class="col-md-6">
                <img src="/image/464.png" alt="">
            </div>

            <div class="mt-2 col-5 offset-1">

                <div class="form-group row">
                    <label for="phoneno" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Phone no</label>
                    <input type="text" name="phoneno" value="{{old('phoneno') ?? $user->profile->phoneno}}" placeholder="+977-98888888" class="form-control @error('phoneno') is-invalid @enderror" id="phoneno" required autocomplete="phoneno" autofocus>
                        @error('phoneno')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="address" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Address</label> 
                    <input type="text" value="{{old('address') ?? $user->profile->address}}" name="address" placeholder="Kathmandu, Nepal" class="form-control @error('address') is-invalid @enderror" id="address" required autocomplete="address" autofocus>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="interest" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Interests</label> <br>
                    <input type="text" value="{{old('interest') ?? $user->profile->interest}}" name="interest" data-role="tagsinput"  class="form-control ess @error('interest') is-invalid @enderror" id="interest" required autocomplete="interest" autofocus>
                        @error('interest')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>



                <div class="form-group row">
                    <label for="gender" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Gender</label>
                    <input type="text" value="{{old('gender') ?? $user->profile->gender}}" name="gender" placeholder="Male" class="form-control @error('gender') is-invalid @enderror" id="gender" required autocomplete="gender" autofocus>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Profile Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"> 
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary btn-lg btn-block">Save Profile</button>
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
