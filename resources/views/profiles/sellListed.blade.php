@extends('layouts.app')
@section('title','Image Listed For Selling')

@section('content')  


    <div class="container mt-5">
        
        <h2 class="text-center">Images Listed For Selling</h2>
        <hr>
        
        @foreach ($posts as $post)
            <img class="img-fluid w-50" src="/storage/{{ $post->image }}" alt="Card image cap">
        @endforeach
    
    </div>


@endsection