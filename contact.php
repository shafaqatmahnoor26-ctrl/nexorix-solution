<?php
// contact.php - Nexorix Solution Contact Page (Direct WhatsApp Redirect)
require_once 'config.php';

$error_msg = '';

// Form Submit Handling
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $service   = trim($_POST['service'] ?? '');
    $message   = trim($_POST['message'] ?? '');

    if (!empty($full_name) && !empty($email) && !empty($message)) {
        // 1. Database Mein Save Karna
        $stmt = $conn->prepare("INSERT INTO inquiries (full_name, email, service, message) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssss", $full_name, $email, $service, $message);
            if ($stmt->execute()) {
                
                // 2. WhatsApp Text Format Banayein
                $phone_number = "923018915037";
                $text = "*New Project Inquiry - Nexorix Solution*\n\n"
                      . "*Name:* " . $full_name . "\n"
                      . "*Email:* " . $email . "\n"
                      . "*Service:* " . $service . "\n"
                      . "*Details:* " . $message;
                
                $whatsapp_url = "https://wa.me/" . $phone_number . "?text=" . urlencode($text);

                $stmt->close();

                // 3. Direct Server-Side Redirect (No Browser Pop-up Blocking)
                header("Location: " . $whatsapp_url);
                exit();
            } else {
                $error_msg = "Database Error: " . $conn->error;
                $stmt->close();
            }
        } else {
            $error_msg = "Database Error: Table 'inquiries' not found.";
        }
    } else {
        $error_msg = "Please fill in all required fields.";
    }
}

include 'header.php';
?>

<!-- Banner Section -->
<section class="py-5 text-center bg-light border-bottom">
    <div class="container py-3">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-3">Get In Touch</span>
        <h1 class="display-5 fw-bold text-dark mb-3">Let's Build Something Great Together</h1>
        <p class="text-secondary mx-auto mb-0" style="max-width: 650px;">
            Have an enterprise project or web solution in mind? Reach out to Nexorix Solution for technical consultation.
        </p>
    </div>
</section>

<!-- Contact Content Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row g-5">
            
            <!-- Left Side Info Box -->
            <div class="col-lg-5">
                <div class="p-4 p-md-5 rounded-4 text-white shadow-sm h-100 d-flex flex-column justify-content-between" style="background-color: #0F172A;">
                    <div>
                        <h3 class="fw-bold mb-3">Contact Information</h3>
                        <p class="text-light opacity-75 mb-4">Fill out the form or reach out directly to discuss your custom software requirements.</p>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-envelope-fill fs-5"></i>
                            </div>
                            <div>
                                <small class="text-light opacity-75 d-block">Email Us</small>
                                <a href="mailto:Contact@nexorixsolution.com" class="text-white text-decoration-none fw-bold">Contact@nexorixsolution.com</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-telephone-fill fs-5"></i>
                            </div>
                            <div>
                                <small class="text-light opacity-75 d-block">Call / WhatsApp</small>
                                <a href="https://wa.me/923018915037" target="_blank" class="text-white text-decoration-none fw-bold">+92 301 8915037</a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-primary text-white rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                <i class="bi bi-clock-fill fs-5"></i>
                            </div>
                            <div>
                                <small class="text-light opacity-75 d-block">Operating Hours</small>
                                <span class="fw-bold">24/7 Global Client Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Form Box -->
            <div class="col-lg-7">
                <div class="glass-card p-4 p-md-5 rounded-4 shadow-sm border bg-white">
                    <h3 class="fw-bold text-dark mb-4">Send Us a Message</h3>

                    <!-- Status Alerts -->
                    <?php if (!empty($error_msg)): ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i><?php echo $error_msg; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="contact.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Full Name *</label>
                                <input type="text" name="full_name" class="form-control form-control-lg bg-light" placeholder="John Doe" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark">Email Address *</label>
                                <input type="email" name="email" class="form-control form-control-lg bg-light" placeholder="name@company.com" required>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Service Required</label>
                                <select name="service" class="form-select form-select-lg bg-light">
                                    <option value="Custom Web Application">Custom Web Application</option>
                                    <option value="Database Architecture">Database Architecture</option>
                                    <option value="Enterprise Software">Enterprise Software</option>
                                    <option value="UI/UX Interface Design">UI/UX Interface Design</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark">Project Details *</label>
                                <textarea name="message" class="form-control form-control-lg bg-light" rows="4" placeholder="Tell us about your project requirements..." required></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">Submit Project Inquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>