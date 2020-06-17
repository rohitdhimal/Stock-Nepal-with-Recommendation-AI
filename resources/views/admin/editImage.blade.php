@extends('admin.master')


@section('admincontent')

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6 mt-5">
    <div class="card shadow">
    <div class="card-header text-center font-weight-bold">Update New Post</div>
    <div class="card-body">
    <form action="{{route('admin.updateImages',$posts->id)}}" enctype="multipart/form-data" method="POST" class="md-form">
    
        {{csrf_field() }}
        {{method_field("PUT")}}
        <div class="row">
            <div class="mt-2 col-10 offset-1">

                <div class="form-group row">
                    <label for="caption" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Image Caption</label>
                    <input type="text" name="caption" value="{{old('caption') ?? $posts->caption}}" placeholder="Image Caption Here" class="form-control @error('caption') is-invalid @enderror" id="caption" required autocomplete="caption" autofocus>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="category" for="inlineFormCustomSelectPref">Category</label>
                        <select id="category" name="category" value="{{old('category') ?? $posts->category}}" class="form-control @error('category') is-invalid @enderror" id="category">
                            <option selected>Choose...</option>
                            @foreach($category as $key=>$value)
                                <option value="{{$value}}">{{$value}}</option>    
                            @endforeach
                        </select>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>


                <div class="row pt-3">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Update User Post</button>
                </div>
                                
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>


@endsection