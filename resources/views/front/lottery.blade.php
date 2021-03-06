@extends ('front.master')

@section('banner')

<div class="banner-p">
    <img src="images/common/banner-poker.jpg"/>
</div>
    
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="page-content">
			<div class="title-wrap">
				<div class="outer-mask">
					<div class="inner-mask">
						<div class="title-p"><h2>Lottery</h2></div>
					</div>
				</div>
			</div>
			<div class="single-wrap">
				<div class="single-p clearfix">
					<div class="left" style="padding-top:7px;">
						<img src="images/common/lottery-ace88.jpg"/>
					</div>
					<div class="right" style="padding-top:0;">
						<ul>
							<li style="list-style-type:none;">Magnum, Toto, Damacai, Singapore, Cashsweep, Lotto 88, STC, GDlotto</li>
						</ul>
						<!--
						<div class="app-icon">
							<div class="app-img"><img src="images/common/app-holdem.png"/></div>
							<div class="app-img"><img src="images/common/app-p8.png"/></div>
							<div class="app-img"><img src="images/common/app-bull.png"/></div>
						</div>
						<div class="app-icon">
							<div class="app-img"><img src="images/common/app-allin.png"/></div>
							<div class="app-img"><img src="images/common/app-holdem.png"/></div>
						</div>
						-->
						<!-- <input type="button" class="btn btn-warning btn-more" value="MORE INFO" onclick="location.href='poker-app.aspx'">
						<div class="single-download">download now</div> -->
						<div class="download-icon play-now-button">
							<a href="downloads"><div class="d-img">PLAY NOW!</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
        
<div id="ctl00_UpdateProgress1" style="display:none;">
	
        <div style="background-color: #808080; filter:alpha(opacity=60); opacity:0.60; width: 100%; top: 0px; left: 0px; position: fixed; height: 100%; z-index: 100002 !important;">
        </div>
          <div style="xpadding: 5px; margin: auto; filter: alpha(opacity=100); opacity: 1;
              vertical-align: middle; top: 45%; position: fixed; right: 50%; z-index: 100003 !important;
              text-align: center; xheight: 31px; xwidth: 31px; background-color: #000000; border-radius: 8px;">
              <img src="images/ajax-loader.gif" alt="Loading" style="width: 60px; height: 60px; padding: 10px;"/>
        </div>
    
</div>    

@endsection
