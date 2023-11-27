<div>
@section('title', 'My Profile')
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin-dashboard"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">                
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                    <a href="profile-edit.html" class="btn btn-info btn-icon float-right"><i class="zmdi zmdi-edit"></i></a>
                </div>
            </div>
        </div> 
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-md-6">
                    <div class="card mcard_3">
                        <div class="body">
                            <h4 class="col-md-12">{{ Auth::user()->firstname.' '.Auth::user()->lastname }}</h4>                            
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="social-links list-unstyled">
                                        <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                    <p class="text-muted">{{ Auth::user()->city}}, {{ Auth::user()->country}}</p>
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="body">
                            <small class="text-muted">Review: </small>
                            <p>
                                <i class="text-warning zmdi zmdi-star"></i>
                                <i class="text-warning zmdi zmdi-star"></i>
                                <i class="text-warning zmdi zmdi-star"></i>
                                <i class="text-warning zmdi zmdi-star"></i>
                                <i class="text-warning zmdi zmdi-star-half"></i>
                            </p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>{{ Auth::user()->email }}</p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>{{ Auth::user()->phone }}</p>
                            <hr>
                        </div>
                    </div>                    
                </div>
            </div>

        </div>
    </div>
</section>
</div>
