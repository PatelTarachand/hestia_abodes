<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hestia Abodes - Premium Real Estate Consultancy in Pune</title>

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
            <a class="navbar-brand" href="#home">
                <img src="images/Hestia Abodes All Platinum Grey Black logo.png" alt="Hestia Abodes" class="brand-logo">
                <span class="brand-text">Hestia Abodes</span>
            </a>

            <!-- Desktop Menu -->
            <div class="navbar-nav d-none d-lg-flex ms-auto align-items-center">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="index.php#services">Services</a>
                <a class="nav-link" href="index.php#properties">Properties</a>
                <a class="nav-link" href="tel:+917038204841" title="Call Us">
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
                <li class="menu-dropdown">
                    <a href="index.php#properties" class="dropdown-toggle">Projects <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="residential.html">Residential</a></li>
                        <li><a href="commercial.html">Commercial</a></li>
                    </ul>
                </li>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="blog.html">Blog & Insights</a></li>
            </ul>

            <hr class="sidebar-divider">

            <ul class="sidebar-menu sidebar-contact">
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#schedule">Schedule a Site Visit</a></li>
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
