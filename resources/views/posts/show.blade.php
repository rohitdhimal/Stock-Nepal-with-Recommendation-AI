@extends('layouts.app')
@section('title','Image')
@section('content')

        <div class="container mt-3">

            <div class="row">
                <div class="col-6">
                    <div class="card card-shadow justify-content-center" style="width: 35rem;">
                        <a href="/storage/{{$post->image}} ">
                            <img class="img-fluid " src="/storage/{{$post->image}}" >
                        </a> 
                    </div>
                </div>

                <div class="col-6 col1">
                    <div class="info-area">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <span class="font-weight-bold">  
                                        <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark text-uppercase text-none text-decoration-none"><img src="{{ $post->user->profile->profileImage() }}" class="w-25 rounded-circle" style="max-width: 40px;">{{ $post->user->fname }} {{ $post->user->lname }}</span>
                                        </a>
                                    <br>
                                    <span class="text-center text-muted font-weight-light">{{ $post->caption }} </span>     
                                    <p class="text-success ml-4 mt-2">Created At: {{ $post->created_at->format ('l j F Y') }} </p>
                                </div>
                            </div>  
                        </div>
                    
                
                            <br>
                            <br>

                            <hr>
                            <br>

                        <div class="row justify ml-5">

                            <div class="col-5 ml-5">
                                @if(Auth()->user()->id==$post->user_id)
                                    <!-- <a href="{{ route('post.delete',[$post->id])}}"   type="button"  data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-danger mr-5 text-decoration-none"> Delete Photo </button> -->
                                    
                                    <button type="button" class="btn btn-danger mr-3" data-toggle="modal" data-target="#exampleModalCenter">
                                        Delete Photo
                                    </button>
    
                                        <!-- Modal -->
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
                                @endif
                                
                            </div>
    
                            <div class="col-5">
                                <a href="{{asset('storage')}}/{{$post->image}}" download class="btn btn-success"> <i class="fas fa-cloud-download-alt"></i> Download </a>
                            </div>
                                

                        </div>      
                    </div>

                    <br>

                    <hr>

                    <br>

                    <div class="col-8 justify-items-center ml-5">

                        <div class="card shadow ml-5">
                            <div class="card-body text-center">
                                <p class="text-muted text-justify">Buy this image with pro lisence</p>
                                <a href="" class="btn btn-success ">Buy Now</a>
                            </div>
                        </div>
                        
                    </div>

                    <!-- <div class="card shadow">
                        <div class="image-exif">
                      
                            <p class="text-center">Exif info</p>

                            

                       


                        </div> 
                    </div> -->

                

            </div>
        </div>




@endsection
