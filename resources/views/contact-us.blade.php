@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('Assets/css/contact-us.css') }}?v=1.0.1">
@endsection

@section('content')

{{-- ══════════════════════════════════════════════════════════
     § 1  HERO
══════════════════════════════════════════════════════════ --}}
<section class="hero-section"
         style="background-image: url('{{ asset('Assets/Images/Contact-us/contact-us-banner.webp') }}')">
    <div class="container">
        <div class="hero-content">
            <div class="hero-title-wraper">
                <h1>Let's Build Something<br>Extraordinary Together</h1>
            </div>
            <p>
                Partner with Vetora to transform your vision into market-leading digital products.
                Our expert team is ready to bring your next big idea to life — let's talk.
            </p>
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <a href="#ct-form-sec">
                    <button class="btn btn-gradiant btn-md">
                        Start a Project <i class="bi bi-arrow-right"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     § 2  QUICK CONTACT CARDS
══════════════════════════════════════════════════════════ --}}
<section class="section">
    <div class="container">

        <div class="section-heading text-center">
            <div class="section-subtitle">
                <i class="bi bi-stars"></i> How Can We Help
            </div>
            <h2 class="section-title">
                Choose Your <span>Channel of Contact</span>
            </h2>
            <p class="section-description">
                Whether you have a general question, need technical assistance, or are looking for a media collaboration
                — we have a dedicated team ready to assist you.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="ct-qcard">
                    <div class="ct-qcard-icon ic-teal"><i class="bi bi-chat-dots-fill"></i></div>
                    <p class="ct-qcard-title">General Inquiries</p>
                    <p class="ct-qcard-desc">Questions about our services, pricing, or how we can help your business scale? Our advisors are ready to guide you.</p>
                    <a href="#ct-form-sec" class="ct-qcard-link">Get in Touch <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="ct-qcard">
                    <div class="ct-qcard-icon ic-purple"><i class="bi bi-tools"></i></div>
                    <p class="ct-qcard-title">Technical Support</p>
                    <p class="ct-qcard-desc">Experiencing an issue with a product we built? Our engineers are on standby to diagnose and resolve challenges swiftly.</p>
                    <a href="#ct-form-sec" class="ct-qcard-link">Get Support <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="ct-qcard">
                    <div class="ct-qcard-icon ic-blue"><i class="bi bi-megaphone-fill"></i></div>
                    <p class="ct-qcard-title">Media &amp; Press</p>
                    <p class="ct-qcard-desc">Journalists and publications — reach our communications team for partnerships, press kits, and media collaborations.</p>
                    <a href="#ct-form-sec" class="ct-qcard-link">Contact Media <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     § 3  CONTACT FORM   +   § 4  SERVICES INQUIRY
══════════════════════════════════════════════════════════ --}}
<section class="ct-split-sec" id="ct-form-sec">
    <div class="container">

        <div class="section-heading text-center mb-5">
            <div class="section-subtitle">
                <i class="bi bi-stars"></i> Send a Message
            </div>
            <h2 class="section-title">
                Start the <span>Conversation</span>
            </h2>
            <p class="section-description">
                Tell us about your project and select the services you're interested in — we'll
                tailor our response to match your exact needs.
            </p>
        </div>

        <div class="row g-5 align-items-start">

            {{-- § 4  Services Inquiry (left) --}}
            <div class="col-12 col-lg-5">
                <div class="ct-svc-panel">
                    <p class="section-subtitle" style="display:inline-flex;margin-bottom:14px;">
                        <i class="bi bi-stars"></i> Services Inquiry
                    </p>
                    <p class="ct-svc-h3">What Are You Looking For?</p>
                    <p class="ct-svc-desc">
                        Select the services relevant to your project. Your selection will automatically be added to your message so we can respond with precision.
                    </p>

                    <div class="ct-chips" id="ctChips">
                        <div class="ct-chip" data-svc="AI-Driven Marketing"><i class="bi bi-robot"></i> AI-Driven Marketing</div>
                        <div class="ct-chip" data-svc="Mobile App Development"><i class="bi bi-phone-fill"></i> Mobile App Development</div>
                        <div class="ct-chip" data-svc="Web Optimization"><i class="bi bi-speedometer2"></i> Web Optimization</div>
                        <div class="ct-chip" data-svc="Custom Software"><i class="bi bi-code-slash"></i> Custom Software</div>
                        <div class="ct-chip" data-svc="Cloud Architecture"><i class="bi bi-cloud-fill"></i> Cloud Architecture</div>
                        <div class="ct-chip" data-svc="UI/UX Design"><i class="bi bi-layers-fill"></i> UI/UX Design</div>
                        <div class="ct-chip" data-svc="E-commerce Solutions"><i class="bi bi-bag-fill"></i> E-commerce</div>
                        <div class="ct-chip" data-svc="Data Analytics"><i class="bi bi-bar-chart-fill"></i> Data Analytics</div>
                        <div class="ct-chip" data-svc="Cybersecurity"><i class="bi bi-shield-lock-fill"></i> Cybersecurity</div>
                    </div>

                    <div class="ct-chip-prev" id="ctPrev">
                        <span class="cp-lbl">Selected Services</span>
                        <p id="ctPrevTxt"></p>
                    </div>

                    <div class="ct-svc-note">
                        <div class="sn-ico"><i class="bi bi-info-circle-fill"></i></div>
                        <p>
                            <strong>Not sure what you need?</strong>
                            Describe your project in the message and we'll recommend the right services for you.
                        </p>
                    </div>
                </div>
            </div>

            {{-- § 3  Contact Form (right) --}}
            <div class="col-12 col-lg-7">
                <div class="ct-form-card">
                    <div class="ct-form-head">
                        <h3>Your Details</h3>
                        <p>
                            We typically respond within 2 business hours.
                            <span class="ct-resp">
                                <i class="bi bi-lightning-charge-fill" style="font-size:9px;"></i>
                                Avg. reply &lt; 2hrs
                            </span>
                        </p>
                    </div>
                    @include('common.contact-form')
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     § 5  OFFICE LOCATION
══════════════════════════════════════════════════════════ --}}
<section class="section" id="ct-offices-sec">
    <div class="container">

        <div class="section-heading text-center">
            <div class="section-subtitle"><i class="bi bi-stars"></i> Our Office</div>
            <h2 class="section-title">
                Visit <span>Our Office</span>
            </h2>
            <p class="section-description">
                Based in Melbourne, Australia — our team is ready to connect with you in person or remotely
                to deliver world-class technology solutions.
            </p>
        </div>

        <div class="row g-4 align-items-center">

            {{-- Left — Image --}}
            <div class="col-12 col-lg-6">
                <div class="ct-office-img-wrap">
                    <img src="{{ asset('Assets/Images/Contact-us/contact-address.webp') }}" alt="Vetora Office Melbourne" class="ct-office-img">
                </div>
            </div>

            {{-- Right — Office Card --}}
            <div class="col-12 col-lg-6">
                <div class="ct-ocard feat">
                    <span class="ct-obadge b-t">
                        <i class="bi bi-star-fill" style="font-size:9px;"></i>
                        Our Office
                    </span>
                    <div class="ct-ocity">Melbourne</div>
                    <div class="ct-ocountry">Victoria, Australia</div>
                    <ul class="ct-olist">
                        <li><i class="bi bi-geo-alt-fill"></i><span>66 Victor Cres, Narre Warren VIC 3805, Australia</span></li>
                        <li><i class="bi bi-envelope-fill"></i><span>info@vetora.au</span></li>
                        <li><i class="bi bi-telephone-fill"></i><span>+61 416 819 190</span></li>
                        <li><i class="bi bi-clock-fill"></i><span>Mon – Fri, 9:00 AM – 6:00 PM AEST</span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════
     § 6  BUSINESS HOURS
══════════════════════════════════════════════════════════ --}}
<section class="section">
    <div class="container">

        <div class="section-heading text-center">
            <div class="section-subtitle"><i class="bi bi-stars"></i> Availability</div>
            <h2 class="section-title">
                Business <span>Hours</span>
            </h2>
            <p class="section-description">
                Our teams operate across multiple timezones. Primary support hours are listed
                below in Australia Eastern Standard Time (AEST, UTC+10).
            </p>
        </div>

        <div class="ct-hcard">
            <div class="ct-hcard-top">
                <h3>Operating Schedule <span>— AEST (UTC +10)</span></h3>
                <div class="ct-status" id="ctStatus">
                    <span class="sd"></span>
                    <span id="ctStatusTxt">Checking…</span>
                </div>
            </div>

            <table class="ct-htbl" id="ctHtbl">
                <tbody>
                    <tr data-d="1"><td class="hd">Monday</td><td class="ht">9:00 AM – 5:00 PM</td></tr>
                    <tr data-d="2"><td class="hd">Tuesday</td><td class="ht">9:00 AM – 5:00 PM</td></tr>
                    <tr data-d="3"><td class="hd">Wednesday</td><td class="ht">9:00 AM – 5:00 PM</td></tr>
                    <tr data-d="4"><td class="hd">Thursday</td><td class="ht">9:00 AM – 5:00 PM</td></tr>
                    <tr data-d="5"><td class="hd">Friday</td><td class="ht">9:00 AM – 5:00 PM</td></tr>
                    <tr data-d="6"><td class="hd">Saturday</td><td class="hc">Closed</td></tr>
                    <tr data-d="0"><td class="hd">Sunday</td><td class="hc">Closed</td></tr>
                </tbody>
            </table>

            <div class="ct-hfooter">
                <i class="bi bi-info-circle-fill"></i>
                <p>
                    All hours are in <strong>Australia Eastern Standard Time (AEST, UTC+10)</strong>.
                    For urgent enquiries outside business hours, email
                    <strong>info@vetora.au</strong> — we respond at the earliest opportunity.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection

@section('scripts')
<script>
(function () {

    /* ─── § 4  Service chip multi-select ─── */
    var chips   = document.querySelectorAll('#ctChips .ct-chip');
    var prev    = document.getElementById('ctPrev');
    var prevTxt = document.getElementById('ctPrevTxt');
    var msgBox  = document.querySelector('.Contact-Form .message-field');
    var chosen  = [];

    chips.forEach(function (chip) {
        chip.addEventListener('click', function () {
            var svc = this.getAttribute('data-svc');
            var idx = chosen.indexOf(svc);
            if (idx > -1) { chosen.splice(idx, 1); this.classList.remove('on'); }
            else           { chosen.push(svc);      this.classList.add('on'); }

            if (chosen.length > 0) {
                prev.classList.add('vis');
                prevTxt.textContent = chosen.join(' · ');
                if (msgBox) {
                    var stripped = msgBox.value.replace(/^Services of interest:.*\n\n/, '');
                    msgBox.value = 'Services of interest: ' + chosen.join(', ') + '\n\n' + stripped;
                }
            } else {
                prev.classList.remove('vis');
                if (msgBox) msgBox.value = msgBox.value.replace(/^Services of interest:.*\n\n/, '');
            }
        });
    });

    /* ─── § 6  Business hours Open / Closed (AEST) ─── */
    var badge    = document.getElementById('ctStatus');
    var badgeTxt = document.getElementById('ctStatusTxt');

    function aestNow() {
        var now = new Date();
        return new Date(now.getTime() + (now.getTimezoneOffset() + 600) * 60000);
    }

    function refreshHours() {
        var t   = aestNow();
        var day = t.getDay();
        var min = t.getHours() * 60 + t.getMinutes();
        var open = (day >= 1 && day <= 5 && min >= 540 && min < 1020);

        badge.className    = 'ct-status ' + (open ? 'open' : 'closed');
        badgeTxt.textContent = open ? 'Currently Open' : 'Currently Closed';

        document.querySelectorAll('#ctHtbl tr[data-d]').forEach(function (r) {
            r.classList.toggle('cur', parseInt(r.getAttribute('data-d')) === day);
        });
    }

    refreshHours();
    setInterval(refreshHours, 60000);

    /* ─── Smooth scroll for anchor links ─── */
    document.querySelectorAll('a[href^="#ct-"]').forEach(function (a) {
        a.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        });
    });

})();
</script>
@endsection
