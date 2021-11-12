@extends('layout.event')
@section('title', 'SINTAKA | Informasi')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('storage/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Detail Informasi</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Detail Informasi</li>
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
                                <figure class="image"><img src="{{ asset('storage/infos/'.$info->info_image) }}" alt=""></figure>
                            </div>
                            <div class="lower-content">
								<div class="lower-box">
                            <h3>{{ $info->info_title }}</h3>
									<div class="text">
										<p>{!! $info->info_desc !!}</h4>
									</div>
								</div>
							</div>
                            <div style="margin-top: 150px">
                                <h3 style="text-align: center; color: black">Informasi Lainnya</h3>
                                <div class="container" style="margin-top: 50px">
                                    <div class="row">
                                        @forelse ($info_latest as $latest)
                                            <div class="col">
                                                <a href="{{ route('info.shows', $latest->info_id) }}">
                                                    <img class="rounded" src="{{ asset('storage/infos/'.$latest->info_image) }}" alt="">
                                                    <div style="margin-top: 30px">
                                                        <b>{{ $latest->info_title }}</b></p>
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