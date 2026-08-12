<?php
// index.php - Nexorix Solution | Geometric Modern Hero Landing Page
require_once 'config.php';
include 'header.php';
?>

<!-- Animate.css & Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
:root {
    --nx-dark: #0F172A;
    --nx-blue: #2563EB;
    --nx-blue-hover: #1D4ED8;
    --nx-light-bg: #F8FAFC;
    --nx-border: #E2E8F0;
    --nx-text: #334155;
}

body {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    background-color: #FFFFFF;
    color: var(--nx-text);
    overflow-x: hidden;
}

.section-padding {
    padding-top: 5rem;
    padding-bottom: 5rem;
}

/* 1. GEOMETRIC BLUE VECTOR HERO SECTION */
.hero-wrapper {
    background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    padding: 100px 0 80px 0;
    color: #0F172A;
    position: relative;
    overflow: hidden;
}

/* Geometric Overlay Shapes */
.geo-shape {
    position: absolute;
    border-radius: 12px;
    pointer-events: none;
    z-index: 1;
}

.geo-shape-1 {
    width: 320px;
    height: 320px;
    border: 35px solid #1E40AF;
    top: -140px;
    left: -150px;
    transform: rotate(45deg);
    box-shadow: -15px 15px 35px rgba(15, 23, 42, 0.15);
}

.geo-shape-2 {
    width: 240px;
    height: 240px;
    border: 25px solid #2563EB;
    top: 80px;
    left: -160px;
    transform: rotate(45deg);
    box-shadow: -10px 10px 25px rgba(37, 99, 235, 0.2);
}

.geo-shape-3 {
    width: 180px;
    height: 180px;
    background: linear-gradient(135deg, #1D4ED8, #1E3A8A);
    top: -90px;
    left: 80px;
    transform: rotate(45deg);
    box-shadow: 10px 10px 30px rgba(30, 58, 138, 0.2);
    opacity: 0.85;
}

.geo-shape-4 {
    width: 300px;
    height: 12px;
    background: rgba(148, 163, 184, 0.4);
    top: 140px;
    left: 80px;
    transform: rotate(-45deg);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
}

.geo-shape-5 {
    width: 260px;
    height: 260px;
    border: 28px solid #1D4ED8;
    top: -100px;
    right: -60px;
    transform: rotate(45deg);
    box-shadow: 15px 15px 35px rgba(15, 23, 42, 0.12);
}

.geo-shape-6 {
    width: 350px;
    height: 14px;
    background: rgba(148, 163, 184, 0.35);
    top: 60px;
    right: 100px;
    transform: rotate(-45deg);
}

.hero-content-layer {
    position: relative;
    z-index: 10;
}

.hero-badge {
    background: rgba(37, 99, 235, 0.1);
    color: #1D4ED8;
    border: 1px solid rgba(37, 99, 235, 0.25);
    padding: 6px 16px;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
}

.hero-title {
    font-size: 3.2rem;
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -1px;
    color: #0F172A;
}

.hero-title span {
    color: #2563EB;
}

.btn-nexorix-primary {
    background: var(--nx-blue);
    color: #FFFFFF;
    font-weight: 600;
    padding: 12px 28px;
    border-radius: 10px;
    border: none;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    text-decoration: none;
}

.btn-nexorix-primary:hover {
    background: var(--nx-blue-hover);
    color: #FFFFFF;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
}

.hero-glass-card {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.6);
    box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
}

/* 2. UPDATED: METRICS SECTION (FIXED MARGIN - NO OVERLAP) */
.trust-metrics-wrapper {
    position: relative;
    z-index: 12;
    margin-top: 40px; /* Negative margin removed to align properly below hero section */
    padding-bottom: 3rem;
}

.metric-card {
    background: linear-gradient(135deg, #0F172A 0%, #1E3A8A 100%);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 20px;
    padding: 28px 20px;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 20px 40px -10px rgba(15, 23, 42, 0.3);
    position: relative;
    overflow: hidden;
}

.metric-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #38BDF8, #60A5FA);
    opacity: 0.6;
    transition: opacity 0.35s ease;
}

.metric-card:hover {
    transform: translateY(-8px);
    border-color: rgba(96, 165, 250, 0.5);
    box-shadow: 0 25px 50px -10px rgba(37, 99, 235, 0.35);
}

.metric-card:hover::before {
    opacity: 1;
}

.metric-number {
    font-size: 2.6rem;
    font-weight: 800;
    color: #FFFFFF;
    line-height: 1;
    letter-spacing: -1px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.metric-label {
    color: #94A3B8;
    font-size: 0.9rem;
    font-weight: 600;
    margin-top: 10px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: color 0.3s ease;
}

.metric-card:hover .metric-label {
    color: #E2E8F0;
}

.metric-label i {
    font-size: 1.05rem;
    color: #38BDF8;
}

/* 3. ADVANCED ANIMATED SERVICE CARDS */
.visual-service-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid var(--nx-border);
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05);
    position: relative;
    z-index: 1;
}

.visual-service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 20px;
    padding: 2px;
    background: linear-gradient(135deg, rgba(37, 99, 235, 0.6), rgba(96, 165, 250, 0.2), transparent);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity: 0;
    transition: opacity 0.4s ease;
    pointer-events: none;
}

.visual-service-card:hover::before {
    opacity: 1;
}

.visual-service-card:hover {
    transform: translateY(-14px) scale(1.02);
    box-shadow: 0 30px 60px -15px rgba(37, 99, 235, 0.25);
}

.card-img-container {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.card-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}

.visual-service-card:hover .card-img-container img {
    transform: scale(1.12) rotate(1deg);
}

.card-img-container::after {
    content: '';
    position: absolute;
    top: 0;
    left: -150%;
    width: 80%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.35), transparent);
    transform: skewX(-25deg);
    transition: 0.8s ease-in-out;
}

.visual-service-card:hover .card-img-container::after {
    left: 180%;
}

.card-img-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.1) 0%, rgba(15, 23, 42, 0.7) 100%);
}

.tech-tag {
    position: absolute;
    top: 16px;
    left: 16px;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(8px);
    color: #60A5FA;
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-size: 0.75rem;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 50px;
    letter-spacing: 0.5px;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
}

.visual-service-card:hover .tech-tag {
    background: var(--nx-blue);
    color: #ffffff;
    border-color: transparent;
    transform: translateY(-2px);
}

.floating-icon-wrapper {
    position: absolute;
    top: -28px;
    right: 24px;
    z-index: 10;
}

.floating-icon {
    width: 58px;
    height: 58px;
    border-radius: 16px;
    background: var(--nx-blue);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 25px rgba(37, 99, 235, 0.35);
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

@keyframes pulseGlow {
    0% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0.6); }
    70% { box-shadow: 0 0 0 15px rgba(37, 99, 235, 0); }
    100% { box-shadow: 0 0 0 0 rgba(37, 99, 235, 0); }
}

.visual-service-card:hover .floating-icon {
    transform: scale(1.15) rotate(12deg);
    background: var(--nx-blue-hover);
    animation: pulseGlow 1.5s infinite;
}

.card-body-content {
    position: relative;
    padding: 2.2rem 1.75rem 1.5rem 1.75rem;
}

.card-hover-link {
    color: var(--nx-blue);
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.card-hover-link i {
    transition: transform 0.3s ease;
}

.visual-service-card:hover .card-hover-link {
    color: var(--nx-blue-hover);
}

.visual-service-card:hover .card-hover-link i {
    transform: translateX(8px);
}

/* 4. SPLIT-LAYOUT CTA BANNER */
.cta-enhanced-wrapper {
    background: radial-gradient(135% 100% at 50% 0%, #1E293B 0%, #0F172A 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 28px;
    padding: 60px 40px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25);
}

.cta-enhanced-wrapper::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -20%;
    width: 300px;
    height: 300px;
    background: rgba(37, 99, 235, 0.25);
    filter: blur(100px);
    border-radius: 50%;
    pointer-events: none;
}

.cta-enhanced-wrapper::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #2563EB, #60A5FA, #38BDF8);
}

.cta-img-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
}

.cta-img-container img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.cta-enhanced-wrapper:hover .cta-img-container img {
    transform: scale(1.05);
}

.cta-img-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.2) 0%, rgba(15, 23, 42, 0.6) 100%);
}

.cta-floating-badge {
    position: absolute;
    bottom: 20px;
    left: 20px;
    background: rgba(15, 23, 42, 0.85);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 10px 18px;
    border-radius: 14px;
    color: #FFFFFF;
    font-size: 0.85rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
}

.cta-feature-pill {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: #94A3B8;
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 0.82rem;
    font-weight: 500;
}
</style>

<!-- Hero Section with Vector Geometric Background -->
<section class="hero-wrapper">
    <div class="geo-shape geo-shape-1"></div>
    <div class="geo-shape geo-shape-2"></div>
    <div class="geo-shape geo-shape-3"></div>
    <div class="geo-shape geo-shape-4"></div>
    <div class="geo-shape geo-shape-5"></div>
    <div class="geo-shape geo-shape-6"></div>

    <div class="container-xl position-relative hero-content-layer">
        <div class="row align-items-center g-5">
            
            <!-- Left Side Content -->
            <div class="col-lg-6 animate__animated animate__fadeInLeft">
                <span class="hero-badge mb-3 d-inline-block">
                    <i class="bi bi-rocket-takeoff-fill me-1"></i> Software House
                </span>
                
                <h1 class="hero-title mb-4">
                    Architecting High-Scale Digital Products for <span>Global Brands</span>
                </h1>
                <p class="fs-5 text-secondary mb-4" style="max-width: 500px; line-height: 1.6;">
                    Nexorix Solution delivers enterprise-grade software, custom web applications, and scalable backend platforms engineered to win international markets.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="contact.php" class="btn btn-nexorix-primary px-4 py-3">Start Your Project</a>
                    <a href="portfolio.php" class="btn btn-outline-dark px-4 py-3" style="border-radius: 10px; font-weight: 600;">Explore Case Studies</a>
                </div>
            </div>

            <!-- Right Side Visual Glass Card -->
            <div class="col-lg-6 animate__animated animate__fadeInRight">
                <div class="hero-glass-card p-4 p-md-5 rounded-4">
                    <div class="d-flex align-items-center gap-2 mb-4">
                        <span class="rounded-circle d-inline-block" style="width: 10px; height: 10px; background-color: #EF4444;"></span>
                        <span class="rounded-circle d-inline-block" style="width: 10px; height: 10px; background-color: #F59E0B;"></span>
                        <span class="rounded-circle d-inline-block" style="width: 10px; height: 10px; background-color: #10B981;"></span>
                        <span class="ms-auto small text-muted font-monospace">nexorix-core-v2.1</span>
                    </div>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(37, 99, 235, 0.05); border: 1px solid rgba(37, 99, 235, 0.15);">
                                <div class="small text-muted">Global Uptime</div>
                                <div class="fs-3 fw-bold text-primary">99.98%</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 rounded-3" style="background: rgba(15, 23, 42, 0.03); border: 1px solid rgba(15, 23, 42, 0.1);">
                                <div class="small text-muted">API Throughput</div>
                                <div class="fs-3 fw-bold text-dark">1.2M req/s</div>
                            </div>
                        </div>
                    </div>

                    <div class="p-3 rounded-3 font-monospace small text-start" style="background: #0F172A; color: #38BDF8; border: 1px solid rgba(255, 255, 255, 0.05);">
                        <div><span class="text-success">$</span> nexorix deploy --env=production</div>
                        <div class="text-secondary">[OK] Security Shields Active</div>
                        <div class="text-secondary">[OK] Database Cluster Synced</div>
                        <div class="text-warning">&gt; Status: Ready for Enterprise Scale</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- UPDATED METRICS SECTION: Aligned Cleanly Below Hero Section -->
<section class="trust-metrics-wrapper">
    <div class="container-xl">
        <div class="row text-center g-3 g-lg-4">
            
            <div class="col-6 col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div class="metric-card">
                    <div class="metric-number">150+</div>
                    <div class="metric-label">
                        <i class="bi bi-briefcase-fill"></i> Enterprise Projects
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="metric-card">
                    <div class="metric-number">98%</div>
                    <div class="metric-label">
                        <i class="bi bi-person-check-fill"></i> Client Retention
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                <div class="metric-card">
                    <div class="metric-number">12+</div>
                    <div class="metric-label">
                        <i class="bi bi-globe-americas"></i> Countries Served
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <div class="metric-card">
                    <div class="metric-number">24/7</div>
                    <div class="metric-label">
                        <i class="bi bi-headset"></i> Dedicated Support
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Animated Services Section -->
<section class="section-padding" style="background-color: #F8FAFC;">
    <div class="container-xl">
        <div class="text-center mx-auto mb-5" style="max-width: 650px;">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-2">Our Expertise</span>
            <h2 class="fw-bold text-dark display-6 mb-3">Enterprise Web, SEO & Digital Marketing</h2>
            <p class="text-secondary fs-6">From custom full-stack web platforms to global search engine rankings and ROI-driven marketing campaigns.</p>
        </div>

        <div class="row g-4 g-lg-5">
            
            <!-- Service Card 1 -->
            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div class="visual-service-card h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Team Building Custom Web Applications">
                            <div class="card-img-overlay"></div>
                            <span class="tech-tag"><i class="bi bi-code-slash"></i> Web Development</span>
                        </div>
                        <div class="card-body-content">
                            <div class="floating-icon-wrapper">
                                <div class="floating-icon">
                                    <i class="bi bi-laptop fs-4"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark h5 mb-3">Custom Web Apps</h3>
                            <p class="text-secondary leading-relaxed small mb-0">Robust PHP, SQL, and modern JavaScript platforms engineered by dedicated development teams for enterprise scale.</p>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <a href="services.php" class="card-hover-link">Explore Solution <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-lg-4 col-md-6 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="visual-service-card h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80" alt="SEO Team Strategy & Analytics">
                            <div class="card-img-overlay"></div>
                            <span class="tech-tag"><i class="bi bi-graph-up-arrow"></i> SEO Optimization</span>
                        </div>
                        <div class="card-body-content">
                            <div class="floating-icon-wrapper">
                                <div class="floating-icon">
                                    <i class="bi bi-search fs-4"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark h5 mb-3">Search Engine Optimization</h3>
                            <p class="text-secondary leading-relaxed small mb-0">Technical SEO audits, keyword architecture, and backlink strategies to drive organic growth and top rankings.</p>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <a href="services.php" class="card-hover-link">Explore Solution <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="col-lg-4 col-md-6 mx-auto animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                <div class="visual-service-card h-100 d-flex flex-column justify-content-between">
                    <div>
                        <div class="card-img-container">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80" alt="Digital Marketing Campaign Strategy Team">
                            <div class="card-img-overlay"></div>
                            <span class="tech-tag"><i class="bi bi-megaphone"></i> Digital Marketing</span>
                        </div>
                        <div class="card-body-content">
                            <div class="floating-icon-wrapper">
                                <div class="floating-icon">
                                    <i class="bi bi-bullseye fs-4"></i>
                                </div>
                            </div>
                            <h3 class="fw-bold text-dark h5 mb-3">Performance Marketing</h3>
                            <p class="text-secondary leading-relaxed small mb-0">Data-driven social media management, strategic brand positioning, and conversion-focused paid campaigns.</p>
                        </div>
                    </div>
                    <div class="px-4 pb-4">
                        <a href="services.php" class="card-hover-link">Explore Solution <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Split CTA Banner Section -->
<section class="section-padding bg-white">
    <div class="container-xl">
        <div class="cta-enhanced-wrapper text-white animate__animated animate__fadeIn">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Left Side Content -->
                <div class="col-lg-7 text-center text-lg-start position-relative" style="z-index: 2;">
                    <span class="badge bg-primary bg-opacity-20 text-info border border-info border-opacity-20 px-3 py-2 rounded-pill fw-semibold mb-3">
                        <i class="bi bi-stars me-1"></i> Let's Build Together
                    </span>
                    
                    <h2 class="display-6 fw-bold mb-3 text-white leading-tight">
                        Ready to Scale Your Software Globally?
                    </h2>
                    
                    <p class="text-light opacity-75 fs-6 mb-4" style="max-width: 580px; line-height: 1.6;">
                        Partner with Nexorix Solution today and let us build secure, scalable, enterprise-grade software tailored for your company's growth.
                    </p>

                    <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start mb-4">
                        <span class="cta-feature-pill"><i class="bi bi-shield-check text-primary me-1"></i> Enterprise Security</span>
                        <span class="cta-feature-pill"><i class="bi bi-lightning-charge text-warning me-1"></i> Agile Delivery</span>
                        <span class="cta-feature-pill"><i class="bi bi-headset text-success me-1"></i> 24/7 Support</span>
                    </div>

                    <div class="d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
                        <a href="contact.php" class="btn btn-nexorix-primary px-4 py-3 fs-6">
                            Schedule a Consultation
                        </a>
                        <a href="https://wa.me/923018915037" target="_blank" class="btn btn-outline-light px-4 py-3" style="border-radius: 10px;">
                            <i class="bi bi-whatsapp me-2 text-success"></i> WhatsApp Us
                        </a>
                    </div>
                </div>

                <!-- Right Side Dedicated Team Image -->
                <div class="col-lg-5 position-relative" style="z-index: 2;">
                    <div class="cta-img-container">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Nexorix Solution Dedicated Development Team">
                        <div class="cta-img-overlay"></div>
                        
                        <div class="cta-floating-badge">
                            <div class="rounded-circle bg-success d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">
                                <i class="bi bi-check-lg text-white"></i>
                            </div>
                            <div>
                                <div class="text-white small">Dedicated Team</div>
                                <div class="text-secondary" style="font-size: 0.75rem;">Ready for Next Project</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>