<div>
@section('title', 'Add New Car Brand')
<section class="content">
    <div class="body_scroll">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Sales </strong>Registration</h2>
                    </div>
                    <div class="body">
                        <form  wire:submit.prevent="addBrand" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group form-float">
                                <input type="text" class="form-control" placeholder="Brand Of The Vehicle" wire:model="brand">
                                @error('brand')<p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                            <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT BRAND</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
