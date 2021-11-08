@extends('layout.event')
@section('title', 'SINTAKA | Acara')

@section('description', $setting_get->description)
@section('no_hp', $setting_get->no_hp)
@section('address', $setting_get->address)
@section('address_url', $setting_get->address_url)
@section('email', $setting_get->email)

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ Storage::url('public/assets/images/main-slider/sangiran.jpg') }})">
    <div class="auto-container">
        <h2>Acara</h2>
        <ul class="page-breadcrumb">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>Acara</li>
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
      			    @forelse ($event as $data)
                    <!-- News Block Three-->
                    <div class="news-block-three">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="{{ route('event.show', $data->event_id) }}"><img src="{{ Storage::url('public/events/').$data->event_image }}" alt=""></a></figure>
                                <span class="date">{{ $data->event_date_start }} - {{ $data->event_date_end }}</span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route('event.show', $data->event_id) }}">{{ $data->event_name }}</a></h3>
                                <div class="text">{{ strip_tags(Str::limit($data->event_desc, 200, $end=" ...")) }}</div>
                                <div class="link-box"><a href="{{ route('event.show', $data->event_id) }}" class="theme-btn read-more">Read more</a></div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h1 class="post-title">Acara tidak ditemukan.</h1>
                    @endforelse
                    
                </div>

                <!--Styled Pagination-->
                <ul class="styled-pagination">
                    {{ $event->links('layout.pagination') }}
                </ul>                
                <!--End Styled Pagination-->
                
            </div>
            
            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar">
                    
                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="{{ route('event.search') }}">
                            @csrf
                            <div class="form-group">
                                <input type="search" name="event_name" value="" placeholder="Enter Search Keywords" required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Popular Posts -->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title"><h2>Recent News</h2></div>

                        @forelse ($event_latest as $latest)
                            <article class="post">
                                <figure class="post-thumb"><a href="{{ route('event.show', $latest->event_id) }}"><img src="{{ Storage::url('public/events/').$latest->event_image }}" alt=""></a></figure>
                                <div class="text"><a href="{{ route('event.show', $latest->event_id) }}">{{ Str::limit($latest->event_name, 50, $end=" ...") }}</a></div>
                                <div class="post-info">{{ $latest->event_date_start }} - {{ $latest->event_date_end }}</div>
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