@extends('front.layout.app')
@section('meta-title', "Fashion Makeup")
@section('meta-keywords', "Fashion Makeup")
@section('meta-description', "Fashion Makeup")

@section('content')
<section class="ready banner-padding bg-img" data-overlay-dark="4"
    data-background=" {{ asset('assets/front/img/banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-left">
                    <div class="title animate-box" data-animate-effect="fadeInUp"> <span><a
                                href="services.html">Services</a></span>
                        <h2>Fashion Makeup</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="line-vr-section">
<section id="projectpage" class="project section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <div class="img"> <img src="{{ asset('assets/front/img/services/s2.jpg') }}"
                                class="img-fluid mb-30" alt=""> </div>
                        <h3>Fashion Makeup</h3>
                        <p>At Noor Makeup Artists, we specialize in professional fashion makeup, creating stunning and
                            flawless looks for photoshoots, runway shows, and special events. With a deep understanding
                            of trends, skin tones, and styling, Noor ensures that every look is tailored to perfection.
                            Our expert techniques enhance facial features, bringing out elegance and confidence in every
                            client. Whether it's a bold, high-fashion statement or a natural, radiant glow, Noor’s
                            passion for makeup artistry guarantees a picture-perfect transformation.</p>
                        <p><b>Experience the magic of Noor’s fashion makeup—where beauty meets creativity!</b></p>
                    </div>
                </div>
                <!-- gallery -->
                <div class="row mb-30">
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g13.jpg') }}" title="Fashion Makeup" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g13.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g14.jpg') }}" title="Fashion Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g14.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g15.jpg') }}" title="Fashion Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g15.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g16.jpg') }}" title="Fashion Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g16.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g17.jpg') }}" title="Fashion Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g17.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g18.jpg') }}" title="Fashion Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g18.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-4 sidebar-side animate-box" data-animate-effect="fadeInUp">
                <aside class="sidebar blog-sidebar">
                    <div class="sidebar-widget services">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Services</h4>
                            </div>
                            <ul>
                                <li class="active"><a href="{{ route ('fashion-makeup') }}">Fashion Makeup</a></li>
                                <li><a href="{{ route ('face-makeup') }}">Face Makeup</a></li>
                                <li><a href="{{ route ('film-makeup') }}">Film Makeup</a></li>
                                <li><a href="{{ route ('bridal-makeup') }}">Bridal Makeup</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
