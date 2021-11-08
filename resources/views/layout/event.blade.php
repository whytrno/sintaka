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
                        <div class="logo"><a href="{{ route('index') }}"><img height="70" width="180" src="{{ Storage::url('public/settings/logo.jpg') }}" alt="" title=""></a></div>
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
                                    <li class="dropdown"><a href="#">Destinasi</a>
                                        <ul>
                                            @forelse ($destination_type as $type)
											    <li><a href="{{ route('destination.type', $type->destination_type_id) }}">{{ $type->destination_type_nama }}</a></li>
                                            @empty
                                                <li><a href="#">Tipe destinasi kosong</a></li>
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('videos') }}">Video</a></li>
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
                <div class="nav-logo"><a href="{{ route('index') }}"><img height="70" width="180" src="{{ Storage::url('public/settings/logo.jpg') }}" alt="" title=""></a></div>
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
                    <div class="big-column col-lg-12 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="{{ route('index') }}"><img src="{{ asset('storage/assets/images/footer-logo.png') }}" alt="" /></a>
                                    </div>
                                    <div class="text">@yield('description')</div>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Kontak Info</h2>
                                    <div class="widget-content">
                                        Telp   : <a href="tel:@yield('no_hp')" class="contact-number">@yield('no_hp')</a>
                                        <ul>
                                            <li>Alamat: <a href="@yield('address_url')"> @yield('address')</a></li>
                                            <li>Email  :<a href="mailto:@yield('email')"> @yield('email')</a></li>
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
        	<form method="post" action="{{ route('event.search') }}">
                @csrf
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="event_name" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
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
<script src="{{ asset('storage/js/mixitup.js') }}"></script>
<script src="{{ asset('storage/js/jquery.bootstrap-touchspin.js') }}"></script>
</body>

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
</html>
