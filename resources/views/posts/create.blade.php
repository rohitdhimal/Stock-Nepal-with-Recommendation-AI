@extends('layouts.app')
@extends('layouts.image')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/fontawesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/404c3fa7f3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10 mt-5">
    <div class="card shadow">
    <div class="card-header text-center font-weight-bold bg-dark text-light">Add New Post</div>
    <div class="card-body">
    <form action="/p" enctype="multipart/form-data" method="post" class="md-form">
        @csrf
        <div class="row">

        <div class="col-md-5">
                <img src="/image/watermark11.png" class="w-100 mt-3 ml-3" alt="">
            </div>

            <div class="mt-2 col-5 offset-1">

                <div class="form-group row">
                    <label for="caption" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Image Caption</label>
                    <input type="text" name="caption" placeholder="Image Caption Here" class="form-control @error('caption') is-invalid @enderror" id="caption" required autocomplete="caption" autofocus>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="category" for="inlineFormCustomSelectPref">Category</label>
                        <select id="category" name="category" class="form-control @error('category') is-invalid @enderror" id="category">
                            <option selected>Choose...</option>
                            <option>Abstract</option>
                            <option>Aerial</option>
                            <option>Archiecture</option>
                            <option>Black and White</option>
                            <option>Fashion</option>
                            <option>Landscape</option>
                            <option>Macro</option>
                            <option>Night</option>
                            <option>Potrait</option>
                            <option>sports</option>
                            <option>Weeding</option>
                            <option>Wildlife</option>
                        </select>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="my-1 mr-2 font-weight-bold" for="inlineFormCustomSelectPref">Post Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image"> 
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary btn-lg btn-block">Add New Post</button>
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
</body>
</html>
