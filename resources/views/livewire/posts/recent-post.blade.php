<div class="container col-md-12 ">
    @include('livewire.modals.modal')
    <div class="profile">
        <h2 class="mt-3" style="font-weight: 400; font-size: 30px;">Recent Posts</h2>
        <hr>
    </div>
    <div class="post-body">
    
        <div class="col-md-4">
            @if (session('message'))
                <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
            @endif
            <div class="col p-3 shadow-sm rounded mb-5" id="write">
                <input type="text" class="write-2 form-control" placeholder="Search" wire:model.lazy="search">
            </div>

    </div>
    @if($recents->isEmpty())
        <div class="text-gray-500">
            <h1 class="text-center" style="font-size: 20px;">No posts.</h1>
        </div>
    @endif
</div>

<div class="card-deck offset-2">
    @foreach ($recents as $recent)
    <div class="card-deck">
        <div class="card mt-4 mr-4">
            <div class="col-md-12 mt-6 mr-4 {{ ($recent->user->gender === 'Female')? 'female': 'male'}}">
                <div class="card-body">
                    <div class="card-title">
                    <h4 id="post-title">{{ $recent->title }} <hr> <a href="{{url('authors', ['id'=>$recent->user->id])}}"><span><h6 id="username"><span>@</span>{{ $recent->user->email }}</h6></span></a></h4>
                        <p class="timestamp">
                    {{ $recent->created_at->format('F d, Y g:i A') }}</p>
                    <img class="card" style="border-radius: 50%; width: 80px; margin-left: 45%;" id="pf1"
                        src="{{ $recent->user->gender === 'Male' ? asset('images/male.png') : asset('images/female.png') }}" 
                        alt="photo">
                        <p class="text-center" style="font-weight: bold">{{ $recent->user->name }}</p>
                    <div class="card-body bg-secondary" style="border-radius: 5px">
                        <div class="content"><span class="text-light text-control">{{ $recent->content }}</span></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
</div>

<style>

    .male {
        background-color: lightblue;
        padding: 3px;
        border-radius: 3px;
    }
    .female {
        background-color: lightpink;
        padding: 3px;
        border-radius: 3px;
    }
</style>