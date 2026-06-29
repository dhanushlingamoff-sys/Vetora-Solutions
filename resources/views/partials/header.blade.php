<!-- Navbar Start -->
    <header class="site-header {{ request()->is('thank-you') ? 'thankyou-header' : '' }}">

        <!-- Announcement Bar -->
        <div class="announcement-bar" id="announcementBar">
            <div class="container">
                <div class="announcement-content">
                    <span class="announcement-badge">New</span>
                    <span class="announcement-text">We now offer AI-powered business solutions &mdash; <a
                            href="{{ url('/AI') }}">Explore AI Services</a></span>
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
                        <li><a href="{{ url('/') }}"
                                class="{{ request()->path() === '/' ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}"
                                class="{{ request()->is('about-us') ? 'active' : '' }}">About
                                Us</a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);"
                                class="{{ request()->is('software-development-company-in-melbourne', 'mobile-app-development-company-in-melbourne', 'AI', 'ui-ux-design-services-melbourne', 'website-development-services-melbourne', 'seo-sem-services-melbourne') ? 'active' : '' }}">Services
                                <i class="bi bi-chevron-down"></i></a>

                            <div class="mega-menu">
                                <div class="mega-container">

                                    <div class="mega-column">
                                        <h4>Business Solutions</h4>
                                        <a href="{{ url('/software-development-company-in-melbourne') }}"
                                            class="mega-link">
                                            <span class="mega-icon-wrap">
                                                <i class="bi bi-code-slash"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">Software Development</span>
                                                <span class="mega-link-desc">Custom enterprise-grade software</span>
                                            </span>
                                        </a>
                                        <a href="{{ url('/mobile-app-development-company-in-melbourne') }}"
                                            class="mega-link">
                                            <span class="mega-icon-wrap">
                                                <i class="bi bi-phone"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">Mobile App Development</span>
                                                <span class="mega-link-desc">iOS &amp; Android native apps</span>
                                            </span>
                                        </a>
                                        <a href="{{ url('/AI') }}" class="mega-link">
                                            <span class="mega-icon-wrap">
                                                <i class="bi bi-cpu"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">Artificial Intelligence</span>
                                                <span class="mega-link-desc">AI-powered business automation</span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="mega-column">
                                        <h4>Digital Marketing</h4>
                                        <a href="{{ url('/ui-ux-design-services-melbourne') }}" class="mega-link">
                                            <span class="mega-icon-wrap mega-icon-secondary">
                                                <i class="bi bi-palette"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">UI/UX Designing</span>
                                                <span class="mega-link-desc">Intuitive, conversion-focused design</span>
                                            </span>
                                        </a>
                                        <a href="{{ url('/website-development-services-melbourne') }}" class="mega-link">
                                            <span class="mega-icon-wrap mega-icon-secondary">
                                                <i class="bi bi-globe"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">Website Development</span>
                                                <span class="mega-link-desc">Fast, scalable web solutions</span>
                                            </span>
                                        </a>
                                        <a href="{{ url('/seo-sem-services-melbourne') }}" class="mega-link">
                                            <span class="mega-icon-wrap mega-icon-secondary">
                                                <i class="bi bi-graph-up"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">SEO &amp; SEM</span>
                                                <span class="mega-link-desc">Grow your digital presence</span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="mega-column">
                                        <h4>Blockchain</h4>
                                        <a href="#" class="mega-link">
                                            <span class="mega-icon-wrap mega-icon-tertiary">
                                                <i class="bi bi-link-45deg"></i>
                                            </span>
                                            <span class="mega-link-body">
                                                <span class="mega-link-title">Blockchain Development</span>
                                                <span class="mega-link-desc">Secure decentralized solutions</span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="mega-featured">
                                        <div class="mega-featured-card">
                                            <div class="mega-featured-icon">
                                                <i class="bi bi-rocket-takeoff"></i>
                                            </div>
                                            <h5>Ready to scale?</h5>
                                            <p>Let's build something great together. Get a free consultation today.</p>
                                            <a href="{{ url('/contact-us') }}" class="mega-featured-cta">
                                                Free Consultation <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li><a href="{{ url('/contact-us') }}"
                                class="{{ request()->is('contact-us') ? 'active' : '' }}">Contact Us</a></li>

                        <!-- Mobile CTA -->
                        <li class="mobile-cta">
                            <a href="#"  data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md">
                                Get Started <i class="bi bi-arrow-right"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Desktop CTA -->
                    <a href="#"  data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md nav-btn desktop-btn">
                        Get Started <i class="bi bi-arrow-right"></i>
                    </a>

                </nav>
            </div>
        </div>

    </header>
<!-- Navbar End -->
