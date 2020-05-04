@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-d mt-5 shadow">
                <div class="card-header bg-dark shadow text-light text-center">{{ __('Reset Password') }}</div>

                <div class="card-body">

                 <div class="row">
                    <div class="col-md-3 ml-5">
                            <img src="/image/key.jpg" class="w-100 ml-5" alt="">
                    </div>

                    <div class="col-md-7 mt-5">
                        <h1  class="text-center text-info">Forget Password?</h1>
                            <hr>
                            <p class="text-center text-muted"> Enter the following to rest your password</p>
                            <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Reset Link') }}
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
