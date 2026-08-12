<?php
// about.php - Nexorix Solution About Us Page
require_once 'config.php';
include 'header.php';
?>

<style>
/* Page Specific Aesthetic Styles */
:root {
    --primary-blue: #2563eb;
    --primary-dark: #0f172a;
    --transition-smooth: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.about-hero-section {
    background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%), 
                url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
    padding: 6rem 0;
}

.feature-box {
    background: #ffffff;
    border: 1px solid rgba(226, 232, 240, 0.9);
    border-radius: 20px;
    padding: 2.5rem 2rem;
    transition: var(--transition-smooth);
}

.feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px -10px rgba(37, 99, 235, 0.15);
    border-color: rgba(37, 99, 235, 0.3);
}

.icon-square {
    width: 64px;
    height: 64px;
    border-radius: 16px;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.12) 0%, rgba(37, 99, 235, 0.06) 100%);
    color: #2563eb;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    transition: var(--transition-smooth);
}

.feature-box:hover .icon-square {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #ffffff;
    box-shadow: 0 8px 20px rgba(37, 99, 235, 0.35);
}

/* Modern Team Cards Styling */
.team-card {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    background: #0f172a;
    border: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    transition: var(--transition-smooth);
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(37, 99, 235, 0.25);
    border-color: rgba(96, 165, 250, 0.4);
}

.team-img-wrapper {
    position: relative;
    height: 320px;
    overflow: hidden;
}

.team-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.team-card:hover .team-img-wrapper img {
    transform: scale(1.08);
}

.team-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0) 40%, rgba(15, 23, 42, 0.95) 100%);
}

.team-info {
    position: relative;
    z-index: 2;
    padding: 1.5rem;
    background: #0f172a;
    color: #ffffff;
}

.social-icon-btn {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    color: #60A5FA;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: var(--transition-smooth);
    border: 1px solid rgba(255, 255, 255, 0.15);
}

.social-icon-btn:hover {
    background: #2563eb;
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
}
</style>

<!-- 1. Aesthetic Hero Header -->
<section class="about-hero-section text-white position-relative overflow-hidden">
    <div style="position: absolute; top: -10%; right: -5%; width: 500px; height: 500px; background: rgba(59, 130, 246, 0.2); filter: blur(130px); border-radius: 50%; pointer-events: none;"></div>
    
    <div class="container-xl text-center position-relative" style="z-index: 2;">
        <span class="badge bg-primary-subtle text-info border border-info-subtle px-3 py-2 rounded-pill fw-semibold mb-3">
            <i class="bi bi-building me-1"></i> Who We Are
        </span>
        <h1 class="display-3 fw-bold text-white mb-3">Empowering Global Brands With <span style="color: #60A5FA;">Precision Engineering</span></h1>
        <p class="lead text-light opacity-90 mx-auto" style="max-width: 750px;">
            Nexorix Solution is a modern software house specializing in full-stack web applications, high-performance database architectures, and intuitive digital interfaces.
        </p>
    </div>
</section>

<!-- 2. Story & Vision Section -->
<section class="py-5 bg-white">
    <div class="container-xl py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?auto=format&fit=crop&w=1000&q=80" alt="Software Engineering Team" class="img-fluid rounded-4 shadow-lg border">
                    <div class="position-absolute bottom-0 start-0 translate-middle-y ms-3 p-3 bg-dark text-white rounded-3 shadow d-none d-sm-block" style="background: rgba(15, 23, 42, 0.95) !important; border: 1px solid rgba(255,255,255,0.15); max-width: 240px;">
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-shield-check text-info fs-1"></i>
                            <div>
                                <h6 class="fw-bold mb-0 text-white">Clean Code Standard</h6>
                                <small class="text-secondary">Enterprise Quality</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-3">Our Identity</span>
                <h2 class="display-5 fw-bold text-dark mb-4">We Build Digital Products That Scale Effortlessly</h2>
                <p class="text-secondary leading-relaxed mb-4 fs-6">
                    At <strong>Nexorix Solution</strong>, we believe every business deserves enterprise-grade technology. From clean database designs to seamless user experiences, our core focus is engineering solutions that handle high-concurrency demands without compromising on security or speed.
                </p>
                
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="fw-semibold text-dark">Robust PHP & SQL Backends</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="fw-semibold text-dark">Pixel-Perfect UI/UX Design</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="fw-semibold text-dark">High Concurrency Tuning</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-primary fs-5"></i>
                            <span class="fw-semibold text-dark">Dedicated Client Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Core Values -->
<section class="py-5" style="background-color: #F8FAFC;">
    <div class="container-xl py-lg-4">
        <div class="text-center mx-auto mb-5" style="max-width: 650px;">
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-3">Driven By Purpose</span>
            <h2 class="display-5 fw-bold text-dark mb-3">The Principles We Stand By</h2>
            <p class="text-secondary fs-5">How we structure every line of code and manage client projects.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box h-100">
                    <div class="icon-square">
                        <i class="bi bi-code-slash fs-3"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Clean Code First</h4>
                    <p class="text-secondary small leading-relaxed mb-0">We write maintainable, well-documented, and scalable code that allows products to grow easily without technical debt.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box h-100">
                    <div class="icon-square">
                        <i class="bi bi-cpu-fill fs-3"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Performance Architecture</h4>
                    <p class="text-secondary small leading-relaxed mb-0">Database indexing, query optimization, and fast loading speeds are baked into every system we launch.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box h-100">
                    <div class="icon-square">
                        <i class="bi bi-lightning-charge-fill fs-3"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Client-Centric Execution</h4>
                    <p class="text-secondary small leading-relaxed mb-0">Transparent communication, quick turnaround times, and proactive problem solving from concept to deployment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Meet Our Team Section -->
<section class="py-5" style="background-color: #0b0f19;">
    <div class="container-xl py-lg-4">
        <div class="text-center mx-auto mb-5" style="max-width: 650px;">
            <span class="badge bg-primary-subtle text-info border border-info-subtle px-3 py-2 rounded-pill fw-semibold mb-3">
                <i class="bi bi-people-fill me-1"></i> Leadership & Mindset
            </span>
            <h2 class="display-5 fw-bold text-white mb-3">Meet the Minds Behind Nexorix</h2>
            <p class="text-secondary fs-5">Engineers, architects, and designers committed to delivering technical excellence.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Team Member 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=800&q=80" alt="Lead Architect">
                        <div class="team-overlay"></div>
                    </div>
                    <div class="team-info">
                        <h5 class="fw-bold text-white mb-1">Alex Vance</h5>
                        <p class="text-info small fw-semibold mb-3">Lead Software Architect</p>
                        <p class="text-secondary small mb-4">Specializes in high-concurrency database design and scalable backend infrastructure.</p>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-github"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-twitter-x"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="Senior PHP Engineer">
                        <div class="team-overlay"></div>
                    </div>
                    <div class="team-info">
                        <h5 class="fw-bold text-white mb-1">David Miller</h5>
                        <p class="text-info small fw-semibold mb-3">Senior PHP & SQL Specialist</p>
                        <p class="text-secondary small mb-4">Focuses on API integrations, custom CMS platforms, and core database tuning.</p>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-github"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" alt="UI/UX Director">
                        <div class="team-overlay"></div>
                    </div>
                    <div class="team-info">
                        <h5 class="fw-bold text-white mb-1">Sophia Chen</h5>
                        <p class="text-info small fw-semibold mb-3">UI/UX Engineering Lead</p>
                        <p class="text-secondary small mb-4">Crafts intuitive, dark-mode/glassmorphic web interfaces and mobile-first layouts.</p>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-dribbble"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card h-100">
                    <div class="team-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=800&q=80" alt="DevOps Engineer">
                        <div class="team-overlay"></div>
                    </div>
                    <div class="team-info">
                        <h5 class="fw-bold text-white mb-1">Marcus Wright</h5>
                        <p class="text-info small fw-semibold mb-3">DevOps & Security Engineer</p>
                        <p class="text-secondary small mb-4">Ensures zero-downtime server deployments, SSL security, and performance audits.</p>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-icon-btn"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-github"></i></a>
                            <a href="#" class="social-icon-btn"><i class="bi bi-shield-check"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. CTA Section -->
<section class="py-5 text-white" style="background-color: #0F172A !important; border-top: 1px solid rgba(255,255,255,0.08);">
    <div class="container-xl text-center py-4">
        <h2 class="display-5 fw-bold mb-3">Have a Project in Mind?</h2>
        <p class="text-secondary fs-5 mx-auto mb-4" style="max-width: 600px;">
            Let’s turn your software concept into a reliable, high-performing web application.
        </p>
        <a href="contact.php" class="btn btn-primary btn-lg px-5 py-3 rounded-pill shadow">Talk to Our Team <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
</section>

<?php include 'footer.php'; ?>