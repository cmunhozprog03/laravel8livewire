<div>
    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Upload Images</h3>
                            @if(session()->has('message'))
                                 <div class="alert alert-success">{{session('message')}}</div>
                            @endif 
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="uploadImages" id="uploads-images" enctype="multipart/form-data">
                                 
                                 <div class="form-group">
                                     <label for="images">Choose Images</label>
                                     <input type="file" name="images" class="form-control" wire:model="images" multiple>
                                     
                                 </div>
                                 <button type="submit" class="btn btn-success float-right">Upload Images</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
