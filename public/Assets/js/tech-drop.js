/* =====================================================================
   OUR TECHNOLOGIES — falling capsules (Matter.js physics + DOM sync)
   Capsules drop from above, tumble, collide and pile up when the section
   scrolls into view. Users can drag/throw them. Falls back gracefully to a
   static layout if Matter.js is unavailable or motion is reduced.
   ===================================================================== */
(function () {
    'use strict';

    function init() {
        var stage = document.getElementById('techStage');
        if (!stage) return;

        var caps = Array.prototype.slice.call(stage.querySelectorAll('.tech-cap'));
        if (!caps.length) return;

        var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        /* No physics engine / reduced motion → lay the capsules out statically
           so the content is always visible and usable. */
        if (reduce || !window.Matter) {
            staticLayout();
            return;
        }

        var M = window.Matter;
        var engine, runner, mouseConstraint, bodies = [], raf = null, started = false;

        function staticLayout() {
            var x = 0, y = 0, rowH = 0, W = stage.clientWidth || 520, pad = 8;
            caps.forEach(function (cap) {
                cap.style.position = 'relative';
                cap.style.opacity = '1';
                cap.style.transform = 'none';
                cap.style.display = 'inline-flex';
                cap.style.margin = '6px';
            });
            stage.style.display = 'flex';
            stage.style.flexWrap = 'wrap';
            stage.style.alignContent = 'flex-end';
        }

        function build() {
            var W = stage.clientWidth;
            var H = stage.clientHeight;

            engine = M.Engine.create();
            engine.gravity.y = 1.1;

            var t = 120; /* wall thickness (thick so nothing tunnels out) */
            var opts = { isStatic: true, restitution: 0.2 };
            var floor = M.Bodies.rectangle(W / 2, H + t / 2, W + t * 2, t, opts);
            var left  = M.Bodies.rectangle(-t / 2, H / 2, t, H * 4, opts);
            var right = M.Bodies.rectangle(W + t / 2, H / 2, t, H * 4, opts);
            M.World.add(engine.world, [floor, left, right]);

            bodies = caps.map(function (cap, i) {
                var w = cap.offsetWidth;
                var h = cap.offsetHeight;
                var x = 40 + Math.random() * Math.max(1, (W - 80 - w)) + w / 2;
                /* Start just above the stage top (which sits below the About
                   Company button) with a small stagger, so — combined with the
                   stage's overflow:hidden — they appear to drop in from below
                   the button rather than from the top of the section. */
                var y = -(h / 2) - 12 - i * 40 - Math.random() * 24;
                var body = M.Bodies.rectangle(x, y, w, h, {
                    chamfer: { radius: h / 2 },
                    restitution: 0.35,
                    friction: 0.45,
                    frictionAir: 0.02,
                    angle: (Math.random() - 0.5) * 0.7
                });
                body.__w = w;
                body.__h = h;
                body.__el = cap;
                return body;
            });
            M.World.add(engine.world, bodies);

            /* Drag / throw interaction */
            var mouse = M.Mouse.create(stage);
            mouseConstraint = M.MouseConstraint.create(engine, {
                mouse: mouse,
                constraint: { stiffness: 0.2, render: { visible: false } }
            });
            M.World.add(engine.world, mouseConstraint);
            /* let the page keep scrolling over the stage (Matter binds wheel by default) */
            if (mouse.element) {
                mouse.element.removeEventListener('wheel', mouse.mousewheel);
                mouse.element.removeEventListener('DOMMouseScroll', mouse.mousewheel);
            }

            runner = M.Runner.create();
        }

        function tick() {
            for (var i = 0; i < bodies.length; i++) {
                var b = bodies[i], el = b.__el;
                el.style.opacity = '1';
                el.style.transform =
                    'translate(' + (b.position.x - b.__w / 2).toFixed(2) + 'px,' +
                    (b.position.y - b.__h / 2).toFixed(2) + 'px) rotate(' + b.angle.toFixed(3) + 'rad)';
            }
            raf = requestAnimationFrame(tick);
        }

        function start() {
            if (started) return;
            started = true;
            build();
            M.Runner.run(runner, engine);
            tick();
        }

        function destroy() {
            if (!started) return;
            if (raf) cancelAnimationFrame(raf);
            M.Runner.stop(runner);
            M.World.clear(engine.world, false);
            M.Engine.clear(engine);
            started = false;
        }

        /* Drop when the section scrolls into view */
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) { start(); io.disconnect(); }
            });
        }, { threshold: 0.2 });
        io.observe(stage);

        /* Re-drop on resize so the pile refits the new width */
        var rt;
        window.addEventListener('resize', function () {
            clearTimeout(rt);
            rt = setTimeout(function () {
                if (!started) return;
                destroy();
                caps.forEach(function (c) { c.style.opacity = '0'; c.style.transform = 'translate(-300px,-300px)'; });
                start();
            }, 300);
        });
    }

    if (document.readyState !== 'loading') init();
    else document.addEventListener('DOMContentLoaded', init);
})();
