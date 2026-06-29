@extends('layouts.app')


@section('meta')
    <title>UI/UX Design Services in Melbourne - Vetora Solutions</title>
    <meta name="description"
        content="Expert UI/UX design services in Melbourne. Vetora Solutions creates intuitive, visually compelling digital experiences that drive engagement and business growth.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/ui-ux.css') }}?v=1.0.2">
@endsection


@section('content')

    {{-- ============================================================
         1. HERO SECTION
         ============================================================ --}}
    <section class="uiux-hero">

        <!-- Background glow orbs -->
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>

        <!-- ── Floating UI/UX Tool Animations ────────────────────── -->
        <div class="hero-floats" aria-hidden="true">

            {{-- Tool chips (left side) --}}
            <div class="hf-pill hf-figma">
                <img src="https://cdn.simpleicons.org/figma/F24E1E" alt="Figma" width="18" height="18">
                <span>Figma</span>
            </div>

            <div class="hf-pill hf-sketch">
                <img src="https://cdn.simpleicons.org/sketch/F7B500" alt="Sketch" width="18" height="18">
                <span>Sketch</span>
            </div>

            {{-- <div class="hf-pill hf-components">
                <i class="bi bi-grid-3x3-gap-fill"></i>
                <span>48 Components</span>
            </div> --}}

            {{-- Design Approved notification (top right) --}}
            <div class="hf-notif hf-approved">
                <div class="hf-notif-icon hf-icon-green">
                    <i class="bi bi-check2-circle"></i>
                </div>
                <div>
                    <span class="hf-notif-title">Design Approved</span>
                    <span class="hf-notif-sub">Homepage v3.2 &check;</span>
                </div>
            </div>

            {{-- Prototype pill (right middle) --}}
            <div class="hf-pill hf-prototype">
                <img src="https://www.adobe.com/cc-shared/assets/img/product-icons/svg/express.svg" alt="Adobe XD" width="18" height="18">
                <span>Adobe XD</span>
            </div>

            {{-- Design progress card (right, lower) --}}
            <div class="hf-progress-card hf-design-progress">
                <span class="hf-progress-label">Design Completion</span>
                <div class="hf-progress-bar">
                    <div class="hf-progress-fill" style="width:74%;"></div>
                </div>
                <div class="hf-progress-text">
                    <span class="hf-progress-pct">74%</span>
                    <span class="hf-progress-name">UI System</span>
                </div>
            </div>

            {{-- Brand Palette card (bottom right) --}}
            <div class="hf-palette-card">
                <span class="hf-palette-label">Brand Palette</span>
                <div class="hf-palette-swatches">
                    <span style="background:#5f0a87;"></span>
                    <span style="background:#2c73d2;"></span>
                    <span style="background:#c084fc;"></span>
                    <span style="background:#60a5fa;"></span>
                    <span style="background:#0f172a;"></span>
                </div>
            </div>

            {{-- Zeplin pill (center) --}}
            <div class="hf-cursor-wrap">
                <img src="https://cdn.simpleicons.org/zeplin/FDBD39" alt="Zeplin" width="20" height="20" class="hf-cursor-icon">
                <div class="hf-cursor-label">Zeplin</div>
            </div>

            {{-- Sparkle dots --}}
            <div class="hf-sparkle hf-spark-1"></div>
            <div class="hf-sparkle hf-spark-2"></div>
            <div class="hf-sparkle hf-spark-3"></div>
            <div class="hf-sparkle hf-spark-4"></div>
            <div class="hf-sparkle hf-spark-5"></div>

        </div>
        <!-- ── End Floating Tools ─────────────────────────────────── -->

        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Left: Content -->
                <div class="col-lg-6">

                    <span class="hero-eyebrow">
                        <i class="bi bi-palette2"></i>&nbsp; Digital Marketing &nbsp;&bull;&nbsp; UI/UX Design
                    </span>

                    <h1>
                        Premium <span class="hero-gradient-text">UI/UX Design</span><br>
                        Services in Melbourne
                    </h1>

                    <p class="hero-desc">
                        At VETORA SOLUTIONS, we craft intuitive, visually stunning digital experiences that delight
                        users and drive measurable business results — from wireframes to pixel-perfect interfaces for
                        web, mobile, and beyond.
                    </p>

                    <div class="hero-actions">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <button class="btn btn-gradiant btn-md">
                                Get a Free Consultation <i class="bi bi-arrow-right"></i>
                            </button>
                        </a>
                        <a href="#our-process" class="btn-outline-hero">
                            <i class="bi bi-play-circle"></i> See Our Process
                        </a>
                    </div>

                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="num">200+</span>
                            <span class="label">Projects Delivered</span>
                        </div>
                        <div class="stat-item">
                            <span class="num">98%</span>
                            <span class="label">Client Satisfaction</span>
                        </div>
                        <div class="stat-item">
                            <span class="num">6+</span>
                            <span class="label">Years of Expertise</span>
                        </div>
                    </div>

                </div>

                <!-- Right: Figma-style design mockup -->
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="hero-design-mockup">

                        <div class="hdm-window">

                            <!-- Title bar -->
                            <div class="hdm-titlebar">
                                <div class="hdm-traffic">
                                    <span></span><span></span><span></span>
                                </div>
                                <span class="hdm-filename">
                                    <i class="bi bi-bezier2"></i> vetora-design.fig
                                </span>
                                <div class="hdm-toolbar">
                                    <i class="bi bi-cursor"></i>
                                    <i class="bi bi-square"></i>
                                    <i class="bi bi-type"></i>
                                    <i class="bi bi-pen"></i>
                                </div>
                            </div>

                            <!-- Main panel -->
                            <div class="hdm-main">

                                <!-- Layers sidebar -->
                                <div class="hdm-sidebar">
                                    <div class="hdm-layer active">
                                        <i class="bi bi-square-fill"></i><span>Frame 1</span>
                                    </div>
                                    <div class="hdm-layer">
                                        <i class="bi bi-type"></i><span>Heading</span>
                                    </div>
                                    <div class="hdm-layer">
                                        <i class="bi bi-image"></i><span>Hero Img</span>
                                    </div>
                                    <div class="hdm-layer">
                                        <i class="bi bi-grid-3x3-gap"></i><span>Cards</span>
                                    </div>
                                    <div class="hdm-layer">
                                        <i class="bi bi-circle"></i><span>Button</span>
                                    </div>
                                </div>

                                <!-- Canvas -->
                                <div class="hdm-canvas-area">
                                    <div class="hdm-page-preview">
                                        <div class="hdp-nav"></div>
                                        <div class="hdp-hero-block">
                                            <div class="hdp-hero-text">
                                                <div class="hdp-line hdp-line-lg"></div>
                                                <div class="hdp-line hdp-line-sm"></div>
                                            </div>
                                            <div class="hdp-hero-img-box"></div>
                                        </div>
                                        <div class="hdp-cards">
                                            <div class="hdp-card"></div>
                                            <div class="hdp-card"></div>
                                            <div class="hdp-card"></div>
                                        </div>
                                    </div>
                                    <div class="hdm-selection-ring"></div>
                                </div>

                                <!-- Properties panel -->
                                <div class="hdm-properties">
                                    <div class="hdm-prop-section">
                                        <div class="hdm-prop-title">Fill</div>
                                        <div class="hdm-color-row">
                                            <div class="hdm-color-swatch"
                                                style="background:linear-gradient(135deg,#5f0a87,#2c73d2)"></div>
                                            <span>#5F0A87</span>
                                        </div>
                                    </div>
                                    <div class="hdm-prop-section">
                                        <div class="hdm-prop-title">Font</div>
                                        <div class="hdm-type-row">Lexend</div>
                                        <div class="hdm-type-size">900 · 64px</div>
                                    </div>
                                    <div class="hdm-prop-section">
                                        <div class="hdm-prop-title">Palette</div>
                                        <div class="hdm-palette">
                                            <div class="hdm-swatch" style="background:#5f0a87"></div>
                                            <div class="hdm-swatch" style="background:#2c73d2"></div>
                                            <div class="hdm-swatch" style="background:#c084fc"></div>
                                            <div class="hdm-swatch" style="background:#60a5fa"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Floating collaboration badge -->
                        <div class="hdm-collab-badge">
                            <div class="hdm-avatars">
                                <div class="hdm-avatar" style="background:#5f0a87">A</div>
                                <div class="hdm-avatar" style="background:#2c73d2">B</div>
                                <div class="hdm-avatar" style="background:#c084fc">C</div>
                            </div>
                            <span>3 designers collaborating</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         2. TRUSTED CLIENTS
         ============================================================ --}}
    @include('common.trusted-clients', [
        'clientsTitle' => 'Trusted by Businesses Across Australia',
        'clientsDesc'  => 'We partner with Australian startups, growing businesses, and enterprise organisations to deliver impactful design solutions that elevate brand and user experience.'
    ])


    {{-- ============================================================
         3. ABOUT / WHAT IS UI/UX
         ============================================================ --}}
    <section class="section about-app-section" style="background:#f7f9fc;">
        <div class="container">
            <div class="row g-5">

                <!-- Left: Content -->
                <div class="col-lg-6">
                    <div class="section-subtitle"><i class="bi bi-info-circle"></i> What We Do</div>
                    <div class="section-heading mb-3">
                        <h2 class="section-title">
                            Human-Centered UI/UX Design<br>
                            <span>That Drives Results</span>
                        </h2>
                    </div>

                    <p class="about-text">
                        UI/UX design is the art and science of creating digital interfaces that are not only beautiful
                        but deeply intuitive and effective. In today's competitive digital landscape, the quality of
                        your product's user experience can make or break your business — great design reduces churn,
                        increases conversions, and builds lasting brand loyalty.
                    </p>

                    <p class="about-text">
                        At VETORA SOLUTIONS, our Melbourne-based design team combines strategic thinking, user
                        research, and visual craftsmanship to create digital experiences that resonate with your
                        audience and achieve your business objectives.
                    </p>

                    <ul class="about-points">
                        <li><i class="bi bi-check-circle-fill"></i> Reduce user drop-off with intuitive navigation</li>
                        <li><i class="bi bi-check-circle-fill"></i> Increase conversions with purposeful design</li>
                        <li><i class="bi bi-check-circle-fill"></i> Build brand trust through visual consistency</li>
                    </ul>

                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md mt-3">
                        Start Your Design Project <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <!-- Right: Image + floating stat badges -->
                <div class="col-lg-6">
                    <div class="uiux-about-img-wrap">
                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/ui-ux-design.webp') }}"
                            alt="UI/UX Design Services Melbourne">

                        <div class="uiux-about-badge badge-bottom-left">
                            <div class="badge-num">200+</div>
                            <div class="badge-label">Projects Delivered</div>
                        </div>

                        <div class="uiux-about-badge badge-top-right">
                            <div class="badge-num">98%</div>
                            <div class="badge-label">Client Satisfaction</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         4. UI/UX SERVICES SECTION
         ============================================================ --}}
    <section class="section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-grid-3x3-gap"></i> Our Services</div>
                <h2 class="section-title">Comprehensive <span>UI/UX Design Services</span></h2>
                <p class="section-description">
                    From initial research and wireframing through to polished, production-ready designs, we cover
                    every stage of the UI/UX lifecycle for Australian businesses.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="uiux-service-card">
                        <div class="svc-icon"><i class="bi bi-globe"></i></div>
                        <h3>Web UI/UX Design</h3>
                        <p>We design responsive, conversion-optimised websites and web applications that deliver
                            outstanding user experiences across all devices and browsers.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="uiux-service-card">
                        <div class="svc-icon"><i class="bi bi-phone"></i></div>
                        <h3>Mobile App UI/UX Design</h3>
                        <p>Our mobile UI/UX experts craft intuitive iOS and Android interfaces following
                            platform-specific guidelines while maintaining your unique brand personality.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="uiux-service-card">
                        <div class="svc-icon"><i class="bi bi-bezier2"></i></div>
                        <h3>Wireframing &amp; Prototyping</h3>
                        <p>We rapidly translate concepts into detailed wireframes and interactive prototypes, allowing
                            you to validate ideas and gather feedback before development begins.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="uiux-service-card">
                        <div class="svc-icon"><i class="bi bi-search"></i></div>
                        <h3>User Research &amp; Strategy</h3>
                        <p>We conduct in-depth user interviews, persona development, and competitive analysis to build
                            design strategies grounded in real user needs and market insights.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="uiux-service-card">
                        <div class="svc-icon"><i class="bi bi-grid-1x2"></i></div>
                        <h3>Dashboard &amp; Admin UI Design</h3>
                        <p>We design complex data-rich dashboards and back-office systems that present information
                            clearly and enable users to make fast, confident decisions.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="uiux-service-card">
                        <div class="svc-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <h3>UX Audit &amp; Redesign</h3>
                        <p>We evaluate your existing digital product, identify usability friction points, and deliver
                            a comprehensive redesign that modernises the experience and boosts performance.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         5. WHY CHOOSE US — DARK SECTION
         ============================================================ --}}
    <section class="section uiux-why-section">

        <!-- Background orbs -->
        <div class="why-orb why-orb-1"></div>
        <div class="why-orb why-orb-2"></div>

        <div class="container">
            <div class="row g-5 align-items-center">

                <!-- Left: Reasons -->
                <div class="col-lg-7">
                    <div class="section-subtitle"><i class="bi bi-patch-check"></i> Why Vetora</div>
                    <div class="section-heading">
                        <h2 class="section-title">
                            
                            <span>Why Australian Businesses Choose Our UI/UX Design Team</span>
                        </h2>
                        <p class="section-description">
                            We combine design excellence with a deep understanding of your business goals to create
                            experiences that look beautiful and perform even better.
                        </p>
                    </div>

                    <div class="uiux-why-item">
                        <div class="why-num">01</div>
                        <div>
                            <h4>Research-Driven Design Approach</h4>
                            <p>Every design decision is backed by user research, data analysis, and behavioural
                                insights — ensuring your product solves real problems for real users.</p>
                        </div>
                    </div>

                    <div class="uiux-why-item">
                        <div class="why-num">02</div>
                        <div>
                            <h4>Melbourne-Based Creative Team</h4>
                            <p>Our local designers understand the Australian market, culture, and user expectations,
                                giving your product a competitive edge in the local digital landscape.</p>
                        </div>
                    </div>

                    <div class="uiux-why-item">
                        <div class="why-num">03</div>
                        <div>
                            <h4>Collaborative, Transparent Process</h4>
                            <p>We work as an extension of your team, keeping you involved at every stage with regular
                                reviews, feedback loops, and clear communication.</p>
                        </div>
                    </div>

                    <div class="uiux-why-item">
                        <div class="why-num">04</div>
                        <div>
                            <h4>Developer-Ready Design Deliverables</h4>
                            <p>Our designs include full component documentation, style guides, and developer handoff
                                files — ensuring smooth implementation and pixel-perfect results.</p>
                        </div>
                    </div>

                    <div class="uiux-why-item">
                        <div class="why-num">05</div>
                        <div>
                            <h4>Accessibility &amp; Responsive Design</h4>
                            <p>We design for WCAG compliance and responsiveness across all screen sizes, ensuring
                                your product reaches the widest possible audience inclusively.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual Panel -->
                <div class="col-lg-5">
                    <div class="why-visual-panel">

                        <div class="why-big-icon">
                            <i class="bi bi-palette2"></i>
                        </div>

                        <div class="why-visual-title">Design Tools We Use</div>
                        <div class="why-visual-sub">Industry-leading tools for world-class design</div>

                        <div class="why-tools-grid">
                            <div class="why-tool-item">
                                <i class="bi bi-bezier2"></i>
                                <span>Figma</span>
                            </div>
                            <div class="why-tool-item">
                                <i class="bi bi-layers"></i>
                                <span>Adobe XD</span>
                            </div>
                            <div class="why-tool-item">
                                <i class="bi bi-brush"></i>
                                <span>Sketch</span>
                            </div>
                            <div class="why-tool-item">
                                <i class="bi bi-vector-pen"></i>
                                <span>Illustrator</span>
                            </div>
                            <div class="why-tool-item">
                                <i class="bi bi-image"></i>
                                <span>Photoshop</span>
                            </div>
                            <div class="why-tool-item">
                                <i class="bi bi-phone-flip"></i>
                                <span>InVision</span>
                            </div>
                        </div>

                        <div class="why-meter-block">
                            <div class="why-meter-row">
                                <span class="why-meter-label">User Satisfaction</span>
                                <span class="why-meter-value" style="color:#c084fc;">98%</span>
                            </div>
                            <div class="why-meter-track">
                                <div class="why-meter-fill"
                                    style="width:98%; background:linear-gradient(90deg,#c084fc,#60a5fa);"></div>
                            </div>
                            <div class="why-meter-row">
                                <span class="why-meter-label">On-Time Delivery</span>
                                <span class="why-meter-value" style="color:#60a5fa;">95%</span>
                            </div>
                            <div class="why-meter-track">
                                <div class="why-meter-fill"
                                    style="width:95%; background:linear-gradient(90deg,#5f0a87,#60a5fa);"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         6. DESIGN PROCESS — TAB SECTION
         ============================================================ --}}
    <section class="section process-section uiux-process-section" id="our-process">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-arrow-repeat"></i> How We Work</div>
                <h2 class="section-title">Our <span>UI/UX Design Process</span></h2>
                <p class="section-description" style="max-width:100%">
                    We follow a structured, collaborative design process that keeps your users and business goals
                    at the centre of every decision — from discovery through to final delivery.
                </p>
            </div>

            <div class="row g-5 process-tabs">

                <div class="col-lg-4">
                    <div class="process-nav nav flex-column nav-pills" id="uiuxProcessTabs">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#uistep1">
                            <span>01</span> Discovery &amp; Research
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#uistep2">
                            <span>02</span> Information Architecture
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#uistep3">
                            <span>03</span> Wireframing
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#uistep4">
                            <span>04</span> Visual Design
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#uistep5">
                            <span>05</span> Prototyping &amp; Testing
                        </button>
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#uistep6">
                            <span>06</span> Developer Handoff
                        </button>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="tab-content process-content">

                        <div class="tab-pane fade show active" id="uistep1">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Discovery &amp; Research</h3>
                                    <p>We begin by deeply understanding your business, your users, and your competition.
                                        Through stakeholder interviews, user surveys, persona development, and market
                                        analysis, we define the design problem and establish clear success metrics before a
                                        single pixel is drawn.</p>
                                    <div class="process-chips">
                                        <span class="process-chip">User Interviews</span>
                                        <span class="process-chip">Persona Development</span>
                                        <span class="process-chip">Competitive Analysis</span>
                                        <span class="process-chip">Market Research</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-tab-img-wrap">
                                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/requirement-analysis.webp') }}"
                                            alt="Discovery and Research" class="process-tab-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="uistep2">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Information Architecture</h3>
                                    <p>We structure your product's content and navigation logically, creating sitemaps,
                                        user flows, and journey maps that ensure users can find what they need effortlessly.
                                        A solid information architecture is the foundation of every great user experience.</p>
                                    <div class="process-chips">
                                        <span class="process-chip">Sitemaps</span>
                                        <span class="process-chip">User Flows</span>
                                        <span class="process-chip">Journey Maps</span>
                                        <span class="process-chip">Card Sorting</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-tab-img-wrap">
                                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/custom-mobile-app.webp') }}"
                                            alt="Information Architecture" class="process-tab-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="uistep3">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Wireframing</h3>
                                    <p>Our designers create low and mid-fidelity wireframes that lay out the structural
                                        blueprint of each screen. These wireframes focus on layout, hierarchy, and
                                        functionality — giving stakeholders a clear vision of the product before visual
                                        design begins.</p>
                                    <div class="process-chips">
                                        <span class="process-chip">Lo-Fi Wireframes</span>
                                        <span class="process-chip">Mid-Fi Wireframes</span>
                                        <span class="process-chip">Layout Planning</span>
                                        <span class="process-chip">Component Planning</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-tab-img-wrap">
                                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/development.webp') }}"
                                            alt="Wireframing" class="process-tab-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="uistep4">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Visual Design</h3>
                                    <p>We bring your product to life with high-fidelity visual designs that reflect your
                                        brand identity. Our designers apply typography, colour theory, spacing, and motion
                                        principles to create interfaces that are both beautiful and highly functional.</p>
                                    <div class="process-chips">
                                        <span class="process-chip">Hi-Fi Mockups</span>
                                        <span class="process-chip">Design System</span>
                                        <span class="process-chip">Brand Integration</span>
                                        <span class="process-chip">Motion Design</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-tab-img-wrap">
                                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/ui-ux-design.webp') }}"
                                            alt="Visual Design" class="process-tab-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="uistep5">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Prototyping &amp; Testing</h3>
                                    <p>We build interactive prototypes that simulate the real product experience, then
                                        conduct usability testing with real users to identify friction points and validate
                                        design decisions before development investment is made.</p>
                                    <div class="process-chips">
                                        <span class="process-chip">Interactive Prototypes</span>
                                        <span class="process-chip">Usability Testing</span>
                                        <span class="process-chip">A/B Testing</span>
                                        <span class="process-chip">Iteration &amp; Refinement</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-tab-img-wrap">
                                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/testing.webp') }}"
                                            alt="Prototyping and Testing" class="process-tab-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="uistep6">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Developer Handoff</h3>
                                    <p>We deliver clean, organised design files with complete component libraries, style
                                        guides, spacing specifications, and asset exports — ensuring developers can implement
                                        your design with precision and confidence.</p>
                                    <div class="process-chips">
                                        <span class="process-chip">Style Guide</span>
                                        <span class="process-chip">Component Library</span>
                                        <span class="process-chip">Asset Exports</span>
                                        <span class="process-chip">Figma Handoff</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="process-tab-img-wrap">
                                        <img src="{{ asset('Assets/Images/Mobile-App-Melbourne/deployment.webp') }}"
                                            alt="Developer Handoff" class="process-tab-img">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         7. DESIGN OFFERINGS — CUSTOM TABS WITH WORKFLOW VISUALS
         ============================================================ --}}
    <section class="section uiux-offerings-section">
        <div class="container">

            <div class="section-heading text-center mb-5">
                <div class="section-subtitle"><i class="bi bi-palette"></i> Design Specialisations</div>
                <h2 class="section-title">Tailored UI/UX Design <span>for Every Need</span></h2>
                <p class="section-description">
                    Whether you're building from scratch or improving an existing product, we offer specialised
                    design solutions across all platforms and industries.
                </p>
            </div>

            <div class="row g-5">

                <!-- Left: Tab Buttons -->
                <div class="col-lg-4">
                    <div class="offering-tab-nav">
                        <button class="offering-tab-btn active" data-target="web">
                            <i class="bi bi-globe"></i> Web UI/UX Design
                        </button>
                        <button class="offering-tab-btn" data-target="mobile">
                            <i class="bi bi-phone"></i> Mobile App UI/UX Design
                        </button>
                        <button class="offering-tab-btn" data-target="dashboard">
                            <i class="bi bi-grid-1x2"></i> Dashboard &amp; Admin Design
                        </button>
                        <button class="offering-tab-btn" data-target="ecommerce">
                            <i class="bi bi-cart3"></i> E-commerce UI/UX Design
                        </button>
                        <button class="offering-tab-btn" data-target="redesign">
                            <i class="bi bi-arrow-repeat"></i> App Redesign &amp; Optimisation
                        </button>
                        <button class="offering-tab-btn" data-target="design-system">
                            <i class="bi bi-layers"></i> Design System &amp; Brand Identity
                        </button>
                    </div>
                </div>

                <!-- Right: Content Panes -->
                <div class="col-lg-8">
                    <div class="offering-content-area">

                        {{-- ---- WEB ---- --}}
                        <div class="offering-pane active" id="offering-web">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Web UI/UX Design</h3>
                                    <p>We design visually compelling, conversion-optimised websites and web apps
                                        that deliver outstanding experiences across all devices and browsers.</p>
                                    <ul class="offering-feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Landing page &amp; multi-page website design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> SaaS product interface design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Responsive design for all breakpoints</li>
                                        <li><i class="bi bi-check-circle-fill"></i> CRO-focused design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> WCAG 2.1 accessibility compliance</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <!-- Browser window mockup -->
                                    <div class="owv owv-web">
                                        <div class="owv-browser-bar">
                                            <div class="owv-dots"><span></span><span></span><span></span></div>
                                            <div class="owv-url-bar"></div>
                                        </div>
                                        <div class="owv-web-nav">
                                            <div class="owv-web-logo"></div>
                                            <div class="owv-web-nav-links">
                                                <div class="owv-nav-link"></div>
                                                <div class="owv-nav-link"></div>
                                                <div class="owv-nav-link"></div>
                                            </div>
                                            <div class="owv-web-nav-cta"></div>
                                        </div>
                                        <div class="owv-web-hero">
                                            <div class="owv-hero-text">
                                                <div class="owv-line owv-line-xl"></div>
                                                <div class="owv-line owv-line-lg"></div>
                                                <div class="owv-line owv-line-sm"></div>
                                                <div class="owv-hero-cta"></div>
                                            </div>
                                            <div class="owv-hero-img-block"></div>
                                        </div>
                                        <div class="owv-web-cards">
                                            <div class="owv-web-card">
                                                <div class="owv-web-card-img"></div>
                                                <div class="owv-web-card-body">
                                                    <div class="owv-web-card-line"></div>
                                                    <div class="owv-web-card-line owv-web-card-line-sm"></div>
                                                </div>
                                            </div>
                                            <div class="owv-web-card">
                                                <div class="owv-web-card-img"></div>
                                                <div class="owv-web-card-body">
                                                    <div class="owv-web-card-line"></div>
                                                    <div class="owv-web-card-line owv-web-card-line-sm"></div>
                                                </div>
                                            </div>
                                            <div class="owv-web-card">
                                                <div class="owv-web-card-img"></div>
                                                <div class="owv-web-card-body">
                                                    <div class="owv-web-card-line"></div>
                                                    <div class="owv-web-card-line owv-web-card-line-sm"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ---- MOBILE ---- --}}
                        <div class="offering-pane" id="offering-mobile">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Mobile App UI/UX Design</h3>
                                    <p>We craft intuitive, gesture-driven interfaces for iOS and Android that feel
                                        native and natural while reflecting your unique brand personality.</p>
                                    <ul class="offering-feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> iOS and Android native app design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Flutter / React Native UI design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Onboarding flow and user journey design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Gesture &amp; micro-interaction design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> App Store screenshot &amp; asset design</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <!-- Two overlapping phones -->
                                    <div class="owv owv-mobile">
                                        <div class="owv-phone owv-phone-secondary">
                                            <div class="owv-phone-notch" style="width:22px;height:4px;"></div>
                                            <div class="owv-phone-screen">
                                                <div class="owv-app-header">
                                                    <div class="owv-app-header-logo"></div>
                                                    <div class="owv-app-header-space"></div>
                                                </div>
                                                <div class="owv-app-banner">
                                                    <div class="owv-app-banner-title"></div>
                                                    <div class="owv-app-banner-sub"></div>
                                                </div>
                                                <div class="owv-app-row">
                                                    <div class="owv-app-icon"></div>
                                                    <div class="owv-app-text">
                                                        <div class="owv-app-text-line"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owv-phone-bottom"></div>
                                        </div>
                                        <div class="owv-phone owv-phone-main">
                                            <div class="owv-phone-notch"></div>
                                            <div class="owv-phone-screen">
                                                <div class="owv-app-header">
                                                    <div class="owv-app-header-logo"></div>
                                                    <div class="owv-app-header-space"></div>
                                                    <div class="owv-app-header-icon"></div>
                                                </div>
                                                <div class="owv-app-banner">
                                                    <div class="owv-app-banner-title"></div>
                                                    <div class="owv-app-banner-sub"></div>
                                                </div>
                                                <div class="owv-app-row">
                                                    <div class="owv-app-icon"></div>
                                                    <div class="owv-app-text">
                                                        <div class="owv-app-text-line"></div>
                                                        <div class="owv-app-text-line owv-app-text-line-sm"></div>
                                                    </div>
                                                </div>
                                                <div class="owv-app-row">
                                                    <div class="owv-app-icon"></div>
                                                    <div class="owv-app-text">
                                                        <div class="owv-app-text-line"></div>
                                                        <div class="owv-app-text-line owv-app-text-line-sm"></div>
                                                    </div>
                                                </div>
                                                <div class="owv-app-row">
                                                    <div class="owv-app-icon"></div>
                                                    <div class="owv-app-text">
                                                        <div class="owv-app-text-line"></div>
                                                        <div class="owv-app-text-line owv-app-text-line-sm"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owv-phone-bottom"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ---- DASHBOARD ---- --}}
                        <div class="offering-pane" id="offering-dashboard">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Dashboard &amp; Admin Interface Design</h3>
                                    <p>We design powerful data visualisation interfaces and admin panels that make
                                        complex information easy to understand and act on.</p>
                                    <ul class="offering-feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Analytics &amp; reporting dashboard design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Admin panel &amp; CMS interface design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Data visualisation &amp; chart design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Role-based access interface design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> B2B SaaS product design</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <!-- Analytics dashboard -->
                                    <div class="owv owv-dashboard">
                                        <div class="owv-db-topbar">
                                            <div class="owv-db-topbar-logo"></div>
                                            <div class="owv-db-topbar-space"></div>
                                            <div class="owv-db-topbar-avatar"></div>
                                        </div>
                                        <div class="owv-db-body">
                                            <div class="owv-db-sidebar">
                                                <div class="owv-db-nav-item active"></div>
                                                <div class="owv-db-nav-item"></div>
                                                <div class="owv-db-nav-item"></div>
                                                <div class="owv-db-nav-item"></div>
                                                <div class="owv-db-nav-item"></div>
                                            </div>
                                            <div class="owv-db-main">
                                                <div class="owv-db-kpis">
                                                    <div class="owv-db-kpi"><div class="owv-db-kpi-val"></div><div class="owv-db-kpi-lbl"></div></div>
                                                    <div class="owv-db-kpi"><div class="owv-db-kpi-val"></div><div class="owv-db-kpi-lbl"></div></div>
                                                    <div class="owv-db-kpi"><div class="owv-db-kpi-val"></div><div class="owv-db-kpi-lbl"></div></div>
                                                </div>
                                                <div class="owv-db-chart">
                                                    <div class="owv-db-chart-title"></div>
                                                    <div class="owv-db-bars">
                                                        <div class="owv-db-bar" style="height:55%"></div>
                                                        <div class="owv-db-bar" style="height:78%"></div>
                                                        <div class="owv-db-bar" style="height:42%"></div>
                                                        <div class="owv-db-bar" style="height:92%"></div>
                                                        <div class="owv-db-bar" style="height:60%"></div>
                                                        <div class="owv-db-bar" style="height:70%"></div>
                                                        <div class="owv-db-bar" style="height:85%"></div>
                                                    </div>
                                                </div>
                                                <div class="owv-db-table">
                                                    <div class="owv-db-row">
                                                        <div class="owv-db-row-dot"></div>
                                                        <div class="owv-db-row-cell" style="width:40%;"></div>
                                                        <div class="owv-db-row-cell" style="flex:1;"></div>
                                                    </div>
                                                    <div class="owv-db-row">
                                                        <div class="owv-db-row-dot"></div>
                                                        <div class="owv-db-row-cell" style="width:55%;"></div>
                                                        <div class="owv-db-row-cell" style="flex:1;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ---- E-COMMERCE ---- --}}
                        <div class="offering-pane" id="offering-ecommerce">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>E-commerce UI/UX Design</h3>
                                    <p>We design e-commerce experiences that minimise friction and maximise
                                        conversions — from product discovery through to checkout.</p>
                                    <ul class="offering-feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Product page &amp; category design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Checkout flow optimisation</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Cart &amp; wishlist UX design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Search &amp; filter interface design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Trust signals &amp; social proof design</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <!-- Product grid -->
                                    <div class="owv owv-ecommerce">
                                        <div class="owv-ec-header">
                                            <div class="owv-ec-logo"></div>
                                            <div class="owv-ec-searchbar"></div>
                                            <div class="owv-ec-cart"></div>
                                        </div>
                                        <div class="owv-ec-body">
                                            <div class="owv-ec-sidebar">
                                                <div class="owv-ec-filter-head"></div>
                                                <div class="owv-ec-filter-row"><div class="owv-ec-check on"></div><div class="owv-ec-check-lbl"></div></div>
                                                <div class="owv-ec-filter-row"><div class="owv-ec-check"></div><div class="owv-ec-check-lbl"></div></div>
                                                <div class="owv-ec-filter-row"><div class="owv-ec-check on"></div><div class="owv-ec-check-lbl"></div></div>
                                                <div class="owv-ec-filter-row"><div class="owv-ec-check"></div><div class="owv-ec-check-lbl"></div></div>
                                            </div>
                                            <div class="owv-ec-grid">
                                                <div class="owv-ec-card"><div class="owv-ec-thumb"></div><div class="owv-ec-info"><div class="owv-ec-name"></div><div class="owv-ec-price"></div><div class="owv-ec-add"></div></div></div>
                                                <div class="owv-ec-card"><div class="owv-ec-thumb"></div><div class="owv-ec-info"><div class="owv-ec-name"></div><div class="owv-ec-price"></div><div class="owv-ec-add"></div></div></div>
                                                <div class="owv-ec-card"><div class="owv-ec-thumb"></div><div class="owv-ec-info"><div class="owv-ec-name"></div><div class="owv-ec-price"></div><div class="owv-ec-add"></div></div></div>
                                                <div class="owv-ec-card"><div class="owv-ec-thumb"></div><div class="owv-ec-info"><div class="owv-ec-name"></div><div class="owv-ec-price"></div><div class="owv-ec-add"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ---- REDESIGN ---- --}}
                        <div class="offering-pane" id="offering-redesign">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>App Redesign &amp; UX Optimisation</h3>
                                    <p>We conduct thorough UX audits to identify what's broken, then deliver a
                                        redesign that retains familiarity while dramatically improving usability.</p>
                                    <ul class="offering-feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> UX audit &amp; heuristic evaluation</li>
                                        <li><i class="bi bi-check-circle-fill"></i> User journey gap identification</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Visual refresh &amp; modernisation</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Performance &amp; usability improvements</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Post-redesign usability testing</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <!-- Before / After split -->
                                    <div class="owv owv-redesign">
                                        <div class="owv-before">
                                            <div class="owv-panel-label">Before</div>
                                            <div class="owv-before-body">
                                                <div class="owv-before-nav"></div>
                                                <div class="owv-before-hero"></div>
                                                <div class="owv-before-row">
                                                    <div class="owv-before-card"></div>
                                                    <div class="owv-before-card"></div>
                                                </div>
                                                <div class="owv-before-row">
                                                    <div class="owv-before-card"></div>
                                                    <div class="owv-before-card"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owv-redesign-divider">
                                            <i class="bi bi-arrow-right"></i>
                                            <i class="bi bi-arrow-right"></i>
                                        </div>
                                        <div class="owv-after">
                                            <div class="owv-panel-label">After</div>
                                            <div class="owv-after-body">
                                                <div class="owv-after-nav"></div>
                                                <div class="owv-after-hero"></div>
                                                <div class="owv-after-row">
                                                    <div class="owv-after-card"></div>
                                                    <div class="owv-after-card"></div>
                                                </div>
                                                <div class="owv-after-row">
                                                    <div class="owv-after-card"></div>
                                                    <div class="owv-after-card"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ---- DESIGN SYSTEM ---- --}}
                        <div class="offering-pane" id="offering-design-system">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <h3>Design System &amp; Brand Identity</h3>
                                    <p>We build scalable design systems and comprehensive brand identities that
                                        ensure visual consistency across all digital touchpoints.</p>
                                    <ul class="offering-feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Component library &amp; pattern library</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Typography &amp; colour system</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Icon set &amp; illustration guidelines</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Brand identity &amp; logo design</li>
                                        <li><i class="bi bi-check-circle-fill"></i> Design token documentation</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <!-- Design system overview -->
                                    <div class="owv owv-design-system">
                                        <div>
                                            <div class="owv-ds-label">Color Palette</div>
                                            <div class="owv-ds-palette">
                                                <div class="owv-ds-color-col"><div class="owv-ds-swatch" style="background:#5f0a87;"></div><div class="owv-ds-swatch-hex">Primary</div></div>
                                                <div class="owv-ds-color-col"><div class="owv-ds-swatch" style="background:#2c73d2;"></div><div class="owv-ds-swatch-hex">Secondary</div></div>
                                                <div class="owv-ds-color-col"><div class="owv-ds-swatch" style="background:#c084fc;"></div><div class="owv-ds-swatch-hex">Accent</div></div>
                                                <div class="owv-ds-color-col"><div class="owv-ds-swatch" style="background:#60a5fa;"></div><div class="owv-ds-swatch-hex">Light</div></div>
                                                <div class="owv-ds-color-col"><div class="owv-ds-swatch" style="background:#0f172a;"></div><div class="owv-ds-swatch-hex">Dark</div></div>
                                                <div class="owv-ds-color-col"><div class="owv-ds-swatch" style="background:#f7f9fc; border:1px solid #e5e7eb;"></div><div class="owv-ds-swatch-hex">BG</div></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="owv-ds-label">Typography — Lexend</div>
                                            <div class="owv-ds-type-row">
                                                <span class="owv-ds-type-item owv-ds-type-xl">Aa</span>
                                                <span class="owv-ds-type-item owv-ds-type-lg">Bb</span>
                                                <span class="owv-ds-type-item owv-ds-type-md">Cc</span>
                                                <span class="owv-ds-type-item owv-ds-type-sm">Dd</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="owv-ds-label">Components</div>
                                            <div class="owv-ds-comp-row">
                                                <div class="owv-ds-btn">Button</div>
                                                <div class="owv-ds-btn-ghost">Outline</div>
                                                <div class="owv-ds-input"></div>
                                                <div class="owv-ds-tag">Tag</div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="owv-ds-label">Spacing Scale</div>
                                            <div class="owv-ds-space-row">
                                                <div class="owv-ds-space" style="width:6px;height:6px;"></div>
                                                <div class="owv-ds-space" style="width:10px;height:10px;"></div>
                                                <div class="owv-ds-space" style="width:16px;height:16px;"></div>
                                                <div class="owv-ds-space" style="width:24px;height:24px;"></div>
                                                <div class="owv-ds-space" style="width:36px;height:36px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         8. STATS BANNER
         ============================================================ --}}
    {{-- <section class="uiux-stats-banner">
        <div class="container">
            <div class="row align-items-center text-center g-4">
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">200+</span>
                        <span class="label">UI/UX Projects Delivered</span>
                    </div>
                </div>
                <div class="col-md-auto d-none d-md-flex">
                    <div class="stats-divider"></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">98%</span>
                        <span class="label">Client Satisfaction Rate</span>
                    </div>
                </div>
                <div class="col-md-auto d-none d-md-flex">
                    <div class="stats-divider"></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-box">
                        <span class="num">6+</span>
                        <span class="label">Years of Design Expertise</span>
                    </div>
                </div>
                <div class="col-md-auto d-none d-md-flex">
                    <div class="stats-divider"></div>
                </div>
                <div class="col-6 col-md-2">
                    <div class="stat-box">
                        <span class="num">50+</span>
                        <span class="label">Brands Served</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- ============================================================
         9. INDUSTRIES SECTION
         ============================================================ --}}
    <section class="section" style="background:#f7f9fc;">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-building"></i> Industries We Serve</div>
                <h2 class="section-title">UI/UX Design <span>Across Every Industry</span></h2>
                <p class="section-description" style="max-width:100%;">
                    Our designers have delivered exceptional user experiences for businesses across a wide range of
                    sectors throughout Melbourne and Australia.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-heart-pulse"></i></div>
                        <h5>Healthcare</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-cart3"></i></div>
                        <h5>E-Commerce</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-mortarboard"></i></div>
                        <h5>Education</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-bank"></i></div>
                        <h5>Finance &amp; Fintech</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-building"></i></div>
                        <h5>Real Estate</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-truck"></i></div>
                        <h5>Logistics</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-camera-video"></i></div>
                        <h5>Media &amp; Entertainment</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-cup-hot"></i></div>
                        <h5>Food &amp; Hospitality</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-cpu"></i></div>
                        <h5>SaaS &amp; Technology</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-shop"></i></div>
                        <h5>Retail</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-activity"></i></div>
                        <h5>Wellness &amp; Fitness</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="uiux-industry-card">
                        <div class="ic-icon"><i class="bi bi-briefcase"></i></div>
                        <h5>Professional Services</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- ============================================================
         10. TECH STACK
         ============================================================ --}}
    <section class="technologies-section section">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-subtitle">Design &amp; Dev Tools</span>
                <h2 class="section-title">Technology &amp; <span>Tools We Use</span></h2>
                <p class="section-description mx-auto">
                    We leverage industry-leading design tools and development technologies to create, prototype,
                    and deliver digital experiences that are both beautiful and technically excellent.
                </p>
            </div>
            @include('common.tech-stack')
        </div>
    </section>


    {{-- ============================================================
         11. CTA SECTION
         ============================================================ --}}
    <section class="section uiux-cta-section">
        <div class="container">
            <div class="uiux-cta-inner">

                <!-- Background orbs -->
                <div class="cta-orb cta-orb-1"></div>
                <div class="cta-orb cta-orb-2"></div>

                <div class="cta-content">
                    <h2>Ready to Elevate Your<br><span>Digital Experience?</span></h2>
                    <p>
                        Let's create something remarkable together. Whether you're launching a new product or
                        transforming an existing one, our design team is ready to bring your vision to life.
                    </p>
                    <div class="uiux-cta-actions">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn-white-cta">
                            Get a Free Design Consultation <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="btn-ghost-white">
                            <i class="bi bi-chat-dots"></i> Let's Talk
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         12. TESTIMONIALS
         ============================================================ --}}
    <section class="testimonial-section">
        <div class="testimonial-blur blur-left"></div>
        <div class="testimonial-blur blur-right"></div>

        <div class="container">
            <div class="section-heading text-center">
                <div class="section-subtitle">
                    <i class="bi bi-stars"></i>
                    CLIENT TESTIMONIALS
                </div>
                <h2 class="section-title">
                    Trusted by <span>Brands Loved by Clients</span>
                </h2>
                <p class="section-description">
                    We help businesses scale with premium digital solutions,
                    AI innovation, and high-performance applications.
                </p>
            </div>

            <div class="trusted-brands">
                <div class="brand-item"><i class="bi bi-google"></i></div>
                <div class="brand-item"><i class="bi bi-meta"></i></div>
                <div class="brand-item"><i class="bi bi-microsoft"></i></div>
                <div class="brand-item"><i class="bi bi-amazon"></i></div>
                <div class="brand-item"><i class="bi bi-apple"></i></div>
            </div>

            @include('common.testimonial')
        </div>
    </section>


    {{-- ============================================================
         13. FAQ SECTION
         ============================================================ --}}
    <section class="section pt-0">
        <div class="container">

            <div class="section-heading text-center mb-5">
                <span class="section-subtitle">Got Questions?</span>
                <h2 class="section-title">Frequently <span>Asked Questions</span></h2>
                <p class="section-description" style="max-width:100%">
                    Everything you need to know about our UI/UX design services.
                </p>
            </div>

            <div class="accordion" id="uiuxFaqMain">
                <div class="row g-4">

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#ufaq1">
                                    1. What is UI/UX Design, and why does it matter?
                                </button>
                            </h2>
                            <div id="ufaq1" class="accordion-collapse collapse show" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    UI (User Interface) design focuses on the visual elements — layouts, colours, typography,
                                    and interactive components. UX (User Experience) design focuses on the overall flow —
                                    how easy and enjoyable it is for users to achieve their goals. Together, great UI/UX
                                    reduces user frustration, increases engagement, and drives measurable results such as
                                    higher conversion rates and lower churn.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq2">
                                    2. How long does a UI/UX design project take?
                                </button>
                            </h2>
                            <div id="ufaq2" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    A single landing page can take 1–2 weeks, while a full mobile app or complex web
                                    platform typically takes 4–12 weeks. During our initial consultation, we'll provide a
                                    detailed timeline estimate tailored to your specific requirements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq3">
                                    3. What design tools do you use?
                                </button>
                            </h2>
                            <div id="ufaq3" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    We primarily use Figma, alongside Adobe XD, Sketch, and Adobe Illustrator/Photoshop.
                                    For prototyping and user testing we use InVision and Figma's built-in prototyping
                                    features. All files are delivered in formats easy for your development team to use.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq4">
                                    4. Can you redesign our existing website or app?
                                </button>
                            </h2>
                            <div id="ufaq4" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    Absolutely. We have extensive experience in UX auditing and redesigning existing digital
                                    products. We start with a thorough evaluation, identify usability issues, then deliver a
                                    redesign that modernises the experience while preserving features your users love.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq5">
                                    5. Do you provide mobile-responsive designs?
                                </button>
                            </h2>
                            <div id="ufaq5" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    Yes, all our designs are fully responsive. We design for multiple breakpoints — mobile,
                                    tablet, and desktop — ensuring a consistent, high-quality experience on any device.
                                    Responsive design is a standard deliverable on every project we complete.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq6">
                                    6. What role does user research play in your process?
                                </button>
                            </h2>
                            <div id="ufaq6" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    User research is the foundation of everything we do. Before designing a single screen,
                                    we invest time understanding your target users — their goals, pain points, and
                                    behaviours. This research informs every design decision and ensures the final product
                                    genuinely solves real problems.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq7">
                                    7. Do you conduct usability testing?
                                </button>
                            </h2>
                            <div id="ufaq7" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    Yes. We create interactive prototypes and test them with real users to identify friction
                                    points before development begins. This saves significant development costs and ensures
                                    your product launches with a validated, user-approved experience.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq8">
                                    8. What deliverables will I receive?
                                </button>
                            </h2>
                            <div id="ufaq8" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    Deliverables typically include user research findings, wireframes, high-fidelity UI
                                    mockups, interactive prototypes, a style guide, a component library, and developer
                                    handoff files via Figma. You own all design files upon project completion.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq9">
                                    9. How does UI/UX design impact SEO and conversions?
                                </button>
                            </h2>
                            <div id="ufaq9" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    Great UX directly improves SEO through better page performance, lower bounce rates,
                                    longer session durations, and improved Core Web Vitals. From a conversion perspective,
                                    intuitive navigation, clear CTAs, and trust-building design significantly increase the
                                    percentage of visitors who take the desired action.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ufaq10">
                                    10. How do we get started with a UI/UX project?
                                </button>
                            </h2>
                            <div id="ufaq10" class="accordion-collapse collapse" data-bs-parent="#uiuxFaqMain">
                                <div class="accordion-body">
                                    Getting started is simple — contact us via the form or request a free consultation.
                                    We'll schedule a discovery call to understand your requirements, goals, and timeline,
                                    then provide a detailed proposal. Most projects begin within 1–2 weeks of signing.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        // Testimonial Carousel
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
                0: { items: 1 },
                768: { items: 2 },
                1200: { items: 3 }
            }
        });

        // Offering Tabs
        document.querySelectorAll('.offering-tab-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.offering-tab-btn').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.offering-pane').forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                var pane = document.getElementById('offering-' + this.dataset.target);
                if (pane) pane.classList.add('active');
            });
        });
    </script>
@endsection
