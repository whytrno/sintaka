@extends('layout.event')
@section('title', 'SINTAKA')
@section('content')
<!-- Services Page Section -->
<section class="services-page-section">
    <div class="auto-container" style="margin-top: 75px">
        
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <h2>We Provide Different Services In Interior Field</h2>
            <div class="text">Survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple.</div>
        </div>
        
        <div class="row clearfix">
            <!-- Service Block -->
            @forelse ($destination_get as $d)
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="commercial-interior.html"><img src="{{ Storage::url('public/assets/images/resource/service-15.jpg') }}images/resource/service-15.jpg" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="commercial-interior.html">{{ $d->destination_name }}</a></h3>
                        <div class="text">{{ $d->destination_profil }}</div>
                        <a href="commercial-interior.html" class="read-more">Read more</a>
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