/* ===================================================================
   AI SERVICES PAGE — interactions
   Libraries loaded via CDN in AI.blade.php:
     Lenis, GSAP + ScrollTrigger, Swiper, CountUp
=================================================================== */
(function () {
    "use strict";

    var page = document.querySelector(".axo-page");
    if (!page) return;

    var reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ---------------------------------------------------------------
       1. IntersectionObserver — .reveal → .revealed
          Stagger siblings: each .reveal child gets delay = index * 100ms
    --------------------------------------------------------------- */
    document.querySelectorAll(".reveal").forEach(function (el) {
        var siblings = Array.from(el.parentElement.children).filter(function (c) {
            return c.classList.contains("reveal");
        });
        var idx = siblings.indexOf(el);
        el.style.transitionDelay = reduced ? "0ms" : Math.min(idx * 120, 240) + "ms";
    });

    if ("IntersectionObserver" in window) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("revealed");
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        document.querySelectorAll(".reveal").forEach(function (el) {
            revealObserver.observe(el);
        });
    }

    /* ---------------------------------------------------------------
       2. Random rotate() on .tech-pill / .axo-tech-chip — page load
    --------------------------------------------------------------- */
    document.querySelectorAll(".tech-pill, .axo-tech-chip").forEach(function (el) {
        var deg = (Math.random() * 8 - 4).toFixed(2);
        el.style.transform = "rotate(" + deg + "deg)";
    });

    /* ---------------------------------------------------------------
       3. Counter animation — data-count / data-suffix
          Uses CountUp.js when available, plain interval fallback.
    --------------------------------------------------------------- */
    document.querySelectorAll(".axo-counter").forEach(function (el) {
        var target  = parseFloat(el.getAttribute("data-count")) || 0;
        var suffix  = el.getAttribute("data-suffix") || "";
        var started = false;

        function runCounter() {
            if (started) return;
            started = true;

            if (window.CountUp) {
                new window.CountUp(el, target, { duration: 2, suffix: suffix }).start();
                return;
            }

            var current = 0;
            var step    = Math.max(1, Math.ceil(target / 60));
            var timer   = setInterval(function () {
                current += step;
                if (current >= target) { current = target; clearInterval(timer); }
                el.textContent = current + suffix;
            }, 25);
        }

        if (window.ScrollTrigger) {
            window.ScrollTrigger.create({ trigger: el, start: "top 90%", onEnter: runCounter });
        } else {
            new IntersectionObserver(function (entries) {
                entries.forEach(function (e) { if (e.isIntersecting) runCounter(); });
            }, { threshold: 0.4 }).observe(el);
        }
    });

    /* ---------------------------------------------------------------
       4. Pricing toggle — Monthly / Yearly
          Swaps .axo-active between buttons; updates displayed price.
    --------------------------------------------------------------- */
    var toggleBtns = document.querySelectorAll(".axo-pricing-toggle button");
    var priceCards = document.querySelectorAll("[data-price-monthly]");

    toggleBtns.forEach(function (btn) {
        btn.addEventListener("click", function () {
            toggleBtns.forEach(function (b) { b.classList.remove("axo-active"); });
            btn.classList.add("axo-active");

            var mode = btn.getAttribute("data-mode");
            priceCards.forEach(function (card) {
                var val    = mode === "yearly"
                    ? card.getAttribute("data-price-yearly")
                    : card.getAttribute("data-price-monthly");
                var period = mode === "yearly" ? "/Yearly" : "/Monthly";
                var valEl  = card.querySelector(".axo-price-value");
                var perEl  = card.querySelector(".axo-price-period");
                if (valEl) valEl.textContent = "$" + val;
                if (perEl) perEl.textContent = period;
            });
        });
    });

    /* ---------------------------------------------------------------
       5. Scroll-to-top — show after 300 px, smooth scroll on click
    --------------------------------------------------------------- */
    var totop = document.querySelector(".axo-totop");
    if (totop) {
        window.addEventListener("scroll", function () {
            totop.classList.toggle("axo-show", window.scrollY > 300);
        }, { passive: true });

        totop.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }


    /* ---------------------------------------------------------------
       6. Hero 3D Wave Canvas
    --------------------------------------------------------------- */
    (function () {
        var canvas = document.getElementById('waveCanvas');
        if (!canvas) return;
        var ctx = canvas.getContext('2d');
        function resize() {
            canvas.width  = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
        }
        resize();
        window.addEventListener('resize', resize);
        var NUM_FINS = 28, WAVE_SPEED = 0.022, WAVE_AMP = 0.75;
        var Y_WAVE_AMP = 38, Y_WAVE_SPEED = 0.009, time = 0;
        function drawFin(x, y, fw, fh, colorProg, scaleX) {
            var abs = Math.abs(scaleX), w = fw * abs;
            if (w < 0.8) return;
            var hue = 245 + colorProg * 55;
            var sat = 55  + abs * 35;
            var lit = 12  + abs * 42 + colorProg * 18;
            var alp = 0.25 + abs * 0.75;
            ctx.save();
            ctx.translate(x, y);
            var grad = ctx.createLinearGradient(0, -fh/2, 0, fh/2);
            grad.addColorStop(0,    'hsla(' + hue + ',' + sat + '%,' + (lit+28) + '%,' + alp + ')');
            grad.addColorStop(0.28, 'hsla(' + hue + ',' + sat + '%,' + lit      + '%,' + alp + ')');
            grad.addColorStop(1,    'hsla(' + (hue-12) + ',' + (sat-22) + '%,' + (lit-18) + '%,' + (alp*0.35) + ')');
            ctx.beginPath();
            ctx.ellipse(0, 0, w/2, fh/2, 0, 0, Math.PI*2);
            ctx.fillStyle = grad;
            ctx.fill();
            if (abs > 0.25) {
                ctx.beginPath();
                ctx.ellipse(0, -fh*0.14, w*0.32, fh*0.11, 0, 0, Math.PI*2);
                ctx.fillStyle = 'rgba(255,255,255,' + (abs * 0.28) + ')';
                ctx.fill();
            }
            ctx.restore();
        }
        (function animateWave() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            time++;
            for (var i = 0; i < NUM_FINS; i++) {
                var t      = i / (NUM_FINS - 1);
                var x      = 20 + t * (canvas.width - 40);
                var arcY   = Math.sin(t * Math.PI) * -115;
                var yWave  = Math.sin(time * Y_WAVE_SPEED + t * Math.PI * 2.2) * Y_WAVE_AMP;
                var y      = canvas.height * 0.58 + arcY + yWave;
                var size   = 0.35 + Math.sin(t * Math.PI) * 0.65;
                var fh     = 70  + size * 170;
                var fw     = 28  + size * 22;
                var phase  = t * Math.PI * 3.2 - time * WAVE_SPEED;
                var scaleX = Math.sin(phase) * WAVE_AMP;
                drawFin(x, y, fw, fh, t, scaleX);
            }
            requestAnimationFrame(animateWave);
        })();
    })();

    /* ---------------------------------------------------------------
       7. Video modal
    --------------------------------------------------------------- */
    (function () {
        var playBtn        = document.getElementById('heroBadgePlay');
        var modal          = document.getElementById('videoModal');
        var closeBtn       = document.getElementById('closeModal');
        var overlayCloseBtn = document.getElementById('closeModalOverlay');
        var iframe         = document.getElementById('videoFrame');
        var VIDEO_ID = 'YOUR_YOUTUBE_VIDEO_ID';
        if (!playBtn || !modal) return;
        playBtn.addEventListener('click', function () {
            iframe.src = 'https://www.youtube.com/embed/' + VIDEO_ID + '?autoplay=1';
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        function closeModal() {
            modal.classList.remove('active');
            iframe.src = '';
            document.body.style.overflow = '';
        }
        closeBtn.addEventListener('click', closeModal);
        if (overlayCloseBtn) overlayCloseBtn.addEventListener('click', closeModal);
        document.querySelector('.video-modal__overlay').addEventListener('click', function (e) {
            if (e.target === this) closeModal();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeModal();
        });
    })();

    /* ---------------------------------------------------------------
       GSAP — register plugin
    --------------------------------------------------------------- */
    if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
    }

    /* ---------------------------------------------------------------
       GSAP — data-reveal / data-reveal-group scroll animations
    --------------------------------------------------------------- */
    if (window.gsap && window.ScrollTrigger && !reduced) {
        var fromMap = {
            up:    { y: 50, opacity: 0 },
            left:  { x: -60, opacity: 0 },
            right: { x: 60,  opacity: 0 },
            scale: { scale: 0.88, opacity: 0 }
        };

        document.querySelectorAll("[data-reveal]").forEach(function (el) {
            var type = el.getAttribute("data-reveal") || "up";
            gsap.from(el, Object.assign({}, fromMap[type] || fromMap.up, {
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 88%",
                    toggleActions: "play none none none"
                }
            }));
        });

        document.querySelectorAll("[data-reveal-group]").forEach(function (group) {
            var items = group.querySelectorAll("[data-reveal-item]");
            if (!items.length) return;
            gsap.from(items, {
                y: 40, opacity: 0, duration: 0.7, stagger: 0.1, ease: "power3.out",
                scrollTrigger: {
                    trigger: group,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });
    }

    /* ---------------------------------------------------------------
       Services — accordion rows
    --------------------------------------------------------------- */
    var svcRows = document.querySelectorAll(".axo-svc-row");
    function openSvcRow(row) {
        svcRows.forEach(function (r) { r.classList.remove("axo-open"); });
        row.classList.add("axo-open");
    }
    svcRows.forEach(function (row) {
        /* Hover opens the row (image slides in on the left, arrow fills) — the
           first row stays open by default until another is hovered. */
        row.addEventListener("mouseenter", function () { openSvcRow(row); });
        /* Touch devices have no hover, so tap opens instead. */
        row.addEventListener("click", function () { openSvcRow(row); });
    });

    /* Section headlines — word-by-word reveal (same effect as the About headline) */
    ["svcHeadline", "techHeadline", "projHeadline"].forEach(function (id) {
        var el = document.getElementById(id);
        if (!el) return;
        var words = el.textContent.trim().split(/\s+/);
        el.innerHTML = words
            .map(function (w) { return '<span class="word">' + w + '</span>'; })
            .join(' ');
        var wordEls = el.querySelectorAll(".word");
        new IntersectionObserver(function (entries, obs) {
            if (!entries[0].isIntersecting) return;
            wordEls.forEach(function (w, i) {
                setTimeout(function () { w.classList.add("lit"); }, i * 80);
            });
            obs.disconnect();
        }, { threshold: 0.3 }).observe(el);
    });

    /* ---------------------------------------------------------------
       Swiper — projects carousel
    --------------------------------------------------------------- */
    if (window.Swiper) {
        new window.Swiper(".axo-proj-swiper", {
            slidesPerView: 1.15,
            spaceBetween: 22,
            grabCursor: true,
            navigation: { nextEl: ".axo-proj-next", prevEl: ".axo-proj-prev" },
            breakpoints: {
                576:  { slidesPerView: 1.6 },
                992:  { slidesPerView: 2.3 },
                1300: { slidesPerView: 3.1 }
            }
        });
    }

    /* ---------------------------------------------------------------
       Features — scroll reveal (.feat-reveal → .is-visible)
    --------------------------------------------------------------- */
    (function () {
        var featReveals = document.querySelectorAll('.feat-reveal');
        if (!featReveals.length) return;

        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        featReveals.forEach(function (el) { io.observe(el); });

        var scrollTopBtn = document.getElementById('scrollTopBtn');
        if (scrollTopBtn) {
            window.addEventListener('scroll', function () {
                var show = window.scrollY > 300;
                scrollTopBtn.style.opacity = show ? '1' : '0';
                scrollTopBtn.style.pointerEvents = show ? 'auto' : 'none';
            }, { passive: true });
        }

    })();

    /* ─── ABOUT SECTION ANIMATIONS ─── */
    (function () {

        /* 1. Word-by-word headline reveal */
        var headline = document.getElementById('aboutHeadline');
        if (headline) {
            var words = headline.textContent.trim().split(/\s+/);
            headline.innerHTML = words
                .map(function (w) { return '<span class="word">' + w + '</span>'; })
                .join(' ');

            var wordEls = headline.querySelectorAll('.word');

            new IntersectionObserver(function (entries, obs) {
                if (!entries[0].isIntersecting) return;
                wordEls.forEach(function (w, i) {
                    setTimeout(function () { w.classList.add('lit'); }, i * 80);
                });
                obs.disconnect();
            }, { threshold: 0.3 }).observe(headline);
        }

        /* 2. Slide-in reveal for left / right elements */
        var revealEls = document.querySelectorAll('.about-reveal-left, .about-reveal-right');
        if (revealEls.length) {
            var slideObs = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    if (e.isIntersecting) {
                        e.target.classList.add('in-view');
                        slideObs.unobserve(e.target);
                    }
                });
            }, { threshold: 0.15 });
            revealEls.forEach(function (el) { slideObs.observe(el); });
        }

        /* 3. Count-up for about stats */
        var counters = document.querySelectorAll('.about-count-up');
        if (counters.length) {
            var cntObs = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var el     = entry.target;
                    var target = parseInt(el.getAttribute('data-target'), 10);
                    var start  = performance.now();
                    var duration = 2000;

                    (function tick(now) {
                        var progress = Math.min((now - start) / duration, 1);
                        var eased    = 1 - Math.pow(1 - progress, 3);
                        el.textContent = Math.floor(eased * target);
                        if (progress < 1) { requestAnimationFrame(tick); }
                        else { el.textContent = target; }
                    })(start);

                    cntObs.unobserve(el);
                });
            }, { threshold: 0.5 });
            counters.forEach(function (c) { cntObs.observe(c); });
        }

    })();

})();
