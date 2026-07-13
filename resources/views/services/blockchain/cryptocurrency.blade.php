@extends('layouts.app')


@section('meta')
    <title>Cryptocurrency Development Services in Melbourne - Vetora Solutions</title>
    <meta name="description"
        content="Vetora Solutions builds secure, audited cryptocurrency coins, tokens, wallets, exchanges, and DeFi platforms — end-to-end blockchain development for businesses across Melbourne and Australia.">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/css/cryptocurrency.css') }}?v=1.0.0">
@endsection


@section('content')

    {{-- ============================================================
         1. HERO
         ============================================================ --}}
    <section class="cc-hero">
        <div class="cc-hero-shape cc-shape-1"></div>
        <div class="cc-hero-shape cc-shape-2"></div>
        <div class="cc-hero-shape cc-shape-3"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10">
                    <span class="cc-hero-eyebrow">
                        <i class="bi bi-currency-bitcoin"></i>&nbsp; Cryptocurrency Development
                    </span>
                    <h1>
                        Launch a <span class="cc-hero-grad">Secure & Scalable</span><br>
                        Cryptocurrency Product
                    </h1>
                    <p class="cc-hero-desc">
                        From coins and tokens to wallets, exchanges, and DeFi platforms — we design, build, and audit
                        blockchain products engineered for security, compliance, and long-term growth.
                    </p>
                    <div class="cc-hero-actions">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">
                            <button class="btn btn-gradiant btn-md">
                                Get a Free Quote <i class="bi bi-arrow-right"></i>
                            </button>
                        </a>
                        <a href="#cc-process" class="cc-hero-link">
                            <i class="bi bi-play-circle-fill"></i> See Our Process
                        </a>
                    </div>
                </div>
            </div>

            {{-- Ticker strip — a purely decorative, CSS-driven marquee of major coins,
                 reinforcing the "cryptocurrency" theme at a glance. --}}
            <div class="cc-ticker" aria-hidden="true">
                <div class="cc-ticker-track">
                    @php
                        $coins = [
                            ['sym' => 'BTC', 'name' => 'Bitcoin', 'chg' => '+2.4%', 'up' => true],
                            ['sym' => 'ETH', 'name' => 'Ethereum', 'chg' => '+1.8%', 'up' => true],
                            ['sym' => 'BNB', 'name' => 'BNB', 'chg' => '-0.6%', 'up' => false],
                            ['sym' => 'SOL', 'name' => 'Solana', 'chg' => '+4.1%', 'up' => true],
                            ['sym' => 'USDT', 'name' => 'Tether', 'chg' => '+0.0%', 'up' => true],
                            ['sym' => 'MATIC', 'name' => 'Polygon', 'chg' => '-1.2%', 'up' => false],
                            ['sym' => 'XRP', 'name' => 'Ripple', 'chg' => '+3.0%', 'up' => true],
                        ];
                    @endphp
                    @foreach (array_merge($coins, $coins) as $coin)
                        <span class="cc-tick">
                            <b>{{ $coin['sym'] }}</b> {{ $coin['name'] }}
                            <em class="{{ $coin['up'] ? 'cc-up' : 'cc-down' }}">{{ $coin['chg'] }}</em>
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         2. TRUSTED CLIENTS
         ============================================================ --}}
    @include('common.trusted-clients', [
        'clientsTitle' => 'Trusted by Fintech, Web3 & Blockchain-First Businesses',
        'clientsDesc' =>
            'We partner with startups, exchanges, and enterprises to build cryptocurrency products that are secure, audited, and ready to scale.',
    ])


    {{-- ============================================================
         3. ABOUT / INTRO SPLIT
         ============================================================ --}}
    <section class="section cc-about-section">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 order-lg-2">
                    <div class="section-subtitle"><i class="bi bi-info-circle"></i> What We Do</div>
                    <div class="section-heading mb-3">
                        <h2 class="section-title">
                            End-to-End Cryptocurrency<br>
                            <span>Development You Can Trust</span>
                        </h2>
                    </div>
                    <p class="cc-about-text">
                        Launching a cryptocurrency product means putting real money and real trust on the line. At
                        VETORA SOLUTIONS, we engineer coins, tokens, wallets, and exchanges with security and
                        compliance built in from the first line of code — not bolted on afterwards.
                    </p>
                    <p class="cc-about-text">
                        Our blockchain engineers combine deep protocol expertise with rigorous auditing practices,
                        delivering cryptocurrency products that hold up under real-world volume, scrutiny, and market
                        pressure.
                    </p>
                    <ul class="cc-check-list">
                        <li><i class="bi bi-check-circle-fill"></i> Independently audited smart contracts</li>
                        <li><i class="bi bi-check-circle-fill"></i> Multi-chain support — Ethereum, BSC, Polygon, Solana</li>
                        <li><i class="bi bi-check-circle-fill"></i> Secure wallet & custody architecture</li>
                        <li><i class="bi bi-check-circle-fill"></i> Regulatory-aware token structuring</li>
                        <li><i class="bi bi-check-circle-fill"></i> 24/7 post-launch monitoring & support</li>
                    </ul>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="btn btn-gradiant btn-md mt-3">
                        Start Your Project <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="cc-about-img-wrap">
                        <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Cryptocurrency Development"
                            class="cc-about-img">
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         4. SERVICES GRID — NUMBERED CARDS (2-col)
         ============================================================ --}}
    <section class="section cc-services-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-grid-3x3-gap"></i> Our Services</div>
                <h2 class="section-title">Comprehensive <span>Cryptocurrency Development Services</span></h2>
                <p class="section-description">
                    From a single token to a full trading platform — we deliver end-to-end cryptocurrency
                    development engineered for security, scale, and compliance.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6 col-md-6">
                    <div class="cc-svc-card">
                        <div class="cc-svc-num">01</div>
                        <div class="cc-svc-icon"><i class="bi bi-coin"></i></div>
                        <h3>Coin & Token Development</h3>
                        <p>Custom cryptocurrency coins and tokens built to your tokenomics — from utility tokens to
                            full standalone blockchains with their own consensus layer.</p>
                        <div class="cc-svc-tags">
                            <span>ERC-20</span><span>BEP-20</span><span>SPL</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="cc-svc-card">
                        <div class="cc-svc-num">02</div>
                        <div class="cc-svc-icon"><i class="bi bi-wallet2"></i></div>
                        <h3>Crypto Wallet Development</h3>
                        <p>Non-custodial and custodial wallets with multi-signature security, biometric access, and
                            support for multiple chains and assets in one interface.</p>
                        <div class="cc-svc-tags">
                            <span>Multi-Sig</span><span>Hardware Wallet</span><span>Mobile & Web</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="cc-svc-card">
                        <div class="cc-svc-num">03</div>
                        <div class="cc-svc-icon"><i class="bi bi-arrow-left-right"></i></div>
                        <h3>Crypto Exchange Development</h3>
                        <p>Spot and peer-to-peer trading platforms with real-time order matching, liquidity
                            management, and enterprise-grade security controls.</p>
                        <div class="cc-svc-tags">
                            <span>Spot Trading</span><span>P2P</span><span>Order Matching</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="cc-svc-card">
                        <div class="cc-svc-num">04</div>
                        <div class="cc-svc-icon"><i class="bi bi-shield-lock"></i></div>
                        <h3>Smart Contract Development & Auditing</h3>
                        <p>Gas-optimised, independently audited smart contracts for token logic, staking, vesting,
                            and DeFi protocols — built to withstand real-world attacks.</p>
                        <div class="cc-svc-tags">
                            <span>Solidity</span><span>Rust</span><span>Security Audits</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="cc-svc-card">
                        <div class="cc-svc-num">05</div>
                        <div class="cc-svc-icon"><i class="bi bi-credit-card-2-front"></i></div>
                        <h3>Crypto Payment Gateway Integration</h3>
                        <p>Accept cryptocurrency payments directly on your platform with real-time conversion,
                            settlement, and fraud-monitoring built in.</p>
                        <div class="cc-svc-tags">
                            <span>Checkout SDK</span><span>Auto-Settlement</span><span>Fraud Checks</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="cc-svc-card">
                        <div class="cc-svc-num">06</div>
                        <div class="cc-svc-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h3>DeFi & Staking Platform Development</h3>
                        <p>Yield farming, staking pools, and decentralized lending protocols designed with
                            transparent, auditable smart contract logic.</p>
                        <div class="cc-svc-tags">
                            <span>Staking</span><span>Yield Farming</span><span>Lending</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         5. ADVANTAGES — 3-COLUMN HIGHLIGHTS
         ============================================================ --}}
    <section class="cc-advantages-section">
        <div class="container">
            <div class="cc-adv-grid">

                <div class="cc-adv-item">
                    <div class="cc-adv-icon">
                        <i class="bi bi-trophy-fill"></i>
                    </div>
                    <h4>Proven Blockchain Expertise</h4>
                    <p>A track record of delivering coins, tokens, wallets, and exchanges for startups and
                        enterprises across the crypto and fintech space.</p>
                </div>

                <div class="cc-adv-divider"></div>

                <div class="cc-adv-item">
                    <div class="cc-adv-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4>Security-First Engineering</h4>
                    <p>Every smart contract and wallet we ship goes through independent auditing and rigorous
                        testing before it ever touches real funds.</p>
                </div>

                <div class="cc-adv-divider"></div>

                <div class="cc-adv-item">
                    <div class="cc-adv-icon">
                        <i class="bi bi-diagram-3-fill"></i>
                    </div>
                    <h4>Multi-Chain Flexibility</h4>
                    <p>We build on the chain that fits your product — Ethereum, BSC, Polygon, Solana, or a custom
                        chain — without locking you in.</p>
                </div>

            </div>
        </div>
    </section>


    {{-- ============================================================
         6. INDUSTRIES WE SERVE
         ============================================================ --}}
    <section class="section cc-industries-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-building"></i> Industries We Serve</div>
                <h2 class="section-title">Cryptocurrency Solutions <span>Across Every Sector</span></h2>
                <p class="section-description">
                    Our blockchain team has built cryptocurrency products for businesses across a wide range of
                    industries in Melbourne and around the world.
                </p>
            </div>

            <div class="row g-3">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-bank"></i></div>
                        <span>Fintech & Banking</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-controller"></i></div>
                        <span>iGaming & Casinos</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-building"></i></div>
                        <span>Real Estate Tokenization</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-truck"></i></div>
                        <span>Supply Chain</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-heart-pulse"></i></div>
                        <span>Healthcare</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-cart3"></i></div>
                        <span>E-Commerce & Retail</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-gem"></i></div>
                        <span>NFT & Web3</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="cc-ind-card">
                        <div class="cc-ind-icon"><i class="bi bi-briefcase"></i></div>
                        <span>Professional Services</span>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         7. WHY CHOOSE US — NUMBERED LIST (2-col)
         ============================================================ --}}
    <section class="section cc-why-section">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-patch-check"></i> Why Vetora</div>
                <h2 class="section-title">Why Businesses Choose <span>Our Blockchain Team</span></h2>
                <p class="section-description">
                    We don't just deploy contracts — we engineer cryptocurrency products that hold up to real
                    money, real users, and real scrutiny.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-lg-6">
                    <div class="cc-why-item">
                        <div class="cc-why-num">01</div>
                        <div class="cc-why-body">
                            <h4>Audited, Battle-Tested Code</h4>
                            <p>Every smart contract is independently audited and stress-tested before it ever
                                touches real funds — security is never an afterthought.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cc-why-item">
                        <div class="cc-why-num">02</div>
                        <div class="cc-why-body">
                            <h4>Multi-Chain Expertise</h4>
                            <p>Ethereum, BSC, Polygon, Solana, and more — we choose the chain that fits your product
                                instead of forcing a one-size-fits-all approach.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cc-why-item">
                        <div class="cc-why-num">03</div>
                        <div class="cc-why-body">
                            <h4>Tokenomics to Mainnet, End-to-End</h4>
                            <p>We own the full lifecycle — token design, smart contracts, wallets, exchange
                                integration, and mainnet launch — under one roof.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cc-why-item">
                        <div class="cc-why-num">04</div>
                        <div class="cc-why-body">
                            <h4>Transparent, Milestone-Based Process</h4>
                            <p>Clear milestones, testnet demos, and regular progress updates — so you always know
                                exactly where your project stands.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cc-why-item">
                        <div class="cc-why-num">05</div>
                        <div class="cc-why-body">
                            <h4>Post-Launch Monitoring & Support</h4>
                            <p>Round-the-clock monitoring, incident response, and ongoing feature development after
                                your product goes live on mainnet.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cc-why-item">
                        <div class="cc-why-num">06</div>
                        <div class="cc-why-body">
                            <h4>Regulatory-Aware Architecture</h4>
                            <p>We structure token models and platform architecture with an eye on evolving
                                compliance requirements, reducing risk as you scale.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    {{-- ============================================================
         8. DEVELOPMENT PROCESS — VISUAL TIMELINE
         ============================================================ --}}
    <section class="section cc-process-section" id="cc-process">
        <div class="container">

            <div class="section-heading text-center">
                <div class="section-subtitle"><i class="bi bi-arrow-repeat"></i> How We Work</div>
                <h2 class="section-title">Our <span>Development Process</span></h2>
                <p class="section-description">
                    A proven, security-first process that takes your cryptocurrency product from concept to
                    mainnet — with full transparency at every stage.
                </p>
            </div>

            <div class="cc-timeline">

                <div class="cc-tl-item">
                    <div class="cc-tl-num">01</div>
                    <div class="cc-tl-connector"></div>
                    <div class="cc-tl-card">
                        <div class="cc-tl-card-left">
                            <div class="cc-tl-icon"><i class="bi bi-search"></i></div>
                            <h4>Discovery & Tokenomics</h4>
                            <p>We define your token model, supply mechanics, use case, and target chain based on
                                your business goals and regulatory context.</p>
                            <div class="cc-tl-tags">
                                <span>Token Design</span>
                                <span>Supply Mechanics</span>
                                <span>Chain Selection</span>
                            </div>
                        </div>
                        <div class="cc-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Discovery & Tokenomics"
                                class="cc-tl-img">
                        </div>
                    </div>
                </div>

                <div class="cc-tl-item">
                    <div class="cc-tl-num">02</div>
                    <div class="cc-tl-connector"></div>
                    <div class="cc-tl-card">
                        <div class="cc-tl-card-left">
                            <div class="cc-tl-icon"><i class="bi bi-diagram-3"></i></div>
                            <h4>Architecture & Design</h4>
                            <p>We design the technical blueprint — contract architecture, wallet integration, and
                                exchange or payment flows mapped out upfront.</p>
                            <div class="cc-tl-tags">
                                <span>System Architecture</span>
                                <span>Wallet Flow</span>
                                <span>UX Design</span>
                            </div>
                        </div>
                        <div class="cc-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Architecture & Design"
                                class="cc-tl-img">
                        </div>
                    </div>
                </div>

                <div class="cc-tl-item">
                    <div class="cc-tl-num">03</div>
                    <div class="cc-tl-connector"></div>
                    <div class="cc-tl-card">
                        <div class="cc-tl-card-left">
                            <div class="cc-tl-icon"><i class="bi bi-code-slash"></i></div>
                            <h4>Smart Contract Development</h4>
                            <p>Our engineers write gas-optimised, well-documented smart contracts following secure
                                coding standards and industry best practices.</p>
                            <div class="cc-tl-tags">
                                <span>Solidity</span>
                                <span>Gas Optimisation</span>
                                <span>Unit Testing</span>
                            </div>
                        </div>
                        <div class="cc-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Smart Contract Development"
                                class="cc-tl-img">
                        </div>
                    </div>
                </div>

                <div class="cc-tl-item">
                    <div class="cc-tl-num">04</div>
                    <div class="cc-tl-connector"></div>
                    <div class="cc-tl-card">
                        <div class="cc-tl-card-left">
                            <div class="cc-tl-icon"><i class="bi bi-shield-lock"></i></div>
                            <h4>Security Auditing</h4>
                            <p>Independent smart contract audits, penetration testing, and vulnerability scanning
                                before anything is exposed to real funds.</p>
                            <div class="cc-tl-tags">
                                <span>Contract Audit</span>
                                <span>Pen Testing</span>
                                <span>Vulnerability Scan</span>
                            </div>
                        </div>
                        <div class="cc-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Security Auditing"
                                class="cc-tl-img">
                        </div>
                    </div>
                </div>

                <div class="cc-tl-item">
                    <div class="cc-tl-num">05</div>
                    <div class="cc-tl-connector"></div>
                    <div class="cc-tl-card">
                        <div class="cc-tl-card-left">
                            <div class="cc-tl-icon"><i class="bi bi-check2-all"></i></div>
                            <h4>Testnet Deployment</h4>
                            <p>Full deployment to testnet for real-world simulation, stakeholder review, and final
                                validation before going live.</p>
                            <div class="cc-tl-tags">
                                <span>Testnet</span>
                                <span>Simulation</span>
                                <span>Stakeholder Review</span>
                            </div>
                        </div>
                        <div class="cc-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Testnet Deployment"
                                class="cc-tl-img">
                        </div>
                    </div>
                </div>

                <div class="cc-tl-item cc-tl-last">
                    <div class="cc-tl-num">06</div>
                    <div class="cc-tl-card">
                        <div class="cc-tl-card-left">
                            <div class="cc-tl-icon"><i class="bi bi-rocket-takeoff"></i></div>
                            <h4>Mainnet Launch & Support</h4>
                            <p>Coordinated mainnet launch followed by round-the-clock monitoring, incident response,
                                and ongoing development support.</p>
                            <div class="cc-tl-tags">
                                <span>Mainnet Launch</span>
                                <span>24/7 Monitoring</span>
                                <span>Ongoing Support</span>
                            </div>
                        </div>
                        <div class="cc-tl-card-right">
                            <img src="{{ asset('Assets/Images/hero-banner.png') }}" alt="Mainnet Launch & Support"
                                class="cc-tl-img">
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
                    We choose blockchain platforms and tooling that are proven, secure, and future-proof — so your
                    cryptocurrency product is built on a solid foundation.
                </p>
            </div>
            @include('common.tech-stack')
        </div>
    </section>


    {{-- ============================================================
         10. CTA SECTION
         ============================================================ --}}
    <section class="section cc-cta-section">
        <div class="container">
            <div class="cc-cta-inner">
                <div class="cc-cta-orb cc-cta-orb-1"></div>
                <div class="cc-cta-orb cc-cta-orb-2"></div>
                <div class="cc-cta-content">
                    <span class="cc-cta-eyebrow">Ready to Launch?</span>
                    <h2>Let's Build Your<br><span>Cryptocurrency Product</span></h2>
                    <p>
                        Turn your token idea into a secure, audited product ready for real users and real volume.
                        Our team is ready to start — get in touch today for a free consultation.
                    </p>
                    <div class="cc-cta-btns">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal" class="cc-btn-white">
                            Get a Free Quote <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ url('/contact-us') }}" class="cc-btn-ghost">
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
                    We help businesses scale with premium digital solutions, blockchain innovation,
                    and high-performance applications.
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
                    Everything you need to know about our cryptocurrency development services.
                </p>
            </div>

            <div class="accordion" id="ccFaqMain">
                <div class="row g-4">

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#ccfaq1">
                                    1. How long does it take to launch a cryptocurrency?
                                </button>
                            </h2>
                            <div id="ccfaq1" class="accordion-collapse collapse show" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Timelines vary by scope. A standard token on an existing chain typically takes
                                    3–6 weeks, while a full exchange or custom blockchain can take 3–6 months. We
                                    provide a detailed timeline after our initial discovery call.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq2">
                                    2. How much does cryptocurrency development cost?
                                </button>
                            </h2>
                            <div id="ccfaq2" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Cost depends on complexity — a token launch, a wallet, and a full exchange all
                                    have very different scopes. We provide a transparent, itemised proposal once we
                                    understand your requirements — no hidden costs.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq3">
                                    3. Which blockchains do you build on?
                                </button>
                            </h2>
                            <div id="ccfaq3" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    We build on Ethereum, BNB Smart Chain, Polygon, and Solana, and can also design
                                    a custom Layer 1 or Layer 2 chain if your product requires it. We recommend the
                                    chain that best fits your use case and budget.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq4">
                                    4. Are your smart contracts audited?
                                </button>
                            </h2>
                            <div id="ccfaq4" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Yes. Every smart contract we ship goes through internal review and independent
                                    third-party auditing before deployment to mainnet — security is never optional
                                    when real funds are involved.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq5">
                                    5. Can you help with an ICO or token sale?
                                </button>
                            </h2>
                            <div id="ccfaq5" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Yes. We support token sale structuring, vesting contracts, and sale-platform
                                    development, working alongside your legal counsel to align with your target
                                    jurisdictions.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq6">
                                    6. Do you build crypto wallets too?
                                </button>
                            </h2>
                            <div id="ccfaq6" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Yes. We build custodial and non-custodial wallets with multi-signature security,
                                    biometric access, and support for multiple chains and assets in a single app.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq7">
                                    7. Can you build a crypto exchange?
                                </button>
                            </h2>
                            <div id="ccfaq7" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Yes, including spot trading and peer-to-peer exchange platforms with real-time
                                    order matching, liquidity management, and enterprise-grade security controls.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq8">
                                    8. How do you handle regulatory compliance?
                                </button>
                            </h2>
                            <div id="ccfaq8" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    We design token models and platform architecture with compliance considerations
                                    in mind, and recommend working with legal counsel in your target jurisdictions
                                    throughout the process — we handle the technology, not legal advice.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq9">
                                    9. Do you offer ongoing support after launch?
                                </button>
                            </h2>
                            <div id="ccfaq9" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Yes. We offer flexible support packages covering monitoring, incident response,
                                    security updates, and ongoing feature development after mainnet launch.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item custom-accordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#ccfaq10">
                                    10. How do we get started?
                                </button>
                            </h2>
                            <div id="ccfaq10" class="accordion-collapse collapse" data-bs-parent="#ccFaqMain">
                                <div class="accordion-body">
                                    Request a free consultation via our quote form or contact page. We'll schedule a
                                    discovery call to understand your token model and goals, then provide a
                                    detailed proposal and timeline. Most projects kick off within 1–2 weeks.
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
