<?php 
// Get project ID from URL
$project_id = isset($_GET['id']) ? $_GET['id'] : 'skyline-residences';

// Sample project data (in a real application, this would come from a database)
$projects = [
    'skyline-residences' => [
        'title' => 'Skyline Residences',
        'location' => 'Baner, Pune',
        'type' => 'Residential Apartment',
        'status' => 'Ready to Move',
        'price_range' => '₹85 Lakhs - ₹1.2 Cr',
        'configurations' => ['2 BHK', '3 BHK'],
        'area_range' => '1200-1800 sq ft',
        'description' => 'Experience luxury living at Skyline Residences, a premium residential project in the heart of Baner. With world-class amenities and strategic location, this project offers the perfect blend of comfort and convenience.',
        'amenities' => ['Swimming Pool', 'Gym & Fitness Center', 'Clubhouse', 'Children\'s Play Area', 'Landscaped Gardens', '24/7 Security', 'Power Backup', 'Covered Parking'],
        'images' => ['images/real3.jpg', 'images/real1.jpg', 'images/real.jpg'],
        'developer' => 'Premium Developers Pvt Ltd',
        'rera_number' => 'P52100012345',
        'possession' => 'Immediate'
    ],
    'green-valley-villas' => [
        'title' => 'Green Valley Villas',
        'location' => 'Wakad, Pune',
        'type' => 'Villa',
        'status' => 'Under Construction',
        'price_range' => '₹2.5 Cr - ₹3.8 Cr',
        'configurations' => ['3 BHK Villa', '4 BHK Villa'],
        'area_range' => '2500-3500 sq ft',
        'description' => 'Discover the epitome of luxury living at Green Valley Villas. These spacious villas offer private gardens, premium finishes, and a serene environment perfect for families.',
        'amenities' => ['Private Garden', 'Car Parking', '24/7 Security', 'Gated Community', 'Club House', 'Swimming Pool', 'Jogging Track', 'Kids Play Area'],
        'images' => ['images/real1.jpg', 'images/real3.jpg', 'images/real.jpg'],
        'developer' => 'Green Homes Construction',
        'rera_number' => 'P52100067890',
        'possession' => 'December 2025'
    ]
];

// Get current project or default
$project = isset($projects[$project_id]) ? $projects[$project_id] : $projects['skyline-residences'];

// SEO Meta Tags
$page_title = $project['title'] . " - " . $project['location'] . " | Hestia Abodes";
$page_description = $project['description'];
$page_keywords = $project['title'] . ", " . $project['location'] . ", real estate, property, " . $project['type'];
$canonical_url = "https://hestiaabodes.in/project-details.php?id=" . $project_id;

include 'header.php'; 
?>

    <!-- Project Details Hero Section -->
    <section class="project-details-hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="<?php echo $project['images'][0]; ?>" alt="<?php echo $project['title']; ?>" class="hero-image">
        </div>
        <div class="container">
            <div class="hero-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="featured-projects.php">Projects</a></li>
                        <li class="breadcrumb-item active"><?php echo $project['title']; ?></li>
                    </ol>
                </nav>
                
                <div class="project-badges">
                    <span class="project-badge"><?php echo $project['type']; ?></span>
                    <span class="project-status"><?php echo $project['status']; ?></span>
                </div>
                
                <h1 class="project-title text-white"><?php echo $project['title']; ?></h1>
                <div class="project-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <?php echo $project['location']; ?>
                </div>
                
                <div class="project-price">
                    <span class="price-label">Starting from</span>
                    <span class="price-value"><?php echo $project['price_range']; ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Overview Section -->
    <section class="project-overview-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="project-content">
                        <h2>Project Overview</h2>
                        <p class="project-description"><?php echo $project['description']; ?></p>
                        
                        <div class="project-highlights">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="highlight-content">
                                            <h4>Configurations</h4>
                                            <p><?php echo implode(', ', $project['configurations']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="fas fa-ruler-combined"></i>
                                        </div>
                                        <div class="highlight-content">
                                            <h4>Area Range</h4>
                                            <p><?php echo $project['area_range']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="highlight-content">
                                            <h4>Possession</h4>
                                            <p><?php echo $project['possession']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="fas fa-certificate"></i>
                                        </div>
                                        <div class="highlight-content">
                                            <h4>RERA Number</h4>
                                            <p><?php echo $project['rera_number']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Amenities Section -->
                        <div class="amenities-section">
                            <h3>Amenities & Features</h3>
                            <div class="amenities-grid">
                                <?php foreach ($project['amenities'] as $amenity): ?>
                                    <div class="amenity-item">
                                        <i class="fas fa-check-circle"></i>
                                        <span><?php echo $amenity; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Gallery Section -->
                        <div class="gallery-section">
                            <h3>Project Gallery</h3>
                            <div class="project-gallery">
                                <?php foreach ($project['images'] as $index => $image): ?>
                                    <div class="gallery-item">
                                        <img src="<?php echo $image; ?>" alt="<?php echo $project['title']; ?> Image <?php echo $index + 1; ?>" class="img-fluid">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="project-sidebar">
                        <!-- Enquiry Form -->
                        <div class="sidebar-widget enquiry-widget">
                            <h4>Interested in this project?</h4>
                            <form class="enquiry-form" action="process-enquiry.php" method="POST">
                                <input type="hidden" name="project_name" value="<?php echo $project['title']; ?>">
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address *" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number *" required>
                                </div>
                                
                                <div class="form-group">
                                    <select name="interest" class="form-control" required>
                                        <option value="">I'm interested in...</option>
                                        <option value="site_visit">Site Visit</option>
                                        <option value="price_details">Price Details</option>
                                        <option value="floor_plans">Floor Plans</option>
                                        <option value="loan_assistance">Loan Assistance</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="3" placeholder="Your Message"></textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-block">
                                    Send Enquiry
                                </button>
                            </form>
                        </div>
                        
                        <!-- Quick Contact -->
                        <div class="sidebar-widget contact-widget">
                            <h4>Quick Contact</h4>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fas fa-phone"></i>
                                    <div>
                                        <span>Call Us</span>
                                        <a href="tel:+919067881848">+91 906 788 1848</a>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <span>Email Us</span>
                                        <a href="mailto:hello@hestiaabodes.in">hello@hestiaabodes.in</a>
                                    </div>
                                </div>
                                
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <span>Visit Us</span>
                                        <span>Pune, Maharashtra</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Related Projects -->
                        <div class="sidebar-widget related-projects-widget">
                            <h4>Similar Projects</h4>
                            <div class="related-projects">
                                <?php
                                // Show other projects
                                $related_count = 0;
                                foreach ($projects as $proj_id => $proj) {
                                    if ($proj_id !== $project_id && $related_count < 2) {
                                        echo '<div class="related-project">';
                                        echo '<div class="related-project-image">';
                                        echo '<img src="' . $proj['images'][0] . '" alt="' . $proj['title'] . '">';
                                        echo '</div>';
                                        echo '<div class="related-project-content">';
                                        echo '<h5><a href="project-details.php?id=' . $proj_id . '">' . $proj['title'] . '</a></h5>';
                                        echo '<div class="related-project-location">';
                                        echo '<i class="fas fa-map-marker-alt"></i> ' . $proj['location'];
                                        echo '</div>';
                                        echo '<div class="related-project-price">' . $proj['price_range'] . '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        $related_count++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="project-cta-section">
        <div class="container">
            <div class="cta-content text-center">
                <h2>Ready to Make This Your Home?</h2>
                <p>Schedule a site visit or get detailed information about <?php echo $project['title']; ?></p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn btn-primary btn-lg">
                        Schedule Site Visit
                    </a>
                    <a href="tel:+919067881848" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "RealEstateProject",
        "name": "<?php echo $project['title']; ?>",
        "description": "<?php echo $project['description']; ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "<?php echo $project['location']; ?>",
            "addressCountry": "India"
        },
        "offers": {
            "@type": "Offer",
            "price": "<?php echo $project['price_range']; ?>",
            "priceCurrency": "INR"
        },
        "developer": {
            "@type": "Organization",
            "name": "<?php echo $project['developer']; ?>"
        }
    }
    </script>

<?php include 'footer.php'; ?>
