@extends('layouts.app')

@section('content')


<!--Sell form -->
    <div class="container">

    @if(session('message'))
        <div class="alert alert-success shadow" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
            <div class="card shadow">
                <div class="card-header text-center font-weight-bold bg-dark text-light shadow">Sell Your Images</div>
                <div class="card-body">

                    <div class="row col-md-12">

                        <div class="col-md-7">
                            <img src="/image/sell.png" class="w-100" alt="">
                        </div>

                        <div class="col-md-5">
                            <form action="{{ route('post.updateSell',$posts->id)}}" method="POST" class="md-form">
                            {{csrf_field() }}
                            {{method_field("PATCH")}}

                            

                                <div class="form-group row">
                                    <label for="price" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Price</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="number" name="price" value="{{$posts->price}}" placeholder="" class="form-control @error('price') is-invalid @enderror" id="price" required autocomplete="price" autofocus>
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                                                    
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" id="customCheck" name="example1">
                                    <label class="custom-control-label" for="customCheck">I confirm that I took this photo. <br> Earn money through licensing. </label>
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </div>

                    </div>

                </div>
            </div>        
        </div>    
    </div>

</div>

<!-- End -->
 



@endsection