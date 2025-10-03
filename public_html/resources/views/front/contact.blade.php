@section('meta-title','   ')
@section('meta-keyword','   ')
@section('meta-description','  ')

@extends('front.layout.app')
@section('content')
    <!-- Contact -->
    <section id="contact" class="contact section-padding" data-scroll-index="7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title"> <span>Location</span>
                        <h2>Contact Us</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
               <div class="col-md-6 info mb-30">
                    <p>Bridal makeup artist Noor is basically Chennai based makeup artist but visits other states even oversees for bridal makeup, with over 20 years of experience. His specialization is traditional South Indian bridal makeup and contemporary styles, catering to brides in Chennai and Coimbatore. Noor's aim is to bring each bride's vision to life, using his expertise to enhance natural beauty on their wedding day.
                    </p>
                    <ul class="list-unstyled contact-list">
                       <li> 
                            <div class="icon"><i class="bi bi-whatsapp" style="color: green;"></i></div>
                              <div class="text">
                                <p><a href="https://wa.me/919382154932" target="_blank">+91 93821 54932</a></p>
                            </div> 
                        </li>
                        <li>
                            <div class="icon"><span class="ti-headphone-alt"></span></div>
                            <div class="text">
                                <p><a href="tel:+919840579576">+91 98405 79576</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-email"></span> </div>
                            <div class="text">
                                <p><a href="mailto:makeupnoor@gmail.com">makeupnoor@gmail.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-location-pin"></span> </div>
                            <div class="text">
                                <p>#21 A, VJ Arcade, Poonamallee High Rd, near Appasamy Hospital, Arumbakkam, Chennai, Tamil Nadu 600106</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-time"></span> </div>
                            <div class="text">
                                <p>Mon-Sat: 9.30am - 9.00pm, Sunday: 10.00am - 7.00pm</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"> <span class="ti-map-alt"></span> </div>
                            <div class="text">
                                <p><a href="https://www.google.com/maps/place/Bridal+Makeup+Artist+in+Chennai+%7C+Noor/@13.0748955,80.2156821,17z/data=!3m1!4b1!4m6!3m5!1s0x3a5261447d638371:0x74348b53bae77a18!8m2!3d13.0748955!4d80.2156821!16s%2Fg%2F12qgh7c3y?entry=ttu&g_ep=EgoyMDI1MDMxNi4wIKXMDSoASAFQAw%3D%3D" target="_blank">Google Maps</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6>GET IN TOUCH</h6>
                        <form id="contact" class="row postFormcommon" action="{{ route('contact-post') }}" method="POST" >
                            @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                         <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="phonenumber" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>

                        @if (env('IS_CAPTCHA_ENABLE'))
                        <!-- Hidden input for reCAPTCHA response -->
                          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        @endif

                 <div id="loader" class="text-center d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn fl-btn" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
