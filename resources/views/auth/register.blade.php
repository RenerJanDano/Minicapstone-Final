@extends('main2')

@section('content')

@section('title', 'Register')
<body>
    <div class="container col-sm-4 offset-sm-4">
       
        <div class="card shadow mb-5 mt-5 border border-light rounded">
            <div class="card-body" style="background-color: white;" id="card-bodyy">
                <h2 class='text-center mt-2 mb-4 ' style="black; font-size: 25px;">REGISTER</h2>
                <form action="{{ '/register' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control" required="">
                        </div>
                            @error('name')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                        </div>
                            @error('email')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control" required="">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunctionConfirm()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                        <select class="form-control col-sm-4" name="gender" aria-label="Default select example" style="margin-left: 11%;">
                            <option hidden="true">Gender</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    <div class="d-flex mt-4">
                        <div class="flex-grow-1">
                            <a href="{{ '/' }}" class="text-light-blue">Already have an account</a>
                        </div>
                        <button class="btn btn-light px-5 text-dark" style="background-color: lightblue">Register</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
    #basic-addon1 {
    width: 100px;
    text-align: center;

}


</style>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunctionConfirm() {
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
