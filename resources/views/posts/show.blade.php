@extends('layouts.app')
@section('title','Image')

@section('content')

        <div class="container mt-3">

            <!-- Image -->
            <div class="row mb-5 justify-content-center">
                <div class="card card-shadow" style="width: 35rem;">
                    <div id="carouselExampleControls" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/storage/{{$post->image}}" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- End Image -->

            <!-- Left bar of infos -->
            <div class="row">
                <div class="col-6">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <span class="font-weight-bold">  
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark text-uppercase text-none text-decoration-none"><img src="{{ $post->user->profile->profileImage() }}" class="w-25 rounded-circle" style="max-width: 40px;">{{ $post->user->fname }} {{ $post->user->lname }}</span>
                                </a>
                                <br>
                                <span class="text-center text-muted font-weight-light">{{ $post->caption }} </span>     
                                <p class="text-success ml-4 mt-2">Created At: {{ $post->created_at->format ('l j F Y') }} </p>
                            </span>
                        </div>
                    </div>
                </div>

                        
            <!-- Delete and Download -->
                <div class="col-6">
                    <div class="card card-shadow">
                        <div class="col-6">  
                            <!-- Download -->
                            <a href="{{asset('storage')}}/{{$post->image}}" download class="btn btn-success"> <i class="fas fa-cloud-download-alt"></i> Download </a>
                        </div>

                    <!-- Delete -->
                        <div class="col-6">
                            @if(Auth::check() && Auth()->user()->id == $post->user_id)
                                <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#exampleModalCenter">
                                    Delete Photo
                                </button>

                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-dark" id="exampleModalLongTitle">Confirm Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-dark"> Are You sure Do you want to delete this photo</p> 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="{{ route('post.delete',[$post->id])}}"  type="submit"  class="text-decoration-none"> Delete Photo </button>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
 
            <br>

                    
            <!-- Buy and Sell -->
            <div class="row mb-4">  
                <div class="col-12 ml-5">
                    <div class="card shadow">
                        <div class="card-body">
                            <p class="text-muted">Sell Image</p> 
                            <a href="{{ route('post.sell',[$post->id]) }}"  class="btn btn-primary text-light ml-4 ">Sell Image</a>
                        </div>
                    </div>   
                                
                    @else

                    <div class="card shadow">
                        <div class="card-body">
                             <p class="text-muted">Buy this image with pro lisence</p> 
                             <a href="{{ route('post.buy',[$post->id])}} " class="btn btn-warning text-light ml-5"> Buy Now </a>
                        </div>
                    </div>          
                </div>
            </div>
            <!-- End Buy and Sell -->
                    @endif


            
        </div> 

@endsection
