@extends('main2')

@section('content')

@section('title', 'Log in')
<body>
    <div class="container col-md-4 offset-md-4">
        
        @if (session('message'))
        <div id="messagee" class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div id="messagee" class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif
        <div class="card shadow mb-5 rounded border border-light mt-5">
            <div class="card-body rounded" style="background-color:white
            " id="card-bodyy">
                <h2 class="text-center mb-4" style="color: black; font-size: 25px;">LOG IN</h2>
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

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
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/register' }}" class="text-light-blue">Sign up for an account</a>
                        </div>
                        <button class="btn px-5 text-dark" type="submit" style="background-color: lightblue"><span class="fa-solid fa-right-from-bracket fa-fw me-3"></span> Login</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

<div class="content">
   
</div>

{{-- <div class="box">
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div> --}}

@endsection

<style>
#basic-addon1 {
    width: 40px;
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
</script>
