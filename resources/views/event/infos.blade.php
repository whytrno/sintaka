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
        <h2>Informasi</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Informasi</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side / Blog Classic -->
            <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="blog-classic padding-right">
      			    @forelse ($info as $data)
                    <!-- News Block Three-->
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{ route('info.shows', $data->info_id) }}"><img src="{{ asset('storage/infos/'.$data->info_image) }}" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route('info.shows', $data->info_id) }}">{{ $data->info_title }}</a></h3>
                                <div class="text">{{ strip_tags(Str::limit($data->info_desc, 150, $end=" ...")) }}</div>
                                <div class="link-box"><a href="{{ route('info.shows', $data->info_id) }}" class="theme-btn read-more">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h1 class="post-title">Acara tidak ditemukan.</h1>
                    @endforelse
                    
                </div>

                <!--Styled Pagination-->
                <ul class="styled-pagination">
                    {{ $info->links('layout.pagination') }}
                </ul>                
                <!--End Styled Pagination-->
                
            </div>
            
            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    
                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="{{ route('info.search') }}">
                            @csrf
                            <div class="form-group">
                                <input type="search" name="info_title" value="" placeholder="Enter Search Keywords" required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title"><h2>Recent News</h2></div>

                        @forelse ($info_latest as $latest)
                            <article class="post">
                                <figure class="post-thumb"><a href="{{ route('info.shows', $latest->info_id) }}"><img src="{{ asset('storage/infos/'.$latest->info_image) }}" alt=""></a></figure>
                                <div class="text"><a href="{{ route('info.shows', $latest->info_id) }}">{{ Str::limit($latest->info_title, 50, $end=" ...") }}</a></div>
                            </article>
                        @empty
                            <h1 class="post-title">Acara tidak ditemukan.</h1>
                        @endforelse

                    </div>  
                    
                </aside>
            </div>
            
        </div>
    </div>
</div>

@endsection