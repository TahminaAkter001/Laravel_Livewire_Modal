<div>

    <button class="btn btn-success"data-toggle="modal" data-target="#exampleModal">Add</button>

            <!--<div>
                <form wire:submit.prevent="submit">
                    <input type="text" placeholder="Enter name" wire:model="name" required="true">
                    <br>
                    <br>
                    <input type="number" placeholder="Enter Roll no" wire:model="rollno" required="true">
                    <br>
                    <br>
                    <input type="email" placeholder="Enter Email" wire:model="email" required="true">
                    <br><br>
                <button type="submit">save</button>

              </form>
                
            </div>-->
    
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Contact US</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="submit">
                            <div class="row">
                            <div class="col-lg-12">
                                <label for="">Name:</label>
                                <input type="text" wire:model="name" required="true">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Email:</label>
                                <input type="email" wire:model="email" required="true">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Phone:</label>
                                <input type="text" wire:model="phone" required="true">
                            </div>
                            <div class="col-lg-12">
                                <label for="">Message:</label>
                                <textarea wire:model="message" required="true"></textarea>
                               
                            </div>
                           </div>
                           
                        </form> 
                    </div>
                    <div class="modal-footer">
                      
                      <button type="submit" class="btn btn-success">Save</button>
                    </div>
                  </div>
                </div>
              </div>    
        
   

   <!-- <x-modal id="contactUsModal" title="contactUs">
        <x-slot name="head">Contact Us</x-slot>

          <form wire:submit.prevent="submit">
            <div class="row">
            <div class="col-lg-12">
                <label for="">Name:</label>
                <input type="text" wire:model="name">
            </div>
            <div class="col-lg-12">
                <label for="">Email:</label>
                <input type="email" wire:model="email">
            </div>
            <div class="col-lg-12">
                <label for="">Phone:</label>
                <input type="text" wire:model="phone">
            </div>
            <div class="col-lg-12">
                <label for="">Message:</label>
                <textarea wire:model="message"></textarea>
               
            </div>
           </div>
           <button type="submit" class="btn btn-success">save</button>
        </form> 

        
    </x-modal>-->
   
</div>

