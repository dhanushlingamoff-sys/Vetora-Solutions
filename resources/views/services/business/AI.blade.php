@extends('layouts.app')

@section('meta')
    <title>AI Agency &amp; Technology Solutions Australia - Vetora Solutions</title>
    <meta name="description" content="Vetora Solutions is a premium AI agency building intelligent automation, machine learning systems, AI agents, and generative AI products for Australian businesses.">
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/ai-services.css') }}?v=1.1.4">
    <style>body, html { background: #0D0B2A !important; }</style>
@endsection

@section('content')
<div id="top" class="axo-page" style="font-family:'Lexend','Livvic',sans-serif;color:#fff;overflow-x:hidden;">

{{-- ═══════════════════════════════════════════════════════════
     1. HERO
═══════════════════════════════════════════════════════════ --}}
<section class="ai-hero">

    {{-- Background glow blob --}}
    <div class="ai-hero__glow"></div>

    {{-- Background scrolling text --}}
    <div class="hero-bg-text" aria-hidden="true">
        <div class="hero-bg-text__track">
            <span>AI Services</span><span>machine learning</span>
            <span>AI Services</span><span>machine learning</span>
            <span>AI Services</span><span>machine learning</span>
        </div>
    </div>

    {{-- Main content grid --}}
    <div class="ai-hero__content">

        {{-- LEFT: Headline --}}
        <div class="ai-hero__left">
            <h1 class="ai-hero__headline">
                <span class="line-1">INNOVATE WITH</span>
                <span class="line-2">
                    <svg class="chip-icon" width="62" height="62" viewBox="0 0 62 62" fill="none">
                        <rect x="16" y="16" width="30" height="30" rx="4" stroke="#9333EA" stroke-width="2"/>
                        <rect x="23" y="23" width="16" height="16" rx="2" stroke="#EC4899" stroke-width="1.5" fill="rgba(147,51,234,0.15)"/>
                        <text x="31" y="34" text-anchor="middle" fill="#EC4899" font-size="7" font-weight="700">AI</text>
                        <line x1="24" y1="16" x2="24" y2="8" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="31" y1="16" x2="31" y2="8" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="38" y1="16" x2="38" y2="8" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="24" y1="46" x2="24" y2="54" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="31" y1="46" x2="31" y2="54" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="38" y1="46" x2="38" y2="54" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="16" y1="24" x2="8" y2="24" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="16" y1="31" x2="8" y2="31" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="16" y1="38" x2="8" y2="38" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="46" y1="24" x2="54" y2="24" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="46" y1="31" x2="54" y2="31" stroke="#9333EA" stroke-width="1.5"/>
                        <line x1="46" y1="38" x2="54" y2="38" stroke="#9333EA" stroke-width="1.5"/>
                    </svg>
                    ARTIFICIAL
                </span>
                <span class="line-3">INTELLIGENCE</span>
            </h1>
        </div>

        {{-- CENTER: Tooltip card (absolute positioned) --}}
        <div class="hero-tooltip">
            <img class="hero-tooltip__thumb" src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
            <div class="hero-tooltip__text">
                <strong>Without clarity,</strong>
                <span>you send</span>
            </div>
        </div>

        {{-- RIGHT: paragraph + explore + badge --}}
        <div class="ai-hero__right">
            <p class="ai-hero__paragraph">
                Without clarity, you send a very garbled message out to the Universe.
                We know that the Law of Attraction says that.
            </p>
            <a href="{{ route('contact') }}" class="hero-explore">Explore More</a>

        </div>

    </div>

    {{-- Rotating badge — absolutely positioned over hero --}}
    <div class="hero-badge">
        <div class="hero-badge__inner" id="heroBadgePlay">
            <div class="play-triangle"></div>
        </div>
        <svg class="hero-badge__ring" viewBox="0 0 160 160" width="160" height="160">
            <defs>
                <path id="badgeCircle" d="M80,80 m-62,0 a62,62 0 1,1 124,0 a62,62 0 1,1 -124,0"/>
            </defs>
            <text font-size="10.5" font-weight="600" letter-spacing="2.5"
                  fill="rgba(255,255,255,0.9)" font-family="Plus Jakarta Sans, sans-serif">
                <textPath href="#badgeCircle">ADVANCED. AI . SMART. SOLUTIONS. ADVANCED. AI .</textPath>
            </text>
        </svg>
    </div>

    {{-- Bottom: Robot image + Wave canvas --}}
    <div class="ai-hero__bottom">
        <div class="ai-hero__robot">
            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="AI Robot VR Headset"
                 onerror="this.style.display='none'">
        </div>
        <div class="ai-hero__wave">
            <video class="hero-wave-video" autoplay muted loop playsinline>
                <source src="{{ asset('Assets/Images/AI-development/banner-video.mp4') }}" type="video/mp4">
            </video>
        </div>
    </div>

</section>

{{-- Video modal --}}
<div id="videoModal" class="video-modal">
    <div class="video-modal__overlay">
        <button class="video-modal__overlay-close" id="closeModalOverlay">&#x2715;</button>
    </div>
    <div class="video-modal__box">
        <button class="video-modal__close" id="closeModal">&#x2715;</button>
        <div class="video-modal__embed">
            <iframe id="videoFrame" width="100%" height="100%"
                    src="" frameborder="0" allowfullscreen
                    allow="autoplay; encrypted-media"></iframe>
        </div>
    </div>
</div>


{{-- ═══════════════════════════════════════════════════════════
     2. OUR FEATURES
═══════════════════════════════════════════════════════════ --}}
<section class="feat-section" id="features">

    <div class="feat-header">
        <div class="feat-eyebrow feat-reveal">
            <span class="feat-eyebrow__line"></span>
            <span class="feat-eyebrow__dot"></span>
            <span class="feat-eyebrow__text">OUR FEATURES</span>
        </div>
        <h2 class="feat-headline feat-reveal" style="transition-delay:0.12s">
            Advanced Machine Learning
        </h2>
        <p class="feat-subtext feat-reveal" style="transition-delay:0.24s">
            Driven by a passion for innovation, we specialize in delivering intelligent,
            scalable AI solutions.
        </p>
    </div>

    <div class="feat-grid">

        {{-- CARD 1: Collaboration --}}
        <div class="feat-card feat-card--collab feat-reveal" style="transition-delay:0.36s">
            <div class="feat-card__img-zone img-zone--collab">
                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
            </div>
            <div class="feat-card__info">
                <div class="feat-card__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <circle cx="18" cy="5" r="3" stroke="white" stroke-width="1.8"/>
                        <circle cx="6" cy="12" r="3" stroke="white" stroke-width="1.8"/>
                        <circle cx="18" cy="19" r="3" stroke="white" stroke-width="1.8"/>
                        <line x1="8.6" y1="13.5" x2="15.4" y2="17.5" stroke="white" stroke-width="1.8"/>
                        <line x1="15.4" y1="6.5" x2="8.6" y2="10.5" stroke="white" stroke-width="1.8"/>
                    </svg>
                </div>
                <div>
                    <h3 class="feat-card__title">Collaboration</h3>
                    <p class="feat-card__desc">Share projects and leave comments to communicate.</p>
                </div>
            </div>
        </div>

        {{-- CARD 2: AI Magic Art --}}
        <div class="feat-card feat-card--magic feat-reveal" style="transition-delay:0.48s">
            <div class="feat-card__img-zone img-zone--collab">
                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
            </div>
            <div class="feat-card__info">
                <div class="feat-card__icon">
                    <svg width="22" height="22" viewBox="0 0 26 26" fill="none">
                        <rect x="2" y="2" width="16" height="16" rx="3" stroke="white" stroke-width="1.8"/>
                        <text x="10" y="14" text-anchor="middle" fill="white"
                              font-size="8" font-weight="800" font-family="sans-serif">AI</text>
                        <circle cx="21" cy="5" r="3" fill="#F59E0B"/>
                    </svg>
                </div>
                <div>
                    <h3 class="feat-card__title">AI Magic Art</h3>
                    <p class="feat-card__desc">AI-powered magic art for stunning visuals.</p>
                </div>
            </div>
        </div>

        {{-- CARD 3: AI Chat Images --}}
        <div class="feat-card feat-card--chat feat-reveal" style="transition-delay:0.60s">
            <div class="feat-card__img-zone img-zone--collab">
                <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="">
            </div>
            <div class="feat-card__info">
                <div class="feat-card__icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="3.5" stroke="white" stroke-width="1.8"/>
                        <path d="M12 2v2.5M12 19.5V22M2 12h2.5M19.5 12H22
                                 M4.93 4.93l1.77 1.77M17.3 17.3l1.77 1.77
                                 M4.93 19.07l1.77-1.77M17.3 6.7l1.77-1.77"
                              stroke="white" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>
                <div>
                    <h3 class="feat-card__title">AI Chat Images</h3>
                    <p class="feat-card__desc">Visual AI chat images that enhance conversations.</p>
                </div>
            </div>
        </div>

    </div>{{-- end feat-grid --}}

    <button class="scroll-top-btn" id="scrollTopBtn"
            onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
            <path d="M12 19V5M5 12l7-7 7 7" stroke="#7C3AED" stroke-width="2.2"
                  stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

</section>


{{-- ═══════════════════════════════════════════════════════════
     3. ABOUT
═══════════════════════════════════════════════════════════ --}}
<section class="about-section" id="about">

    {{-- Decorative background X shape --}}
    <div class="about-bg-deco" aria-hidden="true"></div>

    {{-- ROW 1: Eyebrow + Headline --}}
    <div class="about-top">

        <div class="about-top__left about-reveal-left">
            <div class="about-eyebrow">
                <span class="eyebrow-line-h"></span>
                <span class="eyebrow-dot-filled"></span>
                <span class="eyebrow-label">ABOUT VETORA</span>
            </div>
        </div>

        <div class="about-top__right">
            <h2 class="about-headline" id="aboutHeadline">
                An Independent AI Agency Delivering Intelligent Solutions,
                Building Trusted Partnerships, and Driving Meaningful Business
                Transformation.
            </h2>
            <div class="holo-knot" aria-hidden="true">
                <img src="{{ asset('Assets/Images/AI-development/about-us/features-images.png') }}" alt="">
            </div>
        </div>

    </div>

    {{-- ROW 2: Images + Content --}}
    <div class="about-bottom">

        {{-- Left: Images --}}
        <div class="about-images about-reveal-left">
            <div class="about-hand">
                <img src="{{ asset('Assets/Images/AI-development/about-us/about-hand.png') }}"
                     alt="Robotic hand"
                     onerror="this.parentElement.classList.add('hand-fallback')">
            </div>
            <div class="about-robot-card">
                <img src="{{ asset('Assets/Images/AI-development/about-us/about-img06.jpg') }}"
                     alt="AI Robot"
                     onerror="this.parentElement.classList.add('robot-fallback')">
            </div>
        </div>

        {{-- Right: Content --}}
        <div class="about-content about-reveal-right">

            {{-- Team avatars --}}
            <div class="about-avatars">
                @foreach(['22','32','44'] as $av)
                <div class="about-avatar about-avatar--{{ $loop->iteration }}">
                    <img src="https://i.pravatar.cc/48?img={{ $av }}" alt="Team member"
                         onerror="this.style.display='none'">
                </div>
                @endforeach
                <div class="about-avatar about-avatar--plus">+1</div>
            </div>

            {{-- Paragraph --}}
            <p class="about-paragraph">
                Driven by a passion for innovation, we specialize in
                delivering intelligent, scalable AI solutions.
            </p>

            {{-- Button with decorative lines --}}
            <div class="about-btn-wrap">
                <a href="{{ route('contact') }}" class="about-btn">About Company</a>
            </div>

            {{-- Stats --}}
            <div class="about-stats">
                <div class="about-stat">
                    <div class="about-stat__num">
                        <span class="about-count-up" data-target="98">0</span>%
                    </div>
                    <div class="about-stat__label">Client Satisfied and Repeating</div>
                </div>
                <div class="about-stat">
                    <div class="about-stat__num">
                        <span class="about-count-up" data-target="125">0</span>+
                    </div>
                    <div class="about-stat__label">Projects Completed in 24 Countries</div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     4. OUR SERVICE
═══════════════════════════════════════════════════════════ --}}
<section class="reveal" style="padding:110px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(124,58,237,.10) 1px,transparent 1px);background-size:28px 28px;pointer-events:none;"></div>
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:20px;margin-bottom:50px;">
            <div>
                <div class="feat-eyebrow">
                    <span class="feat-eyebrow__line"></span>
                    <span class="feat-eyebrow__dot"></span>
                    <span class="feat-eyebrow__text">Our Service</span>
                </div>
                <h2 class="about-headline" id="svcHeadline">Powerful AI Technologies Enabling Business Efficiency</h2>
            </div>
            <a href="{{ route('contact') }}" class="page-btn">Our Service &nbsp;→</a>
        </div>

        @php
            $services = [
                ['num'=>'01','img'=>'Assets/Images/Mobile-App/Portfolio/WFB.webp','title'=>'AI Automation','desc'=>'Develop intelligent AI systems designed to optimize performance.','tags'=>['Smarter AI Systems','Smart Automation','Intelligent Insights']],
                ['num'=>'02','img'=>'Assets/Images/Mobile-App/Portfolio/Allo.webp','title'=>'Machine Learning','desc'=>'Streamline your business processes with intelligent automation solutions.','tags'=>['Cognitive Analytics','Scalable Intelligence','Automate Your Business']],
                ['num'=>'03','img'=>'Assets/Images/Mobile-App/Portfolio/Qrooze.webp','title'=>'Data Intelligence','desc'=>'Our solutions help uncover patterns, generate insights, and support smarter decisions.','tags'=>['Data into Intelligence','Optimize Performance','Smart AI solutions']],
            ];
        @endphp

        <div class="axo-svc-rows">
            @foreach($services as $svc)
            <div class="axo-svc-row {{ $loop->first ? 'axo-open' : '' }}">
                {{-- Thumbnail: collapsed to 0 width, slides in on the left only for the active row --}}
                <div class="axo-svc-thumb">
                    <img src="{{ asset($svc['img']) }}" alt="{{ $svc['title'] }}"
                         onerror="this.parentElement.style.background='linear-gradient(135deg,rgba(124,58,237,.35),rgba(13,11,42,.9))'">
                </div>
                <span class="axo-svc-num">[{{ $svc['num'] }}]</span>
                <div class="axo-svc-info">
                    <h3>{{ $svc['title'] }}</h3>
                    <p>{{ $svc['desc'] }}</p>
                </div>
                <span class="axo-svc-gap"></span>
                <div class="axo-svc-tags">
                    @foreach($svc['tags'] as $tag)
                    <span><em>&#x2733;</em>{{ $tag }}</span>
                    @endforeach
                </div>
                <span class="axo-svc-gap"></span>
                <div class="axo-svc-arrow"><span class="axo-svc-arrow__icon">&#8599;</span></div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     5. OUR TECHNOLOGIES
═══════════════════════════════════════════════════════════ --}}
<section class="tech2 reveal">
    <div class="tech2__bg"></div>
    <div class="tech2__inner">

        <div class="tech2__left">
            <div class="feat-eyebrow">
                <span class="feat-eyebrow__line"></span>
                <span class="feat-eyebrow__dot"></span>
                <span class="feat-eyebrow__text">Our Technologies</span>
            </div>
            <h2 class="about-headline" id="techHeadline">Built On A Modern Stack Delivering Intelligent Solutions</h2>
            <p class="tech2__para">
                We build smart, scalable AI solutions that simplify complexity, accelerate
                growth, and redefine how businesses operate in a digital-first world.
            </p>
            <a href="{{ route('contact') }}" class="page-btn">About Company &nbsp;→</a>

            {{-- Physics stage: capsules fall from above, tumble and pile up on scroll-in --}}
            @php
                $caps = [
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/react.png','name'=>'React'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/laravel.png','name'=>'Laravel'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/python.png','name'=>'Python'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/node-js.png','name'=>'Node.js'],
                    ['img'=>'Assets/Images/Technologies/Docker.png','name'=>'Docker'],
                    ['img'=>'Assets/Images/Technologies/Kubernetes.png','name'=>'Kubernetes'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/typescript.png','name'=>'TypeScript'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/mysql.png','name'=>'MySQL'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/firebase.png','name'=>'Firebase'],
                    ['img'=>'Assets/Images/Technologies/Mobile-icons/flutter.png','name'=>'Flutter'],
                ];
            @endphp
            <div class="tech2__stage" id="techStage" aria-label="Technologies we use">
                @foreach($caps as $cap)
                <div class="tech-cap">
                    <img src="{{ asset($cap['img']) }}" alt="{{ $cap['name'] }}"
                         onerror="this.style.display='none'">
                    <span>{{ $cap['name'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tech2__right">
            <img src="{{ asset('Assets/Images/AI-development/tech.png') }}" alt="AI technology"
                 onerror="this.style.display='none'">
        </div>

    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     6. OUR PROJECTS
═══════════════════════════════════════════════════════════ --}}
<section class="reveal" style="background:#13112E;padding:110px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(124,58,237,.10) 1px,transparent 1px);background-size:28px 28px;pointer-events:none;"></div>
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div style="text-align:center;max-width:720px;margin:0 auto 54px;">
            <div style="font-size:11.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#D946EF;margin-bottom:14px;">→ Our Projects</div>
            <h2 style="font-family:'Lexend',sans-serif;font-weight:800;font-size:clamp(24px,3.6vw,44px);color:#fff;text-transform:uppercase;margin-bottom:16px;">
                AI-Powered Projects Driving<br>
                <span style="background:linear-gradient(135deg,#7C3AED,#D946EF);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Business Transformation</span>
            </h2>
            <p style="font-size:15.5px;color:rgba(255,255,255,.58);line-height:1.8;margin:0;">A look at how we've helped Australian businesses put AI to work in production.</p>
        </div>

        @php
            $projects = [
                ['img'=>'Assets/Images/Mobile-App/Portfolio/Abhi.webp','cat'=>'Automation','title'=>'Intelligent Workflow Automation','arrow'=>false],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/Dots.webp','cat'=>'Analytics','title'=>'Advanced Predictive Analytics','arrow'=>false],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/A-Team.webp','cat'=>'Chatbots','title'=>'Advanced Chatbots Solutions','arrow'=>true],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/abhi-hospital.webp','cat'=>'Strategy','title'=>'Enterprise Efficiency Platform','arrow'=>false],
            ];
        @endphp
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:22px;">
            @foreach($projects as $proj)
            <a href="{{ url('/contact-us') }}" style="position:relative;border-radius:22px;overflow:hidden;height:320px;border:1px solid rgba(124,58,237,.2);display:block;text-decoration:none;background:linear-gradient(160deg,rgba(124,58,237,.22),rgba(13,11,42,.9));">
                <img src="{{ asset($proj['img']) }}" alt="{{ $proj['title'] }}" style="width:100%;height:100%;object-fit:cover;transition:transform .6s ease;" onerror="this.style.display='none'">
                <div style="position:absolute;inset:0;background:linear-gradient(180deg,transparent 35%,rgba(13,11,42,.92) 100%);"></div>
                <span style="position:absolute;top:16px;left:16px;font-size:11.5px;font-weight:700;padding:6px 14px;border-radius:999px;background:rgba(13,11,42,.78);border:1px solid rgba(124,58,237,.3);color:#D946EF;backdrop-filter:blur(6px);">{{ $proj['cat'] }}</span>
                <span style="position:absolute;bottom:20px;left:20px;right:{{ $proj['arrow'] ? '66px' : '20px' }};font-family:'Lexend',sans-serif;font-size:18px;font-weight:700;color:#fff;line-height:1.3;">{{ $proj['title'] }}</span>
                @if($proj['arrow'])
                <span style="position:absolute;bottom:20px;right:20px;width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,#7C3AED,#D946EF);display:flex;align-items:center;justify-content:center;color:#fff;font-size:16px;">↗</span>
                @endif
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     7. OUR PRICING
═══════════════════════════════════════════════════════════ --}}
<section class="reveal" style="background:#0D0B2A;padding:110px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(124,58,237,.12) 1px,transparent 1px);background-size:28px 28px;pointer-events:none;"></div>
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:50px;align-items:end;margin-bottom:52px;">
            <div>
                <div style="font-size:11.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#D946EF;margin-bottom:14px;">→ Our Pricing</div>
                <h2 style="font-family:'Lexend',sans-serif;font-weight:800;font-size:clamp(24px,3.6vw,44px);color:#fff;text-transform:uppercase;margin:0;">
                    Simple, Transparent<br>
                    <span style="background:linear-gradient(135deg,#7C3AED,#06B6D4);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">AI Pricing</span>
                </h2>
            </div>
            <div>
                <p style="font-size:15.5px;line-height:1.85;color:rgba(255,255,255,.6);margin-bottom:24px;">Choose the plan that fits your ambitions. Every tier includes full onboarding and dedicated support.</p>
                <div class="axo-pricing-toggle" style="display:inline-flex;align-items:center;padding:5px;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid rgba(124,58,237,.24);">
                    <button class="toggle-btn axo-active" data-mode="monthly" data-period="monthly" style="padding:10px 22px;border-radius:999px;border:none;background:linear-gradient(135deg,#6D28D9,#06B6D4);color:#fff;font-weight:700;font-size:13.5px;cursor:pointer;">Monthly</button>
                    <button class="toggle-btn" data-mode="yearly" data-period="yearly" style="padding:10px 22px;border-radius:999px;border:none;background:transparent;color:rgba(255,255,255,.55);font-weight:700;font-size:13.5px;cursor:pointer;transition:color .3s;">Yearly</button>
                </div>
            </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:24px;align-items:stretch;">

            {{-- Image card --}}
            <div style="border-radius:24px;overflow:hidden;border:1px solid rgba(124,58,237,.2);min-height:420px;position:relative;background:linear-gradient(160deg,rgba(124,58,237,.3),rgba(13,11,42,.92));">
                <img src="{{ asset('Assets/Images/ai-brain.png') }}" alt="" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;mix-blend-mode:screen;opacity:.45;" onerror="this.style.display='none'">
                <div style="position:absolute;inset:0;background:linear-gradient(180deg,rgba(13,11,42,.1),rgba(13,11,42,.88));"></div>
                <div style="position:absolute;left:28px;right:28px;bottom:30px;">
                    <p style="font-family:'Lexend',sans-serif;font-size:22px;font-weight:700;color:#fff;line-height:1.35;margin:0;">Your dream, our mission — let's make it happen.</p>
                </div>
            </div>

            {{-- Commercial --}}
            <div data-price-monthly="49" data-price-yearly="470" style="background:rgba(26,22,64,.72);border:1px solid rgba(124,58,237,.32);border-radius:24px;padding:36px 30px;position:relative;overflow:hidden;transition:transform .35s ease;">
                <div style="position:absolute;top:18px;right:-36px;background:linear-gradient(135deg,#7C3AED,#D946EF);color:#fff;font-size:11px;font-weight:800;letter-spacing:.06em;padding:7px 46px;transform:rotate(40deg);">POPULAR</div>
                <div style="width:54px;height:54px;border-radius:50%;background:linear-gradient(135deg,#6D28D9,#06B6D4);display:flex;align-items:center;justify-content:center;font-size:24px;margin-bottom:20px;">♛</div>
                <h3 style="font-family:'Lexend',sans-serif;font-size:20px;font-weight:700;color:#fff;margin-bottom:4px;">Commercial</h3>
                <div style="margin:12px 0 16px;">
                    <span class="axo-price-value" style="font-family:'Lexend',sans-serif;font-size:42px;font-weight:800;color:#fff;">$49</span>
                    <span class="axo-price-period" style="font-size:14px;color:rgba(255,255,255,.48);margin-left:4px;">/Monthly</span>
                </div>
                <p style="font-size:14px;color:rgba(255,255,255,.58);line-height:1.7;margin-bottom:22px;">Begin with essential AI tools and build a strong foundation for growth.</p>
                <ul style="list-style:none;padding:0;margin:0 0 28px;display:flex;flex-direction:column;gap:12px;">
                    @foreach(['Basic AI Tools','Essential Features','Beginner-Friendly Interface'] as $f)
                    <li style="display:flex;align-items:center;gap:10px;font-size:13.5px;color:rgba(255,255,255,.62);"><span style="color:#D946EF;font-size:15px;">✓</span>{{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="page-btn">Choose Package &nbsp;→</a>
            </div>

            {{-- Premium --}}
            <div data-price-monthly="99" data-price-yearly="950" style="background:rgba(26,22,64,.5);border:1px solid rgba(124,58,237,.2);border-radius:24px;padding:36px 30px;position:relative;transition:transform .35s ease;">
                <div style="width:54px;height:54px;border-radius:50%;background:linear-gradient(135deg,#7C3AED,#D946EF);display:flex;align-items:center;justify-content:center;font-size:22px;margin-bottom:20px;">◆</div>
                <h3 style="font-family:'Lexend',sans-serif;font-size:20px;font-weight:700;color:#fff;margin-bottom:4px;">Premium</h3>
                <div style="margin:12px 0 16px;">
                    <span class="axo-price-value" style="font-family:'Lexend',sans-serif;font-size:42px;font-weight:800;color:#fff;">$99</span>
                    <span class="axo-price-period" style="font-size:14px;color:rgba(255,255,255,.48);margin-left:4px;">/Monthly</span>
                </div>
                <p style="font-size:14px;color:rgba(255,255,255,.58);line-height:1.7;margin-bottom:22px;">Enterprise-grade intelligence with premium automation built in.</p>
                <ul style="list-style:none;padding:0;margin:0 0 28px;display:flex;flex-direction:column;gap:12px;">
                    @foreach(['Advanced AI Solutions','Scalable For Growth','Optimized Performance Guaranteed'] as $f)
                    <li style="display:flex;align-items:center;gap:10px;font-size:13.5px;color:rgba(255,255,255,.62);"><span style="color:#D946EF;font-size:15px;">✓</span>{{ $f }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="page-btn">Choose Package &nbsp;→</a>
            </div>

        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     8. OUR TESTIMONIALS
═══════════════════════════════════════════════════════════ --}}
<section class="reveal" style="background:#13112E;padding:110px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(124,58,237,.10) 1px,transparent 1px);background-size:28px 28px;pointer-events:none;"></div>
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div style="display:grid;grid-template-columns:auto 1fr;gap:60px;align-items:end;margin-bottom:36px;">
            <div style="padding-bottom:6px;">
                <div style="font-size:11.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#D946EF;white-space:nowrap;">→ Our Testimonials</div>
            </div>
            <h2 style="font-family:'Lexend',sans-serif;font-weight:800;font-size:clamp(24px,3.6vw,44px);color:#fff;text-transform:uppercase;margin:0;">
                What Our Satisfied<br>
                <span style="background:linear-gradient(135deg,#7C3AED,#D946EF);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Customers Say</span>
            </h2>
        </div>

        {{-- Rating bar --}}
        <div style="display:flex;align-items:center;gap:24px;padding:16px 26px;background:rgba(26,22,64,.72);border:1px solid rgba(124,58,237,.2);border-radius:16px;margin-bottom:50px;flex-wrap:wrap;">
            <div style="width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#7C3AED,#D946EF);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:800;flex-shrink:0;">V</div>
            <span style="font-family:'Lexend',sans-serif;font-size:28px;font-weight:800;color:#fff;">4.8/5</span>
            <span style="color:#FFB22E;font-size:18px;letter-spacing:2px;">★★★★☆</span>
            <span style="font-size:13px;color:rgba(255,255,255,.48);">Based on 2580 reviews</span>
        </div>

        @php
            $testi = [
                ['name'=>'Alice Williams', 'role'=>'Founder',         'img'=>'https://i.pravatar.cc/100?img=12','quote'=>'Vetora Solutions helped us scale our operations with a powerful, efficient platform. We can now manage more vehicles, drivers, and bookings seamlessly.'],
                ['name'=>'Emily Carter',   'role'=>'Product Manager', 'img'=>'https://i.pravatar.cc/100?img=47','quote'=>'Vetora quickly understood our business needs and delivered a tailored solution. Their smart automation improved efficiency and accelerated approvals significantly.'],
                ['name'=>'Demon Cats',     'role'=>'CEO',             'img'=>'https://i.pravatar.cc/100?img=15','quote'=>'Vetora Solutions brought our platform to life exactly as envisioned. Their seamless platform and responsive support have greatly improved our efficiency.'],
                ['name'=>'Simon Cyrene',   'role'=>'CTO',             'img'=>'https://i.pravatar.cc/100?img=22','quote'=>'Vetora developed a highly efficient and secure AI-powered system for our hospital. It streamlined our workflow and improved patient management.'],
                ['name'=>'Key Benefits',   'role'=>'Manager',         'img'=>'https://i.pravatar.cc/100?img=32','quote'=>'Vetora helped us reach more clients with a professional AI-powered platform. Their expert team delivered outstanding quality and results every time.'],
                ['name'=>'Michael Jordan', 'role'=>'Director',        'img'=>'https://i.pravatar.cc/100?img=44','quote'=>'The AI roadmap Vetora delivered was clear, realistic, and exactly what our leadership team needed to greenlight the project and move forward.'],
            ];
        @endphp
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:22px;">
            @foreach($testi as $i => $t)
            <div class="reveal" style="background:rgba(26,22,64,.72);border:1px solid rgba(124,58,237,.2);border-radius:18px;padding:28px;transition:transform .35s ease,border-color .35s ease;{{ ($i % 2 !== 0) ? 'margin-top:40px;' : '' }}">
                <span style="font-size:30px;color:#06B6D4;display:block;margin-bottom:6px;line-height:1;">❝</span>
                <div style="color:#FFB22E;font-size:13px;margin-bottom:14px;letter-spacing:2px;">★★★★★</div>
                <p style="font-size:14px;color:rgba(255,255,255,.62);line-height:1.75;margin-bottom:22px;">{{ $t['quote'] }}</p>
                <div style="display:flex;align-items:center;gap:12px;">
                    <img src="{{ $t['img'] }}" alt="{{ $t['name'] }}" style="width:44px;height:44px;border-radius:50%;object-fit:cover;border:2px solid rgba(124,58,237,.35);">
                    <div>
                        <div style="font-weight:700;font-size:14.5px;color:#fff;">{{ $t['name'] }}</div>
                        <div style="font-size:12px;color:rgba(255,255,255,.42);">{{ $t['role'] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     9. OUR BLOG
═══════════════════════════════════════════════════════════ --}}
<section class="reveal" style="background:#0D0B2A;padding:110px 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(124,58,237,.12) 1px,transparent 1px);background-size:28px 28px;pointer-events:none;"></div>
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div style="margin-bottom:52px;">
            <div style="font-size:11.5px;font-weight:700;letter-spacing:.14em;text-transform:uppercase;color:#D946EF;margin-bottom:14px;">→ AI Insights</div>
            <h2 style="font-family:'Lexend',sans-serif;font-weight:800;font-size:clamp(24px,3.6vw,44px);color:#fff;text-transform:uppercase;margin:0;">
                Powerful AI Technologies Enabling<br>
                <span style="background:linear-gradient(135deg,#7C3AED,#D946EF);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Business Efficiency</span>
            </h2>
        </div>

        @php
            $blogs = [
                ['img'=>'Assets/Images/Mobile-App/Portfolio/Dots.webp',  'cat'=>'Robotics',   'title'=>'Unlocking Business Value Through Advanced Machine Learning', 'date'=>'Jan 29, 2026'],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/WFB.webp',   'cat'=>'Technology', 'title'=>'How Artificial Intelligence Is Transforming Modern Enterprises', 'date'=>'Feb 05, 2026'],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/Allo.webp',  'cat'=>'Software',   'title'=>'Transforming Digital Operations Using Smart AI Technologies', 'date'=>'Feb 12, 2026'],
            ];
        @endphp
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:26px;">
            @foreach($blogs as $blog)
            <div class="reveal" style="background:#1A1640;border:1px solid rgba(124,58,237,.2);border-radius:18px;overflow:hidden;transition:transform .35s ease,border-color .35s ease;">
                <div style="height:250px;position:relative;overflow:hidden;background:linear-gradient(160deg,rgba(124,58,237,.25),rgba(13,11,42,.85));">
                    <img src="{{ asset($blog['img']) }}" alt="{{ $blog['title'] }}" style="width:100%;height:100%;object-fit:cover;transition:transform .6s ease;" onerror="this.style.display='none'">
                    <span style="position:absolute;top:16px;left:16px;font-size:11px;font-weight:700;padding:6px 14px;border-radius:999px;background:rgba(13,11,42,.82);border:1px solid rgba(124,58,237,.3);color:#D946EF;backdrop-filter:blur(6px);">{{ $blog['cat'] }}</span>
                </div>
                <div style="padding:24px;">
                    <div style="display:flex;gap:14px;font-size:12px;color:rgba(255,255,255,.38);margin-bottom:12px;">
                        <span>{{ $blog['date'] }}</span><span>0 Comments</span>
                    </div>
                    <h4 style="font-family:'Lexend',sans-serif;font-size:17px;font-weight:700;color:#fff;margin-bottom:18px;line-height:1.4;">{{ $blog['title'] }}</h4>
                    <a href="{{ url('/contact-us') }}" class="page-btn">Read More &nbsp;→</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     10. CTA + FOOTER
═══════════════════════════════════════════════════════════ --}}
<section style="background:#0D0B2A;padding:110px 0 0;position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:radial-gradient(circle,rgba(124,58,237,.10) 1px,transparent 1px);background-size:28px 28px;pointer-events:none;z-index:0;"></div>
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;padding-bottom:90px;">
            <div>
                <h2 style="font-family:'Lexend',sans-serif;font-weight:800;font-size:clamp(42px,6vw,80px);line-height:1.0;text-transform:uppercase;color:#fff;margin:0;">
                    LET'S WORK<br>
                    <span style="display:inline-flex;align-items:center;gap:14px;flex-wrap:wrap;">
                        <svg width="0.68em" height="0.68em" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;flex-shrink:0;">
                            <defs><linearGradient id="ctaG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#7C3AED"/><stop offset="100%" stop-color="#06B6D4"/></linearGradient></defs>
                            <rect width="48" height="48" rx="12" fill="url(#ctaG)"/>
                            <polyline points="8,16 20,24 8,32" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="26" y1="16" x2="40" y2="16" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="26" y1="24" x2="38" y2="24" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="26" y1="32" x2="40" y2="32" stroke="#fff" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                        <span style="background:linear-gradient(135deg,#7C3AED,#D946EF);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">TOGETHER</span>
                    </span>
                </h2>
            </div>
            <div>
                <p style="font-size:16px;line-height:1.85;color:rgba(255,255,255,.62);margin-bottom:32px;">Partner with our AI team to design, build, and launch intelligent systems that give your business a real competitive edge — no obligation, just clarity.</p>
                <a href="{{ route('contact') }}" class="page-btn">Get Free Consultation &nbsp;→</a>
            </div>
        </div>
    </div>
</section>

{{-- Scroll-to-top --}}
<a href="#top" id="scrollTop" class="axo-totop" aria-label="Back to top" style="width:44px;height:44px;border:2px solid rgba(124,58,237,.6);font-size:16px;color:#7C3AED;">↑</a>

</div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    {{-- GSAP + ScrollTrigger are loaded globally in layouts/app.blade.php --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.8.0/dist/countUp.umd.js"></script>
    <script src="{{ asset('Assets/js/ai-services.js') }}?v=1.0.1"></script>

    {{-- Matter.js physics for the falling "Our Technologies" capsules --}}
    <script src="https://cdn.jsdelivr.net/npm/matter-js@0.19.0/build/matter.min.js"></script>
    <script src="{{ asset('Assets/js/tech-drop.js') }}?v=1.0.1"></script>
@endsection
