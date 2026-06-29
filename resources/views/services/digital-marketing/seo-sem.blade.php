@extends('layouts.app')


@section('meta')
    <title>SEO & SEM Services in Melbourne - Vetora Solutions</title>
    <meta name="description"
        content="Expert SEO & SEM services in Melbourne. Vetora Solutions drives organic growth, Google rankings, and paid search results that deliver real, measurable ROI for your business.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/web-development.css') }}?v=1.0.2">
    <link rel="stylesheet" href="{{ asset('Assets/css/seo-sem.css') }}?v=1.0.2">
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
                        <i class="bi bi-graph-up-arrow"></i>&nbsp; SEO & SEM &bull; Melbourne
                    </span>
                    <h1>
                        Rank Higher. <span class="wd-hero-grad">Grow Faster.</span><br>
                        Convert Better.
                    </h1>
                    <p class="wd-hero-desc">
                        Data-driven SEO and paid search strategies that put your business in front of the right
                        audience — at the right moment. We engineer sustainable organic growth and high-ROI
                        ad campaigns for Australian businesses.
                    </p>
                    <div class="wd-hero-actions">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <button class="btn btn-gradiant btn-md">
                                Get a Free SEO Audit <i class="bi bi-arrow-right"></i>
                            </button>
                        </a>
                        <a href="#seo-roadmap" class="wd-hero-link">
                            <i class="bi bi-play-circle-fill"></i> Our Process
                        </a>
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
        'clientsDesc'  => 'We help Australian startups, SMEs, and enterprise brands grow their digital presence through proven SEO and SEM strategies that deliver measurable results.'
    ])


    {{-- ============================================================
         3. INTRO A — image left, text right
         ============================================================ --}}
    <section class="section seo-intro-a">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="seo-img-wrap">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="Creative & Data-Driven Digital Marketing"
                             class="seo-section-img">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-subtitle"><i class="bi bi-bar-chart-line"></i> What We Do</div>
                    <h2 class="section-title">
                        Creative & Data-Driven<br>
                        <span>Digital Marketing</span>
                    </h2>
                    <p class="seo-body-text">
                        At Vetora Solutions, we don't just drive traffic — we engineer precision digital marketing
                        strategies that attract, engage, and convert your ideal customers. Our SEO and SEM campaigns
                        are built on data intelligence, not guesswork.
                    </p>
                    <p class="seo-body-text">
                        Every campaign is designed around your specific business objectives, target audience behaviour,
                        and competitive landscape — delivering sustainable organic growth and high-ROI paid search
                        results that compound month after month.
                    </p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md mt-2">
                        Get a Free SEO Audit <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         4. WHY PARTNER — full-width centered + stats
         ============================================================ --}}
    <section class="seo-why-partner">
        <div class="container">
            <div class="seo-wp-inner">

                <div class="section-subtitle"><i class="bi bi-patch-check"></i> Why Choose Vetora</div>
                <h2 class="section-title">
                    Why Partner with Vetora<br>
                    <span>for SEO & SEM Solutions?</span>
                </h2>
                <p class="seo-wp-text">
                    In today's competitive digital landscape, ranking on Page 1 is no longer optional — it's the
                    difference between growing and being invisible. Vetora Solutions delivers full-spectrum SEO and
                    SEM built on technical expertise, strategic content, and measurable outcomes.
                </p>
                <p class="seo-wp-text">
                    We've helped 300+ Australian businesses amplify their Google rankings, multiply organic traffic,
                    and generate real revenue through search. As your dedicated digital growth partner, we focus on
                    results that matter — not vanity metrics.
                </p>

                <div class="seo-wp-stats">
                    <div class="seo-wp-stat">
                        <span class="seo-wp-num">500+</span>
                        <span class="seo-wp-lbl">Keywords on Page 1</span>
                    </div>
                    <div class="seo-wp-stat">
                        <span class="seo-wp-num">300%</span>
                        <span class="seo-wp-lbl">Average Traffic Growth</span>
                    </div>
                    <div class="seo-wp-stat">
                        <span class="seo-wp-num">98%</span>
                        <span class="seo-wp-lbl">Client Retention Rate</span>
                    </div>
                    <div class="seo-wp-stat">
                        <span class="seo-wp-num">100%</span>
                        <span class="seo-wp-lbl">White-Hat Techniques</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         5. INTRO B — text left, image right
         ============================================================ --}}
    <section class="section seo-intro-b">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="section-subtitle"><i class="bi bi-graph-up-arrow"></i> Our Approach</div>
                    <h2 class="section-title">
                        Unparalleled Strategies,<br>
                        <span>Astonishing SEO Triumphs</span>
                    </h2>
                    <p class="seo-body-text">
                        We innovate, we elevate, we propel your brand to unseen heights. Our Melbourne-based SEO
                        team combines deep technical expertise with creative content strategy to consistently
                        outperform competitors across every major search vertical. From enterprise-level technical audits to hyper-local Google Business optimisation and
                        precision Google Ads campaigns.
                    </p>
                    <p class="seo-body-text">
                        we deliver a complete, cohesive search strategy that
                        compounds in value month after month.
                    </p>
                    <ul class="seo-points">
                        <li><i class="bi bi-check2-circle"></i> Data-backed keyword research and intent mapping</li>
                        <li><i class="bi bi-check2-circle"></i> Technical SEO that fixes what Google penalises</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="seo-img-wrap">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="SEO Strategies Melbourne"
                             class="seo-section-img">
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         6. SERVICES GRID — 4-col icon cards
         ============================================================ --}}
    <section class="section seo-services-grid">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-grid-3x3-gap"></i> Our Services</div>
                <h2 class="section-title">Comprehensive <span>SEO & SEM Services</span></h2>
                <p class="section-description">
                    End-to-end search marketing solutions — from technical foundations to paid campaigns —
                    designed to drive traffic that converts into real revenue.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">01</div>
                        <div class="seo-svc-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h4>On-Page SEO</h4>
                        <p>Title tags, meta descriptions, heading hierarchy, content structure, and internal linking — optimised for maximum search visibility.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">02</div>
                        <div class="seo-svc-icon"><i class="bi bi-geo-alt"></i></div>
                        <h4>Local SEO</h4>
                        <p>Google Business Profile optimisation, local citations, and geo-targeted keywords so nearby customers find you first.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">03</div>
                        <div class="seo-svc-icon"><i class="bi bi-cart3"></i></div>
                        <h4>E-Commerce SEO</h4>
                        <p>Specialised SEO for Shopify, WooCommerce, and custom stores — driving purchase-intent traffic that converts.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">04</div>
                        <div class="seo-svc-icon"><i class="bi bi-pencil-square"></i></div>
                        <h4>Content Marketing</h4>
                        <p>SEO-optimised blog posts, landing pages, and pillar content that builds topical authority and earns rankings.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">05</div>
                        <div class="seo-svc-icon"><i class="bi bi-tools"></i></div>
                        <h4>Technical SEO</h4>
                        <p>Crawlability, Core Web Vitals, site speed, schema markup, and HTTPS compliance — fixing what Google penalises.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">06</div>
                        <div class="seo-svc-icon"><i class="bi bi-bar-chart-line"></i></div>
                        <h4>Conversion Rate Optimisation</h4>
                        <p>A/B testing, landing page optimisation, and user behaviour analysis that turns existing traffic into customers.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">07</div>
                        <div class="seo-svc-icon"><i class="bi bi-megaphone"></i></div>
                        <h4>Google Ads (SEM)</h4>
                        <p>High-performance Google Ads campaigns — search, display, and remarketing — built for maximum ROI and lowest CPA.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="seo-svc-card">
                        <div class="seo-svc-num">08</div>
                        <div class="seo-svc-icon"><i class="bi bi-link-45deg"></i></div>
                        <h4>Link Building</h4>
                        <p>High-authority, niche-relevant backlinks through digital PR, guest posting, and strategic editorial outreach.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         7. WHY CHOOSE US — 2-col: text left, bullet list right
         ============================================================ --}}
    <section class="section seo-why-section">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-5">
                    <div class="section-subtitle"><i class="bi bi-award"></i> Why Vetora</div>
                    <h2 class="section-title">
                        Why Businesses Choose<br>
                        <span>Our SEO Team</span>
                    </h2>
                    <p class="seo-body-text">
                        We combine deep technical SEO knowledge, creative content strategy, and data-led PPC
                        management to deliver sustainable rankings and measurable ROI — month after month.
                        No lock-in contracts. No vanity metrics. Just results.
                    </p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md mt-2">
                        Work With Us <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="seo-why-list">

                        <div class="seo-why-item">
                            <div class="seo-why-icon"><i class="bi bi-trophy-fill"></i></div>
                            <div>
                                <h5>Proven Track Record</h5>
                                <p>300+ Australian businesses ranked on Page 1 across competitive industries — from e-commerce to healthcare.</p>
                            </div>
                        </div>

                        <div class="seo-why-item">
                            <div class="seo-why-icon"><i class="bi bi-shield-fill-check"></i></div>
                            <div>
                                <h5>100% White-Hat SEO</h5>
                                <p>We never use black-hat tactics. Our ethical approach protects your domain from penalties and builds lasting authority.</p>
                            </div>
                        </div>

                        <div class="seo-why-item">
                            <div class="seo-why-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <h5>Local & National Experts</h5>
                                <p>Deep knowledge of the Australian search landscape — local intent patterns, competitor intelligence, and geo-specific opportunities.</p>
                            </div>
                        </div>

                        <div class="seo-why-item">
                            <div class="seo-why-icon"><i class="bi bi-pencil-fill"></i></div>
                            <div>
                                <h5>Content-Driven Growth</h5>
                                <p>Our SEO engineers and content strategists work together to build topical authority that earns rankings and engages your audience.</p>
                            </div>
                        </div>

                        <div class="seo-why-item">
                            <div class="seo-why-icon"><i class="bi bi-clipboard-data-fill"></i></div>
                            <div>
                                <h5>Transparent Reporting</h5>
                                <p>Monthly reports covering rankings, traffic, conversions, and ad ROI — real numbers that connect to your business goals.</p>
                            </div>
                        </div>

                        <div class="seo-why-item">
                            <div class="seo-why-icon"><i class="bi bi-arrow-repeat"></i></div>
                            <div>
                                <h5>End-to-End Digital Marketing</h5>
                                <p>From SEO to Google Ads to content — we manage the full search funnel so you have one accountable partner, not many.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         8. INDUSTRIES
         ============================================================ --}}
    <section class="section seo-industries-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-building"></i> Industries We Serve</div>
                <h2 class="section-title">SEO & SEM <span>Across Every Sector</span></h2>
                <p class="section-description">
                    We've driven search visibility and paid search ROI for businesses across Melbourne and
                    Australia, spanning a wide range of industries and verticals.
                </p>
            </div>

            <div class="row g-3">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-cart3"></i></div>
                        <span>E-Commerce & Retail</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-heart-pulse"></i></div>
                        <span>Healthcare & Medical</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-building"></i></div>
                        <span>Real Estate</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-bank"></i></div>
                        <span>Finance & Fintech</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-mortarboard"></i></div>
                        <span>Education & EdTech</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-cup-hot"></i></div>
                        <span>Hospitality & Tourism</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-cpu"></i></div>
                        <span>SaaS & Technology</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="seo-ind-card">
                        <div class="seo-ind-icon"><i class="bi bi-briefcase"></i></div>
                        <span>Professional Services</span>
                    </div>
                </div>
            </div>

        </div>
    </section>


    {{-- ============================================================
         9. ROADMAP — numbered steps, 2-col list
         ============================================================ --}}
    <section class="section seo-roadmap-section" id="seo-roadmap">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-map"></i> Our Process</div>
                <h2 class="section-title">Our SEO & SEM <span>Roadmap</span></h2>
                <p class="section-description">
                    A proven 10-step process that delivers consistent ranking improvements, traffic growth,
                    and paid search ROI — with full transparency at every stage.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">

                    <div class="seo-step">
                        <div class="seo-step-num">01</div>
                        <div class="seo-step-body">
                            <h4>Initial Website Audit</h4>
                            <p>Comprehensive audit of your current website — identifying technical issues, content gaps, backlink weaknesses, and ranking opportunities.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">02</div>
                        <div class="seo-step-body">
                            <h4>Keyword Research</h4>
                            <p>In-depth keyword research targeting commercial intent, search volume, and competitive difficulty — mapped to your buyer journey.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">03</div>
                        <div class="seo-step-body">
                            <h4>On-Page Optimisation</h4>
                            <p>Systematic optimisation of title tags, headings, content, internal links, and URL structure across every key page on your website.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">04</div>
                        <div class="seo-step-body">
                            <h4>Technical SEO</h4>
                            <p>Resolving crawl errors, indexation issues, page speed, Core Web Vitals, schema markup, and mobile usability — everything Google rewards.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">05</div>
                        <div class="seo-step-body">
                            <h4>Mobile Optimisation</h4>
                            <p>Ensuring your website delivers a flawless experience across all devices — critical for Google's mobile-first indexing and user retention.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="seo-step">
                        <div class="seo-step-num">06</div>
                        <div class="seo-step-body">
                            <h4>Content Strategy</h4>
                            <p>Creating high-quality, keyword-targeted blog posts, landing pages, and pillar content that builds topical authority month by month.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">07</div>
                        <div class="seo-step-body">
                            <h4>Local SEO</h4>
                            <p>Google Business Profile optimisation, local citation building, and geo-specific keyword targeting to dominate your local search market.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">08</div>
                        <div class="seo-step-body">
                            <h4>Link Building</h4>
                            <p>Strategic acquisition of high-authority, niche-relevant backlinks through digital PR, guest posting, and editorial outreach campaigns.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">09</div>
                        <div class="seo-step-body">
                            <h4>SEM Campaign Management</h4>
                            <p>Launching and optimising precision Google Ads campaigns — search, display, and remarketing — with ongoing bid management for maximum ROI.</p>
                        </div>
                    </div>

                    <div class="seo-step">
                        <div class="seo-step-num">10</div>
                        <div class="seo-step-body">
                            <h4>Monitoring & Reporting</h4>
                            <p>Monthly performance reports covering rankings, organic traffic, conversions, and ad ROI — with ongoing strategy refinements based on data.</p>
                        </div>
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
                <div class="section-subtitle"><i class="bi bi-cpu"></i> Our Stack</div>
                <h2 class="section-title">Tools & <span>Technologies We Use</span></h2>
                <p class="section-description mx-auto">
                    We leverage industry-leading SEO tools, analytics platforms, and automation
                    systems to deliver data-driven results that consistently outperform the competition.
                </p>
            </div>
            @include('common.tech-stack')
        </div>
    </section>


    {{-- ============================================================
         11. CTA
         ============================================================ --}}
    <section class="section seo-cta-section">
        <div class="container">
            <div class="seo-cta-inner">
                <div class="seo-cta-orb seo-cta-orb-1"></div>
                <div class="seo-cta-orb seo-cta-orb-2"></div>
                <div class="seo-cta-content">
                    <span class="seo-cta-eyebrow">Ready to Rank?</span>
                    <h2>Let's Build Your SEO<br><span>Growth Engine Together</span></h2>
                    <p>
                        Get a free, no-obligation SEO audit and discover exactly what's holding your
                        rankings back. Our team is ready to start — book your consultation today.
                    </p>
                    <div class="seo-cta-btns">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="seo-btn-white">
                            Get a Free SEO Audit <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="seo-btn-ghost">
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
                <div class="section-subtitle"><i class="bi bi-stars"></i> Client Testimonials</div>
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
         13. FAQ
         ============================================================ --}}
    <section class="section pt-0">
        <div class="container">

            <div class="section-heading text-center mb-5">
                <div class="section-subtitle"><i class="bi bi-patch-question"></i> Got Questions?</div>
                <h2 class="section-title">Frequently <span>Asked Questions</span></h2>
                <p class="section-description">
                    Everything you need to know about our SEO and SEM services.
                </p>
            </div>

            <div class="accordion" id="seoFaqMain">
                <div class="row g-4">

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#seofaq1">
                                    1. What is the difference between SEO and SEM?
                                </button>
                            </h2>
                            <div id="seofaq1" class="accordion-collapse collapse show" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    SEO (Search Engine Optimisation) focuses on improving your organic (unpaid) search rankings
                                    through on-page, technical, and off-page strategies. SEM (Search Engine Marketing) covers
                                    paid search advertising like Google Ads (PPC). Together, they provide a full-funnel search
                                    visibility strategy — SEO for long-term compounding growth, SEM for immediate visibility.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq2">
                                    2. How long does SEO take to show results?
                                </button>
                            </h2>
                            <div id="seofaq2" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Most businesses start seeing meaningful ranking improvements within 3–6 months, with
                                    significant traffic growth typically visible by months 6–12. Timelines depend on your
                                    starting position, industry competitiveness, and scope of work.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq3">
                                    3. Do you use only white-hat SEO techniques?
                                </button>
                            </h2>
                            <div id="seofaq3" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Absolutely. We exclusively use white-hat, Google-compliant SEO strategies — ethical link
                                    building, quality content creation, and technical best practices. We never use black-hat
                                    tactics. This protects your domain from Google penalties and builds rankings that last.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq4">
                                    4. What does your monthly SEO report include?
                                </button>
                            </h2>
                            <div id="seofaq4" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Our monthly reports cover keyword ranking movements, organic traffic growth, backlinks
                                    acquired, technical issues resolved, content published, and conversions attributed to
                                    organic search. SEM clients also receive ad spend, CTR, CPC, and ROAS data.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq5">
                                    5. Can you improve my Google ranking quickly?
                                </button>
                            </h2>
                            <div id="seofaq5" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    For immediate visibility, Google Ads (SEM) can put you on Page 1 from Day 1. For organic
                                    SEO, quick wins are possible through on-page optimisation and technical fixes — often
                                    showing improvements within 4–8 weeks.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq6">
                                    6. Do you offer local SEO services in Melbourne?
                                </button>
                            </h2>
                            <div id="seofaq6" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Yes. Local SEO is one of our core specialisations. We optimise your Google Business Profile,
                                    build local citations, target suburb and city-specific keywords, and work to get your
                                    business into the Google Map Pack.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq7">
                                    7. Do you manage Google Ads campaigns?
                                </button>
                            </h2>
                            <div id="seofaq7" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Yes. We manage end-to-end Google Ads campaigns including Search, Display, Shopping,
                                    and YouTube ads — with keyword research, ad copywriting, bid management, A/B testing,
                                    and conversion tracking.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq8">
                                    8. Do you offer e-commerce SEO?
                                </button>
                            </h2>
                            <div id="seofaq8" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Yes. We specialise in e-commerce SEO for Shopify, WooCommerce, Magento, and custom stores —
                                    including product/category optimisation, structured data, and site architecture improvements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq9">
                                    9. How is your SEO pricing structured?
                                </button>
                            </h2>
                            <div id="seofaq9" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Flexible monthly retainer packages tailored to your business size and goals. After an
                                    initial audit, we provide a transparent proposal with a fixed price and no hidden fees.
                                    No long-term lock-in contracts required.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#seofaq10">
                                    10. How do we get started?
                                </button>
                            </h2>
                            <div id="seofaq10" class="accordion-collapse collapse" data-bs-parent="#seoFaqMain">
                                <div class="accordion-body">
                                    Request a free SEO audit via our quote form. We'll review your website, identify key
                                    opportunities, and schedule a discovery call — with most campaigns able to kick off
                                    within 1–2 weeks of agreement.
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
