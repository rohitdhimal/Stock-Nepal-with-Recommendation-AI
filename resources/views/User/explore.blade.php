@extends('layouts.app')

@section('content')

    <div class="container-fluid">

    <h3 class="text-center mt-5">Explore Images of Your Choices</h3>

    <hr>

        <!-- Grid row -->
        <div class="row mt-3 justify-content-center">

            <!-- Grid column -->
            <p class="text-muted">Search image's by Category</p>
            <div class="col-md-12 d-flex justify-content-center mb-5">
                <button type="button" class="btn btn btn-outline-dark waves-effect mx-2 filter" data-rel="all">All</button>
                <button type="button" class="btn btn btn-outline-dark waves-effect mx-2 filter" data-rel="Landscape">Landscape</button>
                <button type="button" class="btn btn btn-outline-dark waves-effect mx-2 filter" data-rel="Potrait">Potrait</button>
                <button type="button" class="btn btn btn-outline-dark waves-effect mx-2 filter" data-rel="Weeding">Wedding</button>
                <button type="button" class="btn btn btn-outline-dark waves-effect mx-2 filter" data-rel="Abstract">Abstract</button>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="gallery" id="gallery">

            <!-- Grid column -->
            @foreach($post as $post)
                <div class="mb-3 pics animation all {{$post->category}} }">
                    <a href="/p/{{$post->id}}">
                        <img class="img-fluid" src="/storage/{{$post->image}}" alt="Card image cap">
                    </a>
                </div>
            @endforeach
            <!-- Grid column -->

        </div>
        <!-- Grid row -->
    
    </div>

        


@endsection