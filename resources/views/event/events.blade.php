@extends('layout.event')
@section('title', 'SINTAKA')
@section('content')

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container" style="margin-top: 50px">
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
                                <div class="text">{{ Str::limit($data->event_desc, 200, $end=" ...") }}</div>
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
                                <figure class="post-thumb"><a href="{{ route('event.show', $data->event_id) }}"><img src="{{ Storage::url('public/events/').$latest->event_image }}" alt=""></a></figure>
                                <div class="text"><a href="{{ route('event.show', $data->event_id) }}">{{ Str::limit($latest->event_name, 50, $end=" ...") }}</a></div>
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