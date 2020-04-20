<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 pt-5">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="text-center font-weight-bold pb-3">Join Stock Nepal</h2>
                    <h5 class="text-center">Discover Thousands of photos <br> for free</h5>
                    <form method="POST" action="{{ route('fregister') }}">
                        @csrf
                        <div class="form-group pt-3">
                                <input type="tel" placeholder="Phone Number" class="form-control" id="tel-input">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 pt-1">
                                <label for="inputAddress">Date of Birth</label>
                                <input class="form-control" type="date" id="date-input">
                            </div>

                            <div class="col-md-6">
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Gender</label>
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option selected>Choose...</option> 
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other</option>
                                    </select>
                            </div>
                        </div>

                        <div class="form-group pt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                    Agree with terms and conditions
                                </label>
                            </div>
                        </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>                             
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection -->
