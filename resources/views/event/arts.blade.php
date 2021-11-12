@extends('layout.event')
@section('title', 'SINTAKA | Kesenian')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('storage/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Kesenian</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Kesenian</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Services Page Section -->
<section class="services-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <h2>Galeri kesenian alam di Kabupaten Karanganyar</h2>
            {{-- <div class="text">Survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple.</div> --}}
        </div>
        
        <div class="row clearfix">
            <!-- Service Block -->
            @forelse ($art as $d)
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="#"><img src="{{ asset('storage/arts/'.$d->image) }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#"</a></h3>
                        <div class="text">{{ $d->name }}</div>
                    </div>
                </div>
            </div>
            @empty
                <h1>Data Kosong!</h1>
            @endforelse
            
        </div>

    </div>
</section>
@endsection