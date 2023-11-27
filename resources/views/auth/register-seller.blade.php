{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}




    <!--Page Header-->
<section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Sign Up</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">Home</a></li>
          <li>Become A Seller</li>
        </ul>
      </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
</section>
  <!-- /Page Header--> 
  
  <!--Profile-setting-->
  <section class="user_profile inner_pages">
    <div class="container">
      <div class="user_profile_info gray-bg padding_4x4_40">
        <div class="upload_user_logo"> <img src="{{ asset('assets/images/222x172.jpg') }}" alt="image">
          <div class="upload_newlogo">
            <input name="upload" type="file">
          </div>
        </div>
        {{-- <div class="dealer_info">
          <h5>Autospot Used Cars Center </h5>
          <p>P.1225 N Broadway Ave <br>
            Oklahoma City, OK  1234-5678-090</p>
        </div> --}}
      </div>
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
            <x-jet-validation-errors class="mb-4 text-danger" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('register-seller') }}">
                @csrf
              <div class="form-group">
                <label class="control-label">First Name</label>
                <input class="form-control white_bg" id="firstname"  name="firstname" type="text" placeholder="First Name">
                @error('firstname')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Last Name</label>
                <input class="form-control white_bg" id="lastname"  name="lastname" type="text" placeholder="Last Name">
                @error('lastname')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Email Address</label>
                <input class="form-control white_bg" id="email" name="email" type="email" placeholder="Email Address">
                @error('email')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Phone Number</label>
                <input class="form-control white_bg" id="phone-number" name="phone" type="text" placeholder="Phone Number">
                @error('phone')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Your Address</label>
                <textarea class="form-control white_bg" rows="4" name="address"></textarea>
                @error('address')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Country</label>
                <input class="form-control white_bg" id="country" name="country" type="text" placeholder="Country">
                @error('country')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">City</label>
                <input class="form-control white_bg" id="city" name="city" type="text" placeholder="City">
                @error('city')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Profile Picture</label>
                <input class="dropify" id="image" type="file"  wire:model="profile">
                @error('image')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control white_bg" id="password" name="password" type="password">
                @error('password')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Confirm Password</label>
                <input class="form-control white_bg" id="c-password" name="password_confirmation" type="password">
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
  


