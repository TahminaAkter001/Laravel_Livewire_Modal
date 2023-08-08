
<div>
  <x-layout.backend>
    <x-card>
      <x-slot name="title">Add Student</x-slot>
    </x-card>


<!--Modal -->
<x-modal>
  <x-slot name="head">Create Student</x-slot>

  
  <form wire:submit.prevent="saveStudent">
    <div class="modal-body">
        <div class="mb-3">
            <label>Student Name</label>
            <input type="text" wire:model="name" class="form-control" required="true">
        </div>
        <div class="mb-3">
            <label>Student Email</label>
            <input type="text" wire:model="email" class="form-control" required="true">
        </div>
        <div class="mb-3">
            <label>Student Course</label>
            <input type="text" wire:model="course" class="form-control" required="true">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" wire:click="closeModal"
            data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>


</x-modal>

</div>




</x-layout.backend>
</div>

