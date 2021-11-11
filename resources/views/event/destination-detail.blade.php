@extends('layout.event')
@section('title', 'Detail Wisata')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('storage/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Detail Wisata</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Detail wisata</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Shop Single Section-->
<section class="shop-single-section">
    <div class="auto-container" style="margin-top: 75px;">
        
        <div class="shop-single">
            <div class="product-details">
                
                <!--Basic Details-->
                <div class="basic-details">
                    <div class="row clearfix">
                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <figure class="image-box"><a href="#" class="lightbox-image" title="Image Caption Here"><img src="{{ asset('storage/destinations/'.$destination->destination_image) }}" alt=""></a></figure>
                        </div>
                        <div class="info-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h4>{{ $destination->destination_name }}</h4>
                                <div class="text">{{ $destination->destination_profil }}</div>
                                <div class="price">Harga tiket masuk:<br><label for="">{!! $destination->destination_ticket_price !!}</label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Basic Details-->
                
                <!--Product Info Tabs-->
                <div class="product-info-tabs">
                    <!--Product Tabs-->
                    <div class="prod-tabs tabs-box">
                    
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#prod-spec" class="tab-btn">Fasilitas</li>
                            <li data-tab="#prod-reviews" class="tab-btn">Foto</li>
                            <li data-tab="#prod-address" class="tab-btn">Alamat/Denah</li>
                        </ul>
                        
                        <!--Tabs Container-->
                        
                        <div class="tabs-content">
                            
                            <!--Tab-->
                            <div class="tab active-tab" id="prod-spec">
                                <div class="content">
                                    <p>{!! $destination->destination_facility !!}</p>
                                </div>
                            </div>
                            <!--Tab-->
                            <div class="tab" id="prod-reviews">
                                <!--Reviews Container-->
                                <div class="row">
                                    @forelse($image as $data)
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 25px">
                                            <img style="width: 100%; height: 100%;" src="{{ asset('storage/destinations/'.$data->destination_image) }}" alt="" /></a>
                                        </div>
                                    @empty
                                        
                                    @endforelse
                                </div>
                                
                            </div>
                            

                            <div class="tab" id="prod-address">
                                <div class="content row">
                                    <iframe src="{{ $destination->destination_address }}" width="1150px" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                </div>
                <!--End Product Info Tabs-->
                
            </div>
        </div>
        
    </div>
</section>
@endsection