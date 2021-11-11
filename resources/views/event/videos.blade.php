@extends('layout.event')
@section('title', 'SINTAKA | Video')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')

<section class="page-title" style="background-image:url({{ asset('storage/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Video</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Video</li>
        </ul>
    </div>
</section>
<section class="portfolio-page-section">
    <div class="auto-container" style="margin-top: 75px">
        <!--MixitUp Galery-->
        <div class="">
            
            <!--Filter-->
            {{-- <div class="filters clearfix">
                
                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li class="active filter" data-role="button" data-filter="all">Semua video</li>
                </ul>
                
            </div> --}}
            
            <div class="row clearfix">
                
                <!-- Gallery Item -->
                @forelse ($video as $data)
                    <div class="all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
                        {!!html_entity_decode($data->video_url)!!}
                    </div>
                @empty
                    <h1>Data tidak tersedia!</h1>
                @endforelse
            </div>
            
        </div>
    </div>
</section>

@endsection