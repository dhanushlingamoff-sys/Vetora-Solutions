@extends('layouts.app')

@section('meta')
    <title>Software Development Company in Melbourne - Vetora Solutions</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection


@section('content')
    <!-- Hero Section Start -->

    <section class="hero-section" style="background-image: url('Assets/Images/Software-Development/software-banner.webp')">
        <div class="container">
            <div class="hero-content">
                <div class="hero-title-wraper">
                    {{-- <h1>Software Development Company in Melbourne</h1> --}}
                    <h1>Software Development Company</h1>
                </div>
                {{-- <p>Melbourne and Australia</p> --}}

                <p>
                    At VETORA SOLUTIONS, we help businesses across glob transform innovative ideas into scalable, secure,
                    and high-performing digital products. As a trusted software development company in Melbourne, our team
                    specializes in building custom software applications, mobile apps, and enterprise platforms that improve
                    customer experiences, streamline operations, and accelerate business growth.
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


    <!-- Trusted By Section Start -->

    @include('common.trusted-clients', [
        'clientsTitle' => 'Trusted by many Startups, Enterprises & Growing Brands',
        'clientsDesc' =>
            'We partner with many businesses to build scalable software solutions using modern technologies, agile development practices, and long-term support strategies tailored to evolving market demands.',
    ])

    <!-- Trusted By Section End -->

    <!-- About Service Section Start -->

    <section class="about-service section">
        <div class="container">

            <div class="about-service-wrapper">

                <!-- Left Content -->
                <div class="about-service-content">

                    <span class="service-tag">
                        About Our Services
                    </span>

                    {{-- <h2 class="section-title">
                        Custom Software Development Services in Melbourne
                    </h2> --}}

                    <h2 class="section-title">
                        Custom <span>Software Development Services</span>
                    </h2>

                    {{-- <p class="section-description">
                        As a leading software development company in Melbourne, we create scalable and performance-driven
                        digital solutions tailored to your business operations, customer needs, and growth goals.

                        We help Australian companies modernize workflows, automate operations, and improve efficiency with
                        secure and scalable software solutions.
                    </p> --}}

                    <p class="section-description">
                        As a leading software development company, we create scalable and performance-driven digital
                        solutions tailored to your business operations, customer needs, and growth goals.

                        We help many international companies modernize workflows, automate operations, and improve
                        efficiency with secure and scalable software solutions.
                    </p>

                    <div class="service-features">

                        <div class="service-feature">
                            <div class="feature-icon">
                                <i class="bi bi-code-slash"></i>
                            </div>

                            <div class="feature-content">
                                <h4>Custom Software Development</h4>
                                <p>
                                    We build tailor-made software applications designed around your unique workflows,
                                    operational processes, and business objectives.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature">
                            <div class="feature-icon">
                                <i class="bi bi-layers"></i>
                            </div>

                            <div class="feature-content">
                                <h4>Scalable Business Solutions</h4>
                                <p>
                                    Our software solutions are designed to scale alongside your business growth while
                                    adapting to changing customer expectations and market trends.
                                </p>
                            </div>
                        </div>

                        <div class="service-feature">
                            <div class="feature-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>

                            <div class="feature-content">
                                <h4>Business-Focused Development</h4>
                                <p>
                                    We combine strategy, user experience, and modern development practices to create
                                    software products that deliver measurable business impact.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="about-service-btn">
                        <a href="#" class="btn btn-gradiant btn-md">
                            Get Free Consultation
                        </a>
                    </div>

                </div>

                <!-- Right Image -->
                <div class="about-service-image">

                    <div class="image-main">
                        <img src="{{ asset('Assets/Images/Software-Development/custom-software-development.webp') }}"
                            alt="Software Development Team">
                    </div>

                    <div class="floating-card floating-card-one">
                        <h5>120+</h5>
                        <p>Projects Delivered</p>
                    </div>

                    <div class="floating-card floating-card-two">
                        <h5>98%</h5>
                        <p>Client Satisfaction</p>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- About Service Section End -->

    <!-- Service Section Start -->

    <section class="section">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-grid-3x3-gap"></i> Our Services</div>
                {{-- <h2 class="section-title">Software Development Services in Melbourne</h2> --}}

                <h2 class="section-title">Software Development <span>Services</span></h2>

                <p class="section-description">
                    We provide end-to-end software development services for businesses worldwide, helping organizations
                    build scalable, secure, and high-performance digital solutions that streamline operations and drive
                    growth.
                </p>
            </div>

            <div class="row g-4">

                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-code-square"></i>
                        </div>
                        <h3>Custom Software Development</h3>
                        <p>
                            Build tailored software solutions designed to meet your unique business requirements, improve
                            efficiency, and support long-term scalability.
                        </p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-building-gear"></i>
                        </div>
                        <h3>Enterprise Software Solutions</h3>
                        <p>
                            Develop robust enterprise applications that automate workflows, enhance collaboration, and
                            optimize business processes across departments.
                        </p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-window-stack"></i>
                        </div>
                        <h3>Web Application Development</h3>
                        <p>
                            Create modern, responsive, and secure web applications using the latest technologies to deliver
                            exceptional user experiences and business value.
                        </p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-cloud-check"></i>
                        </div>
                        <h3>SaaS Product Development</h3>
                        <p>
                            Transform your ideas into scalable Software-as-a-Service (SaaS) platforms with multi-tenant
                            architecture, cloud-native infrastructure, and subscription-based models.
                        </p>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <h3>Software Modernization & Integration</h3>
                        <p>
                            Upgrade legacy systems, migrate applications to modern architectures, and integrate third-party
                            platforms to improve performance and productivity.
                        </p>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Quality Assurance & Testing</h3>
                        <p>
                            Ensure software reliability through comprehensive testing, performance optimization, security
                            assessments, and continuous quality assurance processes.
                        </p>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-cloud-arrow-up"></i>
                        </div>
                        <h3>Cloud Solutions & DevOps</h3>
                        <p>
                            Leverage cloud technologies, CI/CD pipelines, infrastructure automation, and scalable deployment
                            strategies to accelerate development and improve operational efficiency.
                        </p>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3>Maintenance & Technical Support</h3>
                        <p>
                            Receive ongoing software maintenance, feature enhancements, monitoring, security updates, and
                            dedicated technical support to keep your applications running smoothly.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Service Section End -->

    <!-- Development Process Section Start -->

    <section class="development-process section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-arrow-repeat"></i> Our Development Process</div>

                <h2 class="section-title">
                    A Strategic Process <span>Built for Seamless Delivery</span> 
                </h2>

                {{-- <p class="section-description mx-auto">
                    As an experienced software development company in Melbourne, we follow a transparent and agile
                    development approach to ensure every project is delivered efficiently.
                </p> --}}

                <p class="section-description mx-auto">
                    As an experienced software development company in Melbourne, we follow a transparent and agile
                    development approach to ensure every project is delivered efficiently, securely, and aligned with your
                    business goals.
                </p>
            </div>

            <div class="process-wrapper">

                <!-- Step 1 -->
                <div class="process-card">

                    <div class="process-number">
                        01
                    </div>

                    <div class="process-icon">
                        <i class="bi bi-search"></i>
                    </div>

                    <h3>Discovery & Consultation</h3>

                    <p>
                        We analyze your business objectives, audience, technical requirements, and operational challenges to
                        define a clear project strategy.
                    </p>

                </div>

                <!-- Step 2 -->
                <div class="process-card">

                    <div class="process-number">
                        02
                    </div>

                    <div class="process-icon">
                        <i class="bi bi-diagram-3"></i>
                    </div>

                    <h3>Planning & Architecture</h3>

                    <p>
                        Our experts create scalable software architecture, development roadmaps, and technology strategies
                        for smooth execution.
                    </p>

                </div>

                <!-- Step 3 -->
                <div class="process-card">

                    <div class="process-number">
                        03
                    </div>

                    <div class="process-icon">
                        <i class="bi bi-palette"></i>
                    </div>

                    <h3>UI/UX Design</h3>

                    <p>
                        We craft modern, user-focused interfaces that improve usability, engagement, and conversion rates.
                    </p>

                </div>

                <!-- Step 4 -->
                <div class="process-card">

                    <div class="process-number">
                        04
                    </div>

                    <div class="process-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <h3>Agile Development</h3>

                    <p>
                        Our developers build scalable software solutions using modern frameworks, secure coding standards,
                        and agile methodologies.
                    </p>

                </div>

                <!-- Step 5 -->
                <div class="process-card">

                    <div class="process-number">
                        05
                    </div>

                    <div class="process-icon">
                        <i class="bi bi-bug"></i>
                    </div>

                    <h3>Testing & Quality Assurance</h3>

                    <p>
                        We perform extensive testing to ensure software performance, security, reliability, and seamless
                        user experiences.
                    </p>

                </div>

                <!-- Step 6 -->
                <div class="process-card">

                    <div class="process-number">
                        06
                    </div>

                    <div class="process-icon">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>

                    <h3>Deployment & Ongoing Support</h3>

                    <p>
                        After launch, we provide continuous monitoring, software maintenance, updates, and long-term
                        technical support.
                    </p>

                </div>

            </div>

        </div>
    </section>

    <!-- Development Process Section End -->


    <!-- Technologies Section Start -->

    <section class="technologies-section section">
        <div class="container">

            <div class="section-heading text-center">

                <div class="section-subtitle"><i class="bi bi-cpu"></i> Technologies We Use</div>

                <h2 class="section-title">
                    Modern Technologies Powering <span>Scalable Software Solutions</span>
                </h2>

                <p class="section-description mx-auto">
                    At VETORA SOLUTIONS, we leverage industry-leading technologies, cloud platforms, and modern development
                    frameworks to build scalable digital solutions for International businesses.
                </p>

            </div>

            @include('common.tech-stack')

        </div>
    </section>

    <!-- Technologies Section End -->


    <!-- Industries Section Start -->

    <section class="section pt-0">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-building"></i> Industries We Serve</div>
                {{-- <h2 class="section-title">Industry-Focused Software Solutions Across Australia</h2> --}}
                <h2 class="section-title">Industry-Focused <span>Software Solutions</span></h2>

                <p class="section-description" style="max-width: 100%;">
                    We develop tailored software and mobile app solutions for businesses across multiple industries in
                    Melbourne and throughout Australia.
                </p>
            </div>

            <div class="industries-wrapper">

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-heart-pulse"></i></div>
                    <h4>Healthcare Solutions </h4>
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
                    <h4>Real Estate Solutions </h4>
                </div>

                <div class="industry-item">
                    <div class="icon"><i class="bi bi-truck"></i></div>
                    <h4>Logistics & Transportation </h4>
                </div>

            </div>

        </div>
    </section>

    <!-- Industries Section End -->


    <!-- Why Choose Us Section Start -->

    <section class="why-choose-section section">
        <div class="container">

            <div class="why-choose-wrapper">

                <!-- Left Content -->
                <div class="why-choose-content">

                    <span class="choose-tag">
                        Why Choose Us
                    </span>

                    {{-- <h2 class="section-title">
                        Your Trusted Software Development Company in Melbourne
                    </h2> --}}

                    <h2 class="section-title">
                        Your Trusted <span>Software Development Company</span>
                    </h2>

                    {{-- <p class="section-description">
                        VETORA SOLUTIONS combines innovation, strategy, and modern technologies to help Australian
                        businesses build scalable software products and accelerate digital transformation.
                    </p> --}}

                    <p class="section-description">
                        VETORA SOLUTIONS combines innovation, strategy, and modern technologies to help international
                        businesses build scalable software products and accelerate digital transformation.
                    </p>

                    <div class="choose-features">

                        <!-- Feature -->
                        <div class="choose-feature">

                            <div class="choose-icon">
                                <i class="bi bi-globe"></i>
                            </div>

                            <div class="choose-text">
                                <h4>Australian-Focused Development</h4>

                                <p>
                                    We create software solutions specifically tailored for Australian businesses,
                                    industries, and compliance standards.
                                </p>
                            </div>

                        </div>

                        <!-- Feature -->
                        <div class="choose-feature">

                            <div class="choose-icon">
                                <i class="bi bi-lightning-charge"></i>
                            </div>

                            <div class="choose-text">
                                <h4>Agile & Flexible Development</h4>

                                <p>
                                    Our agile development process ensures faster delivery, continuous improvements, and
                                    adaptable project execution.
                                </p>
                            </div>

                        </div>

                        <!-- Feature -->
                        <div class="choose-feature">

                            <div class="choose-icon">
                                <i class="bi bi-headset"></i>
                            </div>

                            <div class="choose-text">
                                <h4>Dedicated Technical Support</h4>

                                <p>
                                    We provide long-term support, maintenance, and technical assistance to ensure optimal
                                    software performance.
                                </p>
                            </div>

                        </div>

                        <!-- Feature -->
                        <div class="choose-feature">

                            <div class="choose-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>

                            <div class="choose-text">
                                <h4>Transparent Communication</h4>

                                <p>
                                    Clear communication, collaborative workflows, and regular project updates keep clients
                                    informed throughout the development process.
                                </p>
                            </div>

                        </div>

                        <!-- Feature -->
                        <div class="choose-feature">

                            <div class="choose-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>

                            <div class="choose-text">
                                <h4>Scalable Software Architecture</h4>

                                <p>
                                    We build future-ready systems designed to scale with growing business operations and
                                    evolving customer demands.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Right Side -->
                <div class="why-choose-image">

                    <div class="choose-image-main">
                        <img src="{{ asset('Assets/Images/Software-Development/your-trusted-software-development.webp') }}"
                            alt="Software Team">
                    </div>

                    <!-- Floating Card -->
                    <div class="choose-floating-card">

                        <h3>98%</h3>

                        {{-- <p>
                            Looking for a Reliable Software Development Company in Melbourne? Let's build your next digital
                            product.
                        </p> --}}

                        <p>
                            Looking for a Reliable Software Development Company?
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Why Choose Us Section End -->

    <!-- Testimonial Start -->

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

    <!-- Testimonial End -->

    <!-- FAQ Start -->

    <section class="section pt-0">
        <div class="container">

            <!-- Heading -->
            <div class="section-heading text-center mb-5">
                <div class="section-subtitle"><i class="bi bi-patch-question"></i> Got Questions?</div>
                <h2 class="section-title">FAQs</h2>
                <p class="section-description" style="max-width: 100%">
                    Everything you need to know about software development.
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
                                    1. What is Software Development?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqMain">
                                <div class="accordion-body">
                                    Software development is the process of creating software applications.
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
