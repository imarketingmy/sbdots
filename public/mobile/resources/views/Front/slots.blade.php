@extends('Front.master')

@section('content')        
            
        <div class="all-elements">

                @include ('Layout.sidebar')
        
            <div id="content" class="page-content">
        
                @include ('Layout.nav')
                        
            <div>

                    <div id="ctl00_UpdatePanel1">

                            <div class="container bg-dark">
                                <h2>slots</h2>
                                
                                <div class="row product-wrap margin-none-side">
                                    <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                        <div class="col-md-12 padding-style6">
                                            <img src="images/common/product/live22.jpg" class="img-responsive width-full"/>
                                        </div>
                                        <div class="col-md-12 download-wrap">
                                            <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="row product-wrap margin-none-side">
                                    <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                        <div class="col-md-12 padding-style6">
                                            <img src="images/common/product/products-1s-slot.jpg" class="img-responsive width-full"/>
                                        </div>
                                        <div class="col-md-12 download-wrap">
                                            <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>			
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="row product-wrap margin-none-side">
                                    <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                        <div class="col-md-12 padding-style6">
                                            <img src="images/common/product/mega888.jpg" class="img-responsive width-full"/>
                                        </div>
                                        <div class="col-md-12 download-wrap">
                                            <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                        </div>
                                    </a>
                                </div>

                                <div class="row product-wrap margin-none-side">
                                    <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                        <div class="col-md-12 padding-style6">
                                            <img src="images/common/product/luckypalace.jpg" class="img-responsive width-full" />
                                        </div>
                                        <div class="col-md-12 download-wrap">
                                            <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="row product-wrap margin-none-side">
                                    <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                        <div class="col-md-12 padding-style6">
                                            <img src="images/common/product/suncity.jpg" class="img-responsive width-full"/>
                                        </div>
                                        <div class="col-md-12 download-wrap">
                                            <button type="button" class="btn btn-warning btn-block"><i class="fa fa-apple"></i><i class="fa fa-android"></i> Download</button>			
                                        </div>
                                    </a>
                                </div>

                                <div class="row product-wrap margin-none-side">
                                    <a href="download" data-wow-duration="0.2s" class="wow pulse animated">
                                        <div class="col-md-12 padding-style6">
                                            <img src="images/common/product/rollex.jpg" class="img-responsive width-full" />
                                        </div>
                                        <div class="col-md-12 download-wrap">
                                            <button type="button" class="btn btn-warning btn-block"><i class="fa fa-android"></i> Download</button>
                                        </div>
                                    </a>
                                </div>
                                                            
                            </div>

                    </div>

        <div id="ctl00_UpdateProgress1" style="display:none;">
            
        <div class="overlay" />
                    <div class="overlayContent">
                        <img src="images/ajax-loader.gif" alt="Loading" border="1" />
                    </div>
            
        </div>
            </div>
        
            @include ('Front.footer')
                            
            </div>  
            
        </div>

@endsection