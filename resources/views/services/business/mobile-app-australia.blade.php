@extends('layouts.app')

@section('page-header')
<!-- Navbar Start -->
    <header class="site-header">

        <!-- Announcement Bar -->
        <div class="announcement-bar" id="announcementBar">
            <div class="container">
                <div class="announcement-content">
                    <span class="announcement-badge">New</span>
                    <span class="announcement-text">Special Launch Offer: Save big on AI-powered Web &amp; Mobile Applications&mdash;Offer valid for a limited time only!</span>
                </div>
                <button class="announcement-close" onclick="this.closest('#announcementBar').style.display='none'"
                    aria-label="Close announcement">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>

        <div class="nav-wrapper">
            <div class="container">
                <nav class="navbar">

                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="nav-logo">
                        <img src="{{ asset('Assets/Images/logo-main.png') }}" alt="Vetora Logo">
                    </a>

                    <!-- Mobile Toggle -->
                    <button class="nav-toggle" aria-label="Toggle Menu">
                        <i class="bi bi-list"></i>
                    </button>

                    <!-- Menu -->
                    <ul class="nav-menu">
                        <li><a href="#hv2">Home</a></li>
                        {{-- <li><a href="#wdm">About Us</a></li> --}}
<li><a href="#mpfSection">Portfolio</a></li>
                        <li><a href="#ctaf">Contact Us</a></li>

                        <!-- Mobile CTA -->
                        <li class="mobile-cta">
                            <a href="#ctaf" class="btn btn-gradiant btn-md">
                                Get Started <i class="bi bi-arrow-right"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Desktop CTA -->
                    <a href="#ctaf" class="btn btn-gradiant btn-md nav-btn desktop-btn">
                        Get Started <i class="bi bi-arrow-right"></i>
                    </a>

                </nav>
            </div>
        </div>

    </header>
<!-- Navbar End -->
@endsection

@section('meta')
    <title>Mobile App Development Company | iOS & Android App Development | Melbourne | Vetora Solutions</title>

    {{-- Fonts for hero-v2 --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/mobile-app.css') }}?v=2.9.4">
@endsection

@section('content')
<div class="ma-page">

    {{-- ============================================================
         1. HERO V2  dark agency hero with spotlight grid, glassmorphism
            form card, text-flip CTA, and logo marquee
         ============================================================ --}}
    <section class="hv2" id="hv2" aria-label="Hero">

        {{-- Cursor-spotlight grid --}}
        <div class="hv2__grid" aria-hidden="true"></div>
        {{-- Ambient gradient overlay --}}
        <div class="hv2__overlay" aria-hidden="true"></div>

        {{-- â”€â”€ TWO-COLUMN INNER â”€â”€ --}}
        <div class="hv2__inner">

            {{-- â”€â”€ LEFT â”€â”€ --}}
            <div class="hv2__left">

                {{-- Badge --}}
                <div class="hv2__badge animate-hv2" data-hv2-delay="0">
                    <span class="hv2__badge-icon" aria-hidden="true"><i class="bi bi-star-fill"></i></span>
                    Leading App Development Company in Melbourne
                </div>

                {{-- H1 --}}
                <h1 class="hv2__title animate-hv2" data-hv2-delay="120">
                    Mobile App Development Company | iOS &amp; Android App Development | Melbourne
                </h1>

                {{-- Subheading --}}
                <p class="hv2__sub animate-hv2" data-hv2-delay="240">
                    Vetora Solutions is a leading mobile app development company in Melbourne, helping Australian businesses build powerful, scalable, and user-focused mobile applications. We partner with startups and enterprises to deliver iOS, Android, and cross-platform apps that perform reliably and drive real business growth.
                </p>

                {{-- App-store row --}}
                <div class="hv2__stores animate-hv2" data-hv2-delay="360">
                    <span class="hv2__stores-label">List your app on</span>
                    <span class="hv2__store-pill">
                        <i class="bi bi-google-play" aria-hidden="true"></i> Google Play Store
                    </span>
                    <span class="hv2__store-pill">
                        <i class="bi bi-apple" aria-hidden="true"></i> Apple App Store
                    </span>
                </div>

                {{-- CTA  text-flip + spinning glow border + particles --}}
                <div class="hv2__cta-wrap animate-hv2" data-hv2-delay="480">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal"
                       class="hv2__btn" aria-label="Get a Free Consultation">
                        {{-- Hover glow wash --}}
                        <span class="hv2__btn-glow" aria-hidden="true"></span>
                        {{-- Floating particles --}}
                        <span class="hv2__btn-particles" aria-hidden="true">
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                        </span>
                        {{-- Text flip --}}
                        <span class="hv2__btn-text">
                            <span class="hv2__btn-default">Get a Free Consultation</span>
                            <span class="hv2__btn-alt"    aria-hidden="true">Get a Free Consultation</span>
                        </span>
                        {{-- Arrow --}}
                        <span class="hv2__btn-arrow" aria-hidden="true">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                </div>

            </div>{{-- /.hv2__left --}}

            {{-- â”€â”€ RIGHT  GLASSMORPHISM FORM CARD â”€â”€ --}}
            <div class="hv2__right animate-hv2" data-hv2-delay="160">
                <div class="hv2__form-card">

                    {{-- Decorative corner lines --}}
                    <span class="hv2__corner hv2__corner--tl" aria-hidden="true"></span>
                    <span class="hv2__corner hv2__corner--tr" aria-hidden="true"></span>
                    <span class="hv2__corner hv2__corner--bl" aria-hidden="true"></span>
                    <span class="hv2__corner hv2__corner--br" aria-hidden="true"></span>

                    <h3 class="hv2__form-title">Book a Free Consultation</h3>
                    <p class="hv2__form-sub">Share your vision—we're ready to bring it to life.</p>

                    @include('common.contact-form')

                </div>{{-- /.hv2__form-card --}}
            </div>{{-- /.hv2__right --}}

        </div>{{-- /.hv2__inner --}}

        {{-- â”€â”€ LOGO MARQUEE â”€â”€ --}}
        <div class="hv2__marquee-wrap">
            <div class="hv2__marquee" aria-hidden="true">
                <div class="hv2__marquee-track" id="hv2MarqueeTrack">
                    {{-- Client logos (actual Vetora clients) --}}
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/ateam.webp') }}" alt="ATeam">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/capso.webp') }}" alt="Capso Vision">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/dots.webp') }}" alt="Dots">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/abi.webp') }}" alt="Abi">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/WFB.webp') }}" alt="WFB Baird">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/qrooze.webp') }}" alt="Qrooze">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/allswell.webp') }}" alt="Allswell">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/allo.webp') }}" alt="Allo Taxi">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/home.webp') }}" alt="Home">
                    </div>
                    <div class="hv2__logo-item">
                        <img src="{{ asset('Assets/Images/Mobile-App/clients-2/ganesh.webp') }}" alt="Ganesh">
                    </div>
                </div>
            </div>
        </div>

    </section>{{-- /.hv2 --}}


    {{-- ============================================================
         2. WHY DESIGN MATTERS / ABOUT
         The section sticks (CSS position:sticky) inside .wdm-pin while the
         video expands  native stickiness has no engage-lag, so there is no
         scroll jump (unlike a JS pin). .wdm-pin's extra height is the scrub
         track. On mobile both collapse to normal flow (see CSS).
         ============================================================ --}}
    <div class="wdm-pin">
    <section class="wdm" id="wdm">
        <div class="wdm__inner">

            {{-- â”€â”€ LEFT: ANIMATED STAT CAROUSEL â”€â”€ --}}
            <div class="wdm__left">

                <div class="wdm__label-wrap wdm-reveal">
                    <h3 class="wdm__label">Why Your Mobile App Experience Matters</h3>
                    <div class="wdm__divider" aria-hidden="true"></div>
                </div>

                <div class="wdm__stat-wrap">
                    <div class="wdm__slides" id="wdmSlides" aria-live="polite">

                        <div class="wdm__slide active" data-target="88">
                            <div class="wdm__pct-row" aria-label="88%">
                                <span class="wdm__num" aria-hidden="true">0</span>
                                <span class="wdm__sym" aria-hidden="true">%</span>
                            </div>
                            <p class="wdm__caption">Users are less likely to return after a poor mobile app experience.</p>
                        </div>

                        <div class="wdm__slide" data-target="53">
                            <div class="wdm__pct-row" aria-label="53%">
                                <span class="wdm__num" aria-hidden="true">0</span>
                                <span class="wdm__sym" aria-hidden="true">%</span>
                            </div>
                            <p class="wdm__caption">Users abandon a mobile app if it takes longer than 3 seconds to load.</p>
                        </div>

                        <div class="wdm__slide" data-target="94">
                            <div class="wdm__pct-row" aria-label="94%">
                                <span class="wdm__num" aria-hidden="true">0</span>
                                <span class="wdm__sym" aria-hidden="true">%</span>
                            </div>
                            <p class="wdm__caption">Users judge an app's credibility based on its design and usability.</p>
                        </div>

                        <div class="wdm__slide" data-target="90">
                            <div class="wdm__pct-row" aria-label="90%">
                                <span class="wdm__num" aria-hidden="true">0</span>
                                <span class="wdm__sym" aria-hidden="true">%</span>
                            </div>
                            <p class="wdm__caption">Of mobile internet time is spent inside apps rather than websites.</p>
                        </div>

                    </div>{{-- /.wdm__slides --}}

                    <div class="wdm__controls wdm-reveal" data-wdm-delay="200">
                        <button class="wdm__arr" id="wdmPrev" aria-label="Previous stat">
                            <i class="bi bi-arrow-left" aria-hidden="true"></i>
                        </button>
                        <button class="wdm__arr" id="wdmNext" aria-label="Next stat">
                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>{{-- /.wdm__left --}}

            {{-- â”€â”€ RIGHT: ABOUT CONTENT â”€â”€ --}}
            <div class="wdm__right">

                <div class="wdm__pill wdm-reveal" data-wdm-delay="0">
                    <span class="wdm__pill-num" aria-hidden="true">1</span>
                    About Vetora
                </div>

                <h2 class="wdm__headline wdm-reveal" data-wdm-delay="100">
                    Vetora Solutions combines expert UX design with expert engineering to deliver
                    high-performance, growth-ready mobile <span class="wdm__accent">Apps!</span>
                </h2>

                <div class="wdm__cta-video-row">
                <div class="wdm__video-stage">
                    <div class="wdm__video-morph" id="wdmVideoMorph">
                        <video class="wdm__video" autoplay muted loop playsinline>
                        <source src="{{ asset('Assets/Images/Mobile-App/about-us.webm') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="wdm__cta-row">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="hv2__btn" aria-label="Know more about Vetora">
                        <span class="hv2__btn-glow" aria-hidden="true"></span>
                        <span class="hv2__btn-particles" aria-hidden="true">
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                        </span>
                        <span class="hv2__btn-text">
                            <span class="hv2__btn-default">Know More</span>
                            <span class="hv2__btn-alt" aria-hidden="true">Know More</span>
                        </span>
                        <span class="hv2__btn-arrow" aria-hidden="true">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                </div>

                </div>

                

            </div>{{-- /.wdm__right --}}

        </div>{{-- /.wdm__inner --}}

    </section>{{-- /.wdm --}}
    </div>{{-- /.wdm-pin --}}





    {{-- ============================================================
         3. APP DEVELOPMENT SERVICES
         Asymmetric 3-card grid with cursor-follow glow borders.
         BG images: CDN  swap to local assets if needed.
         ============================================================ --}}
    <section class="adsvc" id="adsvc" aria-label="App Development Services">
        <div class="adsvc__wrap">

            {{-- â”€â”€ SECTION HEADER â”€â”€ --}}
            <div class="adsvc__header">

                <div class="adsvc__header-left">
                    <div class="adsvc__pill adsvc-reveal">
                        <span class="adsvc__pill-num" aria-hidden="true">2</span>
                        App Development services
                    </div>
                    <h2 class="adsvc__headline adsvc-reveal" data-adsvc-delay="80">
                        Backed by a talented in-house team of mobile app developers
                        in Melbourne, <span class="adsvc__accent">Vetora Solutions</span>
                        offers a complete range of mobile app development services tailored to your business needs.
                    </h2>
                </div>

                <div class="adsvc__header-right adsvc-reveal" data-adsvc-delay="160">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal"
                       class="hv2__btn" aria-label="Start a project">
                        <span class="hv2__btn-glow"      aria-hidden="true"></span>
                        <span class="hv2__btn-particles" aria-hidden="true">
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                            <span class="hv2__particle"></span>
                        </span>
                        <span class="hv2__btn-text">
                            <span class="hv2__btn-default">Start a project</span>
                            <span class="hv2__btn-alt" aria-hidden="true">Start a project</span>
                        </span>
                        <span class="hv2__btn-arrow" aria-hidden="true">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </a>
                </div>

            </div>{{-- /.adsvc__header --}}

            {{-- â”€â”€ CARD GRID â”€â”€ --}}
            <div class="adsvc__grid">

                {{-- Card 1: Android  full-width top row --}}
                <article class="adsvc__card adsvc-reveal" data-adsvc-delay="0" glow-border="wrapper">
                    <div class="adsvc__card-inner" glow-border="card"
                         style="background-image:url('Assets/Images/Mobile-App/Android-app-development.webp')">
                        <div class="adsvc__card-overlay" aria-hidden="true"></div>  
                        <h3 class="adsvc__card-title">Android App Development</h3>
                        <p class="adsvc__card-desc">We develop high-performance Android applications designed to work seamlessly across the full range of Android devices, delivering smooth and engaging user experiences that meet the expectations of today's mobile-first users.</p>
                    </div>
                </article>

                {{-- Card 2: iOS  bottom-left, taller --}}
                <article class="adsvc__card adsvc-reveal" data-adsvc-delay="80" glow-border="wrapper">
                    <div class="adsvc__card-inner" glow-border="card"
                         style="background-image:url('Assets/Images/Mobile-App/ios-app-development.webp')">
                        <div class="adsvc__card-overlay" aria-hidden="true"></div>
                        <h3 class="adsvc__card-title">iOS App Development</h3>
                        <p class="adsvc__card-desc">Our team builds native iOS applications that follow Apple's design standards and deliver smooth, intuitive navigation across all Apple devices. We develop apps that combine refined aesthetics with high performance to keep your users engaged.</p>
                    </div>
                </article>

                {{-- Card 3: Flutter  bottom-right, shorter, top-aligned --}}
                <article class="adsvc__card adsvc-reveal" data-adsvc-delay="160" glow-border="wrapper">
                    <div class="adsvc__card-inner" glow-border="card"
                         style="background-image:url('Assets/Images/Mobile-App/flutter-app-development.webp')">
                        <div class="adsvc__card-overlay" aria-hidden="true"></div>
                        <h3 class="adsvc__card-title">Flutter Mobile App Development</h3>
                        <p class="adsvc__card-desc">We build scalable cross-platform mobile apps using Flutter, reducing development time and cost while ensuring premium quality for both Android and iOS from a single codebase.</p>
                    </div>
                </article>

            </div>{{-- /.adsvc__grid --}}

        </div>{{-- /.adsvc__wrap --}}
    </section>{{-- /.adsvc --}}

    {{-- ============================================================
         4. CTA FORM  Hire Vetora Solutions
         Single full-width card; bg image from hero section.
         Form: reuses @include('common.contact-form') via hv2__form-card
         dark-override scope so all field styles are inherited for free.
         ============================================================ --}}
    <section class="ctaf pt-0" id="ctaf" aria-label="Hire Vetora Solutions">
        <div class="ctaf__outer">

            <div class="ctaf__card ctaf-reveal">

                {{-- Corner brackets (reuse hv2__corner styles) --}}
                <span class="ctaf__corner ctaf__corner--tl" aria-hidden="true"></span>
                <span class="ctaf__corner ctaf__corner--tr" aria-hidden="true"></span>
                <span class="ctaf__corner ctaf__corner--bl" aria-hidden="true"></span>
                <span class="ctaf__corner ctaf__corner--br" aria-hidden="true"></span>

                <div class="ctaf__inner">

                    {{-- â”€â”€ LEFT â”€â”€ --}}
                    <div class="ctaf__left">

                        <h2 class="ctaf__headline">
                            Hire Melbourne's Best App Development Agency trusted by
                            Melbourne's Top Businesses.
                        </h2>

                        <p class="ctaf__sub">
                            Start your app development journey with Vetora Solutions with a
                            free consulting call and get a clear roadmap of building your
                            mobile app!
                        </p>

                        <ul class="ctaf__features">
                            <li class="ctaf__feat">
                                <span class="ctaf__feat-icon" aria-hidden="true">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>
                                Melbourne based Office
                            </li>
                            <li class="ctaf__feat">
                                <span class="ctaf__feat-icon" aria-hidden="true">
                                    <i class="bi bi-puzzle-fill"></i>
                                </span>
                                Custom solutions for every idea
                            </li>
                            <li class="ctaf__feat">
                                <span class="ctaf__feat-icon" aria-hidden="true">
                                    <i class="bi bi-headset"></i>
                                </span>
                                End-to-End Support from First Call to Go-Live
                            </li>
                        </ul>

                    </div>{{-- /.ctaf__left --}}

                    {{-- â”€â”€ RIGHT  wraps existing contact-form with hv2__form-card
                         scope so all dark-theme field overrides apply automatically â”€â”€ --}}
                    <div class="ctaf__right">
                        <div class="hv2__form-card ctaf__form-inner">
                            {{-- Corner brackets  white to match reference --}}
                            <span class="ctaf__fc-corner ctaf__fc-corner--tl" aria-hidden="true"></span>
                            <span class="ctaf__fc-corner ctaf__fc-corner--tr" aria-hidden="true"></span>
                            <span class="ctaf__fc-corner ctaf__fc-corner--bl" aria-hidden="true"></span>
                            <span class="ctaf__fc-corner ctaf__fc-corner--br" aria-hidden="true"></span>
                            <h3 class="hv2__form-title">Book a Free Consultation</h3>
                            <p class="hv2__form-sub">Share your vision—we're ready to bring it to life.</p>
                            @include('common.contact-form')
                        </div>
                    </div>{{-- /.ctaf__right --}}

                </div>{{-- /.ctaf__inner --}}

            </div>{{-- /.ctaf__card --}}

        </div>{{-- /.ctaf__outer --}}
    </section>{{-- /.ctaf --}}

    {{-- ============================================================
         5. HOW WE WORK v2  Pinned horizontal-scroll timeline
         .hww2-outer : tall scroll-room (height = 100vh + row overflow).
         .hww2       : sticky 100vh panel, clips overflow.
         .hww2__hd   : top-left pill + H2  never translated.
         .hww2__row  : full-height flex row wider than viewport;
                       GSAP translates it left as the user scrolls.
         .hww2__track: absolute bar running the full row width;
                       .hww2__fill grows leftâ†'right with scroll progress.
         ============================================================ --}}
    <div class="hww2-outer" id="hww2Outer">
    <section class="hww2" id="hww2Section" aria-label="How We Work">

        <!-- Fixed top-left header (never translates) -->
        <div class="hww2__hd">
            <div class="hww2__pill hww2-reveal">
                <span class="hww2__pill-num" aria-hidden="true">3</span>
                How we work
            </div>
            <h2 class="hww2__h2 hww2-reveal" data-hww2-delay="90">
                Smooth Journey from Idea to Launch.
            </h2>
        </div>

        <!-- Progress bar track (fixed on screen, does NOT translate with the row) -->
        <div class="hww2__track" aria-hidden="true">
            <div class="hww2__fill" id="hww2Fill"></div>
        </div>

        <!-- Horizontally translating row -->
        <div class="hww2__row" id="hww2Row">

            <!-- Left spacer -->
            <div class="hww2__spacer" aria-hidden="true"></div>

            <!-- Step 1 -->
            <div class="hww2__step">
                <div class="hww2__step-top">
                    <span class="hww2__step-num">01</span>
                    <h3 class="hww2__step-title">Research & Discovery</h3>
                </div>
                <div class="hww2__step-marker" aria-hidden="true"></div>
                <div class="hww2__step-bot">
                    <p class="hww2__step-body">At Vetora Solutions, every project begins with a thorough research and discovery phase. We take time to understand your goals, analyse your target audience, and identify the problem your mobile app needs to solve — ensuring every decision that follows is grounded in insight and aligned with your business objectives.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="hww2__step">
                <div class="hww2__step-top">
                    <span class="hww2__step-num">02</span>
                    <h3 class="hww2__step-title">User Flows</h3>
                </div>
                <div class="hww2__step-marker" aria-hidden="true"></div>
                <div class="hww2__step-bot">
                    <p class="hww2__step-body">Once the concept is validated, we create mobile-first wireframes and detailed user flow maps. We design intuitive navigation paths that feel natural on both iOS and Android, ensuring a seamless experience before any development resources are committed.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="hww2__step">
                <div class="hww2__step-top">
                    <span class="hww2__step-num">03</span>
                    <h3 class="hww2__step-title">UI/UX Design & Prototype</h3>
                </div>
                <div class="hww2__step-marker" aria-hidden="true"></div>
                <div class="hww2__step-bot">
                    <p class="hww2__step-body">Our UI/UX team builds polished, high-converting app interfaces and interactive prototypes. We validate the look, feel, and user journey with real feedback before development begins, reducing costly revisions later.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="hww2__step">
                <div class="hww2__step-top">
                    <span class="hww2__step-num">04</span>
                    <h3 class="hww2__step-title">Development</h3>
                </div>
                <div class="hww2__step-marker" aria-hidden="true"></div>
                <div class="hww2__step-bot">
                    <p class="hww2__step-body">Our engineers build your mobile application using native iOS or Android code, or Flutter for cross-platform efficiency. We follow agile development practices and collaborate continuously with clients to ensure the app evolves in line with business needs.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="hww2__step">
                <div class="hww2__step-top">
                    <span class="hww2__step-num">05</span>
                    <h3 class="hww2__step-title">Testing & Launch</h3>
                </div>
                <div class="hww2__step-marker" aria-hidden="true"></div>
                <div class="hww2__step-bot">
                    <p class="hww2__step-body">Our quality assurance process ensures your app performs reliably and securely across real devices. We manage the complete App Store and Google Play submission process, and post-launch, we monitor performance, apply regular updates, and implement improvements to keep your app competitive.</p>
                </div>
            </div>

            <!-- Right tail -->
            <div class="hww2__tail" aria-hidden="true"></div>

        </div><!-- /.hww2__row -->

    </section><!-- /.hww2 -->
    </div><!-- /.hww2-outer -->

    {{-- ============================================================
         4. OUR PORTFOLIO
         ============================================================ --}}
    <section class="mpf" id="mpfSection">
        <div class="mpf__wrap">

            <div class="mpf__hd mpf-reveal">
                <div class="mpf__pill">
                    <span class="mpf__pill-num">4</span>
                    <span class="mpf__pill-text">Our Portfolio</span>
                </div>
                <h2 class="mpf__h2">When we worked with ambitious businesses across Australia and beyond, we delivered top-notch mobile apps and digital solutions built for scale and business impact.</h2>
            </div>

            <div class="mpf__projects">

                {{-- Project 1: Holiday Inn --}}
                <article class="mpf__block" data-mpf-idx="0">
                    <div class="mpf__card">
                        <img src="Assets/Images/Mobile-App/Portfolio/bet-mobility.webp" alt="BET Mobility">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="mpf__collage-cta hv2__btn" aria-label="Learn more about BET Mobility">
                            <span class="hv2__btn-glow" aria-hidden="true"></span>
                            <span class="hv2__btn-particles" aria-hidden="true">
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                            </span>
                            <span class="hv2__btn-text">
                                <span class="hv2__btn-default">Learn More</span>
                                <span class="hv2__btn-alt" aria-hidden="true">Learn More</span>
                            </span>
                            <span class="hv2__btn-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="mpf__info mpf__info--split">
                        <div class="mpf__info-l">
                            <h3 class="mpf__title mpf-reveal">BET Mobility</h3>
                            <div class="mpf__tags mpf-reveal" data-mpf-delay="80">
                                <span class="mpf__tag">Flutter App Development</span>
                                <span class="mpf__tag">API Integration</span>
                                <span class="mpf__tag">UI/UX Design</span>
                            </div>
                        </div>
                        <div class="mpf__info-r">
                            <p class="mpf__desc mpf-reveal" data-mpf-delay="120">BET Mobility required a comprehensive mobile platform to streamline corporate travel and utility management. We built a Flutter app integrating MakeMy Trip API and MyGate API, delivering a 90% adoption rate within six months and a 35% revenue growth for the client.</p>
                        </div>
                    </div>
                </article>

                {{-- Projects 2 & 3: Healthy Fit + Gensol  side by side --}}
                <div class="mpf__row">

                    <article class="mpf__block mpf__block--col" data-mpf-idx="1">
                        <div class="mpf__card">
                            <img src="Assets/Images/Mobile-App/Portfolio/Dots.webp" alt="Dots">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="mpf__collage-cta hv2__btn" aria-label="Learn more about Dots">
                                <span class="hv2__btn-glow" aria-hidden="true"></span>
                                <span class="hv2__btn-particles" aria-hidden="true">
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                </span>
                                <span class="hv2__btn-text">
                                    <span class="hv2__btn-default">Learn More</span>
                                    <span class="hv2__btn-alt" aria-hidden="true">Learn More</span>
                                </span>
                                <span class="hv2__btn-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                            </a>
                        </div>
                        <div class="mpf__info mpf__info--col">
                            <h3 class="mpf__title mpf-reveal">Dots</h3>
                            <div class="mpf__tags mpf-reveal" data-mpf-delay="80">
                                <span class="mpf__tag">Flutter App Development</span>
                                <span class="mpf__tag">React Web Development</span>
                                <span class="mpf__tag">Backend Engineering</span>
                            </div>
                            <p class="mpf__desc mpf-reveal" data-mpf-delay="120">A location-based service marketplace app connecting users with service providers nearby. Built with Flutter for mobile and React for web, featuring real-time data synchronisation, in-app contact, and service tracking.</p>
                        </div>
                    </article>

                    <article class="mpf__block mpf__block--col" data-mpf-idx="2">
                        <div class="mpf__card">
                            <img src="Assets/Images/Mobile-App/Portfolio/abhi-hospital.webp" alt="Abhi SK Hospital">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="mpf__collage-cta hv2__btn" aria-label="Learn more about Abhi SK Hospital">
                                <span class="hv2__btn-glow" aria-hidden="true"></span>
                                <span class="hv2__btn-particles" aria-hidden="true">
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                    <span class="hv2__particle"></span>
                                </span>
                                <span class="hv2__btn-text">
                                    <span class="hv2__btn-default">Learn More</span>
                                    <span class="hv2__btn-alt" aria-hidden="true">Learn More</span>
                                </span>
                                <span class="hv2__btn-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                            </a>
                        </div>
                        <div class="mpf__info mpf__info--col">
                            <h3 class="mpf__title mpf-reveal">Abhi SK Hospital</h3>
                            <div class="mpf__tags mpf-reveal" data-mpf-delay="80">
                                <span class="mpf__tag">AI Development</span>
                                <span class="mpf__tag">Flutter Mobile App</span>
                                <span class="mpf__tag">Hospital Management System</span>
                            </div>
                            <p class="mpf__desc mpf-reveal" data-mpf-delay="120">An AI-powered healthcare platform featuring the Sentinel Scribe AI medical documentation system. Includes appointment scheduling, patient records, prescription handling, and virtual consultations across Flutter mobile apps for patients and doctors.</p>
                        </div>
                    </article>

                </div>{{-- /.mpf__row --}}

                {{-- Project 4: Sentra World --}}
                <article class="mpf__block" data-mpf-idx="3">
                    <div class="mpf__card">
                        <img src="Assets/Images/Mobile-App/Portfolio/ganesh-electricals.webp" alt="Ganesh Electricals">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="mpf__collage-cta hv2__btn" aria-label="Learn more about Ganesh Electricals">
                            <span class="hv2__btn-glow" aria-hidden="true"></span>
                            <span class="hv2__btn-particles" aria-hidden="true">
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                                <span class="hv2__particle"></span>
                            </span>
                            <span class="hv2__btn-text">
                                <span class="hv2__btn-default">Learn More</span>
                                <span class="hv2__btn-alt" aria-hidden="true">Learn More</span>
                            </span>
                            <span class="hv2__btn-arrow" aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="mpf__info mpf__info--split">
                        <div class="mpf__info-l">
                            <h3 class="mpf__title mpf-reveal">Ganesh Electricals</h3>
                            <div class="mpf__tags mpf-reveal" data-mpf-delay="80">
                                <span class="mpf__tag">Custom Software Development</span>
                                <span class="mpf__tag">AI Integration</span>
                                <span class="mpf__tag">Cloud Platform</span>
                            </div>
                        </div>
                        <div class="mpf__info-r">
                            <p class="mpf__desc mpf-reveal" data-mpf-delay="120">A secure, cloud-based AI-powered procurement and billing platform that centralizes operations and automates workflows. Integrates Agentic AI for workflow monitoring and Generative AI for financial insights, accelerating approvals and improving profitability.</p>
                        </div>
                    </div>
                </article>

            </div>{{-- /.mpf__projects --}}

        </div>{{-- /.mpf__wrap --}}
    </section>{{-- /.mpf --}}

    {{-- ============================================================
         5. WHY CHOOSE US  (.wcus)
         Alpine.js  IntersectionObserver  pure CSS arc
         Requires: <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
         ============================================================ --}}

    <section
        class="wcus"
        id="wcusSection"
        aria-labelledby="wcus-heading"
        x-data="{
            active: 0,
            pulse: false,
            _timer: null,
            features: [
                { num:'1', label:'Operational Efficiency',           icon:'bi-lightning-charge', desc:'We design mobile applications that simplify complex workflows and improve business productivity. Our focus is on building cost-effective, high-performance apps that enhance efficiency and deliver measurable ROI for Melbourne businesses.' },
                { num:'2', label:'Trusted by Australian Businesses',  icon:'bi-people',           desc:'Vetora Solutions has partnered with businesses across Melbourne and Australia to deliver mobile apps that perform reliably, scale confidently, and create real business impact. Our cross-industry experience means we understand what it takes to build apps that work in the real world.' },
                { num:'3', label:'Built for Innovation',              icon:'bi-cpu',              desc:'We integrate modern technologies such as AI, machine learning, real-time data, and cloud infrastructure to create intelligent, future-ready mobile applications. Our apps are designed to scale seamlessly as your user base and business requirements grow.' },
                { num:'4', label:'Melbourne-Based, Global Standards', icon:'bi-geo-alt',          desc:'We are a Melbourne-based technology company that brings global best practices to every mobile app project. Our team understands the Australian market and regulatory environment while delivering solutions built to international quality standards.' },
                { num:'5', label:'End-to-End Ownership',              icon:'bi-shield-check',     desc:'From the first consultation to App Store launch and beyond, Vetora manages your entire app development lifecycle. We are a reliable long-term technology partner, not just a build-and-hand-off agency.' },
                { num:'6', label:'Clear Communication',               icon:'bi-chat-dots',        desc:'We keep you fully informed at every stage. Regular progress updates, transparent workflows, and a dedicated point of contact mean you always know what is happening with your app, no surprises, no ambiguity.' }
            ],
            pick(i) { this.active = i; this.pulse = false; this.$nextTick(() => { this.pulse = true; }); },
            next()  { this.pick((this.active + 1) % this.features.length); },
            start() { this._timer = setInterval(() => this.next(), 4500); },
            stop()  { clearInterval(this._timer); },
            nav(e, i) {
                const n = this.features.length;
                if (e.key === 'ArrowRight') { e.preventDefault(); this.stop(); this.pick((i+1)%n); this.start(); this.$nextTick(()=>this.$el.querySelectorAll('[role=tab]')[this.active].focus()); }
                if (e.key === 'ArrowLeft')  { e.preventDefault(); this.stop(); this.pick((i-1+n)%n); this.start(); this.$nextTick(()=>this.$el.querySelectorAll('[role=tab]')[this.active].focus()); }
            }
        }"
        x-init="start()"
    >
        <div class="wcus__wrap">

            {{-- Badge --}}
            <div class="wcus__badge-row">
                <div class="mpf__pill">
                    <span class="mpf__pill-num">5</span>
                    <span class="mpf__pill-text">Why Choose Us?</span>
                </div>
            </div>

            {{-- Heading --}}
            <h2 class="wcus__h2" id="wcus-heading">
                Among countless agencies,<br>why choose us?
            </h2>

            {{-- Semicircle arc --}}
            <div class="wcus__arc-outer" aria-hidden="true">
                <div class="wcus__arc">
                    <div class="wcus__icon" :class="{ 'wcus__icon--pulse': pulse }" @animationend="pulse = false">
                        <div class="wcus__icon-ring"></div>
                        <div class="wcus__icon-ring-2"></div>
                        <div class="wcus__icon-main-wrap">
                            <template x-for="(f, i) in features" :key="i">
                                <i class="wcus__icon-main bi"
                                   :class="f.icon"
                                   x-show="active === i"
                                   x-transition:enter="wcus-icon-e"
                                   x-transition:enter-start="wcus-icon-e-from"
                                   x-transition:enter-end="wcus-icon-e-to"
                                   x-transition:leave="wcus-icon-l"
                                   x-transition:leave-start="wcus-icon-l-from"
                                   x-transition:leave-end="wcus-icon-l-to">
                                </i>
                            </template>
                        </div>
                        <i class="wcus__icon-gear bi bi-gear-fill"></i>
                    </div>
                </div>
            </div>

            {{-- Description panel --}}
            <div class="wcus__desc-wrap" role="tabpanel" id="wcus-panel" :aria-label="features[active].label">
                <template x-for="(f, i) in features" :key="i">
                    <p class="wcus__desc"
                       x-show="active === i"
                       x-transition:enter-start="opacity-0"
                       x-transition:enter-end="opacity-1"
                       x-transition:leave-start="opacity-1"
                       x-transition:leave-end="opacity-0"
                       x-transition.duration.350ms
                       x-text="f.desc">
                    </p>
                </template>
            </div>

            {{-- Feature pills --}}
            <div class="wcus__pills" role="tablist" aria-label="Why choose us features" x-ref="pillList"
                 @mouseenter="stop()" @mouseleave="start()" @focusin="stop()" @focusout="start()">
                <template x-for="(f, i) in features" :key="i">
                    <button
                        class="wcus__pill"
                        :class="{ 'wcus__pill--on': active === i }"
                        role="tab"
                        :aria-selected="active === i"
                        :aria-controls="'wcus-panel'"
                        :tabindex="active === i ? 0 : -1"
                        :style="'transition-delay:' + (i * 60) + 'ms'"
                        @click="stop(); pick(i); start()"
                        @keydown="nav($event, i)"
                    >
                        <span class="wcus__pill-num" x-text="f.num" aria-hidden="true"></span>
                        <span x-text="f.label"></span>
                    </button>
                </template>
            </div>

        </div>
    </section>{{-- /.wcus --}}

    <script>
    /* wcus  IntersectionObserver scroll reveal */
    (function(){
        var s = document.getElementById('wcusSection');
        if(!s) return;
        new IntersectionObserver(function(entries, obs){
            if(entries[0].isIntersecting){ s.classList.add('wcus--in'); obs.disconnect(); }
        },{ threshold:.15 }).observe(s);
    })();
    </script>

    {{-- ============================================================
         6. TESTIMONIALS  (.tst)
         Owl Carousel  3 desktop / 2 tablet / 1 mobile
         ============================================================ --}}

    @php
    $testimonials = [
        [
            'name'     => 'Puneeth',
            'position' => 'Business Analyst, Qrooze',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Seamless Platform for Scalable Operations',
            'review'   => 'Vetora Solutions helped us scale our operations with a powerful and efficient platform. We can now manage more vehicles, drivers, and bookings seamlessly. The positive impact on our business growth has been significant and measurable.',
        ],
        [
            'name'     => 'B. Kumareson',
            'position' => 'Operations Manager, Ganesh Electricals',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Tailored Workflow Automation That Delivers',
            'review'   => 'Vetora Solutions quickly understood our business needs and delivered a solution tailored precisely to our workflow. Their smart automation improved efficiency, strengthened financial control, and accelerated approvals across the team.',
        ],
        [
            'name'     => 'Addo',
            'position' => 'Founder, Home Runners',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Our Vision Brought to Life',
            'review'   => 'Vetora Solutions brought HomeRunners to life exactly as we envisioned. Their seamless platform and responsive ongoing support have greatly improved our operational efficiency and our customer\'s experience with our service.',
        ],
        [
            'name'     => 'Dr. Nanditha R',
            'position' => 'Chief Doctor & Director, Abhi SK Hospital',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Efficient AI-Powered Hospital Management',
            'review'   => 'Vetora Solutions developed a highly efficient and secure AI-powered system for our hospital. It streamlined our workflow, reduced manual effort, and significantly improved patient management. We are extremely satisfied with their professionalism and work quality.',
        ],
        [
            'name'     => 'Durgadevi',
            'position' => 'Founder, Allswell Counselling Therapy',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Outstanding Quality and Consistent Support',
            'review'   => 'Vetora Solutions helped us reach more clients with a professional website and mobile app. Their expert team delivered outstanding quality, consistent support, and strong results throughout every stage of the project.',
        ],
        [
            'name'     => 'Panner Selvam',
            'position' => 'CEO, Dots',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Exceptional App That Exceeded Expectations',
            'review'   => 'Vetora Technologies delivered an exceptional mobile app that perfectly aligned with our business needs. Their team demonstrated strong technical expertise, clear communication, and a commitment to quality. The final product exceeded our expectations and significantly improved our user engagement.',
        ],
        [
            'name'     => 'Kang-Huai',
            'position' => 'Director, Capsovision',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Modern, Functional and Impressive',
            'review'   => 'Vetora Technologies created a modern and highly functional website for us. Their understanding of UI/UX and business requirements was impressive. The website not only looks great but also performs seamlessly.',
        ],
        [
            'name'     => 'Anipriya Vignesh',
            'position' => 'Academic Director, Spectrum Life School',
            'rating'   => '5/5',
            'stars'    => 5,
            'title'    => 'Well-Structured and Engaging School Website',
            'review'   => 'Vetora delivered a well-structured and engaging website for our school. Their attention to detail and ability to understand our requirements made the entire process smooth and efficient.',
        ],
    ];
    @endphp

    <section class="tst" id="tstSection" role="region" aria-labelledby="tst-heading">
        <div class="ma-wrap">

            {{-- Header row --}}
            <div class="tst__head">
                <div class="tst__head-left">
                    <div class="tst__badge">
                        <div class="mpf__pill">
                            <span class="mpf__pill-num">6</span>
                            <span class="mpf__pill-text">Trusted by clients!</span>
                        </div>
                    </div>
                    <h2 class="tst__h2" id="tst-heading">
                        Client <span class="tst__h2-hl">feedback:</span>
                    </h2>
                </div>
                <div class="tst__head-right">
                    <button class="tst__nav testimonial-prev" aria-label="Previous testimonial">
                        <i class="bi bi-arrow-left" aria-hidden="true"></i>
                    </button>
                    <button class="tst__nav testimonial-next" aria-label="Next testimonial">
                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

            {{-- Carousel --}}
            <div class="owl-carousel testimonial-carousel" role="list">
                @foreach($testimonials as $t)
                <div class="tst__item" role="listitem">
                    <div class="tst__card">
                        <div class="tst__rating-row">
                            <span class="tst__rating-badge" aria-label="{{ $t['rating'] }} rating">{{ $t['rating'] }}</span>
                            <span class="tst__stars" aria-label="{{ $t['stars'] }} out of 5 stars">
                                @for($s = 0; $s < (int)$t['stars']; $s++)
                                    <i class="bi bi-star-fill" aria-hidden="true"></i>
                                @endfor
                            </span>
                        </div>
                        <h3 class="tst__title">{{ $t['title'] }}</h3>
                        <p class="tst__review">{{ $t['review'] }}</p>
                        <div class="tst__author">
                            <span class="tst__name">{{ $t['name'] }}</span>
                            <span class="tst__position">{{ $t['position'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>{{-- /.tst --}}

    <script>
    /* tst  IntersectionObserver scroll reveal */
    (function(){
        var s = document.getElementById('tstSection');
        if(!s) return;
        new IntersectionObserver(function(entries, obs){
            if(entries[0].isIntersecting){ s.classList.add('tst--in'); obs.disconnect(); }
        },{ threshold:.12 }).observe(s);
    })();
    </script>

    {{-- ============================================================
         8. WHY BUSINESSES CHOOSE US  (.wbc)
         Alpine.js activeCard  Mouse tilt  IntersectionObserver stagger
         ============================================================ --}}

    @php
    $wbcCards = [
        [
            'number'      => '01',
            'title'       => 'Dedicated Development Teams',
            'description' => 'Work with a focused squad assigned exclusively to your project full-stack engineers, UX specialists, and QA engineers who know your product inside out.',
            'icon'        => 'bi-people',
        ],
        [
            'number'      => '02',
            'title'       => 'Scalable Architecture',
            'description' => 'Every app we build is engineered to scale. From 100 to 10 million users our infrastructure choices ensure performance never becomes a bottleneck.',
            'icon'        => 'bi-layers',
        ],
        [
            'number'      => '03',
            'title'       => 'AI-Powered Solutions',
            'description' => 'We integrate machine learning, natural language processing, and predictive analytics directly into your app to deliver smarter user experiences.',
            'icon'        => 'bi-cpu',
        ],
        [
            'number'      => '04',
            'title'       => 'Transparent Communication',
            'description' => 'Daily standups, weekly reports, and a shared project board. You always know exactly where your build stands no surprises, ever.',
            'icon'        => 'bi-chat-dots',
        ],
        [
            'number'      => '05',
            'title'       => 'Faster Time To Market',
            'description' => 'Our agile sprint model and battle-tested component library cuts typical delivery timelines by 35%, without compromising code quality or stability.',
            'icon'        => 'bi-rocket-takeoff',
        ],
        [
            'number'      => '06',
            'title'       => 'Long-Term Technical Support',
            'description' => 'Launch is just the beginning. We provide ongoing maintenance, security patches, performance monitoring, and feature updates as your product evolves.',
            'icon'        => 'bi-shield-check',
        ],
    ];
    @endphp

    <section
        class="wbc"
        id="wbcSection"
        role="region"
        aria-label="Why Australian businesses choose us"
        x-data="{ active: null, toggle(i){ this.active = this.active === i ? null : i; } }"
    >
        <div class="wbc__wrap">

            {{-- Top header --}}
            <div class="wbc__top">
                <div class="wbc__badge-row">
                    <div class="mpf__pill">
                        <span class="mpf__pill-num">7</span>
                        <span class="mpf__pill-text">Why Businesses Choose Us</span>
                    </div>
                </div>
                <h2 class="wbc__h2">
                    Why Australian Businesses Choose Our Mobile App Development Team
                </h2>
                <p class="wbc__lead">
                    From ambitious startups to established enterprises, Australian businesses partner with Vetora because we deliver more than code we deliver measurable outcomes.
                </p>
            </div>

            {{-- Cards --}}
            <div class="wbc__grid">
                @foreach($wbcCards as $card)
                <div class="wbc__card-wrap" data-wbc-idx="{{ $loop->index }}">
                    <div class="wbc__card"
                         :class="{ 'wbc__card--active': active === {{ $loop->index }} }"
                         @click="toggle({{ $loop->index }})"
                         @keydown.enter.prevent="toggle({{ $loop->index }})"
                         @keydown.space.prevent="toggle({{ $loop->index }})"
                         role="button"
                         tabindex="0"
                         :aria-pressed="(active === {{ $loop->index }}).toString()"
                         aria-label="{{ $card['title'] }}">

                        <span class="wbc__num" aria-hidden="true">{{ $card['number'] }}</span>

                        <div class="wbc__icon-wrap" aria-hidden="true">
                            <i class="wbc__icon bi {{ $card['icon'] }}"></i>
                        </div>

                        <h3 class="wbc__title">{{ $card['title'] }}</h3>
                        <p class="wbc__desc">{{ $card['description'] }}</p>

                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>{{-- /.wbc --}}

    <script>
    /* wbc  scroll reveal + mouse tilt + glow */
    (function(){
        var section = document.getElementById('wbcSection');
        if(!section) return;

        /* â”€â”€ Section-level reveal (badge, h2, lead) â”€â”€ */
        new IntersectionObserver(function(entries, obs){
            if(entries[0].isIntersecting){ section.classList.add('wbc--in'); obs.disconnect(); }
        },{ threshold:.08 }).observe(section);

        /* â”€â”€ Card stagger reveal â”€â”€ */
        var wraps = section.querySelectorAll('.wbc__card-wrap');
        var cardIO = new IntersectionObserver(function(entries){
            entries.forEach(function(e){
                if(!e.isIntersecting) return;
                var idx = parseInt(e.target.dataset.wbcIdx, 10) || 0;
                setTimeout(function(){ e.target.classList.add('wbc--in'); }, idx * 110);
                cardIO.unobserve(e.target);
            });
        },{ threshold:.12 });
        wraps.forEach(function(w){ cardIO.observe(w); });

        /* â”€â”€ Mouse tilt + glow (skip if reduced motion) â”€â”€ */
        if(window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        wraps.forEach(function(wrap){
            var card = wrap.querySelector('.wbc__card');
            if(!card) return;
            var rafId = null;

            wrap.addEventListener('mousemove', function(e){
                if(rafId) cancelAnimationFrame(rafId);
                rafId = requestAnimationFrame(function(){
                    var rect = card.getBoundingClientRect();
                    var x    = (e.clientX - rect.left) / rect.width;
                    var y    = (e.clientY - rect.top)  / rect.height;
                    var tX   = (y - 0.5) * 8;
                    var tY   = (x - 0.5) * -8;
                    card.style.setProperty('--cx', (x * 100) + '%');
                    card.style.setProperty('--cy', (y * 100) + '%');
                    card.style.transition = 'border-color .3s ease, box-shadow .3s ease';
                    card.style.transform  = 'perspective(900px) rotateX(' + tX + 'deg) rotateY(' + tY + 'deg) translateZ(6px)';
                });
            },{ passive: true });

            wrap.addEventListener('mouseleave', function(){
                if(rafId) cancelAnimationFrame(rafId);
                card.style.transition = 'transform .45s ease, border-color .3s ease, box-shadow .3s ease';
                card.style.transform  = '';
                card.style.setProperty('--cx', '50%');
                card.style.setProperty('--cy', '50%');
                setTimeout(function(){ card.style.transition = ''; }, 450);
            },{ passive: true });
        });
    })();
    </script>

    {{-- ============================================================
         10. PRICING / ENGAGEMENT MODELS  (.prc)
         Alpine.js tab switch  IntersectionObserver reveal
         ============================================================ --}}

    <section
        class="prc"
        id="prcSection"
        role="region"
        aria-labelledby="prc-heading"
        x-data="{
            activeTab: 'project',
            tabOrder: ['project', 'hourly', 'retainer'],
            navTab(dir) {
                const idx = this.tabOrder.indexOf(this.activeTab);
                const n   = this.tabOrder.length;
                this.activeTab = this.tabOrder[(idx + dir + n) % n];
            }
        }"
    >
        <div class="prc__wrap">

            {{-- â”€â”€ Section header â”€â”€ --}}
            <div class="prc__header">
                <div class="prc__badge-row">
                    <div class="mpf__pill">
                        <span class="mpf__pill-num">8</span>
                        <span class="mpf__pill-text">Pricing section</span>
                    </div>
                </div>

                <h2 class="prc__h2" id="prc-heading">
                    Mobile App Development Cost in Melbourne
                </h2>

                <p class="prc__lead">
                    We build secure and scalable mobile apps for Australian businesses using iOS (Swift), Android (Kotlin), Flutter, and React Native. Our pricing is transparent and flexible, catering to startups through to enterprises.
                </p>
            </div>

            {{-- â”€â”€ Tab navigation â”€â”€ --}}
            <div class="prc__tabs-wrap">
                <div class="prc__tabs" role="tablist" aria-label="Engagement model tabs">

                    <button
                        class="prc__tab"
                        :class="{ 'prc__tab--active': activeTab === 'project' }"
                        role="tab"
                        :aria-selected="(activeTab === 'project').toString()"
                        aria-controls="prc-panel-project"
                        id="prc-tab-project"
                        :tabindex="activeTab === 'project' ? 0 : -1"
                        @click="activeTab = 'project'"
                        @keydown.arrow-right.prevent="navTab(1); $nextTick(() => $el.closest('[role=tablist]').querySelector('[aria-selected=true]').focus())"
                        @keydown.arrow-left.prevent="navTab(-1); $nextTick(() => $el.closest('[role=tablist]').querySelector('[aria-selected=true]').focus())"
                    >Project-Based</button>

                    <button
                        class="prc__tab"
                        :class="{ 'prc__tab--active': activeTab === 'hourly' }"
                        role="tab"
                        :aria-selected="(activeTab === 'hourly').toString()"
                        aria-controls="prc-panel-hourly"
                        id="prc-tab-hourly"
                        :tabindex="activeTab === 'hourly' ? 0 : -1"
                        @click="activeTab = 'hourly'"
                        @keydown.arrow-right.prevent="navTab(1); $nextTick(() => $el.closest('[role=tablist]').querySelector('[aria-selected=true]').focus())"
                        @keydown.arrow-left.prevent="navTab(-1); $nextTick(() => $el.closest('[role=tablist]').querySelector('[aria-selected=true]').focus())"
                    >Hourly Engagement</button>

                    <button
                        class="prc__tab"
                        :class="{ 'prc__tab--active': activeTab === 'retainer' }"
                        role="tab"
                        :aria-selected="(activeTab === 'retainer').toString()"
                        aria-controls="prc-panel-retainer"
                        id="prc-tab-retainer"
                        :tabindex="activeTab === 'retainer' ? 0 : -1"
                        @click="activeTab = 'retainer'"
                        @keydown.arrow-right.prevent="navTab(1); $nextTick(() => $el.closest('[role=tablist]').querySelector('[aria-selected=true]').focus())"
                        @keydown.arrow-left.prevent="navTab(-1); $nextTick(() => $el.closest('[role=tablist]').querySelector('[aria-selected=true]').focus())"
                    >Retainer Model</button>

                </div>
            </div>

            {{-- â”€â”€ Content card â”€â”€ --}}
            <div class="prc__card">

                {{-- Background effects --}}
                <div class="prc__card-bg">
                    <div class="prc__card-base"></div>
                    <div class="prc__bg-glow prc__bg-glow--1"></div>
                    <div class="prc__bg-glow prc__bg-glow--2"></div>
                    <div class="prc__noise" aria-hidden="true"></div>
                </div>

                <div class="prc__card-inner">

                    {{-- Left: tab panels --}}
                    <div class="prc__content">

                        {{-- Project-Based --}}
                        <div
                            id="prc-panel-project"
                            role="tabpanel"
                            aria-labelledby="prc-tab-project"
                            x-show="activeTab === 'project'"
                            x-transition:enter="prc-e"
                            x-transition:enter-start="prc-e-from"
                            x-transition:enter-end="prc-e-to"
                            x-transition:leave="prc-l"
                            x-transition:leave-start="prc-l-from"
                            x-transition:leave-end="prc-l-to"
                        >
                            <h3 class="prc__panel-title">Project Based Engagement</h3>
                            <p class="prc__panel-desc">
                                The project-based model works best when your mobile app requirements, timeline, and deliverables are clearly defined. Our team prepares a structured roadmap that outlines the project scope, development stages, and estimated cost before the work begins. This approach offers clarity, predictable budgeting, and a well-managed development cycle for businesses planning a complete custom mobile app.
                            </p>
                        </div>

                        {{-- Hourly Engagement --}}
                        <div
                            id="prc-panel-hourly"
                            role="tabpanel"
                            aria-labelledby="prc-tab-hourly"
                            x-show="activeTab === 'hourly'"
                            x-transition:enter="prc-e"
                            x-transition:enter-start="prc-e-from"
                            x-transition:enter-end="prc-e-to"
                            x-transition:leave="prc-l"
                            x-transition:leave-start="prc-l-from"
                            x-transition:leave-end="prc-l-to"
                        >
                            <h3 class="prc__panel-title">Hourly Engagement</h3>
                            <p class="prc__panel-desc">
                                The hourly engagement model is ideal when project requirements evolve over time. You pay only for the actual development hours utilised, providing flexibility for ongoing updates, feature enhancements, testing, and support activities.
                            </p>
                        </div>

                        {{-- Retainer Model --}}
                        <div
                            id="prc-panel-retainer"
                            role="tabpanel"
                            aria-labelledby="prc-tab-retainer"
                            x-show="activeTab === 'retainer'"
                            x-transition:enter="prc-e"
                            x-transition:enter-start="prc-e-from"
                            x-transition:enter-end="prc-e-to"
                            x-transition:leave="prc-l"
                            x-transition:leave-start="prc-l-from"
                            x-transition:leave-end="prc-l-to"
                        >
                            <h3 class="prc__panel-title">Retainer Model</h3>
                            <p class="prc__panel-desc">
                                The retainer model provides a dedicated team working consistently on your product. It is best suited for long-term projects requiring continuous development, maintenance, optimisation, and strategic technology support.
                            </p>
                        </div>

                    </div>

                    {{-- Right: tab images --}}
                    <div class="prc__visual" aria-hidden="true">

                        <div class="prc__spiral-float" x-show="activeTab === 'project'"
                             x-transition:enter="prc-e" x-transition:enter-start="prc-e-from" x-transition:enter-end="prc-e-to"
                             x-transition:leave="prc-l" x-transition:leave-start="prc-l-from" x-transition:leave-end="prc-l-to">
                            <img src="{{ asset('Assets/Images/Mobile-App/project-based.webp') }}"
                                 alt="" class="prc__spiral" loading="lazy" decoding="async">
                        </div>

                        <div class="prc__spiral-float" x-show="activeTab === 'hourly'"
                             x-transition:enter="prc-e" x-transition:enter-start="prc-e-from" x-transition:enter-end="prc-e-to"
                             x-transition:leave="prc-l" x-transition:leave-start="prc-l-from" x-transition:leave-end="prc-l-to">
                            <img src="{{ asset('Assets/Images/Mobile-App/hourly-engagement.webp') }}"
                                 alt="" class="prc__spiral" loading="lazy" decoding="async">
                        </div>

                        <div class="prc__spiral-float" x-show="activeTab === 'retainer'"
                             x-transition:enter="prc-e" x-transition:enter-start="prc-e-from" x-transition:enter-end="prc-e-to"
                             x-transition:leave="prc-l" x-transition:leave-start="prc-l-from" x-transition:leave-end="prc-l-to">
                            <img src="{{ asset('Assets/Images/Mobile-App/retainer-model.webp') }}"
                                 alt="" class="prc__spiral" loading="lazy" decoding="async">
                        </div>

                    </div>

                </div>{{-- /.prc__card-inner --}}
            </div>{{-- /.prc__card --}}

        </div>{{-- /.prc__wrap --}}
    </section>{{-- /.prc --}}

    <script>
    /* prc  scroll reveal */
    (function(){
        var s = document.getElementById('prcSection');
        if(!s) return;
        new IntersectionObserver(function(entries, obs){
            if(entries[0].isIntersecting){ s.classList.add('prc--in'); obs.disconnect(); }
        },{ threshold:.08 }).observe(s);
    })();
    </script>


    {{-- ============================================================
         11. FAQ  (.faq-section)
         ============================================================ --}}

    @php
    $faqItems = [
        [
            'q' => 'How much does it cost to develop a mobile app in Melbourne?',
            'a' => 'The cost of mobile app development in Melbourne depends on factors such as app complexity, number of screens, platform selection (iOS, Android, or both), and required integrations. A simple app may start from around AUD $8,000 to AUD $15,000, while advanced applications with custom features, AI integrations, and complex backend systems require a larger investment of AUD $40,000 to AUD $100,000+.',
        ],
        [
            'q' => 'How long does it take to develop a mobile app?',
            'a' => 'Mobile app development timelines typically range from 8 to 24 weeks depending on project scope, design complexity, and required functionality. Larger applications with multiple integrations, custom features, or enterprise-grade backend systems may take longer.',
        ],
        [
            'q' => 'Which is the best mobile app development company in Melbourne?',
            'a' => 'The best mobile app development company in Melbourne should have strong technical expertise, a proven portfolio, experienced developers, and a structured development process. Vetora Solutions focuses on building scalable, high-performance mobile applications for Australian startups, SMBs, and enterprises, with full-cycle support from discovery to deployment.',
        ],
        [
            'q' => 'What is your mobile app development process?',
            'a' => 'We follow an agile development methodology, ensuring continuous collaboration, flexibility, and timely delivery. Our process includes: Research & Discovery, Wireframing & User Flow Design, UI/UX Design & Interactive Prototype, Development & Coding, Testing & Quality Assurance, and App Store Deployment & Post-Launch Support.',
        ],
        [
            'q' => 'Do you help startups build MVP mobile apps?',
            'a' => 'Yes. We help Melbourne startups build Minimum Viable Products (MVPs) that allow them to validate their app idea quickly, attract early users and investors, and launch faster in the market with a lean but high-quality product.',
        ],
        [
            'q' => 'Will you help publish the app on the App Store and Google Play?',
            'a' => 'Yes. Our team assists with the complete deployment process including testing, App Store and Google Play submission, compliance checks, store listing optimisation, and the final app launch.',
        ],
        [
            'q' => 'Do you provide post-launch support for mobile apps?',
            'a' => 'Yes. We offer ongoing maintenance, performance monitoring, feature updates, and technical support to ensure your mobile app continues to perform reliably as your user base and business grow.',
        ],
        [
            'q' => 'How do you ensure the security of a mobile application?',
            'a' => 'We follow industry-leading security practices including secure coding standards and code reviews, data encryption at rest and in transit, strong authentication and authorisation protocols, regular security testing and vulnerability assessments, and compliance with the Australian Privacy Act and relevant data protection standards.',
        ],
        [
            'q' => 'Can Vetora upgrade or redesign my existing mobile app?',
            'a' => 'Yes. We help businesses modernise their apps through app redesign and UI/UX improvements, performance optimisation, migration to modern frameworks (e.g. from React Native to Flutter, or native to cross-platform), and feature upgrades with third-party API integration.',
        ],
        [
            'q' => 'Where is Vetora Solutions located?',
            'a' => 'Vetora Solutions is based in Melbourne, Australia, with our registered address at 66 Victor Cres, Narre Warren VIC 3805. We serve clients across Melbourne, across Australia, and internationally.',
        ],
    ];
    @endphp

    <section class="faq-section" id="faqSection" aria-labelledby="faq-title">
        <div class="faq-section__inner">

            {{-- Left: sticky sidebar --}}
            <div class="faq-section__sidebar">
                <div class="faq-section__badge">
                    <span class="faq-badge__num">9</span>
                    <span class="faq-badge__label">FAQ</span>
                </div>
                <h2 class="faq-section__heading" id="faq-title">
                    Frequently Asked Questions
                </h2>
                <img src="{{ asset('Assets/Images/Mobile-App/faq.webp') }}" alt="FAQ" class="faq-section__img d-none d-md-block">
            </div>

            {{-- Right: accordion list --}}
            <div class="faq-section__list" role="list" aria-label="Frequently asked questions">

                @foreach($faqItems as $item)
                @php $i = $loop->index; @endphp
                <div class="faq-item" role="listitem">

                    <button
                        class="faq-item__trigger"
                        type="button"
                        aria-expanded="false"
                        aria-controls="faq-panel-{{ $i }}"
                        id="faq-trigger-{{ $i }}"
                    >
                        <span class="faq-item__question">{{ $item['q'] }}</span>
                        <span class="faq-item__icon" aria-hidden="true">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1" y1="9" x2="17" y2="9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <line x1="9" y1="1" x2="9" y2="17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                        </span>
                    </button>

                    <div
                        class="faq-item__panel"
                        id="faq-panel-{{ $i }}"
                        role="region"
                        aria-labelledby="faq-trigger-{{ $i }}"
                    >
                        <div class="faq-item__body">
                            <p class="faq-item__answer">{{ $item['a'] }}</p>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>

        </div>
    </section>{{-- /.faq-section --}}

        {{-- ============================================================
         10. CTA FORM  Hire Vetora Solutions
         Single full-width card; bg image from hero section.
         Form: reuses @include('common.contact-form') via hv2__form-card
         dark-override scope so all field styles are inherited for free.
         ============================================================ --}}
    <section class="ctaf pt-0" id="ctaf" aria-label="Hire Vetora Solutions">
        <div class="ctaf__outer">

            <div class="ctaf__card ctaf-reveal">

                {{-- Corner brackets (reuse hv2__corner styles) --}}
                <span class="ctaf__corner ctaf__corner--tl" aria-hidden="true"></span>
                <span class="ctaf__corner ctaf__corner--tr" aria-hidden="true"></span>
                <span class="ctaf__corner ctaf__corner--bl" aria-hidden="true"></span>
                <span class="ctaf__corner ctaf__corner--br" aria-hidden="true"></span>

                <div class="ctaf__inner">

                    {{-- â”€â”€ LEFT â”€â”€ --}}
                    <div class="ctaf__left">

                        <h2 class="ctaf__headline">
                            Hire Melbourne's Best App Development Agency trusted by
                            Melbourne's Top Businesses.
                        </h2>

                        <p class="ctaf__sub">
                            Start your app development journey with Vetora Solutions with a
                            free consulting call and get a clear roadmap of building your
                            mobile app!
                        </p>

                        <ul class="ctaf__features">
                            <li class="ctaf__feat">
                                <span class="ctaf__feat-icon" aria-hidden="true">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>
                                Melbourne based Office
                            </li>
                            <li class="ctaf__feat">
                                <span class="ctaf__feat-icon" aria-hidden="true">
                                    <i class="bi bi-puzzle-fill"></i>
                                </span>
                                Custom solutions for every idea
                            </li>
                            <li class="ctaf__feat">
                                <span class="ctaf__feat-icon" aria-hidden="true">
                                    <i class="bi bi-headset"></i>
                                </span>
                                End-to-End Support from First Call to Go-Live
                            </li>
                        </ul>

                    </div>{{-- /.ctaf__left --}}

                    {{-- â”€â”€ RIGHT  wraps existing contact-form with hv2__form-card
                         scope so all dark-theme field overrides apply automatically â”€â”€ --}}
                    <div class="ctaf__right">
                        <div class="hv2__form-card ctaf__form-inner">
                            {{-- Corner brackets  white to match reference --}}
                            <span class="ctaf__fc-corner ctaf__fc-corner--tl" aria-hidden="true"></span>
                            <span class="ctaf__fc-corner ctaf__fc-corner--tr" aria-hidden="true"></span>
                            <span class="ctaf__fc-corner ctaf__fc-corner--bl" aria-hidden="true"></span>
                            <span class="ctaf__fc-corner ctaf__fc-corner--br" aria-hidden="true"></span>
                            <h3 class="hv2__form-title">Book a Free Consultation</h3>
                            <p class="hv2__form-sub">Share your vision—we're ready to bring it to life.</p>
                            @include('common.contact-form')
                        </div>
                    </div>{{-- /.ctaf__right --}}

                </div>{{-- /.ctaf__inner --}}

            </div>{{-- /.ctaf__card --}}

        </div>{{-- /.ctaf__outer --}}
    </section>{{-- /.ctaf --}}

</div>{{-- /.ma-page --}}
@endsection

@section('scripts')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.9/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    {{-- Lenis smooth scrolling (drives native scroll, so sticky/ScrollTrigger stay correct) --}}
    <script src="https://cdn.jsdelivr.net/npm/lenis@1.1.14/dist/lenis.min.js"></script>
    <script>
    (function () {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        if (!window.Lenis) return;

        /* The global stylesheet sets html{scroll-behavior:smooth}; that fights
           Lenis and makes scrolling stutter. Force it off while Lenis runs. */
        document.documentElement.style.scrollBehavior = 'auto';

        var lenis = new Lenis({
            lerp: 0.12,        /* light, responsive smoothing (was a slow 1.05s duration) */
            wheelMultiplier: 1,
            smoothWheel: true,
            syncTouch: false   /* keep native momentum scrolling on touch devices */
        });
        window.__lenis = lenis;

        if (window.gsap && window.ScrollTrigger) {
            /* Keep ScrollTrigger (pins, sticky scrubs) in lock-step with Lenis */
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add(function (time) { lenis.raf(time * 1000); });
            gsap.ticker.lagSmoothing(0);
        } else {
            (function raf(t) { lenis.raf(t); requestAnimationFrame(raf); })(0);
        }
    })();
    </script>

    <script>
    // â”€â”€ Portfolio Carousel â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€

    // -- Hero top offset: keep content flush below the fixed header --
    (function () {
        var inner  = document.querySelector('.hv2__inner');
        var header = document.querySelector('.site-header');
        if (!inner || !header) return;

        function syncOffset() {
            inner.style.paddingTop = (header.offsetHeight + 8) + 'px';
        }
        syncOffset();
        window.addEventListener('resize', syncOffset);

        var closeBtn = document.querySelector('.announcement-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', function () {
                requestAnimationFrame(syncOffset);
            });
        }
    })();
    $('.ma-project-carousel').owlCarousel({
        loop: true, margin: 20, autoplay: true, dots: false, nav: true,
        smartSpeed: 700,
        navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
        responsive: { 0: { items: 1, nav: false }, 768: { items: 1, nav: true } }
    });

    // â”€â”€ Scroll Reveal + Step Bar (ma-page sections) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    const maIO = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            e.target.classList.add('ma-in');
            maIO.unobserve(e.target);
        });
    }, { threshold: 0.14 });
    document.querySelectorAll('.ma-reveal, .ma-step').forEach(el => maIO.observe(el));

    // â”€â”€ Count-Up numbers â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    const countIO = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (!e.isIntersecting) return;
            const big = e.target.querySelector('[data-count]');
            if (!big || big.dataset.done) return;
            big.dataset.done = 1;
            const target = +big.dataset.count;
            const pct = big.querySelector('.ma-pct');
            const suffix = pct ? pct.textContent.replace(/[0-9]/g, '') : '%';
            let n = 0, step = Math.max(1, Math.round(target / 40));
            const t = setInterval(() => {
                n += step;
                if (n >= target) { n = target; clearInterval(t); }
                big.innerHTML = n + '<span class="ma-pct">' + suffix + '</span>';
            }, 24);
            countIO.unobserve(e.target);
        });
    }, { threshold: 0.2 });
    document.querySelectorAll('.ma-stat-card').forEach(el => countIO.observe(el));

    // â”€â”€ Stats Carousel (manual slide) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    (function () {
        const track = document.getElementById('maStatsTrack');
        let pos = 0;
        document.querySelectorAll('[data-car="stats"]').forEach(btn => {
            btn.addEventListener('click', () => {
                const w   = track.children[0].getBoundingClientRect().width + 22;
                const max = track.scrollWidth - track.parentElement.getBoundingClientRect().width;
                pos += (+btn.dataset.dir) * w;
                pos  = Math.max(0, Math.min(pos, max));
                track.style.transform = 'translateX(' + (-pos) + 'px)';
            });
        });
    })();

    // â”€â”€ Talk marquee duplicate â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    (function () {
        const t = document.getElementById('maTalkTrack');
        if (t) t.innerHTML += t.innerHTML;
    })();

    // â”€â”€ Why-Us Tabs â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    document.querySelectorAll('.ma-why-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.ma-why-tab').forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });

    // â”€â”€ FAQ Accordion â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
    document.querySelectorAll('.ma-qa-q').forEach(q => {
        q.addEventListener('click', () => {
            const qa = q.parentElement, a = q.nextElementSibling;
            const open = qa.classList.contains('open');
            document.querySelectorAll('.ma-qa').forEach(x => {
                x.classList.remove('open');
                x.querySelector('.ma-qa-a').style.maxHeight = null;
            });
            if (!open) { qa.classList.add('open'); a.style.maxHeight = a.scrollHeight + 'px'; }
        });
    });


    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       HERO V2 INTERACTIVITY
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        const hero = document.getElementById('hv2');
        if (!hero) return;

        // â”€â”€ Cursor spotlight â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
        hero.addEventListener('mouseenter', () => hero.style.setProperty('--spotlight', '1'));
        hero.addEventListener('mouseleave', () => hero.style.setProperty('--spotlight', '0'));
        hero.addEventListener('mousemove', e => {
            const r = hero.getBoundingClientRect();
            hero.style.setProperty('--x', ((e.clientX - r.left) / r.width  * 100).toFixed(2) + '%');
            hero.style.setProperty('--y', ((e.clientY - r.top)  / r.height * 100).toFixed(2) + '%');
        });

        // â”€â”€ Entrance animations (staggered on load) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (!prefersReduced) {
            document.querySelectorAll('.animate-hv2').forEach(el => {
                const delay = parseInt(el.dataset.hv2Delay) || 0;
                setTimeout(() => el.classList.add('hv2-visible'), 200 + delay);
            });
        } else {
            document.querySelectorAll('.animate-hv2').forEach(el => el.classList.add('hv2-visible'));
        }

        // â”€â”€ Logo marquee: duplicate rows for seamless loop â”€â”€â”€â”€
        const mt = document.getElementById('hv2MarqueeTrack');
        if (mt) mt.innerHTML += mt.innerHTML;

    })();

    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       WDM  Why Design Matters  (stat carousel + count-up)
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        const section = document.getElementById('wdm');
        if (!section) return;

        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        // â”€â”€ Scroll reveal (staggered) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
        const revealIO = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (!e.isIntersecting) return;
                const delay = parseInt(e.target.dataset.wdmDelay) || 0;
                setTimeout(() => e.target.classList.add('wdm-in'), delay);
                revealIO.unobserve(e.target);
            });
        }, { threshold: 0.12 });
        section.querySelectorAll('.wdm-reveal').forEach(el => revealIO.observe(el));

        // â”€â”€ Divider line + label â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
        const labelWrap = section.querySelector('.wdm__label-wrap');
        const divider   = section.querySelector('.wdm__divider');
        if (labelWrap && divider) {
            const divIO = new IntersectionObserver((entries) => {
                if (!entries[0].isIntersecting) return;
                labelWrap.classList.add('wdm-in');
                if (!prefersReduced) setTimeout(() => divider.classList.add('wdm-line-in'), 120);
                else divider.classList.add('wdm-line-in');
                divIO.disconnect();
            }, { threshold: 0.3 });
            divIO.observe(labelWrap);
        }

        // â”€â”€ Count-up â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
        function countUp(numEl, target) {
            if (prefersReduced) { numEl.textContent = target; return; }
            let n = 0;
            const duration = 700;
            const steps    = 50;
            const interval = duration / steps;
            const inc      = target / steps;
            clearInterval(numEl._timer);
            numEl._timer = setInterval(() => {
                n += inc;
                if (n >= target) { n = target; clearInterval(numEl._timer); }
                numEl.textContent = Math.round(n);
            }, interval);
        }

        // â”€â”€ Stat slides â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
        const slides = Array.from(section.querySelectorAll('.wdm__slide'));
        let current  = 0;
        let autoTimer = null;

        function goTo(idx) {
            slides[current].classList.remove('active');
            current = (idx + slides.length) % slides.length;
            const slide = slides[current];
            slide.classList.add('active');
            const numEl = slide.querySelector('.wdm__num');
            if (numEl) { numEl.textContent = '0'; countUp(numEl, +slide.dataset.target); }
        }

        section.querySelector('#wdmPrev').addEventListener('click', () => {
            clearInterval(autoTimer); goTo(current - 1); startAuto();
        });
        section.querySelector('#wdmNext').addEventListener('click', () => {
            clearInterval(autoTimer); goTo(current + 1); startAuto();
        });

        function startAuto() {
            if (prefersReduced) return;
            clearInterval(autoTimer);
            autoTimer = setInterval(() => goTo(current + 1), 5000);
        }

        // Pause/resume + fire initial count-up when section enters view
        let seenOnce = false;
        const visIO = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                if (!seenOnce) {
                    seenOnce = true;
                    const numEl = slides[current].querySelector('.wdm__num');
                    if (numEl) countUp(numEl, +slides[current].dataset.target);
                }
                startAuto();
            } else {
                clearInterval(autoTimer);
            }
        }, { threshold: 0.2 });
        visIO.observe(section);

    })();

    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       WDM VIDEO  pinned scroll-driven expand (scrubbed, reversible)
       The section pins (freezes) at the top of the viewport; scrolling then
       scrubs the small video pill as it grows in place into a centred,
       full-bleed (100vw) rounded video and the "Know More" button fades out.
       After the growth completes the pin releases and the page continues to
       the next section. Desktop/tablet only  mobile shows a static banner.
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        var morph = document.querySelector('#wdmVideoMorph');
        if (!morph) return;

        var section = document.getElementById('wdm');
        var video   = morph.querySelector('video');
        var ctaRow  = document.querySelector('.wdm__cta-row');
        if (video) video.play().catch(function () {});

        if (!window.gsap || !window.ScrollTrigger) return;

        /* Reduced-motion: CSS renders the video as a static banner already */
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        gsap.registerPlugin(ScrollTrigger);

        function lerp(a, b, t)   { return a + (b - a) * t; }
        function clamp(v, lo, hi) { return v < lo ? lo : (v > hi ? hi : v); }

        /* Build the pin only after the page has fully settled (see the call at
           the bottom). Creating it at parse time made it measure against a
           pre-font/pre-image layout, so the pin engaged against a stale start
           and the section overshot the top then snapped back. */
        function build() {
        var mm = gsap.matchMedia();

        /* DESKTOP / TABLET (>= 769px): the section PINS (freezes) when its top
           reaches the top of the viewport. While pinned, scrolling scrubs the
           video pill as it grows  width and height expand together from the
           pill out to a centred rounded video card (~90vw x ~82vh), the button
           fades, and the heading + stats scroll up past it. The box centres
           horizontally early and vertically gradually. When the growth
           completes the pin releases and the page continues to the next
           section. Reverses smoothly on scroll-up. Mobile gets a static CSS
           banner instead. */
        mm.add('(min-width: 769px)', function () {
            /* Pill metrics, captured with transforms cleared and refreshed on
               resize. base.left is horizontal-only and base.top is the offset
               within the section  both are independent of vertical scroll, and
               while pinned at top:0 base.top equals the pill's on-screen top. */
            var base = { left: 0, top: 0, w: 0, h: 0 };

            /* The copy that scrolls up out of the way while the video grows.
               These carry a .wdm-reveal `transition: transform .65s`; left as-is
               that makes their scrub-driven movement lag ~0.65s behind the
               video on fast scroll (the pill then overlaps the text). Kill the
               transition so they track the scrub frame-for-frame. */
            var textEls = [
                section.querySelector('.wdm__left'),
                section.querySelector('.wdm__pill'),
                section.querySelector('.wdm__headline')
            ].filter(Boolean);
            textEls.forEach(function (el) { el.style.transition = 'none'; });

            function measure() {
                gsap.set(morph, { clearProps: 'width,height,borderRadius,x,y' });
                gsap.set(textEls, { clearProps: 'y' });
                var m = morph.getBoundingClientRect();
                var s = section.getBoundingClientRect();
                base.left = m.left;
                base.top  = m.top - s.top;
                base.w    = m.width;
                base.h    = m.height;
            }

            function vwidth()  { return document.documentElement.clientWidth; } /* excludes scrollbar */
            function targetW() { return Math.round(vwidth() * 0.90); }            /* ~90vw, small side gutters */
            function targetH() { return Math.round(window.innerHeight * 0.82); }  /* ~82vh */
            function smooth(t) { return t <= 0 ? 0 : (t >= 1 ? 1 : t * t * (3 - 2 * t)); }

            /* Scrub budget, in viewport-heights: GROW = scroll spent expanding,
               HOLD = scroll the finished video stays put before it releases.
               Their sum drives the .wdm-pin track height in CSS:
               .wdm-pin height = (1 + GROW + HOLD) * 100vh = 280vh. Keep in sync. */
            var GROW = 1.2, HOLD = 0.6;

            /* No JS pin  the section is held by native CSS position:sticky, which
               the browser keeps perfectly in step with scrolling (no engage-lag,
               so no jump). We only SCRUB the animation across the .wdm-pin track. */
            var st = ScrollTrigger.create({
                trigger:             '.wdm-pin',
                start:               'top top',
                end:                 'bottom bottom',
                scrub:               1,
                invalidateOnRefresh: true,
                onRefreshInit:       measure,
                onUpdate: function (self) {
                    var W = vwidth();
                    var H = window.innerHeight;
                    /* growth progress: reaches 1 at the end of GROW, then holds
                       at 1 through the HOLD window. */
                    var g  = clamp(self.progress * (GROW + HOLD) / GROW, 0, 1);
                    var tw = targetW();
                    var th = targetH();
                    var pillCx = base.left + base.w / 2;

                    /* Width & height grow linearly together (matches the measured
                       stage sizes); horizontal centring happens early. */
                    var w   = lerp(base.w, tw, g);
                    var h   = lerp(base.h, th, g);
                    var cxP = smooth(clamp(g / 0.42, 0, 1));
                    var cx  = lerp(pillCx, W / 2, cxP);
                    var r   = lerp(999, 36, clamp(g * 2.2, 0, 1));

                    /* Vertical: the box is TOP-anchored, so growing the height
                       extends it DOWNWARD. Its top is lifted as the copy scrolls
                       away, so it never rises into the text above. */
                    var D     = Math.max(0, base.top - (H - th) / 2);
                    var shift = smooth(g) * D;             /* copy scrolls fully up */

                    /* The video itself is lifted slightly LESS, so the finished
                       card settles a touch below dead-centre and its top clears
                       the carousel arrows. Capped to the bottom breathing room
                       so it never runs off the viewport on short screens. */
                    var drop       = Math.min(56, Math.max(0, (H - th) / 2 - 16));
                    var videoShift = smooth(g) * Math.max(0, D - drop);

                    gsap.set(morph, {
                        width:        w,
                        height:       h,
                        x:            (cx - w / 2) - base.left,
                        y:            -videoShift,
                        borderRadius: r,
                        force3D:      true
                    });

                    /* button fades out fast; copy scrolls up by the full shift */
                    if (ctaRow) gsap.set(ctaRow, { autoAlpha: clamp(1 - g / 0.12, 0, 1) });
                    gsap.set(textEls, { y: -shift });
                    if (video) gsap.set(video, { scale: lerp(1.18, 1, g) });
                }
            });

            return function () {
                st.kill();
                gsap.set([morph, ctaRow, video].filter(Boolean), { clearProps: 'all' });
                gsap.set(textEls, { clearProps: 'all' });
                textEls.forEach(function (el) { el.style.transition = ''; });
            };
        });
        } /* end build() */

        /* Create the pin once the layout has settled (after load), in a rAF, and
           re-measure again when web fonts finish  this matches the other pinned
           section in this view and stops the engage-time jump. */
        function startWdm() { requestAnimationFrame(build); }
        if (document.readyState === 'complete') { startWdm(); }
        else { window.addEventListener('load', startWdm, { once: true }); }
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(function () { ScrollTrigger.refresh(); });
        }

        /* Keep the effect responsive. Another pin in this view sets
           autoRefreshEvents to 'DOMContentLoaded,load', which removes `resize`
           from ScrollTrigger's auto-refresh  so resizing the window or toggling
           fullscreen leaves this pin's start/end and the video measurements
           stale and scrolling jerks. Re-measure (debounced) on those events;
           all sizes are viewport-relative so the animation then re-fits any
           screen. */
        var wdmRT;
        function wdmRefreshSoon(delay) {
            clearTimeout(wdmRT);
            wdmRT = setTimeout(function () {
                if (window.ScrollTrigger) ScrollTrigger.refresh();
            }, delay);
        }
        window.addEventListener('resize', function () { wdmRefreshSoon(200); });
        window.addEventListener('orientationchange', function () { wdmRefreshSoon(250); });
        document.addEventListener('fullscreenchange', function () { wdmRefreshSoon(60); });
    })();

    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       CTA FORM  scroll reveal (.ctaf-reveal â†' .ctaf-in)
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var items = document.querySelectorAll('.ctaf-reveal');
        if (!items.length) return;
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el    = entry.target;
                var delay = parseInt(el.dataset.ctafDelay || '0', 10);
                setTimeout(function () { el.classList.add('ctaf-in'); }, delay);
                io.unobserve(el);
            });
        }, { threshold: 0.1 });
        items.forEach(function (el) { io.observe(el); });
    })();

    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       APP DEV SERVICES  cursor-follow glow border
       Tracks mousemove on each [glow-border="wrapper"] and writes
       --cursor-x / --cursor-y (px) onto the inner card element,
       which drives the radial-gradient in ::before.
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        document.querySelectorAll('[glow-border="wrapper"]').forEach(function (wrapper) {
            var inner = wrapper.querySelector('[glow-border="card"]');
            if (!inner) return;
            wrapper.addEventListener('mousemove', function (e) {
                var r = inner.getBoundingClientRect();
                inner.style.setProperty('--cursor-x', (e.clientX - r.left) + 'px');
                inner.style.setProperty('--cursor-y', (e.clientY - r.top)  + 'px');
            });
            wrapper.addEventListener('mouseleave', function () {
                inner.style.setProperty('--cursor-x', '-999px');
                inner.style.setProperty('--cursor-y', '-999px');
            });
        });
    })();

    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       APP DEV SERVICES  scroll reveal (.adsvc-reveal â†' .adsvc-in)
       Stagger delay from data-adsvc-delay (ms).
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var items = document.querySelectorAll('.adsvc-reveal');
        if (!items.length) return;
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el    = entry.target;
                var delay = parseInt(el.dataset.adsvcDelay || '0', 10);
                setTimeout(function () { el.classList.add('adsvc-in'); }, delay);
                io.unobserve(el);
            });
        }, { threshold: 0.12 });
        items.forEach(function (el) { io.observe(el); });
    })();

    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       HOW WE WORK v2  Pinned horizontal-scroll timeline
       Desktop: pins .hww2, translates .hww2__row left as user
                scrolls; .hww2__fill grows 0â†'100%; the step title
                nearest the viewport centre brightens to white.
       Mobile:  vertical stacked list with simple fade-up reveal.
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function () {
        var outer   = document.getElementById('hww2Outer');
        var section = document.getElementById('hww2Section');
        var row     = document.getElementById('hww2Row');
        var fill    = document.getElementById('hww2Fill');
        if (!outer || !section || !row || !fill) return;

        var steps  = Array.prototype.slice.call(section.querySelectorAll('.hww2__step'));
        var titles = steps.map(function (s) { return s.querySelector('.hww2__step-title'); });

        /* Header entrance reveal */
        var revealEls = section.querySelectorAll('.hww2-reveal');
        if (revealEls.length) {
            var entIO = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var el    = entry.target;
                    var delay = parseInt(el.dataset.hww2Delay || '0', 10);
                    setTimeout(function () { el.classList.add('hww2-in'); }, delay);
                    entIO.unobserve(el);
                });
            }, { threshold: 0.15 });
            revealEls.forEach(function (el) { entIO.observe(el); });
        }

        /* Reduced-motion: show everything statically */
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            fill.style.left = '0%';
            fill.style.width = '100%';
            steps.forEach(function (s) { s.classList.add('is-visible'); });
            titles.forEach(function (t) { if (t) t.classList.add('is-active'); });
            return;
        }

        if (!window.gsap || !window.ScrollTrigger) return;

        window.addEventListener('load', function () {
            requestAnimationFrame(function () {
                gsap.registerPlugin(ScrollTrigger);
                /* Keep `resize` in the refresh events so the pin re-measures when
                   the viewport changes (window resize, fullscreen, opening
                   DevTools)  otherwise the pin-spacer keeps its old height and
                   the section breaks with empty space above it. ignoreMobileResize
                   still suppresses the mobile address-bar resize jitter. */
                ScrollTrigger.config({
                    ignoreMobileResize: true,
                    autoRefreshEvents: 'visibilitychange,DOMContentLoaded,load,resize'
                });

                var mm = gsap.matchMedia();

                /* DESKTOP (>= 769px): native CSS sticky pin (NOT a GSAP pin).
                   The section sticks while .hww2-outer's extra height scrolls
                   past; we only SCRUB the horizontal row translation. Because the
                   hold is native sticky, resizing / going fullscreen re-fits by
                   itself  no stale pin-spacer, no empty-space break. */
                mm.add('(min-width: 769px)', function () {
                    /* How much VERTICAL scroll maps to the HORIZONTAL row travel.
                       1 = the row moves 1px per 1px of scroll (fast). Higher =
                       the row glides more slowly and each step dwells in view
                       matches the reference's deliberate feel. Tune to taste. */
                    var SPEED = 2;

                    var vw, dist, contentW;

                    function measure() {
                        vw   = window.innerWidth;
                        dist = Math.max(0, row.scrollWidth - vw);
                        /* Per-step ACTUAL content width = the wider of its title /
                           body, so the progress line can stop exactly where the
                           visible text ends (tighter than the 540px column). */
                        contentW = steps.map(function (s) {
                            var t = s.querySelector('.hww2__step-title');
                            var b = s.querySelector('.hww2__step-body');
                            return Math.max(t ? t.offsetWidth : 0, b ? b.offsetWidth : 0);
                        });
                        /* Sticky scroll track = one viewport (the sticky frame)
                           plus the horizontal travel x SPEED. */
                        outer.style.height = (window.innerHeight + Math.round(dist * SPEED)) + 'px';
                    }
                    measure();

                    function updateActive(progress) {
                        var translateX = progress * dist;
                        var vwCtr      = vw / 2;
                        var trackStart = steps.length ? steps[0].offsetLeft : 0;
                        var trackW     = row.scrollWidth - trackStart;

                        titles.forEach(function (title, i) {
                            if (!title) return;
                            var step        = steps[i];
                            var markerRatio = (step.offsetLeft - trackStart) / trackW;
                            /* At the very start only the dot is shown  the first
                               step stays hidden until the line begins to stretch
                               (~4%), then fades in. */
                            var visible     = (i === 0)
                                                ? (progress >= 0.04)
                                                : (progress >= markerRatio - 0.005);
                            step.classList.toggle('is-visible', visible);

                            if (visible) {
                                /* titles are left-aligned (60px step padding), so
                                   track the TITLE position, not the step centre. */
                                var markerX = step.offsetLeft + 60 - translateX;
                                var rel     = markerX - vwCtr;          /* +right / -left of centre */
                                step.classList.toggle('is-active', rel < 140 && rel > -step.offsetWidth * 0.70);
                            } else {
                                step.classList.remove('is-active');
                            }
                        });
                    }

                    var st = ScrollTrigger.create({
                        trigger:             outer,
                        start:               'top top',
                        end:                 'bottom bottom',
                        scrub:               1,
                        invalidateOnRefresh: true,
                        onRefreshInit:       measure,
                        onUpdate: function (self) {
                            gsap.set(row, { x: -self.progress * dist });
                            setFill(self.progress);
                            updateActive(self.progress);
                        }
                    });

                    /* Progress line (viewport-px driven so it lines up exactly):
                       LEFT edge starts at the first step's content-left and follows
                       it as the row scrolls. RIGHT edge ends where the CONTENT ends
                       (the content-right of the centred step), and never runs past
                       the last step's content when it's parked at the end  so the
                       line never extends across into empty space. At p=0 it's a
                       round dot at the start point. */
                    function setFill(p) {
                        var DOT = 44;                       /* = line height -> round dot */
                        var center = vw / 2;
                        var translateX = p * dist;
                        var n  = steps.length;
                        var s0 = steps[0];
                        var c0Left = (s0 ? s0.offsetLeft + 60 : center);          /* first content-left */
                        var tailX  = c0Left - translateX;

                        /* scroll distance (translateX) at which step k's content-left
                           sits exactly at viewport centre. */
                        function centerScroll(k) { return steps[k].offsetLeft + 60 - center; }

                        /* The leading edge ends at the CONTENT-right of the currently
                           centred (active) step. As the next step glides toward centre
                           we interpolate its content width into the previous one, so
                           the edge moves continuously with no jump. */
                        var W;
                        if (n === 0) {
                            W = 0;
                        } else if (n === 1 || translateX <= centerScroll(0)) {
                            W = contentW[0];
                        } else {
                            var N = n - 1;
                            for (var k = 0; k < n - 1; k++) {
                                if (translateX < centerScroll(k + 1)) { N = k; break; }
                            }
                            if (N >= n - 1) {
                                W = contentW[n - 1];
                            } else {
                                var a = centerScroll(N), b = centerScroll(N + 1);
                                var frac = (b > a) ? (translateX - a) / (b - a) : 0;
                                if (frac < 0) frac = 0; else if (frac > 1) frac = 1;
                                W = contentW[N] + (contentW[N + 1] - contentW[N]) * frac;
                            }
                        }

                        var leadTarget = center + W;
                        /* never run past the last step's real content-right (parked end) */
                        var last = steps[n - 1];
                        if (last) {
                            var lastRight = last.offsetLeft + 60 + contentW[n - 1] - translateX;
                            leadTarget = Math.min(leadTarget, lastRight);
                        }

                        var leadX = tailX + (leadTarget - tailX) * Math.min(p / 0.06, 1); /* grow from the dot */
                        var w = leadX - tailX;
                        if (w < DOT) { var cx = (tailX + leadX) / 2; tailX = cx - DOT / 2; w = DOT; } /* round dot */
                        fill.style.left  = tailX.toFixed(1) + 'px';
                        fill.style.width = w.toFixed(1) + 'px';
                    }

                    gsap.set(row, { x: 0 });
                    setFill(0);
                    updateActive(0);

                    return function () {
                        st.kill();
                        gsap.set(row, { clearProps: 'x' });
                        outer.style.height = '';
                    };
                });

                /* MOBILE (<= 768px) */
                mm.add('(max-width: 768px)', function () {
                    fill.style.left = '0%';
                    fill.style.width = '100%';
                    titles.forEach(function (t) { if (t) t.classList.add('is-active'); });

                    var mobIO = new IntersectionObserver(function (entries) {
                        entries.forEach(function (entry) {
                            if (!entry.isIntersecting) return;
                            entry.target.style.opacity   = '1';
                            entry.target.style.transform = 'translateY(0)';
                            mobIO.unobserve(entry.target);
                        });
                    }, { threshold: 0.12 });

                    steps.forEach(function (step) {
                        step.classList.add('is-visible');
                        step.style.opacity    = '0';
                        step.style.transform  = 'translateY(22px)';
                        step.style.transition = 'opacity .6s ease, transform .6s ease';
                        mobIO.observe(step);
                    });
                });

            }); /* end requestAnimationFrame */
        }); /* end window.load */
    })();
    </script>

    <script>
    /* ========================================================
       OUR PORTFOLIO  mpfInit
       Namespace: mpf  isolated from all other scroll code.
    ======================================================== */
    (function mpfInit() {
        var section = document.getElementById('mpfSection');
        if (!section) return;

        /* Text reveals only  no scroll animations on the collage */
        var revealIO = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el    = entry.target;
                var delay = parseInt(el.dataset.mpfDelay || '0', 10);
                setTimeout(function () { el.classList.add('mpf-in'); }, delay);
                revealIO.unobserve(el);
            });
        }, { threshold: 0.15 });
        section.querySelectorAll('.mpf-reveal').forEach(function (el) { revealIO.observe(el); });
    })();
    </script>

    <script>
    /* ========================================================
       FEATURES ARC SECTION  ftsInit
       Namespace: fts
    ======================================================== */
    (function ftsInit() {
        var section = document.getElementById('ftsSection');
        if (!section) return;

        var arcSymbol  = document.getElementById('ftsArcSymbol');
        var pillEls    = Array.prototype.slice.call(section.querySelectorAll('.fts__pill'));

        /* â”€â”€ Scroll reveal: heading, paragraph, pills â”€â”€ */
        var revealIO = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (!entry.isIntersecting) return;
                var el    = entry.target;
                var delay = parseInt(el.dataset.ftsDelay || '0', 10);
                setTimeout(function() { el.classList.add('fts--in'); }, delay);
                revealIO.unobserve(el);
            });
        }, { threshold: 0.15 });
        section.querySelectorAll('.fts__reveal').forEach(function(el) { revealIO.observe(el); });

        /* â”€â”€ Arc stroke-dashoffset draw on enter â”€â”€ */
        var arcIO = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                section.classList.add('fts--arc-drawn');
                arcIO.disconnect();
            }
        }, { threshold: 0.2 });
        arcIO.observe(section);

        /* â”€â”€ Active pill + arc icon sync â”€â”€ */
        function setActive(idx) {
            pillEls.forEach(function(p, i) {
                p.classList.toggle('fts__pill--active', i === idx);
            });
            var icon = pillEls[idx] && pillEls[idx].dataset.ftsIcon;
            if (arcSymbol && icon) {
                arcSymbol.style.opacity = '0';
                setTimeout(function() {
                    arcSymbol.innerHTML = '<i class="bi ' + icon + '"></i>';
                    arcSymbol.style.opacity = '1';
                }, 220);
            }
        }
        setActive(0);

        /* â”€â”€ Owl Carousel (mobile / tablet only) â”€â”€ */
        var owlEl       = section.querySelector('#ftsPills');
        var owlInstance = null;

        function initOwl() {
            if (owlInstance) return;
            var $el = $(owlEl);
            owlInstance = $el.owlCarousel({
                loop            : true,
                autoplay        : true,
                autoplayTimeout : 3000,
                autoplayHoverPause: true,
                dots            : true,
                nav             : false,
                responsive      : { 0: { items: 1 }, 768: { items: 3 } }
            });
            $el.on('changed.owl.carousel', function(e) {
                /* e.item.index with loop enabled includes clone offsets */
                var count = pillEls.length;
                var idx   = ((e.item.index - 1) % count + count) % count;
                setActive(idx);
            });
        }

        function destroyOwl() {
            if (!owlInstance) return;
            $(owlEl).owlCarousel('destroy');
            owlInstance = null;
            /* Re-apply stagger reveals that owl may have reset */
            pillEls.forEach(function(p) { p.classList.add('fts--in'); });
        }

        function checkCarousel() {
            if (window.innerWidth < 1024) { initOwl(); }
            else                          { destroyOwl(); }
        }

        checkCarousel();
        var rTimer;
        window.addEventListener('resize', function() {
            clearTimeout(rTimer);
            rTimer = setTimeout(checkCarousel, 200);
        });
    })();
    </script>

    <script>
    /* â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       TESTIMONIALS  Owl Carousel
    â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• */
    (function(){
        var $tst = $('.testimonial-carousel');
        if(!$tst.length) return;
        $tst.owlCarousel({
            loop              : true,
            margin            : 30,
            nav               : false,
            dots              : false,
            autoplay          : true,
            autoplayTimeout   : 5000,
            autoplayHoverPause: true,
            smartSpeed        : 700,
            responsive        : {
                0   : { items: 1 },
                768 : { items: 2 },
                1024: { items: 3 }
            }
        });
        $('.testimonial-next').on('click', function(){ $tst.trigger('next.owl.carousel'); });
        $('.testimonial-prev').on('click', function(){ $tst.trigger('prev.owl.carousel'); });
    })();
    </script>

    <script src="{{ asset('Assets/js/faq.js') }}?v=3.0.0"></script>

@endsection
