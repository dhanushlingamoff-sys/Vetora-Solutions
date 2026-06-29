/* ===================================================================
   AI AGENCY LANDING PAGE — animations & interactions
   Requires: GSAP + ScrollTrigger, Swiper, CountUp (all loaded via CDN
   in AI.blade.php before this file).
=================================================================== */
(function () {
    "use strict";

    var page = document.querySelector(".aia-page");
    if (!page) return;

    var prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    if (window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);
    }

    /* ---------------------------------------------------------------
       Smooth scroll for in-page anchors
    --------------------------------------------------------------- */
    document.documentElement.style.scrollBehavior = "smooth";

    /* ---------------------------------------------------------------
       Scroll progress bar
    --------------------------------------------------------------- */
    var progressBar = document.querySelector(".aia-scroll-progress");
    function updateProgress() {
        var h = document.documentElement;
        var scrolled = (h.scrollTop) / (h.scrollHeight - h.clientHeight) * 100;
        if (progressBar) progressBar.style.width = (scrolled || 0) + "%";
    }
    window.addEventListener("scroll", updateProgress, { passive: true });
    updateProgress();

    /* ---------------------------------------------------------------
       Cursor follow glow (desktop only, lerped for smoothness)
    --------------------------------------------------------------- */
    var glow = document.querySelector(".aia-cursor-glow");
    if (glow && !prefersReducedMotion) {
        var gx = window.innerWidth / 2, gy = window.innerHeight / 2;
        var tx = gx, ty = gy;
        window.addEventListener("mousemove", function (e) {
            tx = e.clientX;
            ty = e.clientY;
        });
        (function loop() {
            gx += (tx - gx) * 0.12;
            gy += (ty - gy) * 0.12;
            glow.style.transform = "translate(" + gx + "px," + gy + "px) translate(-50%,-50%)";
            requestAnimationFrame(loop);
        })();
    }

    /* ---------------------------------------------------------------
       Floating particle network (canvas)
    --------------------------------------------------------------- */
    var particleHost = document.querySelector(".aia-particles");
    if (particleHost && !prefersReducedMotion) {
        var canvas = document.createElement("canvas");
        particleHost.appendChild(canvas);
        var ctx = canvas.getContext("2d");
        var particles = [];
        var COUNT = window.innerWidth < 768 ? 22 : 46;

        function resize() {
            canvas.width = particleHost.offsetWidth;
            canvas.height = particleHost.offsetHeight;
        }
        function makeParticles() {
            particles = [];
            for (var i = 0; i < COUNT; i++) {
                particles.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    vx: (Math.random() - 0.5) * 0.25,
                    vy: (Math.random() - 0.5) * 0.25,
                    r: Math.random() * 1.8 + 0.6
                });
            }
        }
        resize();
        makeParticles();
        window.addEventListener("resize", function () {
            resize();
            makeParticles();
        });

        function tick() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (var i = 0; i < particles.length; i++) {
                var p = particles[i];
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
                if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = "rgba(124, 58, 237, 0.55)";
                ctx.fill();

                for (var j = i + 1; j < particles.length; j++) {
                    var q = particles[j];
                    var dx = p.x - q.x, dy = p.y - q.y;
                    var dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < 130) {
                        ctx.beginPath();
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(q.x, q.y);
                        ctx.strokeStyle = "rgba(37, 99, 235," + (0.18 * (1 - dist / 130)) + ")";
                        ctx.lineWidth = 1;
                        ctx.stroke();
                    }
                }
            }
            requestAnimationFrame(tick);
        }
        tick();
    }

    /* ---------------------------------------------------------------
       Hero entrance sequence
    --------------------------------------------------------------- */
    if (window.gsap) {
        var heroTl = gsap.timeline({ defaults: { ease: "power3.out" } });
        heroTl
            .from(".aia-hero-badge", { y: -16, opacity: 0, duration: 0.6 })
            .from(".aia-hero h1 .aia-word", { y: 40, opacity: 0, duration: 0.7, stagger: 0.06 }, "-=0.3")
            .from(".aia-hero-desc", { y: 20, opacity: 0, duration: 0.6 }, "-=0.3")
            .from(".aia-hero-actions a", { y: 20, opacity: 0, duration: 0.5, stagger: 0.1 }, "-=0.3")
            .from(".aia-hero-stats .aia-hero-stat", { y: 16, opacity: 0, duration: 0.5, stagger: 0.08 }, "-=0.2")
            .from(".aia-hero-visual", { scale: 0.85, opacity: 0, duration: 0.8 }, "-=0.7")
            .from(".aia-float-card", { y: 30, opacity: 0, duration: 0.6, stagger: 0.12 }, "-=0.5");
    }

    /* ---------------------------------------------------------------
       Hero visual mouse parallax
    --------------------------------------------------------------- */
    var heroVisual = document.querySelector(".aia-hero-visual");
    var heroCore = document.querySelector(".aia-hero-core");
    if (heroVisual && heroCore && !prefersReducedMotion) {
        heroVisual.addEventListener("mousemove", function (e) {
            var rect = heroVisual.getBoundingClientRect();
            var x = ((e.clientX - rect.left) / rect.width - 0.5) * 24;
            var y = ((e.clientY - rect.top) / rect.height - 0.5) * 24;
            heroCore.style.transform = "translate(calc(-50% + " + x + "px), calc(-50% + " + y + "px))";
        });
        heroVisual.addEventListener("mouseleave", function () {
            heroCore.style.transform = "translate(-50%, -50%)";
        });
    }

    /* ---------------------------------------------------------------
       Generic scroll-reveal via data-reveal="up|left|right|scale"
    --------------------------------------------------------------- */
    if (window.gsap && window.ScrollTrigger) {
        var fromMap = {
            up: { y: 50, opacity: 0 },
            down: { y: -50, opacity: 0 },
            left: { x: -60, opacity: 0 },
            right: { x: 60, opacity: 0 },
            scale: { scale: 0.85, opacity: 0 }
        };

        document.querySelectorAll("[data-reveal]").forEach(function (el) {
            var type = el.getAttribute("data-reveal") || "up";
            var delay = parseFloat(el.getAttribute("data-reveal-delay") || "0");
            gsap.from(el, {
                ...fromMap[type],
                duration: 0.8,
                delay: delay,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: el,
                    start: "top 88%",
                    toggleActions: "play none none none"
                }
            });
        });

        document.querySelectorAll("[data-reveal-group]").forEach(function (group) {
            var items = group.querySelectorAll("[data-reveal-item]");
            if (!items.length) return;
            gsap.from(items, {
                y: 40,
                opacity: 0,
                duration: 0.7,
                stagger: 0.1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: group,
                    start: "top 85%",
                    toggleActions: "play none none none"
                }
            });
        });
    }

    /* ---------------------------------------------------------------
       Counters (CountUp.js with ScrollTrigger, graceful fallback)
    --------------------------------------------------------------- */
    document.querySelectorAll(".aia-counter").forEach(function (el) {
        var target = parseFloat(el.getAttribute("data-count")) || 0;
        var suffix = el.getAttribute("data-suffix") || "";
        var started = false;

        function run() {
            if (started) return;
            started = true;
            if (window.CountUp) {
                var counter = new window.CountUp(el, target, {
                    duration: 2,
                    suffix: suffix
                });
                counter.start();
            } else {
                var current = 0;
                var step = Math.max(1, Math.ceil(target / 60));
                var timer = setInterval(function () {
                    current += step;
                    if (current >= target) { current = target; clearInterval(timer); }
                    el.textContent = current + suffix;
                }, 25);
            }
        }

        if (window.ScrollTrigger) {
            ScrollTrigger.create({
                trigger: el,
                start: "top 90%",
                onEnter: run
            });
        } else {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) run();
                });
            }, { threshold: 0.4 });
            observer.observe(el);
        }
    });

    /* ---------------------------------------------------------------
       Process timeline — line draw + step activation
    --------------------------------------------------------------- */
    var tlFill = document.querySelector(".aia-tl-line-fill");
    var tlWrap = document.querySelector(".aia-timeline");
    if (tlFill && tlWrap && window.gsap && window.ScrollTrigger) {
        gsap.to(tlFill, {
            height: "100%",
            ease: "none",
            scrollTrigger: {
                trigger: tlWrap,
                start: "top 70%",
                end: "bottom 60%",
                scrub: true
            }
        });
    }
    document.querySelectorAll(".aia-tl-item").forEach(function (item) {
        if (window.ScrollTrigger) {
            ScrollTrigger.create({
                trigger: item,
                start: "top 65%",
                onEnter: function () { item.classList.add("aia-active"); },
            });
        } else {
            item.classList.add("aia-active");
        }
    });

    /* ---------------------------------------------------------------
       Trusted-by marquee — duplicate track content for seamless loop
    --------------------------------------------------------------- */
    document.querySelectorAll(".aia-marquee-track").forEach(function (track) {
        if (track.dataset.cloned) return;
        track.innerHTML += track.innerHTML;
        track.dataset.cloned = "true";
    });

    /* ---------------------------------------------------------------
       AI Technology showcase tabs
    --------------------------------------------------------------- */
    var techTabs = document.querySelectorAll(".aia-tech-tab");
    var techPanels = document.querySelectorAll(".aia-tech-panel");
    techTabs.forEach(function (tab) {
        tab.addEventListener("click", function () {
            var target = tab.getAttribute("data-tab");

            techTabs.forEach(function (t) { t.classList.remove("active"); });
            tab.classList.add("active");

            techPanels.forEach(function (panel) {
                if (panel.getAttribute("data-tab") === target) {
                    panel.classList.add("active");
                    if (window.gsap) {
                        gsap.fromTo(panel, { opacity: 0, y: 14 }, { opacity: 1, y: 0, duration: 0.45, ease: "power2.out" });
                    }
                } else {
                    panel.classList.remove("active");
                }
            });
        });
    });

    /* ---------------------------------------------------------------
       Why-choose-us tilt cards
    --------------------------------------------------------------- */
    if (!prefersReducedMotion) {
        document.querySelectorAll(".aia-why-card").forEach(function (card) {
            card.addEventListener("mousemove", function (e) {
                var rect = card.getBoundingClientRect();
                var px = (e.clientX - rect.left) / rect.width;
                var py = (e.clientY - rect.top) / rect.height;
                var rotateX = (0.5 - py) * 10;
                var rotateY = (px - 0.5) * 10;
                card.style.transform = "perspective(700px) rotateX(" + rotateX + "deg) rotateY(" + rotateY + "deg) translateY(-4px)";
                card.style.setProperty("--mx", (px * 100) + "%");
                card.style.setProperty("--my", (py * 100) + "%");
            });
            card.addEventListener("mouseleave", function () {
                card.style.transform = "perspective(700px) rotateX(0) rotateY(0) translateY(0)";
            });
        });
    }

    /* ---------------------------------------------------------------
       Testimonials — Swiper
    --------------------------------------------------------------- */
    if (window.Swiper) {
        new Swiper(".aia-test-swiper", {
            loop: true,
            centeredSlides: true,
            autoplay: { delay: 3800, disableOnInteraction: false },
            speed: 800,
            spaceBetween: 24,
            pagination: { el: ".aia-test-swiper .swiper-pagination", clickable: true },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1200: { slidesPerView: 3 }
            }
        });
    }

})();
