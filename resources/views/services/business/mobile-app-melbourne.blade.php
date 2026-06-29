@extends('layouts.app')


@section('meta')
    <title>Mobile App Development Company in Melbourne - Vetora Solutions</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection


@section('content')
    <!-- Hero Section Start -->

    <section class="hero-section" style="background-image: url('Assets/Images/Mobile-App-Melbourne/mobile-app-banner.webp')">
        <div class="container">
            <div class="hero-content">
                <div class="hero-title-wraper">
                    {{-- <h1>Mobile App Development Company in Melbourne </h1> --}}
                    <h1>Mobile App Development Company</h1>
                </div>
                {{-- <p>
                    At VETORA SOLUTIONS, our experienced team in Melbourne, VIC helps Australian businesses transform
                    innovative ideas into high-performing, scalable, and user-friendly mobile applications. As a leading
                    software development company in Melbourne, we specialize in building custom mobile apps designed to
                    improve customer engagement, streamline operations, and accelerate business growth.
                </p> --}}

                <p>
                    At VETORA SOLUTIONS, our experienced team in Melbourne, VIC helps International businesses transform
                    innovative ideas into high-performing, scalable, and user-friendly mobile applications. As a leading
                    Mobile App development company , we specialize in building custom mobile apps designed to improve
                    customer engagement, streamline operations, and accelerate business growth.
                </p>

                <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">
                    <button class="btn btn-gradiant btn-md">
                        Get a Quote <i class="bi bi-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Hero Section End -->

    <!-- Clients Section Start -->

    @include('common.trusted-clients', [
        'clientsTitle' => 'Trusted by Businesses Across International Border ',
        'clientsDesc' =>
            'We partner with Many International startups, growing companies, and enterprise organizations to deliver scalable mobile applications powered by modern technologies, agile development practices, and long-term technical support.',
    ])

    <!-- Clients Section End -->

    <!-- About Section Start -->

    <section class="section about-app-section">
        <div class="container">

            <div class="row g-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="section-heading mb-3">
                        <div class="section-subtitle"><i class="bi bi-phone"></i> App Development</div>
                        {{-- <h2 class="section-title">
                            Custom Mobile App Development for Australian Businesses
                        </h2> --}}
                        <h2 class="section-title">
                            Custom Mobile App Development for <span>International Businesses</span>
                        </h2>
                    </div>

                    {{-- <p class="about-text">
                        Mobile app development is the process of designing and building applications for smartphones and
                        tablets that deliver seamless digital experiences and solve real-world business challenges. In
                        today’s mobile-first environment, businesses across Australia are increasingly investing in mobile
                        applications to strengthen customer engagement, improve operational efficiency, and drive revenue
                        growth. A professionally developed mobile app enables customers to connect with your business
                        anytime and from anywhere.
                    </p> --}}

                    <p class="about-text">
                        Mobile app development is the process of designing and building applications for smartphones and
                        tablets that deliver seamless digital experiences and solve real-world business challenges.
                        In today’s mobile-first environment, businesses across Australia are increasingly investing in
                        mobile applications to strengthen customer engagement, improve operational efficiency, and drive
                        revenue growth.
                    </p>

                    <p class="about-text">
                        A professionally developed mobile app enables customers to connect with your
                        business anytime and from anywhere.
                    </p>

                    <ul class="about-points">
                        <li><i class="bi bi-check-circle-fill"></i>Reach customers across Android and iOS devices</li>
                        <li><i class="bi bi-check-circle-fill"></i>Improve customer engagement and user retention </li>
                        <li><i class="bi bi-check-circle-fill"></i> Increase brand visibility and customer trust </li>
                        <li><i class="bi bi-check-circle-fill"></i>Streamline business operations with digital solutions
                        </li>
                        <li><i class="bi bi-check-circle-fill"></i>Create personalized customer experiences</li>
                        <li><i class="bi bi-check-circle-fill"></i>Support long-term business scalability </li>
                    </ul>

                    <a href="#" class="btn btn-gradiant btn-md mt-3">
                        Get Free Consultation <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/custom-mobile-app.webp') }}"
                            alt="Mobile App Development">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- About Section End -->

    <!-- Service Section Start -->

    <section class="section">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-grid-3x3-gap"></i> Our Services</div>
                {{-- <h2 class="section-title">End-to-End Mobile App Development Services in Melbourne </h2> --}}
                {{-- <p class="section-description">
                    As a leading software development company in Melbourne, VETORA SOLUTIONS offers complete mobile app
                    development services tailored for Australian businesses across multiple industries.
                </p> --}}


                <h2 class="section-title">End-to-End <span>Mobile App Development Services</span></h2>
                <p class="section-description">
                    As a leading software development company, VETORA SOLUTIONS offers complete mobile app development
                    services tailored for Australian businesses across multiple industries.
                </p>
            </div>

            <div class="row g-4">

                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-apple"></i>
                        </div>
                        <h3>iOS App Development</h3>
                        <p>
                            We develop secure and high-performance iOS applications using Swift and Apple’s latest
                            technologies to deliver smooth user experiences and reliable performance.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-android2"></i>
                        </div>
                        <h3>Android App Development</h3>
                        <p>
                            Our Android app developers create scalable and feature-rich applications optimized for a wide
                            range of Android devices and user requirements.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h3>Cross-Platform App Development </h3>
                        <p>
                            Using Flutter and React Native, we build cross-platform applications that work seamlessly across
                            both Android and iOS while reducing development time and costs.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h3>UI/UX Design Services </h3>
                        <p>
                            We create intuitive and visually engaging interfaces designed to improve usability, customer
                            satisfaction, and app retention.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3>App Maintenance & Support </h3>
                        <p>
                            Our team provides continuous updates, bug fixes, performance monitoring, and long-term technical
                            support to keep your applications secure and optimized.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h3>Cloud Hosting & Infrastructure </h3>
                        <p>
                            We deliver secure cloud hosting, deployment, and infrastructure management solutions for
                            scalable mobile and web applications.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Service Section End -->

    <!-- Why Choose Section Start -->

    <section class="section why-section">
        <div class="container">

            <div class="row g-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6">
                    <div class="section-heading mb-3">
                        <div class="section-subtitle"><i class="bi bi-patch-check"></i> Why Choose Us</div>
                        {{-- <h2 class="section-title">
                            Why Businesses Choose Our Mobile App Development Services in Melbourne
                        </h2> --}}

                        <h2 class="section-title">
                            Why Businesses Choose Our <span>Mobile App Development Services</span>
                        </h2>
                        <p class="section-description">
                            We focus on delivering scalable, secure, and high-quality mobile applications that help
                            Australian businesses grow faster in a competitive digital market.
                        </p>
                    </div>

                    <div class="why-list">

                        <div class="why-item">
                            <span class="number">01</span>
                            <div>
                                <h4>International-Focused Team</h4>
                                <p>Our Development team understands Australian business requirements, customer expectations,
                                    and industry standards. </p>
                            </div>
                        </div>

                        <div class="why-item">
                            <span class="number">02</span>
                            <div>
                                <h4>Agile & Fast Delivery</h4>
                                <p>We use agile development methodologies to ensure faster project delivery, flexibility,
                                    and transparent collaboration throughout the development process. </p>
                            </div>
                        </div>

                        <div class="why-item">
                            <span class="number">03</span>
                            <div>
                                <h4>Scalable Mobile Solutions</h4>
                                <p>Our applications are built using scalable architecture designed to grow alongside your
                                    business and user base. </p>
                            </div>
                        </div>

                        <div class="why-item">
                            <span class="number">04</span>
                            <div>
                                <h4>Post-Launch Support</h4>
                                <p>We provide continuous maintenance, feature enhancements, monitoring, and long-term
                                    technical support after deployment. </p>
                            </div>
                        </div>

                        <div class="why-item">
                            <span class="number">05</span>
                            <div>
                                <h4>Security-First Development</h4>
                                <p>We follow industry best practices for application security, data protection, and reliable
                                    software performance. </p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDE (IMAGE / VISUAL) -->
                <div class="col-lg-6">
                    <div class="why-image">
                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/why-choose-us.webp') }}"
                            alt="Why Choose Our Mobile App Development Services">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Why Choose Section End -->


    <!-- Process Section Start -->

    <section class="section process-section">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-arrow-repeat"></i> How We Work</div>
                <h2 class="section-title">A Structured <span>Mobile App Development Process</span></h2>
                {{-- <p class="section-description" style="max-width: 100%">
                    As an experienced software development company in Melbourne, we follow a streamlined workflow to ensure
                    every mobile app project is delivered on time, securely, and aligned with business objectives.
                </p> --}}

                <p class="section-description" style="max-width: 100%">
                    As an experienced software development company, we follow a streamlined workflow to ensure every mobile
                    app project is delivered on time, securely, and aligned with business objectives.
                </p>
            </div>

            <div class="row g-5 process-tabs">

                <!-- LEFT SIDE (Steps) -->
                <div class="col-lg-4">
                    <div class="process-nav nav flex-column nav-pills" id="processTabs">

                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#step1">
                            <span>01</span> Requirement Analysis
                        </button>

                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#step2">
                            <span>02</span> UI/UX Design
                        </button>

                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#step3">
                            <span>03</span> Development
                        </button>

                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#step4">
                            <span>04</span> Testing
                        </button>

                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#step5">
                            <span>05</span> Deployment
                        </button>

                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#step6">
                            <span>06</span> Maintenance
                        </button>

                    </div>
                </div>

                <!-- RIGHT SIDE (Content) -->
                <div class="col-lg-8">
                    <div class="tab-content process-content">

                        <div class="tab-pane fade show active" id="step1">
                            <h3>Requirement Analysis</h3>
                            <p>We analyze your business goals, audience, workflows, and technical requirements to define a
                                clear project strategy. </p>
                            <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/requirement-analysis.webp') }}"
                                alt="Requirement Analysis">
                        </div>

                        <div class="tab-pane fade" id="step2">
                            <h3>UI/UX Design</h3>
                            <p>Our design team creates modern, user-friendly interfaces focused on customer engagement and
                                seamless user experiences. </p>
                            <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/ui-ux-design.webp') }}"
                                alt="UI/UX Design">
                        </div>

                        <div class="tab-pane fade" id="step3">
                            <h3>Development</h3>
                            <p>We build scalable and high-performance mobile applications using modern frameworks and secure
                                coding standards. </p>
                            <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/development.webp') }}"
                                alt="Development">
                        </div>

                        <div class="tab-pane fade" id="step4">
                            <h3>Testing</h3>
                            <p>Every application undergoes rigorous testing to ensure performance, reliability, security,
                                and bug-free functionality. </p>
                            <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/testing.webp') }}" alt="Testing">
                        </div>

                        <div class="tab-pane fade" id="step5">
                            <h3>Deployment</h3>
                            <p>We manage complete deployment processes for both the Apple App Store and Google Play Store.
                            </p>
                            <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/deployment.webp') }}" alt="Deployment">
                        </div>

                        <div class="tab-pane fade" id="step6">
                            <h3>Maintenance</h3>
                            <p>After launch, we provide ongoing updates, monitoring, optimization, and technical support for
                                long-term success. </p>
                            <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/maintenance.webp') }}"
                                alt="Maintenance">
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Process Section End -->


    <!-- Tech Stack Section Start -->

    <section class="technologies-section section">
        <div class="container">

            <div class="section-heading text-center">

                <div class="section-subtitle"><i class="bi bi-cpu"></i> Technologies We Use</div>

                <h2 class="section-title">
                    Modern Technologies <span>Powering Scalable Software Solutions</span>
                </h2>

                {{-- <p class="section-description mx-auto">
                    At VETORA SOLUTIONS, we leverage modern technologies, cloud infrastructure, and DevOps tools to build
                    secure, scalable, and high-performing software solutions for Australian businesses.
                </p> --}}

                <p class="section-description mx-auto">
                    At VETORA SOLUTIONS, we leverage modern technologies, cloud infrastructure, and DevOps tools to build
                    secure, scalable, and high-performing software solutions for International businesses.
                </p>

            </div>

            @include('common.tech-stack')

        </div>
    </section>

    <!-- Tech Stack Section End -->


    <!-- Industries Section Start -->

    <section class="section pt-0">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-building"></i> Industries We Serve</div>
                {{-- <h2 class="section-title">Industry-Focused Mobile App Solutions Across Australia </h2>
                <p class="section-description" style="max-width: 100%;">
                    We build custom mobile applications tailored to the unique operational needs of businesses across
                    multiple industries in Melbourne and throughout Australia.
                </p> --}}

                <h2 class="section-title">Industry-Focused <span>Mobile App Solutions</span></h2>
                <p class="section-description" style="max-width: 100%;">
                    We build custom mobile applications tailored to the unique operational needs of businesses across
                    multiple industries.
                </p>
            </div>

            <div class="industries-wrapper">

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                    <h4>Healthcare Applications </h4>
                </div>

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-cart"></i></div>
                    <h4>E-commerce Solutions </h4>
                </div>

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-mortarboard"></i></div>
                    <h4>Education & eLearning </h4>
                </div>

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-building"></i></div>
                    <h4>Real Estate Applications </h4>
                </div>

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-truck"></i></div>
                    <h4>Logistics & Transportation </h4>
                </div>


            </div>

        </div>
    </section>

    <!-- Industries Section End -->


    <!-- Testimonial -->


    <section class="testimonial-section">

        <!-- Background Glow -->
        <div class="testimonial-blur blur-left"></div>
        <div class="testimonial-blur blur-right"></div>

        <div class="container">

            <!-- =========================================
                                                                                                                                                                                                                 SECTION HEADER
                                                                                                                                                                                                            ========================================== -->


            <div class="section-heading text-center">

                <div class="section-subtitle">
                    <i class="bi bi-stars"></i>
                    CLIENT TESTIMONIALS
                </div>

                <h2 class="section-title">
                    Trusted by
                    <span>Brands Loved by Clients</span>
                </h2>

                <p class="section-description">
                    We help businesses scale with premium digital solutions,
                    AI innovation, and high-performance applications.
                </p>

            </div>

            <!-- =========================================
                                                                                                                                                                                                                 TRUSTED BRANDS
                                                                                                                                                                                                            ========================================== -->

            <div class="trusted-brands">

                <div class="brand-item">
                    <i class="bi bi-google"></i>
                </div>

                <div class="brand-item">
                    <i class="bi bi-meta"></i>
                </div>

                <div class="brand-item">
                    <i class="bi bi-microsoft"></i>
                </div>

                <div class="brand-item">
                    <i class="bi bi-amazon"></i>
                </div>

                <div class="brand-item">
                    <i class="bi bi-apple"></i>
                </div>

            </div>



            @include('common.testimonial')



        </div>
    </section>

    <!-- Testimonial -->

    <!-- FAQ Start -->

    <section class="section pt-0">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center mb-5">
                <div class="section-subtitle"><i class="bi bi-patch-question"></i> Got Questions?</div>
                <h2 class="section-title">FAQs</h2>
                <p class="section-description" style="max-width: 100%">
                    Everything you need to know about mobile app development.
                </p>
            </div>

            <!-- ONE Accordion -->
            <div class="accordion" id="faqMain">

                <div class="row g-4">

                    <!-- LEFT SIDE (1–5) -->
                    <div class="col-lg-6">

                        <!-- Item 1 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    1. What is Mobile App Development?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Mobile app development is the process of creating apps for mobile devices.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    2. Should I build for Android or iOS?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    It depends on your audience and budget.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    3. How long does development take?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Typically 2–6 months.
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    4. What technologies do you use?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Flutter, React Native, Swift, Kotlin, etc.
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    5. Is my app secure?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Yes, we follow industry security standards.
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT SIDE (6–10) -->
                    <div class="col-lg-6">

                        <!-- Item 6 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq6">
                                    6. Will it work on Android & iOS?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Yes, using cross-platform solutions.
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq7">
                                    7. How about updates?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    We provide continuous support.
                                </div>
                            </div>
                        </div>

                        <!-- Item 8 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq8">
                                    8. What is the cost?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Depends on features and complexity.
                                </div>
                            </div>
                        </div>

                        <!-- Item 9 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq9">
                                    9. How do you ensure success?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Through testing, UX, and optimization.
                                </div>
                            </div>
                        </div>

                        <!-- Item 10 -->
                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq10">
                                    10. Can you integrate APIs?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Yes, we integrate third-party services.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- FAQ End -->
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $('.modern-testimonial-carousel').owlCarousel({

            loop: true,

            margin: 30,

            nav: false,

            dots: true,

            autoplay: true,

            autoplayTimeout: 3500,

            autoplayHoverPause: true,

            smartSpeed: 900,

            responsive: {

                0: {
                    items: 1
                },

                768: {
                    items: 2
                },

                1200: {
                    items: 3
                }
            }
        });
    </script>
@endsection
