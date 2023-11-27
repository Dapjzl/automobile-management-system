<x-base-layout>
@section('title', 'Login')
    <!--Page Header-->
<section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1>Sign In</h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="#">Home</a></li>
          <li>Login</li>
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
            <x-jet-validation-errors class="mb-4 text-danger" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="gray-bg field-title">
                <h6>Login Here</h6>
              </div>
              <div class="form-group">
                <label class="control-label">Email Address</label>
                <input class="form-control white_bg" id="email" type="email" name="email" :value="old('email')">
                @error('email')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control white_bg" id="password" type="password"  name="password">
                @error('password')<p class="text-danger">{{ $message }}</p> @enderror
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn">Sign In <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Profile-setting--> 

</x-base-layout>
