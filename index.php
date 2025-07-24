<?php include 'header.php'; ?>

    <!-- Hero Slider Section -->
    <section id="home" class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-slide" style="background-image: url('images/real.jpg');">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="hero-content">
                                <h1 class="hero-title">Premium Real Estate<br>Consultancy in Pune</h1>
                                <p class="hero-subtitle">Discover exceptional properties with our expert guidance and personalized service</p>
                                <div class="hero-buttons">
                                    <a href="#properties" class="btn btn-primary">View Properties</a>
                                    <a href="#contact" class="btn btn-outline-light">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('images/real1.jpg');">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="hero-content">
                                <h1 class="hero-title">Luxury Living<br>Redefined</h1>
                                <p class="hero-subtitle">Experience the finest properties in Pune's most prestigious locations</p>
                                <div class="hero-buttons">
                                    <a href="#properties" class="btn btn-primary">View Properties</a>
                                    <a href="#contact" class="btn btn-outline-light">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="hero-slide" style="background-image: url('images/real3.jpg');">
                        <div class="hero-overlay"></div>
                        <div class="container">
                            <div class="hero-content">
                                <h1 class="hero-title">Your Dream Home<br>Awaits</h1>
                                <p class="hero-subtitle">21+ years of excellence in delivering exceptional real estate solutions</p>
                                <div class="hero-buttons">
                                    <a href="#properties" class="btn btn-primary">View Properties</a>
                                    <a href="#contact" class="btn btn-outline-light">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="index-about-section">
        <div class="container">
            <div class="index-about-split">
                <!-- Left Side - About Content -->
                <div class="index-about-content-side">
                    <div class="index-content-wrapper">
                        <div class="index-section-badge">ABOUT US</div>
                        <h2 class="index-about-title">Building Dreams,<br>Creating Homes</h2>
                        <div class="index-about-description">
                            <p>
                                For over 15 years, Hestia Abodes has been Pune's most trusted real estate consultancy, transforming property dreams into reality. We combine deep market knowledge with personalized service to deliver exceptional results.
                            </p>
                            <p>
                                Our commitment to excellence, transparency, and client satisfaction has made us the preferred choice for thousands of families and investors across Pune.
                            </p>
                        </div>

                        <div class="index-about-features">
                            <div class="index-feature-item">
                                <div class="index-feature-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="index-feature-content">
                                    <h4>Trusted Expertise</h4>
                                    <p>15+ years of proven track record in Pune's real estate market</p>
                                </div>
                            </div>

                            <div class="index-feature-item">
                                <div class="index-feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="index-feature-content">
                                    <h4>Personalized Service</h4>
                                    <p>Tailored solutions that match your unique requirements</p>
                                </div>
                            </div>

                            <div class="index-feature-item">
                                <div class="index-feature-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="index-feature-content">
                                    <h4>Award-Winning Excellence</h4>
                                    <p>Recognized for outstanding service and client satisfaction</p>
                                </div>
                            </div>
                        </div>

                        <div class="index-about-cta">
                            <a href="#contact" class="btn btn-primary">Get Free Consultation</a>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Statistics Cards -->
                <div class="index-about-stats-side">
                    <div class="index-stats-container">
                        <div class="index-stats-grid">
                            <!-- Card 1: Years in Business -->
                            <div class="index-stat-card index-card-dark" data-count="15">
                                <div class="index-card-background">
                                    <div class="index-card-pattern"></div>
                                </div>
                                <div class="index-card-content">
                                    <div class="index-stat-number">15</div>
                                    <div class="index-stat-label">YEARS IN BUSINESS</div>
                                    <div class="index-stat-description">Serving Pune since 2009</div>
                                </div>
                            </div>

                            <!-- Card 2: Projects Completed -->
                            <div class="index-stat-card index-card-dark" data-count="500">
                                <div class="index-card-background">
                                    <div class="index-card-pattern"></div>
                                </div>
                                <div class="index-card-content">
                                    <div class="index-stat-number">500</div>
                                    <div class="index-stat-label">PROJECTS COMPLETED</div>
                                    <div class="index-stat-description">Successful deliveries</div>
                                </div>
                            </div>

                            <!-- Card 3: Happy Clients -->
                            <div class="index-stat-card index-card-dark" data-count="5000">
                                <div class="index-card-background">
                                    <div class="index-card-pattern"></div>
                                </div>
                                <div class="index-card-content">
                                    <div class="index-stat-number">5,000+</div>
                                    <div class="index-stat-label">HAPPY CLIENTS</div>
                                    <div class="index-stat-description">Satisfied families</div>
                                </div>
                            </div>

                            <!-- Card 4: Awards Won -->
                            <div class="index-stat-card index-card-dark" data-count="25">
                                <div class="index-card-background">
                                    <div class="index-card-pattern"></div>
                                </div>
                                <div class="index-card-content">
                                    <div class="index-stat-number">25</div>
                                    <div class="index-stat-label">AWARDS WON</div>
                                    <div class="index-stat-description">Industry recognition</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Our SERVICES</h2>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="images/real.jpg" alt="Real Estate Investing">
                    </div>
                    <div class="service-content">
                        <h4>REAL ESTATE INVESTING</h4>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="images/real1.jpg" alt="Property Valuation">
                    </div>
                    <div class="service-content">
                        <h4>PROPERTY VALUATION EXPERTISE</h4>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-image">
                        <img src="images/real3.jpg" alt="Real Estate Solutions">
                    </div>
                    <div class="service-content">
                        <h4>REAL ESTATE SOLUTIONS</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section id="properties" class="index-properties-section">
        <div class="container">
            <div class="index-section-header text-center">
                <h2 class="index-section-title">Featured PROPERTIES</h2>
            </div>

            <!-- Property 1 - Content Left, Image Right -->
            <div class="index-property-showcase" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="index-property-info">
                            <div class="index-property-number">NO. 1</div>
                            <h3 class="index-property-name">THE PAVILION HOUSE</h3>
                            <div class="index-property-type">SINGLE FAMILY HOME</div>
                            <div class="index-property-location">Baner, Pune</div>
                            <div class="index-property-description">
                                A stunning modern residence featuring contemporary architecture,
                                spacious interiors, and premium amenities in the heart of Baner.
                            </div>
                            <div class="index-property-price">₹2.5 Cr onwards</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="index-property-image-main">
                            <img src="images/real1.jpg" alt="The Pavilion House">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 2 - Image Left, Content Right -->
            <div class="index-property-showcase index-property-reverse" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="index-property-info">
                            <div class="index-property-number">NO. 2</div>
                            <h3 class="index-property-name">LUXURY VILLA ESTATE</h3>
                            <div class="index-property-type">PREMIUM VILLA</div>
                            <div class="index-property-location">Wakad, Pune</div>
                            <div class="index-property-description">
                                An exclusive villa offering unparalleled luxury with private gardens,
                                premium finishes, and world-class amenities.
                            </div>
                            <div class="index-property-price">₹3.2 Cr onwards</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="index-property-image-main">
                            <img src="images/real.jpg" alt="Luxury Villa Estate">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 3 - Content Left, Image Right -->
            <div class="index-property-showcase" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="index-property-info">
                            <div class="index-property-number">NO. 3</div>
                            <h3 class="index-property-name">MODERN APARTMENTS</h3>
                            <div class="index-property-type">LUXURY APARTMENTS</div>
                            <div class="index-property-location">Hinjewadi, Pune</div>
                            <div class="index-property-description">
                                Contemporary apartments designed for modern living with smart home features,
                                premium amenities, and excellent connectivity.
                            </div>
                            <div class="index-property-price">₹1.8 Cr onwards</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="index-property-image-main">
                            <img src="images/real3.jpg" alt="Modern Apartments">
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Properties Button -->
            <div class="text-center mt-5">
                <a href="project.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-building me-2"></i>
                    View All Properties
                </a>
            </div>
        </div>
    </section>

    <!-- Property Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container-fluid">
            <div class="section-header text-center">
                <h2 class="section-title">Property GALLERY</h2>
                <p class="section-subtitle">Explore our stunning collection of premium properties</p>
            </div>

            <!-- Gallery Filter Tabs -->
            <div class="gallery-filters text-center">
                <button class="filter-btn active" data-filter="all">All Properties</button>
                <button class="filter-btn" data-filter="residential">Residential</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="luxury">Luxury</button>
            </div>

            <!-- Creative Gallery Layout -->
            <div class="gallery-creative">
                <!-- Large Featured Image -->
                <div class="gallery-item gallery-large" data-category="luxury">
                    <div class="gallery-image">
                        <img src="images/real1.jpg" alt="Luxury Villa Estate">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <span class="property-tag">FEATURED</span>
                                <h3>Luxury Villa Estate</h3>
                                <p>Premium architectural masterpiece with world-class amenities</p>
                                <div class="property-details">
                                    <span><i class="fas fa-map-marker-alt"></i> Wakad, Pune</span>
                                    <span><i class="fas fa-home"></i> Villa</span>
                                </div>
                                <button class="btn btn-outline-light btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medium Images -->
                <div class="gallery-item gallery-medium" data-category="residential">
                    <div class="gallery-image">
                        <img src="images/real.jpg" alt="Modern Apartments">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <span class="property-tag">NEW</span>
                                <h4>Modern Apartments</h4>
                                <p>Contemporary living spaces</p>
                                <div class="property-details">
                                    <span><i class="fas fa-map-marker-alt"></i> Baner, Pune</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item gallery-medium" data-category="commercial">
                    <div class="gallery-image">
                        <img src="images/real3.jpg" alt="Commercial Spaces">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <span class="property-tag">PREMIUM</span>
                                <h4>Commercial Spaces</h4>
                                <p>Prime business locations</p>
                                <div class="property-details">
                                    <span><i class="fas fa-map-marker-alt"></i> Hinjewadi, Pune</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Small Images -->
                <div class="gallery-item gallery-small" data-category="residential">
                    <div class="gallery-image">
                        <img src="images/real.jpg" alt="Cozy Homes">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h5>Cozy Homes</h5>
                                <p>Perfect for families</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item gallery-small" data-category="luxury">
                    <div class="gallery-image">
                        <img src="images/real1.jpg" alt="Penthouse Suites">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h5>Penthouse Suites</h5>
                                <p>Sky-high luxury</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item gallery-small" data-category="commercial">
                    <div class="gallery-image">
                        <img src="images/real3.jpg" alt="Office Complexes">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h5>Office Complexes</h5>
                                <p>Modern workspaces</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-5">
                <button class="btn btn-primary btn-lg" id="viewMoreGallery">
                    <i class="fas fa-images"></i> View Complete Gallery
                </button>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <!-- Animated Background -->
        <div class="contact-background">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
            </div>
        </div>

        <div class="container">
            <!-- Creative Header -->
            <div class="contact-header text-center">
                <div class="header-badge">CONTACT US</div>
                <h2 class="contact-title">
                    <span class="title-line">Let's Make Your</span>
                    <span class="title-highlight">Dream Home</span>
                    <span class="title-line">A Reality</span>
                </h2>
                <p class="contact-subtitle">Ready to take the next step? We're here to guide you through every detail of your property journey.</p>
            </div>

            <!-- Interactive Contact Cards -->
            <div class="contact-methods">
                <div class="method-card" data-method="call">
                    <div class="method-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="method-content">
                        <h4>Call Us Now</h4>
                        <p>Speak directly with our experts</p>
                        <a href="tel:+917038204841" class="method-link">+91 70382 04841</a>
                    </div>
                    <div class="method-hover-effect"></div>
                </div>

                <div class="method-card" data-method="email">
                    <div class="method-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="method-content">
                        <h4>Email Us</h4>
                        <p>Get detailed information via email</p>
                        <a href="mailto:info@hestiaabodes.com" class="method-link">info@hestiaabodes.com</a>
                    </div>
                    <div class="method-hover-effect"></div>
                </div>

                <div class="method-card" data-method="visit">
                    <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="method-content">
                        <h4>Visit Our Office</h4>
                        <p>Meet us in person for consultation</p>
                        <span class="method-link">Pune, Maharashtra</span>
                    </div>
                    <div class="method-hover-effect"></div>
                </div>

                <div class="method-card" data-method="form">
                    <div class="method-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="method-content">
                        <h4>Send Message</h4>
                        <p>Fill out our contact form below</p>
                        <span class="method-link">Quick Response</span>
                    </div>
                    <div class="method-hover-effect"></div>
                </div>
            </div>

            <!-- Enhanced Contact Form -->
            <div class="contact-form-section">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="form-container">
                            <div class="form-header">
                                <h3>Send Us a Message</h3>
                                <p>Fill out the form below and we'll get back to you within 24 hours</p>
                            </div>

                            <form class="contact-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <input type="text" class="form-input" id="name" name="name" required>
                                            <label for="name" class="form-label">Full Name *</label>
                                            <div class="input-line"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <input type="email" class="form-input" id="email" name="email" required>
                                            <label for="email" class="form-label">Email Address *</label>
                                            <div class="input-line"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="input-wrapper">
                                            <input type="tel" class="form-input" id="phone" name="phone" required>
                                            <label for="phone" class="form-label">Phone Number *</label>
                                            <div class="input-line"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select class="form-select" id="interest" name="interest">
                                                <option value="">Select Property Type</option>
                                                <option value="residential">Residential</option>
                                                <option value="commercial">Commercial</option>
                                                <option value="investment">Investment</option>
                                                <option value="rental">Rental</option>
                                            </select>
                                            <label for="interest" class="form-label">Property Interest</label>
                                            <div class="input-line"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select class="form-select" id="location" name="location">
                                                <option value="">Select Preferred Location</option>
                                                <option value="baner">Baner</option>
                                                <option value="wakad">Wakad</option>
                                                <option value="hinjewadi">Hinjewadi</option>
                                                <option value="kharadi">Kharadi</option>
                                                <option value="koregaon-park">Koregaon Park</option>
                                                <option value="magarpatta">Magarpatta</option>
                                                <option value="aundh">Aundh</option>
                                                <option value="viman-nagar">Viman Nagar</option>
                                                <option value="hadapsar">Hadapsar</option>
                                                <option value="pune-city">Pune City</option>
                                                <option value="other">Other Location</option>
                                            </select>
                                            <label for="location" class="form-label">Preferred Location</label>
                                            <div class="input-line"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="select-wrapper">
                                            <select class="form-select" id="budget" name="budget">
                                                <option value="">Select Budget Range</option>
                                                <option value="under-50">Under ₹50 Lakhs</option>
                                                <option value="50-100">₹50 Lakhs - ₹1 Crore</option>
                                                <option value="100-200">₹1 Crore - ₹2 Crores</option>
                                                <option value="200-500">₹2 Crores - ₹5 Crores</option>
                                                <option value="above-500">Above ₹5 Crores</option>
                                            </select>
                                            <label for="budget" class="form-label">Budget Range</label>
                                            <div class="input-line"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group full-width">
                                    <div class="textarea-wrapper">
                                        <textarea class="form-textarea" id="message" name="message" rows="5" placeholder="Tell us about your requirements..."></textarea>
                                        <label for="message" class="form-label">Your Message</label>
                                        <div class="input-line"></div>
                                    </div>
                                </div>

                                <div class="form-submit">
                                    <button type="submit" class="submit-btn">
                                        <span class="btn-text">Send Message</span>
                                        <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                                        <div class="btn-ripple"></div>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office Hours & Social -->
            <div class="contact-footer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="office-hours">
                            <h4>Office Hours</h4>
                            <div class="hours-list">
                                <div class="hours-item">
                                    <span class="day">Monday - Saturday</span>
                                    <span class="time">9:00 AM - 7:00 PM</span>
                                </div>
                                <div class="hours-item">
                                    <span class="day">Sunday</span>
                                    <span class="time">10:00 AM - 5:00 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="social-section">
                            <h4>Follow Us</h4>
                            <div class="social-links">
                                <a href="#" class="social-link" data-platform="instagram">
                                    <i class="fab fa-instagram"></i>
                                    <span>Instagram</span>
                                </a>
                                <a href="#" class="social-link" data-platform="linkedin">
                                    <i class="fab fa-linkedin"></i>
                                    <span>LinkedIn</span>
                                </a>
                                <a href="#" class="social-link" data-platform="youtube">
                                    <i class="fab fa-youtube"></i>
                                    <span>YouTube</span>
                                </a>
                                <a href="#" class="social-link" data-platform="facebook">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content text-center">
                <h3>Stay Updated with Pune's Real Estate Market</h3>
                <p>Get the latest property listings, market insights, and exclusive deals delivered to your inbox.</p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- Company Info -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-section">
                            <div class="footer-brand">
                                <img src="images/Hestia Abodes All Platinum Grey Black logo.png" height="100px;" alt="Hestia Abodes" class="footer-logo">
                                <span style="color:white">Hestia Abodes</span>
                            </div>
                            <p class="footer-description">
                                Pune's most trusted real estate consultancy firm with 21+ years of experience
                                in delivering dream homes and investment opportunities.
                            </p>
                            <div class="footer-stats">
                                <div class="stat-item">
                                    <span class="stat-number">21+</span>
                                    <span class="stat-label">Years</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">500+</span>
                                    <span class="stat-label">Homes</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">100%</span>
                                    <span class="stat-label">Satisfaction</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-section">
                            <h5>Quick Links</h5>
                            <ul class="footer-links">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#properties">Properties</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Services -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-section">
                            <h5>Our Services</h5>
                            <ul class="footer-links">
                                <li><a href="#residential">Residential Properties</a></li>
                                <li><a href="#commercial">Commercial Properties</a></li>
                                <li><a href="#investment">Investment Consulting</a></li>
                                <li><a href="#rental">Property Rentals</a></li>
                                <li><a href="#valuation">Property Valuation</a></li>
                                <li><a href="#management">Property Management</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-section">
                            <h5>Get In Touch</h5>
                            <div class="footer-contact">
                                <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:+917038204841">+91 70382 04841</a>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <a href="mailto:info@hestiaabodes.com">info@hestiaabodes.com</a>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Pune, Maharashtra, India</span>
                                </div>
                            </div>

                            <div class="footer-social">
                                <h6>Follow Us</h6>
                                <div class="social-icons">
                                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                                    <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="footer-copyright">
                            &copy; 2025 Hestia Abodes. All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-bottom-links">
                            <a href="#privacy">Privacy Policy</a>
                            <span>|</span>
                            <a href="#terms">Terms of Service</a>
                            <span>|</span>
                            <a href="#sitemap">Sitemap</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- WhatsApp Float Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/917038204841" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>
