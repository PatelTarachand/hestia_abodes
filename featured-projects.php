<?php 
// SEO Meta Tags for Featured Projects Page
$page_title = "Featured Projects - Premium Properties in Pune | Hestia Abodes";
$page_description = "Explore our handpicked featured projects in Pune. Premium residential and commercial properties in Baner, Wakad, Hinjewadi with verified developers and best prices.";
$page_keywords = "featured projects Pune, premium properties, residential projects, commercial properties, Baner projects, Wakad properties, Hinjewadi developments";
$canonical_url = "https://hestiaabodes.in/featured-projects.php";

include 'header.php'; 
?>

    <!-- Featured Projects Hero Section -->
    <section class="featured-projects-hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="images/real1.jpg" alt="Featured Projects" class="hero-image">
        </div>
        <div class="container">
            <div class="hero-content text-center">
                <div class="hero-badge">FEATURED PROJECTS</div>
                <h1 class="hero-title">
                    Handpicked Premium Properties
                </h1>
                <p class="hero-subtitle">
                    Discover our carefully curated selection of the finest residential and commercial projects in Pune
                </p>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="projects-filter-section">
        <div class="container">
            <div class="filter-controls">
                <div class="filter-tabs">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="residential">Residential</button>
                    <button class="filter-btn" data-filter="commercial">Commercial</button>
                    <button class="filter-btn" data-filter="villa">Villas</button>
                    <button class="filter-btn" data-filter="apartment">Apartments</button>
                </div>
                
                <div class="location-filter">
                    <select class="form-select" id="locationFilter">
                        <option value="all">All Locations</option>
                        <option value="baner">Baner</option>
                        <option value="wakad">Wakad</option>
                        <option value="hinjewadi">Hinjewadi</option>
                        <option value="balewadi">Balewadi</option>
                        <option value="kharadi">Kharadi</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Grid -->
    <section class="featured-projects-grid-section">
        <div class="container">
            <div class="projects-grid">
                <div class="row">
                    <!-- Project 1 -->
                    <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="residential apartment" data-location="baner">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="images/real3.jpg" alt="Skyline Residences" class="img-fluid">
                                <div class="project-badge">RERA Approved</div>
                                <div class="project-status">Ready to Move</div>
                            </div>
                            <div class="project-content">
                                <div class="project-header">
                                    <h3 class="project-title">Skyline Residences</h3>
                                    <div class="project-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Baner, Pune
                                    </div>
                                </div>
                                
                                <div class="project-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Configuration:</span>
                                        <span class="detail-value">2, 3 BHK</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Area:</span>
                                        <span class="detail-value">1200-1800 sq ft</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Price:</span>
                                        <span class="detail-value">₹85 Lakhs - ₹1.2 Cr</span>
                                    </div>
                                </div>
                                
                                <div class="project-amenities">
                                    <span class="amenity-tag">Swimming Pool</span>
                                    <span class="amenity-tag">Gym</span>
                                    <span class="amenity-tag">Clubhouse</span>
                                </div>
                                
                                <div class="project-actions">
                                    <a href="project-details.php?id=skyline-residences" class="btn btn-primary">View Details</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="residential villa" data-location="wakad">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="images/real1.jpg" alt="Green Valley Villas" class="img-fluid">
                                <div class="project-badge">Premium</div>
                                <div class="project-status">Under Construction</div>
                            </div>
                            <div class="project-content">
                                <div class="project-header">
                                    <h3 class="project-title">Green Valley Villas</h3>
                                    <div class="project-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Wakad, Pune
                                    </div>
                                </div>
                                
                                <div class="project-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Configuration:</span>
                                        <span class="detail-value">3, 4 BHK Villas</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Area:</span>
                                        <span class="detail-value">2500-3500 sq ft</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Price:</span>
                                        <span class="detail-value">₹2.5 Cr - ₹3.8 Cr</span>
                                    </div>
                                </div>
                                
                                <div class="project-amenities">
                                    <span class="amenity-tag">Private Garden</span>
                                    <span class="amenity-tag">Car Parking</span>
                                    <span class="amenity-tag">Security</span>
                                </div>
                                
                                <div class="project-actions">
                                    <a href="project-details.php?id=green-valley-villas" class="btn btn-primary">View Details</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="commercial" data-location="hinjewadi">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="images/real.jpg" alt="Tech Park Plaza" class="img-fluid">
                                <div class="project-badge">IT Hub</div>
                                <div class="project-status">Pre-Launch</div>
                            </div>
                            <div class="project-content">
                                <div class="project-header">
                                    <h3 class="project-title">Tech Park Plaza</h3>
                                    <div class="project-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Hinjewadi, Pune
                                    </div>
                                </div>
                                
                                <div class="project-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Type:</span>
                                        <span class="detail-value">Office Spaces</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Area:</span>
                                        <span class="detail-value">500-5000 sq ft</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Price:</span>
                                        <span class="detail-value">₹45 Lakhs - ₹4.5 Cr</span>
                                    </div>
                                </div>
                                
                                <div class="project-amenities">
                                    <span class="amenity-tag">IT Ready</span>
                                    <span class="amenity-tag">Food Court</span>
                                    <span class="amenity-tag">Parking</span>
                                </div>
                                
                                <div class="project-actions">
                                    <a href="project-details.php?id=tech-park-plaza" class="btn btn-primary">View Details</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="residential apartment" data-location="balewadi">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="images/real3.jpg" alt="Sports City Apartments" class="img-fluid">
                                <div class="project-badge">Sports Theme</div>
                                <div class="project-status">Ready to Move</div>
                            </div>
                            <div class="project-content">
                                <div class="project-header">
                                    <h3 class="project-title">Sports City Apartments</h3>
                                    <div class="project-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Balewadi, Pune
                                    </div>
                                </div>
                                
                                <div class="project-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Configuration:</span>
                                        <span class="detail-value">1, 2, 3 BHK</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Area:</span>
                                        <span class="detail-value">650-1500 sq ft</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Price:</span>
                                        <span class="detail-value">₹55 Lakhs - ₹95 Lakhs</span>
                                    </div>
                                </div>
                                
                                <div class="project-amenities">
                                    <span class="amenity-tag">Sports Complex</span>
                                    <span class="amenity-tag">Jogging Track</span>
                                    <span class="amenity-tag">Kids Play</span>
                                </div>
                                
                                <div class="project-actions">
                                    <a href="project-details.php?id=sports-city-apartments" class="btn btn-primary">View Details</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="residential villa" data-location="kharadi">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="images/real1.jpg" alt="Luxury Enclave" class="img-fluid">
                                <div class="project-badge">Luxury</div>
                                <div class="project-status">Booking Open</div>
                            </div>
                            <div class="project-content">
                                <div class="project-header">
                                    <h3 class="project-title">Luxury Enclave</h3>
                                    <div class="project-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Kharadi, Pune
                                    </div>
                                </div>
                                
                                <div class="project-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Configuration:</span>
                                        <span class="detail-value">4, 5 BHK Villas</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Area:</span>
                                        <span class="detail-value">3000-4500 sq ft</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Price:</span>
                                        <span class="detail-value">₹3.5 Cr - ₹5.2 Cr</span>
                                    </div>
                                </div>
                                
                                <div class="project-amenities">
                                    <span class="amenity-tag">Private Pool</span>
                                    <span class="amenity-tag">Home Theater</span>
                                    <span class="amenity-tag">Concierge</span>
                                </div>
                                
                                <div class="project-actions">
                                    <a href="project-details.php?id=luxury-enclave" class="btn btn-primary">View Details</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="col-lg-4 col-md-6 mb-4 project-item" data-category="residential apartment" data-location="baner">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="images/real.jpg" alt="Metro Heights" class="img-fluid">
                                <div class="project-badge">Metro Connected</div>
                                <div class="project-status">Under Construction</div>
                            </div>
                            <div class="project-content">
                                <div class="project-header">
                                    <h3 class="project-title">Metro Heights</h3>
                                    <div class="project-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Baner, Pune
                                    </div>
                                </div>
                                
                                <div class="project-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Configuration:</span>
                                        <span class="detail-value">2, 3, 4 BHK</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Area:</span>
                                        <span class="detail-value">1100-2200 sq ft</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Price:</span>
                                        <span class="detail-value">₹75 Lakhs - ₹1.8 Cr</span>
                                    </div>
                                </div>
                                
                                <div class="project-amenities">
                                    <span class="amenity-tag">Metro Station</span>
                                    <span class="amenity-tag">Mall Connected</span>
                                    <span class="amenity-tag">Sky Lounge</span>
                                </div>
                                
                                <div class="project-actions">
                                    <a href="project-details.php?id=metro-heights" class="btn btn-primary">View Details</a>
                                    <a href="contact.php" class="btn btn-outline-primary">Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Featured Projects -->
    <section class="why-featured-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Why Our Featured Projects?</h2>
                <p>Every project in our portfolio is carefully vetted and verified</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>RERA Verified</h4>
                        <p>All projects are RERA registered and compliant</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4>Trusted Developers</h4>
                        <p>Partnerships with reputed and reliable developers</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h4>Prime Locations</h4>
                        <p>Strategic locations with excellent connectivity</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Best Value</h4>
                        <p>Competitive pricing with maximum value</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="projects-cta-section">
        <div class="container">
            <div class="cta-content text-center">
                <h2>Find Your Perfect Property</h2>
                <p>Let our experts help you choose the right project from our featured collection</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary btn-lg">
                        Schedule Site Visit
                    </a>
                    <a href="tel:+919067881848" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone"></i> Call Expert
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
