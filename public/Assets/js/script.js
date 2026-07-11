document.addEventListener("DOMContentLoaded", function () {

    /* Scroll Glass Effect */
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.site-header');
        if (!header) return;

        if (window.scrollY > 40) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

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