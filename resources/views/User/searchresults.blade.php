@extends('layouts.app')

@section('content')


<h3 class="text-center mb-2 mt-2">Search results</h3>
<p class="text-center text-dark"> Browse through our free and premium collection of pictures. <br> Each of the pictures are hand picked for you</p>

<hr>

<div class="container-fluid">

    <div class="row">
        <div class="col-3">

            <div class="card shadow">
                <div class="card-header text-center font-weight-bold">Users List</div>
                @if(count($users)) 
                
                    @foreach($users as $user)
                        <span><a href="/profile/{{ $user->id }}" class="text-decoration-none text-center mt-2 text-danger "> <p class="text-uppercase ">{{$user->fname}} {{$user->lname}}</p></a></span>
                    @endforeach

                @else
                    <p class="text-center text-danger">No User's Found</p>    
   
                @endif
            </div>
        </div>

        
    
        <!-- Image Section -->
        <div class="col-9">
            <div class="row">
                </div>
                    <div class="gallery" id="gallery">
                    @if(count($posts)) 
                    @foreach($posts as $post)
                    <div class="mb-3 pics animation all 2">
                        <div id="my-list"></div>
                        <a href="/p/{{$post->id}}" class="text-decoration-none ">
                            <img class="img-fluid hobimg" src="/storage/{{ $post->image2 }}" alt="Card image cap">
                        </a>
                    </div>
                    @endforeach
                    @else

                    <h3 class="text-center text-danger mt-5">No Images Found</h3>
                        
                    @endif
                </div>
            </div>
        </div>

</div>


@endsection

