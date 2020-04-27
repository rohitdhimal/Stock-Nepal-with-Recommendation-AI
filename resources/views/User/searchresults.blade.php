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
                    @foreach($users as $user)
                        <a href="/profile/{{ $user->id }}" class="text-decoration-none text-center mt-2 text-danger"> <p class="text-uppercase">{{$user->fname}} {{$user->lname}}</p></a>
                    @endforeach
            </div>
        </div>

        
    
        <!-- Image Section -->
        <div class="col-9">

            <div class="grid">
                <div class="grid-col grid-col--1"></div>
                    @foreach($posts as $post)
                        <div class="grid-item">
                            <div class="content"><h2 class="h2cp"> {{ $post->caption }} </h2></div>
                                <a href="/p/{{$post->id}}">
                                    <img class="img-vc" src="/storage/{{ $post->image }}">        
                                </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</div>


<script src="https://unpkg.com/colcade@0/colcade.js"></script>
<script>

    var colc = new Colcade( '.grid', {
        columns: '.grid-col',
        items: '.grid-item'
    });

    var $grid = $('.grid').masonry({
    // options...
    });
    // layout Masonry after each image loads
        $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });

</script>

@endsection

