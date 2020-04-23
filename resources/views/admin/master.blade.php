<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link href="{{ asset('admincss/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('admincss/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/404c3fa7f3.js" crossorigin="anonymous"></script>  
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>

    
    <div class="sidenav">
        <p class="disabled text-light top-welcome text-decoration-none text-center" > <i class="fas fa-user-secret"></i> Welcome Admin <br> <i class="fas fa-circle text-success"></i> <span class="text-light online">Online</span> </p>
        <button class="dropdown-btn"> <i class="fas fa-users-cog"></i> Admin 
            <i class="fa fa-caret-down"></i>
        </button>

            <div class="dropdown-container">
                <a href=" {{ route('admin.home') }} " class="text-decoration-none"> Dashboard </a>
                <a class="text-decoration-none" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                

            </div>

        <button class="dropdown-btn"> <i class="fas fa-user-circle"></i> User Management 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="{{ route('admin.alluser')}}" class="text-decoration-none">All Users</a>
        </div>


        <button class="dropdown-btn"> <i class="fas fa-camera-retro"></i> Image Management 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="{{ route('admin.allimage')}}" class="text-decoration-none">All Images</a>
        </div>
        <div class="dropdown-container">
            <a href="#" class="text-decoration-none">Categories</a>
        </div>

        <a href="#" class="text-decoration-none"> <i class="fas fa-shopping-cart"></i> Purchase</a>
     </div> -->

    
    <script>

        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } 
                
            else {
                dropdownContent.style.display = "block";
                }
            });
        }
    </script> 

    
            <main>
                @yield('admincontent')
            </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" crossorigin="anonymous"></script>
</html>