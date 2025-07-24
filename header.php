<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Hestia Abodes - Premium Real Estate Consultancy in Pune'; ?></title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Hestia Abodes is Pune\'s trusted real estate consultancy with 21+ years of experience. Find your dream home or investment property with expert guidance.'; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'Pune real estate, property consultancy, real estate agents Pune, buy property Pune, investment properties'; ?>">
    <meta name="author" content="Hestia Abodes">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Hestia Abodes - Premium Real Estate Consultancy in Pune'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Hestia Abodes is Pune\'s trusted real estate consultancy with 21+ years of experience.'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($canonical_url) ? $canonical_url : 'https://hestiaabodes.in/'; ?>">
    <meta property="og:image" content="https://hestiaabodes.in/images/Hestia Abodes All Platinum Grey Black logo.png">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'Hestia Abodes - Premium Real Estate Consultancy in Pune'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Hestia Abodes is Pune\'s trusted real estate consultancy with 21+ years of experience.'; ?>">
    <meta name="twitter:image" content="https://hestiaabodes.in/images/Hestia Abodes All Platinum Grey Black logo.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo isset($canonical_url) ? $canonical_url : 'https://hestiaabodes.in/'; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top transparent-nav">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/Hestia Abodes All Platinum Grey Black logo.png" alt="Hestia Abodes" class="brand-logo">
                <span class="brand-text">Hestia Abodes</span>
            </a>

            <!-- Desktop Menu -->
            <div class="navbar-nav d-none d-lg-flex ms-auto align-items-center">
                <a class="nav-link" href="services.php">Our Services</a>
                <a class="nav-link" href="featured-projects.php">Projects</a>
                <a class="nav-link" href="why-choose-us.php">Why Choose Us</a>
                <a class="nav-link" href="contact.php">Contact Us</a>
                <a class="nav-link" href="tel:+919067881848" title="Call Us">
                    <i class="fas fa-phone"></i>
                </a>
                <a class="nav-link" href="#" id="sidebarToggle" title="Menu">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="navbar-toggler d-lg-none" type="button" id="mobileMenuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand">
                <img src="images/Hestia Abodes All Platinum Grey Black logo.png" alt="Hestia Abodes" class="sidebar-logo">
                <span>Hestia Abodes</span>
            </div>
            <button class="btn-close" id="sidebarClose"></button>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                
                <li><a href="services.php">Our Services</a></li>
                <li><a href="featured-projects.php">Featured Projects</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="how-we-work.php">How We Work</a></li>
                <li><a href="why-choose-us.php">Why Choose Us</a></li>
                <li><a href="blog.php">Blog & Insights</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>

            <hr class="sidebar-divider">

            <ul class="sidebar-menu sidebar-contact">
                <li><a href="contact.php#contact-form">Send Message</a></li>
                <li><a href="contact.php#appointment-form">Book Appointment</a></li>
            </ul>

            <hr class="sidebar-divider">

            <div class="social-section">
                <span>Follow Us</span>
                <div class="social-icons">
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
