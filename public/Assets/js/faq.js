'use strict';

(function () {

    /* ================================================================
       JS-DRIVEN STICKY SIDEBAR
       Works even when a parent has overflow-x: hidden/clip, which
       can trap CSS position:sticky inside it.
       ================================================================ */
    /* Sticky handled by CSS position:sticky — no JS needed.
       (.ma-page uses overflow-x:clip which does not create a scroll
        container, so CSS sticky works correctly.) */

    /* ================================================================
       ACCORDION  —  single-open, full keyboard nav
       ================================================================ */
    function FAQAccordion(list) {
        this.list    = list;
        this.items   = Array.from(list.querySelectorAll('.faq-item'));
        this.current = null;
        this._bindEvents();
    }

    FAQAccordion.prototype._bindEvents = function () {
        var self = this;
        this.items.forEach(function (item) {
            var trigger = item.querySelector('.faq-item__trigger');
            if (!trigger) return;

            trigger.addEventListener('click', function () {
                self._toggle(item);
            });

            trigger.addEventListener('keydown', function (e) {
                switch (e.key) {
                    case 'Enter':
                    case ' ':
                        e.preventDefault();
                        self._toggle(item);
                        break;
                    case 'ArrowDown':
                        e.preventDefault();
                        self._shift(item, 1);
                        break;
                    case 'ArrowUp':
                        e.preventDefault();
                        self._shift(item, -1);
                        break;
                    case 'Home':
                        e.preventDefault();
                        self._focusTrigger(self.items[0]);
                        break;
                    case 'End':
                        e.preventDefault();
                        self._focusTrigger(self.items[self.items.length - 1]);
                        break;
                }
            });
        });
    };

    FAQAccordion.prototype._toggle = function (item) {
        var isOpen = item.classList.contains('faq-item--open');
        if (this.current && this.current !== item) this._close(this.current);
        isOpen ? this._close(item) : this._open(item);
    };

    FAQAccordion.prototype._open = function (item) {
        item.classList.add('faq-item--open');
        item.querySelector('.faq-item__trigger').setAttribute('aria-expanded', 'true');
        this.current = item;
    };

    FAQAccordion.prototype._close = function (item) {
        item.classList.remove('faq-item--open');
        item.querySelector('.faq-item__trigger').setAttribute('aria-expanded', 'false');
        if (this.current === item) this.current = null;
    };

    FAQAccordion.prototype._shift = function (item, dir) {
        var idx  = this.items.indexOf(item);
        var next = this.items[idx + dir];
        if (next) this._focusTrigger(next);
    };

    FAQAccordion.prototype._focusTrigger = function (item) {
        var t = item.querySelector('.faq-item__trigger');
        if (t) t.focus();
    };

    /* ================================================================
       SCROLL REVEAL  —  section visible → badge+heading, then items stagger
       ================================================================ */
    function initReveal(section) {
        var items = Array.from(section.querySelectorAll('.faq-item'));

        var obs = new IntersectionObserver(function (entries) {
            if (!entries[0].isIntersecting) return;
            obs.disconnect();

            /* Trigger sidebar CSS transitions (badge + heading) */
            section.classList.add('faq-section--visible');

            /* Stagger items */
            items.forEach(function (item, i) {
                setTimeout(function () {
                    item.classList.add('faq-item--visible');
                }, i * 90);
            });
        }, { threshold: 0.04 });

        obs.observe(section);
    }

    /* ================================================================
       INIT
       ================================================================ */
    function init() {
        var section = document.getElementById('faqSection');
        if (!section) return;

        /* Accordion */
        var list = section.querySelector('.faq-section__list');
        if (list) new FAQAccordion(list);

        /* Scroll reveal */
        initReveal(section);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
