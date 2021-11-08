
@extends('layout.event')
@section('title', 'SINTAKA')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')
    <!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">

			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">

				@forelse($slider as $data)
					<!-- Slide -->
					<div class="slide">
						<div class="image-layer" style="background-image:url({{ asset('storage/assets/images/main-slider/2.jpg') }})"></div>
						<div class="auto-container">
							<div class="content">
								<h2>{{ $data->slider_title }}</h2>
								<div class="text">{{ $data->slider_desc }}</div>
							</div>
						</div>
					</div>
				@empty
					
				@endforelse
			</div>

		</div>
	</section>
	<!-- End Banner Section -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Info Terkini</h2>
			</div>
			<div class="row clearfix">

				<!-- Service Block -->
				
				@forelse ($event as $data)
				<div class="service-block col-lg-6 col-md-6 col-sm-12" style="margin-bottom: 15px">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{ route('event.show', $data->event_id) }}"><img src="{{ Storage::url('public/events/').$data->event_image }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">{{ $data->event_name }}</a></h3>
							<div class="text"><p>{{strip_tags(Str::limit($data->event_desc, 250, $end=" ..."))}}</p></div>
						</div>
					</div>
				</div>
				@empty
				  <h1 class="centered">Data kosong</h1>
				@endforelse

			</div>

		</div>
	</section>
	<!-- End Services Section -->

	<!-- Fluid Section One -->
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">

			<!--Content Column-->
			<div class="content-column">
				<div class="content-box">
					<h2>Manfaat SINTAKA</h2>
					<div class="text">Sintaka memberikan berbagai manfaat kepada pengguna.</div>
					<ul class="list-style-one">
						<li>Mempermudah pencarian informasi berkaitan dengan tempat pariwisata yang ada di Kabupaten Karanganyar.</li>
						<li>Sebagai sarana promosi tempat wisata di Kabupaten Karanganyar.</li>
						<li>Menyajikan informasi terupdate mengenai pariwisata yang ada di Kabupaten Karanganyar</li>
					</ul>
					<div class="bold-text">Sintaka: Excellent Tourism Partner</a></div>
				</div>
			</div>

			<!--Image Column-->
        	<div class="image-column" style="background-image: url({{ asset('storage/assets/images/resource/video-img.jpg') }})">
				<div class="inner-column">
					<div class="image">
						<img src="{{ asset('storage/assets/images/resource/video-img.jpg') }}" alt="">
					</div>
					<a href="https://www.youtube.com/watch?v=SXZXtD60t2g" class="overlay-link lightbox-image">
						<div class="icon-box">
							<span class="icon flaticon-play-button"></span>
                            <i class="ripple"></i>
						</div>
					</a>
				</div>
            </div>
            <!--End Image Column-->

		</div>
	</section>

	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				<h2>Testimoni</h2>
				<div class="title-text">Thousands of people done interior</div>
			</div>

			<div class="testimonial-carousel owl-carousel owl-theme">

				@forelse($testimoni as $data)
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{ asset('storage/assets/images/resource/author-1.jpg') }}" alt="" />
								</div>
							</div>
							<h3>{{ $data->name }}</h3>
							<div class="text">{{ $data->content }}</div>
						</div>
					</div>
				</div>
				@empty
					<h1>Data kosong!</h1>
				@endforelse

			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	<!-- Call To Action Section -->
	<section class="call-to-action-section" style="background-image: url({{ asset('storage/assets/images/background/1.jpg') }})">
		<div class="auto-container">
			<h2>Think Interior. Think Stella Orr'e</h2>
			<div class="text">Interiors for all styles and budgets, Choose from thousands of <br> designs. Heart your favorites to shortlist.</div>
			<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
		</div>
	</section>
	<!-- End Call To Action Section -->
@endsection
