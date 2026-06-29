@extends('layouts.app')

@section('meta')
    <title>Cancellation &amp; Refund Policy — Vetora Solutions</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/legal.css') }}?v=1.0.0">
@endsection

@section('content')

    {{-- =========================================================
         Hero
    ========================================================= --}}
    <section class="legal-hero" style="background-image: url('{{ asset('Assets/Images/privacy-policy.png') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="legal-hero-badge">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Legal
                    </div>
                    <h1 class="legal-hero-title">Cancellation &amp; Refund Policy</h1>
                    <p class="legal-hero-desc">
                        Understand our cancellation and refund terms for software development,
                        mobile applications, AI solutions, and technology consulting services.
                    </p>
                    <div class="legal-hero-meta">
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-calendar3"></i> Last updated: 1 June 2025
                        </span>
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-geo-alt"></i> Applicable: Worldwide
                        </span>
                        <span class="legal-hero-meta-item">
                            <i class="bi bi-file-earmark-text"></i> Version 1.0
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
                <a href="{{ url('/privacy-policy') }}" class="legal-tab active">
                    <i class="bi bi-shield-check"></i> Privacy Policy
                </a>
                <a href="{{ url('/terms-and-conditions') }}" class="legal-tab">
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
                            <li><a href="#overview"><i class="bi bi-chevron-right"></i>Overview</a></li>
                            <li><a href="#cancellation"><i class="bi bi-chevron-right"></i>Cancellation Policy</a></li>
                            <li><a href="#refund"><i class="bi bi-chevron-right"></i>Refund Policy</a></li>
                            <li><a href="#third-party"><i class="bi bi-chevron-right"></i>Third-Party Services</a></li>
                            <li><a href="#refund-process"><i class="bi bi-chevron-right"></i>Refund Request Process</a></li>
                            <li><a href="#exclusions"><i class="bi bi-chevron-right"></i>Exclusions</a></li>
                            <li><a href="#contact-privacy"><i class="bi bi-chevron-right"></i>Contact</a></li>
                        </ul>
                    </nav>
                </div>

                {{-- Document Body --}}
                <div class="col-12 col-lg-9">
                    <div class="legal-card">

                        <div class="legal-doc-header">
                            <h2 class="legal-doc-title">Cancellation &amp; Refund Policy</h2>
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
                                    At Vetora Solutions, we specialise in software development, mobile application development,
                                    AI solutions, digital products, and technology consulting services, which are primarily
                                    intangible products and services. Due to the nature of our business, refunds are only
                                    applicable under specific circumstances and at the sole discretion of Vetora Solutions.
                                </p>
                                <div class="legal-highlight-box">
                                    <p><i class="bi bi-exclamation-triangle-fill me-2"></i>
                                    <strong>Important:</strong> Please read this policy carefully before placing an order or commencing
                                    a project engagement with Vetora Solutions.</p>
                                </div>

                                <h2 id="cancellation">Cancellation Policy</h2>
                                <ul>
                                    <li>Once an order is placed and project work has commenced, cancellation requests will not be accepted.</li>
                                    <li>If a cancellation request is submitted before any work has commenced, Vetora Solutions may review the request and approve or reject it at its sole discretion.</li>
                                    <li>Any payments made towards project planning, consultation, requirement gathering, research, or resource allocation may be non-refundable.</li>
                                </ul>

                                <h2 id="refund">Refund Policy</h2>
                                <p>Refunds will only be considered under the following circumstances:</p>

                                <h3>Service Defect Due to Vetora Solutions</h3>
                                <p>
                                    If the delivered software, application, or service fails to meet the agreed specifications
                                    solely due to an error caused by Vetora Solutions, a partial refund may be considered
                                    following a detailed internal review and assessment.
                                </p>

                                <h3>Non-Delivery of Services</h3>
                                <p>
                                    If Vetora Solutions is unable to deliver the agreed services due to reasons solely
                                    attributable to Vetora Solutions, a partial or full refund may be processed, provided
                                    the agreement is terminated by Vetora Solutions and not by the client.
                                </p>

                                <h3>No Refunds for Work in Progress</h3>
                                <p>
                                    Once a project has commenced, development activities have begun, or any deliverables have
                                    been shared with the client, no refunds will be entertained under normal circumstances.
                                </p>

                                <h2 id="third-party">Third-Party Services and Integrations</h2>
                                <p>Refunds are not applicable for issues, delays, failures, or limitations arising from:</p>
                                <ul>
                                    <li>Third-party APIs or integrations</li>
                                    <li>Hosting providers</li>
                                    <li>Domain registration services</li>
                                    <li>Cloud infrastructure providers</li>
                                    <li>Payment gateway providers</li>
                                    <li>Client-side configurations, modifications, or errors</li>
                                    <li>Any third-party software, tools, or services used within the project</li>
                                </ul>

                                <h2 id="refund-process">Refund Request Process</h2>
                                <p>Refund requests will only be considered under the following conditions:</p>
                                <ul>
                                    <li>Refund requests must be submitted in writing to <a href="mailto:info@vetora.au">info@vetora.au</a> within 7 days of project commencement or immediately upon project delivery if a valid concern exists.</li>
                                    <li>Where a project has already commenced, the client shall remain solely responsible for all development, consultation, design, implementation, and resource allocation costs incurred up to the date of the refund request.</li>
                                    <li>Vetora Solutions will review all refund requests and supporting documentation before making a final decision.</li>
                                    <li>If approved, refunds will be processed within <strong>16–30 business days</strong> through the original payment method or another mutually agreed method.</li>
                                    <li>Partial refunds may be granted in exceptional circumstances and solely at the discretion of Vetora Solutions.</li>
                                </ul>

                                <h2 id="exclusions">Exclusions</h2>
                                <p>Refunds will not be provided for:</p>
                                <ul>
                                    <li>Change of mind after project commencement</li>
                                    <li>Delays caused by the client</li>
                                    <li>Failure of the client to provide required information, approvals, or feedback</li>
                                    <li>Requests for additional features beyond the agreed project scope</li>
                                    <li>Project abandonment by the client</li>
                                    <li>Dissatisfaction based on personal preferences when services have been delivered according to approved specifications</li>
                                </ul>

                                <h2 id="contact-privacy">Contact Information</h2>
                                <p>For any cancellation or refund-related inquiries, please contact:</p>
                                <ul>
                                    <li><strong>Email:</strong> <a href="mailto:info@vetora.au">info@vetora.au</a></li>
                                    <li><strong>Website:</strong> <a href="{{ url('/contact-us') }}">vetora.au/contact-us</a></li>
                                </ul>
                                <p>
                                    This Cancellation and Refund Policy ensures that Vetora Solutions retains full control
                                    over the refund process while providing fair and reasonable resolutions to clients
                                    wherever applicable.
                                </p>

                            </div>{{-- /.legal-body --}}

                    </div>{{-- /.legal-card --}}
                </div>{{-- /.col --}}

            </div>{{-- /.row --}}
        </div>{{-- /.container --}}
    </section>

@endsection
