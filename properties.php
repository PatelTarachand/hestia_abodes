<?php include 'header.php'; ?>

    <!-- Properties Hero Section -->
    <section class="properties-hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title">Our Properties</h1>
                <p class="hero-subtitle">Discover Your Dream Home from Our Premium Collection</p>
            </div>
        </div>
    </section>

    <!-- Properties Filter Section -->
    <section class="properties-filter-section">
        <div class="container">
            <div class="filter-controls text-center">
                <button class="filter-btn active" data-filter="all">All Properties</button>
                <button class="filter-btn" data-filter="residential">Residential</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="luxury">Luxury</button>
                <button class="filter-btn" data-filter="apartments">Apartments</button>
                <button class="filter-btn" data-filter="villas">Villas</button>
            </div>
        </div>
    </section>

    <!-- All Properties Section -->
    <section class="all-properties-section">
        <div class="container">
            <!-- Property 1 -->
            <div class="property-showcase" data-category="luxury residential" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="property-info">
                            <div class="property-number">NO. 1</div>
                            <h3 class="property-name">THE PAVILION HOUSE</h3>
                            <div class="property-type">SINGLE FAMILY HOME</div>
                            <div class="property-location">Baner, Pune</div>
                            <div class="property-description">
                                A stunning modern residence featuring contemporary architecture,
                                spacious interiors, and premium amenities in the heart of Baner.
                            </div>
                            <div class="property-price">₹2.5 Cr onwards</div>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 3 BHK</span>
                                <span><i class="fas fa-bath"></i> 3 Bathrooms</span>
                                <span><i class="fas fa-car"></i> 2 Parking</span>
                                <span><i class="fas fa-ruler-combined"></i> 1,850 sq ft</span>
                            </div>
                            <div class="property-actions">
                                <a href="property-details.php?id=1" class="btn btn-primary">View Details</a>
                                <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="property-image-main">
                            <img src="images/real1.jpg" alt="The Pavilion House">
                            <div class="property-badge">FEATURED</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 2 -->
            <div class="property-showcase property-reverse" data-category="luxury villas" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="property-info">
                            <div class="property-number">NO. 2</div>
                            <h3 class="property-name">LUXURY VILLA ESTATE</h3>
                            <div class="property-type">PREMIUM VILLA</div>
                            <div class="property-location">Wakad, Pune</div>
                            <div class="property-description">
                                An exclusive villa offering unparalleled luxury with private gardens,
                                premium finishes, and world-class amenities.
                            </div>
                            <div class="property-price">₹3.2 Cr onwards</div>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 4 BHK</span>
                                <span><i class="fas fa-bath"></i> 4 Bathrooms</span>
                                <span><i class="fas fa-car"></i> 3 Parking</span>
                                <span><i class="fas fa-ruler-combined"></i> 2,500 sq ft</span>
                            </div>
                            <div class="property-actions">
                                <a href="property-details.php?id=2" class="btn btn-primary">View Details</a>
                                <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="property-image-main">
                            <img src="images/real.jpg" alt="Luxury Villa Estate">
                            <div class="property-badge luxury">LUXURY</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 3 -->
            <div class="property-showcase" data-category="residential apartments" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="property-info">
                            <div class="property-number">NO. 3</div>
                            <h3 class="property-name">MODERN APARTMENTS</h3>
                            <div class="property-type">LUXURY APARTMENTS</div>
                            <div class="property-location">Hinjewadi, Pune</div>
                            <div class="property-description">
                                Contemporary apartments designed for modern living with smart home features,
                                premium amenities, and excellent connectivity.
                            </div>
                            <div class="property-price">₹1.8 Cr onwards</div>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 2-3 BHK</span>
                                <span><i class="fas fa-bath"></i> 2-3 Bathrooms</span>
                                <span><i class="fas fa-car"></i> 1-2 Parking</span>
                                <span><i class="fas fa-ruler-combined"></i> 1,200-1,600 sq ft</span>
                            </div>
                            <div class="property-actions">
                                <a href="property-details.php?id=3" class="btn btn-primary">View Details</a>
                                <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="property-image-main">
                            <img src="images/real3.jpg" alt="Modern Apartments">
                            <div class="property-badge new">NEW</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 4 -->
            <div class="property-showcase property-reverse" data-category="commercial" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="property-info">
                            <div class="property-number">NO. 4</div>
                            <h3 class="property-name">BUSINESS PLAZA</h3>
                            <div class="property-type">COMMERCIAL SPACE</div>
                            <div class="property-location">Kharadi, Pune</div>
                            <div class="property-description">
                                Prime commercial space in the heart of Kharadi's business district,
                                perfect for offices, retail, and corporate headquarters.
                            </div>
                            <div class="property-price">₹85 Lakh onwards</div>
                            <div class="property-features">
                                <span><i class="fas fa-building"></i> Office Space</span>
                                <span><i class="fas fa-elevator"></i> 3 Elevators</span>
                                <span><i class="fas fa-car"></i> Ample Parking</span>
                                <span><i class="fas fa-ruler-combined"></i> 800-2,000 sq ft</span>
                            </div>
                            <div class="property-actions">
                                <a href="property-details.php?id=4" class="btn btn-primary">View Details</a>
                                <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="property-image-main">
                            <img src="images/real1.jpg" alt="Business Plaza">
                            <div class="property-badge commercial">COMMERCIAL</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 5 -->
            <div class="property-showcase" data-category="luxury villas" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="property-info">
                            <div class="property-number">NO. 5</div>
                            <h3 class="property-name">GARDEN VILLA RETREAT</h3>
                            <div class="property-type">LUXURY VILLA</div>
                            <div class="property-location">Koregaon Park, Pune</div>
                            <div class="property-description">
                                Exclusive villa with landscaped gardens, private pool, and premium amenities
                                in the prestigious Koregaon Park area.
                            </div>
                            <div class="property-price">₹4.5 Cr onwards</div>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 5 BHK</span>
                                <span><i class="fas fa-bath"></i> 5 Bathrooms</span>
                                <span><i class="fas fa-car"></i> 4 Parking</span>
                                <span><i class="fas fa-ruler-combined"></i> 3,200 sq ft</span>
                            </div>
                            <div class="property-actions">
                                <a href="property-details.php?id=5" class="btn btn-primary">View Details</a>
                                <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="property-image-main">
                            <img src="images/real.jpg" alt="Garden Villa Retreat">
                            <div class="property-badge premium">PREMIUM</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property 6 -->
            <div class="property-showcase property-reverse" data-category="residential apartments" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="property-info">
                            <div class="property-number">NO. 6</div>
                            <h3 class="property-name">SKYLINE TOWERS</h3>
                            <div class="property-type">HIGH-RISE APARTMENTS</div>
                            <div class="property-location">Magarpatta, Pune</div>
                            <div class="property-description">
                                Modern high-rise apartments with panoramic city views, world-class amenities,
                                and excellent connectivity to IT hubs.
                            </div>
                            <div class="property-price">₹2.2 Cr onwards</div>
                            <div class="property-features">
                                <span><i class="fas fa-bed"></i> 2-4 BHK</span>
                                <span><i class="fas fa-bath"></i> 2-4 Bathrooms</span>
                                <span><i class="fas fa-car"></i> 1-2 Parking</span>
                                <span><i class="fas fa-ruler-combined"></i> 1,400-2,200 sq ft</span>
                            </div>
                            <div class="property-actions">
                                <a href="property-details.php?id=6" class="btn btn-primary">View Details</a>
                                <a href="#contact" class="btn btn-outline-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="property-image-main">
                            <img src="images/real3.jpg" alt="Skyline Towers">
                            <div class="property-badge">HIGH-RISE</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="properties-cta-section">
        <div class="container">
            <div class="cta-content text-center">
                <h2>Can't Find What You're Looking For?</h2>
                <p>Our expert team can help you find the perfect property that matches your specific requirements and budget.</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary btn-lg me-3">Contact Our Experts</a>
                    <a href="tel:+919876543210" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
