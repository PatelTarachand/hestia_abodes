<?php 
include 'header.php'; 

// Get the article slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Define articles data
$articles = [
    'pune-western-corridor-booming' => [
        'title' => 'Why Pune\'s Western Corridor Is Booming',
        'category' => 'Market Analysis',
        'date' => 'January 15, 2025',
        'read_time' => '8 min read',
        'image' => 'images/pune-western-corridor.jpg',
        'excerpt' => 'Discover why areas like Baner, Wakad, and Hinjewadi are experiencing unprecedented growth.',
        'tags' => ['Pune Real Estate', 'Western Corridor', 'Investment'],
        'content' => 'pune-western-corridor-content.php'
    ],
    'plot-vs-apartment-2025' => [
        'title' => 'Plot vs Apartment: What Should You Choose in 2025?',
        'category' => 'Buying Guide',
        'date' => 'January 12, 2025',
        'read_time' => '6 min read',
        'image' => 'images/plot-vs-apartment.jpg',
        'excerpt' => 'A comprehensive comparison to help you decide between buying a plot or an apartment.',
        'tags' => ['Buying Guide', 'Investment'],
        'content' => 'plot-vs-apartment-content.php'
    ],
    'top-5-pre-leased-properties-2025' => [
        'title' => 'Top 5 Pre-leased Properties to Invest In This Year',
        'category' => 'Investment',
        'date' => 'January 10, 2025',
        'read_time' => '7 min read',
        'image' => 'images/pre-leased-properties.jpg',
        'excerpt' => 'Explore the best pre-leased commercial properties in Pune that offer guaranteed returns.',
        'tags' => ['Pre-leased', 'Commercial', 'ROI'],
        'content' => 'pre-leased-properties-content.php'
    ],
    'property-verification-checklist' => [
        'title' => 'What to Verify Before Booking a Property',
        'category' => 'Legal Guide',
        'date' => 'January 8, 2025',
        'read_time' => '10 min read',
        'image' => 'images/property-verification.jpg',
        'excerpt' => 'A complete checklist of legal documents, approvals, and verifications you must complete.',
        'tags' => ['Legal', 'Documentation', 'Safety'],
        'content' => 'property-verification-content.php'
    ]
];

// Get current article or default to first one
$current_article = isset($articles[$slug]) ? $articles[$slug] : $articles['pune-western-corridor-booming'];
?>

    <!-- Article Hero Section -->
    <section class="article-hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <img src="<?php echo $current_article['image']; ?>" alt="<?php echo $current_article['title']; ?>" class="hero-image">
        </div>
        <div class="container">
            <div class="hero-content">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                        <li class="breadcrumb-item active"><?php echo $current_article['title']; ?></li>
                    </ol>
                </nav>
                
                <div class="article-category-badge"><?php echo $current_article['category']; ?></div>
                <h1 class="article-title"><?php echo $current_article['title']; ?></h1>
                
                <div class="article-meta">
                    <div class="meta-item">
                        <i class="fas fa-calendar"></i>
                        <span><?php echo $current_article['date']; ?></span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span><?php echo $current_article['read_time']; ?></span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-user"></i>
                        <span>Hestia Abodes Team</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="article-content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="article-content">
                        <?php
                        // Include the specific content file
                        $content_file = 'blog-content/' . $current_article['content'];
                        if (file_exists($content_file)) {
                            include $content_file;
                        } else {
                            // Default content if file doesn't exist
                            echo '<div class="article-body">';
                            echo '<p>This is a sample article content. The full content will be loaded from individual content files.</p>';
                            echo '<p>Each article will have its own detailed content covering the topic comprehensively with proper SEO optimization.</p>';
                            echo '</div>';
                        }
                        ?>
                        
                        <!-- Article Tags -->
                        <div class="article-tags-section">
                            <h4>Tags:</h4>
                            <div class="article-tags">
                                <?php foreach ($current_article['tags'] as $tag): ?>
                                    <span class="tag"><?php echo $tag; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Social Share -->
                        <div class="social-share-section">
                            <h4>Share this article:</h4>
                            <div class="social-share-buttons">
                                <a href="#" class="share-btn facebook" onclick="shareOnFacebook()">
                                    <i class="fab fa-facebook-f"></i> Facebook
                                </a>
                                <a href="#" class="share-btn twitter" onclick="shareOnTwitter()">
                                    <i class="fab fa-twitter"></i> Twitter
                                </a>
                                <a href="#" class="share-btn linkedin" onclick="shareOnLinkedIn()">
                                    <i class="fab fa-linkedin-in"></i> LinkedIn
                                </a>
                                <a href="#" class="share-btn whatsapp" onclick="shareOnWhatsApp()">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="article-sidebar">
                        <!-- Author Info -->
                        <div class="sidebar-widget author-widget">
                            <div class="author-info">
                                <div class="author-avatar">
                                    <img src="images/Hestia Abodes All Platinum Grey Black logo.png" alt="Hestia Abodes">
                                </div>
                                <div class="author-details">
                                    <h4>Hestia Abodes Team</h4>
                                    <p>Real Estate Experts with 21+ years of experience in Pune's property market.</p>
                                    <div class="author-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Related Articles -->
                        <div class="sidebar-widget related-articles-widget">
                            <h4>Related Articles</h4>
                            <div class="related-articles">
                                <?php
                                // Show other articles as related
                                $related_count = 0;
                                foreach ($articles as $article_slug => $article) {
                                    if ($article_slug !== $slug && $related_count < 3) {
                                        echo '<div class="related-article">';
                                        echo '<div class="related-article-image">';
                                        echo '<img src="' . $article['image'] . '" alt="' . $article['title'] . '">';
                                        echo '</div>';
                                        echo '<div class="related-article-content">';
                                        echo '<h5><a href="blog-article.php?slug=' . $article_slug . '">' . $article['title'] . '</a></h5>';
                                        echo '<div class="related-article-meta">';
                                        echo '<span><i class="fas fa-calendar"></i> ' . $article['date'] . '</span>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        $related_count++;
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Contact CTA -->
                        <div class="sidebar-widget cta-widget">
                            <div class="cta-content">
                                <h4>Need Expert Advice?</h4>
                                <p>Get personalized real estate consultation from our experts.</p>
                                <a href="contact.php" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>

                        <!-- Newsletter -->
                        <div class="sidebar-widget newsletter-widget">
                            <h4>Stay Updated</h4>
                            <p>Subscribe to get the latest real estate insights and market updates.</p>
                            <form class="newsletter-form">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your email address" required>
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <!-- More Articles Section -->
    <section class="more-articles-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>More Articles</h2>
                <p>Explore more insights from our real estate experts</p>
            </div>
            
            <div class="row">
                <?php
                // Show 3 other articles
                $shown_count = 0;
                foreach ($articles as $article_slug => $article) {
                    if ($article_slug !== $slug && $shown_count < 3) {
                        echo '<div class="col-lg-4 col-md-6 mb-4">';
                        echo '<article class="blog-card">';
                        echo '<div class="blog-card-image">';
                        echo '<img src="' . $article['image'] . '" alt="' . $article['title'] . '" class="img-fluid">';
                        echo '<div class="blog-category">' . $article['category'] . '</div>';
                        echo '</div>';
                        echo '<div class="blog-card-content">';
                        echo '<div class="blog-meta">';
                        echo '<span class="blog-date"><i class="fas fa-calendar"></i> ' . $article['date'] . '</span>';
                        echo '<span class="blog-read-time"><i class="fas fa-clock"></i> ' . $article['read_time'] . '</span>';
                        echo '</div>';
                        echo '<h3 class="blog-title"><a href="blog-article.php?slug=' . $article_slug . '">' . $article['title'] . '</a></h3>';
                        echo '<p class="blog-excerpt">' . $article['excerpt'] . '</p>';
                        echo '<a href="blog-article.php?slug=' . $article_slug . '" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>';
                        echo '</div>';
                        echo '</article>';
                        echo '</div>';
                        $shown_count++;
                    }
                }
                ?>
            </div>
            
            <div class="text-center mt-4">
                <a href="blog.php" class="btn btn-outline-primary">View All Articles</a>
            </div>
        </div>
    </section>

    <script>
        // Social sharing functions
        function shareOnFacebook() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}`, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://twitter.com/intent/tweet?url=${url}&text=${title}`, '_blank', 'width=600,height=400');
        }

        function shareOnLinkedIn() {
            const url = encodeURIComponent(window.location.href);
            window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, '_blank', 'width=600,height=400');
        }

        function shareOnWhatsApp() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            window.open(`https://wa.me/?text=${title} ${url}`, '_blank');
        }
    </script>

<?php include 'footer.php'; ?>
