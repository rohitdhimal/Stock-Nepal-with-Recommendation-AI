@extends('layouts.app')
@section('title','Download Premium Image')

@section('content')  


<div class="row justify-content-center">

    <div class="col-md-8">
        <div class="card mt-5 shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="/image/success.png" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h3 class="text-muted float-left display-4">Congratulations</h3> <br>
                        <h4 class="text-muted float-left">Happy to Serve you</h4>
                        <p class="text-muted float-left">Hoping to work with you again</p>
                        
                        <a href="{{asset('storage')}}/{{$post->image2}}" download class="btn btn-success ml-5 mt-3"> <i class="fas fa-cloud-download-alt"></i> Download </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection



