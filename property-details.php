<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details - Hestia Abodes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg transparent-nav fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.html">
                <img src="images/Hestia Abodes All Platinum Grey Black logo.png" alt="Hestia Abodes" class="brand-logo">
                <span class="brand-text">Hestia Abodes</span>
            </a>

            <!-- Mobile Menu Button -->
            <button class="navbar-toggler" type="button" id="sidebarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Desktop Menu -->
            <div class="navbar-nav ms-auto d-none d-lg-flex">
                <a class="nav-link" href="index.html">Home</a>
                <a class="nav-link" href="about.html">About</a>
                <a class="nav-link" href="index.html#properties">Properties</a>
                <a class="nav-link" href="services.html">Services</a>
                <a class="nav-link" href="blog.html">Blog</a>
                <a class="nav-link" href="index.html#contact">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Property Details Hero -->
    <section class="property-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="property-gallery">
                        <div class="main-image">
                            <img src="images/real1.jpg" alt="Property Main Image" id="mainPropertyImage">
                            <div class="image-counter">
                                <span id="currentImage">1</span> / <span id="totalImages">5</span>
                            </div>
                        </div>
                        <div class="thumbnail-gallery">
                            <div class="thumbnail active" data-image="images/real1.jpg">
                                <img src="images/real1.jpg" alt="Property Image 1">
                            </div>
                            <div class="thumbnail" data-image="images/real.jpg">
                                <img src="images/real.jpg" alt="Property Image 2">
                            </div>
                            <div class="thumbnail" data-image="images/real3.jpg">
                                <img src="images/real3.jpg" alt="Property Image 3">
                            </div>
                            <div class="thumbnail" data-image="images/real1.jpg">
                                <img src="images/real1.jpg" alt="Property Image 4">
                            </div>
                            <div class="thumbnail" data-image="images/real.jpg">
                                <img src="images/real.jpg" alt="Property Image 5">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="property-info">
                        <div class="property-badge">For Sale</div>
                        <h1 class="property-title">Luxury 3BHK Apartment in Koregaon Park</h1>
                        <div class="property-price">₹2.5 Crores</div>
                        <div class="property-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Koregaon Park, Pune
                        </div>
                        
                        <div class="property-features">
                            <div class="feature-item">
                                <i class="fas fa-bed"></i>
                                <span>3 Bedrooms</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-bath"></i>
                                <span>3 Bathrooms</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-ruler-combined"></i>
                                <span>1,850 sq ft</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-car"></i>
                                <span>2 Parking</span>
                            </div>
                        </div>

                        <div class="property-actions">
                            <button class="btn btn-primary btn-lg">Schedule Visit</button>
                            <button class="btn btn-outline-dark btn-lg">Contact Agent</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Property Details Content -->
    <section class="property-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="property-description">
                        <h2>Property Description</h2>
                        <p>Experience luxury living in this stunning 3BHK apartment located in the heart of Koregaon Park. This meticulously designed home offers modern amenities, spacious rooms, and breathtaking views of the city.</p>
                        
                        <p>The apartment features premium finishes throughout, including marble flooring, modular kitchen with branded appliances, and designer bathrooms. The master bedroom includes a walk-in closet and en-suite bathroom with premium fixtures.</p>

                        <h3>Key Features</h3>
                        <ul class="features-list">
                            <li>Premium location in Koregaon Park</li>
                            <li>24/7 security and concierge services</li>
                            <li>Swimming pool and fitness center</li>
                            <li>Landscaped gardens and children's play area</li>
                            <li>Power backup and water supply</li>
                            <li>Close to schools, hospitals, and shopping centers</li>
                        </ul>
                    </div>

                    <div class="property-amenities">
                        <h2>Amenities</h2>
                        <div class="amenities-grid">
                            <div class="amenity-item">
                                <i class="fas fa-swimming-pool"></i>
                                <span>Swimming Pool</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-dumbbell"></i>
                                <span>Gym</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>24/7 Security</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-car"></i>
                                <span>Parking</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-leaf"></i>
                                <span>Garden</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-bolt"></i>
                                <span>Power Backup</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-wifi"></i>
                                <span>High Speed WiFi</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-elevator"></i>
                                <span>Elevator</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-gamepad"></i>
                                <span>Kids Play Area</span>
                            </div>
                        </div>
                    </div>

                    <div class="property-location-map">
                        <h2>Location & Nearby</h2>
                        <div class="map-container">
                            <div class="map-placeholder">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4>Koregaon Park, Pune</h4>
                                <p>Interactive map will be loaded here</p>
                                <button class="btn btn-primary">View on Google Maps</button>
                            </div>
                        </div>

                        <div class="nearby-places">
                            <h3>Nearby Places</h3>
                            <div class="places-grid">
                                <div class="place-item">
                                    <i class="fas fa-graduation-cap"></i>
                                    <div class="place-info">
                                        <h5>Schools</h5>
                                        <p>Delhi Public School - 0.5 km</p>
                                        <p>Symbiosis International - 2.1 km</p>
                                    </div>
                                </div>
                                <div class="place-item">
                                    <i class="fas fa-hospital"></i>
                                    <div class="place-info">
                                        <h5>Hospitals</h5>
                                        <p>Ruby Hall Clinic - 1.2 km</p>
                                        <p>Jehangir Hospital - 2.5 km</p>
                                    </div>
                                </div>
                                <div class="place-item">
                                    <i class="fas fa-shopping-cart"></i>
                                    <div class="place-info">
                                        <h5>Shopping</h5>
                                        <p>Phoenix MarketCity - 3.2 km</p>
                                        <p>Koregaon Park Plaza - 0.8 km</p>
                                    </div>
                                </div>
                                <div class="place-item">
                                    <i class="fas fa-utensils"></i>
                                    <div class="place-info">
                                        <h5>Restaurants</h5>
                                        <p>German Bakery - 0.3 km</p>
                                        <p>Osho Teerth Park - 0.6 km</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-specifications">
                        <h2>Property Specifications</h2>
                        <div class="specs-grid">
                            <div class="spec-category">
                                <h4>General</h4>
                                <div class="spec-list">
                                    <div class="spec-item">
                                        <span class="spec-label">Property Type:</span>
                                        <span class="spec-value">Apartment</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Built Year:</span>
                                        <span class="spec-value">2020</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Floor:</span>
                                        <span class="spec-value">12th of 15</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Facing:</span>
                                        <span class="spec-value">North-East</span>
                                    </div>
                                </div>
                            </div>

                            <div class="spec-category">
                                <h4>Area Details</h4>
                                <div class="spec-list">
                                    <div class="spec-item">
                                        <span class="spec-label">Carpet Area:</span>
                                        <span class="spec-value">1,650 sq ft</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Built-up Area:</span>
                                        <span class="spec-value">1,850 sq ft</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Super Area:</span>
                                        <span class="spec-value">2,100 sq ft</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Balcony:</span>
                                        <span class="spec-value">2 Balconies</span>
                                    </div>
                                </div>
                            </div>

                            <div class="spec-category">
                                <h4>Features</h4>
                                <div class="spec-list">
                                    <div class="spec-item">
                                        <span class="spec-label">Furnishing:</span>
                                        <span class="spec-value">Semi-Furnished</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Water Supply:</span>
                                        <span class="spec-value">24x7</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Power Backup:</span>
                                        <span class="spec-value">Full</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Lift:</span>
                                        <span class="spec-value">2 Lifts</span>
                                    </div>
                                </div>
                            </div>

                            <div class="spec-category">
                                <h4>Financial</h4>
                                <div class="spec-list">
                                    <div class="spec-item">
                                        <span class="spec-label">Price per sq ft:</span>
                                        <span class="spec-value">₹13,514</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Maintenance:</span>
                                        <span class="spec-value">₹8,500/month</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Booking Amount:</span>
                                        <span class="spec-value">₹5,00,000</span>
                                    </div>
                                    <div class="spec-item">
                                        <span class="spec-label">Loan Available:</span>
                                        <span class="spec-value">Yes, 80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="property-sidebar">
                        <div class="agent-card">
                            <h3>Contact Agent</h3>
                            <div class="agent-info">
                                <div class="agent-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="agent-details">
                                    <h4>Rajesh Kumar</h4>
                                    <p>Senior Property Consultant</p>
                                    <div class="agent-contact">
                                        <a href="tel:+917038204841" class="contact-btn">
                                            <i class="fas fa-phone"></i> Call Now
                                        </a>
                                        <a href="https://wa.me/917038204841" class="contact-btn">
                                            <i class="fab fa-whatsapp"></i> WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="inquiry-form">
                            <h3>Send Inquiry</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Inquiry</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Properties -->
    <section class="similar-properties">
        <div class="container">
            <h2 class="section-title text-center">Similar Properties</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="images/real.jpg" alt="Property">
                            <div class="property-badge">For Sale</div>
                        </div>
                        <div class="property-details">
                            <h3>2BHK Apartment in Baner</h3>
                            <p class="property-price">₹1.8 Crores</p>
                            <p class="property-location">Baner, Pune</p>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 2 Beds</span>
                                <span><i class="fas fa-bath"></i> 2 Baths</span>
                                <span><i class="fas fa-ruler-combined"></i> 1,200 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="images/real3.jpg" alt="Property">
                            <div class="property-badge">For Sale</div>
                        </div>
                        <div class="property-details">
                            <h3>4BHK Villa in Kharadi</h3>
                            <p class="property-price">₹3.2 Crores</p>
                            <p class="property-location">Kharadi, Pune</p>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 4 Beds</span>
                                <span><i class="fas fa-bath"></i> 4 Baths</span>
                                <span><i class="fas fa-ruler-combined"></i> 2,500 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-card">
                        <div class="property-image">
                            <img src="images/real1.jpg" alt="Property">
                            <div class="property-badge">For Sale</div>
                        </div>
                        <div class="property-details">
                            <h3>3BHK Penthouse in Viman Nagar</h3>
                            <p class="property-price">₹2.8 Crores</p>
                            <p class="property-location">Viman Nagar, Pune</p>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 3 Beds</span>
                                <span><i class="fas fa-bath"></i> 3 Baths</span>
                                <span><i class="fas fa-ruler-combined"></i> 2,000 sq ft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>&copy; 2024 Hestia Abodes. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-bottom-links">
                            <a href="#">Privacy Policy</a>
                            <span>|</span>
                            <a href="#">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/property-details.js"></script>
</body>
</html>
