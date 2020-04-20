@extends('layouts.app')
@extends('layouts.image')

@section('content')
<div id="cont">
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-6 pt-5">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center font-weight-bold pb-3">Join Stock Nepal</h2>
                    <h5 class="text-center">Discover Thousands of photos <br> for free</h5>
                    <form method="POST" id="regForm" action="{{ route('register') }}">
                        @csrf
                    
                        <div class="form-row pt-3">
                            <div class="form-group col-md-6">
                            <input type="text" name="fname" placeholder="First Name" class="form-control @error('fname') is-invalid @enderror" id="fname" required autocomplete="fname" autofocus>
                            @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                              <input type="text" name="lname" placeholder="Last Name" class="form-control @error('lname') is-invalid @enderror" id="lanme" required autocomplete="lname" autofocus>
                              @error('lname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                              @enderror
                            </div>
                        </div>

                        <div class="form-group">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                          <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <!-- Confirm Password -->
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                        </div>
                        
                        <!-- <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input pt-2 " type="checkbox" id="gridCheck">
                                    Agree with terms and conditions
                                </label>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </div> 
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection


