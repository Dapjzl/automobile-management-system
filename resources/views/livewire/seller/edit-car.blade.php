<div>
    @section('title', 'Sell A Vehicle')
   <section class="content">
       <div class="body_scroll">
           
           <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12">
                   <div class="card">
                       <div class="header">
                           <h2><strong>Sales </strong>Registration</h2>
                       </div>
                       <div class="body">
                           <form   enctype="multipart/form-data" method="POST">
                               @csrf
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Name Of The Vehicle" wire:model="name">
                                   @error('name')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <select wire:model="vehicle_type" id="" class="form-control">
                                       <option value="">Vehicle Type</option>
                                       <option value="New">New</option>
                                       <option value="Used">Used</option>
                                   </select>
                                    @error('vehicle_type')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Engine" wire:model="engine">
                                    @error('engine')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Seats" wire:model="seat">
                                     @error('seat')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Total Kilometres" wire:model="kilometre">
                                     @error('kilometre')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Registration Year" wire:model="reg_year">
                                   @error('reg_year')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Location Of The Vehicle" wire:model="location">
                                   @error('location')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>  <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="How Many Miles" wire:model="miles">
                                   @error('miles')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Fuel Type" wire:model="fuel">
                                   @error('fuel')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Transmission" wire:model="transmission">
                                  @error('transmission')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <input type="text" class="form-control" placeholder="Vehicle Price" wire:model="price">
                                 @error('price')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="form-group form-float">
                                   <textarea wire:model="description" cols="30" rows="5" placeholder="Description" class="form-control no-resize"></textarea>
                                  @error('description')<p class="text-danger">{{ $message }}</p> @enderror
                               </div>
                               <div class="body">
                                   <input wire:model="vehiclesImages" type="file" multiple class="dropify">
                                {{-- @error('vehiclesImages')<p class="text-danger">{{ $message }}</p> @enderror --}}
                               </div>
                               <button class="btn btn-raised btn-primary waves-effect" type="submit">SUBMIT VEHICLE</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
   
   
       </div>
   </section>
   </div>
   