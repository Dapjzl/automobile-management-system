<div>
  @section('title', 'Seller Registration')
 <!--Page Header-->
  <section class="page-header profile_page">
      <div class="container">
        <div class="page-header_wrap">
          <div class="page-heading">
            <h1>Become A Seller</h1>
          </div>
          <ul class="coustom-breadcrumb">
            <li><a href="/">Home</a></li>
            <li>Become A Seller</li>
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
          <div class="profile_nav">
            <ul>
              <li class="active"><a href="profile-settings.html">Profile Settings</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-8">
          <div class="profile_wrap">
            <h5 class="uppercase underline">General Settings</h5>
            <form method="POST" wire:submit.prevent="beSeller" enctype="multipart/form-data">
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
                <label class="control-label">Profile Picture</label>
                <input class="dropify" id="image" type="file"  wire:model="profile">
                @error('image')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control white_bg" id="password" type="password" placeholder="Enter Your Password" wire:model="password">
                @error('password')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Confirm Password</label>
                <input class="form-control white_bg" id="c-password" type="password" placeholder="Confirm Your Password" wire:model="password_confirmation">
                @error('password_confirmation')<p class="text-danger">{{ $message }}</p> @enderror
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
