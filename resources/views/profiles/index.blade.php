@extends('layouts.app')
@section('title','Profile')

@section('content')  

    <div class="container">
        <div class="row mt-5">
            <div class="col-8">           
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle offset-md-7 offset-lg-7"> <br>
                <p class="font-weight-normal text-uppercase text-center mt-2">{{ $user->fname}} {{ $user->lname}}</p> <!--concat -->
                <p class="text-muted text-right"> {{ $postCount }} Posts | {{ $followersCount }} Followers | {{ $followingCount }} Following | {{ $sellCount }} listed for selling     | <i class="fas fa-map-marker-alt"></i> @isset($user->profile->address){{ $user->profile->address}}
                @endisset</p>
            </div>  
            
            <div class="col-2 offset-1">
                <br><br>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit"> <div class="btn btn-outline-danger">Edit Profile</div>  </a>
                @endcan                

                <div class="mt-2">
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                
            </div>
        </div>
    </div>
    
    @can('update', $user->profile)
        <hr>
            <a href="/p/create" class="font-weight-bold text-decoration-none text-dark"> <p class="text-center mt-3 mr-5"><i class="fas fa-cloud-upload-alt"></i> Upload Image</p></a>
        @endcan

        @if(session('message'))
            <div class="alert alert-success shadow" role="alert">
                {{ session('message') }}
            </div>
        @endif
        
    <hr style="margin-top:30px;">
    

    <div class="container-fluid">    


    <div class="row">

  

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">

  <!-- Grid column -->
     @foreach($user->posts as $post)
    <div class="mb-3 pics animation all 2">
        <a href="/p/{{$post->id}}">
            <img class="img-fluid" src="/storage/{{ $post->image2}}" alt="Card image cap">
        </a>
    </div>
    @endforeach

  <!-- Grid column -->

  <!-- image2 = uploads
    image = upload
    -->


</div>

        
@endsection
        <main>
            @yield('masonaryImage')
        </main>
