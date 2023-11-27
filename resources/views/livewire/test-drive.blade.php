<div>
    @section('title', 'Schedule Test Drive')
    <!--Page Header-->
     <section class="page-header profile_page">
         <div class="container">
           <div class="page-header_wrap">
             <div class="page-heading">
               <h1>Schedule Test Drive</h1>
             </div>
             <ul class="coustom-breadcrumb">
               <li><a href="/">Home</a></li>
               <li>Schedule Test Drive </li>
             </ul>
           </div>
         </div>
     </section>
     <!-- /Page Header--> 
   
     <!--Profile-setting-->
     <section class="user_profile inner_pages">
       <div class="container">
         <div class="row">
           <div class="col-md-3 col-sm-3">
             {{-- <div class="profile_nav">
               <ul>
                 <li class="active"><a href="profile-settings.html">Profile Settings</a></li>
               </ul>
             </div> --}}
           </div>
           <div class="col-md-6 col-sm-8">
             <div class="profile_wrap">
               <h5 class="uppercase underline">Personal Details</h5>
               <form method="POST" wire:submit.prevent="testDrive" enctype="multipart/form-data">
                   @csrf
                 <div class="form-group">
                   <label class="control-label">First Name</label>
                   <input class="form-control white_bg" id="firstname"  type="text" placeholder="First Name" wire:model="firstname">
                   @error('firstname')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                   <label class="control-label">Last Name</label>
                   <input class="form-control white_bg" id="lastname"  type="text" placeholder="Last Name" wire:model="lastname">
                   @error('lastname')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                   <label class="control-label">Email Address</label>
                   <input class="form-control white_bg" id="email" type="email" placeholder="Email Address" wire:model="email">
                   @error('email')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                   <label class="control-label">Phone Number</label>
                   <input class="form-control white_bg" id="phone-number" type="text" placeholder="Phone Number" wire:model="phone">
                   @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                   <label class="control-label">Your Address</label>
                   <textarea class="form-control white_bg" rows="4"  wire:model="address"></textarea>
                   @error('address')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                   <label class="control-label">Country</label>
                   <input class="form-control white_bg" id="country" type="text" placeholder="Country" wire:model="country">
                   @error('country')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                   <label class="control-label">City</label>
                   <input class="form-control white_bg" id="city" type="text" placeholder="City" wire:model="city">
                   @error('city')<p class="text-danger">{{ $message }}</p> @enderror
                 </div>
                 <div class="form-group">
                    <label class="control-label">Preferred Date</label>
                    <input class="form-control white_bg" id="dp" type="date" placeholder="Pick a Date" wire:model="date">
                    @error('date')<p class="text-danger">{{ $message }}</p> @enderror
                  </div>
                  <div class="form-group">
                    <label class="control-label">Preferrred Time Period</label>
                    <select class="form-control white_bg"  wire:model="period" id="">
                      <option value="">Select A Time Period</option>
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                    @error('period')<p class="text-danger">{{ $message }}</p> @enderror
                  </div>
                   <button type="submit" class="btn">Register<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                 </div>
               </form>
           </div>
         </div>
       </div>
     </section>
     <!--/Profile-setting--> 
</div>
