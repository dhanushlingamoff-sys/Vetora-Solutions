@extends('layouts.app')


@section('meta')
    <title>Website Development Services in Melbourne - Vetora Solutions</title>
    <meta name="description"
        content="Expert website development services in Melbourne. Vetora Solutions builds fast, scalable, and high-converting websites and web applications that power business growth.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/web-development.css') }}?v=1.0.2">
@endsection


@section('content')

    {{-- ============================================================
         1. HERO
         ============================================================ --}}
    <section class="wd-hero">
        <div class="wd-hero-shape wd-shape-1"></div>
        <div class="wd-hero-shape wd-shape-2"></div>
        <div class="wd-hero-shape wd-shape-3"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <span class="wd-hero-eyebrow">
                        <i class="bi bi-code-slash"></i>&nbsp; Website Development
                    </span>
                    <h1>
                        Build <span class="wd-hero-grad">High-Performance</span><br>
                        Websites That Convert
                    </h1>
                    <p class="wd-hero-desc">
                        From concept to launch — we craft responsive, SEO-optimised, and high-converting websites
                        and web applications that give your business a powerful digital edge across Australia.
                    </p>
                    <div class="wd-hero-actions">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <button class="btn btn-gradiant btn-md">
                                Get a Free Quote <i class="bi bi-arrow-right"></i>
                            </button>
                        </a>
                        <a href="#wd-process" class="wd-hero-link">
                            <i class="bi bi-play-circle-fill"></i> See Our Process
                        </a>
                    </div>
                    {{-- <div class="wd-hero-stats justify-content-center">
                        <div class="wd-stat">
                            <span class="wd-stat-num">300+</span>
                            <span class="wd-stat-lbl">Websites Delivered</span>
                        </div>
                        <div class="wd-stat-div"></div>
                        <div class="wd-stat">
                            <span class="wd-stat-num">98%</span>
                            <span class="wd-stat-lbl">Client Satisfaction</span>
                        </div>
                        <div class="wd-stat-div"></div>
                        <div class="wd-stat">
                            <span class="wd-stat-num">6+</span>
                            <span class="wd-stat-lbl">Years Expertise</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         2. TRUSTED CLIENTS
         ============================================================ --}}
    @include('common.trusted-clients', [
        'clientsTitle' => 'Trusted by Businesses Across Australia',
        'clientsDesc'  => 'We partner with Australian startups, SMEs, and enterprise organisations to build high-performance websites and web applications that drive real results.'
    ])


    {{-- ============================================================
         3. ABOUT / INTRO SPLIT
         ============================================================ --}}
    <section class="section wd-about-section">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 order-lg-2">
                    <div class="section-subtitle"><i class="bi bi-info-circle"></i> What We Do</div>
                    <div class="section-heading mb-3">
                        <h2 class="section-title">
                            Strategic Web Development<br>
                            <span>Built Around Your Business</span>
                        </h2>
                    </div>
                    <p class="wd-about-text">
                        Your website is your most powerful sales asset. In today's competitive digital landscape, a slow
                        or outdated site costs you customers every single day. At VETORA SOLUTIONS, we engineer
                        websites that convert, impress, and scale — from landing pages to complex enterprise platforms.
                    </p>
                    <p class="wd-about-text">
                        Our Melbourne-based development team fuses technical precision with strategic design thinking —
                        delivering web solutions that look premium, perform flawlessly, and generate measurable
                        business outcomes from day one.
                    </p>
                    <ul class="wd-check-list">
                        <li><i class="bi bi-check-circle-fill"></i> Lightning-fast speeds & Core Web Vitals scores</li>
                        <li><i class="bi bi-check-circle-fill"></i> Mobile-first, fully responsive across all devices</li>
                        <li><i class="bi bi-check-circle-fill"></i> SEO-optimised code structure from day one</li>
                        <li><i class="bi bi-check-circle-fill"></i> Secure, scalable architecture built for growth</li>
                        <li><i class="bi bi-check-circle-fill"></i> Conversion-optimised layouts and CTAs</li>
                    </ul>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md mt-3">
                        Start Your Project <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="wd-about-img-wrap">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="Strategic Web Development"
                             class="wd-about-img">
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         4. SERVICES GRID — NUMBERED CARDS (2-col)
         ============================================================ --}}
    <section class="section wd-services-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-grid-3x3-gap"></i> Our Services</div>
                <h2 class="section-title">Comprehensive <span>Web Development Services</span></h2>
                <p class="section-description">
                    From business websites to enterprise web platforms — we deliver end-to-end development
                    solutions engineered to your goals and your audience.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6 col-md-6">
                    <div class="wd-svc-card">
                        <div class="wd-svc-num">01</div>
                        <div class="wd-svc-icon"><i class="bi bi-globe"></i></div>
                        <h3>Custom Website Development</h3>
                        <p>Bespoke websites built from scratch around your brand, audience, and goals. No templates —
                            every element engineered for performance, conversion, and long-term scalability.</p>
                        <div class="wd-svc-tags">
                            <span>HTML5 / CSS3</span><span>React</span><span>Laravel</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="wd-svc-card">
                        <div class="wd-svc-num">02</div>
                        <div class="wd-svc-icon"><i class="bi bi-cart3"></i></div>
                        <h3>E-Commerce Development</h3>
                        <p>High-converting online stores with seamless checkout flows, payment gateway integrations,
                            and robust inventory management — built to maximise your online revenue.</p>
                        <div class="wd-svc-tags">
                            <span>Shopify</span><span>WooCommerce</span><span>Custom</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="wd-svc-card">
                        <div class="wd-svc-num">03</div>
                        <div class="wd-svc-icon"><i class="bi bi-plug"></i></div>
                        <h3>API & Integration Development</h3>
                        <p>We design and build robust RESTful and GraphQL APIs, and seamlessly connect your platform
                            to CRMs, payment gateways, ERPs, and any third-party service.</p>
                        <div class="wd-svc-tags">
                            <span>REST API</span><span>GraphQL</span><span>Webhooks</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="wd-svc-card">
                        <div class="wd-svc-num">04</div>
                        <div class="wd-svc-icon"><i class="bi bi-shield-check"></i></div>
                        <h3>Security & Performance Optimisation</h3>
                        <p>We implement enterprise-grade security practices and optimise every layer of your website
                            for speed, Core Web Vitals scores, and OWASP compliance.</p>
                        <div class="wd-svc-tags">
                            <span>SSL / HTTPS</span><span>OWASP</span><span>Lighthouse</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="wd-svc-card">
                        <div class="wd-svc-num">05</div>
                        <div class="wd-svc-icon"><i class="bi bi-window-stack"></i></div>
                        <h3>CMS Website Development</h3>
                        <p>Powerful, easy-to-manage CMS websites on WordPress, Webflow, and headless platforms —
                            giving your team full content control without touching code.</p>
                        <div class="wd-svc-tags">
                            <span>WordPress</span><span>Webflow</span><span>Contentful</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="wd-svc-card">
                        <div class="wd-svc-num">06</div>
                        <div class="wd-svc-icon"><i class="bi bi-cpu"></i></div>
                        <h3>Web Application Development</h3>
                        <p>Complex, scalable web applications — SaaS platforms, portals, dashboards, and internal
                            tools — using modern frameworks and clean, maintainable architecture.</p>
                        <div class="wd-svc-tags">
                            <span>Next.js</span><span>Node.js</span><span>Vue.js</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         5. ADVANTAGES — 3-COLUMN HIGHLIGHTS
         ============================================================ --}}
    <section class="wd-advantages-section">
        <div class="container">
            <div class="wd-adv-grid">

                <div class="wd-adv-item">
                    <div class="wd-adv-icon">
                        <i class="bi bi-trophy-fill"></i>
                    </div>
                    <h4>Proven Track Record</h4>
                    <p>300+ websites and web applications delivered for Australian businesses across every major
                        industry — from early-stage startups to established enterprise organisations.</p>
                </div>

                <div class="wd-adv-divider"></div>

                <div class="wd-adv-item">
                    <div class="wd-adv-icon">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                    <h4>Cost-Effective Excellence</h4>
                    <p>We deliver enterprise-quality web solutions without the enterprise price tag — transparent
                        fixed-price projects with no hidden fees, ever. Maximum value for your investment.</p>
                </div>

                <div class="wd-adv-divider"></div>

                <div class="wd-adv-item">
                    <div class="wd-adv-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4>User-First Approach</h4>
                    <p>Every decision we make is grounded in user behaviour data and UX best practices — ensuring
                        your website delivers experiences that engage, retain, and convert your visitors.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         6. INDUSTRIES WE SERVE
         ============================================================ --}}
    <section class="section wd-industries-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-building"></i> Industries We Serve</div>
                <h2 class="section-title">Web Development <span>Across Every Sector</span></h2>
                <p class="section-description">
                    Our team has built high-performance websites for businesses across Melbourne and Australia,
                    spanning a wide range of industries and verticals.
                </p>
            </div>

            <div class="row g-3">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-heart-pulse"></i></div>
                        <span>Healthcare</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-cart3"></i></div>
                        <span>E-Commerce & Retail</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-mortarboard"></i></div>
                        <span>Education & EdTech</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-bank"></i></div>
                        <span>Finance & Fintech</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-building"></i></div>
                        <span>Real Estate</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-truck"></i></div>
                        <span>Logistics & Transport</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-cpu"></i></div>
                        <span>SaaS & Technology</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="wd-ind-card">
                        <div class="wd-ind-icon"><i class="bi bi-briefcase"></i></div>
                        <span>Professional Services</span>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         7. WHY CHOOSE US — NUMBERED LIST (2-col)
         ============================================================ --}}
    <section class="section wd-why-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-patch-check"></i> Why Vetora</div>
                <h2 class="section-title">Why Businesses Choose <span>Our Web Team</span></h2>
                <p class="section-description">
                    We don't just write code — we engineer digital solutions that solve real business problems
                    and deliver lasting competitive advantage for your brand.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="wd-why-item">
                        <div class="wd-why-num">01</div>
                        <div class="wd-why-body">
                            <h4>Performance-First Development</h4>
                            <p>Every website we build is engineered for speed. We achieve 95+ Lighthouse scores
                                consistently — because faster sites rank higher and convert better.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="wd-why-item">
                        <div class="wd-why-num">02</div>
                        <div class="wd-why-body">
                            <h4>SEO-Optimised From Day One</h4>
                            <p>Our developers write clean, semantic HTML that search engines love — giving your
                                site a structural SEO advantage from the first day of launch.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="wd-why-item">
                        <div class="wd-why-num">03</div>
                        <div class="wd-why-body">
                            <h4>Scalable, Future-Proof Architecture</h4>
                            <p>We choose the right tech stack for your growth stage so your website never becomes
                                a bottleneck — built to grow alongside your business ambitions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="wd-why-item">
                        <div class="wd-why-num">04</div>
                        <div class="wd-why-body">
                            <h4>Security & Compliance Built In</h4>
                            <p>SSL, OWASP compliance, input validation, and regular security audits — protecting
                                your business, your data, and your users at every layer.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="wd-why-item">
                        <div class="wd-why-num">05</div>
                        <div class="wd-why-body">
                            <h4>Transparent Process & On-Time Delivery</h4>
                            <p>Clear milestones, weekly progress updates, and an exceptional track record of
                                delivering on time and within budget — every single project.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="wd-why-item">
                        <div class="wd-why-num">06</div>
                        <div class="wd-why-body">
                            <h4>End-to-End Ownership</h4>
                            <p>From strategy and design through to deployment and ongoing support — we own the
                                full lifecycle of your project so you have one reliable partner, not many.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         8. DEVELOPMENT PROCESS — VISUAL TIMELINE
         ============================================================ --}}
    <section class="section wd-process-section" id="wd-process">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-arrow-repeat"></i> How We Work</div>
                <h2 class="section-title">Our <span>Development Process</span></h2>
                <p class="section-description">
                    A proven, structured process that ensures every project is delivered on time, on budget,
                    and to the highest standard of quality — with full transparency at every stage.
                </p>
            </div>

            <div class="wd-timeline">

                <div class="wd-tl-item">
                    <div class="wd-tl-num">01</div>
                    <div class="wd-tl-connector"></div>
                    <div class="wd-tl-card">
                        <div class="wd-tl-card-left">
                            <div class="wd-tl-icon"><i class="bi bi-search"></i></div>
                            <h4>Discovery & Strategy</h4>
                            <p>In-depth discovery session to understand your business, audience, competitors, and goals.
                                We define scope, success metrics, and technical requirements.</p>
                            <div class="wd-tl-tags">
                                <span>Business Analysis</span>
                                <span>Competitor Research</span>
                                <span>Goal Setting</span>
                            </div>
                        </div>
                        <div class="wd-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                                 alt="Discovery & Strategy"
                                 class="wd-tl-img">
                        </div>
                    </div>
                </div>

                <div class="wd-tl-item">
                    <div class="wd-tl-num">02</div>
                    <div class="wd-tl-connector"></div>
                    <div class="wd-tl-card">
                        <div class="wd-tl-card-left">
                            <div class="wd-tl-icon"><i class="bi bi-diagram-3"></i></div>
                            <h4>Planning & Architecture</h4>
                            <p>We design the technical blueprint — selecting tech stack, defining site architecture,
                                mapping user journeys, and planning all integrations upfront.</p>
                            <div class="wd-tl-tags">
                                <span>Tech Stack Selection</span>
                                <span>Sitemap</span>
                                <span>Database Design</span>
                            </div>
                        </div>
                        <div class="wd-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                                 alt="Planning & Architecture"
                                 class="wd-tl-img">
                        </div>
                    </div>
                </div>

                <div class="wd-tl-item">
                    <div class="wd-tl-num">03</div>
                    <div class="wd-tl-connector"></div>
                    <div class="wd-tl-card">
                        <div class="wd-tl-card-left">
                            <div class="wd-tl-icon"><i class="bi bi-palette"></i></div>
                            <h4>UI/UX Design</h4>
                            <p>Visually stunning, user-centred designs — wireframes, high-fidelity mockups, and
                                interactive prototypes before a single line of code is written.</p>
                            <div class="wd-tl-tags">
                                <span>Wireframes</span>
                                <span>Hi-Fi Mockups</span>
                                <span>Prototyping</span>
                            </div>
                        </div>
                        <div class="wd-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                                 alt="UI/UX Design"
                                 class="wd-tl-img">
                        </div>
                    </div>
                </div>

                <div class="wd-tl-item">
                    <div class="wd-tl-num">04</div>
                    <div class="wd-tl-connector"></div>
                    <div class="wd-tl-card">
                        <div class="wd-tl-card-left">
                            <div class="wd-tl-icon"><i class="bi bi-code-slash"></i></div>
                            <h4>Development & Build</h4>
                            <p>Our engineers build with clean, well-structured code following agile sprints — with
                                regular demos and clear communication throughout the entire build phase.</p>
                            <div class="wd-tl-tags">
                                <span>Agile Sprints</span>
                                <span>Frontend</span>
                                <span>Backend</span>
                            </div>
                        </div>
                        <div class="wd-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                                 alt="Development & Build"
                                 class="wd-tl-img">
                        </div>
                    </div>
                </div>

                <div class="wd-tl-item">
                    <div class="wd-tl-num">05</div>
                    <div class="wd-tl-connector"></div>
                    <div class="wd-tl-card">
                        <div class="wd-tl-card-left">
                            <div class="wd-tl-icon"><i class="bi bi-check2-all"></i></div>
                            <h4>Testing & QA</h4>
                            <p>Rigorous multi-device testing, performance auditing, security scanning, and cross-browser
                                validation before anything goes live. Quality is non-negotiable.</p>
                            <div class="wd-tl-tags">
                                <span>Cross-Device</span>
                                <span>Performance Audit</span>
                                <span>Security Scan</span>
                            </div>
                        </div>
                        <div class="wd-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                                 alt="Testing & QA"
                                 class="wd-tl-img">
                        </div>
                    </div>
                </div>

                <div class="wd-tl-item wd-tl-last">
                    <div class="wd-tl-num">06</div>
                    <div class="wd-tl-card">
                        <div class="wd-tl-card-left">
                            <div class="wd-tl-icon"><i class="bi bi-rocket-takeoff"></i></div>
                            <h4>Launch & Ongoing Support</h4>
                            <p>End-to-end deployment management with zero-downtime launch, followed by maintenance
                                packages, performance monitoring, and ongoing development support.</p>
                            <div class="wd-tl-tags">
                                <span>Deployment</span>
                                <span>SSL & DNS</span>
                                <span>Ongoing Support</span>
                            </div>
                        </div>
                        <div class="wd-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                                 alt="Launch & Ongoing Support"
                                 class="wd-tl-img">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         9. TECH STACK
         ============================================================ --}}
    <section class="technologies-section section">
        <div class="container">
            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-cpu"></i> Our Stack</div>
                <h2 class="section-title">Technology & <span>Tools We Use</span></h2>
                <p class="section-description mx-auto">
                    We choose technologies that are proven, performant, and future-proof — ensuring your
                    website is built on a foundation that serves your business for years to come.
                </p>
            </div>
            @include('common.tech-stack')
        </div>
    </section>


    {{-- ============================================================
         10. CTA SECTION
         ============================================================ --}}
    <section class="section wd-cta-section">
        <div class="container">
            <div class="wd-cta-inner">
                <div class="wd-cta-orb wd-cta-orb-1"></div>
                <div class="wd-cta-orb wd-cta-orb-2"></div>
                <div class="wd-cta-content">
                    <span class="wd-cta-eyebrow">Ready to Build?</span>
                    <h2>Let's Build Your Dream<br><span>Website Together</span></h2>
                    <p>
                        Turn your vision into a high-performance website that works for your business 24/7.
                        Our team is ready to start — get in touch today for a free consultation.
                    </p>
                    <div class="wd-cta-btns">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="wd-btn-white">
                            Get a Free Quote <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="wd-btn-ghost">
                            <i class="bi bi-chat-dots"></i> Let's Talk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         11. TESTIMONIALS
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
                    We help businesses scale with premium digital solutions, AI innovation,
                    and high-performance web applications.
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
         12. FAQ
         ============================================================ --}}
    <section class="section pt-0">
        <div class="container">

            <div class="section-heading text-center mb-5">
                <div class="section-subtitle"><i class="bi bi-patch-question"></i> Got Questions?</div>
                <h2 class="section-title">Frequently <span>Asked Questions</span></h2>
                <p class="section-description">
                    Everything you need to know about our website development services.
                </p>
            </div>

            <div class="accordion" id="wdFaqMain">
                <div class="row g-4">

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#wdfaq1">
                                    1. How long does it take to build a website?
                                </button>
                            </h2>
                            <div id="wdfaq1" class="accordion-collapse collapse show" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Timelines vary based on scope. A standard business website typically takes 3–6 weeks,
                                    while a complex web application or e-commerce platform can take 8–16 weeks. During our
                                    initial consultation, we provide a detailed project timeline tailored to your requirements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq2">
                                    2. How much does a website cost?
                                </button>
                            </h2>
                            <div id="wdfaq2" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Website costs depend on the complexity, features, and technology required. We provide
                                    transparent, detailed proposals after understanding your requirements — no hidden costs,
                                    no surprises, ever.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq3">
                                    3. Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="wdfaq3" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Absolutely. Every website we build is designed mobile-first and fully responsive across
                                    all devices. With over 60% of web traffic coming from mobile, we treat responsiveness as
                                    a fundamental requirement on every project.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq4">
                                    4. Will my website be optimised for SEO?
                                </button>
                            </h2>
                            <div id="wdfaq4" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Yes. We build with SEO in mind from day one — semantic HTML structure, optimised page
                                    speed, clean URL architecture, meta tag implementation, schema markup, and Core Web
                                    Vitals optimisation for a significant structural SEO advantage.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq5">
                                    5. Which technologies do you use?
                                </button>
                            </h2>
                            <div id="wdfaq5" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    We choose the right technology for each project. For custom websites and web apps, we
                                    use React, Next.js, Laravel, and Node.js. For CMS sites, we use WordPress, Webflow,
                                    and headless CMS solutions. We always recommend what offers the best performance and
                                    long-term maintainability for your specific use case.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq6">
                                    6. Can you redesign my existing website?
                                </button>
                            </h2>
                            <div id="wdfaq6" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Yes. We have extensive experience redesigning existing websites — improving design,
                                    performance, SEO, and conversion rates while preserving your content and brand equity.
                                    We start with a thorough audit before recommending a roadmap.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq7">
                                    7. Do you provide hosting and domain services?
                                </button>
                            </h2>
                            <div id="wdfaq7" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    We advise on and assist with hosting setup and domain management, working with AWS,
                                    Google Cloud, and DigitalOcean. We recommend solutions based on your traffic,
                                    performance, and budget — and can manage the full deployment on your behalf.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq8">
                                    8. Will I be able to update the website myself?
                                </button>
                            </h2>
                            <div id="wdfaq8" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Yes. We build websites with CMS or admin panels that make it easy to update content,
                                    add pages, and manage products without technical knowledge. We also provide training
                                    and documentation so your team can manage the site independently.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq9">
                                    9. Do you offer ongoing support after launch?
                                </button>
                            </h2>
                            <div id="wdfaq9" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Yes. We offer flexible maintenance and support packages covering security updates,
                                    performance monitoring, bug fixes, content updates, and ongoing feature development.
                                    We aim to be your long-term digital partner, not just a one-off vendor.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#wdfaq10">
                                    10. How do we get started?
                                </button>
                            </h2>
                            <div id="wdfaq10" class="accordion-collapse collapse" data-bs-parent="#wdFaqMain">
                                <div class="accordion-body">
                                    Simply request a free consultation via our quote form or contact page. We'll schedule
                                    a discovery call to understand your requirements, then provide a detailed proposal and
                                    project timeline. Most projects kick off within 1–2 weeks of signing.
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
    </script>
@endsection
