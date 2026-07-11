/* ============================================================
   SITE-WIDE SCROLL EFFECTS
   1) Lenis smooth scrolling (same feel as the mobile-app page)
   2) GSAP + ScrollTrigger reveal-on-scroll for content blocks
   Loaded on every page via layouts/app.blade.php, near the bottom of
   <body> so window.gsap / window.Lenis are already defined.
   ============================================================ */
(function () {
    'use strict';

    var REDUCE = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ── 1. Lenis smooth scroll ──────────────────────────────────────────
       Idempotent: if a page already booted its own Lenis instance (e.g. the
       mobile-app page used to), reuse it instead of creating a second one. */
    function initLenis() {
        if (REDUCE || !window.Lenis) return;
        if (window.__lenis) return;                 /* already running */

        /* style.css forces html{scroll-behavior:smooth}; that fights Lenis. */
        document.documentElement.style.scrollBehavior = 'auto';

        /* A page can request a heavier/lighter feel before this script runs
           (see the NFT marketplace page's inline <head> snippet) without
           changing the site-wide default for every other page. */
        var lenis = new Lenis(Object.assign({
            lerp: 0.12,          /* light, responsive smoothing */
            wheelMultiplier: 1,
            smoothWheel: true,
            syncTouch: false     /* keep native momentum on touch devices */
        }, window.__lenisOverrides || {}));
        window.__lenis = lenis;

        if (window.gsap && window.ScrollTrigger) {
            /* keep ScrollTrigger (pins / scrubs) in lock-step with Lenis */
            lenis.on('scroll', ScrollTrigger.update);
            gsap.ticker.add(function (time) { lenis.raf(time * 1000); });
            gsap.ticker.lagSmoothing(0);
        } else {
            (function raf(t) { lenis.raf(t); requestAnimationFrame(raf); })(0);
        }
    }

    /* ── 2. Reveal-on-scroll ─────────────────────────────────────────────
       Content blocks fade + slide up as they enter the viewport. Only blocks
       BELOW the fold at load are hidden, so above-the-fold content never
       flashes, and if JS never runs everything simply stays visible. */

    /* Candidate content blocks (scoped to the page body content). */
    var TARGET_SEL = [
        '.main-content section',
        '.main-content [class*="col-"]',
        '.main-content .card',
        '.main-content .service-box',
        '.main-content .faq-item',
        '.main-content blockquote'
    ].join(',');

    /* Never reveal things that animate themselves, are structural chrome, or
       are explicitly opted out. */
    var EXCLUDE_SEL = [
        '[data-no-reveal]',
        '.hww2', '.hww2-pin', '.wdm',      /* mobile-app bespoke sections */
        '.owl-carousel', '.slider-track',  /* carousels animate themselves */
        '.site-header', 'header', 'nav',
        '.modal', '.wa-float', 'footer'
    ].join(',');

    function isExcluded(el) {
        return !!el.closest(EXCLUDE_SEL);
    }

    function initReveal() {
        if (REDUCE || !window.gsap || !window.ScrollTrigger) return;
        gsap.registerPlugin(ScrollTrigger);

        var root = document.querySelector('.main-content') || document.body;

        /* If a page already ships its own reveal system (e.g. the AI page uses
           `.reveal` / `[data-reveal]`), stand down so we don't double-animate —
           that page still gets Lenis smooth scroll, just not this generic pass. */
        if (root.querySelector('.reveal, [data-reveal], [data-reveal-group]')) return;

        var candidates = Array.prototype.slice.call(root.querySelectorAll(TARGET_SEL));
        if (!candidates.length) return;

        /* Keep only the DEEPEST matches: if a candidate contains another
           candidate, animate the inner one(s) instead of the whole wrapper —
           this gives per-card granularity in grids while still animating plain
           text sections as a single block. */
        var leaves = candidates.filter(function (el) {
            if (isExcluded(el)) return false;
            return !candidates.some(function (other) {
                return other !== el && el.contains(other);
            });
        });
        if (!leaves.length) return;

        /* Only hide blocks that start below the fold, so nothing above the fold
           flashes hidden on load. */
        var foldLine = window.innerHeight * 0.9;
        var below = leaves.filter(function (el) {
            return el.getBoundingClientRect().top > foldLine;
        });
        if (!below.length) return;

        gsap.set(below, { opacity: 0, y: 24 });

        /* Batch so cards entering together stagger nicely. */
        ScrollTrigger.batch(below, {
            start: 'top 88%',
            onEnter: function (batch) {
                gsap.to(batch, {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    ease: 'power2.out',
                    stagger: 0.08,
                    overwrite: true
                });
            }
        });

        /* Positions shift as fonts/images load — recompute triggers. */
        window.addEventListener('load', function () { ScrollTrigger.refresh(); });
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(function () { ScrollTrigger.refresh(); });
        }
    }

    function boot() {
        initLenis();
        initReveal();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', boot);
    } else {
        boot();
    }
})();
