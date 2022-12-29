<div>
    {{-- Modal post Features --}}
<div wire.ignore.self class="modal fade" id="click" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content " id="modal">
        <div class="modal-header text-start">
            <h5 class="modal-title title1 text-primary" id="exampleModalLabel">Creating post...</h5>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <select name="title" class="form-select" wire:model.defer="title">
            <option hidden="true">Select Categories</option>
            <option selected disabled>Select Categories</option>
            <option value="">None</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
           
        </select>
        <div class="modal-body text-dark">
            <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Write something..." wire:model.defer="content"></textarea>
        </div>
        <div class="modal-footer">
                <button type="button" id="submit-button" class="btn form-control" style="background-color: skyblue" wire:click="addPost()">Post</button>
        </div>
      </div>
    </div>
</div>
{{-- delete post --}}
<div wire:ignore.self class="modal fade" id="click-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" id="modall">
        <div class="modal-header">
            <h5 class="modal-title title3 text-secondary" id="exampleModalLabel">Are you sure you want to delete this post?</h5>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">x</button>
        </div>
       
        <div class="modal-footer">
            <button type="button" id="submit-button" class="btn btn-danger form-control" wire:click="deletePost()">Delete Post</button>
        </div>
        </div>
    </div>
</div>

{{-- Modal edit feature --}}
<div wire:ignore.self class="modal fade" id="click-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" id="modall">
        <div class="modal-header">
            <h5 class="modal-title title2 text-secondary" id="exampleModalLabel">Editing post...</h5>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">x</button>
        </div>
        <select name="title" class="form-select" wire:model.defer="title">
            <option hidden="true">Select Categories</option>
            <option selected disabled>Select Categories</option>
            <option value="">None</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
        </select>
        <div class="modal-body">
            <textarea name="content" id="text-area" cols="50" rows="5" placeholder="Express your feelings" wire:model.defer="content"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" id="submit-button" class="btn btn-success form-control" wire:click="updatePosts()">Update Post</button>
        </div>
        </div>
    </div>
</div>
</div>