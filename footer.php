<?php
// footer.php - Global Footer Setup
?>
    <!-- Global Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5" style="background-color: var(--dark-navy) !important;">
        <div class="container">
            <div class="row g-4 mb-4">
                <!-- Col 1: Brand Info -->
                <div class="col-lg-4 col-md-6">
                    <h4 class="fw-bold text-white mb-3">NEXORIX <span class="text-primary">SOLUTION</span></h4>
                    <p class="text-secondary small">
                        Engineering enterprise-grade software solutions, web applications, and scalable digital platforms for global clients.
                    </p>
                    <div class="d-flex gap-3 fs-5">
                        <a href="#" class="text-secondary text-white-hover"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-secondary text-white-hover"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-secondary text-white-hover"><i class="bi bi-github"></i></a>
                        <a href="#" class="text-secondary text-white-hover"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Company</h6>
                    <ul class="list-unstyled text-secondary small d-flex flex-column gap-2">
                        <li><a href="index.php" class="text-decoration-none text-secondary">Home</a></li>
                        <li><a href="services.php" class="text-decoration-none text-secondary">Services</a></li>
                        <li><a href="portfolio.php" class="text-decoration-none text-secondary">Case Studies</a></li>
                        <li><a href="contact.php" class="text-decoration-none text-secondary">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Services -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Services</h6>
                    <ul class="list-unstyled text-secondary small d-flex flex-column gap-2">
                        <li><a href="services.php" class="text-decoration-none text-secondary">Custom Web Development</a></li>
                        <li><a href="services.php" class="text-decoration-none text-secondary">Enterprise Application Development</a></li>
                        <li><a href="services.php" class="text-decoration-none text-secondary">Cloud Infrastructure & API Setup</a></li>
                        <li><a href="services.php" class="text-decoration-none text-secondary">UI/UX Interface Design</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <h6 class="fw-bold text-white mb-3">Get In Touch</h6>
                    <ul class="list-unstyled text-secondary small d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-envelope-fill text-primary fs-5"></i>
                            <span>Contact@nexorixsolution.com</span>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill text-primary fs-5"></i>
                            <span>+92 301 8915037</span>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt-fill text-primary fs-5"></i>
                            <span>Global Remote / Operations Base</span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="border-secondary opacity-25">

            <div class="row align-items-center py-2">
                <div class="col-md-6 text-center text-md-start text-secondary small">
                    &copy; <?php echo date("Y"); ?> Nexorix Solution. All rights reserved.
                </div>
                <div class="col-md-6 text-center text-md-end text-secondary small mt-2 mt-md-0">
                    Built with HTML5, Bootstrap 5, PHP & SQL
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>