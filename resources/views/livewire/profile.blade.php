<div>
@section('title', Auth::user()->firstname.' Profile | Naijacars.com')
 <!--Page Header-->
  <section class="page-header profile_page">
    <div class="container">
      <div class="page-header_wrap">
        <div class="page-heading">
          <h1></h1>
        </div>
        <ul class="coustom-breadcrumb">
          <li><a href="/">Home</a></li>
          <li>Profile</li>
        </ul>
      </div>
    </div>
  </section>
<!-- /Page Header--> 
    <section class="dealer_profile inner_pages">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-4">
              <div class="dealer_logo"> <img src="{{ asset('asset/image/seller_profile')}}/{{ Auth::user()->image}}" alt="image"> </div>
            </div>
            <div class="col-md-6 col-sm-5 col-xs-8">
              <div class="dealer_info">
                <h4>{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</h4>
                <p>{{ Auth::user()->city}}, {{ Auth::user()->country}}<br></p>
                {{-- <ul class="dealer_social_links">
                  <li class="facebook-icon"><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                  <li class="twitter-icon"><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                  <li class="linkedin-icon"><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                  <li class="google-plus-icon"><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                </ul> --}}
              </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="dealer_contact_info gray-bg">
                <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</h6>
                <a href="">{{ Auth::user()->email}}</a> </div>
              <div class="dealer_contact_info gray-bg">
                <h6><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h6>
                <a href="">{{ Auth::user()->phone}}</a> </div>
            </div>
          </div>
          <div class="space-60"></div>
          <div class="row">
            <div class="col-md-9">
              <div class="dealer_more_info">
                <div class="dealer_listings">
                  <h6>Inventorys Listing By {{ Auth::user()->firstname.' '.Auth::user()->lastname}}</h6>
                  <br>
                  <div class="row">
                    @foreach ($views as $view)
                    <div class="col-md-4 grid_listing">
                        <div class="product-listing-m gray-bg">
                          <div class="product-listing-img"> <a href="{{ route('InventorySingle', ['code'=>$view->code]) }}"><img src="{{ asset('asset/image/vehicleImages') }}/{{ $view->image }}" style="width:263px; height: 192px;  object-fit: cover;" class="img-responsive" alt="image" /> </a>
                            <div class="label_icon">{{ $view->vehicle_type }}</div>
                          </div>
                          <div class="product-listing-content">
                            <h5><a href="{{ route('InventorySingle', ['code'=>$view->code]) }}">{{ $view->name }}</a></h5>
                            <p class="list-price">₦ {{ $view->price }}</p>
                            <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $view->location }}</span></div>
                            <ul class="features_list">
                              <li><i class="fa fa-road" aria-hidden="true"></i>{{ $view->kilometre }} km</li>
                              <li><i class="fa fa-tachometer" aria-hidden="true"></i>{{ $view->engine }} Hp</li>
                              <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $view->reg_year }} model</li>
                              <li><i class="fa fa-car" aria-hidden="true"></i>{{ $view->transmission }}</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="comment_form">
                  <h6>Leave a Comment</h6>
                  <form action="#">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <textarea rows="5" class="form-control" placeholder="Comments"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn" value="Submit Comment">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <aside class="col-md-3">
              <div class="sidebar_widget">
                <div class="widget_heading">
                  <h5><i class="fa fa-envelope" aria-hidden="true"></i> Message to Dealer</h5>
                </div>
                <form action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Send Message" class="btn btn-block">
                  </div>
                </form>
              </div>
            </aside>
          </div>
        </div>
    </section>
</div>
