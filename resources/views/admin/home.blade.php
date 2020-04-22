@extends('admin.master')


@section('admincontent')
    
    <div class="container mr-5 ">
    
        <div class="text-center ml-5 mt-5 sha">
            <span class="texts shadow p-3">Admin Dashboard  <i class="far fa-user"></i></span> 
        </div>

        <div class="row main-row mt-5">
            <div class="col col1 text-center ml-3 shadow text-light">
               <span class="opencart">  <i class="fab fa-opencart mr-3"></i> <span class="text ml-4">0</span> </span>   
               <div class="low-link1"> Purchases </div>
            </div>  
            <div class="col col2 ml-3 shadow text-light">
                <span class="opencart"><i class="fas fa-image"></i></span> <span class="text ml-4">0</span> </span>  
               <div class="low-link2"> Images </div>
            </div>
            <div class="col col3 ml-3 shadow text-light">
                <span class="opencart"><i class="fas fa-user-ninja"></i></span> <span class="text ml-4">0</span> </span>  
               <div class="low-link3"> Members </div>
            </div>
            <div class="col col4 ml-3 shadow mr-4 text-light">
                <span class="wink mt-5"> <p class="mt-4"> Have a good day </p> <i class="fas fa-smile-wink"></i> 
            </div>
        </div>
        
    </div>

    @endsection

