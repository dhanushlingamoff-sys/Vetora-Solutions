@extends('layouts.app')

@section('meta')
    <title>Vetora - Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- GOOGLE FONTS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800&family=Roboto+Mono:wght@400;500;600&display=swap"
        rel="stylesheet">
@endsection

@section('content')
    <!-- Hero Section Start -->

    <section class="hero-section" style="background-image: url('Assets/Images/Mobile-App/mobile-app-banner.webp')">
        <div class="container">
            <div class="hero-content">
                <div class="hero-title-wraper">
                    <h1>VETORA SOLUTIONS</h1>
                </div>
                <p>
                    Empowering businesses with Digital Office solutions, custom software development, mobile applications,
                    website development, UI/UX design, and result-driven digital marketing services. We help organisations
                    streamline operations, enhance customer engagement, and accelerate growth through innovative technology
                    solutions.
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

    <!-- About Section Start -->

    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="about-images">

                        <div class="about-img about-img-one">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="AI Technology">
                        </div>

                        <div class="about-card">
                            <p>
                                We combine innovation, technology, and strategic expertise to deliver secure, scalable, and
                                future-ready solutions that create measurable business impact.
                            </p>
                        </div>

                        <div class="about-img about-img-two">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Business Meeting">
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6">
                    <div class="about-content">

                        <div class="section-heading left-align mb-3">

                            <div class="section-subtitle">
                                <i class="bi bi-stars"></i>
                                About Us
                            </div>

                            <h2 class="section-title mb-0">
                                Driving Digital Transformation <span>Through Innovation</span>
                            </h2>

                        </div>

                        <p class="about-text">
                            Vetora Solutions is a forward-thinking technology company helping businesses streamline
                            operations, enhance customer experiences, and accelerate growth through intelligent digital
                            solutions. We specialize in building scalable software, AI-powered platforms, and modern
                            digital ecosystems that empower organizations to succeed in an evolving digital landscape.
                            We combine innovation, technology, and strategic expertise to deliver secure, scalable,
                            and future-ready solutions that create measurable business impact.
                        </p>

                        <h4 class="service-title">Our Services:</h4>

                        <ul class="about-list">
                            <li><i class="bi bi-check-circle-fill"></i> Digital Office Solutions</li>
                            <li><i class="bi bi-check-circle-fill"></i> Custom Software Development</li>
                            <li><i class="bi bi-check-circle-fill"></i> Mobile Application Development</li>
                            <li><i class="bi bi-check-circle-fill"></i> Website Development</li>
                            <li><i class="bi bi-check-circle-fill"></i> UI/UX Design</li>
                            <li><i class="bi bi-check-circle-fill"></i> AI & Automation Solutions</li>
                            <li><i class="bi bi-check-circle-fill"></i> Digital Marketing Services</li>
                        </ul>

                        <a href="#" class="btn btn-gradiant btn-md">
                            Get a Quote <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- About Section End -->


    <!-- tech Section End -->

    <section class="technologies-section section">
        <div class="container">

            <div class="section-heading text-center">

                <div class="section-subtitle">
                    <i class="bi bi-stars"></i>
                    Technology Stack
                </div>

                <h2 class="section-title">
                    Powered by <span>Future-Ready Technologies</span>
                </h2>

                <p class="section-description">
                    We leverage industry-leading technologies, modern frameworks, cloud infrastructure, databases,
                    AI capabilities, and DevOps practices to build secure, scalable, and high-performance digital
                    solutions. Our technology stack enables businesses to innovate faster, improve operational
                    efficiency, enhance customer experiences, and achieve sustainable growth with confidence.
                </p>

            </div>

            @include('common.tech-stack')

        </div>
    </section>

    <!-- tech Section End -->



    <!-- =========================================
                                                                                                                                                                                                                             COLLABORATION / MEETING SECTION
                                                                                                                                                                                                                        ========================================= -->

    <section class="meeting-section section">

        <div class="container">

            <!-- SECTION HEADING -->

            <div class="section-heading text-center">

                <div class="section-subtitle">
                    <i class="bi bi-stars"></i>
                    SMART COLLABORATION
                </div>

                <h2 class="section-title">
                    A Smarter Workplace
                    <span>for the Digital Era</span>
                </h2>

                <p class="section-description">
                    Empower your workforce with an intelligent Digital Office platform that brings communication,
                    collaboration, workforce management, and business operations into one seamless ecosystem.
                    Designed for modern organizations, our solution helps teams work smarter, stay connected,
                    automate workflows, and boost productivity from anywhere.
                </p>

            </div>

            <!-- Top Nav Pills -->

            <div class="meeting-top-nav">

                <ul class="nav nav-pills meeting-pills justify-content-center" id="meetingTabs" role="tablist">

                    <li class="nav-item" role="presentation">

                        <button class="nav-link active" id="meetings-tab" data-bs-toggle="pill" data-bs-target="#meetings"
                            type="button" role="tab">

                            <i class="bi bi-camera-video"></i>

                            Meetings

                        </button>

                    </li>

                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="chat-tab" data-bs-toggle="pill" data-bs-target="#chat" type="button"
                            role="tab">

                            <i class="bi bi-chat-dots"></i>

                            Chat

                        </button>

                    </li>

                    <li class="nav-item" role="presentation">

                        <button class="nav-link" id="activity-tab" data-bs-toggle="pill" data-bs-target="#activity"
                            type="button" role="tab">

                            <i class="bi bi-lightning-charge"></i>

                            Activity

                        </button>

                    </li>

                </ul>

            </div>

            <!-- TAB CONTENT -->

            <div class="tab-content" id="meetingTabsContent">

                <!-- ======================================
                                                                                                                                                                                                                     MEETING TAB
                                                                                                                                                                                                                ======================================= -->

                <div class="tab-pane fade show active" id="meetings" role="tabpanel">

                    <div class="meeting-wrapper">

                        <!-- Header -->

                        <div class="meeting-header">

                            <div class="meeting-badge">

                                <i class="bi bi-calendar-event"></i>

                                Design Review

                            </div>

                            <div class="meeting-actions">

                                <button>
                                    <i class="bi bi-grid"></i>
                                </button>

                                <button>
                                    <i class="bi bi-window"></i>
                                </button>

                                <button>
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </button>

                            </div>

                        </div>

                        <!-- Video Grid -->

                        <div class="meeting-grid">

                            <div class="meeting-card">
                                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                <span>Natalie</span>
                            </div>

                            <div class="meeting-card">
                                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                <span>Cameron</span>
                            </div>

                            <div class="meeting-card">
                                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                <span>Scott</span>
                            </div>

                            <div class="meeting-card">
                                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                <span>Melodie</span>
                            </div>

                            <div class="meeting-card">
                                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                <span>Eva</span>
                            </div>

                            <div class="meeting-card">
                                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                <span>Joshua</span>
                            </div>

                        </div>

                        <!-- Controls -->

                        <div class="meeting-controls">

                            <div class="controls-left">

                                <button>
                                    <i class="bi bi-mic-mute"></i>
                                </button>

                                <button>
                                    <i class="bi bi-camera-video-off"></i>
                                </button>

                            </div>

                            <div class="controls-center">

                                <button>
                                    <i class="bi bi-chat-left"></i>
                                </button>

                                <button class="control-active">
                                    <i class="bi bi-mic"></i>
                                </button>

                                <button>
                                    <i class="bi bi-camera-video"></i>
                                </button>

                                <button>
                                    <i class="bi bi-share"></i>
                                </button>

                                <button class="control-danger">
                                    <i class="bi bi-telephone-x"></i>
                                </button>

                            </div>

                            <div class="controls-right">

                                <button>
                                    <i class="bi bi-people"></i>
                                </button>

                                <button>
                                    <i class="bi bi-info-circle"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ======================================
                                                                                                                                                                                                                     CHAT TAB
                                                                                                                                                                                                                ======================================= -->

                <div class="tab-pane fade" id="chat" role="tabpanel">

                    <div class="chat-workspace">

                        <!-- SIDEBAR -->

                        <div class="chat-sidebar">

                            <div class="chat-sidebar-top">

                                <div>
                                    <h4>Team Chat</h4>
                                    <span>Digital Office</span>
                                </div>

                                <button>
                                    <i class="bi bi-three-dots"></i>
                                </button>

                            </div>

                            <!-- SEARCH -->

                            <div class="chat-search">

                                <i class="bi bi-search"></i>

                                <input type="text" placeholder="Search conversations...">

                            </div>

                            <!-- CHANNELS -->

                            <div class="chat-group">

                                <span class="chat-label">
                                    Channels
                                </span>

                                <a href="#" class="chat-channel active" data-channel="ai-product-team">
                                    <i class="bi bi-hash"></i>
                                    ai-product-team
                                </a>

                                <a href="#" class="chat-channel" data-channel="ui-feedback">
                                    <i class="bi bi-hash"></i>
                                    ui-feedback
                                </a>

                                <a href="#" class="chat-channel" data-channel="development">
                                    <i class="bi bi-hash"></i>
                                    development
                                </a>

                                <a href="#" class="chat-channel" data-channel="automation">
                                    <i class="bi bi-hash"></i>
                                    automation
                                </a>

                            </div>

                            <!-- MEMBERS -->

                            <div class="chat-group">

                                <span class="chat-label">
                                    Team Members
                                </span>

                                <div class="member-item">

                                    <img src="https://i.pravatar.cc/100?img=32" alt="">

                                    <div>
                                        <h6>Olivia Watson</h6>
                                        <span>Online</span>
                                    </div>

                                </div>

                                <div class="member-item">

                                    <img src="https://i.pravatar.cc/100?img=12" alt="">

                                    <div>
                                        <h6>James Carter</h6>
                                        <span>In Meeting</span>
                                    </div>

                                </div>

                                <div class="member-item">

                                    <img src="https://i.pravatar.cc/100?img=22" alt="">

                                    <div>
                                        <h6>Daniel Lee</h6>
                                        <span>Away</span>
                                    </div>

                                </div>

                            </div>

                            <!-- MINI VIDEO -->

                            <div class="chat-mini-video">

                                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop"
                                    alt="">

                                <div class="video-overlay">

                                    <div class="live-badge">
                                        LIVE
                                    </div>

                                    <h5>AI Strategy Call</h5>

                                    <span>4 Participants</span>

                                </div>

                            </div>

                        </div>

                        <!-- MAIN CHAT -->

                        <div class="chat-main">

                            <!-- HEADER -->

                            <div class="chat-main-header">

                                <div class="chat-room-info">

                                    <div class="room-icon">
                                        <i class="bi bi-stars"></i>
                                    </div>

                                    <div>

                                        <h4>AI Product Team</h4>

                                        <span>
                                            Digital Office · Real-time collaboration
                                        </span>

                                    </div>

                                </div>

                                <div class="chat-main-actions">

                                    <div class="chat-users">

                                        <img src="https://i.pravatar.cc/100?img=12" alt="">
                                        <img src="https://i.pravatar.cc/100?img=22" alt="">
                                        <img src="https://i.pravatar.cc/100?img=32" alt="">

                                    </div>

                                    <button class="chat-video-btn">

                                        <i class="bi bi-camera-video-fill"></i>

                                        Meeting

                                    </button>

                                </div>

                            </div>

                            <!-- BODY -->

                            <div class="chat-body">

                                <!-- MESSAGE -->

                                <div class="message-row">

                                    <img src="https://i.pravatar.cc/100?img=12" alt="">

                                    <div class="message-content">

                                        <div class="message-user">
                                            James Carter
                                            <span>10:15 AM</span>
                                        </div>

                                        <div class="message-bubble">
                                            The new AI-powered workspace dashboard is performing well.
                                            Should we enable the smart productivity insights for all users this week?
                                        </div>

                                    </div>

                                </div>

                                <!-- MESSAGE -->

                                <div class="message-row self-message">

                                    <div class="message-content">

                                        <div class="message-user">
                                            Olivia Watson
                                            <span>10:17 AM</span>
                                        </div>

                                        <div class="message-bubble">
                                            Absolutely. Let's also activate the AI task recommendations
                                            and automated workflow suggestions in the next update.
                                        </div>

                                    </div>

                                    <img src="https://i.pravatar.cc/100?img=32" alt="">

                                </div>

                                <!-- AI CARD -->

                                <div class="ai-summary-card">

                                    <div class="ai-summary-top">

                                        <div class="ai-icon">
                                            <i class="bi bi-stars"></i>
                                        </div>

                                        <div>

                                            <h5>AI Meeting Summary</h5>

                                            <span>
                                                Generated automatically
                                            </span>

                                        </div>

                                    </div>

                                    <p>
                                        The team reviewed the AI workspace performance, approved smart productivity
                                        insights, and scheduled AI-powered workflow automation for the upcoming release.
                                    </p>

                                    <a href="#">
                                        View Summary
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>

                                </div>

                            </div>

                            <!-- INPUT -->

                            <div class="chat-input-wrapper">

                                <button>
                                    <i class="bi bi-plus-lg"></i>
                                </button>

                                <input type="text" placeholder="Message AI Product Team...">

                                <button>
                                    <i class="bi bi-emoji-smile"></i>
                                </button>

                                <button class="send-btn">
                                    <i class="bi bi-send-fill"></i>
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ======================================
                                                                                                                                                                                                                     ACTIVITY TAB
                                                                                                                                                                                                                ======================================= -->

                <div class="tab-pane fade" id="activity" role="tabpanel">

                    <div class="activity-board-wrapper">


                        <!-- BOARD -->

                        <div class="activity-board">

                            <!-- LEFT PANEL -->

                            <div class="activity-side-column">

                                <div class="activity-side-box">
                                    <i class="bi bi-display"></i>
                                </div>

                                <div class="activity-side-box">
                                    <i class="bi bi-camera-video"></i>
                                </div>

                                <div class="activity-side-box active-box">

                                    <div class="activity-mini-users">

                                        <img src="https://i.pravatar.cc/50?img=11">
                                        <img src="https://i.pravatar.cc/50?img=12">

                                    </div>

                                </div>

                            </div>

                            <!-- CENTER -->

                            <div class="activity-center-grid">

                                <!-- CARD -->

                                <div class="activity-room">

                                    <span class="room-label">
                                        Platform
                                    </span>

                                    <div class="activity-users">

                                        <img src="https://i.pravatar.cc/40?img=14">
                                        <img src="https://i.pravatar.cc/40?img=15">
                                        <img src="https://i.pravatar.cc/40?img=16">

                                    </div>

                                </div>

                                <!-- CARD -->

                                <div class="activity-room highlight-room">

                                    <span class="room-label">
                                        Video + Infra
                                    </span>

                                    <div class="activity-users">

                                        <img src="https://i.pravatar.cc/40?img=18">
                                        <img src="https://i.pravatar.cc/40?img=19">
                                        <img src="https://i.pravatar.cc/40?img=20">

                                    </div>

                                </div>

                                <!-- CARD -->

                                <div class="activity-room">

                                    <span class="room-label">
                                        Engineering
                                    </span>

                                    <div class="activity-users">

                                        <img src="https://i.pravatar.cc/40?img=22">
                                        <img src="https://i.pravatar.cc/40?img=23">

                                    </div>

                                </div>

                                <!-- CARD -->

                                <div class="activity-room active-room">

                                    <span class="room-label">
                                        Customer Support
                                    </span>

                                    <div class="activity-users">

                                        <img src="https://i.pravatar.cc/40?img=25">
                                        <img src="https://i.pravatar.cc/40?img=26">
                                        <img src="https://i.pravatar.cc/40?img=27">

                                    </div>

                                </div>

                                <!-- CARD -->

                                <div class="activity-room">

                                    <span class="room-label">
                                        Product
                                    </span>

                                    <div class="activity-users">

                                        <img src="https://i.pravatar.cc/40?img=29">
                                        <img src="https://i.pravatar.cc/40?img=30">

                                    </div>

                                </div>

                                <!-- CARD -->

                                <div class="activity-room glow-room">

                                    <span class="room-label">
                                        People
                                    </span>

                                    <div class="activity-users">

                                        <img src="https://i.pravatar.cc/40?img=31">
                                        <img src="https://i.pravatar.cc/40?img=32">
                                        <img src="https://i.pravatar.cc/40?img=33">

                                    </div>

                                </div>

                            </div>

                            <!-- RIGHT PANEL -->

                            <div class="activity-side-column">

                                <div class="activity-side-box">
                                    <i class="bi bi-mic"></i>
                                </div>

                                <div class="activity-side-box green-box">

                                    <div class="activity-mini-users">

                                        <img src="https://i.pravatar.cc/50?img=40">
                                        <img src="https://i.pravatar.cc/50?img=41">

                                    </div>

                                </div>

                                <div class="activity-side-box">
                                    <i class="bi bi-grid"></i>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- =========================================
                                                                                                                                                                                 PREMIUM AI BOT SECTION
                                                                                                                                                                            ========================================= -->

    <section class="section ai-bot-section">

        <div class="container">

            <!-- SECTION HEADER -->

            <div class="section-heading text-center">

                <div class="section-subtitle justify-content-center">
                    <i class="bi bi-stars"></i>
                    AI Assistant
                </div>

                <h2 class="section-title">
                    Meet Your Intelligent
                    <span>Digital Workplace Assistant</span>
                </h2>

                <p class="section-description mx-auto">
                    Empower your workforce with an AI-powered assistant designed to streamline communication,
                    automate routine tasks, provide instant business insights, and enhance productivity
                    across your entire Digital Office ecosystem.
                </p>

            </div>

            <!-- AI WRAPPER -->

            <div class="ai-bot-wrapper">

                <!-- BACKGROUND GLOWS -->

                <div class="ai-glow glow-one"></div>
                <div class="ai-glow glow-two"></div>

                <!-- FLOATING INFO CARDS -->

                <div class="ai-floating-card ai-card-one">
                    <i class="bi bi-lightning-charge-fill"></i>
                    <div>
                        <span>Instant Responses</span>
                        <p>Get accurate answers, business insights, and task updates in seconds, helping teams make faster
                            and smarter decisions. </p>
                    </div>
                </div>

                <div class="ai-floating-card ai-card-two">
                    <i class="bi bi-cpu-fill"></i>
                    <div>
                        <span>Smart Automation</span>
                        <p>
                            Automate repetitive workflows, approvals, notifications, and daily operations to improve
                            efficiency and reduce manual effort.
                        </p>
                    </div>
                </div>

                <div class="ai-floating-card ai-card-three">
                    <i class="bi bi-headset"></i>
                    <div>
                        <span>24/7 Support</span>
                        <p>
                            Provide around-the-clock assistance to employees with instant answers, troubleshooting, and
                            guidance on using digital office tools and resources.
                        </p>
                    </div>
                </div>

                <!-- CENTER AI -->

                <div class="ai-center">

                    <!-- OUTER RINGS -->

                    <div class="ai-ring ring-one"></div>
                    <div class="ai-ring ring-two"></div>
                    <div class="ai-ring ring-three"></div>

                    <!-- CLICKABLE AI -->

                    <button class="ai-core-btn" data-bs-toggle="modal" data-bs-target="#VetoraAIModal">

                        <div class="ai-core-glow"></div>

                        <img src="{{ asset('Assets/Images/space/AI1.svg') }}" alt="AI Bot">

                    </button>

                    <!-- STATUS -->

                    <div class="ai-status">
                        <span></span>
                        AI Assistant Online
                    </div>

                </div>

                <!-- BOTTOM FEATURES -->

                <div class="ai-features">

                    <div class="ai-feature-box">
                        <i class="bi bi-mic-fill"></i>
                        <h4>Voice Enabled</h4>
                        <p>Talk naturally with intelligent voice interaction.</p>
                    </div>

                    <div class="ai-feature-box active-box">
                        <i class="bi bi-robot"></i>
                        <h4>Human-like AI</h4>
                        <p>Advanced conversational AI trained for businesses.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-shield-check"></i>
                        <h4>Secure & Private</h4>
                        <p>Enterprise-grade security with safe conversations.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-people-fill"></i>
                        <h4>HRMS Management</h4>
                        <p>Manage employee records, payroll, attendance, and HR operations in one place.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-chat-square-text"></i>
                        <h4>Employee Collaboration</h4>
                        <p>Connect teams through seamless communication and real-time collaboration.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-gear-wide-connected"></i>
                        <h4>Workflow Automation</h4>
                        <p>Automate routine processes to save time and boost productivity.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-kanban"></i>
                        <h4>Task Management</h4>
                        <p>Assign, track, and manage tasks with ease.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-person-add"></i>
                        <h4>Recruitment & Onboarding</h4>
                        <p>Simplify hiring and employee onboarding workflows.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-graph-up-arrow"></i>
                        <h4>Performance Tracking</h4>
                        <p>Monitor employee goals, progress, and productivity.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-calendar-check"></i>
                        <h4>Attendance & Leave Management</h4>
                        <p>Track attendance and manage leave requests effortlessly.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-folder2-open"></i>
                        <h4>Document Management</h4>
                        <p>Securely store, organize, and share business documents.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-camera-video-fill"></i>
                        <h4>AI Meeting Assistant</h4>
                        <p>Generate meeting summaries and action items automatically.</p>
                    </div>

                    <div class="ai-feature-box">
                        <i class="bi bi-bar-chart-line-fill"></i>
                        <h4>Business Analytics</h4>
                        <p>Gain actionable insights with real-time business reports.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================
                                                                                                                                                                                                                         PREMIUM PORTFOLIO SECTION
                                                                                                                                                                                                                    ========================================= -->

    <section class="portfolio-section section">

        <!-- Background Effects -->
        <div class="portfolio-blur blur-one"></div>
        <div class="portfolio-blur blur-two"></div>

        <div class="container">

            <!-- =====================================
                                                                                                                                                                                                                SECTION HEADER
                                                                                                                                                                                                    ====================================== -->

            <div class="section-heading text-center">

                <div class="section-subtitle">
                    <i class="bi bi-stars"></i>
                    OUR PORTFOLIO
                </div>

                <h2 class="section-title">
                    Showcasing Innovation Through <span>Digital Excellence</span>
                </h2>

                <p class="section-description">
                    Discover our portfolio of innovative digital solutions, AI-powered platforms, business applications,
                    modern websites, intuitive user experiences, and enterprise-grade systems designed to help
                    organizations grow, scale, and succeed in the digital era.
                </p>

            </div>

            <!-- =====================================
                                                                                                                                                                                                                                 FILTER TABS
                                                                                                                                                                                                                            ====================================== -->

            <ul class="nav nav-pills portfolio-tabs justify-content-center" id="portfolioTabs" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#featured" type="button">
                        Featured
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#caseStudies" type="button">
                        Case Studies
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#websites" type="button">
                        Website UI
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#branding" type="button">
                        Branding
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pricing" type="button">
                        Pricing
                    </button>
                </li>

            </ul>

            <!-- =====================================
                                                                                                                                                                                                                                 TAB CONTENT
                                                                                                                                                                                                                            ====================================== -->

            <div class="tab-content portfolio-tab-content">

                <!-- =====================================
                                                                                                                                                                                                                                     FEATURED PROJECTS
                                                                                                                                                                                                                                ====================================== -->

                <div class="tab-pane fade show active" id="featured">

                    <div class="row g-4">

                        <!-- Main Large Card -->
                        <div class="col-lg-7">

                            <div class="portfolio-card portfolio-large-card">

                                <div class="portfolio-image">
                                    <div class="portfolio-image-overlay"></div>
                                    <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                </div>

                                <div class="portfolio-overlay">

                                    <div class="portfolio-tags">
                                        <span>AI Platform</span>
                                        <span>Dashboard</span>
                                    </div>

                                    <h3>
                                        AI Analytics System
                                    </h3>

                                    <p>
                                        Powerful enterprise analytics dashboard
                                        with realtime data visualization and AI insights.
                                    </p>

                                    <a href="#" class="portfolio-btn">
                                        View Project
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                        <!-- Side Cards -->
                        <div class="col-lg-5">

                            <div class="row g-4">

                                <div class="col-12">

                                    <div class="portfolio-card portfolio-small-card">

                                        <div class="portfolio-image">
                                            <div class="portfolio-image-overlay"></div>
                                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                        </div>

                                        <div class="portfolio-overlay">

                                            <div class="portfolio-tags">
                                                <span>Mobile App</span>
                                            </div>

                                            <h4>Smart Finance App</h4>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-12">

                                    <div class="portfolio-card portfolio-small-card">

                                        <div class="portfolio-image">
                                            <div class="portfolio-image-overlay"></div>
                                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                        </div>

                                        <div class="portfolio-overlay">

                                            <div class="portfolio-tags">
                                                <span>Branding</span>
                                            </div>

                                            <h4>Creative Identity Design</h4>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =====================================
                                                                                                                                                                                                                                     CASE STUDIES
                                                                                                                                                                                                                                ====================================== -->

                <div class="tab-pane fade" id="caseStudies">

                    <!-- Sub Filter Pills -->
                    <div class="cs-filter-bar">
                        <button class="cs-filter-btn active" data-filter="all">All</button>
                        <button class="cs-filter-btn" data-filter="web">Web App</button>
                        <button class="cs-filter-btn" data-filter="mobile">Mobile</button>
                        <button class="cs-filter-btn" data-filter="ecommerce">E-Commerce</button>
                    </div>

                    <!-- Cards Grid -->
                    <div class="cs-grid">

                        <figure class="cs-card" data-cat="ecommerce">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="E-Commerce Growth"
                                class="cs-img">
                            <figcaption class="cs-overlay">
                                <span class="cs-category">E-Commerce</span>
                                <div class="cs-client-logo"><i class="bi bi-shop"></i></div>
                                <h4 class="cs-title">E-Commerce Growth</h4>
                                <p class="cs-stat"><span>240%</span> Conversion Increase</p>
                                <div class="cs-tags">
                                    <span>UX Optimization</span>
                                    <span>AI Automation</span>
                                    <span>SEO Growth</span>
                                </div>
                                <a href="#" class="cs-link">View Case Study <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </figcaption>
                        </figure>

                        <figure class="cs-card" data-cat="web">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Healthcare Platform"
                                class="cs-img">
                            <figcaption class="cs-overlay">
                                <span class="cs-category">Web App</span>
                                <div class="cs-client-logo"><i class="bi bi-heart-pulse"></i></div>
                                <h4 class="cs-title">Healthcare Platform</h4>
                                <p class="cs-stat"><span>99.9%</span> Uptime Achieved</p>
                                <div class="cs-tags">
                                    <span>Secure Infra</span>
                                    <span>Cloud Systems</span>
                                    <span>AI Reports</span>
                                </div>
                                <a href="#" class="cs-link">View Case Study <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </figcaption>
                        </figure>

                        <figure class="cs-card" data-cat="web">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Corporate Branding"
                                class="cs-img">
                            <figcaption class="cs-overlay">
                                <span class="cs-category">Web App</span>
                                <div class="cs-client-logo"><i class="bi bi-building"></i></div>
                                <h4 class="cs-title">Corporate Branding</h4>
                                <p class="cs-stat"><span>50+</span> Brand Identities</p>
                                <div class="cs-tags">
                                    <span>Logo Design</span>
                                    <span>UI Systems</span>
                                    <span>Visual Identity</span>
                                </div>
                                <a href="#" class="cs-link">View Case Study <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </figcaption>
                        </figure>

                        <figure class="cs-card" data-cat="mobile">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Smart Finance App"
                                class="cs-img">
                            <figcaption class="cs-overlay">
                                <span class="cs-category">Mobile</span>
                                <div class="cs-client-logo"><i class="bi bi-phone"></i></div>
                                <h4 class="cs-title">Smart Finance App</h4>
                                <p class="cs-stat"><span>3x</span> User Engagement</p>
                                <div class="cs-tags">
                                    <span>React Native</span>
                                    <span>AI Insights</span>
                                    <span>Fintech</span>
                                </div>
                                <a href="#" class="cs-link">View Case Study <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </figcaption>
                        </figure>

                        <figure class="cs-card" data-cat="ecommerce">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Retail Platform"
                                class="cs-img">
                            <figcaption class="cs-overlay">
                                <span class="cs-category">E-Commerce</span>
                                <div class="cs-client-logo"><i class="bi bi-bag"></i></div>
                                <h4 class="cs-title">Retail Platform</h4>
                                <p class="cs-stat"><span>180%</span> Revenue Growth</p>
                                <div class="cs-tags">
                                    <span>Laravel</span>
                                    <span>AI Search</span>
                                    <span>Analytics</span>
                                </div>
                                <a href="#" class="cs-link">View Case Study <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </figcaption>
                        </figure>

                        <figure class="cs-card" data-cat="mobile">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Logistics Tracker"
                                class="cs-img">
                            <figcaption class="cs-overlay">
                                <span class="cs-category">Mobile</span>
                                <div class="cs-client-logo"><i class="bi bi-truck"></i></div>
                                <h4 class="cs-title">Logistics Tracker</h4>
                                <p class="cs-stat"><span>60%</span> Faster Delivery</p>
                                <div class="cs-tags">
                                    <span>Flutter</span>
                                    <span>GPS Tracking</span>
                                    <span>Real-time</span>
                                </div>
                                <a href="#" class="cs-link">View Case Study <i
                                        class="bi bi-arrow-up-right"></i></a>
                            </figcaption>
                        </figure>

                    </div>

                </div>

                <!-- =====================================
                                                                                                                                                                                                                                     WEBSITE PREVIEWS
                                                                                                                                                                                                                                ====================================== -->

                <div class="tab-pane fade" id="websites">

                    <div class="website-preview-wrapper">

                        <div class="website-preview-card">

                            <div class="browser-top">

                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">

                        </div>

                        <div class="website-preview-card floating-preview">

                            <div class="browser-top">

                                <span></span>
                                <span></span>
                                <span></span>

                            </div>

                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">

                        </div>

                    </div>

                </div>

                <!-- =====================================
                                                                                                                                                                                                                                     BRANDING
                                                                                                                                                                                                                                ====================================== -->

                <div class="tab-pane fade" id="branding">

                    <div class="row g-4">

                        <div class="col-md-6 col-lg-3">

                            <div class="branding-card">

                                <div class="branding-icon">
                                    <i class="bi bi-palette"></i>
                                </div>

                                <h4>Brand Strategy</h4>

                                <p>
                                    Creating premium identities that stand out.
                                </p>

                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3">

                            <div class="branding-card">

                                <div class="branding-icon">
                                    <i class="bi bi-vector-pen"></i>
                                </div>

                                <h4>Logo Systems</h4>

                                <p>
                                    Futuristic visual systems with scalability.
                                </p>

                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3">

                            <div class="branding-card">

                                <div class="branding-icon">
                                    <i class="bi bi-window"></i>
                                </div>

                                <h4>UI Experiences</h4>

                                <p>
                                    Modern user experiences with interactive flows.
                                </p>

                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3">

                            <div class="branding-card">

                                <div class="branding-icon">
                                    <i class="bi bi-megaphone"></i>
                                </div>

                                <h4>Marketing Assets</h4>

                                <p>
                                    Premium creatives and business presentations.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =====================================
                                 PRICING
                            ====================================== -->

                <div class="tab-pane fade" id="pricing">

                    <div class="pricing-grid">

                        <!-- FREE CARD -->
                        <div class="pricing-card">

                            <div class="pricing-badge">Starter</div>

                            <div class="pricing-amount">
                                <span class="pricing-currency">$</span>
                                <span class="pricing-number">0</span>
                                <span class="pricing-period">/ month</span>
                            </div>

                            <p class="pricing-tagline">
                                Everything you need to get started and explore our platform at no cost.
                            </p>

                            <ul class="pricing-features">
                                <li><i class="bi bi-check-circle-fill"></i> 1 Active Project</li>
                                <li><i class="bi bi-check-circle-fill"></i> Basic AI Assistant Access</li>
                                <li><i class="bi bi-check-circle-fill"></i> Standard Support (48h)</li>
                                <li><i class="bi bi-check-circle-fill"></i> 5 GB Cloud Storage</li>
                                <li><i class="bi bi-check-circle-fill"></i> Community Access</li>
                                <li class="pricing-feature-dim"><i class="bi bi-x-circle-fill"></i> Custom Integrations
                                </li>
                                <li class="pricing-feature-dim"><i class="bi bi-x-circle-fill"></i> Priority Deployment
                                </li>
                                <li class="pricing-feature-dim"><i class="bi bi-x-circle-fill"></i> Dedicated Account
                                    Manager</li>
                            </ul>

                            <a href="#" class="pricing-btn pricing-btn-outline">
                                Get Started Free
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                        <!-- PAID CARD -->
                        <div class="pricing-card pricing-card-premium">

                            <div class="pricing-glow"></div>

                            <div class="pricing-badge pricing-badge-pro">
                                <i class="bi bi-lightning-charge-fill"></i>
                                Pro
                            </div>

                            <div class="pricing-popular">Most Popular</div>

                            <div class="pricing-amount">
                                <span class="pricing-currency">$</span>
                                <span class="pricing-number">499</span>
                                <span class="pricing-period">/ month</span>
                            </div>

                            <p class="pricing-tagline">
                                Full-scale power for growing businesses that demand premium performance.
                            </p>

                            <ul class="pricing-features">
                                <li><i class="bi bi-check-circle-fill"></i> Unlimited Projects</li>
                                <li><i class="bi bi-check-circle-fill"></i> Full AI Suite (NLP, Vision, Analytics)</li>
                                <li><i class="bi bi-check-circle-fill"></i> Priority Support (2h SLA)</li>
                                <li><i class="bi bi-check-circle-fill"></i> 500 GB Cloud Storage</li>
                                <li><i class="bi bi-check-circle-fill"></i> Custom Integrations & APIs</li>
                                <li><i class="bi bi-check-circle-fill"></i> Priority Deployment</li>
                                <li><i class="bi bi-check-circle-fill"></i> Dedicated Account Manager</li>
                                <li><i class="bi bi-check-circle-fill"></i> Advanced Analytics Dashboard</li>
                            </ul>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal"
                                class="pricing-btn pricing-btn-gradient">
                                Get a Quote
                                <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================
                                                                                                                                                                                                                PREMIUM TRENDS SECTION
                                                                                                                                                                                                                ========================================= -->

    <section class="trends-section section">

        <!-- Background Effects -->
        <div class="trends-glow glow-left"></div>
        <div class="trends-glow glow-right"></div>

        <div class="container">

            <!-- =====================================
                                                                                                                                                                                                                             SECTION HEADER
                                                                                                                                                                                                            ====================================== -->


            <div class="section-heading text-center">

                <div class="section-subtitle">
                    <i class="bi bi-stars"></i>
                    TRENDING INSIGHTS
                </div>

                <h2 class="section-title">
                    Explore The Future Of
                    <span>AI & Technology</span>
                </h2>

                <p class="section-description">
                    Discover the latest innovations, AI breakthroughs,
                    business growth strategies, and emerging technology
                    trends shaping the digital future.
                </p>

            </div>

            <!-- =====================================
                                                                                                                                                                                                                             FEATURED TREND CARD
                                                                                                                                                                                                                        ====================================== -->

            <div class="featured-trend-card">

                <div class="row align-items-center g-5">

                    <div class="col-lg-6">

                        <div class="featured-trend-image">

                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="AI Trends">

                            <div class="featured-badge">
                                <i class="bi bi-lightning-charge-fill"></i>
                                Trending Now
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="featured-trend-content">

                            <div class="trend-category">
                                Artificial Intelligence
                            </div>

                            <h3>
                                How AI Automation Is Revolutionizing
                                Modern Businesses
                            </h3>

                            <p>
                                AI-powered systems are transforming workflows,
                                increasing productivity, and helping businesses
                                scale faster through intelligent automation
                                and predictive analytics.
                            </p>

                            <div class="trend-meta">

                                <div class="meta-item">
                                    <i class="bi bi-calendar-event"></i>
                                    May 2026
                                </div>

                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    6 min read
                                </div>

                            </div>

                            <a href="#" class="btn btn-gradiant">
                                Read Full Article
                                <i class="bi bi-arrow-up-right"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- =====================================
                                                                                                                                                                                                                             TABS
                                                                                                                                                                                                                        ====================================== -->

            <ul class="nav nav-pills trends-tabs justify-content-center" id="trendsTabs" role="tablist">

                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#aiTrends">
                        AI Trends
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#techArticles">
                        Tech Articles
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#industryInsights">
                        Industry Insights
                    </button>
                </li>

                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#businessGrowth">
                        Business Growth
                    </button>
                </li>

            </ul>

            <!-- =====================================
                                                                                                                                                                                                                             TAB CONTENT
                                                                                                                                                                                                                        ====================================== -->

            <div class="tab-content trends-tab-content">

                <!-- =====================================
                                                                                                                                                                                                                                 AI TRENDS
                                                                                                                                                                                                                            ====================================== -->

                <div class="tab-pane fade show active" id="aiTrends">

                    <div class="row g-4">

                        <div class="col-lg-4 col-md-6">

                            <div class="trend-card">

                                <div class="trend-image">
                                    <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                </div>

                                <div class="trend-content">

                                    <div class="trend-label">
                                        AI Innovation
                                    </div>

                                    <h4>
                                        Generative AI Is Changing Content Creation
                                    </h4>

                                    <p>
                                        AI-generated systems are helping brands
                                        produce scalable digital content faster.
                                    </p>

                                    <a href="#" class="trend-link">
                                        Explore More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6">

                            <div class="trend-card">

                                <div class="trend-image">
                                    <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                </div>

                                <div class="trend-content">

                                    <div class="trend-label">
                                        Machine Learning
                                    </div>

                                    <h4>
                                        Smart Predictive Systems For Enterprises
                                    </h4>

                                    <p>
                                        Businesses are leveraging AI models for
                                        forecasting and intelligent decision making.
                                    </p>

                                    <a href="#" class="trend-link">
                                        Explore More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-6">

                            <div class="trend-card">

                                <div class="trend-image">
                                    <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
                                </div>

                                <div class="trend-content">

                                    <div class="trend-label">
                                        Automation
                                    </div>

                                    <h4>
                                        AI Workflow Automation In 2026
                                    </h4>

                                    <p>
                                        Realtime intelligent systems are reducing
                                        manual operations and boosting growth.
                                    </p>

                                    <a href="#" class="trend-link">
                                        Explore More
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =====================================
                                                                                                                                                                                                                                 TECH ARTICLES
                                                                                                                                                                                                                            ====================================== -->

                <div class="tab-pane fade" id="techArticles">

                    <div class="row g-4">

                        <div class="col-lg-6 d-flex">

                            <div class="article-card w-100">

                                <div class="article-number">
                                    01
                                </div>

                                <h3>
                                    The Rise Of AI Assistants In Enterprise Systems
                                </h3>

                                <p>
                                    AI-powered assistants are becoming central to
                                    productivity, customer support, and intelligent
                                    workflow automation.
                                </p>

                                <div class="article-footer">

                                    <span>
                                        <i class="bi bi-calendar3"></i>
                                        12 May 2026
                                    </span>

                                    <a href="#">
                                        Read Article
                                    </a>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 d-flex">

                            <div class="article-card w-100">

                                <div class="article-number">
                                    02
                                </div>

                                <h3>
                                    Cloud Infrastructure Trends For Scalable Startups
                                </h3>

                                <p>
                                    Startups are adopting scalable cloud-native
                                    architectures for performance and security.
                                </p>

                                <div class="article-footer">

                                    <span>
                                        <i class="bi bi-calendar3"></i>
                                        18 May 2026
                                    </span>

                                    <a href="#">
                                        Read Article
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =====================================
                                                                                                                                                                                                                                 INDUSTRY INSIGHTS
                                                                                                                                                                                                                            ====================================== -->

                <div class="tab-pane fade" id="industryInsights">

                    <div class="insight-grid">

                        <div class="insight-box">
                            <i class="bi bi-cpu"></i>
                            <h4>AI Infrastructure</h4>
                        </div>

                        <div class="insight-box">
                            <i class="bi bi-globe2"></i>
                            <h4>Global Innovation</h4>
                        </div>

                        <div class="insight-box">
                            <i class="bi bi-bar-chart-line"></i>
                            <h4>Data Analytics</h4>
                        </div>

                        <div class="insight-box">
                            <i class="bi bi-cloud"></i>
                            <h4>Cloud Systems</h4>
                        </div>

                    </div>

                </div>

                <!-- =====================================
                                                                                                                                                                                                                                 BUSINESS GROWTH
                                                                                                                                                                                                                            ====================================== -->

                <div class="tab-pane fade" id="businessGrowth">

                    <div class="growth-wrapper">

                        <div class="growth-line"></div>

                        <div class="growth-card">
                            <span>01</span>
                            <h4>Digital Transformation</h4>
                            <p>
                                Businesses modernize systems for long-term growth.
                            </p>
                        </div>

                        <div class="growth-card">
                            <span>02</span>
                            <h4>Automation Strategy</h4>
                            <p>
                                AI automation improves speed and productivity.
                            </p>
                        </div>

                        <div class="growth-card">
                            <span>03</span>
                            <h4>Customer Experience</h4>
                            <p>
                                Smart platforms improve customer engagement.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

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
                    Trusted by Businesses.
                    <span>Driven by Results.</span>
                </h2>

                <p class="section-description">
                    See how organizations have transformed their operations, accelerated growth, and achieved
                    measurable success through our innovative digital solutions, AI-powered technologies,
                    and scalable business platforms.
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


    <!-- =============================================
                     VETORA AI CHATBOT MODAL
                ============================================= -->
    @include('partials.vetora-chatbot')



    <!-- =========================================
                                 NEXT MOVE SECTION
                            ========================================= -->

    <section class="nm-section">

        <!-- ROTATING IMAGE FIELD -->

        <div class="nm-stage">

            <div class="nm-field" id="nmField"></div>

            <!-- CENTER CONTENT -->

            <div class="nm-center">

                <h1>
                    Make
                    <span class="nm-highlight">your</span>
                    <br>
                    next move
                </h1>

                <div class="nm-buttons">

                    <button class="nm-btn nm-btn-light">
                        Get started
                    </button>

                    <button class="nm-btn nm-btn-primary">
                        Contact sales
                    </button>

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



    <script>
        /* =========================================================
                       CHAT CHANNEL SWITCHER
                    ========================================================= */
        (function() {
            var channelData = {
                'ai-product-team': {
                    title: 'AI Product Team',
                    messages: [{
                            user: 'James Carter',
                            time: '10:15 AM',
                            img: 'https://i.pravatar.cc/100?img=12',
                            text: 'The new AI-powered workspace dashboard is performing well. Should we enable the smart productivity insights for all users this week?',
                            isSelf: false
                        },
                        {
                            user: 'Olivia Watson',
                            time: '10:17 AM',
                            img: 'https://i.pravatar.cc/100?img=32',
                            text: "Absolutely. Let's also activate the AI task recommendations and automated workflow suggestions in the next update.",
                            isSelf: true
                        }
                    ],
                    summary: 'The team reviewed the AI workspace performance, approved smart productivity insights, and scheduled AI-powered workflow automation for the upcoming release.'
                },
                'ui-feedback': {
                    title: 'UI Feedback',
                    messages: [{
                            user: 'Sophia Miller',
                            time: '2:05 PM',
                            img: 'https://i.pravatar.cc/100?img=15',
                            text: 'The new Digital Office interface feels much cleaner. The employee dashboard and quick-access widgets significantly improve navigation.',
                            isSelf: false
                        },
                        {
                            user: 'Daniel Wilson',
                            time: '2:08 PM',
                            img: 'https://i.pravatar.cc/100?img=22',
                            text: "Agreed. Let's finalize the responsive layouts and deploy the updated user experience across desktop and mobile platforms.",
                            isSelf: true
                        }
                    ],
                    summary: 'The design team approved the enhanced Digital Office interface, responsive layouts, and dashboard improvements for deployment.'
                },
                'development': {
                    title: 'Development',
                    messages: [{
                            user: 'Michael Brown',
                            time: '11:45 AM',
                            img: 'https://i.pravatar.cc/100?img=8',
                            text: 'The HRMS and Employee Management modules have completed testing. Integration with payroll and attendance tracking is now ready.',
                            isSelf: false
                        },
                        {
                            user: 'Emma Johnson',
                            time: '11:48 AM',
                            img: 'https://i.pravatar.cc/100?img=20',
                            text: "Perfect. Let's proceed with the final security audit and prepare the release package for enterprise clients.",
                            isSelf: true
                        }
                    ],
                    summary: 'The development team completed module testing, approved system integrations, and scheduled security validation before release.'
                },
                'automation': {
                    title: 'Automation',
                    messages: [{
                            user: 'Alex Thompson',
                            time: '4:20 PM',
                            img: 'https://i.pravatar.cc/100?img=5',
                            text: 'The automated leave approval workflow reduced manual processing by nearly 70%. Should we expand automation to onboarding and recruitment?',
                            isSelf: false
                        },
                        {
                            user: 'Rachel Green',
                            time: '4:23 PM',
                            img: 'https://i.pravatar.cc/100?img=30',
                            text: "Yes. Let's implement AI-assisted candidate screening and automated onboarding workflows in the next phase.",
                            isSelf: true
                        }
                    ],
                    summary: 'The team reviewed workflow automation results, approved recruitment automation, and planned AI-powered onboarding enhancements.'
                }
            };

            function renderChannel(key) {
                var data = channelData[key];
                if (!data) return;
                var chatBody = document.querySelector('#chat .chat-body');
                var chatTitle = document.querySelector('#chat .chat-room-info h4');
                if (!chatBody) return;
                if (chatTitle) chatTitle.textContent = data.title;
                var html = '';
                data.messages.forEach(function(msg) {
                    if (msg.isSelf) {
                        html +=
                            '<div class="message-row self-message"><div class="message-content"><div class="message-user">' +
                            msg.user + ' <span>' + msg.time + '</span></div><div class="message-bubble">' + msg
                            .text + '</div></div><img src="' + msg.img + '" alt=""></div>';
                    } else {
                        html += '<div class="message-row"><img src="' + msg.img +
                            '" alt=""><div class="message-content"><div class="message-user">' + msg.user +
                            ' <span>' + msg.time + '</span></div><div class="message-bubble">' + msg.text +
                            '</div></div></div>';
                    }
                });
                html +=
                    '<div class="ai-summary-card"><div class="ai-summary-top"><div class="ai-icon"><i class="bi bi-stars"></i></div><div><h5>AI Meeting Summary</h5><span>Generated automatically</span></div></div><p>' +
                    data.summary + '</p><a href="#">View Summary <i class="bi bi-arrow-up-right"></i></a></div>';
                chatBody.innerHTML = html;
            }

            document.querySelectorAll('.chat-channel[data-channel]').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelectorAll('.chat-channel').forEach(function(l) {
                        l.classList.remove('active');
                    });
                    this.classList.add('active');
                    renderChannel(this.dataset.channel);
                });
            });
        })();
    </script>

    <script>
        /* =========================================================
                       CASE STUDIES FILTER
                    ========================================================= */
        document.querySelectorAll('.cs-filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.cs-filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const filter = this.dataset.filter;
                document.querySelectorAll('.cs-card').forEach(card => {
                    if (filter === 'all' || card.dataset.cat === filter) {
                        card.classList.remove('cs-hidden');
                    } else {
                        card.classList.add('cs-hidden');
                    }
                });
            });
        });
    </script>

    <script>
        /* =========================================================
                   TYPING EFFECT
                ========================================================= */

        document.querySelectorAll(".typing-effect").forEach((el) => {

            const text = el.innerText;

            el.innerText = "";

            let i = 0;

            const type = () => {

                if (i < text.length) {

                    el.innerText += text.charAt(i);

                    i++;

                    setTimeout(type, 35);
                }
            };

            type();
        });

        /* =========================================================
           VOICE REACTION
        ========================================================= */

        const micBtn = document.querySelector(".mic-btn");

        if (micBtn) {

            micBtn.addEventListener("click", () => {

                document
                    .querySelector(".jarvis-mic-circle")
                    .classList.toggle("active-listening");
            });
        }
    </script>



    <script>
        /* =========================================
                           FIELD
                        ========================================= */

        const nmField = document.getElementById('nmField');

        /* =========================================
           IMAGES
        ========================================= */

        const nmImages = [

            'https://picsum.photos/id/1011/400/500',
            'https://picsum.photos/id/1025/400/500',
            'https://picsum.photos/id/1035/400/500',
            'https://picsum.photos/id/1043/400/500',
            'https://picsum.photos/id/1057/400/500',
            'https://picsum.photos/id/1069/400/500',
            'https://picsum.photos/id/1074/400/500',
            'https://picsum.photos/id/1080/400/500',
            'https://picsum.photos/id/1084/400/500',
            'https://picsum.photos/id/164/400/500',
            'https://picsum.photos/id/177/400/500',
            'https://picsum.photos/id/110/400/500'
        ];

        /* =========================================
           VARIABLES
        ========================================= */

        const nmCards = [];

        const nmRadii = [];

        const nmSizes = [];

        const nmRotate = [];

        const NM_TOTAL = nmImages.length;

        /* =========================================
           CREATE CARDS
        ========================================= */

        nmImages.forEach((src, i) => {

            const card = document.createElement('div');

            card.className = 'nm-card';

            const ring = i % 2 === 0 ? 320 : 500;

            const width = 170 + (i % 3) * 26;

            const height = width * 1.28;

            card.style.width = `${width}px`;

            card.style.height = `${height}px`;

            const img = document.createElement('img');

            img.src = src;

            card.appendChild(img);

            nmField.appendChild(card);

            nmRadii.push(ring);

            nmSizes.push({
                width,
                height
            });

            nmRotate.push(
                i % 2 === 0 ? -6 : 5
            );

            nmCards.push(card);

        });

        /* =========================================
           POINTER PARALLAX
        ========================================= */

        let nmTargetX = 0;
        let nmTargetY = 0;

        let nmCurrentX = 0;
        let nmCurrentY = 0;

        window.addEventListener('pointermove', (e) => {

            nmTargetX =
                (e.clientX / window.innerWidth - 0.5) * 2;

            nmTargetY =
                (e.clientY / window.innerHeight - 0.5) * 2;
        });

        /* =========================================
           SCROLL ROTATION
        ========================================= */

        let nmAngle = 0;

        let nmTargetAngle = 0;

        function nmReadScroll() {

            const maxScroll =
                document.body.scrollHeight - window.innerHeight;

            const progress =
                window.scrollY / maxScroll;

            nmTargetAngle =
                progress * Math.PI * 2 * 1.5;
        }

        window.addEventListener(
            'scroll',
            nmReadScroll, {
                passive: true
            }
        );

        nmReadScroll();

        /* =========================================
           ANIMATION LOOP
        ========================================= */

        function nmAnimate() {

            nmAngle +=
                (nmTargetAngle - nmAngle) * 0.08;

            nmCurrentX +=
                (nmTargetX - nmCurrentX) * 0.06;

            nmCurrentY +=
                (nmTargetY - nmCurrentY) * 0.06;

            const parallaxX = -nmCurrentX * 30;

            const parallaxY = -nmCurrentY * 30;

            nmCards.forEach((card, i) => {

                const base =
                    (i / NM_TOTAL) * Math.PI * 2;

                const angle =
                    base + nmAngle;

                const radius =
                    nmRadii[i];

                const x =
                    Math.cos(angle) * radius + parallaxX;

                const y =
                    Math.sin(angle) * radius + parallaxY;

                const size =
                    nmSizes[i];

                card.style.transform = `
            translate(
                ${x - size.width / 2}px,
                ${y - size.height / 2}px
            )
            rotate(
                ${nmRotate[i] + nmAngle * 8}deg
            )
        `;
            });

            requestAnimationFrame(nmAnimate);
        }

        nmAnimate();
    </script>


    <script src="{{ asset('Assets/js/vetora-chatbot.js') }}?v=1.0.0"></script>
@endsection
