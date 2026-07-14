@extends('layouts.app')


@section('meta')
    <title>Cryptocurrency Development Services in Melbourne — Vetora Solutions</title>
    <meta name="description"
        content="Vetora Solutions designs, builds, and audits cryptocurrency coins, tokens, wallets, exchanges, and DeFi platforms — secure, multi-chain blockchain development for businesses across Melbourne and Australia.">

    {{-- Dark-theme fonts for this page's immersive design --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet">

    {{-- Owl Carousel (testimonials) — loaded before the page CSS so our theme overrides win --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('Assets/css/cryptocurrency.css') }}?v=2.6.0">
@endsection


{{-- ================================================================
     OWN DARK NAV — replaces the site's default header for this page.
     ================================================================ --}}
@section('page-header')
    <script>document.documentElement.classList.add('js')</script>

    <header class="cx-header" id="cxHeader">
        <div class="cx-wrap cx-nav">
            <a href="{{ url('/') }}" class="cx-brand">
                <img src="{{ asset('Assets/Images/logo-main.png') }}" alt="Vetora Logo">
            </a>

            <button type="button" class="cx-nav-toggle" id="cxNavToggle" aria-label="Toggle menu" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>

            <div class="cx-nav-collapse" id="cxNavCollapse">
                <nav class="cx-nav-links">
                    <a href="#cx-services">Services</a>
                    <a href="#cx-process">Process</a>
                    <a href="#cx-security">Security</a>
                    <a href="#cx-faq">FAQ</a>
                </nav>
                <div class="cx-nav-actions">
                    <a href="{{ url('/contact-us') }}" class="cx-btn cx-btn-ghost">Let's talk</a>
                    <a href="#" class="cx-btn cx-btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Get a quote</a>
                </div>
            </div>
        </div>
    </header>
@endsection


@section('content')
{{-- data-reveal-group opts this page out of scroll-fx.js's generic whole-section
     reveal pass — this page runs its own IntersectionObserver reveal instead. --}}
<div class="cx-root" data-reveal-group>

    {{-- ============================================================
         1. HERO
         ============================================================ --}}
    <section class="cx-hero">
        <div class="cx-wrap">
            <div>
                <span class="cx-eyebrow">Cryptocurrency development</span>
                <h1>Build crypto products with <span class="cx-grad">confidence.</span></h1>
                <p class="cx-lead">
                    From coins and tokens to wallets, exchanges, and DeFi platforms — we design, build, and
                    independently audit blockchain products engineered for security, compliance, and long-term growth.
                </p>
                <div class="cx-hero-cta">
                    <a href="#" class="cx-btn cx-btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">
                        Get a Free Quote →
                    </a>
                    <a href="#cx-process" class="cx-btn cx-btn-ghost">See Our Process</a>
                </div>
                <div class="cx-trust-row">
                    <div><b>50+</b>Products shipped</div>
                    <div><b>100%</b>Audited contracts</div>
                    <div><b>8+</b>Chains supported</div>
                </div>
            </div>

            <div class="cx-orb-stage">
                <svg class="cx-hero-art" viewBox="0 0 520 460" xmlns="http://www.w3.org/2000/svg"
                     role="img" aria-labelledby="cxArtTitle">
                    <title id="cxArtTitle">Bitcoin at the centre of a multi-chain network, orbited by Ethereum, Solana and BNB Chain nodes</title>

                    <defs>
                        <linearGradient id="cxCoreGrad" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#7b1fa2" />
                            <stop offset="55%" stop-color="#2c73d2" />
                            <stop offset="100%" stop-color="#1d57a3" />
                        </linearGradient>
                        <radialGradient id="cxArtGlow" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#5f0a87" stop-opacity=".55" />
                            <stop offset="100%" stop-color="#5f0a87" stop-opacity="0" />
                        </radialGradient>
                        <linearGradient id="cxEdge" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#00c2a8" stop-opacity="0" />
                            <stop offset="50%" stop-color="#00c2a8" stop-opacity=".7" />
                            <stop offset="100%" stop-color="#00c2a8" stop-opacity="0" />
                        </linearGradient>
                    </defs>

                    {{-- ambient bloom behind the coin --}}
                    <circle cx="260" cy="235" r="190" fill="url(#cxArtGlow)" />

                    {{-- network edges: core → each chain node (drawn first so the coin overlaps them) --}}
                    <g stroke="url(#cxEdge)" stroke-width="1.5" fill="none">
                        <path d="M260 235 L382 113" />
                        <path d="M260 235 L401 334" />
                        <path d="M260 235 L119 334" />
                        <path d="M260 235 L138 113" />
                    </g>

                    {{-- orbit rings --}}
                    <g class="cx-art-ring">
                        <circle cx="260" cy="235" r="172" fill="none" stroke="rgba(255,255,255,.17)"
                                stroke-width="1" stroke-dasharray="6 9" />
                    </g>
                    <circle cx="260" cy="235" r="132" fill="none" stroke="rgba(255,255,255,.08)" stroke-width="1" />

                    {{-- core coin --}}
                    <g class="cx-art-core">
                        <circle cx="260" cy="235" r="96" fill="url(#cxCoreGrad)" />
                        <circle cx="260" cy="235" r="96" fill="none" stroke="rgba(255,255,255,.18)" stroke-width="1.5" />
                        <text class="cx-art-sym" x="260" y="235" text-anchor="middle" dominant-baseline="central">₿</text>
                    </g>

                    {{-- chain nodes --}}
                    <g class="cx-art-node cx-art-n1">
                        <circle cx="382" cy="113" r="30" fill="#F7931A" />
                        <text x="382" y="113" text-anchor="middle" dominant-baseline="central" fill="#fff">BTC</text>
                    </g>
                    <g class="cx-art-node cx-art-n2">
                        <circle cx="401" cy="334" r="30" fill="#627EEA" />
                        <text x="401" y="334" text-anchor="middle" dominant-baseline="central" fill="#fff">ETH</text>
                    </g>
                    <g class="cx-art-node cx-art-n3">
                        <circle cx="119" cy="334" r="30" fill="#14b88a" />
                        <text x="119" y="334" text-anchor="middle" dominant-baseline="central" fill="#fff">SOL</text>
                    </g>
                    <g class="cx-art-node cx-art-n4">
                        <circle cx="138" cy="113" r="30" fill="#F3BA2F" />
                        <text x="138" y="113" text-anchor="middle" dominant-baseline="central" fill="#1e2026">BNB</text>
                    </g>
                </svg>
            </div>
        </div>

        {{-- Decorative coin ticker --}}
        <div class="cx-ticker">
            <div class="cx-ticker-track" id="cx-ticker">
                <span class="cx-tk"><span class="cx-sym">BTC</span><span class="cx-pr">Bitcoin</span><span class="cx-up">▲ 2.4%</span></span>
                <span class="cx-tk"><span class="cx-sym">ETH</span><span class="cx-pr">Ethereum</span><span class="cx-up">▲ 1.8%</span></span>
                <span class="cx-tk"><span class="cx-sym">SOL</span><span class="cx-pr">Solana</span><span class="cx-up">▲ 5.1%</span></span>
                <span class="cx-tk"><span class="cx-sym">BNB</span><span class="cx-pr">BNB Chain</span><span class="cx-down">▼ 0.7%</span></span>
                <span class="cx-tk"><span class="cx-sym">XRP</span><span class="cx-pr">Ripple</span><span class="cx-up">▲ 3.2%</span></span>
                <span class="cx-tk"><span class="cx-sym">ADA</span><span class="cx-pr">Cardano</span><span class="cx-down">▼ 1.1%</span></span>
                <span class="cx-tk"><span class="cx-sym">MATIC</span><span class="cx-pr">Polygon</span><span class="cx-up">▲ 0.9%</span></span>
                <span class="cx-tk"><span class="cx-sym">DOGE</span><span class="cx-pr">Dogecoin</span><span class="cx-up">▲ 4.6%</span></span>
            </div>
        </div>
    </section>


    {{-- ============================================================
         TRUSTED BY
         ============================================================ --}}
    <section class="cx-trusted">
        <div class="cx-wrap">
            <span class="cx-lbl">Trusted by fintech, Web3 &amp; blockchain-first businesses</span>
            <div class="cx-logos"><span>Fintech</span><span>Web3</span><span>DeFi</span><span>Exchanges</span><span>Startups</span></div>
        </div>
    </section>


    {{-- ============================================================
         2. NETWORKS WE BUILD ON
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep">
        <div class="cx-wrap">
            <div class="cx-sec-head">
                <span class="cx-eyebrow">Multi-chain by default</span>
                <h2>Networks we build on</h2>
                <p>We recommend and build on the chain that fits your product — never a one-size-fits-all approach.</p>
            </div>
            <div class="cx-card cx-market">
                <div class="cx-mkt-row cx-mkt-head">
                    <span>#</span><span>Network</span><span>Type</span><span>Consensus</span><span>Best for</span><span>Adoption</span><span></span>
                </div>
                <div class="cx-mkt-row">
                    <span class="cx-mono" style="color:var(--cx-txt-mute)">1</span>
                    <div class="cx-coin-name"><div class="cx-chip cx-eth">Ξ</div><div><b>Ethereum</b><span>ERC-20</span></div></div>
                    <span class="cx-mkt-price">Layer 1</span><span class="cx-mkt-chg cx-up">PoS</span><span class="cx-mkt-cap">DeFi &amp; tokens</span>
                    <svg width="90" height="30" viewBox="0 0 90 30"><polyline fill="none" stroke="#3dd9c2" stroke-width="2" points="0,22 15,18 30,20 45,12 60,14 75,6 90,4"/></svg>
                    <button class="cx-mkt-trade" data-bs-toggle="modal" data-bs-target="#quoteModal">Build</button>
                </div>
                <div class="cx-mkt-row">
                    <span class="cx-mono" style="color:var(--cx-txt-mute)">2</span>
                    <div class="cx-coin-name"><div class="cx-chip cx-bnb">B</div><div><b>BNB Chain</b><span>BEP-20</span></div></div>
                    <span class="cx-mkt-price">Layer 1</span><span class="cx-mkt-chg cx-up">PoSA</span><span class="cx-mkt-cap">Low-fee apps</span>
                    <svg width="90" height="30" viewBox="0 0 90 30"><polyline fill="none" stroke="#3dd9c2" stroke-width="2" points="0,20 15,22 30,16 45,18 60,10 75,12 90,7"/></svg>
                    <button class="cx-mkt-trade" data-bs-toggle="modal" data-bs-target="#quoteModal">Build</button>
                </div>
                <div class="cx-mkt-row">
                    <span class="cx-mono" style="color:var(--cx-txt-mute)">3</span>
                    <div class="cx-coin-name"><div class="cx-chip cx-sol">◎</div><div><b>Solana</b><span>SPL</span></div></div>
                    <span class="cx-mkt-price">Layer 1</span><span class="cx-mkt-chg cx-up">PoH</span><span class="cx-mkt-cap">High throughput</span>
                    <svg width="90" height="30" viewBox="0 0 90 30"><polyline fill="none" stroke="#3dd9c2" stroke-width="2" points="0,24 15,20 30,22 45,14 60,10 75,8 90,3"/></svg>
                    <button class="cx-mkt-trade" data-bs-toggle="modal" data-bs-target="#quoteModal">Build</button>
                </div>
                <div class="cx-mkt-row">
                    <span class="cx-mono" style="color:var(--cx-txt-mute)">4</span>
                    <div class="cx-coin-name"><div class="cx-chip cx-matic">⬡</div><div><b>Polygon</b><span>PoS / zkEVM</span></div></div>
                    <span class="cx-mkt-price">Layer 2</span><span class="cx-mkt-chg cx-up">PoS</span><span class="cx-mkt-cap">Scaling &amp; NFTs</span>
                    <svg width="90" height="30" viewBox="0 0 90 30"><polyline fill="none" stroke="#3dd9c2" stroke-width="2" points="0,22 15,18 30,14 45,16 60,10 75,9 90,5"/></svg>
                    <button class="cx-mkt-trade" data-bs-toggle="modal" data-bs-target="#quoteModal">Build</button>
                </div>
                <div class="cx-mkt-row">
                    <span class="cx-mono" style="color:var(--cx-txt-mute)">5</span>
                    <div class="cx-coin-name"><div class="cx-chip cx-btc">₿</div><div><b>Bitcoin</b><span>Ordinals / L2</span></div></div>
                    <span class="cx-mkt-price">Layer 1</span><span class="cx-mkt-chg cx-up">PoW</span><span class="cx-mkt-cap">Store of value</span>
                    <svg width="90" height="30" viewBox="0 0 90 30"><polyline fill="none" stroke="#3dd9c2" stroke-width="2" points="0,24 15,22 30,18 45,12 60,14 75,8 90,6"/></svg>
                    <button class="cx-mkt-trade" data-bs-toggle="modal" data-bs-target="#quoteModal">Build</button>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         3. WHY VETORA
         ============================================================ --}}
    <section class="cx-sec" id="cx-why">
        <div class="cx-wrap">
            <div class="cx-sec-head">
                <span class="cx-eyebrow">Why Vetora</span>
                <h2>Engineered for real money</h2>
                <p>We don't just deploy contracts — we build cryptocurrency products that hold up to real funds, real users, and real scrutiny.</p>
            </div>
            <div class="cx-grid-3">
                <div class="cx-card cx-feat"><div class="cx-ic">🛡️</div><h3>Security-First Engineering</h3><p>Every contract and wallet is stress-tested and independently audited before it ever touches real funds.</p></div>
                <div class="cx-card cx-feat"><div class="cx-ic">🔗</div><h3>Multi-Chain Expertise</h3><p>Ethereum, BNB Chain, Polygon, Solana, and custom L1/L2 — we pick the chain that fits your product.</p></div>
                <div class="cx-card cx-feat"><div class="cx-ic">⚡</div><h3>Gas-Optimised Code</h3><p>Lean, well-documented Solidity and Rust that keeps transaction costs low and throughput high.</p></div>
                <div class="cx-card cx-feat"><div class="cx-ic">🧩</div><h3>End-to-End Delivery</h3><p>Tokenomics, contracts, wallets, exchange integration, and mainnet launch — all under one roof.</p></div>
                <div class="cx-card cx-feat"><div class="cx-ic">⚖️</div><h3>Regulatory-Aware</h3><p>Token models and architecture designed with evolving compliance requirements in mind.</p></div>
                <div class="cx-card cx-feat"><div class="cx-ic">🎧</div><h3>24/7 Post-Launch Support</h3><p>Round-the-clock monitoring, incident response, and ongoing development after you go live.</p></div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         4. CHAINS & TOKENS
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep">
        <div class="cx-wrap">
            <div class="cx-sec-head">
                <span class="cx-eyebrow">Standards we ship</span>
                <h2>Coins &amp; tokens we build</h2>
                <p>From utility tokens on existing chains to full standalone blockchains with their own consensus layer.</p>
            </div>
            <div class="cx-grid-4">
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-btc">₿</div><div><b>Bitcoin</b><span>BTC</span></div></div><div class="cx-pr">L2 &amp; Ordinals</div><div class="cx-chg cx-up">Store of value</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-eth">Ξ</div><div><b>Ethereum</b><span>ERC-20</span></div></div><div class="cx-pr">Tokens &amp; DeFi</div><div class="cx-chg cx-up">Most adopted</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-sol">◎</div><div><b>Solana</b><span>SPL</span></div></div><div class="cx-pr">High-speed</div><div class="cx-chg cx-up">Low fees</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-bnb">B</div><div><b>BNB Chain</b><span>BEP-20</span></div></div><div class="cx-pr">Low-cost</div><div class="cx-chg cx-up">EVM-compatible</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-xrp">✕</div><div><b>XRP Ledger</b><span>XRPL</span></div></div><div class="cx-pr">Payments</div><div class="cx-chg cx-up">Fast settlement</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-ada">₳</div><div><b>Cardano</b><span>Plutus</span></div></div><div class="cx-pr">Formal</div><div class="cx-chg cx-up">Peer-reviewed</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-matic">⬡</div><div><b>Polygon</b><span>PoS / zkEVM</span></div></div><div class="cx-pr">Scaling</div><div class="cx-chg cx-up">NFT-ready</div></div>
                <div class="cx-card cx-coin-card"><div class="cx-top"><div class="cx-chip cx-doge">Ð</div><div><b>Custom L1</b><span>Bespoke</span></div></div><div class="cx-pr">Your chain</div><div class="cx-chg cx-up">Full control</div></div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         5. OUR SERVICES (image cards)
         ============================================================ --}}
    <section class="cx-sec" id="cx-services">
        <div class="cx-wrap">
            <div class="cx-sec-head">
                <span class="cx-eyebrow">What we build</span>
                <h2>Our cryptocurrency services</h2>
                <p>End-to-end development, engineered for security, scale, and compliance — from a single token to a full trading platform.</p>
            </div>
            <div class="cx-grid-3">
                <div class="cx-card cx-svc"><div class="cx-thumb"><span class="cx-num">01</span><span class="cx-arrow">↗</span><img src="https://picsum.photos/seed/vetora-coin/600/380" alt="Coin & Token Development"></div><div class="cx-body"><h3>Coin &amp; Token Development</h3><p>Custom coins and tokens built to your tokenomics — from utility tokens to standalone blockchains.</p><div class="cx-tags"><span><b>✳</b> ERC-20</span><span><b>✳</b> BEP-20</span><span><b>✳</b> SPL</span></div></div></div>
                <div class="cx-card cx-svc"><div class="cx-thumb"><span class="cx-num">02</span><span class="cx-arrow">↗</span><img src="https://picsum.photos/seed/vetora-wallet/600/380" alt="Crypto Wallet Development"></div><div class="cx-body"><h3>Crypto Wallet Development</h3><p>Custodial and non-custodial wallets with multi-sig security, biometrics, and multi-chain support.</p><div class="cx-tags"><span><b>✳</b> Multi-sig</span><span><b>✳</b> Mobile &amp; web</span></div></div></div>
                <div class="cx-card cx-svc"><div class="cx-thumb"><span class="cx-num">03</span><span class="cx-arrow">↗</span><img src="https://picsum.photos/seed/vetora-exchange/600/380" alt="Crypto Exchange Development"></div><div class="cx-body"><h3>Crypto Exchange Development</h3><p>Spot and P2P trading platforms with real-time order matching and enterprise-grade security.</p><div class="cx-tags"><span><b>✳</b> Spot</span><span><b>✳</b> P2P</span><span><b>✳</b> Matching</span></div></div></div>
                <div class="cx-card cx-svc"><div class="cx-thumb"><span class="cx-num">04</span><span class="cx-arrow">↗</span><img src="https://picsum.photos/seed/vetora-audit/600/380" alt="Smart Contract Development & Auditing"></div><div class="cx-body"><h3>Smart Contracts &amp; Auditing</h3><p>Gas-optimised, independently audited contracts for token logic, staking, vesting, and DeFi.</p><div class="cx-tags"><span><b>✳</b> Solidity</span><span><b>✳</b> Rust</span><span><b>✳</b> Audits</span></div></div></div>
                <div class="cx-card cx-svc"><div class="cx-thumb"><span class="cx-num">05</span><span class="cx-arrow">↗</span><img src="https://picsum.photos/seed/vetora-gateway/600/380" alt="Crypto Payment Gateway"></div><div class="cx-body"><h3>Payment Gateway Integration</h3><p>Accept crypto payments with real-time conversion, settlement, and fraud monitoring built in.</p><div class="cx-tags"><span><b>✳</b> Checkout SDK</span><span><b>✳</b> Auto-settle</span></div></div></div>
                <div class="cx-card cx-svc"><div class="cx-thumb"><span class="cx-num">06</span><span class="cx-arrow">↗</span><img src="https://picsum.photos/seed/vetora-defi/600/380" alt="DeFi & Staking Platforms"></div><div class="cx-body"><h3>DeFi &amp; Staking Platforms</h3><p>Yield farming, staking pools, and lending protocols with transparent, auditable contract logic.</p><div class="cx-tags"><span><b>✳</b> Staking</span><span><b>✳</b> Lending</span></div></div></div>
            </div>
        </div>
    </section>


    {{-- WORD BAND --}}
    <div class="cx-wordband"><div class="cx-wordband-track" id="cx-wordband"><span>Coins <b>✦</b> Tokens <b>✦</b> Wallets <b>✦</b> Exchanges <b>✦</b> DeFi <b>✦</b> Audits <b>✦</b> </span></div></div>


    {{-- ============================================================
         6. OUR PROCESS
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep" id="cx-process">
        <div class="cx-wrap">
            <div class="cx-sec-head">
                <span class="cx-eyebrow">How we work</span>
                <h2>From tokenomics to mainnet</h2>
                <p>A proven, security-first process that takes your product from concept to launch with full transparency.</p>
            </div>
            <div class="cx-steps">
                <div class="cx-card cx-step"><div class="cx-n">1</div><h3>Discovery &amp; Tokenomics</h3><p>We define your token model, supply mechanics, use case, and target chain around your business goals.</p></div>
                <div class="cx-card cx-step"><div class="cx-n">2</div><h3>Architecture &amp; Build</h3><p>Contract architecture, wallet flows, and gas-optimised code written to secure coding standards.</p></div>
                <div class="cx-card cx-step"><div class="cx-n">3</div><h3>Audit &amp; Testnet</h3><p>Independent audits, penetration testing, and full testnet deployment before any real funds move.</p></div>
                <div class="cx-card cx-step"><div class="cx-n">4</div><h3>Launch &amp; Support</h3><p>Coordinated mainnet launch with 24/7 monitoring, incident response, and ongoing development.</p></div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         7. SECURITY
         ============================================================ --}}
    <section class="cx-sec" id="cx-security">
        <div class="cx-wrap cx-split">
            <div class="cx-sec-img">
                <img src="https://picsum.photos/seed/vetora-security/560/700" alt="Blockchain security engineering">
                <div class="cx-badge"><div class="cx-ic">🛡️</div><div><b>Bank-grade protection</b><span>Independently audited &amp; monitored</span></div></div>
            </div>
            <div>
                <span class="cx-eyebrow">Security &amp; trust</span>
                <h2 style="font-size:36px;margin:14px 0 16px">Security built in from line one</h2>
                <p style="color:var(--cx-txt-dim);margin-bottom:26px">We treat security as the product. Every contract and wallet is safeguarded by the standards trusted by institutions — not bolted on afterwards.</p>
                <div class="cx-avstack">
                    <div class="cx-imgs"><img src="https://i.pravatar.cc/84?img=13" alt=""><img src="https://i.pravatar.cc/84?img=5" alt=""><img src="https://i.pravatar.cc/84?img=32" alt=""><span class="cx-more">+50</span></div>
                    <div class="cx-txt"><b>Trusted by 50+ businesses</b><span>Securing millions in on-chain value</span></div>
                </div>
                <div class="cx-sec-list">
                    <div class="cx-card cx-sec-item"><div class="cx-ck">✓</div><div><b>Independent Contract Audits</b><p>Internal review plus third-party auditing before every mainnet deployment.</p></div></div>
                    <div class="cx-card cx-sec-item"><div class="cx-ck">✓</div><div><b>Multi-Sig &amp; Cold Custody</b><p>Multi-signature controls and cold-storage-ready architecture for key management.</p></div></div>
                    <div class="cx-card cx-sec-item"><div class="cx-ck">✓</div><div><b>End-to-End Encryption</b><p>All data encrypted in transit and at rest with AES-256 across every service.</p></div></div>
                    <div class="cx-card cx-sec-item"><div class="cx-ck">✓</div><div><b>Regulatory-Aware Design</b><p>Token models and platforms structured with compliance in mind from day one.</p></div></div>
                    <div class="cx-card cx-sec-item"><div class="cx-ck">✓</div><div><b>24/7 Monitoring</b><p>Round-the-clock monitoring and rapid incident response after launch.</p></div></div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         8. DASHBOARD PREVIEW
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep">
        <div class="cx-wrap">
            <div class="cx-sec-head">
                <span class="cx-eyebrow">Built to institutional standards</span>
                <h2>Trading desks we build for clients</h2>
                <p>Live charts, portfolio, and one-click order entry — an example of the exchange dashboards we deliver.</p>
            </div>
            <div class="cx-dash">
                <div class="cx-dash-top">
                    <div class="cx-dash-pair"><div class="cx-chip cx-btc" style="width:28px;height:28px;font-size:11px">₿</div>BTC / USDT <span class="cx-pr">$67,412.20</span> <span class="cx-up cx-mono" style="font-size:13px">+2.41%</span></div>
                    <div class="cx-dash-tabs"><span>1H</span><span class="cx-on">4H</span><span>1D</span><span>1W</span></div>
                </div>
                <div class="cx-dash-body">
                    <div class="cx-dash-chart">
                        <div class="cx-chart-meta"><div><div style="font-size:12px;color:var(--cx-txt-mute)">Last price</div><div class="cx-big">$67,412.20</div></div><div style="text-align:right"><div style="font-size:12px;color:var(--cx-txt-mute)">24h high</div><div class="cx-mono" style="font-weight:700">$68,140</div></div></div>
                        <svg width="100%" height="200" viewBox="0 0 620 200" preserveAspectRatio="none">
                            <defs><linearGradient id="cxg" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#00c2a8" stop-opacity=".35"/><stop offset="1" stop-color="#00c2a8" stop-opacity="0"/></linearGradient></defs>
                            <polygon fill="url(#cxg)" points="0,150 40,140 80,155 120,120 160,130 200,95 240,110 280,80 320,90 360,60 400,72 440,45 480,58 520,38 560,50 600,25 620,30 620,200 0,200"/>
                            <polyline fill="none" stroke="#3dd9c2" stroke-width="2.5" points="0,150 40,140 80,155 120,120 160,130 200,95 240,110 280,80 320,90 360,60 400,72 440,45 480,58 520,38 560,50 600,25 620,30"/>
                        </svg>
                    </div>
                    <div class="cx-dash-side">
                        <div class="cx-balance"><div class="cx-k">Wallet balance</div><div class="cx-v">$128,940.55</div><div class="cx-sub">▲ $3,204 (2.55%) today</div></div>
                        <div class="cx-bs-toggle"><button class="cx-buy cx-on">Buy</button><button class="cx-sell">Sell</button></div>
                        <div class="cx-bs-field"><span>Amount (BTC)</span><b>0.7500</b></div>
                        <div class="cx-bs-field"><span>Total (USDT)</span><b>50,559.15</b></div>
                        <button class="cx-btn cx-btn-primary" style="width:100%;justify-content:center">Place Order</button>
                        <div>
                            <div style="font-size:12px;color:var(--cx-txt-mute);margin-bottom:10px">Portfolio</div>
                            <div class="cx-portfolio-row" style="margin-bottom:8px"><span class="cx-chip cx-btc" style="width:22px;height:22px;font-size:9px">₿</span><div class="cx-bar"><i style="width:52%"></i></div><span class="cx-pct">52%</span></div>
                            <div class="cx-portfolio-row" style="margin-bottom:8px"><span class="cx-chip cx-eth" style="width:22px;height:22px;font-size:9px">Ξ</span><div class="cx-bar"><i style="width:28%"></i></div><span class="cx-pct">28%</span></div>
                            <div class="cx-portfolio-row"><span class="cx-chip cx-sol" style="width:22px;height:22px;font-size:9px">◎</span><div class="cx-bar"><i style="width:20%"></i></div><span class="cx-pct">20%</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         9. WALLET APPS
         ============================================================ --}}
    <section class="cx-sec">
        <div class="cx-wrap cx-split">
            <div class="cx-phone">
                <div class="cx-notch"></div>
                <div class="cx-p-bal"><div class="cx-k">Total balance</div><div class="cx-v">$128,940.55</div></div>
                <div style="margin-top:10px">
                    <div class="cx-p-row"><span class="cx-chip cx-btc">₿</span><b>Bitcoin</b><span class="cx-pr cx-up">+2.4%</span></div>
                    <div class="cx-p-row"><span class="cx-chip cx-eth">Ξ</span><b>Ethereum</b><span class="cx-pr cx-up">+1.8%</span></div>
                    <div class="cx-p-row"><span class="cx-chip cx-sol">◎</span><b>Solana</b><span class="cx-pr cx-up">+5.1%</span></div>
                    <div class="cx-p-row"><span class="cx-chip cx-doge">Ð</span><b>Dogecoin</b><span class="cx-pr cx-up">+4.6%</span></div>
                </div>
            </div>
            <div>
                <span class="cx-eyebrow">Wallet apps we build</span>
                <h2 style="font-size:36px;margin:14px 0 16px">Put a secure wallet in every pocket</h2>
                <p style="color:var(--cx-txt-dim)">We build full-featured iOS and Android crypto wallets for your users — track, transfer, and stay alerted anywhere, with security at the core.</p>
                <ul class="cx-app-feats">
                    <li><span class="cx-tick">✓</span>iOS &amp; Android, built natively</li>
                    <li><span class="cx-tick">✓</span>Real-time price &amp; transaction alerts</li>
                    <li><span class="cx-tick">✓</span>Multi-chain portfolio tracking</li>
                    <li><span class="cx-tick">✓</span>Biometric &amp; hardware-key login</li>
                </ul>
                <div class="cx-store-row">
                    <div class="cx-store-btn"><span style="font-size:22px"></span><div><small>Built for the</small><span class="cx-big">App Store</span></div></div>
                    <div class="cx-store-btn"><span style="font-size:22px">▶</span><div><small>Built for</small><span class="cx-big">Google Play</span></div></div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         10. STATS
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep">
        <div class="cx-wrap">
            <div class="cx-sec-head cx-center"><span class="cx-eyebrow">By the numbers</span><h2>A track record you can trust</h2></div>
            <div class="cx-stats">
                <div class="cx-card cx-stat"><div class="cx-num"><span class="cx-count" data-target="50">0</span>+</div><div class="cx-lbl">Products shipped</div></div>
                <div class="cx-card cx-stat"><div class="cx-num"><span class="cx-count" data-target="8">0</span>+</div><div class="cx-lbl">Chains supported</div></div>
                <div class="cx-card cx-stat"><div class="cx-num"><span class="cx-count" data-target="100">0</span>%</div><div class="cx-lbl">Contracts audited</div></div>
                <div class="cx-card cx-stat"><div class="cx-num"><span class="cx-count" data-target="24">0</span>/7</div><div class="cx-lbl">Monitoring &amp; support</div></div>
                <div class="cx-card cx-stat"><div class="cx-num"><span class="cx-count" data-target="10">0</span>+</div><div class="cx-lbl">Years in software</div></div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         11. ENGAGEMENT TIMELINE
         ============================================================ --}}
    <section class="cx-sec">
        <div class="cx-wrap">
            <div class="cx-sec-head cx-center"><span class="cx-eyebrow">How an engagement unfolds</span><h2>A typical project timeline</h2></div>
            <div class="cx-road">
                <div class="cx-mile">
                    <div class="cx-dot">01</div>
                    <div class="cx-mile-card">
                        <div class="cx-q">Week 1</div>
                        <h4>Discovery</h4>
                        <p>Goals, token model, and chain selection.</p>
                    </div>
                </div>
                <div class="cx-mile">
                    <div class="cx-dot">02</div>
                    <div class="cx-mile-card">
                        <div class="cx-q">Week 2</div>
                        <h4>Architecture</h4>
                        <p>Technical blueprint &amp; UX mapped out.</p>
                    </div>
                </div>
                <div class="cx-mile">
                    <div class="cx-dot">03</div>
                    <div class="cx-mile-card">
                        <div class="cx-q">Week 3–6</div>
                        <h4>Development</h4>
                        <p>Contracts, wallets, and integrations built.</p>
                    </div>
                </div>
                <div class="cx-mile">
                    <div class="cx-dot">04</div>
                    <div class="cx-mile-card">
                        <div class="cx-q">Week 7</div>
                        <h4>Audit &amp; Testnet</h4>
                        <p>Independent audit and full simulation.</p>
                    </div>
                </div>
                <div class="cx-mile">
                    <div class="cx-dot">05</div>
                    <div class="cx-mile-card">
                        <div class="cx-q">Week 8+</div>
                        <h4>Launch</h4>
                        <p>Mainnet launch &amp; ongoing support.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         12. TESTIMONIALS
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep">
        <div class="cx-wrap">
            <div class="cx-sec-head cx-center"><span class="cx-eyebrow">Loved by clients</span><h2>What our clients say</h2></div>
            <div class="owl-carousel owl-theme cx-tst-carousel">
                <div class="cx-card cx-tst"><div class="cx-stars">★★★★★</div><p>"Vetora shipped our token and staking platform on time and passed audit first try. Security was clearly baked in from the start."</p><div class="cx-who"><div class="cx-av"><img src="https://i.pravatar.cc/96?img=12" alt=""></div><div><b>Marcus Lee</b><span>Founder, DeFi startup</span></div></div></div>
                <div class="cx-card cx-tst"><div class="cx-stars">★★★★★</div><p>"They handled everything — tokenomics, contracts, wallet, and mainnet launch. The multi-chain expertise saved us months of work."</p><div class="cx-who"><div class="cx-av"><img src="https://i.pravatar.cc/96?img=45" alt=""></div><div><b>Priya Sharma</b><span>CTO, Fintech</span></div></div></div>
                <div class="cx-card cx-tst"><div class="cx-stars">★★★★★</div><p>"The exchange they built for us handles real volume without breaking a sweat. Post-launch support has been genuinely 24/7."</p><div class="cx-who"><div class="cx-av"><img src="https://i.pravatar.cc/96?img=33" alt=""></div><div><b>Diego Torres</b><span>CEO, Exchange</span></div></div></div>
            </div>
        </div>
    </section>


    {{-- ============================================================
         13. INSIGHTS
         ============================================================ --}}
    <section class="cx-sec">
        <div class="cx-wrap">
            <div class="cx-sec-head"><span class="cx-eyebrow">Insights</span><h2>Crypto development, explained</h2><p>Guides and engineering thinking to help you launch smarter.</p></div>
            <div class="cx-grid-3">
                <a class="cx-card cx-insight"><div class="cx-thumb"><span class="cx-cat">Tokenomics</span><img src="https://picsum.photos/seed/vetora-ins1/600/380" alt=""></div><div class="cx-body"><span class="cx-date">Feb 24, 2026 · 6 min read</span><h3>Designing token supply mechanics that actually hold up</h3></div></a>
                <a class="cx-card cx-insight"><div class="cx-thumb"><span class="cx-cat">Security</span><img src="https://picsum.photos/seed/vetora-ins2/600/380" alt=""></div><div class="cx-body"><span class="cx-date">Mar 03, 2026 · 4 min read</span><h3>What a smart contract audit really checks for</h3></div></a>
                <a class="cx-card cx-insight"><div class="cx-thumb"><span class="cx-cat">Chains</span><img src="https://picsum.photos/seed/vetora-ins3/600/380" alt=""></div><div class="cx-body"><span class="cx-date">Mar 11, 2026 · 7 min read</span><h3>Choosing the right blockchain for your product</h3></div></a>
            </div>
        </div>
    </section>


    {{-- ============================================================
         14. FAQ
         ============================================================ --}}
    <section class="cx-sec cx-sec-deep" id="cx-faq">
        <div class="cx-wrap">
            <div class="cx-sec-head cx-center"><span class="cx-eyebrow">Questions</span><h2>Frequently asked questions</h2></div>
            <div class="cx-faq-wrap">
                <details class="cx-faq" open><summary>How long does it take to launch a cryptocurrency?<span class="cx-plus">+</span></summary><div class="cx-ans">A standard token on an existing chain typically takes 3–6 weeks, while a full exchange or custom blockchain can take 3–6 months. We provide a detailed timeline after our discovery call.</div></details>
                <details class="cx-faq"><summary>How much does cryptocurrency development cost?<span class="cx-plus">+</span></summary><div class="cx-ans">Cost depends on scope — a token launch, a wallet, and a full exchange all differ significantly. We provide a transparent, itemised proposal once we understand your requirements, with no hidden costs.</div></details>
                <details class="cx-faq"><summary>Which blockchains do you build on?<span class="cx-plus">+</span></summary><div class="cx-ans">Ethereum, BNB Chain, Polygon, and Solana, plus custom Layer 1 or Layer 2 chains if your product needs it. We recommend the chain that best fits your use case and budget.</div></details>
                <details class="cx-faq"><summary>Are your smart contracts audited?<span class="cx-plus">+</span></summary><div class="cx-ans">Yes. Every contract goes through internal review and independent third-party auditing before mainnet deployment — security is never optional when real funds are involved.</div></details>
                <details class="cx-faq"><summary>Do you build wallets and exchanges too?<span class="cx-plus">+</span></summary><div class="cx-ans">Yes. We build custodial and non-custodial wallets with multi-sig security, plus spot and P2P exchange platforms with real-time order matching and enterprise-grade controls.</div></details>
                <details class="cx-faq"><summary>Do you offer ongoing support after launch?<span class="cx-plus">+</span></summary><div class="cx-ans">Yes. We offer flexible packages covering monitoring, incident response, security updates, and ongoing feature development after mainnet launch.</div></details>
            </div>
        </div>
    </section>


    {{-- ============================================================
         15. CTA
         ============================================================ --}}
    <section class="cx-cta">
        <div class="cx-wrap">
            <div class="cx-cta-inner">
                <h2>Let's build your cryptocurrency product</h2>
                <p>Turn your token idea into a secure, audited product ready for real users and real volume. Get in touch today for a free consultation.</p>
                <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap">
                    <a href="#" class="cx-btn cx-btn-white" data-bs-toggle="modal" data-bs-target="#quoteModal">Get a Free Quote</a>
                    <a href="{{ url('/contact-us') }}" class="cx-btn cx-btn-clear">Let's Talk</a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection


{{-- ================================================================
     OWN DARK FOOTER — replaces the site's default footer here.
     ================================================================ --}}
@section('page-footer')
    <footer class="cx-footer">
        <div class="cx-wrap">
            <div class="cx-foot-top">
                <div class="cx-foot-brand">
                    <a href="{{ url('/') }}" class="cx-brand">
                        <img src="{{ asset('Assets/Images/logo-main.png') }}" alt="Vetora Logo">
                    </a>
                    <p>Secure, audited cryptocurrency development — coins, tokens, wallets, exchanges, and DeFi, built for businesses across Melbourne and beyond.</p>
                    <div class="cx-news"><input placeholder="Your email"><button>Subscribe</button></div>
                </div>
                <div class="cx-foot-col"><h4>Services</h4><a href="#cx-services">Coins &amp; Tokens</a><a href="#cx-services">Wallets</a><a href="#cx-services">Exchanges</a><a href="#cx-services">Smart Contracts</a><a href="#cx-services">DeFi</a></div>
                <div class="cx-foot-col"><h4>Company</h4><a href="{{ url('/') }}">Home</a><a href="{{ url('/contact-us') }}">Contact</a><a href="#cx-process">Process</a><a href="#cx-security">Security</a></div>
                <div class="cx-foot-col"><h4>Resources</h4><a href="#cx-faq">FAQ</a><a href="#cx-why">Why Vetora</a><a href="#">Insights</a></div>
                <div class="cx-foot-col"><h4>Get started</h4><a href="#" data-bs-toggle="modal" data-bs-target="#quoteModal">Get a Quote</a><a href="{{ url('/contact-us') }}">Talk to us</a></div>
            </div>
            <div class="cx-foot-bar">
                <span>© {{ date('Y') }} Vetora Solutions. All rights reserved.</span>
                <div class="cx-socials"><a class="cx-soc" href="#">X</a><a class="cx-soc" href="#">in</a><a class="cx-soc" href="#">TG</a><a class="cx-soc" href="#">DS</a><a class="cx-soc" href="#">YT</a></div>
            </div>
        </div>
    </footer>
@endsection


@section('scripts')
    {{-- jQuery kept for the layout's global dropdown script that runs after this. --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        // Testimonials carousel. autoplay is disabled when the visitor prefers reduced motion.
        $(function () {
            var calm = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            $('.cx-tst-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                dots: true,
                autoplay: !calm,
                autoplayTimeout: 4500,
                autoplayHoverPause: true,
                smartSpeed: 900,
                responsive: {
                    0:    { items: 1 },
                    768:  { items: 2 },
                    1200: { items: 3 }
                }
            });
        });
    </script>

    <script>
        (function () {
            // duplicate ticker + word-band for a seamless marquee
            var t = document.getElementById('cx-ticker'); if (t) t.innerHTML += t.innerHTML;
            var w = document.getElementById('cx-wordband'); if (w) w.innerHTML += w.innerHTML;

            // real coin logos inside chips (progressive enhancement, falls back to glyphs)
            var coins = ['btc', 'eth', 'sol', 'bnb', 'xrp', 'ada', 'matic', 'doge'];
            document.querySelectorAll('.cx-chip').forEach(function (ch) {
                var sym = null;
                coins.forEach(function (c) { if (ch.classList.contains('cx-' + c)) sym = c; });
                if (!sym) return;
                var img = new Image(); img.alt = sym.toUpperCase();
                img.onload = function () { ch.classList.add('cx-has-logo'); ch.appendChild(img); };
                img.src = 'https://assets.coincap.io/assets/icons/' + sym + '@2x.png';
            });

            // buy/sell toggle
            document.querySelectorAll('.cx-bs-toggle button').forEach(function (b) {
                b.addEventListener('click', function () {
                    document.querySelectorAll('.cx-bs-toggle button').forEach(function (x) { x.classList.remove('cx-on'); });
                    b.classList.add('cx-on');
                });
            });

            // dashboard timeframe tabs
            document.querySelectorAll('.cx-dash-tabs span').forEach(function (s) {
                s.addEventListener('click', function () {
                    document.querySelectorAll('.cx-dash-tabs span').forEach(function (x) { x.classList.remove('cx-on'); });
                    s.classList.add('cx-on');
                });
            });

            // mobile nav toggle
            var navToggle = document.getElementById('cxNavToggle');
            var navCollapse = document.getElementById('cxNavCollapse');
            if (navToggle && navCollapse) {
                navToggle.addEventListener('click', function () {
                    var open = navCollapse.classList.toggle('cx-show');
                    navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                });
                navCollapse.querySelectorAll('a').forEach(function (a) {
                    a.addEventListener('click', function () { navCollapse.classList.remove('cx-show'); });
                });
            }

            var rm = window.matchMedia('(prefers-reduced-motion:reduce)').matches;

            // animated stat counters
            function animate(el) {
                var target = parseFloat(el.dataset.target), dec = (target % 1 !== 0) ? 1 : 0, dur = 1400, t0 = null;
                function step(ts) {
                    if (!t0) t0 = ts;
                    var p = Math.min((ts - t0) / dur, 1);
                    el.textContent = (target * (0.5 - Math.cos(Math.PI * p) / 2)).toFixed(dec);
                    if (p < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            }
            var countEls = document.querySelectorAll('.cx-count');
            if (rm) {
                countEls.forEach(function (el) { el.textContent = el.dataset.target; });
            } else {
                var co = new IntersectionObserver(function (entries) {
                    entries.forEach(function (e) { if (e.isIntersecting) { animate(e.target); co.unobserve(e.target); } });
                }, { threshold: 0, rootMargin: '0px 0px -30% 0px' });
                countEls.forEach(function (el) { co.observe(el); });
            }

            // sticky header elevate
            var header = document.getElementById('cxHeader');
            function onScroll() {
                var h = document.documentElement, st = h.scrollTop || document.body.scrollTop;
                if (header) header.classList.toggle('cx-scrolled', st > 20);
            }
            window.addEventListener('scroll', onScroll, { passive: true }); onScroll();

            if (rm) return;

            // staggered entrance delays within grids
            ['.cx-grid-3 > .cx-card', '.cx-grid-4 > .cx-card', '.cx-steps > .cx-card', '.cx-stats > .cx-card', '.cx-mile', '.cx-split > *'].forEach(function (sel) {
                document.querySelectorAll(sel).forEach(function (el) {
                    var p = el.parentNode, i = Array.prototype.indexOf.call(p.children, el);
                    el.style.transitionDelay = ((i % 4) * 0.09) + 's';
                });
            });

            // scroll reveal
            // .cx-road has no reveal styles of its own — it only needs .cx-in to draw the timeline rail
            var sel = '.cx-sec-head,.cx-hero h1,.cx-hero .cx-lead,.cx-hero-cta,.cx-trust-row,.cx-orb-stage,.cx-ticker,.cx-market,.cx-grid-3 > .cx-card,.cx-grid-4 > .cx-card,.cx-steps > .cx-card,.cx-split > *,.cx-dash,.cx-stats > .cx-card,.cx-road,.cx-mile,.cx-faq,.cx-cta-inner,.cx-foot-top,.cx-foot-bar';
            // -30% bottom margin pulls the trigger line up to 70% of the viewport height, so an
            // element reveals as soon as its top edge crosses that line.
            var io = new IntersectionObserver(function (en) {
                en.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('cx-in'); io.unobserve(e.target); } });
            }, { threshold: 0, rootMargin: '0px 0px -30% 0px' });
            document.querySelectorAll(sel).forEach(function (el) { io.observe(el); });

            // magnetic primary buttons
            document.querySelectorAll('.cx-btn-primary,.cx-btn-white').forEach(function (b) {
                b.addEventListener('mousemove', function (e) {
                    var r = b.getBoundingClientRect();
                    b.style.transform = 'translate(' + ((e.clientX - r.left - r.width / 2) * 0.2) + 'px,' + ((e.clientY - r.top - r.height / 2) * 0.3 - 2) + 'px)';
                });
                b.addEventListener('mouseleave', function () { b.style.transform = ''; });
            });
        })();
    </script>
@endsection
