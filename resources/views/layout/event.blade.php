<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<!-- Stylesheets -->
<link href="{{ asset('storage/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('storage/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('storage/css/responsive.css') }}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('storage/assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('storage/assets/images/favicon.png') }}" type="image/x-icon">
<script src="https://kit.fontawesome.com/61ede77fc1.js" crossorigin="anonymous"></script>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper" style="top: 0">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="{{ route('index') }}"><img src="{{ asset('storage/assets/images/logo.png') }}" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('index') }}">Beranda</a></li>
                                    <li><a href="{{ route('event.index') }}">Event</a></li>
                                    <li><a href="contact.html">Destinasi</a></li>
                                    <li><a href="contact.html">Video</a></li>
                                    <li><a href="contact.html">Tentang</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('index') }}"><img src="{{ asset('storage/assets/images/logo.png') }}" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    @yield('content')

    
	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="{{ route('index') }}"><img src="{{ asset('storage/assets/images/footer-logo.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text">SINTAKA adalah sistem indeks berbasis website yang berfungsi untuk memberikan informasi mengenai pariwisata di Kabupaten Karanganyar</div>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Kontak Info</h2>
                                  <div class="widget-content">
                										<a href="tel:081227385598" class="contact-number">081227385598</a>
                										<ul>
                											<li>Karanganyar, Jawa Tengah</li>
                											<li>Email :<a href="mailto:SINTAKAranganyar@gmail.com.com"> SINTAKAranganyar@gmail.com.com</a></li>
                										</ul>
                									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

		</div>
	</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<script src="{{ asset('storage/js/jquery.js') }}"></script>
<script src="{{ asset('storage/js/popper.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery-ui.js') }}"></script>
<script src="{{ asset('storage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('storage/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('storage/js/isotope.js') }}"></script>
<script src="{{ asset('storage/js/owl.js') }}"></script>
<script src="{{ asset('storage/js/wow.js') }}"></script>
<script src="{{ asset('storage/js/appear.js') }}"></script>
<script src="{{ asset('storage/js/scrollbar.js') }}"></script>
<script src="{{ asset('storage/js/script.js') }}"></script>
</body>

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
</html>
