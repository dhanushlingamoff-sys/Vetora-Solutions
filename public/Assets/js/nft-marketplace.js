/* =====================================================================
   NFT MARKETPLACE PAGE — wallet mock, bidding, tabs, search, subscribe.
   Front-end only: no blockchain/backend calls. Everything here is a
   convincing client-side simulation for demo purposes.
   ===================================================================== */
(function () {
    'use strict';

    var root = document.querySelector('.nftm-page');
    if (!root) return;

    /* ---------------------------------------------------------------
       Header — floats transparently over the hero until scrolled, then
       gains a solid/blurred background (same pattern as .site-header).
    --------------------------------------------------------------- */
    var nftmHeader = document.querySelector('.nftm-header');
    if (nftmHeader) {
        window.addEventListener('scroll', function () {
            nftmHeader.classList.toggle('nftm-scrolled', window.scrollY > 40);
        });
    }

    /* ---------------------------------------------------------------
       Scroll animation — GSAP + ScrollTrigger (already loaded globally by
       layouts/app.blade.php, before this file). The page opts out of
       scroll-fx.js's generic whole-section reveal (via data-reveal-group
       on .nftm-page) so it can drive its own granular, per-card version
       instead — same motion language as the rest of the site.
    --------------------------------------------------------------- */
    (function initScrollReveal() {
        var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (reduced || !window.gsap || !window.ScrollTrigger) return;

        gsap.registerPlugin(ScrollTrigger);

        /* Reveal trigger: 75% down the viewport (i.e. while the element is
           still in the lower quarter of the screen). Only elements that
           haven't yet reached that line get hidden-then-revealed — anything
           already at or past it when this runs (e.g. a very tall screen
           showing several sections at once) is left alone, since
           ScrollTrigger.batch only fires onEnter on a genuine crossing, not
           retroactively for triggers that already passed at setup time. */
        var TRIGGER = 'top 75%';
        function isBelowTrigger(el) {
            return el.getBoundingClientRect().top > window.innerHeight * 0.75;
        }

        /* Hero — plays once on load, it's already in view. */
        gsap.timeline({ defaults: { ease: 'power2.out' } })
            .from('.nftm-hero .nftm-eyebrow', { opacity: 0, y: 16, duration: .6 })
            .from('.nftm-hero h1', { opacity: 0, y: 24, duration: .7 }, '-=.45')
            .from('.nftm-hero .nftm-lead', { opacity: 0, y: 16, duration: .6 }, '-=.5')
            .from('.nftm-hero-cta', { opacity: 0, y: 16, duration: .6 }, '-=.5')
            .from('.nftm-showcase', { opacity: 0, x: 40, duration: .8 }, '-=.6')
            .from('.nftm-stats .nftm-stat', { opacity: 0, y: 20, duration: .55, stagger: .08 }, '-=.5');

        /* Every section's eyebrow/heading/description block fades up as it
           reaches 75% down the screen. */
        gsap.utils.toArray('.nftm-sec-head').forEach(function (head) {
            if (!isBelowTrigger(head)) return;
            gsap.from(head, {
                opacity: 0,
                y: 24,
                duration: .7,
                ease: 'power2.out',
                scrollTrigger: { trigger: head, start: TRIGGER }
            });
        });

        /* Grid-based sections (featured, auctions, trending, latest drops,
           categories, steps, collections) — each grid's own children
           stagger in independently as that grid reaches 75% down the
           screen. */
        var gridSel = '.nftm-card-grid, .nftm-auc-grid, .nftm-cat-grid, .nftm-steps, .nftm-coll-grid';
        document.querySelectorAll(gridSel).forEach(function (grid) {
            var items = Array.prototype.slice.call(grid.children).filter(isBelowTrigger);
            if (!items.length) return;
            gsap.set(items, { opacity: 0, y: 24 });
            ScrollTrigger.batch(items, {
                start: TRIGGER,
                onEnter: function (batch) {
                    /* clearProps:'transform' hands the element back to CSS once
                       it's revealed, so the pointer-tilt / hover-lift transforms
                       (driven by CSS vars) aren't frozen by a leftover inline
                       translate(0,0). */
                    gsap.to(batch, { opacity: 1, y: 0, duration: .6, ease: 'power2.out', stagger: .08, overwrite: true, clearProps: 'transform' });
                }
            });
        });

        /* Top sellers / buyers — rows stagger in per panel as it reaches
           75% down the screen. */
        document.querySelectorAll('.nftm-rank-panel').forEach(function (panel) {
            var rows = Array.prototype.slice.call(panel.querySelectorAll('.nftm-rank-row')).filter(isBelowTrigger);
            if (!rows.length) return;
            gsap.set(rows, { opacity: 0, x: -16 });
            ScrollTrigger.batch(rows, {
                start: TRIGGER,
                onEnter: function (batch) {
                    gsap.to(batch, { opacity: 1, x: 0, duration: .5, ease: 'power2.out', stagger: .06, overwrite: true, clearProps: 'transform' });
                }
            });
        });

        /* Newsletter band — fades and scales up as it reaches 75% down
           the screen. */
        var ctaInner = document.querySelector('.nftm-cta-inner');
        if (ctaInner && isBelowTrigger(ctaInner)) {
            gsap.from(ctaInner, {
                opacity: 0,
                scale: .96,
                duration: .7,
                ease: 'power2.out',
                scrollTrigger: { trigger: ctaInner, start: TRIGGER }
            });
        }

        /* Positions shift as fonts/images load — recompute triggers. */
        window.addEventListener('load', function () { ScrollTrigger.refresh(); });
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(function () { ScrollTrigger.refresh(); });
        }
    })();

    /* ---------------------------------------------------------------
       Toasts
    --------------------------------------------------------------- */
    var toastStack = document.querySelector('.nftm-toast-stack');

    function toast(message, kind) {
        if (!toastStack) return;
        var el = document.createElement('div');
        el.className = 'nftm-toast' + (kind ? ' nftm-' + kind : '');
        el.textContent = message;
        toastStack.appendChild(el);
        requestAnimationFrame(function () { el.classList.add('nftm-show'); });
        setTimeout(function () {
            el.classList.remove('nftm-show');
            setTimeout(function () { el.remove(); }, 300);
        }, 3200);
    }

    /* ---------------------------------------------------------------
       Wallet — mock connect/disconnect, persisted in localStorage
    --------------------------------------------------------------- */
    var WALLET_KEY = 'nftmWalletAddress';

    function randomAddress() {
        var chars = '0123456789abcdef';
        var out = '0x';
        for (var i = 0; i < 40; i++) out += chars[Math.floor(Math.random() * chars.length)];
        return out;
    }

    function shortAddress(addr) {
        return addr.slice(0, 6) + '…' + addr.slice(-4);
    }

    function getWallet() {
        try { return localStorage.getItem(WALLET_KEY); } catch (e) { return null; }
    }

    function setWallet(addr) {
        try {
            if (addr) localStorage.setItem(WALLET_KEY, addr);
            else localStorage.removeItem(WALLET_KEY);
        } catch (e) { /* private-browsing / storage disabled — session-only */ }
    }

    function renderWalletButtons() {
        var addr = getWallet();
        document.querySelectorAll('[data-nftm-wallet-btn]').forEach(function (btn) {
            if (addr) {
                btn.textContent = shortAddress(addr);
                btn.classList.add('nftm-connected');
            } else {
                btn.textContent = 'Connect wallet';
                btn.classList.remove('nftm-connected');
            }
        });
    }

    function toggleWallet() {
        var addr = getWallet();
        if (addr) {
            setWallet(null);
            toast('Wallet disconnected', null);
        } else {
            addr = randomAddress();
            setWallet(addr);
            toast('Wallet connected — ' + shortAddress(addr), 'ok');
        }
        renderWalletButtons();
    }

    function requireWallet(actionLabel) {
        if (getWallet()) return true;
        toast('Connect your wallet to ' + actionLabel, 'warn');
        document.querySelectorAll('[data-nftm-wallet-btn]').forEach(function (btn) {
            btn.animate(
                [{ transform: 'translateX(0)' }, { transform: 'translateX(-4px)' },
                 { transform: 'translateX(4px)' }, { transform: 'translateX(0)' }],
                { duration: 300 }
            );
        });
        return false;
    }

    document.querySelectorAll('[data-nftm-wallet-btn]').forEach(function (btn) {
        btn.addEventListener('click', toggleWallet);
    });
    renderWalletButtons();

    /* ---------------------------------------------------------------
       Nav anchor links — smooth scroll (Lenis doesn't hijack hash
       links by default, and the site disables native CSS smooth-scroll)
    --------------------------------------------------------------- */
    document.querySelectorAll('.nftm-nav-links a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            var target = document.querySelector(link.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    /* ---------------------------------------------------------------
       Like buttons — toggle heart + count
    --------------------------------------------------------------- */
    document.querySelectorAll('.nftm-likes').forEach(function (btn) {
        var base = parseInt(btn.getAttribute('data-count'), 10) || 0;
        btn.addEventListener('click', function () {
            var liked = btn.classList.toggle('nftm-liked');
            btn.querySelector('.nftm-like-count').textContent = liked ? base + 1 : base;
            btn.querySelector('.nftm-heart').textContent = liked ? '♥' : '♡';
        });
    });

    /* ---------------------------------------------------------------
       Trending tabs — filter by data-cat within the trending grid only
    --------------------------------------------------------------- */
    var trendingGrid = document.querySelector('#nftmTrendingGrid');
    document.querySelectorAll('.nftm-tabs .nftm-tab').forEach(function (tab) {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.nftm-tabs .nftm-tab').forEach(function (t) { t.classList.remove('nftm-on'); });
            tab.classList.add('nftm-on');
            var cat = tab.getAttribute('data-cat');
            if (!trendingGrid) return;
            trendingGrid.querySelectorAll('.nftm-nft-card').forEach(function (card) {
                var match = cat === 'all' || card.getAttribute('data-cat') === cat;
                card.classList.toggle('nftm-hidden', !match);
            });
        });
    });

    /* ---------------------------------------------------------------
       Category tiles — jump to Trending and select the matching tab
    --------------------------------------------------------------- */
    document.querySelectorAll('.nftm-cat[data-cat]').forEach(function (tile) {
        tile.addEventListener('click', function () {
            var cat = tile.getAttribute('data-cat');
            var tab = document.querySelector('.nftm-tabs .nftm-tab[data-cat="' + cat + '"]');
            if (tab) tab.click();
            var target = document.querySelector('#drops');
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    /* ---------------------------------------------------------------
       Countdown timers — real ticking countdown from data-remaining (s)
    --------------------------------------------------------------- */
    function formatRemaining(total) {
        var h = Math.floor(total / 3600);
        var m = Math.floor((total % 3600) / 60);
        var s = total % 60;
        function pad(n) { return (n < 10 ? '0' : '') + n; }
        return pad(h) + 'h ' + pad(m) + 'm ' + pad(s) + 's';
    }

    document.querySelectorAll('.nftm-timer').forEach(function (timerEl) {
        var remaining = parseInt(timerEl.getAttribute('data-remaining'), 10) || 0;
        timerEl.textContent = formatRemaining(remaining);
        var iv = setInterval(function () {
            remaining -= 1;
            if (remaining <= 0) {
                timerEl.textContent = 'Auction ended';
                timerEl.classList.add('nftm-ended');
                var card = timerEl.closest('.nftm-auc-card');
                var bidBtn = card && card.querySelector('.nftm-bid-btn');
                if (bidBtn) bidBtn.disabled = true;
                clearInterval(iv);
                return;
            }
            timerEl.textContent = formatRemaining(remaining);
        }, 1000);
    });

    /* ---------------------------------------------------------------
       Place a bid — shared modal, populated per auction card.
       Bootstrap's bundle loads after this file, so the Modal instance is
       created lazily on first use rather than at parse time.
    --------------------------------------------------------------- */
    var bidModalEl = document.getElementById('nftmBidModal');
    var bidModal = null;
    var bidTargetCard = null;

    document.querySelectorAll('.nftm-bid-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (!requireWallet('place a bid')) return;
            if (!bidModal && window.bootstrap) bidModal = new bootstrap.Modal(bidModalEl);
            var card = btn.closest('.nftm-auc-card');
            bidTargetCard = card;
            var name = card.querySelector('h3').textContent;
            var current = parseFloat(card.querySelector('.nftm-price .nftm-v').textContent);
            var minBid = (current + 0.05).toFixed(2);

            document.getElementById('nftmBidItemName').textContent = name;
            document.getElementById('nftmBidCurrent').textContent = current.toFixed(2) + ' Ξ';
            var input = document.getElementById('nftmBidAmount');
            input.min = minBid;
            input.value = minBid;
            document.getElementById('nftmBidMin').textContent = minBid + ' Ξ';

            if (bidModal) bidModal.show();
        });
    });

    var bidForm = document.getElementById('nftmBidForm');
    if (bidForm) {
        bidForm.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!bidTargetCard) return;
            var input = document.getElementById('nftmBidAmount');
            var amount = parseFloat(input.value);
            var min = parseFloat(input.min);
            if (isNaN(amount) || amount < min) {
                input.classList.add('is-invalid');
                return;
            }
            input.classList.remove('is-invalid');

            bidTargetCard.querySelector('.nftm-price .nftm-v').textContent = amount.toFixed(2) + ' Ξ';
            bidTargetCard.animate(
                [{ boxShadow: '0 0 0 2px rgba(0,194,168,.8)' }, { boxShadow: '0 0 0 0 rgba(0,194,168,0)' }],
                { duration: 900 }
            );

            if (bidModal) bidModal.hide();
            toast('Bid placed — ' + amount.toFixed(2) + ' Ξ on ' + bidTargetCard.querySelector('h3').textContent, 'ok');
        });
    }

    /* ---------------------------------------------------------------
       Create NFT — gated by wallet, prepends a real card to Featured
    --------------------------------------------------------------- */
    var createModalEl = document.getElementById('nftmCreateModal');
    var createModal = null;
    var featuredGrid = document.querySelector('#nftmFeaturedGrid');

    document.querySelectorAll('[data-nftm-create-btn]').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (!requireWallet('create and list an NFT')) return;
            if (!createModal && window.bootstrap) createModal = new bootstrap.Modal(createModalEl);
            if (createModal) createModal.show();
        });
    });

    var createPreviewImg = document.getElementById('nftmCreatePreviewImg');
    var shuffleBtn = document.getElementById('nftmShuffleArt');
    var currentSeed = Math.floor(Math.random() * 10000);

    function refreshPreview() {
        createPreviewImg.src = 'https://picsum.photos/seed/nftm' + currentSeed + '/500/500';
    }
    refreshPreview();

    if (shuffleBtn) {
        shuffleBtn.addEventListener('click', function () {
            currentSeed = Math.floor(Math.random() * 10000);
            refreshPreview();
        });
    }

    var createForm = document.getElementById('nftmCreateForm');
    if (createForm) {
        createForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var nameEl = document.getElementById('nftmCreateName');
            var priceEl = document.getElementById('nftmCreatePrice');
            var name = nameEl.value.trim();
            var price = parseFloat(priceEl.value);

            var valid = true;
            if (!name) { nameEl.classList.add('is-invalid'); valid = false; }
            else nameEl.classList.remove('is-invalid');
            if (isNaN(price) || price <= 0) { priceEl.classList.add('is-invalid'); valid = false; }
            else priceEl.classList.remove('is-invalid');
            if (!valid) return;

            var addr = getWallet();
            var card = document.createElement('div');
            card.className = 'nftm-nft-card';
            card.innerHTML =
                '<div class="nftm-art"><img src="https://picsum.photos/seed/nftm' + currentSeed + '/500/500" alt="' + name + '"></div>' +
                '<h3>' + name + '</h3>' +
                '<div class="nftm-creator">by ' + shortAddress(addr) + '</div>' +
                '<div class="nftm-card-foot">' +
                    '<div class="nftm-price"><span class="nftm-k">Price</span><span class="nftm-v">' + price.toFixed(2) + ' Ξ</span></div>' +
                    '<button type="button" class="nftm-likes" data-count="0"><span class="nftm-heart">♡</span> <span class="nftm-like-count">0</span></button>' +
                '</div>';

            card.querySelector('.nftm-likes').addEventListener('click', function () {
                var btn = card.querySelector('.nftm-likes');
                var liked = btn.classList.toggle('nftm-liked');
                btn.querySelector('.nftm-like-count').textContent = liked ? 1 : 0;
                btn.querySelector('.nftm-heart').textContent = liked ? '♥' : '♡';
            });

            if (featuredGrid) {
                featuredGrid.insertBefore(card, featuredGrid.firstChild);
                card.animate([{ opacity: 0, transform: 'translateY(-10px)' }, { opacity: 1, transform: 'translateY(0)' }], { duration: 350 });
            }

            createForm.reset();
            currentSeed = Math.floor(Math.random() * 10000);
            refreshPreview();
            if (createModal) createModal.hide();
            toast('"' + name + '" listed — check the Featured section', 'ok');

            var target = document.querySelector('#featured');
            if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    }

    /* ---------------------------------------------------------------
       Newsletter subscribe — validates + shows inline feedback
    --------------------------------------------------------------- */
    var subForm = document.getElementById('nftmSubForm');
    if (subForm) {
        subForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var input = document.getElementById('nftmSubEmail');
            var msg = document.getElementById('nftmSubMsg');
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/;
            if (!emailPattern.test(input.value.trim())) {
                msg.textContent = 'Enter a valid email address.';
                msg.className = 'nftm-sub-msg nftm-err';
                return;
            }
            msg.textContent = 'You’re on the list — welcome to the vault.';
            msg.className = 'nftm-sub-msg nftm-ok';
            input.value = '';
        });
    }

    /* ---------------------------------------------------------------
       Search — live catalog filter, shown as a dropdown under the input
    --------------------------------------------------------------- */
    var searchInput = document.getElementById('nftmSearchInput');
    var searchResults = document.getElementById('nftmSearchResults');

    function buildCatalog() {
        return Array.prototype.slice.call(document.querySelectorAll('.nftm-nft-card')).map(function (card) {
            return {
                el: card,
                name: card.querySelector('h3').textContent,
                creator: card.querySelector('.nftm-creator').textContent,
                img: card.querySelector('.nftm-art img') ? card.querySelector('.nftm-art img').src : ''
            };
        });
    }

    function positionSearchResults() {
        var rect = searchInput.getBoundingClientRect();
        searchResults.style.top = (rect.bottom + 8) + 'px';
        searchResults.style.left = rect.left + 'px';
        searchResults.style.width = rect.width + 'px';
    }

    function closeSearchDropdown() {
        searchResults.classList.remove('nftm-show');
    }

    if (searchInput && searchResults) {
        var catalog = buildCatalog();

        searchInput.addEventListener('input', function () {
            var q = searchInput.value.trim().toLowerCase();
            if (!q) {
                closeSearchDropdown();
                searchResults.innerHTML = '';
                return;
            }
            var matches = catalog.filter(function (item) {
                return item.name.toLowerCase().indexOf(q) !== -1 || item.creator.toLowerCase().indexOf(q) !== -1;
            }).slice(0, 8);

            searchResults.innerHTML = '';
            if (!matches.length) {
                searchResults.innerHTML = '<div class="nftm-search-empty">No items match "' + searchInput.value + '"</div>';
            } else {
                matches.forEach(function (item) {
                    var row = document.createElement('div');
                    row.className = 'nftm-search-result';
                    row.innerHTML = '<img src="' + item.img + '" alt=""><span><span class="nftm-sr-name">' + item.name +
                        '</span><span class="nftm-sr-creator">' + item.creator + '</span></span>';
                    row.addEventListener('click', function () {
                        closeSearchDropdown();
                        searchInput.value = '';
                        item.el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        item.el.animate(
                            [{ boxShadow: '0 0 0 2px rgba(123,31,162,.9)' }, { boxShadow: '0 0 0 0 rgba(123,31,162,0)' }],
                            { duration: 1100 }
                        );
                    });
                    searchResults.appendChild(row);
                });
            }
            positionSearchResults();
            searchResults.classList.add('nftm-show');
        });

        window.addEventListener('resize', function () {
            if (searchResults.classList.contains('nftm-show')) positionSearchResults();
        });
        window.addEventListener('scroll', function () {
            if (searchResults.classList.contains('nftm-show')) positionSearchResults();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeSearchDropdown();
        });

        document.addEventListener('click', function (e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                closeSearchDropdown();
            }
        });
    }
})();


/* =====================================================================
   PREMIUM MOTION LAYER — scroll progress, count-up stats, 3D pointer
   tilt + spotlight, and magnetic CTAs. Kept in its own IIFE so it's
   independent of the interactive/demo logic above. All motion respects
   prefers-reduced-motion.
   ===================================================================== */
(function () {
    'use strict';

    if (!document.querySelector('.nftm-page')) return;
    var REDUCE = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var FINE = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    /* ---- Scroll-progress bar ----------------------------------------- */
    (function scrollProgress() {
        var bar = document.querySelector('.nftm-scroll-progress span');
        if (!bar) return;
        var ticking = false;
        function update() {
            var doc = document.documentElement;
            var max = doc.scrollHeight - doc.clientHeight;
            var pct = max > 0 ? (window.scrollY / max) * 100 : 0;
            bar.style.width = pct + '%';
            ticking = false;
        }
        window.addEventListener('scroll', function () {
            if (!ticking) { ticking = true; requestAnimationFrame(update); }
        }, { passive: true });
        update();
    })();

    /* ---- Count-up stats ---------------------------------------------- */
    (function countUp() {
        var els = document.querySelectorAll('.nftm-count');
        if (!els.length) return;

        function format(el, value) {
            var decimals = parseInt(el.getAttribute('data-decimals'), 10) || 0;
            var out = value.toFixed(decimals);
            if (el.getAttribute('data-sep')) {
                var parts = out.split('.');
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                out = parts.join('.');
            }
            return (el.getAttribute('data-prefix') || '') + out + (el.getAttribute('data-suffix') || '');
        }

        function run(el) {
            if (el.dataset.done) return;
            el.dataset.done = '1';
            var target = parseFloat(el.getAttribute('data-target')) || 0;
            if (REDUCE) { el.textContent = format(el, target); return; }
            var dur = 1600, start = null;
            function step(ts) {
                if (start === null) start = ts;
                var p = Math.min((ts - start) / dur, 1);
                var eased = 1 - Math.pow(1 - p, 3);   /* easeOutCubic */
                el.textContent = format(el, target * eased);
                if (p < 1) requestAnimationFrame(step);
                else el.textContent = format(el, target);
            }
            requestAnimationFrame(step);
        }

        if ('IntersectionObserver' in window) {
            var io = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) { run(e.target); io.unobserve(e.target); }
                });
            }, { threshold: 0.4 });
            els.forEach(function (el) { io.observe(el); });

            /* Fallback: fire any counter already in view on load, so the hero
               stats never sit at 0 if the observer's initial callback lags. */
            window.addEventListener('load', function () {
                els.forEach(function (el) {
                    var r = el.getBoundingClientRect();
                    if (r.top < window.innerHeight && r.bottom > 0) run(el);
                });
            });
        } else {
            els.forEach(run);
        }
    })();

    /* ---- 3D pointer tilt + spotlight --------------------------------- */
    (function tilt() {
        if (REDUCE || !FINE) return;
        var TILT_SEL = '.nftm-nft-card, .nftm-auc-card, .nftm-coll, .nftm-step, .nftm-cat';
        var TILTABLE = /^(nftm-nft-card|nftm-auc-card|nftm-coll)$/;

        document.addEventListener('pointermove', function (e) {
            var card = e.target.closest ? e.target.closest(TILT_SEL) : null;
            if (!card) return;
            var r = card.getBoundingClientRect();
            var px = (e.clientX - r.left) / r.width;
            var py = (e.clientY - r.top) / r.height;
            card.style.setProperty('--nftm-mx', (px * 100).toFixed(1) + '%');
            card.style.setProperty('--nftm-my', (py * 100).toFixed(1) + '%');
            if ([].some.call(card.classList, function (c) { return TILTABLE.test(c); })) {
                card.style.setProperty('--nftm-rx', ((0.5 - py) * 7).toFixed(2) + 'deg');
                card.style.setProperty('--nftm-ry', ((px - 0.5) * 7).toFixed(2) + 'deg');
            }
        }, { passive: true });

        /* Reset tilt when the pointer leaves a card (delegated). */
        document.addEventListener('pointerout', function (e) {
            var card = e.target.closest ? e.target.closest(TILT_SEL) : null;
            if (!card) return;
            if (card.contains(e.relatedTarget)) return;  /* still inside */
            card.style.setProperty('--nftm-rx', '0deg');
            card.style.setProperty('--nftm-ry', '0deg');
        }, { passive: true });
    })();

    /* ---- Magnetic CTAs ----------------------------------------------- */
    (function magnetic() {
        if (REDUCE || !FINE) return;
        var STRENGTH = 0.32, MAX = 12;
        var btns = document.querySelectorAll('.nftm-hero-cta .nftm-btn, .nftm-cta-band .nftm-btn-primary');
        btns.forEach(function (btn) {
            btn.addEventListener('pointermove', function (e) {
                var r = btn.getBoundingClientRect();
                var x = (e.clientX - (r.left + r.width / 2)) * STRENGTH;
                var y = (e.clientY - (r.top + r.height / 2)) * STRENGTH;
                x = Math.max(-MAX, Math.min(MAX, x));
                y = Math.max(-MAX, Math.min(MAX, y));
                btn.style.transform = 'translate(' + x.toFixed(1) + 'px,' + y.toFixed(1) + 'px)';
            });
            btn.addEventListener('pointerleave', function () {
                btn.style.transform = '';
            });
        });
    })();
})();
