@extends('front.layout.app')
@section('meta-title', "Face Makeup")
@section('meta-keywords', "Face Makeup")
@section('meta-description', "Face Makeup")

@section('content')
<section class="ready banner-padding bg-img" data-overlay-dark="4"
    data-background=" {{ asset('assets/front/img/banner.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-left">
                    <div class="title animate-box" data-animate-effect="fadeInUp"> <span><a
                                href="services.html">Services</a></span>
                        <h2>Face Makeup</h2>
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
                        <div class="img"> <img src="{{ asset('assets/front/img/services/s8.jpeg') }}"
                                class="img-fluid mb-30" alt=""> </div>
                        <h3>Face Makeup</h3>
                        <p>Well-known for professional <b>Face/Bridal</b> makeup services in and around Chennai, Noor
                            Makeup Artists transform you into the bride you’ve always dreamed of! With dedication and
                            passion for the makeup industry, Noor is the ideal <b>Face/Bridal</b> artist for both
                            residential and destination weddings in Chennai. His deep understanding of tradition,
                            culture, and the unique needs of every bride, combined with his immense care and passion for
                            enhancing <b>Face/Bridal</b> beauty, ensures an exquisite and flawless transformation.</p>
                        <p>At Noor, we offer a makeup trial consultation to help you choose a chic, personalized look
                            that best suits your style. During the trial session at our <b>Face/Bridal</b> studio in
                            Chennai, we guide you in selecting the perfect color palette to match your skin tone and
                            texture, bridal attire, and jewelry. We also explore different hairstyles and draping styles
                            to give you a complete makeover and achieve your dream <b>Face/Bridal</b> look.</p>
                        <p>Our <b>Face/Bridal</b> studio in Chennai is conveniently located for trial sessions, allowing
                            you to preview how you will look on your special day when you exchange your wedding vows.
                            During this session, we also provide styling, diet, and health tips to ensure that you
                            radiate beauty and confidence, making your dream wedding a reality!</p>
                        <p>At Noor Makeup Artists, we turn your fairytale wedding into reality, transforming brides into
                            stunning princesses on their most special day.</p>
                        <p><b>Plan today for that special day!</b> Contact us to achieve the perfect <b>Face/Bridal</b>
                            look—because your dream makeover begins with us<b>!</b></p>
                    </div>
                </div>
                <!-- gallery -->
                <div class="row mb-30">
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g7.jpg') }}" title="Portrait Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g7.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g8.jpg') }}" title="Portrait Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g8.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g9.jpg') }}" title="Portrait Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g9.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g10.jpg') }}" title="Portrait Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g10.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g11.jpg') }}" title="Portrait Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g11.jpg') }}"
                                        class="g-image mx-auto d-block" alt=""> </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{ asset('assets/front/img/services/g12.jpg') }}" title="Portrait Makeup"
                            class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g12.jpg') }}"
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
                                <li><a href="{{ route ('fashion-makeup') }}">Fashion Makeup</a></li>
                                <li class="active"><a href="{{ route ('face-makeup') }}">Face Makeup</a></li>
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
