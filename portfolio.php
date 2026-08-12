<?php
// portfolio.php - Nexorix Solution Case Studies Page
require_once 'config.php';
include 'header.php';
?>

<!-- Header Banner -->
<section class="py-5 bg-light border-bottom" style="background-color: var(--light-bg) !important;">
    <div class="container text-center py-4">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-3">
            Proven Track Record
        </span>
        <h1 class="display-5 fw-bold text-dark">Case Studies & Global Portfolio</h1>
        <p class="lead text-secondary mx-auto mb-0" style="max-width: 650px;">
            Explore how Nexorix Solution engineers high-impact software, web portals, and scalable backends for clients worldwide.
        </p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-4">

            <!-- Case Study 1 -->
            <div class="col-lg-6">
                <div class="glass-card overflow-hidden h-100">
                    <div class="p-4 bg-dark text-white d-flex justify-content-between align-items-center" style="background-color: var(--dark-navy) !important;">
                        <div>
                            <span class="badge bg-primary mb-2">EdTech Platform</span>
                            <h4 class="fw-bold mb-0">Global Educational Portal</h4>
                        </div>
                        <span class="text-secondary font-monospace small"><i class="bi bi-globe me-1"></i> International</span>
                    </div>
                    <div class="p-4">
                        <p class="text-secondary">
                            Engineered a comprehensive web portal for academic institutions with multi-role dashboards, secure authentication, student management, and real-time attendance tracking.
                        </p>
                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Concurrent Users</span>
                                    <strong class="text-primary fs-5">50,000+</strong>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Speed Improvement</span>
                                    <strong class="text-primary fs-5">3.2x Faster</strong>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <span class="badge text-bg-light border">PHP</span>
                            <span class="badge text-bg-light border">MySQL</span>
                            <span class="badge text-bg-light border">Bootstrap 5</span>
                            <span class="badge text-bg-light border">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2 -->
            <div class="col-lg-6">
                <div class="glass-card overflow-hidden h-100">
                    <div class="p-4 bg-dark text-white d-flex justify-content-between align-items-center" style="background-color: var(--dark-navy) !important;">
                        <div>
                            <span class="badge bg-primary mb-2">FinTech / E-Commerce</span>
                            <h4 class="fw-bold mb-0">Advance Payment Checkout Engine</h4>
                        </div>
                        <span class="text-secondary font-monospace small"><i class="bi bi-globe me-1"></i> USA</span>
                    </div>
                    <div class="p-4">
                        <p class="text-secondary">
                            Designed a high-security automated booking and checkout workflow requiring partial advance payments before order confirmation, seamlessly integrated into custom web stores.
                        </p>
                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Payment Success</span>
                                    <strong class="text-primary fs-5">99.9%</strong>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Checkout Time</span>
                                    <strong class="text-primary fs-5">&lt; 2 Seconds</strong>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <span class="badge text-bg-light border">PHP</span>
                            <span class="badge text-bg-light border">SQL Triggers</span>
                            <span class="badge text-bg-light border">RESTful APIs</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 3 -->
            <div class="col-lg-6">
                <div class="glass-card overflow-hidden h-100">
                    <div class="p-4 bg-dark text-white d-flex justify-content-between align-items-center" style="background-color: var(--dark-navy) !important;">
                        <div>
                            <span class="badge bg-primary mb-2">Enterprise SaaS</span>
                            <h4 class="fw-bold mb-0">Custom Resource Management System</h4>
                        </div>
                        <span class="text-secondary font-monospace small"><i class="bi bi-globe me-1"></i> Europe</span>
                    </div>
                    <div class="p-4">
                        <p class="text-secondary">
                            Built an enterprise-wide resource allocation platform to optimize project tracking, task delegation, and automated performance analytics across multiple teams.
                        </p>
                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Productivity Boost</span>
                                    <strong class="text-primary fs-5">+45%</strong>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Database Scalability</span>
                                    <strong class="text-primary fs-5">1M+ Records</strong>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <span class="badge text-bg-light border">PHP</span>
                            <span class="badge text-bg-light border">SQL Indexing</span>
                            <span class="badge text-bg-light border">Custom CSS</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 4 -->
            <div class="col-lg-6">
                <div class="glass-card overflow-hidden h-100">
                    <div class="p-4 bg-dark text-white d-flex justify-content-between align-items-center" style="background-color: var(--dark-navy) !important;">
                        <div>
                            <span class="badge bg-primary mb-2">Corporate Web Architecture</span>
                            <h4 class="fw-bold mb-0">High-Performance Corporate Hub</h4>
                        </div>
                        <span class="text-secondary font-monospace small"><i class="bi bi-globe me-1"></i> Middle East</span>
                    </div>
                    <div class="p-4">
                        <p class="text-secondary">
                            Redesigned a multinational corporate portal focusing on ultra-fast asset loading, glassmorphism UI elements, and a clean white-and-blue visual aesthetic.
                        </p>
                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Performance Score</span>
                                    <strong class="text-primary fs-5">98 / 100</strong>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-light rounded border">
                                    <span class="d-block text-secondary small">Bounce Rate Reduction</span>
                                    <strong class="text-primary fs-5">-35%</strong>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-3">
                            <span class="badge text-bg-light border">Bootstrap 5</span>
                            <span class="badge text-bg-light border">JavaScript</span>
                            <span class="badge text-bg-light border">PHP</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>