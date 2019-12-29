<!DOCTYPE html>
<html>

<!-- Mirrored from grandetest.com/theme/jobhunt-html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2019 20:34:17 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Hunt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.css')}}" />
	<link rel="stylesheet" href="{{ asset('css/icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/colors/colors.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('js/switching_forms.js?1500')}}" type="text/javascript"></script>
	<script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  
	
</head>
<body>
    <div class="page-loading">
        <img src="{{asset('images/loader.gif')}}" alt="" />
    </div>

    <div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="index.html" title=""><img src="{{asset('images/resource/logo.png')}}" alt="" /></a></div>
				<div class="menu-resaction">
					<div class="res-openmenu">
					<img src="{{asset('images/icon.png')}}" alt="" /> Menu
					</div>
					<div class="res-closemenu">
					<img src="{{asset('images/icon2.png')}}" alt="" /> Fermer
					</div>
				</div>
			</div>
    </div>
<header <?php 

	if(auth::guard('candidate')->check()||auth::guard('recruteur')->check())
	{
		echo 'class="stick-top "';
	}
	else echo 'class="stick-top forsticky"';

?>>
@yield('navbar')

</header>

@yield('main')



	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a>
								</div>
								<span>Collin Street West, Victor 8007, Australia.</span>
								<span>+1 246-345-0695</span>
								<span><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="224b4c444d62484d404a574c560c414d4f">[email&#160;protected]</a></span>
								<div class="social">
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
									<a href="#" title=""><i class="fa fa-linkedin"></i></a>
									<a href="#" title=""><i class="fa fa-pinterest"></i></a>
									<a href="#" title=""><i class="fa fa-behance"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Frequently Asked Questions</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="#" title="">Privacy & Seurty </a>
										<a href="#" title="">Terms of Serice</a>
										<a href="#" title="">Communications </a>
										<a href="#" title="">Referral Terms </a>
										<a href="#" title="">Lending Licnses </a>
										<a href="#" title="">Disclaimers </a>	
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Support </a>
										<a href="#" title="">How It Works </a>
										<a href="#" title="">For Employers </a>
										<a href="#" title="">Underwriting </a>
										<a href="#" title="">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>	
										<a href="#" title="">Canada Jobs</a>	
										<a href="#" title="">UK Jobs</a>	
										<a href="#" title="">Emplois en Fnce</a>	
										<a href="#" title="">Jobs in Deuts</a>	
										<a href="#" title="">Vacatures China</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="images/resource/dw1.png" alt="" /></a>
								<a href="#" title=""><img src="images/resource/dw2.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>



<script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>
<script src="js/parallax.js" type="text/javascript"></script>
<script src="js/select-chosen.js" type="text/javascript"></script>
<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="js/circle-progress.min.js" type="text/javascript"></script>
<script src="js/slick.min.js" type="text/javascript"></script>

</body>


</html>
