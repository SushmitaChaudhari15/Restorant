<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.templatescoder.com/pizzon/html/demo/1-0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2020 07:28:40 GMT -->
<head>
	<title>Dlight</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
	<link type="image/x-icon" href="{{ asset('admin_assets/images/fav-icon.png') }}" rel="icon">
	<link rel="stylesheet" href="{{ asset('admin_assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/glass-case.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/responsive.css') }}">
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-142494086-2');
    </script>
</head>
<body>

	<!-- Start preloader -->
	<!-- <div id="preloader">
		<label>Loading</label>
	</div> -->
	<!-- End preloader -->

	<header id="header" style=background-color:#121619;>
		<div class="container">
			<div class="row m-0">
				<div class="col-xl-3 col-lg-2 col-md-4 col-3 p-0">
		            <div class="navbar-header">
			               	<a class="navbar-brand page-scroll" href="{{ url('/')}}">
			                	<img alt="pizzon" src="{{ asset('admin_assets/images/logo5.png')}}">
			                </a> 
		            </div>
			    </div>
			    <div class="col-xl-9 col-lg-10 col-md-8 col-9 p-0 text-right">
			        <div id="menu" class="navbar-collapse collapse" >
			            <ul class="nav navbar-nav">
				            <li class="level">
				                <a href="{{ url('/')}}" class="page-scroll">Home</a>
				            </li>
				            <!-- <li class="level dropdown set"> 
				                <a href="menu-1.html" class="page-scroll">Menu</a>
				                <span class="opener plus"></span>
				                <div class="megamenu mobile-sub-menu content megamenu-big">
				                    <div class="megamenu-inner-top">
				                        <ul class="sub-menu-level1">
					                        <li class="level2 menu-list-d">
					                            <div class="row">
					                            	<div class="col-xl-9 col-lg-9 col-md-9">
					                            		<div class="row">
					                            			<div class="col-xl-4 col-lg-4 col-md-4">
					                            				<div class="menu-grid">
					                            					<a href="shop-detail.html" class="menu-grid-center">
						                            					<div class="pizza-menu">
						                            						<img src="images/1.png" alt="pizza">
						                            					</div>
						                            					<div class="pizza-det">
						                            						<p class="Pizza-name-1">Pepperoni</p>
						                            						<span class="pizza-price-1">$12.99</span>
						                            					</div>
						                            				</a>
					                            				</div>
					                            			</div>
					                            			<div class="col-xl-4 col-lg-4 col-md-4">
					                            				<div class="menu-grid">
					                            					<a href="shop-detail.html" class="menu-grid-center">
						                            					<div class="pizza-menu">
						                            						<img src="images/1-1.png" alt="pizza">
						                            					</div>
						                            					<div class="pizza-det">
						                            						<p class="Pizza-name-1">Vegetarian</p>
						                            						<span class="pizza-price-1">$12.99</span>
						                            					</div>
						                            				</a>
					                            				</div>
					                            			</div>
					                            			<div class="col-xl-4 col-lg-4 col-md-4">
					                            				<div class="menu-grid">
					                            					<a href="shop-detail.html" class="menu-grid-center">
						                            					<div class="pizza-menu">
						                            						<img src="images/2.png" alt="pizza">
						                            					</div>
						                            					<div class="pizza-det">
						                            						<p class="Pizza-name-1">Specialty</p>
						                            						<span class="pizza-price-1">$12.99</span>
						                            					</div>
						                            				</a>
					                            				</div>
					                            			</div>
					                            			<div class="col-xl-4 col-lg-4 col-md-4">
					                            				<div class="menu-grid">
					                            					<a href="shop-detail.html" class="menu-grid-center">
						                            					<div class="pizza-menu">
						                            						<img src="images/2-1.png" alt="pizza">
						                            					</div>
						                            					<div class="pizza-det">
						                            						<p class="Pizza-name-1">Ham & Cheese</p>
						                            						<span class="pizza-price-1">$12.99</span>
						                            					</div>
						                            				</a>
					                            				</div>
					                            			</div>
					                            			<div class="col-xl-4 col-lg-4 col-md-4">
					                            				<div class="menu-grid">
					                            					<a href="shop-detail.html" class="menu-grid-center">
						                            					<div class="pizza-menu">
						                            						<img src="images/3.png" alt="pizza">
						                            					</div>
						                            					<div class="pizza-det">
						                            						<p class="Pizza-name-1">Onion</p>
						                            						<span class="pizza-price-1">$12.99</span>
						                            					</div>
						                            				</a>
					                            				</div>
					                            			</div>
					                            			<div class="col-xl-4 col-lg-4 col-md-4">
					                            				<div class="menu-grid">
					                            					<a href="shop-detail.html" class="menu-grid-center">
						                            					<div class="pizza-menu">
						                            						<img src="images/4.png" alt="pizza">
						                            					</div>
						                            					<div class="pizza-det">
						                            						<p class="Pizza-name-1">Margheritapizza</p>
						                            						<span class="pizza-price-1">$12.99</span>
						                            					</div>
						                            				</a>
					                            				</div>
					                            			</div>
					                            		</div>
					                            	</div>
					                            	<div class="col-xl-3 col-lg-3 col-md-3">
					                            		<ul>
					                            			<li><a href="menu-2.html">Menu list</a></li>
					                            			<li><a href="menu-1.html">Menu grid</a></li>
					                            			<li><a href="#">Special Pizza</a></li>
					                            			<li><a href="#">All pizza</a></li>
					                            		</ul>
					                            	</div>
					                            </div>
					                        </li>
					                        <li class="level2 level2 menu-list-res">
					                            <ul class="sub-menu-level2 ">
					                              <li class="level3"><a href="menu-2.html"><span>■</span>Menu list</a></li>
					                              <li class="level3"><a href="menu-1.html"><span>■</span>Menu grid</a></li>
					                              <li class="level3"><a href="#"><span>■</span>Special Pizza</a></li>
					                              <li class="level3"><a href="#"><span>■</span>All pizza</a></li>
					                            </ul>
					                        </li>
				                        </ul>
				                    </div>
				                </div>
				            </li> -->
				            <!-- <li class="level set">
				                <a href="blog-leftside.html" class="page-scroll">Blog</a>
				                <span class="opener plus"></span> 
				                <div class="megamenu mobile-sub-menu content">
				                    <div class="megamenu-inner-top">
				                       	<ul class="sub-menu-level1">
				                         	<li class="level2">
				                            	<ul class="sub-menu-level2 ">
				                             		<li class="level3"><a href="blog-leftside.html"><span>■</span>Blog Leftside</a></li>
				                              		<li class="level3"><a href="blog-rightside.html"><span>■</span>Blog rightside</a></li>
				                              		<li class="level3"><a href="blog-detail.html"><span>■</span>Blog detail</a></li>
				                            	</ul>
				                          	</li>
				                        </ul>
				                    </div>
				                </div>
				            </li> -->
				            <li class="level">
				                <a href="{{ url('/#table')}}" class="page-scroll">Book Table</a>
							</li>
							<li class="level">
								<a href="{{ url('about')}}" class="page-scroll">About Us</a>
							</li>
													  
							<li class="level">
								<a href="{{ url('contact')}}" class="page-scroll">Contact</a>
							</li>

					

		               	@if (Route::has('login'))
						   @auth
						   <li class="level text-white" style=" padding: 15px 18px;">

							{{ Auth::user()->name }}
							</li>
							<li class="order-online">

							<form method="POST" action="{{ route('logout') }}" style=" padding: 15px 18px;">
                            @csrf
                            
                            <a
                                              href="{{ route('logout') }}" class="btn btn-green"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
								<!-- Logout -->
                            </a>
                        </form>
						</li>
							@else

							<li class="order-online">
			                	<a href="{{ route('login') }}" class="btn btn-green">Login</a>
			                </li>
							@if (Route::has('register'))

							<li class="order-online">
			                	<a href="{{ route('register') }}" class="btn btn-green">Register</a>
			                </li>
							

							@endif
                    @endauth
					@endif


				            <!-- <li class="level dropdown set"> 
				                <a href="about.html" class="page-scroll">Pages</a>
				               	<span class="opener plus"></span> 
				                <div class="megamenu mobile-sub-menu content">
				                    <div class="megamenu-inner-top">
				                        <ul class="sub-menu-level1">
				                          	<li class="level2">
				                            	<ul class="sub-menu-level2 ">
				                              		<li class="level3"><a href="about.html"><span>■</span>About Us</a></li>
				                              		<li class="level3"><a href="contact.html"><span>■</span>Contact</a></li>
				                              		<li class="level3"><a href="shop-grid.html"><span>■</span>Shop grid</a></li>
				                            	</ul>
				                          	</li>
				                        </ul>
				                    </div>
				                </div>
				            </li> -->
			            </ul>
			        </div>
			        
					<div class=" header-right-link">
			            <ul>
			                <li class="side-toggle">
			                  	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span></span></button>
			                </li>
			            </ul>
			        </div>

			    </div>
			</div>
		</div>
	</header>


@section('container')
@show

	
	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<footer>
		<div class="container">
			<div class="footer">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 footer-box">
						<div class="footer-logo">
							<img src="{{ asset('admin_assets/images/logo4.png')}}"  alt="fooret-logo" style="width: 64%";>
							<p class="footer-des">20 Carrochan Rd, Balloch, Alexandria G83 8EG, UK 69QJ+2F Alexandria, United Kingdom</p>
							<ul>
								<li>phone  - <a href="%2b911234567890.html">+91 123 456 789 0 , +91 123 456 789 0</a></li>
								<li>email  - <a href="http://themes.templatescoder.com/cdn-cgi/l/email-protection#f3808683839c8187b3839a89899c9ddd909c9e"><span class="__cf_email__" data-cfemail="6d1e181d1d021f192d1d0417170203430e0200">[email&#160;protected]</span></a></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 footer-box">
						<div class="opening-hours">
							<h2>Opening Hours</h2>
							<ul>
								<li>Mon - Tues :  <span>6.00 am - 10.00 pm</span></li>
								<li>Wednes - Thurs : <span>6.00 am - 10.00 pm</span></li>
								<li>Launch :  <span>Everyday</span></li>
								<li>Sunday :  <span class="footer-close">Closed</span></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 footer-box">
						<div class="useful-links">
							<h2>useful links</h2>
							<ul>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Order Tracking</a></li>
								<li><a href="#">Warranty and Services</a></li>
								<li><a href="{{ url('about')}}">About</a></li>
								<li><a href="{{ url('contact')}}">Contact Us</a></li>
								<li><a href="#">Wishlist</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
						<p class="copy-text">© Dlight all Rights Reserved. Designed by <a href="https://sushmitachaudhari.ml" target="_blank">Sushmita Chaudhari</a></p>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('admin_assets/js/jquery.min.js')}}"></script>
	<script src="{{ asset('admin_assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('admin_assets/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('admin_assets/js/modernizr.js')}}"></script>
	<script>
	    $(document).ready( function () {
	        //If your <ul> has the id "glasscase"
	        $('#glasscase').glassCase({ 
	           	'thumbsPosition': 'bottom', 
	            'widthDisplayPerc' : 100,
	            isDownloadEnabled: false,
	        });
	    });
	</script>
	<script src="{{ asset('admin_assets/js/script.js')}}"></script>

</body>

<!-- Mirrored from themes.templatescoder.com/pizzon/html/demo/1-0/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Oct 2020 07:30:25 GMT -->
</html>