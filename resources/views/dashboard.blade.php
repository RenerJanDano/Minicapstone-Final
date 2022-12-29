@extends('main')

@section('title', 'Dashboard')

@section('content')
    <div class="container ">
        <h2 class="text-start mt-3" style="font-weight: 400; color:black; font-size: 30px;">🅳🅰🆂🅷🅱🅾🅰🆁🅳</h2><hr>
                <div class="d-flex align-items-end">
                    <img class="card" style="border-radius: 50%; width: 100px; margin-left: 80%;" id="pf1"
                                    src="{{ asset('images/male.png') }}" 
                                    alt="photo">
                    <div class="ms-3 name">
                        <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                        <h6 class="text-muted mb-0">{{ Auth::user()->email }}</h6><br>
                    </div>
                </div>
        <div class="content " style="position: relative; margin-left: 300px;">

            <div class="row mt-5 text-center">
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="small-box text-white" style="background: pink">
                        <a href="/recent-post" id="dash-link">
                        <div class="inner text-white">
                            <h3>{{ $allPosts }}</h3>
            
                            <p class="text-white">Recent Posts</p>
                            <span class="text-white float-right" id="text"></span><br>
                        </div>
                        <div class="icon ">
                            <i class="fa-solid fa-signs-post"></i>
                        </div>
                        </a>
                    </div>
                          
                </div>
                @role('admin')
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="small-box text-white" style="background: dimgray">
                        <a href="/log" id="dash-link">
                        <div class="inner text-white">
                            <h3>{{ $logs }}</h3>
            
                            <p class="text-white">Activity Logs</p>
                            <span class="text-white float-right" id="text"></span><br>
                        </div>
                        <div class="icon ">
                            <i class="fa-sharp fa-solid fa-address-card"></i>
                        </div>
                        </a>
                    </div>
                          
                </div>

                @endrole
                <div class="col-xl-3 col-md-4 mb-4">
                    <div class="small-box text-white" style="background: skyblue">
                        <a href="/my-post" id="dash-link">
                        <div class="inner text-white">
                            <h3>{{ $posts }}</h3>
            
                            <p class="text-white">My Posts</p>
                            <span class="text-white float-right" id="text"></span><br>
                        </div>
                        <div class="icon ">
                            <i class="fa-sharp fa-solid fa-envelope"></i>
                        </div>
                        </a>
                    </div>
                          
                </div>
            </div>
        </div>
        
    </div>

    <div class="col-12 col-lg-3">
        {{-- user profile modal --}}
        <div class="card-body">
            <!--Basic Modal -->
            <div class="modal fade text-left" id="default" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">User Profile</h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="fullName" value="{{ Auth::user()->name }}" readonly>
                                                <div class="form-control-icon">
                                                    <i class=""></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group has-icon-left">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly>
                                                <div class="form-control-icon">
                                                    <i class=""></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end user profile modal --}}

       
    </div>
</section>
</div>
@endsection

<style>
    .card {
        width: 240px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }
   
    #dash-icon {
        font-size: 30px;
        opacity: 0.5;
    }
    #dash-link {
        text-decoration: none;
    }
    .time {
        opacity: 0.8;
    }
    .recent-only {
        border: 1px solid rgba(0, 0, 0, 0.23);
        border-radius: 10px;
        box-shadow: 3px 3px 1px 0px rgba(0, 0, 0, 0.2);
    }
</style>
