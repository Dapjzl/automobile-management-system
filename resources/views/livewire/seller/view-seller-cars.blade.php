<div>
 @section('title', 'View My Vehicles')
    <section class="content file_manager">
        <div class="body_scroll">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Aero</a></li>
                            <li class="breadcrumb-item active">View Cars</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                        <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-upload"></i></button>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">                    
                            <div class="tab-content">
                                <div class="tab-pane active" id="a2018">
                                    <div class="row clearfix">
                                        @foreach ($views as $view)    
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                        <div class="hover">
                                                            <a href="{{ route('seller.update',['code'=>$view->code]) }}"  class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </a>
                                                            <a href="" wire:click="deleteVehicle('{{ $view->code }}')" class="btn btn-icon btn-icon-mini btn-round btn-danger">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </a>
                                                        </div>
                                                        <div class="image">
                                                            <img src="{{ asset('asset/image/vehicleImages') }}/{{ $view->image }}" alt="img" class="img-fluid">
                                                        </div>
                                                        <div class="file-name">
                                                            <p class="m-b-5 text-muted">{{ $view->name }}</p>
                                                            <small>{{ $view->engine }} <span class="date">Reg. Year{{ $view->reg_year }}</span></small>
                                                        </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
