<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>@yield('title')</title>
<!--Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/home-new.css')}}" type="text/css">
<!--FontAwesome Font Style -->
<!--slick-slider -->
<link href="{{ asset('assets/css/slick.css')}}" rel="stylesheet">
<!--bootstrap-slider -->
<link href="{{ asset('assets/css/bootstrap-slider.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon-icon/favicon.png')}}">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@yield('scripts')
<script>
  window.addEventListener('seller-success', event => {
    swal.fire({
      icon: 'success',
      title: 'Success',
      text: 'Operation Successful',
      type: 'success',
      showConfirmationButton: true,
      timer: 2000
    }).then(function() {
      window.location = '{{ route('seller.dashboard') }}';
    });
})
</script>
<script>
  window.addEventListener('tester-success', event => {
    swal.fire({
      icon: 'success',
      title: 'Success',
      text: 'Request Sent Successfully',
      type: 'success',
      showConfirmationButton: true,
      timer: 2000
    }).then(function() {
      window.location = '{{ route('test-Drive') }}';
    });
})
</script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="'https://ss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@livewireStyles()
</head>


<body>
<!-- Header -->
<header class="header_style3 nav-stacked affix-top" data-spy="affix" data-offset-top="1">
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
      	<div class="logo"> <a href="/"><img src="{{ asset('assets/images/logo.png')}}" alt="image"></a> </div>
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
        	<span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <div class="quick-support">
        	<p><a href="">naijacars@cars.com</a></p>  | 
        	<p>Mon to Fri : 9:00am to 6:00pm</p>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="{{ route('Inventory') }}">Buy A Car</a></li> 
          @if (Route::has('login'))
            @auth
              @if(Auth::user()->utype == 'ADM')
              <li><a href="{{ route('admin.dashboard') }}">Sell A Car</a></li>
              @elseif (Auth::user()->utype == 'SEL')
              <li><a href="{{ route('seller.dashboard') }}">Sell A Car</a></li>
              @elseif (Auth::user()->utype == 'CUS')
              <li><a href="{{ route('becomeSeller') }}">Sell A Car</a></li>
            @endauth
          @else
              <li><a href="{{ route('becomeSeller') }}">Sell A Car</a></li>
              @endif
          @endif
          <li><a href="{{ route('aboutus') }}">About Us</a></li>
          </li>
          <li>
            <a href="{{ route('contact') }}" aria-haspopup="true" aria-expanded="false">Contact Us</a>
          </li>
          @if(Auth::user())
          <li class="dropdown"><a href="{{ route('home') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, {{ Auth::user()->firstname.' '.Auth::user()->lastname }}</a>
            <ul class="dropdown-menu">
              <li><a href="/profile">Profile</a></li>
              <li>
                <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" role="button">Log Out<i class="ri-login-box-line ml-2"></i></a>
                <form id="logout-form" method="post" action="{{ route('logout') }}">
                  @csrf
                </form>
            </li>
            </ul>
          </li>
          @else
          <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN/REGISTER</a>
            <ul class="dropdown-menu">
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Register</a></li>
            </ul>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
</header>
<!-- /Header --> 

{{ $slot }}

<!-- Footer -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h6>About Us</h6>
          <ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Hybrid Cars</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Trademarks</a></li>
            <li><a href="#">Terms of use</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Quick Links</h6>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('aboutus') }}">About Us</a></li>
            <li><a href="{{ route('Inventory') }}">Inventory</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="#">Request a Quote</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6" style="width:40%">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form action="#">
              <div class="form-group">
                <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users every week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          {{-- <div class="footer_widget">
            <p>Download Our APP:</p>
            <ul>
              <li><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
            </ul>
          </div> --}}
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2022 Hybridsoft LTD. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /Footer -->


<!-- Scripts --> 
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('assets/js/interface.js')}}"></script> 
<!--bootstrap-slider-JS--> 
<script src="{{ asset('assets/js/bootstrap-slider.min.js')}}"></script> 
<!--Slider-JS--> 
<script src="{{ asset('assets/js/slick.min.js')}}"></script> 
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
@livewireScripts()
@yield('scripts')
</body>
</html>