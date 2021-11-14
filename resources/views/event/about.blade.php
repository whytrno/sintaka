
@extends('layout.event')
@section('title', 'SINTAKA')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('storage/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Tentang Kami</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">home</a></li>
            <li>Tentang Kami</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Story Section -->
<section class="story-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>{{ $about->title }}</h2>
                    <div class="bold-text">{{ $about->sub_title }}</div>
                    <div class="text">
                        <p>{!! $about->desc !!}</p>
                    </div>
                </div>
            </div>
            
            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{ asset('storage/settings/'.$about->image) }}" alt="" />
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Story Section -->

<!-- Interior Section -->
<section class="interior-section style-three">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                
                <!-- Image Column -->
                {{-- <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{ asset('storage/settings/sintaka-logo.jpeg') }}" alt="" />
                        </div>
                    </div>
                </div> --}}
                
                <!-- Content Column -->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Kenapa memilih SINTAKA?</h2>
                        <div class="text">Sintaka memberikan informasi wisata di Kabupaten Karanganyar yang...</div>
                        <div class="row clearfix">
                        
                            <!-- Interior Block -->
                            <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                <div class="block-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-award-1"></span>
                                    </div>
                                    <h3>Terbaru</h3>
                                </div>
                            </div>
                            
                            <!-- Interior Block -->
                            <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                <div class="block-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-answer"></span>
                                    </div>
                                    <h3>Praktis</h3>
                                </div>
                            </div>
                            
                            <!-- Interior Block -->
                            <div class="interior-block col-lg-4 col-md-4 col-sm-12">
                                <div class="block-inner">
                                    <div class="icon-box">
                                        <span class="icon flaticon-hand"></span>
                                    </div>
                                    <h3>Terlengkap</h3>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="bold-text">Sintaka</div>
                        <div class="column-text">Excellent Tourism Partner</div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- End Interior Section -->

<!-- Team Section -->
<section class="team-section style-two" style="margin-top: 100px">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <h2>Anggota SINTAKA</h2>
        </div>
        
        <div class="clearfix">
            @forelse ($team as $data)
                
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{ asset('storage/teams/'.$data->image) }}" alt="" />
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">{{ $data->name }}</a></h3>
                        <div class="designation">{{ $data->role }}</div>
                    </div>
                </div>
            </div>
            @empty
                <h1>Data Kosong!</h1>
            @endforelse
            
        </div>
        
    </div>
</section>
<!-- End Team Section -->

<!-- End Call To Action Section -->
@endsection