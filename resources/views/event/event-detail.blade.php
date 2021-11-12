@extends('layout.event')
@section('title', 'SINTAKA | Acara')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('storage/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Detail Acara</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Detail acara</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-12 col-lg-12 col-md-12 col-sm-12">
                	<div class="blog-single padding-right">
						<div class="inner-box">
							<div class="image-box">
                                <figure class="image"><img src="{{ asset('storage/events/.$event->event_image') }}" alt=""></figure>
                                <span class="date">{{ $event->event_date_start }} - {{ $event->event_date_end }}</span>
                            </div>
                            <div class="lower-content">
								<div class="lower-box">
                            <h3>{{ $event->event_name }}</h3>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <p><i style="color: orange" class="fas fa-calendar-alt"></i>&nbsp; {{ $event->event_date_start }} - {{ $event->event_date_end }}</p>
                                                <p><i style="color: orange" class="fas fa-location-arrow"></i>&nbsp; <b>{{ $event->event_place }}</b></p>
                                            </div>
                                            <div class="col">
                                                <p><i style="color: orange" class="fas fa-map-marker-alt">&nbsp;</i>  {{ $event->event_place }}</p>
                                                <p><i style="color: orange" class="fas fa-phone-alt"></i>&nbsp; <a style="color: grey" href="tel:+62123456789">+62123456789</a></p>
                                            </div>
                                            <div class="col">
                                                <p><i style="color: orange" class="fas fa-globe"></i>&nbsp; <a style="color: grey" href="www.website.com">www.website.com</a></p>
                                                <p><i style="color: orange" class="fas fa-envelope"></i>&nbsp; <a style="color: grey" href="mailto:name@email.com">name@email.com</a></p>
                                            </div>
                                        </div>
                                    </div>
									<div class="text">
										<p>{!! $event->event_desc !!}</h4>
									</div>
								</div>
							</div>
                            <div style="margin-top: 150px">
                                <h3 style="text-align: center; color: black">Event Lainnya</h3>
                                <div class="container" style="margin-top: 50px">
                                    <div class="row">
                                        @forelse ($event_latest as $latest)
                                            <div class="col">
                                                <a href="{{ route('event.show', $latest->event_id) }}">
                                                    <img class="rounded" src="{{ asset('storage/events/.$latest->event_image') }}" alt="">
                                                    <div style="margin-top: 30px">
                                                        <p>{{ $latest->event_date_start }} - {{ $latest->event_date_end }}<br>
                                                        <b>{{ $latest->event_name }}</b></p>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <h1>Data terbaru kosong!</h1>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
				</div>


			</div>
		</div>
	</div>

    @endsection