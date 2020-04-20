@extends('layouts.app')

@section('content')
    <div class=" mt-5">
            <div class="row justify-content-center">
                <div class="card card-shadow justify-content-center " style="width: 35rem;">
                    <img class="img-fluid" src="/storage/{{$post->image}}">
                        <div class="card-body justify-content-center">
                           <span class="text-center text-muted">{{ $post->caption }} </span> 
                            <span>by</span>
                            <span class="font-weight-bold">  
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark text-uppercase text-none text-decoration-none ml-3"> {{ $post->user->fname }} {{ $post->user->lname }}</span>
                                </a>
                            </span>
                            
                            @if(Auth()->user()->id==$post->user->id)
                            <a href="{{ route('post.delete',[$post->id])}}"  class="text-danger ml-5 mt-2"> Delete Photo </button>
                            @endif
                            
                        </div>
                </div>
            </div>
        </div>
</div>


@endsection