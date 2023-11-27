<div>
@section('title', 'Home')
<!-- Banners -->
<section id="banner" class="banner-section">
	<div class="container">
	  <div class="div_zindex">
		<div class="row">
		  <div class="col-md-5 col-md-push-7">
			<div class="banner_content">
			  <h1>Find the right car for you.</h1>
			  <p>We have more than a thousand cars for you to choose. </p>
			  <a href="{{ route('aboutus') }}" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!-- /Banners --> 
  
  <section class="listing-page">
	<div class="container">
	  <div class="row">
		<div class="col-md-9 col-md-push-3">
		<div class="mobile_search">	
			  <div class="sidebar_widget">
				<div class="widget_heading">
				  <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
				</div>
				<div class="sidebar_filter">
				  <form action="#" method="get">
					<div class="form-group select">
					  <select class="form-control">
						<option>Select Location</option>
						<option>Location 1</option>
						<option>Location 2</option>
						<option>Location 3</option>
						<option>Location 4</option>
					  </select>
					</div>
					<div class="form-group select">
					  <select class="form-control">
						<option>Select Brand</option>
						<option>Brand 1</option>
						<option>Brand 2</option>
						<option>Brand 3</option>
						<option>Brand 4</option>
					  </select>
					</div>
					<div class="form-group select">
					  <select class="form-control">
						<option>Select Model</option>
						<option>Series 1</option>
						<option>Series 2</option>
						<option>Series 3</option>
						<option>Series 4</option>
					  </select>
					</div>
					<div class="form-group select">
					  <select class="form-control">
						<option>Year of Model </option>
						<option>2016</option>
						<option>2015</option>
						<option>2014</option>
						<option>2013</option>
					  </select>
					</div>
					<div class="form-group">
					  <label class="form-label">Price Range ($) </label>
					  <input id="price_range1" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
					</div>
					<div class="form-group select">
					  <select class="form-control">
						<option>Type of Car </option>
						<option>New Car</option>
						<option>Used Car</option>
					  </select>
					</div>
					<div class="form-group">
					  <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
					</div>
				  </form>
				</div>
			  </div> 
		  </div>
		  <div class="result-sorting-wrapper">
			<div class="sorting-count">
			  <p>1 - 12 <span>of 50 Results for your search.</span></p>
			</div>
			<div class="result-sorting-by">
			  <p>Sort by:</p>
			  <form action="#" method="post">
				<div class="form-group select sorting-select">
				  <select class="form-control ">
					<option>Price (low to high)</option>
					<option>Price (high to low)</option>
					<option>Newest Items</option>
				  </select>
				</div>
			  </form>
			</div>
		  </div>
		<div class="row">
		  @foreach ($listings as $listing)
			<div class="col-md-4 grid_listing">
			  <div class="product-listing-m gray-bg">
				<div class="product-listing-img"> <a href="{{ route('InventorySingle', ['code'=>$listing->code]) }}"><img style="width:263px; height: 192px;  object-fit: cover;" src="{{ asset('asset/image/vehicleImages') }}/{{ $listing->image }}" class="img-responsive" alt="image" /> </a>
				  <div class="label_icon">{{ $listing->vehicle_type }}</div>
				  <div class="compare_item">
				  </div>
				</div>
				<div class="product-listing-content">
				  <h5><a href="{{ route('InventorySingle', ['code'=>$listing->code]) }}">{{ $listing->name }}</a></h5>
				  <p class="list-price">₦{{ number_format($listing->price) }}</p>
				  <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $listing->location }}</span></div>
				  <ul class="features_list">
					<li><i class="fa fa-road" aria-hidden="true"></i>{{ $listing->kilometre }} km</li>
					<li><i class="fa fa-tachometer" aria-hidden="true"></i>{{ $listing->miles }}</li>
					<li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $listing->reg_year }} model</li>
					<li><i class="fa fa-car" aria-hidden="true"></i>{{ $listing->fuel }}</li>
				  </ul>
				</div>
			  </div>
			</div>
		  @endforeach
		</div>
		  <div class="pagination">
			{{ $listings->links() }}
			<ul>
			  <li class="current">1</li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			</ul>
		  </div>
		</div>
		
		<!--Side-Bar-->
		<aside class="col-md-3 col-md-pull-9">
		  <div class="sidebar_widget sidebar_search_wrap">
			<div class="widget_heading">
			  <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Car </h5>
			</div>
			<div class="sidebar_filter">
			  <form action="#" method="get">
				<div class="form-group select">
				  <select class="form-control">
					<option>Select Location</option>
					<option>Location 1</option>
					<option>Location 2</option>
					<option>Location 3</option>
					<option>Location 4</option>
				  </select>
				</div>
				<div class="form-group select">
				  <select class="form-control">
					<option>Select Brand</option>
					<option>Brand 1</option>
					<option>Brand 2</option>
					<option>Brand 3</option>
					<option>Brand 4</option>
				  </select>
				</div>
				<div class="form-group select">
				  <select class="form-control">
					<option>Select Model</option>
					<option>Series 1</option>
					<option>Series 2</option>
					<option>Series 3</option>
					<option>Series 4</option>
				  </select>
				</div>
				<div class="form-group select">
				  <select class="form-control">
					<option>Year of Model </option>
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
				  </select>
				</div>
				<div class="form-group">
				  <label class="form-label">Price Range ($) </label>
				  <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
				</div>
				<div class="form-group select">
				  <select class="form-control">
					<option>Type of Car </option>
					<option>New Car</option>
					<option>Used Car</option>
				  </select>
				</div>
				<div class="form-group">
				  <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
				</div>
			  </form>
			</div>
		  </div>
		  <div class="sidebar_widget sell_car_quote">
			<div class="white-text div_zindex text-center">
			  <h3>Sell Your Car</h3>
			  <p>Request a quote and sell your car now!</p>
			  <a href="#" class="btn">Request a Quote <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
		  </div>   
		  {{-- <div class="sidebar_widget">
			<div class="widget_heading">
			  <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
			</div>
			<div class="recent_addedcars">
			  <ul>
				<li class="gray-bg">
				  <div class="recent_post_img"> <a href="#"><img src="assets/images/200x200.jpg" alt="image"></a> </div>
				  <div class="recent_post_title"> <a href="#">Recently Listed Car Name</a>
					<p class="widget_price">$92,000</p>
				  </div>
				</li>
				<li class="gray-bg">
				  <div class="recent_post_img"> <a href="#"><img src="assets/images/200x200.jpg" alt="image"></a> </div>
				  <div class="recent_post_title"> <a href="#">Recently Listed Car Name</a>
					<p class="widget_price">$92,000</p>
				  </div>
				</li>
				<li class="gray-bg">
				  <div class="recent_post_img"> <a href="#"><img src="assets/images/200x200.jpg" alt="image"></a> </div>
				  <div class="recent_post_title"> <a href="#">Recently Listed Car Name </a>
					<p class="widget_price">$92,000</p>
				  </div>
				</li>
				<li class="gray-bg">
				  <div class="recent_post_img"> <a href="#"><img src="assets/images/200x200.jpg" alt="image"></a> </div>
				  <div class="recent_post_title"> <a href="#">Recently Listed Car Name</a>
					<p class="widget_price">$92,000</p>
				  </div>
				</li>
			  </ul>
			</div>
		  </div> --}}
		</aside>
		<!--/Side-Bar--> 
	  </div>
	</div>
</section>
<div class="col-md-pull-9">
  {{-- <div class="row">
	@foreach ($listings as $listing)
	  <div class="col-md-4 grid_listing">
		<div class="product-listing-m gray-bg">
		  <div class="product-listing-img"> <a href="{{ route('InventorySingle', ['code'=>$listing->code]) }}"><img style="width:263px; height: 192px;  object-fit: cover;" src="{{ asset('asset/image/vehicleImages') }}/{{ $listing->image }}" class="img-responsive" alt="image" /> </a>
			<div class="label_icon">{{ $listing->vehicle_type }}</div>
			<div class="compare_item">
			</div>
		  </div>
		  <div class="product-listing-content">
			<h5><a href="{{ route('InventorySingle', ['code'=>$listing->code]) }}">{{ $listing->name }}</a></h5>
			<p class="list-price">₦{{ number_format($listing->price) }}</p>
			<div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $listing->location }}</span></div>
			<ul class="features_list">
			  <li><i class="fa fa-road" aria-hidden="true"></i>{{ $listing->kilometre }} km</li>
			  <li><i class="fa fa-tachometer" aria-hidden="true"></i>{{ $listing->miles }}</li>
			  <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $listing->reg_year }} model</li>
			  <li><i class="fa fa-car" aria-hidden="true"></i>{{ $listing->fuel }}</li>
			</ul>
		  </div>
		</div>
	  </div>
	@endforeach
  </div> --}}

<!-- Why-Choose-Us -->
<section id="why-choose">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="image-rightside">
					<img src="{{ asset('assets/images/car-img-02.png')}}" alt="image">
				</div>
			</div>
			<div class="col-md-6">
				<h2>Why choose  NaijaCars?</h2>
				<p>How do we compare with other ways to sell?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod tempor incididu et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull laboris aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
				<ul>
					<li><i class="fa fa-check-circle"></i> Fast and easy</li>
					<li><i class="fa fa-check-circle"></i> Transparent inspection</li>
					<li><i class="fa fa-check-circle"></i> Immediate offer</li>
					<li><i class="fa fa-check-circle"></i> Hassle free paperwork</li>
					<li><i class="fa fa-check-circle"></i> Secure payment transactions</li>
				</ul>
				<a href="#" class="btn">Book a free Inspection</a>
			</div>
		</div>
	</div>
</section>
<!-- /Why-Choose-Us -->

<!-- Featured-LIsting -->
{{-- <section id="featured-listings" class="section-padding">
	<div class="container">
		<div class="section-header heading-3 text-center">
			<h2>Our Vehicles Listing</h2>
			<p>Helps you to find perfect car. But I must explain to you how all this mistaken</p>
		</div>	
		<div class="row">
		@foreach ($listings as $listing)
			<div class="col-md-4 col-sm-6">
				<div class="featured-listing-wrap">
					<div class="listing-image">
						<a href="{{ route('InventorySingle', ['code'=>$listing->code]) }}" style="display: block; width: 100%;">
							<img style="width: 100%; height: 202px;" src="{{ asset('asset/image/vehicleImages') }}/{{ $listing->image }}" alt="image">
						</a>
						<div class="label_icon">{{ $listing->vehicle_type }}</div>
						<div class="compare_item">
						  <div class="checkbox">
							<input type="checkbox" id="compare3">
							<label for="compare3">Compare</label>
						  </div>
						</div>
					</div>
					<h4><a href="{{ route('InventorySingle', ['code'=>$listing->code]) }}">{{ $listing->name }}</a></h4>
					<p class="listing-price">{{ $listing->price }}</p>
					<div class="listing-meta">
						<ul>
							<li>{{ $listing->fuel }}</li>					
							<li>{{ $listing->kilometre }}</li>
							<li>{{ $listing->transmission }}</li>
						</ul>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</section> --}}
<!-- /Featured-LIsting -->


<!-- Services -->
<section id="our_services" class="dark-bg vc_row" id="123">
	<div class="col-md-6 vc_col section-padding">
    	<div class="facts_section_bg"></div>
	</div>
    
    <div class=" col-md-6 vc_col section-padding">
        <div class="our_services white-text">
            <h2>Our Services</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised 
            words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing 
            hidden in the middle of text. </p>
            <!--Services-info-->
            <div class="services_info">
                <div class="icon_box">
                    <i class="fa fa-car" aria-hidden="true"></i>
                </div>
                <h4><a href="#">Sale New Cars</a></h4>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
            </div>
            
            <!--Services-info-->
            <div class="services_info">
                <div class="icon_box">
                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                </div>
                <h4><a href="#">Sale Used Cars</a></h4>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
            </div>
        </div>
    </div>
</section>
<!-- /Services -->

<!--Testimonial -->
<section id="testimonial" class="section-padding">
  <div class="container div_zindex">
    <div class="section-header text-center">
      <h2>Our Testimonial</h2>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
    </div>
    <div class="row">
      <div id="testimonial-slider-2">
           <div class="testimonial_wrap">
          	   <div class="testimonial-img">
               	  <img src="assets/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Donald Brooks</h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
          	   <div class="testimonial-img">
               	  <img src="assets/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Enzo Giovanotelli </h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
          	   <div class="testimonial-img">
               	  <img src="assets/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Donald Brooks</h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
          	   <div class="testimonial-img">
               	  <img src="assets/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Enzo Giovanotelli </h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
           
           <div class="testimonial_wrap">
          	   <div class="testimonial-img">
               	  <img src="assets/images/300x300.jpg" alt="image">
               </div>
               <div class="testimonial-heading">
                  <h5>Enzo Giovanotelli </h5>
                  <span class="client-designation">CEO of xzy company</span> 
               </div>
               <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et 
               quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
           </div>
      </div>
    </div>
  </div>

</section>
<!-- /Testimonial-->  

</div>
