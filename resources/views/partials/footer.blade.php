<footer class="footer">

    <div class="container">

        <!-- =========================================
             MAIN CARD
        ========================================== -->

        <div class="footer-top">

            <div class="footer-main-card">

                <!-- BACKGROUND MAP -->
                <img src="{{ asset('Assets/Images/footer/australia-map.png') }}" alt="" aria-hidden="true"
                    class="footer-bg-map">

                <div class="row align-items-start g-5">

                    <!-- BRAND -->
                    <div class="col-lg-4 col-md-4">

                        <img src="{{ asset('Assets/Images/logo-main.png') }}" alt="Vetora Logo" class="footer-logo">

                        <p class="footer-desc">
                            Your trusted Melbourne partner for innovative
                            iOS, Android, AI-powered and cross-platform
                            digital solutions built for modern businesses.
                        </p>

                        <!-- SOCIALS -->

                        <div class="footer-socials">

                            <a href="https://www.linkedin.com/company/vetora-solutions-pty-ltd/about/" target="_blank"
                                rel="noopener noreferrer">
                                <i class="bi bi-linkedin"></i>
                            </a>

                            <a href="https://x.com/Vetora_Solution" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-twitter-x"></i>
                            </a>

                            <a href="https://www.instagram.com/vetora_solutions/" target="_blank"
                                rel="noopener noreferrer">
                                <i class="bi bi-instagram"></i>
                            </a>

                            {{-- <a href="#" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-facebook"></i>
                            </a> --}}

                        </div>

                    </div>

                    <!-- QUICK LINKS -->
                    {{-- <div class="col-lg-2 col-md-2">

                        <div class="footer-links-col">

                            <h4>Quick Links</h4>

                            <ul>
                                <li><a href="{{ url('/about-us') }}">About us</a></li>
                                <li><a href="{{ url('/AI') }}">Agentic AI</a></li>
                                <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            </ul>

                        </div>

                    </div> --}}

                    <!-- SERVICES -->
                    <div class="col-lg-4 col-md-4 d-flex justify-content-center">

                        <div class="footer-links-col footer-services-col" style="width: 70%;">

                            <h4>Services</h4>

                            <ul>
                                <li><a href="{{ url('/AI') }}">AI Solutions</a></li>
                                <li><a href="{{ url('/mobile-app-development-company-in-melbourne') }}">Mobile Application Development</a>
                                </li>
                                <li><a href="{{ url('/software-development-company-in-melbourne') }}">Software
                                        Development</a></li>
                                <li><a href="javascript:void();">Blockchain Development</a></li>
                                <li><a href="{{ url('/website-development-services-melbourne') }}">Web Development</a>
                                </li>
                                <li><a href="{{ url('/ui-ux-design-services-melbourne') }}">UI/UX Design</a></li>
                                <li><a href="{{ url('/seo-sem-services-melbourne') }}">SEO & Marketing</a></li>

                            </ul>

                        </div>

                    </div>

                    <!-- ADDRESS -->
                    <div class="col-lg-4 col-md-4">

                        <div class="footer-links-col ">

                            <h4>Address</h4>

                            <!-- CONTACT LIST -->

                            <div class="footer-contact-list">

                                <a href="javascript:void();" class="footer-contact-item">
                                    <div class="fci-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div class="fci-text">
                                        <span>Address</span>
                                        <strong>66 Victor Cres, <br> Narre Warren VIC 3805, <br> Australia</strong>
                                    </div>
                                </a>

                                <a href="mailto:info@vetora.au" class="footer-contact-item">
                                    <div class="fci-icon">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div class="fci-text">
                                        <span>Email</span>
                                        <strong>info@vetora.au</strong>
                                    </div>
                                </a>

                                <a href="tel:+61416819190" class="footer-contact-item">
                                    <div class="fci-icon">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div class="fci-text">
                                        <span>Phone</span>
                                        <strong>+61 416 819 190</strong>
                                    </div>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- =========================================
             BOTTOM
        ========================================== -->

        <div class="footer-bottom">

            <div class="footer-bottom-inner">

                <p>
                    © 2026 Vetora Solutions.
                    All rights reserved.
                </p>

                <div class="footer-bottom-links">

                    <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                    <a href="{{ url('/terms-and-conditions') }}">Terms & Conditions</a>
                    <a href="{{ url('/copyrights') }}">Copyrights</a>

                </div>

            </div>

        </div>

    </div>

</footer>
