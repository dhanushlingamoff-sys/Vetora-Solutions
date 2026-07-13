@extends('layouts.app')

@section('meta')
    <title>Vetora Vault — NFT Marketplace Development by Vetora Solutions</title>
    <meta name="description" content="Vetora Vault is a live example of the NFT marketplaces we build — minting, auctions, bidding, wallet connection, and creator tools, all running as an interactive demo.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/css/nft-marketplace.css') }}?v=1.2.0">
    {{-- Heavier, more "premium" smooth-scroll feel for this page only — read
         by scroll-fx.js's Lenis init, which runs later in <body>. Every
         other page is unaffected (window.__lenisOverrides stays undefined). --}}
    <script>window.__lenisOverrides = { lerp: 0.07 };</script>
@endsection

{{-- Own themed nav — replaces the site's default header for this page only --}}
@section('page-header')
    <header class="nftm-header nftm-page">
        <div class="nftm-wrap nftm-nav">
            <a href="{{ url('/') }}" class="nftm-brand">
                <img src="{{ asset('Assets/Images/logo-main.png') }}" alt="Vetora Logo">
            </a>

            <button type="button" class="nftm-nav-toggle" id="nftmNavToggle" aria-label="Toggle menu" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>

            {{-- display:contents on desktop so this wrapper doesn't affect the
                 flex layout; on mobile it becomes the collapsible dropdown
                 panel toggled by .nftm-nav-toggle (see nft-marketplace.js). --}}
            <div class="nftm-nav-collapse" id="nftmNavCollapse">
                <nav class="nftm-nav-links">
                    <a href="#featured">Explore</a>
                    <a href="#drops">Drops</a>
                    <a href="#creators">Creators</a>
                    <a href="#activity">Activity</a>
                </nav>

                <div class="nftm-nav-search nftm-search-wrap">
                    <i class="bi bi-search"></i>
                    <input type="text" id="nftmSearchInput" placeholder="Search items, collections, creators" autocomplete="off">
                </div>

                <div class="nftm-nav-actions">
                    <button type="button" class="nftm-btn nftm-btn-ghost" data-nftm-wallet-btn>Connect wallet</button>
                    <button type="button" class="nftm-btn nftm-btn-primary" data-nftm-create-btn>Create</button>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
{{-- data-reveal-group opts this page out of scroll-fx.js's generic whole-section
     reveal pass (see its "stand down" check) — this page drives its own
     granular, per-card GSAP scroll animations instead. --}}
<div class="nftm-page" data-reveal-group>

    {{-- Scroll-progress bar — a thin gradient line at the very top that fills
         as the page scrolls. Width driven by nft-marketplace.js. --}}

    {{-- Ambient animated backdrop — drifting aurora orbs + a faint moving grid,
         fixed behind all content. Pure decoration; disabled under
         prefers-reduced-motion via CSS. --}}
    <div class="nftm-ambient" aria-hidden="true">
        <span class="nftm-orb nftm-orb-1"></span>
        <span class="nftm-orb nftm-orb-2"></span>
        <span class="nftm-orb nftm-orb-3"></span>
        <span class="nftm-grid"></span>
    </div>

    {{-- Search results dropdown — deliberately NOT nested inside .nftm-header,
         which has its own z-index:1050 that would cap this element's z-index
         (100011) down to 1050 from outside the header's subtree, the same
         stacking-context trap the video modal hit earlier on the AI page.
         position:fixed + coordinates set via JS (nft-marketplace.js) against
         the search input's own screen position, so it still renders directly
         under the search box regardless of where it lives in the DOM. --}}
    <div class="nftm-search-results" id="nftmSearchResults"></div>

    {{-- ============ HERO ============ --}}
    <section class="nftm-hero">
        <div class="nftm-wrap">
            <div>
                <span class="nftm-eyebrow">Web3 marketplace · built on Vetora</span>
                <h1>Own the art that <span class="nftm-grad-text">owns the moment.</span></h1>
                <p class="nftm-lead">Discover, collect, and trade the rarest digital art and collectibles from creators shaping the on-chain world.</p>
                <div class="nftm-hero-cta">
                    <a href="#featured" class="nftm-btn nftm-btn-primary" id="nftmExploreBtn">Explore the vault <i class="bi bi-arrow-right"></i></a>
                    <button type="button" class="nftm-btn nftm-btn-ghost" data-nftm-create-btn>Start creating</button>
                </div>
            </div>

            <div class="nftm-showcase">
                <div class="nftm-float-tag"><span class="nftm-dot"></span>Live · 214 bidding now</div>
                <div class="nftm-show-card">
                    <div class="nftm-art"><img src="https://picsum.photos/seed/nftm-hero/700/525" alt="Aurora Drift #041"></div>
                    <div class="nftm-show-meta">
                        <div class="nftm-who">
                            <img class="nftm-avatar" src="https://i.pravatar.cc/76?img=12" alt="">
                            <div><b>Aurora Drift #041</b><span>by @lumenworks</span></div>
                        </div>
                        <div class="nftm-bid-box">
                            <div class="nftm-k">Current bid</div>
                            <div class="nftm-v">4.82 Ξ</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nftm-stats">
                <div class="nftm-stat"><div class="nftm-num"><span class="nftm-count" data-target="128" data-suffix="K">0</span></div><div class="nftm-lbl">Artworks minted</div></div>
                <div class="nftm-stat"><div class="nftm-num"><span class="nftm-count" data-target="42.6" data-decimals="1" data-suffix="K">0</span></div><div class="nftm-lbl">Active creators</div></div>
                <div class="nftm-stat"><div class="nftm-num"><span class="nftm-count" data-target="9410" data-sep="1">0</span></div><div class="nftm-lbl">Collections</div></div>
                <div class="nftm-stat"><div class="nftm-num"><span class="nftm-count" data-target="31.2" data-decimals="1" data-suffix="K Ξ">0</span></div><div class="nftm-lbl">Volume traded</div></div>
            </div>
        </div>
    </section>

    {{-- ============ CREATOR MARQUEE ============ --}}
    {{-- Seamless infinite ticker of creator handles — the track is duplicated
         so the -50% translate loops without a visible seam. Paused under
         prefers-reduced-motion. --}}
    <div class="nftm-marquee" aria-hidden="true">
        <div class="nftm-marquee-track">
            @php
                $tickers = ['@lumenworks','@ivorygrid','@marrow','@sol.axis','@nullspace','@quorra','@deepcache','@zephyr.eth'];
            @endphp
            @foreach(array_merge($tickers, $tickers) as $handle)
                <span class="nftm-tick">{{ $handle }}</span>
                <span class="nftm-tick-dot">✦</span>
            @endforeach
        </div>
    </div>

    {{-- ============ FEATURED ============ --}}
    <section class="nftm-block" id="featured">
        <div class="nftm-wrap">
            <div class="nftm-sec-head">
                <div>
                    <span class="nftm-eyebrow">Featured drops</span>
                    <h2>Curated by the vault</h2>
                    <p>Hand-picked pieces from the creators our community is watching this week.</p>
                </div>
                <a class="nftm-see-all" href="#drops">View all <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="nftm-card-grid" id="nftmFeaturedGrid">
                @php
                    $featured = [
                        ['seed'=>'nftm-f1','name'=>'Neon Requiem','creator'=>'@ivorygrid','price'=>'2.14','likes'=>328],
                        ['seed'=>'nftm-f2','name'=>'Deep Field 07','creator'=>'@sol.axis','price'=>'1.90','likes'=>512],
                        ['seed'=>'nftm-f3','name'=>'Prism Bloom','creator'=>'@marrow','price'=>'3.05','likes'=>241],
                        ['seed'=>'nftm-f4','name'=>'Cold Static','creator'=>'@nullspace','price'=>'0.88','likes'=>176],
                        ['seed'=>'nftm-f5','name'=>'Vapor Índex','creator'=>'@quorra','price'=>'1.42','likes'=>264],
                    ];
                @endphp
                @foreach($featured as $item)
                <div class="nftm-nft-card">
                    <div class="nftm-art"><img src="https://picsum.photos/seed/{{ $item['seed'] }}/500/500" alt="{{ $item['name'] }}"></div>
                    <h3>{{ $item['name'] }}</h3>
                    <div class="nftm-creator">{{ $item['creator'] }}</div>
                    <div class="nftm-card-foot">
                        <div class="nftm-price"><span class="nftm-k">Price</span><span class="nftm-v">{{ $item['price'] }} Ξ</span></div>
                        <button type="button" class="nftm-likes" data-count="{{ $item['likes'] }}">
                            <span class="nftm-heart">♡</span> <span class="nftm-like-count">{{ $item['likes'] }}</span>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ LIVE AUCTIONS ============ --}}
    <section class="nftm-block nftm-block-alt" id="activity">
        <div class="nftm-wrap">
            <div class="nftm-sec-head">
                <div>
                    <span class="nftm-eyebrow">Ending soon</span>
                    <h2>Live auctions</h2>
                    <p>Bids close as the clock runs out. Connect your wallet and place yours before the gavel drops.</p>
                </div>
                <a class="nftm-see-all" href="#drops">All auctions <i class="bi bi-arrow-right"></i></a>
            </div>

            <div class="nftm-auc-grid">
                @php
                    $auctions = [
                        ['seed'=>'nftm-a1','name'=>'Ember Vector','price'=>'5.40','remaining'=>8073],
                        ['seed'=>'nftm-a2','name'=>'Verdant Loop','price'=>'3.12','remaining'=>42429],
                        ['seed'=>'nftm-a3','name'=>'Sunset Fault','price'=>'7.66','remaining'=>3138],
                    ];
                @endphp
                @foreach($auctions as $item)
                <div class="nftm-auc-card">
                    <div class="nftm-art"><img src="https://picsum.photos/seed/{{ $item['seed'] }}/500/500" alt="{{ $item['name'] }}"></div>
                    <span class="nftm-timer" data-remaining="{{ $item['remaining'] }}"></span>
                    <h3>{{ $item['name'] }}</h3>
                    <div class="nftm-auc-foot">
                        <div class="nftm-price"><span class="nftm-k">Top bid</span><span class="nftm-v">{{ $item['price'] }} Ξ</span></div>
                        <button type="button" class="nftm-bid-btn">Place bid</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ TRENDING (tabs) ============ --}}
    <section class="nftm-block" id="drops">
        <div class="nftm-wrap">
            <div class="nftm-sec-head">
                <div><span class="nftm-eyebrow">Discover</span><h2>Trending now</h2></div>
            </div>

            <div class="nftm-tabs">
                <button type="button" class="nftm-tab nftm-on" data-cat="all">All</button>
                <button type="button" class="nftm-tab" data-cat="art">Art</button>
                <button type="button" class="nftm-tab" data-cat="photography">Photography</button>
                <button type="button" class="nftm-tab" data-cat="collectibles">Collectibles</button>
                <button type="button" class="nftm-tab" data-cat="music">Music</button>
                <button type="button" class="nftm-tab" data-cat="sports">Sports</button>
            </div>

            <div class="nftm-card-grid" id="nftmTrendingGrid">
                @php
                    $trending = [
                        ['seed'=>'nftm-t1','name'=>'Halcyon 12','creator'=>'@sol.axis','price'=>'0.42','likes'=>91,'cat'=>'art'],
                        ['seed'=>'nftm-t2','name'=>'Warm Circuit','creator'=>'@marrow','price'=>'1.10','likes'=>205,'cat'=>'collectibles'],
                        ['seed'=>'nftm-t3','name'=>'Lilac Drift','creator'=>'@lumenworks','price'=>'2.00','likes'=>388,'cat'=>'photography'],
                        ['seed'=>'nftm-t4','name'=>'Glacier Key','creator'=>'@nullspace','price'=>'0.75','likes'=>143,'cat'=>'music'],
                        ['seed'=>'nftm-t5','name'=>'Solar Fracture','creator'=>'@quorra','price'=>'1.65','likes'=>119,'cat'=>'sports'],
                    ];
                @endphp
                @foreach($trending as $item)
                <div class="nftm-nft-card" data-cat="{{ $item['cat'] }}">
                    <div class="nftm-art"><img src="https://picsum.photos/seed/{{ $item['seed'] }}/500/500" alt="{{ $item['name'] }}"></div>
                    <h3>{{ $item['name'] }}</h3>
                    <div class="nftm-creator">{{ $item['creator'] }}</div>
                    <div class="nftm-card-foot">
                        <div class="nftm-price"><span class="nftm-k">Floor</span><span class="nftm-v">{{ $item['price'] }} Ξ</span></div>
                        <button type="button" class="nftm-likes" data-count="{{ $item['likes'] }}">
                            <span class="nftm-heart">♡</span> <span class="nftm-like-count">{{ $item['likes'] }}</span>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ TOP SELLERS & BUYERS ============ --}}
    <section class="nftm-block nftm-block-alt">
        <div class="nftm-wrap">
            <div class="nftm-sec-head"><div><span class="nftm-eyebrow">Leaderboard · last 24h</span><h2>Top sellers & buyers</h2></div></div>

            <div class="nftm-rank-cols">
                <div class="nftm-rank-panel">
                    <div class="nftm-ph"><h3>Top sellers</h3></div>
                    @php
                        $sellers = [
                            ['img'=>21,'name'=>'@lumenworks','wallet'=>'0x4f…a91c','vol'=>'84.2'],
                            ['img'=>32,'name'=>'@ivorygrid','wallet'=>'0x18…7de2','vol'=>'61.7'],
                            ['img'=>45,'name'=>'@marrow','wallet'=>'0xa2…3f08','vol'=>'55.0'],
                            ['img'=>14,'name'=>'@sol.axis','wallet'=>'0x9c…22b4','vol'=>'48.3'],
                        ];
                    @endphp
                    @foreach($sellers as $i => $s)
                    <div class="nftm-rank-row">
                        <span class="nftm-no">{{ $i + 1 }}</span>
                        <img class="nftm-avatar" src="https://i.pravatar.cc/80?img={{ $s['img'] }}" alt="">
                        <div class="nftm-info"><b>{{ $s['name'] }}</b><span>{{ $s['wallet'] }}</span></div>
                        <span class="nftm-vol">{{ $s['vol'] }} Ξ</span>
                    </div>
                    @endforeach
                </div>

                <div class="nftm-rank-panel">
                    <div class="nftm-ph"><h3>Top buyers</h3></div>
                    @php
                        $buyers = [
                            ['img'=>52,'name'=>'@nullspace','wallet'=>'0x77…c410','vol'=>'92.6'],
                            ['img'=>36,'name'=>'@deepcache','wallet'=>'0x31…8ee1','vol'=>'70.4'],
                            ['img'=>28,'name'=>'@quorra','wallet'=>'0x5b…19af','vol'=>'63.9'],
                            ['img'=>19,'name'=>'@zephyr.eth','wallet'=>'0xe0…4c72','vol'=>'51.2'],
                        ];
                    @endphp
                    @foreach($buyers as $i => $b)
                    <div class="nftm-rank-row">
                        <span class="nftm-no">{{ $i + 1 }}</span>
                        <img class="nftm-avatar" src="https://i.pravatar.cc/80?img={{ $b['img'] }}" alt="">
                        <div class="nftm-info"><b>{{ $b['name'] }}</b><span>{{ $b['wallet'] }}</span></div>
                        <span class="nftm-vol">{{ $b['vol'] }} Ξ</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============ LATEST DROPS (pinned horizontal scroll) ============ --}}
    {{-- .nftm-hscroll is upgraded to a pinned, scroll-scrubbed sideways track
         on desktop by nft-marketplace.js (adds .nftm-pinned); without JS or
         on mobile it degrades to a normal swipeable overflow-scroll. --}}
    <section class="nftm-block" id="nftmDropsSection">
        <div class="nftm-wrap">
            <div class="nftm-sec-head"><div><span class="nftm-eyebrow">Fresh mints</span><h2>Just dropped</h2><p>Straight off the chain — scroll through the newest pieces minted this hour.</p></div></div>
        </div>
        <div class="nftm-hscroll" id="nftmDropsScroll">
            <div class="nftm-wrap nftm-hscroll-wrap">
                <div class="nftm-hscroll-track" id="nftmDropsTrack">
                    @php
                        $drops = [
                            ['seed'=>'nftm-d1','name'=>'Fold 002','creator'=>'2 min ago · @quorra','price'=>'0.30'],
                            ['seed'=>'nftm-d2','name'=>'Static Rose','creator'=>'14 min ago · @ivorygrid','price'=>'0.45'],
                            ['seed'=>'nftm-d3','name'=>'Ultra Bloom','creator'=>'31 min ago · @marrow','price'=>'0.60'],
                            ['seed'=>'nftm-d4','name'=>'Dune Signal','creator'=>'48 min ago · @deepcache','price'=>'0.25'],
                            ['seed'=>'nftm-d5','name'=>'Halo Rift','creator'=>'1 hr ago · @nullspace','price'=>'0.52'],
                            ['seed'=>'nftm-d6','name'=>'Mono Bloom','creator'=>'1 hr ago · @sol.axis','price'=>'0.38'],
                        ];
                    @endphp
                    @foreach($drops as $item)
                    <div class="nftm-nft-card">
                        <div class="nftm-art"><img src="https://picsum.photos/seed/{{ $item['seed'] }}/500/500" alt="{{ $item['name'] }}"></div>
                        <h3>{{ $item['name'] }}</h3>
                        <div class="nftm-creator">{{ $item['creator'] }}</div>
                        <div class="nftm-card-foot">
                            <div class="nftm-price"><span class="nftm-k">Mint</span><span class="nftm-v">{{ $item['price'] }} Ξ</span></div>
                            <span class="nftm-likes"><span class="nftm-heart">✦</span> new</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- ============ BROWSE BY CATEGORY ============ --}}
    <section class="nftm-block nftm-block-alt">
        <div class="nftm-wrap">
            <div class="nftm-sec-head"><div><span class="nftm-eyebrow">Browse</span><h2>Explore by category</h2></div></div>
            <div class="nftm-cat-grid">
                <div class="nftm-cat" data-cat="art"><div class="nftm-ic"><i class="bi bi-palette"></i></div><b>Art</b><span>18.2K</span></div>
                <div class="nftm-cat" data-cat="photography"><div class="nftm-ic"><i class="bi bi-camera"></i></div><b>Photography</b><span>7.1K</span></div>
                <div class="nftm-cat" data-cat="collectibles"><div class="nftm-ic"><i class="bi bi-gem"></i></div><b>Collectibles</b><span>24.9K</span></div>
                <div class="nftm-cat" data-cat="music"><div class="nftm-ic"><i class="bi bi-music-note-beamed"></i></div><b>Music</b><span>3.4K</span></div>
                <div class="nftm-cat" data-cat="sports"><div class="nftm-ic"><i class="bi bi-trophy"></i></div><b>Sports</b><span>5.8K</span></div>
                <div class="nftm-cat" data-cat="video"><div class="nftm-ic"><i class="bi bi-camera-reels"></i></div><b>Video</b><span>2.6K</span></div>
            </div>
        </div>
    </section>

    {{-- ============ HOW IT WORKS ============ --}}
    <section class="nftm-block">
        <div class="nftm-wrap">
            <div class="nftm-sec-head"><div><span class="nftm-eyebrow">Get started</span><h2>How it works</h2><p>Four steps from empty wallet to your first sale.</p></div></div>
            <div class="nftm-steps">
                <div class="nftm-step"><span class="nftm-n">STEP 01</span><div class="nftm-ic"><i class="bi bi-wallet2"></i></div><h3>Set up your wallet</h3><p>Connect your wallet in a click. It's how you'll buy, sell, and hold your pieces.</p></div>
                <div class="nftm-step"><span class="nftm-n">STEP 02</span><div class="nftm-ic"><i class="bi bi-collection"></i></div><h3>Create a collection</h3><p>Set your name, description, and royalties. Verify to earn the community badge.</p></div>
                <div class="nftm-step"><span class="nftm-n">STEP 03</span><div class="nftm-ic"><i class="bi bi-cloud-upload"></i></div><h3>Add your NFTs</h3><p>Upload your work, mint it on-chain, and list it as a fixed price or timed auction.</p></div>
                <div class="nftm-step"><span class="nftm-n">STEP 04</span><div class="nftm-ic"><i class="bi bi-currency-exchange"></i></div><h3>Sell and earn</h3><p>Get paid the moment a piece sells, and collect royalties on every resale after.</p></div>
            </div>
        </div>
    </section>

    {{-- ============ COLLECTIONS SPOTLIGHT ============ --}}
    <section class="nftm-block nftm-block-alt" id="creators">
        <div class="nftm-wrap">
            <div class="nftm-sec-head"><div><span class="nftm-eyebrow">Spotlight</span><h2>Notable collections</h2></div></div>
            <div class="nftm-coll-grid">
                @php
                    $collections = [
                        ['seed'=>'nftm-c1','avatar'=>21,'name'=>'Lumenworks','floor'=>'2.00','items'=>420,'owners'=>318],
                        ['seed'=>'nftm-c2','avatar'=>45,'name'=>'Marrow Studio','floor'=>'1.10','items'=>888,'owners'=>602],
                        ['seed'=>'nftm-c3','avatar'=>52,'name'=>'Nullspace','floor'=>'0.75','items'=>256,'owners'=>201],
                    ];
                @endphp
                @foreach($collections as $c)
                <div class="nftm-coll">
                    <div class="nftm-banner" style="background-image:url('https://picsum.photos/seed/{{ $c['seed'] }}-banner/500/240')"></div>
                    <div class="nftm-body">
                        <img class="nftm-avatar" src="https://i.pravatar.cc/112?img={{ $c['avatar'] }}" alt="">
                        <div class="nftm-name"><b>{{ $c['name'] }}</b><span class="nftm-verify"><i class="bi bi-patch-check-fill"></i></span></div>
                        <div class="nftm-row">
                            <div><div class="nftm-k">Floor</div><div class="nftm-v">{{ $c['floor'] }} Ξ</div></div>
                            <div><div class="nftm-k">Items</div><div class="nftm-v">{{ $c['items'] }}</div></div>
                            <div><div class="nftm-k">Owners</div><div class="nftm-v">{{ $c['owners'] }}</div></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ NEWSLETTER ============ --}}
    <section class="nftm-cta-band">
        <div class="nftm-wrap">
            <div class="nftm-cta-inner">
                <span class="nftm-eyebrow">Join the community</span>
                <h2>Get on the drop list</h2>
                <p>Early access to featured releases, creator spotlights, and vault news. No noise.</p>
                <form class="nftm-sub-form" id="nftmSubForm" novalidate>
                    <input type="email" id="nftmSubEmail" placeholder="you@wallet.eth">
                    <button type="submit" class="nftm-btn nftm-btn-primary">Subscribe</button>
                </form>
                <div class="nftm-sub-msg" id="nftmSubMsg"></div>
                <div class="nftm-socials">
                    <a class="nftm-soc" href="https://x.com/Vetora_Solution" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter-x"></i></a>
                    <a class="nftm-soc" href="https://www.instagram.com/vetora_solutions/" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                    <a class="nftm-soc" href="https://www.linkedin.com/company/vetora-solutions-pty-ltd/about/" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ CREATE NFT MODAL ============ --}}
    <div class="modal fade nftm-modal" id="nftmCreateModal" tabindex="-1" aria-hidden="true" data-lenis-prevent>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">List a new NFT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="nftmCreateForm">
                    <div class="modal-body">
                        <div class="nftm-modal-art-preview">
                            <img id="nftmCreatePreviewImg" src="" alt="Artwork preview">
                        </div>
                        <button type="button" class="nftm-btn nftm-btn-ghost mb-3" id="nftmShuffleArt" style="width:100%;justify-content:center;">
                            <i class="bi bi-shuffle"></i> Shuffle artwork
                        </button>

                        <label for="nftmCreateName">Name</label>
                        <input type="text" class="form-control mb-3" id="nftmCreateName" placeholder="e.g. Solar Fracture">

                        <label for="nftmCreatePrice">Listing price (Ξ)</label>
                        <input type="number" step="0.01" min="0.01" class="form-control" id="nftmCreatePrice" placeholder="e.g. 1.50">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="nftm-btn nftm-btn-primary">List NFT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ============ PLACE BID MODAL ============ --}}
    <div class="modal fade nftm-modal" id="nftmBidModal" tabindex="-1" aria-hidden="true" data-lenis-prevent>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Place a bid — <span id="nftmBidItemName"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="nftmBidForm">
                    <div class="modal-body">
                        <p class="mb-3">Current top bid: <strong id="nftmBidCurrent"></strong></p>
                        <label for="nftmBidAmount">Your bid (Ξ) — minimum <span id="nftmBidMin"></span></label>
                        <input type="number" step="0.01" class="form-control" id="nftmBidAmount">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="nftm-btn nftm-btn-primary">Confirm bid</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="nftm-toast-stack"></div>
</div>
@endsection

{{-- Own themed footer — replaces the site's default footer for this page only --}}
@section('page-footer')
    <footer class="nftm-footer nftm-page">
        <div class="nftm-wrap">
            <div class="nftm-foot-grid">
                <div class="nftm-foot-brand">
                    <a href="{{ url('/') }}" class="nftm-brand">
                        <img src="{{ asset('Assets/Images/logo-main.png') }}" alt="Vetora Logo">
                    </a>
                    <p>The on-chain marketplace for digital art and collectibles — built by Vetora Solutions to show what we can build for you.</p>
                </div>
                <div class="nftm-foot-col">
                    <h4>Marketplace</h4>
                    <a href="#featured">Explore</a>
                    <a href="#activity">Live auctions</a>
                    <a href="#creators">Collections</a>
                    <a href="#drops">Trending</a>
                </div>
                <div class="nftm-foot-col">
                    <h4>Resources</h4>
                    <a href="{{ url('/contact-us') }}">Contact us</a>
                    <a href="#drops">How it works</a>
                    <a href="{{ url('/nft-marketplace-development-services-melbourne') }}">Platform status</a>
                    <a href="{{ url('/contact-us') }}">Partners</a>
                </div>
                <div class="nftm-foot-col">
                    <h4>Company</h4>
                    <a href="{{ url('/about-us') }}">About Vetora</a>
                    <a href="{{ url('/contact-us') }}">Careers</a>
                    <a href="{{ url('/terms-and-conditions') }}">Terms</a>
                    <a href="{{ url('/privacy-policy') }}">Privacy</a>
                </div>
            </div>
            <div class="nftm-foot-bar">
                <span>© {{ date('Y') }} Vetora Vault — a Vetora Solutions demo. All rights reserved.</span>
                <span>Built on Vetora · vetora.au</span>
            </div>
        </div>
    </footer>
@endsection

@section('scripts')
    {{-- layouts.app's trailing inline script ($('.dropdown > a')...) expects
         jQuery to already be loaded, same as every other page on the site. --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('Assets/js/nft-marketplace.js') }}?v=1.2.0"></script>
@endsection
