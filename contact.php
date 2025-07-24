<?php include 'header.php'; ?>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="images/real3.jpg" alt="Contact Hestia Abodes" class="hero-image">
        </div>
        <div class="container">
            <div class="hero-content text-center">
                <div class="hero-badge">CONTACT US</div>
                <h1 class="hero-title">
                    Let's Talk Property
                </h1>
                <p class="hero-subtitle">
                    Ready to find your dream home or make a smart investment? Our expert team is here to guide you every step of the way.
                </p>
                <div class="hero-cta">
                    <a href="#contact-form" class="btn btn-primary">Get Started Today</a>
                    <a href="tel:+919067881848" class="btn btn-outline-light">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <div class="contact-section">
    <section class="contact-info-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Get In Touch</h2>
                <p>Multiple ways to connect with our real estate experts</p>
            </div>

            <div class="contact-info-grid">
                <!-- Location Card -->
                <div class="contact-card">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="card-content">
                        <h4>Our Location</h4>
                        <p>Pune, Maharashtra</p>
                        <span class="card-subtitle">Visit us for personalized consultation</span>
                    </div>
                </div>

                <!-- Phone Card -->
                <div class="contact-card">
                    <div class="card-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="card-content">
                        <h4>Call Us</h4>
                        <a href="tel:+919067881848" class="contact-link">+91 906 788 1848</a>
                        <span class="card-subtitle">Available 7 days a week</span>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="contact-card">
                    <div class="card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="card-content">
                        <h4>Email Us</h4>
                        <a href="mailto:hello@hestiaabodes.in" class="contact-link">hello@hestiaabodes.in</a>
                        <span class="card-subtitle">Quick response guaranteed</span>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div class="contact-card">
                    <div class="card-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <div class="card-content">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#" class="social-link facebook" title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link instagram" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link linkedin" title="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        <span class="card-subtitle">Stay updated with latest properties</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section" id="contact-form">
        <div class="container">
            <div class="row">
                <!-- Form Column -->
                <div class="col-lg-8">
                    <div class="form-container">
                        <div class="form-header">
                            <h3>Send Us a Message</h3>
                            <p>Fill out the form below and we'll get back to you within 24 hours</p>
                        </div>

                        <form class="contact-form" id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-wrapper">
                                        <input type="text" name="name" class="form-input" required>
                                        <label class="form-label">Full Name *</label>
                                        <div class="input-line"></div>
                                    </div>
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-wrapper">
                                        <input type="email" name="email" class="form-input" required>
                                        <label class="form-label">Email Address *</label>
                                        <div class="input-line"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-wrapper">
                                        <input type="tel" name="mobile" class="form-input" required maxlength="10">
                                        <label class="form-label">Mobile Number *</label>
                                        <div class="input-line"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="select-wrapper">
                                        <select name="propertyType" class="form-select" required>
                                            <option value="">Select Property Type</option>
                                            <option value="residential">Residential</option>
                                            <option value="commercial">Commercial</option>
                                            <option value="investment">Investment Property</option>
                                            <option value="rental">Rental Property</option>
                                        </select>
                                        <label class="form-label d-none">Property Type *</label>
                                        <div class="select-arrow">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select-wrapper">
                                        <select name="budgetRange" class="form-select" required>
                                            <option value="">Select Budget Range</option>
                                            <option value="under-50">Under ₹50 Lakhs</option>
                                            <option value="50-100">₹50 Lakhs - ₹1 Crore</option>
                                            <option value="100-200">₹1 Crore - ₹2 Crores</option>
                                            <option value="200-500">₹2 Crores - ₹5 Crores</option>
                                            <option value="above-500">Above ₹5 Crores</option>
                                        </select>
                                        <label class="form-label d-none">Budget Range *</label>
                                        <div class="select-arrow">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="select-wrapper">
                                        <select name="location" class="form-select" required>
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
                                        <label class="form-label d-none">Preferred Location *</label>
                                        <div class="select-arrow">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="textarea-wrapper">
                                <textarea name="message" rows="5" class="form-textarea" required></textarea>
                                <label class="form-label">Your Message *</label>
                                <div class="input-line"></div>
                            </div>

                            <button type="submit" class="submit-btn">
                                <span class="btn-text">Send Message</span>
                                <span class="btn-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>


                <!-- Info Column -->
                <div class="col-lg-4">
                    <div class="contact-sidebar">
                        <div class="sidebar-card">
                            <h4>Why Choose Hestia Abodes?</h4>
                            <ul class="feature-list">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>21+ Years of Experience</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>500+ Happy Families</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Expert Market Knowledge</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>End-to-End Support</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Transparent Dealings</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-card">
                            <h4>Quick Contact</h4>
                            <div class="quick-contact">
                                <a href="tel:+919067881848" class="quick-contact-item">
                                    <i class="fas fa-phone"></i>
                                    <span>+91 906 788 1848</span>
                                </a>
                                <a href="mailto:hello@hestiaabodes.in" class="quick-contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <span>hello@hestiaabodes.in</span>
                                </a>
                                <a href="https://wa.me/919067881848" class="quick-contact-item whatsapp" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>WhatsApp Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions about our services</p>
            </div>

            <div class="faq-container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        How quickly can I expect a response to my inquiry?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We typically respond to all inquiries within 2-4 hours during business hours. For urgent matters, you can call us directly at +91 906 788 1848.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Do you charge for initial consultations?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        No, our initial consultation is completely free. We believe in building relationships first and providing value before any commitments.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        What areas in Pune do you cover?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        We cover all major areas in Pune including Baner, Wakad, Hinjewadi, Kharadi, Magarpatta, Koregaon Park, and surrounding regions.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Can you help with property documentation?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes, we provide complete assistance with property documentation, legal verification, and registration processes to ensure smooth transactions.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- Contact Page Specific JavaScript -->
    <script src="js/contact.js"></script>

<?php include 'footer.php'; ?>
