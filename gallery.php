<?php 
// SEO Meta Tags for Gallery Page
$page_title = "Gallery - Premium Properties & Projects | Hestia Abodes";
$page_description = "Explore our gallery of premium properties, completed projects, and luxury developments in Pune. See the quality and craftsmanship of Hestia Abodes projects.";
$page_keywords = "property gallery, real estate gallery, Pune properties, luxury homes, completed projects, property photos, Hestia Abodes gallery";
$canonical_url = "https://hestiaabodes.in/gallery.php";

include 'header.php'; 
?>

    <!-- Gallery Hero Section -->
    <section class="gallery-hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="images/real1.jpg" alt="Property Gallery" class="hero-image">
        </div>
        <div class="container">
            <div class="hero-content text-center">
                <div class="hero-badge animate-in">GALLERY</div>
                <h1 class="hero-title animate-in">
                    Our Premium Properties
                </h1>
                <p class="hero-subtitle animate-in">
                    Discover the beauty and elegance of our carefully curated properties and completed projects
                </p>
            </div>
        </div>
    </section>

    <!-- Gallery Filter Section -->
    <section class="gallery-filter-section">
        <div class="container">
            <div class="filter-tabs text-center">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="residential">Residential</button>
                <button class="filter-btn" data-filter="commercial">Commercial</button>
                <button class="filter-btn" data-filter="villa">Villas</button>
                <button class="filter-btn" data-filter="interior">Interiors</button>
                <button class="filter-btn" data-filter="amenities">Amenities</button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid Section -->
    <section class="gallery-grid-section">
        <div class="container">
            <div class="gallery-grid">
                <!-- Residential Properties -->
                <div class="gallery-item animate-in" data-category="residential">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real3.jpg" alt="Luxury Apartment" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Luxury Apartments</h4>
                                    <p>Premium 3BHK in Baner</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real3.jpg" data-title="Luxury Apartments">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate-in" data-category="residential">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real1.jpg" alt="Modern Homes" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Modern Homes</h4>
                                    <p>Contemporary Design in Wakad</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real1.jpg" data-title="Modern Homes">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Villa Properties -->
                <div class="gallery-item animate-in" data-category="villa">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real.jpg" alt="Luxury Villa" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Luxury Villas</h4>
                                    <p>4BHK Villa with Garden</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real.jpg" data-title="Luxury Villas">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commercial Properties -->
                <div class="gallery-item animate-in" data-category="commercial">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real3.jpg" alt="Office Spaces" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Office Spaces</h4>
                                    <p>Premium Commercial in Hinjewadi</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real3.jpg" data-title="Office Spaces">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interior Designs -->
                <div class="gallery-item animate-in" data-category="interior">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real1.jpg" alt="Interior Design" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Interior Design</h4>
                                    <p>Modern Living Room</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real1.jpg" data-title="Interior Design">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="services.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amenities -->
                <div class="gallery-item animate-in" data-category="amenities">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real.jpg" alt="Swimming Pool" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Swimming Pool</h4>
                                    <p>Resort-style Amenities</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real.jpg" data-title="Swimming Pool">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- More Gallery Items -->
                <div class="gallery-item animate-in" data-category="residential">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real3.jpg" alt="Penthouse" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Penthouse</h4>
                                    <p>Luxury Penthouse with Terrace</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real3.jpg" data-title="Penthouse">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate-in" data-category="villa">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real1.jpg" alt="Villa Exterior" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Villa Exterior</h4>
                                    <p>Beautiful Architecture</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real1.jpg" data-title="Villa Exterior">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item animate-in" data-category="amenities">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="images/real.jpg" alt="Clubhouse" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="gallery-content">
                                    <h4>Clubhouse</h4>
                                    <p>Community Recreation Center</p>
                                    <div class="gallery-actions">
                                        <a href="#" class="gallery-btn" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="images/real.jpg" data-title="Clubhouse">
                                            <i class="fas fa-expand"></i>
                                        </a>
                                        <a href="featured-projects.php" class="gallery-btn">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Stats Section -->
    <section class="gallery-stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card text-center animate-in">
                        <div class="stat-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="stat-number" data-count="500">0</div>
                        <div class="stat-label">Properties Delivered</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card text-center animate-in">
                        <div class="stat-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="stat-number" data-count="50">0</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card text-center animate-in">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number" data-count="1000">0</div>
                        <div class="stat-label">Happy Families</div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stat-card text-center animate-in">
                        <div class="stat-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="stat-number" data-count="21">0</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Property Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="" alt="" class="img-fluid" id="modalImage">
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="gallery-cta-section">
        <div class="container">
            <div class="cta-content text-center animate-in">
                <h2>Ready to See These Properties?</h2>
                <p>Schedule a visit to experience the quality and luxury of our properties firsthand</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary btn-lg">
                        Schedule Visit
                    </a>
                    <a href="featured-projects.php" class="btn btn-outline-light btn-lg">
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
