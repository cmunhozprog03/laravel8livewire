
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="">First Name</label>
            <input type="text" class="form-control" wire:model="firstname">
          </div>
          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" wire:model="lastname">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" wire:model="email">
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" wire:model="phone">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" wire:click.prevent="store()">Add Student</button>
      </div>
    </div>
  </div>
</div>