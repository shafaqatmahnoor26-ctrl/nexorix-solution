<?php
// services.php - Nexorix Solution Services Page
require_once 'config.php';
include 'header.php';
?>

<!-- Header Banner -->
<section class="py-5 bg-light border-bottom" style="background-color: var(--light-bg) !important;">
    <div class="container text-center py-4">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-3">
            World-Class Capabilities
        </span>
        <h1 class="display-5 fw-bold text-dark">Our Engineering Services</h1>
        <p class="lead text-secondary mx-auto mb-0" style="max-width: 650px;">
            We craft custom, high-availability software platforms designed to meet demanding global enterprise requirements.
        </p>
    </div>
</section>

<!-- Detailed Services Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4">
            
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3 d-inline-block mb-3">
                            <i class="bi bi-code-slash fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Custom Web Application Development</h4>
                        <p class="text-secondary small">
                            Scalable web applications built on clean PHP and modern frontend architectures, designed for high traffic, reliability, and security.
                        </p>
                        <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 my-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Custom PHP Backend Architecture</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Bootstrap & CSS Layouts</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>RESTful API Integration</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="btn btn-nexorix-outline w-100">Inquire About Service</a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3 d-inline-block mb-3">
                            <i class="bi bi-database-check fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Database Design & SQL Engineering</h4>
                        <p class="text-secondary small">
                            Relational database schema optimization, indexing, and high-concurrency SQL query development for fast performance.
                        </p>
                        <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 my-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>MySQL Database Optimization</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Data Migration & Integrity</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Secure Query Execution</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="btn btn-nexorix-outline w-100">Inquire About Service</a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3 d-inline-block mb-3">
                            <i class="bi bi-shield-lock-fill fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Enterprise Systems & Portals</h4>
                        <p class="text-secondary small">
                            Custom management software, educational platforms, and internal business dashboards tailored to organizational workflows.
                        </p>
                        <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 my-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Role-based Access Control</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Secure Authentication Systems</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Real-time Data Reporting</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="btn btn-nexorix-outline w-100">Inquire About Service</a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3 d-inline-block mb-3">
                            <i class="bi bi-palette-fill fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">UI/UX Interface Engineering</h4>
                        <p class="text-secondary small">
                            Aesthetic, user-centric web designs focusing on international visual appeal, responsiveness, and seamless user interaction.
                        </p>
                        <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 my-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Mobile-First Responsive Design</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Modern Blue & White Themes</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Cross-Browser Compatibility</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="btn btn-nexorix-outline w-100">Inquire About Service</a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3 d-inline-block mb-3">
                            <i class="bi bi-lightning-charge-fill fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Speed & Performance Tuning</h4>
                        <p class="text-secondary small">
                            Code refactoring, caching strategies, and asset minification to ensure near-instantaneous load times for web systems.
                        </p>
                        <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 my-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Page Load Speed Optimization</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Clean PHP Refactoring</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Lightweight Asset Delivery</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="btn btn-nexorix-outline w-100">Inquire About Service</a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card p-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="bg-primary-subtle text-primary rounded-3 p-3 d-inline-block mb-3">
                            <i class="bi bi-headset fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Maintenance & Code Audit</h4>
                        <p class="text-secondary small">
                            Ongoing technical maintenance, bug fixes, code auditing, and security patches for existing web installations.
                        </p>
                        <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 my-4">
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Security Defenses</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Database Backups & Recovery</li>
                            <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Bug Fixes & System Updates</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="btn btn-nexorix-outline w-100">Inquire About Service</a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>