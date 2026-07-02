@extends('layouts.app')

@section('meta')
    <title>AI Agency &amp; Technology Solutions Australia - Vetora Solutions</title>
    <meta name="description" content="Vetora Solutions is a premium AI agency building intelligent automation, machine learning systems, AI agents, and generative AI products for Australian businesses.">
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/ai-services.css') }}?v=1.2.7">
    <style>body, html { background: #0D0B2A !important; }</style>
@endsection

@section('content')
<div id="top" class="axo-page" style="font-family:'Lexend','Livvic',sans-serif;color:#fff;overflow-x:hidden;">

{{-- Animated vertical-line background (light beams travelling down faint lines) --}}
<div class="page-lines" aria-hidden="true">
    <i></i><i></i><i></i><i></i><i></i><i></i><i></i>
</div>

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
    <div class="tech2__wrap">
        <div class="tech2__card"
             style="background-image: url('{{ asset('Assets/Images/AI-development/bg-01.jpg') }}');">
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

        </div>{{-- /.tech2__inner --}}
        </div>{{-- /.tech2__card --}}
    </div>{{-- /.tech2__wrap --}}
</section>


{{-- ═══════════════════════════════════════════════════════════
     6. OUR PROJECTS
═══════════════════════════════════════════════════════════ --}}
<section class="proj2 reveal" style="padding:110px 0;position:relative;overflow:hidden;">
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div class="proj-head">
            <div class="feat-eyebrow">
                <span class="feat-eyebrow__line"></span>
                <span class="feat-eyebrow__dot"></span>
                <span class="feat-eyebrow__text">Our Project</span>
            </div>
            <h2 class="about-headline" id="projHeadline">AI-Powered Projects Driving Business Transformation</h2>
            <p class="proj-head__sub">Driven by a passion for innovation, we specialize in delivering intelligent, scalable AI solutions.</p>
        </div>

        @php
            $projects = [
                ['img'=>'Assets/Images/Mobile-App/Portfolio/Abhi.webp','cat'=>'Automation','title'=>'Intelligent Workflow Automation'],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/Dots.webp','cat'=>'Analytics','title'=>'Advanced Predictive Analytics'],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/A-Team.webp','cat'=>'Chatbots','title'=>'Advanced Chatbots Solutions'],
                ['img'=>'Assets/Images/Mobile-App/Portfolio/abhi-hospital.webp','cat'=>'Strategy','title'=>'Enterprise Efficiency Platform'],
            ];
        @endphp
        <div class="proj-grid">
            @foreach($projects as $proj)
            <a href="{{ url('/contact-us') }}" class="proj-card">
                <img class="proj-card__img" src="{{ asset($proj['img']) }}" alt="{{ $proj['title'] }}"
                     onerror="this.style.display='none'">
                <div class="proj-card__shade"></div>
                <div class="proj-card__panel">
                    <span class="proj-card__tag">{{ $proj['cat'] }}</span>
                    <div class="proj-card__row">
                        <h3 class="proj-card__title">{{ $proj['title'] }}</h3>
                        <span class="proj-card__arrow">&#8599;</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     8. OUR TESTIMONIALS
═══════════════════════════════════════════════════════════ --}}
<section class="tstm reveal" style="padding:110px 0;position:relative;overflow:hidden;">
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">

        <div class="tstm__head">
            <div class="feat-eyebrow">
                <span class="feat-eyebrow__line"></span>
                <span class="feat-eyebrow__dot"></span>
                <span class="feat-eyebrow__text">Our Testimonials</span>
            </div>
            <h2 class="about-headline" id="tstmHeadline">What Our Satisfied Customers Have to Say About Their Experience</h2>
        </div>

        <div class="tstm__rating">
            <img class="tstm__logo" src="{{ asset('Assets/Images/logo.png') }}" alt="Vetora" onerror="this.style.display='none'">
            <div class="tstm__rating-body">
                <div class="tstm__score">4.8/5 <span class="tstm__stars">★★★★★</span></div>
                <div class="tstm__reviews">Based on 2,580 reviews</div>
            </div>
        </div>

        @php
            $tcols = [
                [
                    ['name'=>'Simon Cyrene','role'=>'CTO','img'=>'https://i.pravatar.cc/100?img=12','quote'=>'Their AI solutions transformed our workflow, improved efficiency, and delivered measurable business growth faster than we expected.'],
                    ['name'=>'Alice Williams','role'=>'Founder','img'=>'https://i.pravatar.cc/100?img=45','feat'=>true,'quote'=>'A highly skilled team that understands technology and business, delivering intelligent solutions with outstanding performance and reliability.'],
                    ['name'=>'Michael Jordan','role'=>'Director','img'=>'https://i.pravatar.cc/100?img=33','quote'=>'The AI roadmap Vetora delivered was clear, realistic, and exactly what our leadership needed to greenlight the project.'],
                ],
                [
                    ['name'=>'Emily Carter','role'=>'Product Manager','img'=>'https://i.pravatar.cc/100?img=47','feat'=>true,'quote'=>'A highly skilled team that understands technology and business, delivering intelligent solutions with outstanding performance and reliability.'],
                    ['name'=>'Simon Cyrene','role'=>'CTO','img'=>'https://i.pravatar.cc/100?img=22','quote'=>'Their AI solutions transformed our workflow, improved efficiency, and delivered measurable business growth faster than we expected.'],
                    ['name'=>'Sofia Nguyen','role'=>'Operations Lead','img'=>'https://i.pravatar.cc/100?img=5','quote'=>'Vetora quickly understood our needs and delivered a tailored solution. Their automation improved efficiency and accelerated approvals significantly.'],
                ],
                [
                    ['name'=>'Demon Cats','role'=>'CEO','img'=>'https://i.pravatar.cc/100?img=15','quote'=>'Their AI solutions transformed our workflow, improved efficiency, and delivered measurable business growth faster than we expected.'],
                    ['name'=>'Key Benefits','role'=>'Manager','img'=>'https://i.pravatar.cc/100?img=32','feat'=>true,'quote'=>'Vetora helped us reach more clients with a professional AI platform. Their expert team delivered outstanding quality and results every time.'],
                    ['name'=>'David Miller','role'=>'Head of Data','img'=>'https://i.pravatar.cc/100?img=51','quote'=>'Vetora brought our platform to life exactly as envisioned. Their responsive support has greatly improved our day-to-day efficiency.'],
                ],
            ];
        @endphp

        <div class="tstm__cols">
            @foreach($tcols as $ci => $col)
            <div class="tstm__col {{ $ci === 1 ? 'tstm__col--down' : 'tstm__col--up' }}">
                <div class="tstm__track">
                    @foreach(array_merge($col, $col) as $t)
                    <article class="tstm-card">
                        <div class="tstm-card__top">
                            <i class="bi bi-quote tstm-card__quote"></i>
                            <span class="tstm-card__stars">★★★★★</span>
                        </div>
                        <p class="tstm-card__text">{{ $t['quote'] }}</p>
                        <div class="tstm-card__person">
                            <img src="{{ $t['img'] }}" alt="{{ $t['name'] }}" onerror="this.style.display='none'">
                            <div>
                                <span class="tstm-card__name">{{ $t['name'] }}</span>
                                <span class="tstm-card__role">{{ $t['role'] }}</span>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════════════════
     9. OUR BLOG
═══════════════════════════════════════════════════════════ --}}
<section class="blog2 reveal" style="padding:110px 0;position:relative;overflow:hidden;">
    <div class="container" style="max-width:1280px;margin:0 auto;padding:0 24px;position:relative;z-index:2;">
        <div class="blog2__head">
            <div class="feat-eyebrow">
                <span class="feat-eyebrow__line"></span>
                <span class="feat-eyebrow__dot"></span>
                <span class="feat-eyebrow__text">AI Insights</span>
            </div>
            <h2 class="about-headline" id="blogHeadline">Powerful AI Technologies Enabling Business Efficiency</h2>
        </div>
    </div>

    @php
        $blogs = [
            ['img'=>'Assets/Images/Mobile-App/Portfolio/Dots.webp',    'cat'=>'Robotics',     'title'=>'Unlocking Business Value Through Advanced Machine Learning', 'date'=>'Jan 29, 2026'],
            ['img'=>'Assets/Images/Mobile-App/Portfolio/WFB.webp',     'cat'=>'Technology',   'title'=>'How Artificial Intelligence Is Transforming Modern Enterprises', 'date'=>'Feb 05, 2026'],
            ['img'=>'Assets/Images/Mobile-App/Portfolio/Allo.webp',    'cat'=>'Software',     'title'=>'Transforming Digital Operations Using Smart AI Technologies', 'date'=>'Feb 12, 2026'],
            ['img'=>'Assets/Images/Mobile-App/Portfolio/A-Team.webp',  'cat'=>'Organization', 'title'=>'Turning Challenges into Opportunities with Business Consultants', 'date'=>'Feb 18, 2026'],
            ['img'=>'Assets/Images/Mobile-App/Portfolio/Abhi.webp',    'cat'=>'Automation',   'title'=>'Scaling Operations with Intelligent Workflow Automation', 'date'=>'Feb 24, 2026'],
            ['img'=>'Assets/Images/Mobile-App/Portfolio/Qrooze.webp',  'cat'=>'Analytics',    'title'=>'From Data to Decisions with Predictive AI Analytics', 'date'=>'Mar 03, 2026'],
        ];
    @endphp

    <div class="blog2__marquee">
        <div class="blog2__track">
            @foreach(array_merge($blogs, $blogs) as $b)
            <article class="blog-card">
                <a href="{{ url('/contact-us') }}" class="blog-card__media">
                    <img src="{{ asset($b['img']) }}" alt="{{ $b['title'] }}" onerror="this.style.display='none'">
                    <span class="blog-card__tag">{{ $b['cat'] }}</span>
                </a>
                <div class="blog-card__body">
                    <h4 class="blog-card__title"><a href="{{ url('/contact-us') }}">{{ $b['title'] }}</a></h4>
                    <div class="blog-card__meta">
                        <span>{{ $b['date'] }}</span>
                        <span class="blog-card__dot">•</span>
                        <span>0 Comments</span>
                    </div>
                </div>
            </article>
            @endforeach
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
    <script src="{{ asset('Assets/js/ai-services.js') }}?v=1.0.5"></script>

    {{-- Matter.js physics for the falling "Our Technologies" capsules --}}
    <script src="https://cdn.jsdelivr.net/npm/matter-js@0.19.0/build/matter.min.js"></script>
    <script src="{{ asset('Assets/js/tech-drop.js') }}?v=1.0.1"></script>
@endsection
