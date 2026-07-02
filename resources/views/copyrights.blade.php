@extends('layouts.app')

@section('meta')
    <title>Copyright Notice — Vetora Solutions</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/legal.css') }}?v=1.0.1">
@endsection

@section('content')

    {{-- =========================================================
         Hero
    ========================================================= --}}
    <section class="legal-hero" style="background-image: url('{{ asset('Assets/Images/copy-rights.png') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="legal-hero-badge">
                        <i class="bi bi-c-circle"></i>
                        Legal
                    </div>
                    <h1 class="legal-hero-title">Copyright Notice</h1>
                    <p class="legal-hero-desc">
                        We value and protect intellectual property rights in every project we undertake.
                        Learn how we safeguard proprietary content and respect third-party rights.
                    </p>
                    <div class="legal-hero-meta">
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-calendar3"></i> Last updated: 1 June 2025
                        </span>
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-geo-alt"></i> Jurisdiction: Australia &amp; International
                        </span>
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-file-earmark-text"></i> Version 1.5
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
                <a href="{{ url('/terms-and-conditions') }}" class="legal-tab">
                    <i class="bi bi-file-earmark-ruled"></i> Terms &amp; Conditions
                </a>
                <a href="{{ url('/copyrights') }}" class="legal-tab active">
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
                            <li><a href="#overview"><i class="bi bi-chevron-right"></i>Overview</a></li>
                            <li><a href="#ownership"><i class="bi bi-chevron-right"></i>Ownership of Content</a></li>
                            <li><a href="#client-materials"><i class="bi bi-chevron-right"></i>Client Materials</a></li>
                            <li><a href="#open-source"><i class="bi bi-chevron-right"></i>Open-Source &amp; Third-Party</a></li>
                            <li><a href="#protection"><i class="bi bi-chevron-right"></i>Protection of Our IP</a></li>
                            <li><a href="#third-party-rights"><i class="bi bi-chevron-right"></i>Third-Party IP Rights</a></li>
                            <li><a href="#reporting"><i class="bi bi-chevron-right"></i>Reporting Infringement</a></li>
                            <li><a href="#updates"><i class="bi bi-chevron-right"></i>Policy Updates</a></li>
                            <li><a href="#contact-ip"><i class="bi bi-chevron-right"></i>Contact</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Document Body --}}
                <div class="col-12 col-lg-9">
                    <div class="legal-card">

                        <div class="legal-doc-header">
                            <h2 class="legal-doc-title">Copyright Policy</h2>
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

                                <h2 id="overview">Overview</h2>
                                <p>
                                    At Vetora Solutions, we value and protect intellectual property rights in every project we
                                    undertake. This Copyright Policy outlines how we safeguard our proprietary content, respect
                                    third-party rights, and ensure legal compliance across all our software development, mobile
                                    application development, AI solutions, digital products, and technology consulting services.
                                </p>
                                <div class="legal-highlight-box">
                                    <p>
                                        <i class="bi bi-c-circle-fill me-2"></i>
                                        By engaging with Vetora Solutions and using our services, you acknowledge and agree to
                                        comply with this Copyright Policy.
                                    </p>
                                </div>

                                <h2 id="ownership">1. Ownership of Content</h2>
                                <ul>
                                    <li>All source code, software applications, design assets, UI/UX elements, documentation, databases, digital content, and related intellectual property developed by Vetora Solutions remain the property of Vetora Solutions until full payment has been received and the project has been formally handed over, unless otherwise specified in a signed agreement.</li>
                                    <li>Upon successful project completion and full payment, intellectual property rights shall be transferred to the client in accordance with the terms outlined in the project agreement or contract.</li>
                                </ul>

                                <h2 id="client-materials">2. Client Materials</h2>
                                <ul>
                                    <li>Any materials provided by the client, including but not limited to logos, trademarks, images, videos, text, documents, databases, and other proprietary content, shall remain the property of the client.</li>
                                    <li>Clients are solely responsible for ensuring they possess the necessary rights, licences, permissions, or ownership to use and provide any third-party content submitted to Vetora Solutions for development or implementation purposes.</li>
                                </ul>

                                <h2 id="open-source">3. Use of Open-Source and Third-Party Components</h2>
                                <ul>
                                    <li>Vetora Solutions may utilise open-source software, frameworks, libraries, APIs, plugins, or third-party tools to deliver efficient and scalable solutions.</li>
                                    <li>All such components are incorporated strictly in accordance with their respective licensing terms and conditions.</li>
                                    <li>Clients will be informed where applicable regarding the use of third-party or open-source technologies and any obligations associated with their usage.</li>
                                </ul>

                                <h2 id="protection">4. Protection of Vetora Solutions Intellectual Property</h2>
                                <ul>
                                    <li>All company-created content, including websites, mobile applications, software products, designs, branding assets, marketing materials, documentation, training resources, and digital content developed by Vetora Solutions, is protected under applicable copyright, trademark, and intellectual property laws.</li>
                                    <li>Unauthorized copying, reproduction, distribution, modification, publication, resale, reverse engineering, or commercial exploitation of Vetora Solutions' intellectual property is strictly prohibited and may result in legal action.</li>
                                </ul>

                                <h2 id="third-party-rights">5. Respect for Third-Party Intellectual Property Rights</h2>
                                <ul>
                                    <li>Vetora Solutions respects the intellectual property rights of individuals, organisations, and third parties.</li>
                                    <li>We do not knowingly use, reproduce, distribute, or incorporate copyrighted materials without appropriate authorisation, licensing, or legal permission.</li>
                                    <li>We follow industry best practices and compliance standards to minimise the risk of intellectual property infringement in all deliverables.</li>
                                </ul>

                                <h2 id="reporting">6. Reporting Copyright Infringement</h2>
                                <p>
                                    If you believe that any content created, published, hosted, or distributed by Vetora Solutions
                                    infringes upon your copyright or intellectual property rights, you may contact us by providing:
                                </p>
                                <ul>
                                    <li>A detailed description of the copyrighted work.</li>
                                    <li>Proof of ownership or authorisation.</li>
                                    <li>Identification of the allegedly infringing material.</li>
                                    <li>Contact information for correspondence regarding the claim.</li>
                                </ul>
                                <p>
                                    Please send all copyright-related concerns to:
                                    <strong><a href="mailto:info@vetora.au">info@vetora.au</a></strong>
                                </p>
                                <p>Vetora Solutions will review all legitimate claims and take appropriate action where necessary.</p>

                                <h2 id="updates">7. Policy Updates</h2>
                                <ul>
                                    <li>This Copyright Policy may be revised, updated, or modified periodically to reflect changes in legal requirements, industry standards, business practices, or technological advancements.</li>
                                    <li>Any updates to this policy will become effective immediately upon publication on our official website unless otherwise stated.</li>
                                </ul>

                                <h2 id="contact-ip">Contact Information</h2>
                                <p>For questions, concerns, or notices related to copyright, intellectual property, or licensing matters, please contact:</p>
                                <ul>
                                    <li><strong>Email:</strong> <a href="mailto:info@vetora.au">info@vetora.au</a></li>
                                    <li><strong>Website:</strong> <a href="{{ url('/contact-us') }}">vetora.au/contact-us</a></li>
                                </ul>

                            </div>{{-- /.legal-body --}}

                    </div>{{-- /.legal-card --}}
                </div>{{-- /.col --}}

            </div>{{-- /.row --}}
        </div>{{-- /.container --}}
    </section>

@endsection
