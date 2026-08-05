@extends('layouts.app')

@section('meta')
    <title>About Us — Vetora Solutions</title>
    <meta name="description" content="Learn about Vetora Solutions — our story, mission, values, and the leadership team driving innovation in software development and digital transformation.">
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('Assets/css/about-us.css') }}?v=1.0.1">
@endsection

@section('content')

    <!-- §1  HERO -->
<section class="au-hero"
         style="background-image: url('{{ asset('Assets/Images/Contact-us/contact-us-banner.webp') }}')">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">

                <div class="au-hero-badge">
                    <i class="bi bi-stars"></i> About Vetora Solutions
                </div>

                <h1>
                    We Build Technology<br>
                    That <span>Drives Growth</span>
                </h1>

                <p>
                    At Vetora Solutions, we combine innovation, strategy, and deep technical expertise
                    to craft scalable digital products that help businesses evolve, compete, and thrive
                    in a connected world.
                </p>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="#au-about-sec">
                        <button class="btn btn-gradiant btn-md">
                            Our Story <i class="bi bi-arrow-down"></i>
                        </button>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section>


    <!-- §2  ABOUT US — NUMBERED FEATURES + IMAGE GRID -->
<section class="section" id="au-about-sec">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-12 col-lg-6">

                <div class="section-subtitle">
                <i class="bi bi-stars"></i> About Us
            </div>

                <h2 class="au-about-title">
                    Transforming Ideas Into 
                    <span style="color: var(--secondary);">Digital Success</span>
                </h2>

                <p class="au-about-desc">
                    We are a technology company dedicated to empowering businesses with innovative digital solutions.
                    From software development to AI integration, our team delivers products that create real, lasting impact.
                </p>

                <div class="au-features-grid">

                    <div class="au-feature-item">
                        <div class="au-feature-num">1.</div>
                        <div class="au-feature-title">Who We Are</div>
                        <p class="au-feature-desc">
                            A team of passionate technologists, designers, and strategists committed to your business success.
                        </p>
                    </div>

                    <div class="au-feature-item">
                        <div class="au-feature-num">2.</div>
                        <div class="au-feature-title">What We Do</div>
                        <p class="au-feature-desc">
                            We provide end-to-end digital solutions — from ideation and design to development and deployment.
                        </p>
                    </div>

                    <div class="au-feature-item">
                        <div class="au-feature-num">3.</div>
                        <div class="au-feature-title">How We Help</div>
                        <p class="au-feature-desc">
                            We use agile methodologies, cutting-edge technologies, and collaborative processes to deliver results.
                        </p>
                    </div>

                    <div class="au-feature-item">
                        <div class="au-feature-num">4.</div>
                        <div class="au-feature-title">Create Success Stories</div>
                        <p class="au-feature-desc">
                            With access to our expertise and resources, any ambitious vision can be transformed into reality.
                        </p>
                    </div>

                </div>

                <a href="{{ route('contact') }}">
                    <button class="btn btn-gradiant btn-md">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </button>
                </a>

            </div>

            <div class="col-12 col-lg-6">
                <div class="au-img-grid">

                    <div class="au-img-col">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="Our workspace">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="How we help">
                    </div>

                    <div class="au-img-col">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="Our team collaborating">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                             alt="Innovation at Vetora">
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


    <!-- §3  MISSION & VISION -->
<section class="section au-mv-section">
    <div class="container">

        <div class="section-heading text-center mb-5">
            <div class="section-subtitle">
                <i class="bi bi-stars"></i> Our Purpose
            </div>
            <h2 class="section-title">
                Guided by <span>Mission</span> &amp; <span>Vision</span>
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-12 col-lg-6">
                <div class="au-mv-card">
                    <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                         alt="Our Mission"
                         class="au-mv-img">
                    <div class="au-mv-content">
                        <div class="au-mv-icon icon-mission">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="au-mv-heading">Our Mission</h3>
                        <p class="au-mv-text">
                            Our mission is to shape the future of technology with scalable, secure, and intelligent solutions.
                            By integrating strategy, software engineering, and Generative AI, we create innovations that solve
                            real challenges and help businesses evolve, compete, and grow sustainably.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="au-mv-card">
                    <img src="{{ asset('Assets/Images/hero-banner.png') }}"
                         alt="Our Vision"
                         class="au-mv-img">
                    <div class="au-mv-content">
                        <div class="au-mv-icon icon-vision">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h3 class="au-mv-heading">Our Vision</h3>
                        <p class="au-mv-text">
                            We envision a world where technology empowers businesses, uplifts communities, and improves lives.
                            As a trusted partner, we combine strategy, technology, and human creativity to build a connected,
                            sustainable, and inclusive digital future.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- §4  OUR VALUES -->
<section class="section au-values-section">
    <div class="container">

        <div class="section-heading text-center mb-5">
            <div class="section-subtitle">
                <i class="bi bi-stars"></i> What Drives Us
            </div>
            <h2 class="section-title">Our <span>Values</span></h2>
            <p class="section-description">
                At Vetora, we believe in building long-term relationships with our clients. That's why we work closely
                with you to understand your business goals and create IT solutions that align with them.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-val-card">
                    <div class="au-val-icon">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>
                    <h4 class="au-val-title">Innovation</h4>
                    <p class="au-val-desc">
                        We continuously explore emerging technologies, from AI to automation — to craft solutions
                        that drive transformation &amp; keep businesses future-ready.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-val-card">
                    <div class="au-val-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="au-val-title">Trust</h4>
                    <p class="au-val-desc">
                        We value the relationship we build with our employees, clients, &amp; partners. By fostering
                        respect, reliability, &amp; openness, we create an environment where trust drives every interaction.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-val-card">
                    <div class="au-val-icon">
                        <i class="bi bi-hand-thumbs-up-fill"></i>
                    </div>
                    <h4 class="au-val-title">Ethics</h4>
                    <p class="au-val-desc">
                        We operate with fairness, honesty, and responsibility, ensuring our decisions and solutions
                        are guided by strong ethical principles.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-val-card">
                    <div class="au-val-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4 class="au-val-title">Collaborations</h4>
                    <p class="au-val-desc">
                        We see every engagement as a true partnership, working side-by-side with our clients and
                        teams to achieve shared success.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-val-card">
                    <div class="au-val-icon">
                        <i class="bi bi-emoji-smile-fill"></i>
                    </div>
                    <h4 class="au-val-title">Client-Centricity</h4>
                    <p class="au-val-desc">
                        Your business goals are at the heart of everything we do, ensuring our technology empowers
                        growth, efficiency, and long-term impact.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-val-card">
                    <div class="au-val-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h4 class="au-val-title">Sustainability</h4>
                    <p class="au-val-desc">
                        We are committed to building technology that not only accelerates business growth but also
                        supports a sustainable and responsible future.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- §5  LEADERSHIP TEAM -->
<section class="section au-team-section">
    <div class="container">

        <div class="section-heading text-center mb-5">
            <div class="section-subtitle">
                <i class="bi bi-stars"></i> Meet the Team
            </div>
            <h2 class="section-title">Leadership <span>Team</span></h2>
            <p class="section-description">
                As a leading Software Development Company, Vetora offers a comprehensive suite of services
                led by industry veterans with decades of combined experience.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-team-card">
                    <div class="au-team-photo-wrap">
                        <img src="{{ asset('Assets/Images/about-us/team/jaspal-sarai.webp') }}"
                             alt="Jaspal Sarai"
                             class="au-team-photo"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                        <div class="au-team-initials" style="display:none">PB</div>
                    </div>
                    <h4 class="au-team-name">Prakas Balasubramanian</h4>
                    <p class="au-team-role">COO</p>
                    <div class="au-team-divider"></div>
                    <p class="au-team-bio">
                        Prakas Balasubramanian oversees Trionova's day-to-day operations, ensuring seamless execution across projects, client delivery, and business processes. With extensive experience in technology operations and organizational management, he is dedicated to driving operational excellence, improving efficiency, and fostering a culture of innovation and collaboration that supports sustainable business growth.
                    </p>
                    <div class="au-team-socials">
                        <a href="#" class="au-team-social-link" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="au-team-social-link" aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-team-card">
                    <div class="au-team-photo-wrap">
                        <img src="{{ asset('Assets/Images/about-us/team/amit-dang.webp') }}"
                             alt="Amit Dang"
                             class="au-team-photo"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                        <div class="au-team-initials" style="display:none">DV</div>
                    </div>
                    <h4 class="au-team-name">Durgadevi Vijayakumar</h4>
                    <p class="au-team-role">CEO</p>
                    <div class="au-team-divider"></div>
                    <p class="au-team-bio">
                        Durgadevi Vijayakumar leads Trionova with a vision focused on innovation, customer success, and long-term business growth. She is passionate about delivering impactful digital solutions while building strong client relationships and empowering teams to achieve excellence. Her leadership combines strategic thinking with a commitment to quality, helping organizations embrace digital transformation with confidence.
                    </p>
                    <div class="au-team-socials">
                        <a href="#" class="au-team-social-link" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="au-team-social-link" aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>
 
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="au-team-card">
                    <div class="au-team-photo-wrap">
                        <img src="{{ asset('Assets/Images/about-us/team/michael-elford.webp') }}"
                             alt="Michael Elford"
                             class="au-team-photo"
                             onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                        <div class="au-team-initials" style="display:none">VS</div>
                    </div>
                    <h4 class="au-team-name">Vishnupriya Subramaniam</h4>
                    <p class="au-team-role">Director of Sales and Marketing </p>
                    <div class="au-team-divider"></div>
                    <p class="au-team-bio">
                        Vishnupriya Subramaniam leads the company's sales and marketing initiatives, helping businesses discover innovative technology solutions that drive measurable results. With a customer-centric approach and deep understanding of market trends, she focuses on building lasting client partnerships, expanding brand presence, and delivering strategies that accelerate business growth across diverse industries.
                    </p>
                    <div class="au-team-socials">
                        <a href="#" class="au-team-social-link" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="au-team-social-link" aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- §6  CTA -->
<section class="section au-cta-section"
         style="background-image: url('{{ asset('Assets/Images/Mobile-App/mobile-app-banner.webp') }}')">
    <div class="au-cta-glow"></div>
    <div class="container text-center">

        <div class="au-cta-badge">
            <i class="bi bi-rocket-takeoff"></i> Ready to Start?
        </div>

        <h2 class="au-cta-title">
            Let's Build Something <span>Extraordinary</span><br>Together
        </h2>

        <p class="au-cta-desc">
            Partner with Vetora to transform your vision into market-leading digital products.
            Our expert team is ready to bring your next big idea to life.
        </p>

        <div class="au-cta-actions">
            <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">
                <button class="btn btn-gradiant btn-md">
                    Get a Free Quote <i class="bi bi-arrow-right"></i>
                </button>
            </a>
            <a href="{{ route('contact') }}">
                <button class="btn btn-outline btn-md">
                    Contact Us <i class="bi bi-chat-dots"></i>
                </button>
            </a>
        </div>

    </div>
</section>

@endsection
