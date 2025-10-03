@extends('front.layout.app')
@section('meta-title', "Film Makeup")
@section('meta-keywords', "Film Makeup")
@section('meta-description', "Film Makeup")

@section('content')
<section class="ready banner-padding bg-img" data-overlay-dark="4"
    data-background=" {{ asset('assets/front/img/banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-left">
                    <div class="title animate-box" data-animate-effect="fadeInUp"> <span><a
                                href="services.html">Services</a></span>
                        <h2>Film Makeup</h2>
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
                        <div class="img"> <img src="{{ asset('assets/front/img/services/film-makup.jpg') }}"
                                class="img-fluid mb-30" alt="film-makup"> </div>
                        <h3>Noor's Film Makeup</h3>
                        <p>Noor Makeup Artists is a trusted name in the film industry, known for delivering exceptional
                            <b>cinematic makeup</b> that enhances on-screen presence. With years of experience, Noor has
                            worked with many renowned cine stars, including <b>Samantha, Namitha, Gowthami, Shruti
                                Haasan, Devayani, Roma Cheran, and many more.</b> His expertise in creating flawless,
                            camera-ready looks ensures that actors and actresses shine under the spotlight. Whether it’s
                            for movies, television, or promotional shoots, Noor’s meticulous attention to detail and
                            passion for makeup artistry bring characters to life with perfection.</p>
                        <p><b>Experience star-quality makeup with Noor—where every look is crafted for the big
                                screen!</b></p>
                    </div>
                </div>

                <!-- gallery -->
                <div class="row mb-30">
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g19.jpg') }}" title="Film Makeup" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g19.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g20.jpg') }}" title="Film Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g20.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g21.jpg') }}" title="Film Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g21.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g22.jpg') }}" title="Film Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g22.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g23.jpg') }}" title="Film Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g23.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g24.jpg') }}" title="Film Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g24.jpg') }}"
                                        class="g-image mx-auto d-block" alt="work-img"> </div>
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
                                <li><a href="{{ route ('fashion-makeup') }}">Fashion Makeup</a></li>
                                <li><a href="{{ route ('face-makeup') }}">Face Makeup</a></li>
                                <li class="active"><a href="{{ route ('film-makeup') }}">Film Makeup</a></li>
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
