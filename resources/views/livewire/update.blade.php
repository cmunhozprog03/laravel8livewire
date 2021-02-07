
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <input type="hidden" name="" wire:model="ids">
            <label for="">First Name</label>
            <input type="text" class="form-control" wire:model="firstname">
            @error('firstname')<span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" wire:model="lastname">
            @error('lastname')<span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" wire:model="email">
            @error('email')<span class="text-danger">{{$message}}</span>@enderror
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" wire:model="phone">
            @error('phone')<span class="text-danger">{{$message}}</span>@enderror
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Student</button>
      </div>
    </div>
  </div>
</div>