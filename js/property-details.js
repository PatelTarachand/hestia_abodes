$(document).ready(function() {
    // ===== PROPERTY GALLERY FUNCTIONALITY =====
    
    // Thumbnail click handler
    $('.thumbnail').click(function() {
        var newImage = $(this).data('image');
        var currentIndex = $(this).index() + 1;
        
        // Update active thumbnail
        $('.thumbnail').removeClass('active');
        $(this).addClass('active');
        
        // Update main image with fade effect
        $('#mainPropertyImage').fadeOut(300, function() {
            $(this).attr('src', newImage).fadeIn(300);
        });
        
        // Update image counter
        $('#currentImage').text(currentIndex);
    });
    
    // Initialize total images count
    var totalImages = $('.thumbnail').length;
    $('#totalImages').text(totalImages);
    
    // ===== PROPERTY INQUIRY FORM =====
    $('.inquiry-form form').submit(function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $submitBtn = $form.find('button[type="submit"]');
        var originalText = $submitBtn.text();
        
        // Show loading state
        $submitBtn.text('Sending...').prop('disabled', true);
        
        // Simulate form submission
        setTimeout(function() {
            $submitBtn.text('Inquiry Sent!').removeClass('btn-primary').addClass('btn-success');
            
            // Show success message
            showNotification('Thank you! Your inquiry has been sent successfully. We will contact you soon.', 'success');
            
            // Reset form after delay
            setTimeout(function() {
                $form[0].reset();
                $submitBtn.text(originalText).prop('disabled', false).removeClass('btn-success').addClass('btn-primary');
            }, 3000);
        }, 2000);
    });
    
    // ===== PROPERTY ACTIONS =====
    $('.property-actions .btn').click(function() {
        var buttonText = $(this).text().trim();
        
        if (buttonText === 'SCHEDULE VISIT') {
            // Scroll to contact form or show modal
            $('html, body').animate({
                scrollTop: $('.inquiry-form').offset().top - 100
            }, 800);
            
            showNotification('Please fill out the inquiry form to schedule a visit.', 'info');
        } else if (buttonText === 'CONTACT AGENT') {
            // Scroll to agent card
            $('html, body').animate({
                scrollTop: $('.agent-card').offset().top - 100
            }, 800);
            
            showNotification('Contact details are highlighted below.', 'info');
        }
    });
    
    // ===== AMENITY HOVER EFFECTS =====
    $('.amenity-item').hover(
        function() {
            $(this).siblings().css('opacity', '0.7');
        },
        function() {
            $(this).siblings().css('opacity', '1');
        }
    );
    
    // ===== SIMILAR PROPERTIES HOVER EFFECTS =====
    $('.property-card').hover(
        function() {
            $(this).find('img').css('transform', 'scale(1.1)');
        },
        function() {
            $(this).find('img').css('transform', 'scale(1)');
        }
    );
    
    // ===== PROPERTY FEATURES ANIMATION =====
    function animateFeatures() {
        $('.feature-item').each(function(index) {
            var $this = $(this);
            setTimeout(function() {
                $this.addClass('animate-in');
            }, index * 100);
        });
    }
    
    // ===== SCROLL ANIMATIONS =====
    function checkPropertyScroll() {
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();
        
        // Animate property features
        var featuresTop = $('.property-features').offset().top;
        if (scrollTop + windowHeight > featuresTop + 100) {
            if (!$('.property-features').hasClass('animated')) {
                $('.property-features').addClass('animated');
                animateFeatures();
            }
        }
        
        // Animate amenities
        $('.amenity-item').each(function(index) {
            var $this = $(this);
            var elementTop = $this.offset().top;
            
            if (scrollTop + windowHeight > elementTop + 50) {
                setTimeout(function() {
                    $this.addClass('animate-in');
                }, index * 50);
            }
        });
    }
    
    // Scroll event handler
    $(window).scroll(function() {
        checkPropertyScroll();
    });
    
    // Check on page load
    setTimeout(function() {
        checkPropertyScroll();
    }, 500);
    
    // ===== CONTACT BUTTONS FUNCTIONALITY =====
    $('.contact-btn').click(function(e) {
        var href = $(this).attr('href');
        
        if (href.startsWith('tel:')) {
            // Phone call
            showNotification('Initiating phone call...', 'info');
        } else if (href.includes('wa.me')) {
            // WhatsApp
            showNotification('Opening WhatsApp...', 'info');
        }
    });
    
    // ===== PROPERTY CARD CLICK HANDLER =====
    $('.property-card').click(function() {
        // In a real application, this would navigate to the specific property
        var propertyTitle = $(this).find('h3').text();
        showNotification('Loading details for: ' + propertyTitle, 'info');

        // Add loading animation
        $(this).addClass('loading');
        setTimeout(function() {
            $('.property-card').removeClass('loading');
        }, 2000);
    });

    // ===== PROPERTY SHARING FUNCTIONALITY =====
    function addShareButtons() {
        var shareSection = `
            <div class="property-share">
                <h4>Share This Property</h4>
                <div class="share-buttons">
                    <button class="share-btn" data-platform="facebook">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>
                    <button class="share-btn" data-platform="twitter">
                        <i class="fab fa-twitter"></i> Twitter
                    </button>
                    <button class="share-btn" data-platform="whatsapp">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </button>
                    <button class="share-btn" data-platform="email">
                        <i class="fas fa-envelope"></i> Email
                    </button>
                    <button class="share-btn" data-platform="copy">
                        <i class="fas fa-link"></i> Copy Link
                    </button>
                </div>
            </div>
        `;

        $('.property-sidebar').append(shareSection);
    }

    // Add share buttons
    addShareButtons();

    // Handle share button clicks
    $(document).on('click', '.share-btn', function() {
        var platform = $(this).data('platform');
        var propertyTitle = $('.property-title').text();
        var propertyUrl = window.location.href;
        var shareText = 'Check out this amazing property: ' + propertyTitle;

        switch(platform) {
            case 'facebook':
                window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(propertyUrl), '_blank');
                break;
            case 'twitter':
                window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(shareText) + '&url=' + encodeURIComponent(propertyUrl), '_blank');
                break;
            case 'whatsapp':
                window.open('https://wa.me/?text=' + encodeURIComponent(shareText + ' ' + propertyUrl), '_blank');
                break;
            case 'email':
                window.location.href = 'mailto:?subject=' + encodeURIComponent(propertyTitle) + '&body=' + encodeURIComponent(shareText + '\n\n' + propertyUrl);
                break;
            case 'copy':
                navigator.clipboard.writeText(propertyUrl).then(function() {
                    showNotification('Property link copied to clipboard!', 'success');
                });
                break;
        }

        showNotification('Sharing on ' + platform.charAt(0).toUpperCase() + platform.slice(1), 'info');
    });

    // ===== PROPERTY COMPARISON FEATURE =====
    function addComparisonFeature() {
        var compareSection = `
            <div class="property-compare">
                <h4>Compare Properties</h4>
                <button class="btn btn-outline-primary w-100" id="addToCompare">
                    <i class="fas fa-plus"></i> Add to Compare
                </button>
                <div class="compare-count" style="display: none;">
                    <span id="compareCounter">0</span> properties selected
                    <button class="btn btn-sm btn-primary" id="viewComparison">View Comparison</button>
                </div>
            </div>
        `;

        $('.property-sidebar').append(compareSection);
    }

    // Add comparison feature
    addComparisonFeature();

    // Handle comparison functionality
    var comparedProperties = JSON.parse(localStorage.getItem('comparedProperties') || '[]');

    $('#addToCompare').click(function() {
        var propertyData = {
            title: $('.property-title').text(),
            price: $('.property-price').text(),
            location: $('.property-location').text(),
            image: $('#mainPropertyImage').attr('src'),
            url: window.location.href
        };

        if (comparedProperties.length < 3) {
            comparedProperties.push(propertyData);
            localStorage.setItem('comparedProperties', JSON.stringify(comparedProperties));
            updateCompareCounter();
            showNotification('Property added to comparison!', 'success');
            $(this).text('Added to Compare').prop('disabled', true);
        } else {
            showNotification('Maximum 3 properties can be compared at once.', 'warning');
        }
    });

    function updateCompareCounter() {
        var count = comparedProperties.length;
        if (count > 0) {
            $('.compare-count').show();
            $('#compareCounter').text(count);
        } else {
            $('.compare-count').hide();
        }
    }

    // Initialize compare counter
    updateCompareCounter();

    // ===== PROPERTY FAVORITES FEATURE =====
    function addFavoritesFeature() {
        var favoriteBtn = `
            <button class="favorite-btn" id="favoriteBtn">
                <i class="far fa-heart"></i>
            </button>
        `;

        $('.property-badge').after(favoriteBtn);
    }

    // Add favorites feature
    addFavoritesFeature();

    // Handle favorites
    var favorites = JSON.parse(localStorage.getItem('favoriteProperties') || '[]');
    var currentPropertyUrl = window.location.href;

    if (favorites.includes(currentPropertyUrl)) {
        $('#favoriteBtn i').removeClass('far').addClass('fas');
        $('#favoriteBtn').addClass('active');
    }

    $('#favoriteBtn').click(function(e) {
        e.stopPropagation();
        var $icon = $(this).find('i');

        if (favorites.includes(currentPropertyUrl)) {
            // Remove from favorites
            favorites = favorites.filter(url => url !== currentPropertyUrl);
            $icon.removeClass('fas').addClass('far');
            $(this).removeClass('active');
            showNotification('Removed from favorites', 'info');
        } else {
            // Add to favorites
            favorites.push(currentPropertyUrl);
            $icon.removeClass('far').addClass('fas');
            $(this).addClass('active');
            showNotification('Added to favorites!', 'success');
        }

        localStorage.setItem('favoriteProperties', JSON.stringify(favorites));
    });
    
    // ===== KEYBOARD NAVIGATION FOR GALLERY =====
    $(document).keydown(function(e) {
        var currentIndex = $('.thumbnail.active').index();
        var totalThumbnails = $('.thumbnail').length;
        
        if (e.keyCode === 37) { // Left arrow
            e.preventDefault();
            var prevIndex = currentIndex > 0 ? currentIndex - 1 : totalThumbnails - 1;
            $('.thumbnail').eq(prevIndex).click();
        } else if (e.keyCode === 39) { // Right arrow
            e.preventDefault();
            var nextIndex = currentIndex < totalThumbnails - 1 ? currentIndex + 1 : 0;
            $('.thumbnail').eq(nextIndex).click();
        }
    });
    
    // ===== SMOOTH SCROLLING FOR ANCHOR LINKS =====
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });
});

// ===== NOTIFICATION FUNCTION =====
function showNotification(message, type) {
    // Remove existing notifications
    $('.notification').remove();
    
    // Create notification element
    var notification = $('<div class="notification notification-' + type + '">' + message + '</div>');
    
    // Add to body
    $('body').append(notification);
    
    // Show notification
    setTimeout(function() {
        notification.addClass('show');
    }, 100);
    
    // Hide notification after 4 seconds
    setTimeout(function() {
        notification.removeClass('show');
        setTimeout(function() {
            notification.remove();
        }, 300);
    }, 4000);
}

// ===== PROPERTY DETAILS PAGE SPECIFIC STYLES =====
$(document).ready(function() {
    // Add CSS for notifications
    if (!$('#property-notification-styles').length) {
        var notificationStyles = `
            <style id="property-notification-styles">
                .notification {
                    position: fixed;
                    top: 100px;
                    right: 20px;
                    padding: 15px 20px;
                    border-radius: 5px;
                    color: white;
                    font-weight: 500;
                    z-index: 10000;
                    transform: translateX(400px);
                    transition: all 0.3s ease;
                    max-width: 300px;
                    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                }
                
                .notification.show {
                    transform: translateX(0);
                }
                
                .notification-success {
                    background: #28a745;
                }
                
                .notification-info {
                    background: #17a2b8;
                }
                
                .notification-warning {
                    background: #ffc107;
                    color: #212529;
                }
                
                .notification-error {
                    background: #dc3545;
                }
                
                .feature-item.animate-in {
                    animation: slideInUp 0.6s ease forwards;
                }
                
                .amenity-item.animate-in {
                    animation: fadeInUp 0.6s ease forwards;
                }
                
                @keyframes slideInUp {
                    from {
                        opacity: 0;
                        transform: translateY(30px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
                
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                /* Property Share Styles */
                .property-share {
                    background: var(--white);
                    padding: 25px;
                    border-radius: 0;
                    box-shadow: var(--shadow);
                    margin-bottom: 30px;
                }

                .property-share h4 {
                    color: var(--text-dark);
                    margin-bottom: 20px;
                    font-size: 1.2rem;
                    font-weight: 600;
                }

                .share-buttons {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 10px;
                }

                .share-btn {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 10px 12px;
                    border: 1px solid var(--border-color);
                    background: var(--white);
                    color: var(--text-dark);
                    border-radius: 0;
                    font-size: 0.85rem;
                    font-weight: 500;
                    transition: all 0.3s ease;
                    cursor: pointer;
                }

                .share-btn:hover {
                    background: var(--primary-color);
                    color: var(--white);
                    border-color: var(--primary-color);
                    transform: translateY(-2px);
                }

                .share-btn i {
                    margin-right: 6px;
                    font-size: 0.9rem;
                }

                /* Property Compare Styles */
                .property-compare {
                    background: var(--white);
                    padding: 25px;
                    border-radius: 0;
                    box-shadow: var(--shadow);
                    margin-bottom: 30px;
                }

                .property-compare h4 {
                    color: var(--text-dark);
                    margin-bottom: 20px;
                    font-size: 1.2rem;
                    font-weight: 600;
                }

                .compare-count {
                    margin-top: 15px;
                    padding: 15px;
                    background: var(--accent-color);
                    border-radius: 0;
                    text-align: center;
                }

                .compare-count span {
                    font-weight: 600;
                    color: var(--primary-color);
                    display: block;
                    margin-bottom: 10px;
                }

                /* Favorite Button Styles */
                .favorite-btn {
                    position: absolute;
                    top: 15px;
                    right: 15px;
                    width: 40px;
                    height: 40px;
                    background: rgba(255, 255, 255, 0.9);
                    border: none;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    z-index: 2;
                }

                .favorite-btn:hover,
                .favorite-btn.active {
                    background: var(--primary-color);
                    color: var(--white);
                    transform: scale(1.1);
                }

                .favorite-btn i {
                    font-size: 1.2rem;
                    color: var(--primary-color);
                    transition: all 0.3s ease;
                }

                .favorite-btn:hover i,
                .favorite-btn.active i {
                    color: var(--white);
                }

                /* Property Card Loading State */
                .property-card.loading {
                    opacity: 0.7;
                    pointer-events: none;
                    position: relative;
                }

                .property-card.loading::after {
                    content: '';
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 30px;
                    height: 30px;
                    border: 3px solid var(--border-color);
                    border-top: 3px solid var(--primary-color);
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    transform: translate(-50%, -50%);
                    z-index: 10;
                }

                @keyframes spin {
                    0% { transform: translate(-50%, -50%) rotate(0deg); }
                    100% { transform: translate(-50%, -50%) rotate(360deg); }
                }
            </style>
        `;
        $('head').append(notificationStyles);
    }
});
