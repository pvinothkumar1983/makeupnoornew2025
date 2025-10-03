<a href="#" class="js-ovon-nav-toggle ovon-nav-toggle"><i></i></a>
    <aside id="ovon-aside">
        <!-- Logo -->
        <div class="ovon-logo">
            <a href="{{ route('home') }}"> <span>NOOR</span></span> </a>
        </div>
        <!-- Menu -->
        <nav class="ovon-main-menu">
            <ul>
                <li><a href="{{ route('home') }}" >Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li class="ovon-sub"><a>Services <i class="ti-angle-down"></i><span class="holder"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route ('bridal-makeup') }}">Bridal Makeup</a></li>
                        <li><a href="{{ route ('face-makeup') }}">Face Makeup</a></li>
                        <li><a href="{{ route ('fashion-makeup') }}">Fashion Makeup</a></li>
                        <li><a href="{{ route ('film-makeup') }}">Film Makeup</a></li> 
                    </ul>
                </li>
               <li class="ovon-sub">
                <a>Portfolio <i class="ti-angle-down"></i><span class="holder"></span></a>
                <ul style="display: none;">
            @if(isset($galleries) && count($galleries) > 0)
                        @foreach($galleries as $gallery)
                            <li><a href="{{ route('portfolio.show', $gallery->slug) }}">{{ $gallery->name }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#">No Portfolio Available</a></li>
                    @endif
                </ul>
            </li>

                <li><a href="#" data-scroll-nav="6">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
        <!-- Sidebar Footer -->
        <div class="ovon-footer">
            <div class="separator"></div>
            <ul>
                <li><a href="https://www.instagram.com/bridalstudionoor/"><i class="ti-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/@makeupnoor"><i class="ti-youtube"></i></a></li>
                <li><a href="https://www.facebook.com/makeupnoor"><i class="ti-facebook"></i></a></li>
            </ul>
            <p>© Copyright 2025. All right reserved.</p>

        </div>
    </aside>
