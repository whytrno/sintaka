@extends('layout.event')
@section('title', 'INI TITLE')
@section('content')
<section class="portfolio-page-section">
    <div class="auto-container" style="margin-top: 75px">
        <!--MixitUp Galery-->
        <div class="">
            
            <!--Filter-->
            <div class="filters clearfix">
                
                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All Works</li>
                    <li class="filter" data-role="button" data-filter=".residential-interior">Residential Interior</li>
                    <li class="filter" data-role="button" data-filter=".interior">Commercial Interior</li>
                    <li class="filter" data-role="button" data-filter=".kitchen">Modular Kitchen</li>
                    <li class="filter" data-role="button" data-filter=".wardrobe">Modern Wardrobe</li>
                    <li class="filter" data-role="button" data-filter=".furniture">Modern Furniture</li>
                </ul>
                
            </div>
            
            <div class="row clearfix">
                
                <!-- Gallery Item -->
                <div class="gallery-item all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ asset('storage/assets/images/gallery/17.jpg') }}" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
                                        <a href="{{ asset('storage/assets/images/gallery/17.jpg') }}" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        <a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

@endsection