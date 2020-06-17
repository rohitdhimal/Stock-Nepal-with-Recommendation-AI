<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Stock Nepal')</title>

    <!-- Scripts -->
   

    <!-- <script src="{{ asset('js/next.js') }}"></script> -->
    
    <!-- Fonts -->
    <link rel="icon" rel="shortcut icon" type="image/x-icon" href="{{ asset('image/cameraphoto_103436.ico') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registerimage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/masonary.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/image.css') }}" rel="stylesheet">
    <link href="{{ asset('css/viewimage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/parallax.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <div class="loader_bg">
        <div class="loader"></div>
    </div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="p-3 pt-2 text-light">Stock Nepal</div>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="navbar-nav">
                            <a href="{{url('/Explore')}}" class="nav-link text-white">Explore</a>
                            <a href="{{url('/lisence')}}" class="nav-link text-white">Lisence</a>
                            <a href="{{url('/About-Us')}}" class="nav-link text-white">About</a>
                        </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                                                        

                        <!-- Start Profile and logout -->

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.show',[Auth()->user()->id]) }}"> My profile</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>

    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        },1000);

            // Gallery
        $(function() {
            var selectedClass = "";

            $(".filter").click(function(){
                selectedClass = $(this).attr("data-rel");

                $("#gallery").fadeTo(100, 0.1);
                
                $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
                    setTimeout(function() 
                    {
                        $("."+selectedClass).fadeIn().addClass('animation');
                        $("#gallery").fadeTo(300, 1);
                    }, 300);
            });
        });

        </script>

        

        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/404c3fa7f3.js" crossorigin="anonymous"></script>  



    



</body>
</html>

