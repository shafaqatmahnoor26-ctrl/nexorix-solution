<?php
// header.php - Nexorix Solution Header
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexorix Solution | Enterprise Software & Digital Solutions</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #1E40AF;
            --accent-blue: #3B82F6;
            --dark-navy: #0F172A;
            --light-bg: #F8FAFC;
            --border-color: #E2E8F0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #FFFFFF;
            color: var(--dark-navy);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, .brand-font {
            font-family: 'Montserrat', sans-serif;
        }

        .glass-card {
            background: #FFFFFF;
            border: 1px solid var(--border-color);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease-in-out;
        }
        
        .glass-card:hover {
            transform: translateY(-6px);
            border-color: var(--primary-blue);
            box-shadow: 0 12px 30px rgba(30, 64, 175, 0.12);
        }

        .btn-nexorix-primary {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-blue) 100%);
            color: #FFFFFF;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 8px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-nexorix-primary:hover {
            opacity: 0.95;
            color: #FFFFFF;
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.35);
        }

        .btn-nexorix-outline {
            background-color: transparent;
            color: var(--primary-blue);
            border: 2px solid var(--primary-blue);
            font-weight: 600;
            padding: 10px 26px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-nexorix-outline:hover {
            background-color: var(--primary-blue);
            color: #FFFFFF;
        }

        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-color);
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-custom py-3">
            <div class="container">
                <!-- Logo Display Fix -->
                <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
                    <img src="logo.png.jpg" alt="Nexorix Solution Logo" height="60" style="object-fit: contain;">
                </a>
                
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3 fw-semibold">
                        <li class="nav-item"><a class="nav-link text-dark px-3" href="index.php">Home</a></li>
                        <li class="nav-item">
    <a class="nav-link" href="about.php">About Us</a>
</li>
                        <li class="nav-item"><a class="nav-link text-dark px-3" href="services.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link text-dark px-3" href="portfolio.php">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link text-dark px-3" href="contact.php">Contact</a></li>
                        <li class="nav-item mt-2 mt-lg-0 ms-lg-2">
                            <!-- Right WhatsApp Direct Button -->
<a href="https://wa.me/923018915037" target="_blank" class="btn btn-success d-flex align-items-center gap-2 px-3 py-2 fw-semibold shadow-sm" style="border-radius: 8px;">
    <i class="bi bi-whatsapp fs-5"></i>
    <span>WhatsApp Us</span>
</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>