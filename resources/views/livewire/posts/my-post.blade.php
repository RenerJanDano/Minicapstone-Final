<div class="div">
    @include('livewire.modals.modal')
    <div class="container ">
        <div class="profile">
            <h2 class="mt-3 text-start" style="font-size: 23px; color:dimgray;">{{Auth::user()->name}}'s Profile</h2>
        </div>
        <hr>
        <div class="post-body">
                    <button class="write-2" style="color:white; background-color: dimgray;" data-toggle="modal" data-target="#click">Create new post</button>
            
            
            <div class="card-deck offset-2">
                @foreach ($posts as $post)
                <div class="card-deck">
                    <div class="card mt-2 mr-4">
                        <div class="col-md-12 mt-6 mr-4 {{ ($post->user->gender === 'Female')? 'female': 'male'}}">
                            <div class="card-body">
                                @if($post->isEditable())
                            <a href="" class="btn btn-tertiary"  id="ic" title="Edit" data-toggle="modal" data-target="#click-edit" wire:click="editPosts({{ $post->id }})"><i class=" fa fa-edit"></i></a>
                            <a href="" class="btn btn-tertiary" style="margin-right: 20%" id="ic" title="Delete" data-toggle="modal" data-target="#click-delete" wire:click="delete({{ $post->id }})"><i class=" fa fa-trash"></i></a>
                       

                        @endif
                                <div class="card-title">
                                    <h4 id="post-title">{{ $post->title }} <hr> <a href="{{url('authors', ['id'=>$post->user->id])}}"><span><h6 id="username"><span>@</span>{{ $post->user->email }}</h6></span></a></h4>
                                    <p class="timestamp">
                                {{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                                <img class="card" style="border-radius: 50%; width: 80px; margin-left: 45%;" id="pf1"
                                    src="{{ $post->user->gender === 'Male' ? asset('images/male.png') : asset('images/female.png') }}" 
                                    alt="photo">
                                    <p class="text-center" style="font-weight: bold">{{ $post->user->name }}</p>
                                <div class="card-body bg-secondary" style="border-radius: 5px">
                                    <div class="content"><span class="text-light">{{ $post->content }}</span></div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    @endforeach
            </div>
        </div>
        @if($posts->isEmpty())
            <div class="text-gray-500">
                <h1 class="text-center" style="font-size: 20px;">No posts.</h1>
            </div>
        @endif
    </div>
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