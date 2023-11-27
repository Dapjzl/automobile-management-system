<div>
 @section('title', 'Inventory')
    <section class="listing-page">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-md-push -3">
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
                          <label class="form-label">Price Range (₦) </label>
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
              @foreach ($inventories as $inventory)
                <div class="col-md-4 grid_listing">
                  <div class="product-listing-m gray-bg">
                    <div class="product-listing-img"> <a href="{{ route('InventorySingle', ['code'=>$inventory->code]) }}"><img style="width:263px; height: 192px;  object-fit: cover;" src="{{ asset('asset/image/vehicleImages') }}/{{ $inventory->image }}" class="img-responsive" alt="image" /> </a>
                      <div class="label_icon">{{ $inventory->vehicle_type }}</div>
                      <div class="compare_item">
                        {{-- <div class="checkbox">
                          <input type="checkbox" value="" id="compare10">
                          <label for="compare10">Compare</label>
                        </div> --}}
                      </div>
                    </div>
                    <div class="product-listing-content">
                      <h5><a href="{{ route('InventorySingle', ['code'=>$inventory->code]) }}">{{ $inventory->name }}</a></h5>
                      <p class="list-price">₦{{ number_format($inventory->price) }}</p>
                      <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $inventory->location }}</span></div>
                      <ul class="features_list">
                        <li><i class="fa fa-road" aria-hidden="true"></i>{{ $inventory->kilometre }} km</li>
                        <li><i class="fa fa-tachometer" aria-hidden="true"></i>{{ $inventory->miles }}</li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i>{{ $inventory->reg_year }} model</li>
                        <li><i class="fa fa-car" aria-hidden="true"></i>{{ $inventory->fuel }}</li>
                      </ul>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
              <div class="pagination">
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
                      <label class="form-label">Price Range (₦) </label>
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
                <div class="dark-overlay"></div>
              </div>
              <div class="sidebar_widget">
                <div class="widget_heading">
                  <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
                </div>
                <div class="recent_addedcars">
                  <ul>
                    @foreach ($inventories as $inventory)
                      <li class="gray-bg">
                        <div class="recent_post_img"> <a href="{{ route('InventorySingle', ['code'=>$inventory->code]) }}"><img src="{{ asset('asset/image/vehicleImages') }}/{{ $inventory->image }}" alt="image"></a> </div>
                        <div class="recent_post_title"> <a href="{{ route('InventorySingle', ['code'=>$inventory->code]) }}">{{$inventory->name }}</a>
                          <p class="widget_price">₦{{ number_format($inventory->price) }}</p>
                        </div>
                      </li>
                    @endforeach
                    {{-- <li class="gray-bg">
                      <div class="recent_post_img"> <a href="#"><img src="assets/images/200x200.jpg" alt="image"></a> </div>
                      <div class="recent_post_title"> <a href="#">Recently Listed Car Name</a>
                        <p class="widget_price">$92,000</p>
                      </div>
                    </li> --}}
                  </ul>
                </div>
              </div>
            </aside>
            <!--/Side-Bar--> 
          </div>
        </div>
    </section>
</div>
