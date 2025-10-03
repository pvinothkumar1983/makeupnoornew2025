@extends('front.layout.app')
@section('meta-title', "Bridal Makeup")
@section('meta-keywords', "Bridal Makeup")
@section('meta-description', "Bridal Makeup")

@section('content')
     <section class="ready banner-padding bg-img" data-overlay-dark="4" data-background=" {{ asset('assets/front/img/banner.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-left">
                            <div class="title animate-box" data-animate-effect="fadeInUp"> <span><a href="services.html">Services</a></span>
                                <h2>Bridal Makeup</h2>
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
                            <div class="img">
                                <img src="{{ asset('assets/front/img/services/s3.jpg') }}" class="img-fluid mb-30" alt="">
                            </div>
                            <h3>Bridal Makeup</h3>
                            <p>Bridal looks should be a true reflection of a bride’s personality and personal style. Today’s brides expect more from their wedding day salon services—more fun, more beauty, and more individuality. And why not? After all, it’s one of the most significant days of their lives!</p>
                            <p>Hiring an experienced makeup artist is essential. When it comes to your once-in-a-lifetime look, settling for a budget beautician isn’t worth the risk. Your makeup should not only look flawless in person but also translate beautifully on camera. A professional makeup artist bridges this gap, ensuring you look radiant both in real life and in photographs.</p>
                            <p>Planning your bridal look? Consider your hair and makeup carefully. Consult with your makeup artist to understand what works best for you and what’s needed to achieve the perfect look for your big day.</p>
                            <br />
                            <h2>How Do You Want to Look?</h2>
                            <p>✨ <b>Elegant & Natural:</b> A subtle makeup look that enhances your natural beauty with a flawless glow. Minimal yet striking eye makeup, glossy, fruity lips, and a soft, sophisticated hairstyle—either tong curls or sleek straight hair.</p>
                            <p>✨ <b>Traditional & Regal:</b> A classic Indian bridal look using copper, bronze, and gold tones for a rich, timeless appearance. Traditional hairstyles like the Indian choti or a Devdas-inspired look add grace and elegance.</p>
                            <p>✨ <b>Glamorous Cocktail/Party Look:</b> A chance to bring out the diva in you! Depending on your outfit, we create stunning makeup styles—from glittery, sparkly looks to bold, dramatic eyes. Whether you’re wearing a sequined corset top with a lehenga or an Indo-Western draped skirt, we ensure your hair and makeup perfectly complement your attire. Soft curls or glamorous updos complete the look.</p>
                            <p><b>At Noor Makeup Artist,</b> we take a modern and personalized approach to bridal beauty, ensuring every bride gets the stunning look she deserves. We offer professional bridal makeup services for brides, bridesmaids, and mothers of the bride.</p>
                            <p>During your <b>trial makeup session,</b> you’ll have the opportunity to share your ideal bridal look, ensuring you look nothing short of perfection on your wedding day. Basic hairstyling services are also available upon request.</p>
                            <p>On your big day, Noor will arrive at your preferred location, allowing ample time to perfect your look. You’ll also receive expert tips on maintaining your makeup so you stay fresh and confident throughout the celebration.</p>
                            <p>When Noor’s work is complete, you won’t just look beautiful—you’ll feel it too, creating timeless memories captured in stunning photographs.</p>
                            <p><b>Look breathtaking on your big day. Begin your journey beautifully.</b><br />
                            Contact Noor at <a href="mailto:makeupnoor@gmail.com" target="_blank"><b>makeupnoor@gmail.com</b></a> for a personalized quote.
                            </p>
                        </div>
                    </div>
                        <!-- gallery -->
                        <div class="row mb-30">
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g1.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g1.jpg') }}" class="g-image mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g2.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g2.jpg') }}" class="g-image mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g3.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g3.jpg') }}" class="g-image mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g4.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g4.jpg') }}" class="g-image mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g5.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g5.jpg') }}" class="g-image mx-auto d-block" alt="work-img"> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g6.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g6.jpg') }}" class="g-image mx-auto d-block" alt=""> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g25.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g25.jpg') }}" class="g-image mx-auto d-block" alt=""> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g26.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g26.jpg') }}" class="g-image mx-auto d-block" alt=""> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g27.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g27.jpg') }}" class="g-image mx-auto d-block" alt=""> </div>
                                        <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 gallery-item">
                                <a href="{{ asset('assets/front/img/services/g28.jpg') }}" title="Wedding Makeup" class="img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{ asset('assets/front/img/services/g28.jpg') }}" class="g-image mx-auto d-block" alt=""> </div>
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
                                            <li><a href="{{ route ('film-makeup') }}">Film Makeup</a></li>
                                            <li class="active"><a href="{{ route ('bridal-makeup') }}">Bridal Makeup</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                </div>
            </div>
        </section>
        @endsection
