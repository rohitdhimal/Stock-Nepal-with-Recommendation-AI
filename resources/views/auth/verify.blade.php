@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card shadow">
                <div class="card-header bg-dark text-light shadow">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="/image/4641.png" class="w-50 ml-5" alt="">
                        </div>

                        <div class="col-md-5 mt-3">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
