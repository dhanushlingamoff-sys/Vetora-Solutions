document.addEventListener("DOMContentLoaded", function () {

    /* Scroll Glass Effect (rAF Throttled) */
    var header = document.querySelector('.site-header');
    var isTicking = false;

    window.addEventListener('scroll', function () {
        if (!isTicking) {
            window.requestAnimationFrame(function () {
                if (!header) header = document.querySelector('.site-header');
                if (header) {
                    if (window.scrollY > 40) {
                        header.classList.add('scrolled');
                    } else {
                        header.classList.remove('scrolled');
                    }
                }
                isTicking = false;
            });
            isTicking = true;
        }
    }, { passive: true });

    /* Mobile Menu Toggle */
    const toggleBtn = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const icon = toggleBtn ? toggleBtn.querySelector('i') : null;

    if (toggleBtn && navMenu && icon) {
        toggleBtn.addEventListener('click', function () {
            navMenu.classList.toggle('show');

            if (navMenu.classList.contains('show')) {
                icon.classList.remove('bi-list');
                icon.classList.add('bi-x-lg');
            } else {
                icon.classList.remove('bi-x-lg');
                icon.classList.add('bi-list');
            }
        });
    }

    /* Close on Link Click */
    document.querySelectorAll('.nav-menu a').forEach(link => {
        link.addEventListener('click', () => {

            if (link.closest('.dropdown')) return;
            
            navMenu.classList.remove('show');
            icon.classList.remove('bi-x-lg');
            icon.classList.add('bi-list');
        });
    });

    /* Count animation - mobile-app */

    const counters = document.querySelectorAll(".count");

    const startCounting = (counter) => {
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const speed = target / 100; // adjust speed here

        const updateCount = () => {
            count += speed;

            if (count < target) {
                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounting(entry.target);
                observer.unobserve(entry.target); // run only once
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(counter => {
        observer.observe(counter);
    });

});

/* ── Global On-Demand Lazy Loader for jQuery + Owl Carousel ── */
window.loadJQueryOwl = function (callback) {
    if (window.jQuery && window.jQuery.fn && window.jQuery.fn.owlCarousel) {
        if (callback) callback(window.jQuery);
        return;
    }
    if (window.__jqOwlLoading) {
        window.addEventListener('jqOwlReady', function () {
            if (callback) callback(window.jQuery);
        }, { once: true });
        return;
    }
    window.__jqOwlLoading = true;

    function loadScript(src, cb) {
        var s = document.createElement('script');
        s.src = src;
        s.async = true;
        s.onload = cb;
        document.head.appendChild(s);
    }

    var jqUrl = 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js';
    var owlUrl = 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js';

    var bootOwl = function () {
        loadScript(owlUrl, function () {
            window.__jqOwlLoading = false;
            window.dispatchEvent(new CustomEvent('jqOwlReady'));
            if (callback) callback(window.jQuery);
        });
    };

    if (!window.jQuery) {
        loadScript(jqUrl, bootOwl);
    } else {
        bootOwl();
    }
};

window.observeAndInitOwl = function (selector, initFn) {
    var els = document.querySelectorAll(selector);
    if (!els.length) return;

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries, obs) {
            var isAnyNear = entries.some(function (e) { return e.isIntersecting; });
            if (isAnyNear) {
                obs.disconnect();
                window.loadJQueryOwl(function () {
                    initFn();
                });
            }
        }, { rootMargin: '400px 0px' });

        els.forEach(function (el) { observer.observe(el); });
    } else {
        window.loadJQueryOwl(function () {
            initFn();
        });
    }
};