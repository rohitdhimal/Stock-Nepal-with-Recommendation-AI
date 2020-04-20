<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel   ') }}</title>

    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>


    </body>

    <div class="sidenav">
        <p class="disabled text-light text-decoration-none text-center" >Welcome Admin</p>
        <button class="dropdown-btn">Admin 
            <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-container">
                <a class="text-decoration-none" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                <a href=" {{ url('/allUser') }} " class="text-decoration-none">Another Link</a>

            </div>

        <button class="dropdown-btn">User Management 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="{{ route('admin.alluser')}}" class="text-decoration-none">All Users</a>
        </div>

        <button class="dropdown-btn">Image Management 
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a href="#" class="text-decoration-none">All Images</a>
        </div>
    </div>

    

    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
    dropdownContent.style.display = "none";
    } else {
    dropdownContent.style.display = "block";
    }
    });
    }
    </script>

    
            <main>
                @yield('admincontent')
            </main>
</html>