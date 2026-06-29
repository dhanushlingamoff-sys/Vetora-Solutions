@php
    $clientsTitle = $clientsTitle ?? 'Trusted by Businesses Across Australia';
    $clientsDesc  = $clientsDesc  ?? 'We partner with Australian startups, growing businesses, and enterprise organisations to deliver digital solutions that drive real results.';
@endphp

<section class="clients-section section">

    {{-- ── Header + Stats (inside container) ────────────────── --}}
    <div class="container">

        <div class="cs-header">
            <div class="section-subtitle"><i class="bi bi-people"></i> Our Clients</div>
            <h2 class="section-title">{{ $clientsTitle }}</h2>
            <p class="cs-desc">{{ $clientsDesc }}</p>
        </div>

        <div class="cs-stats">
            <div class="cs-stat">
                <span class="cs-stat-num">50+</span>
                <span class="cs-stat-lbl">Australian Clients</span>
            </div>
            <div class="cs-stat-sep"></div>
            <div class="cs-stat">
                <span class="cs-stat-num">200+</span>
                <span class="cs-stat-lbl">Projects Delivered</span>
            </div>
            <div class="cs-stat-sep"></div>
            <div class="cs-stat">
                <span class="cs-stat-num">98%</span>
                <span class="cs-stat-lbl">Client Satisfaction</span>
            </div>
            <div class="cs-stat-sep"></div>
            <div class="cs-stat">
                <span class="cs-stat-num">6+</span>
                <span class="cs-stat-lbl">Years in Business</span>
            </div>
        </div>

    </div>

    {{-- ── Marquee (full-width, outside container) ─────────── --}}
    <div class="cs-marquee-wrap">
        <div class="cs-marquee-track">

            {{-- Set 1 --}}
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/abhi.webp') }}" alt="Abhi"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/allo.webp') }}" alt="Allo"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/allswell.webp') }}" alt="Allswell"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/ateam.webp') }}" alt="ATeam"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/capso.webp') }}" alt="Capso"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/dots.webp') }}" alt="Dots"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/qrooze.webp') }}" alt="Qrooze"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/WFB.webp') }}" alt="WFB"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/home.png') }}" alt="Home"></div>

            {{-- Set 2 — duplicate for seamless infinite loop --}}
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/abhi.webp') }}" alt="Abhi"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/allo.webp') }}" alt="Allo"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/allswell.webp') }}" alt="Allswell"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/ateam.webp') }}" alt="ATeam"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/capso.webp') }}" alt="Capso"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/dots.webp') }}" alt="Dots"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/qrooze.webp') }}" alt="Qrooze"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/WFB.webp') }}" alt="WFB"></div>
            <div class="cs-logo-item"><img src="{{ asset('Assets/Images/Mobile-App/clients-2/home.png') }}" alt="Home"></div>

        </div>
    </div>

    {{-- ── Trust Badges (inside container) ────────────────── --}}
    <div class="container">
        <div class="cs-trust-row">

            <div class="cs-trust-item">
                <div class="cs-trust-icon"><i class="bi bi-star-fill"></i></div>
                <div>
                    <span class="cs-trust-val">5.0 Star Rating</span>
                    <span class="cs-trust-label">Google & Clutch Reviews</span>
                </div>
            </div>

            <div class="cs-trust-item">
                <div class="cs-trust-icon"><i class="bi bi-award-fill"></i></div>
                <div>
                    <span class="cs-trust-val">Australian Owned</span>
                    <span class="cs-trust-label">100% Local Team</span>
                </div>
            </div>

            <div class="cs-trust-item">
                <div class="cs-trust-icon"><i class="bi bi-clock-fill"></i></div>
                <div>
                    <span class="cs-trust-val">95% On-Time</span>
                    <span class="cs-trust-label">Project Delivery Rate</span>
                </div>
            </div>

            <div class="cs-trust-item">
                <div class="cs-trust-icon"><i class="bi bi-headset"></i></div>
                <div>
                    <span class="cs-trust-val">Dedicated Support</span>
                    <span class="cs-trust-label">Post-Launch Assistance</span>
                </div>
            </div>

        </div>
    </div>

</section>
