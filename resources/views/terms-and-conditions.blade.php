@extends('layouts.app')

@section('meta')
    <title>Terms &amp; Conditions — Vetora Solutions</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/legal.css') }}?v=1.0.1">
@endsection

@section('content')

    {{-- =========================================================
         Hero
    ========================================================= --}}
    <section class="legal-hero" style="background-image: url('{{ asset('Assets/Images/terms-and-condition.png') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="legal-hero-badge">
                        <i class="bi bi-file-earmark-ruled"></i>
                        Legal
                    </div>
                    <h1 class="legal-hero-title">Terms &amp; Conditions</h1>
                    <p class="legal-hero-desc">
                        These terms govern your use of Vetora's website and services. Please read
                        them carefully before engaging with us.
                    </p>
                    <div class="legal-hero-meta">
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-calendar3"></i> Last updated: 1 June 2025
                        </span>
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-geo-alt"></i> Jurisdiction: Australia & International
                        </span>
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-file-earmark-text"></i> Version 3.0
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tab Navigation --}}
    <div class="legal-tab-bar">
        <div class="container">
            <nav class="legal-tab-nav">
                <a href="{{ url('/privacy-policy') }}" class="legal-tab">
                    <i class="bi bi-shield-check"></i> Privacy Policy
                </a>
                <a href="{{ url('/terms-and-conditions') }}" class="legal-tab active">
                    <i class="bi bi-file-earmark-ruled"></i> Terms &amp; Conditions
                </a>
                <a href="{{ url('/copyrights') }}" class="legal-tab">
                    <i class="bi bi-c-circle"></i> Copyrights
                </a>
            </nav>
        </div>
    </div>

    {{-- =========================================================
         Document
    ========================================================= --}}
    <section class="legal-section">
        <div class="container">
            <div class="row g-4">

                {{-- TOC Sidebar --}}
                <div class="col-12 col-lg-3">
                    <nav class="legal-toc">
                        <p class="legal-toc-heading">On This Page</p>
                        <ul class="legal-toc-list">
                            <li><a href="#acceptance"><i class="bi bi-chevron-right"></i>Acceptance of Terms</a></li>
                            <li><a href="#eligibility"><i class="bi bi-chevron-right"></i>Eligibility &amp; User Responsibilities</a></li>
                            <li><a href="#service-usage"><i class="bi bi-chevron-right"></i>Service Usage &amp; Limitations</a></li>
                            <li><a href="#ip"><i class="bi bi-chevron-right"></i>Intellectual Property</a></li>
                            <li><a href="#third-party"><i class="bi bi-chevron-right"></i>Third-Party Links</a></li>
                            <li><a href="#payments"><i class="bi bi-chevron-right"></i>Payments &amp; Refunds</a></li>
                            <li><a href="#liability"><i class="bi bi-chevron-right"></i>Disclaimer &amp; Liability</a></li>
                            <li><a href="#termination"><i class="bi bi-chevron-right"></i>Termination</a></li>
                            <li><a href="#governing-law"><i class="bi bi-chevron-right"></i>Governing Law</a></li>
                            <li><a href="#contact-terms"><i class="bi bi-chevron-right"></i>Contact</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Document Body --}}
                <div class="col-12 col-lg-9">
                    <div class="legal-card">

                        <div class="legal-doc-header">
                            <h2 class="legal-doc-title">Terms &amp; Conditions of Service</h2>
                            <div class="legal-doc-meta">
                                <span class="legal-doc-meta-item">
                                    <i class="bi bi-building"></i> Vetora Solutions
                                </span>
                                <span class="legal-doc-meta-item">
                                    <i class="bi bi-calendar-check"></i> Effective: 1 June 2025
                                </span>
                                <span class="legal-doc-meta-item">
                                    <i class="bi bi-globe"></i> vetora.au
                                </span>
                            </div>
                        </div>

                            <div class="legal-body">

                                <h2 id="acceptance">Acceptance of Terms</h2>
                                <p>
                                    These Terms and Conditions, together with our Privacy Policy and any other applicable
                                    policies, constitute a legally binding agreement between <strong>Vetora Solutions</strong>
                                    (<strong>"Company," "we," "our,"</strong> or <strong>"us"</strong>) and any user
                                    (<strong>"you," "your,"</strong> or <strong>"user"</strong>) accessing or using our website,
                                    products, software, applications, or services (<strong>"Services"</strong>).
                                </p>
                                <p>
                                    By accessing our website or using any of our Services, you acknowledge that you have
                                    read, understood, and agreed to be bound by these Terms and Conditions. If you do not
                                    agree with any part of these Terms, you must discontinue the use of our website and
                                    Services immediately.
                                </p>
                                <div class="legal-highlight-box">
                                    <p><i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    <strong>Important:</strong> We reserve the right to update, modify, or revise these Terms at any
                                    time without prior notice. Continued use of our Services after such changes constitutes
                                    your acceptance of the updated Terms.</p>
                                </div>

                                <h2 id="eligibility">1. Eligibility and User Responsibilities</h2>
                                <p>To access or use our Services, you must provide accurate, complete, and current information where required and ensure that such information remains updated.</p>
                                <ul>
                                    <li>You are solely responsible for maintaining the confidentiality of your account credentials and for all activities conducted through your account.</li>
                                    <li>You agree not to use our website or Services for any unlawful, fraudulent, abusive, or unauthorized purpose.</li>
                                    <li>You shall comply with all applicable laws, regulations, and industry standards while using our Services.</li>
                                </ul>

                                <h2 id="service-usage">2. Service Usage and Limitations</h2>
                                <p>The information, content, and materials available on our website are provided for general informational purposes only.</p>
                                <ul>
                                    <li>While Vetora Solutions strives to maintain accurate and up-to-date information, we do not guarantee the accuracy, completeness, reliability, or suitability of any content or Service.</li>
                                    <li>Your use of our Services is at your own risk and discretion. You are responsible for evaluating whether our Services meet your specific business or personal requirements.</li>
                                    <li>We reserve the right to modify, suspend, or discontinue any part of our Services without prior notice.</li>
                                </ul>

                                <h2 id="ip">3. Intellectual Property Rights</h2>
                                <p>
                                    All content, software, designs, logos, graphics, trademarks, service marks, text, and other
                                    materials available through our website and Services are the exclusive property of Vetora
                                    Solutions or its licensors.
                                </p>
                                <ul>
                                    <li>No content may be copied, reproduced, distributed, modified, republished, transmitted, displayed, or exploited for commercial purposes without prior written permission from Vetora Solutions.</li>
                                    <li>Unauthorized use of our intellectual property may result in legal action under applicable laws.</li>
                                </ul>

                                <h2 id="third-party">4. Third-Party Links and Services</h2>
                                <p>Our website or Services may contain links to third-party websites, applications, or resources for your convenience.</p>
                                <ul>
                                    <li>Such third-party platforms operate independently and are governed by their own terms, privacy policies, and practices.</li>
                                    <li>Vetora Solutions does not endorse, control, or assume responsibility for any third-party content, products, services, or websites.</li>
                                </ul>

                                <h2 id="payments">5. Payments, Fees, and Refunds</h2>
                                <p>By purchasing or subscribing to any paid Service, you agree to pay all applicable fees and charges as communicated at the time of purchase.</p>
                                <ul>
                                    <li>Payment obligations are non-transferable and must be fulfilled according to the agreed payment terms.</li>
                                    <li>Refund requests, where applicable, will be processed in accordance with the refund policy specific to the purchased Service.</li>
                                    <li>Failure to request a refund within the applicable refund period may result in the forfeiture of refund eligibility.</li>
                                </ul>

                                <h2 id="liability">6. Disclaimer and Limitation of Liability</h2>
                                <p>
                                    Our Services are provided on an <strong>"as is"</strong> and <strong>"as available"</strong> basis
                                    without warranties of any kind, whether express or implied.
                                </p>
                                <ul>
                                    <li>Vetora Solutions disclaims all warranties relating to merchantability, fitness for a particular purpose, non-infringement, and uninterrupted availability of Services.</li>
                                    <li>We shall not be liable for any direct, indirect, incidental, consequential, special, or punitive damages arising from the use of or inability to use our Services.</li>
                                    <li>We shall not be responsible for any data loss, business interruption, loss of profits, or damages resulting from technical failures, third-party actions, or unforeseen circumstances.</li>
                                    <li>We are not liable for delays or failure to perform due to events beyond our reasonable control, including natural disasters, cyberattacks, government actions, labor disputes, or force majeure events.</li>
                                </ul>

                                <h2 id="termination">7. Termination</h2>
                                <p>
                                    We reserve the right to suspend, restrict, or terminate your access to our website or
                                    Services at any time if we believe you have violated these Terms or applicable laws.
                                    Upon termination, all rights granted to you under these Terms shall immediately cease.
                                </p>

                                <h2 id="governing-law">8. Governing Law and Jurisdiction</h2>
                                <p>
                                    These Terms and Conditions shall be governed by and interpreted in accordance with the laws of Australia. Any dispute, claim, or controversy arising out of or relating to these Terms shall be subject to the exclusive jurisdiction of the competent courts of Victoria, Australia. The Company's registered office is located at 66 Victor Cres, Narre Warren VIC 3805, Australia.
                                </p>

                                <h2 id="contact-terms">9. Contact Information</h2>
                                <p>
                                    For any questions, concerns, legal notices, or requests regarding these Terms and
                                    Conditions, please contact Vetora Solutions through the contact information provided
                                    on our website.
                                </p>
                                <ul>
                                    <li><strong>Website:</strong> <a href="{{ url('/contact-us') }}">vetora.au/contact-us</a></li>
                                </ul>
                                <p>
                                    By using our website and Services, you acknowledge that you have read, understood,
                                    and agreed to these Terms and Conditions.
                                </p>

                            </div>{{-- /.legal-body --}}

                    </div>{{-- /.legal-card --}}
                </div>{{-- /.col --}}

            </div>{{-- /.row --}}
        </div>{{-- /.container --}}
    </section>

@endsection
