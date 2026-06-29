<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MJKLGCLQ');</script>
    <!-- End Google Tag Manager -->

    <script>if ('scrollRestoration' in history) history.scrollRestoration = 'manual';</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="fOl2jW33C0suewBwVp7GCEJxpudxduc0G2tTSK3wfks">
    <link rel="shortcut icon" href="{{ asset('Assets/Images/logo.png') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Livvic:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <script src="https://www.google.com/recaptcha/api.js?onload=vetoraRecaptchaLoad&render=explicit" async defer></script>

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('Assets/css/style.css') }}?v=1.0.2">
    <link rel="stylesheet" href="{{ asset('Assets/css/resources.css') }}?v=1.0.2">
    @yield('styles')

    {{-- intl-tel-input v19 — international phone flag + dial-code dropdown --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/css/intlTelInput.css">
    <style>
        /* Force intl-tel-input wrapper to fill its parent column */
        .iti {
            display: block !important;
            width: 100%;
        }

        .iti__tel-input {
            width: 100% !important;
        }

        /* Remove the 1px inset padding that makes the flag button shorter than the input */
        /* Add a right border as a visual separator between the dial-code badge and the text input */
        .Contact-Form .iti__flag-container {
            padding: 0;
            /* Inset 1px so the input's own border isn't covered by this background */
            top: 1px;
            bottom: 1px;
            left: 1px;
            border-right: 1px solid rgb(149, 148, 148);
            background-color: #eaf0fb;
            border-radius: 4px 0 0 4px;
        }

        /* Stretch the flag+dial-code button to match the full input height */
        .Contact-Form .iti__selected-flag {
            height: 100%;
        }

        /*
         * intl-tel-input wraps the <input> in a .iti div.
         * clear:both breaks out of the floated label above it;
         * margin-top matches the .mt-1 spacing the other inputs use.
         */
        .Contact-Form .iti {
            margin-top: 0.25rem;
            clear: both;
        }
    </style>

    @yield('meta')
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJKLGCLQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @hasSection('page-header')
        @yield('page-header')
    @else
        @include('partials.header')
    @endif

    <div class="main-content">
        @yield('content')
    </div>

    <!-- Modal -->
    <div class="modal fade quote-modal" id="quoteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <!-- Close -->
                <button type="button" class="custom-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>

                <div class="row g-0">

                    <div class="form-bg"></div>

                    <!-- Left Content -->
                    <div class="col-lg-6" style="z-index: 1">
                        <div class="quote-left">

                            <div class="top-content">
                                <h2>Let's get you set up.</h2>

                                <p>
                                    We specialize in building scalable, secure, and
                                    high-performance software solutions that help
                                    businesses streamline operations and stay ahead
                                    of the competition.
                                </p>
                            </div>

                            <div class="bottom-content">
                                <h3>
                                    More than four million businesses around the world.
                                </h3>

                                <div class="sponsor-slider">

                                    <div class="slider-track">

                                        <!-- Set 1 -->
                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/ateam.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/capso.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/dots.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/abhi.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/WFB.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/qrooze.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/allswell.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/allo.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <!-- Duplicate Set -->
                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/ateam.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/capso.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/dots.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/abhi.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/WFB.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/qrooze.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/allswell.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                        <div class="sponsor">
                                            <div class="sponsor-card">
                                                <img src="{{ asset('Assets/Images/Mobile-App/clients-2/allo.webp') }}"
                                                    alt="">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Right Form -->
                    <div class="col-lg-6" style="z-index: 1">
                        <div class="form-part2-container">
                            <h4>Start your business</h4>
                            @include('common.contact-form')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/61416819190" class="wa-float" target="_blank">

        <i class="bi bi-whatsapp"></i>

        <span class="wa-tooltip">
            Chat With Vetora
        </span>

    </a>

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="{{ asset('Assets/js/script.js') }}?v=1.0.2"></script>

    {{-- intl-tel-input JS — must be loaded before the inline initialization below --}}
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/intlTelInput.min.js"></script>


    <script>
        $('.dropdown > a').click(function(e) {
            if ($(window).width() < 992) {
                e.preventDefault();
                e.stopPropagation(); // ✅ THIS IS THE FIX

                let parent = $(this).parent();

                // close other dropdowns
                $('.dropdown').not(parent).removeClass('active');
                $('.mega-menu').not(parent.find('.mega-menu')).removeClass('show');

                // toggle current
                parent.toggleClass('active');
                parent.find('.mega-menu').toggleClass('show');
            }
        });
    </script>

    {{-- intl-tel-input initialization + contact form validation --}}
    <script>
        // ── intl-tel-input: initialise every phone field on the page ──────────
        var itiMap = new Map(); // phoneEl → iti instance

        document.querySelectorAll('.phone-field').forEach(function(phoneEl) {
            var instance = window.intlTelInput(phoneEl, {
                initialCountry: 'au',
                geoIpLookup: function(callback) {
                    fetch('https://ipapi.co/json')
                        .then(function(res) { return res.json(); })
                        .then(function(data) { callback(data.country_code); })
                        .catch(function() { callback('au'); });
                },
                separateDialCode: true,
                utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js'
            });
            itiMap.set(phoneEl, instance);
        });

        // ── reCAPTCHA: explicit render so each widget ID is tracked per form ──
        var captchaWidgetIds = new Map(); // captchaEl → widgetId

        function vetoraRecaptchaLoad() {
            document.querySelectorAll('.g-recaptcha').forEach(function(el) {
                var widgetId = grecaptcha.render(el, {
                    sitekey: el.getAttribute('data-sitekey')
                });
                captchaWidgetIds.set(el, widgetId);
            });
        }

        // ── Validation: works for every .Contact-Form on the page ─────────────
        document.querySelectorAll('.Contact-Form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                var isValid = true;

                var firstName = form.querySelector('.first-name-field');
                var lastName  = form.querySelector('.last-name-field');
                var email     = form.querySelector('.email-field');
                var phoneEl   = form.querySelector('.phone-field');
                var iti       = itiMap.get(phoneEl);
                var captchaEl = form.querySelector('.g-recaptcha');
                var widgetId  = captchaWidgetIds.get(captchaEl);
                var captcha   = (widgetId !== undefined) ? grecaptcha.getResponse(widgetId) : '';

                // Clear all previous inline errors within this form
                form.querySelectorAll('.error').forEach(function(el) {
                    el.innerText = '';
                });

                // --- First name ---
                if (firstName.value.trim() === '') {
                    form.querySelector('.first-name-error').innerText = 'First name is required';
                    isValid = false;
                } else if (firstName.value.trim().length < 2) {
                    form.querySelector('.first-name-error').innerText =
                        'First name must be at least 2 characters';
                    isValid = false;
                }

                // --- Last name ---
                if (lastName.value.trim() === '') {
                    form.querySelector('.last-name-error').innerText = 'Last name is required';
                    isValid = false;
                } else if (lastName.value.trim().length < 2) {
                    form.querySelector('.last-name-error').innerText =
                        'Last name must be at least 2 characters';
                    isValid = false;
                }

                // --- Phone (intl-tel-input) ---
                if (iti) {
                    var rawPhone = phoneEl.value.trim();
                    if (!rawPhone) {
                        form.querySelector('.phone-error').innerText = 'Phone number is required';
                        isValid = false;
                    } else if (!iti.isValidNumber()) {
                        form.querySelector('.phone-error').innerText = 'Enter a valid phone number';
                        isValid = false;
                    } else {
                        form.querySelector('[name="full_phone"]').value = iti.getNumber();
                    }
                }

                // --- Email ---
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[A-Za-z]{2,}$/;
                if (!emailPattern.test(email.value.trim())) {
                    form.querySelector('.email-error').innerText = 'Enter a valid email address';
                    isValid = false;
                }

                // --- reCAPTCHA ---
                if (captcha.length === 0) {
                    form.querySelector('.captcha-error').innerText = 'Please verify captcha';
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                    return;
                }

                // Show loading indicator while the request is in flight
                form.querySelector('.btn-text').style.display = 'none';
                form.querySelector('.btn-loader').style.display = 'inline-flex';
            });
        });
    </script>



</body>

</html>
