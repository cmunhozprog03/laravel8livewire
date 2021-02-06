<div>
   <section>
       <div class="container">
           <div class="row">
               <div class="col-md-6 offset-md-3">'
                   <div class="card">
                       <div class="card-header">
                           <h3>Contact Form</h3>
                       </div>
                       <div class="card-body">
                            <form wire:submit.prevent="submitForm">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" wire:model="name" />
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="text" name="email" class="form-control" wire:model="email" />
                                    @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" class="form-control" wire:model="phone" />
                                    @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <textarea name="msg" id="" cols="65" rows="5" wire:model="msg"></textarea>
                                    @error('msg')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                                

                            </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
</div>
