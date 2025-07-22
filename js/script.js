$(document).ready(function() {
    console.log('jQuery loaded and ready'); // Debug log
    console.log('Sidebar element exists:', $('#sidebar').length > 0);
    console.log('Toggle buttons exist:', $('#sidebarToggle').length, $('#mobileMenuToggle').length);

    // ===== NAVIGATION SCROLL EFFECT WITH HIDE/SHOW =====
    var lastScrollTop = 0;
    var navbar = $('.transparent-nav');
    var scrollThreshold = 50;
    var hideThreshold = 200;

    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();

        // Add/remove scrolled class for styling
        if (scrollTop > scrollThreshold) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }

        // Hide/show navbar based on scroll direction
        if (scrollTop > hideThreshold) {
            if (scrollTop > lastScrollTop && !navbar.hasClass('nav-hidden')) {
                // Scrolling down - hide navbar
                navbar.addClass('nav-hidden');
            } else if (scrollTop < lastScrollTop && navbar.hasClass('nav-hidden')) {
                // Scrolling up - show navbar
                navbar.removeClass('nav-hidden');
            }
        } else {
            // Always show navbar when near top
            navbar.removeClass('nav-hidden');
        }

        lastScrollTop = scrollTop;
    });

    // ===== NAVBAR SHOW ON HOVER WHEN HIDDEN =====
    navbar.hover(
        function() {
            // Show navbar on hover when hidden
            if ($(this).hasClass('nav-hidden')) {
                $(this).addClass('nav-hover-show');
            }
        },
        function() {
            // Remove hover show class
            $(this).removeClass('nav-hover-show');
        }
    );

    // ===== SIDEBAR TOGGLE =====
    function openSidebar() {
        console.log('Opening sidebar...');
        $('#sidebar').addClass('active');
        $('#sidebarOverlay').addClass('active');
        $('body').addClass('sidebar-open');
    }

    function closeSidebar() {
        console.log('Closing sidebar...');
        $('#sidebar').removeClass('active');
        $('#sidebarOverlay').removeClass('active');
        $('body').removeClass('sidebar-open');
    }

    // Bind click events with multiple methods
    $(document).on('click', '#sidebarToggle', function(e) {
        e.preventDefault();
        console.log('Desktop sidebar toggle clicked');
        openSidebar();
    });

    $(document).on('click', '#mobileMenuToggle', function(e) {
        e.preventDefault();
        console.log('Mobile sidebar toggle clicked');
        openSidebar();
    });

    // Direct binding as fallback
    $('#sidebarToggle').click(function(e) {
        e.preventDefault();
        console.log('Direct desktop sidebar toggle clicked');
        openSidebar();
    });

    $('#mobileMenuToggle').click(function(e) {
        e.preventDefault();
        console.log('Direct mobile sidebar toggle clicked');
        openSidebar();
    });

    $(document).on('click', '#sidebarClose, #sidebarOverlay', function() {
        console.log('Sidebar close clicked'); // Debug log
        closeSidebar();
    });

    // Close sidebar when clicking on menu items (only internal links)
    $(document).on('click', '.sidebar-menu a[href^="#"]', function() {
        closeSidebar();
    });

    // ===== SMOOTH SCROLLING =====
    $('a[href^="#"]').click(function(e) {
        e.preventDefault();
        var target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    });

    // ===== HERO CAROUSEL AUTO-PLAY =====
    $('#heroCarousel').carousel({
        interval: 6000,
        ride: 'carousel'
    });

    // ===== PROPERTIES SCROLL ANIMATION =====
    function checkPropertiesScroll() {
        // Animate section title first
        var propertiesSection = $('.properties-section');
        if (propertiesSection.length && !propertiesSection.hasClass('title-visible')) {
            var sectionTop = propertiesSection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.8);

            if (sectionTop < triggerPoint) {
                propertiesSection.addClass('title-visible');
            }
        }

        $('.property-showcase').each(function() {
            var $this = $(this);
            var elementTop = $this.offset().top;
            var elementBottom = elementTop + $this.outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            var triggerPoint = viewportTop + ($(window).height() * 0.75);

            // Check if element is in viewport with trigger point
            if (elementTop < triggerPoint && elementBottom > viewportTop && !$this.hasClass('animate-in')) {
                // Add visible class for height/opacity
                $this.addClass('property-visible');

                // Add animation class with slight delay for staggered effect
                setTimeout(function() {
                    $this.addClass('animate-in');

                    // Trigger individual element animations with staggered delays
                    setTimeout(function() {
                        $this.find('.property-number').addClass('animate-element');
                    }, 100);

                    setTimeout(function() {
                        $this.find('.property-name').addClass('animate-element');
                    }, 300);

                    setTimeout(function() {
                        $this.find('.property-type').addClass('animate-element');
                    }, 500);

                    setTimeout(function() {
                        $this.find('.property-location').addClass('animate-element');
                    }, 600);

                    setTimeout(function() {
                        $this.find('.property-description').addClass('animate-element');
                    }, 700);

                    setTimeout(function() {
                        $this.find('.property-price').addClass('animate-element');
                    }, 800);

                }, 150);
            }
        });
    }

    // Enhanced scroll handler with throttling
    var scrollTimeout;
    $(window).scroll(function() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(function() {
            checkPropertiesScroll();
            checkGalleryScroll();
            checkAboutScroll();
            checkContactScroll();
        }, 10);
    });

    // Check on page load
    setTimeout(function() {
        checkPropertiesScroll();
        checkGalleryScroll();
        checkAboutScroll();
        checkContactScroll();
    }, 500);

    // ===== GALLERY SCROLL ANIMATION =====
    function checkGalleryScroll() {
        // Animate section title first
        var gallerySection = $('.gallery-section');
        if (gallerySection.length && !gallerySection.hasClass('title-visible')) {
            var sectionTop = gallerySection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.8);

            if (sectionTop < triggerPoint) {
                gallerySection.addClass('title-visible');
            }
        }

        // Animate gallery items with creative timing
        $('.gallery-item').each(function(index) {
            var $this = $(this);
            var elementTop = $this.offset().top;
            var elementBottom = elementTop + $this.outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            var triggerPoint = viewportTop + ($(window).height() * 0.75);

            // Check if element is in viewport with trigger point
            if (elementTop < triggerPoint && elementBottom > viewportTop && !$this.hasClass('animate-in')) {
                // Different delays based on item size for interesting effect
                var delay = 0;
                if ($this.hasClass('gallery-large')) {
                    delay = 200; // Large items animate first
                } else if ($this.hasClass('gallery-medium')) {
                    delay = 400 + (index * 100); // Medium items follow
                } else {
                    delay = 600 + (index * 80); // Small items last
                }

                setTimeout(function() {
                    $this.addClass('animate-in');
                }, delay);
            }
        });
    }

    // ===== GALLERY FILTER FUNCTIONALITY =====
    $('.filter-btn').click(function() {
        var filter = $(this).data('filter');

        // Update active button
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        // Filter gallery items
        $('.gallery-item').each(function() {
            var $item = $(this);
            var category = $item.data('category');

            if (filter === 'all' || category === filter) {
                $item.removeClass('filter-hidden').addClass('filter-visible');
            } else {
                $item.removeClass('filter-visible').addClass('filter-hidden');
            }
        });
    });

    // ===== VIEW MORE GALLERY BUTTON =====
    $('#viewMoreGallery').click(function() {
        // Add more gallery items or redirect to full gallery page
        var button = $(this);
        var originalText = button.html();

        button.html('<i class="fas fa-spinner fa-spin"></i> Loading...').prop('disabled', true);

        setTimeout(function() {
            // Simulate loading more content
            alert('Full gallery feature will be implemented soon!');
            button.html(originalText).prop('disabled', false);
        }, 1500);
    });

    // ===== ABOUT SECTION SCROLL ANIMATION =====
    function checkAboutScroll() {
        var aboutSection = $('.about-section');
        if (aboutSection.length && !aboutSection.hasClass('animate-in')) {
            var sectionTop = aboutSection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.7);

            if (sectionTop < triggerPoint) {
                aboutSection.addClass('animate-in');

                // Trigger statistics cards animation
                setTimeout(function() {
                    animateStatCards();
                }, 800);
            }
        }
    }

    // ===== STATISTICS CARDS ANIMATION =====
    function animateStatCards() {
        $('.stat-card').each(function(index) {
            var $this = $(this);
            setTimeout(function() {
                $this.addClass('animate-in');

                // Start counter animation after card appears
                setTimeout(function() {
                    animateCardCounter($this);
                }, 300);
            }, index * 150);
        });
    }

    // ===== INDIVIDUAL CARD COUNTER ANIMATION =====
    function animateCardCounter($card) {
        var $number = $card.find('.stat-number');
        var targetValue = parseInt($card.data('count'));
        var duration = 2000;
        var increment = targetValue / (duration / 50);
        var current = 0;

        var timer = setInterval(function() {
            current += increment;
            if (current >= targetValue) {
                current = targetValue;
                clearInterval(timer);
            }

            var displayValue = Math.floor(current);

            // Format based on the target value
            if (targetValue >= 1000) {
                $number.text(displayValue.toLocaleString() + '+');
            } else {
                $number.text(displayValue);
            }
        }, 50);
    }

    // ===== STATISTICS CARDS HOVER EFFECTS =====
    $(document).ready(function() {
        $('.stat-card').hover(
            function() {
                // Dim other cards
                $('.stat-card').not(this).css('opacity', '0.7');

                // Highlight current card
                $(this).css('opacity', '1');
            },
            function() {
                // Restore all cards
                $('.stat-card').css('opacity', '1');
            }
        );

        // Add click effect to stat cards
        $('.stat-card').click(function() {
            var $this = $(this);

            // Add click animation
            $this.css('transform', 'translateY(-10px) scale(0.98)');

            setTimeout(function() {
                $this.css('transform', '');
            }, 150);

            // Optional: Show more info about the statistic
            var statLabel = $this.find('.stat-label').text();
            showNotification('Learn more about our ' + statLabel.toLowerCase(), 'info');
        });

        // Smooth scroll for about CTA button
        $('.about-cta-left .btn').click(function(e) {
            var href = $(this).attr('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                var target = $(href);
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 800);
                }
            }
        });
    });

    // ===== CONTACT SECTION SCROLL ANIMATION =====
    function checkContactScroll() {
        var contactSection = $('.contact-section');
        if (contactSection.length && !contactSection.hasClass('animate-in')) {
            var sectionTop = contactSection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.7);

            if (sectionTop < triggerPoint) {
                contactSection.addClass('animate-in');

                // Trigger method cards animation
                setTimeout(function() {
                    animateMethodCards();
                }, 1000);

                // Trigger title animation
                setTimeout(function() {
                    animateContactTitle();
                }, 500);
            }
        }
    }

    // ===== ANIMATE METHOD CARDS =====
    function animateMethodCards() {
        $('.method-card').each(function(index) {
            var $this = $(this);
            setTimeout(function() {
                $this.addClass('animate-in');
            }, index * 150);
        });
    }

    // ===== ANIMATE CONTACT TITLE =====
    function animateContactTitle() {
        $('.title-line, .title-highlight').each(function(index) {
            var $this = $(this);
            setTimeout(function() {
                $this.css({
                    'animation-play-state': 'running'
                });
            }, index * 300);
        });
    }

    // ===== CONTACT FORM INTERACTIONS =====
    $(document).ready(function() {
        // Method card click effects
        $('.method-card').click(function() {
            var $this = $(this);
            var method = $this.data('method');

            // Add click animation
            $this.css('transform', 'translateY(-10px) scale(0.98)');
            setTimeout(function() {
                $this.css('transform', '');
            }, 200);

            // Scroll to form if form method is clicked
            if (method === 'form') {
                $('html, body').animate({
                    scrollTop: $('.contact-form-section').offset().top - 100
                }, 800);
            }

            // Show notification
            var methodName = $this.find('h4').text();
            showNotification('You selected: ' + methodName, 'info');
        });

        // Enhanced form interactions
        $('.form-input, .form-select, .form-textarea').on('focus blur', function(e) {
            var $this = $(this);
            var $wrapper = $this.closest('.input-wrapper, .select-wrapper, .textarea-wrapper');

            if (e.type === 'focus') {
                $wrapper.addClass('focused');
            } else {
                $wrapper.removeClass('focused');
                if ($this.val()) {
                    $wrapper.addClass('filled');
                } else {
                    $wrapper.removeClass('filled');
                }
            }
        });

        // Form submission with animation
        $('.contact-form').submit(function(e) {
            e.preventDefault();

            var $submitBtn = $('.submit-btn');
            var originalText = $submitBtn.find('.btn-text').text();

            // Add loading state
            $submitBtn.prop('disabled', true);
            $submitBtn.find('.btn-text').text('Sending...');
            $submitBtn.find('.btn-icon i').removeClass('fa-paper-plane').addClass('fa-spinner fa-spin');

            // Simulate form submission
            setTimeout(function() {
                $submitBtn.find('.btn-text').text('Message Sent!');
                $submitBtn.find('.btn-icon i').removeClass('fa-spinner fa-spin').addClass('fa-check');

                // Show success notification
                showNotification('Thank you! Your message has been sent successfully.', 'success');

                // Reset form after delay
                setTimeout(function() {
                    $('.contact-form')[0].reset();
                    $submitBtn.prop('disabled', false);
                    $submitBtn.find('.btn-text').text(originalText);
                    $submitBtn.find('.btn-icon i').removeClass('fa-check').addClass('fa-paper-plane');

                    // Remove filled classes
                    $('.input-wrapper, .select-wrapper, .textarea-wrapper').removeClass('filled focused');
                }, 2000);
            }, 2000);
        });

        // Social link hover effects
        $('.social-link').hover(
            function() {
                $(this).siblings().css('opacity', '0.7');
            },
            function() {
                $(this).siblings().css('opacity', '1');
            }
        );
    });

    // ===== SEE MORE PROPERTIES BUTTON =====
    $('#seeMoreProperties').click(function() {
        var hiddenProperties = $('.property-hidden');

        if (hiddenProperties.length > 0) {
            // Show hidden properties with animation
            hiddenProperties.removeClass('property-hidden').addClass('property-visible');

            // Change button text
            $(this).text('View All Properties').removeClass('btn-outline-dark').addClass('btn-primary');

            // Scroll to first newly visible property
            setTimeout(function() {
                $('html, body').animate({
                    scrollTop: hiddenProperties.first().offset().top - 100
                }, 800);
            }, 300);
        } else {
            // Redirect to properties page or show more content
            window.location.href = '#contact'; // Or redirect to a properties page
        }
    });

    // ===== ANIMATIONS ON SCROLL =====
    function animateOnScroll() {
        $('.feature-item, .stat-item, .property-card').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-in');
            }
        });
    }

    // Run animation check on scroll and load
    $(window).on('scroll', animateOnScroll);
    animateOnScroll();

    // ===== COUNTER ANIMATION =====
    function animateCounters() {
        $('.stat-number').each(function() {
            var $this = $(this);
            var countTo = $this.text().replace(/[^0-9]/g, '');
            
            if (countTo && !$this.hasClass('counted')) {
                $this.addClass('counted');
                $({ countNum: 0 }).animate({
                    countNum: countTo
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        var suffix = $this.text().replace(/[0-9]/g, '');
                        $this.text(Math.floor(this.countNum) + suffix);
                    },
                    complete: function() {
                        var suffix = $this.text().replace(/[0-9]/g, '');
                        $this.text(countTo + suffix);
                    }
                });
            }
        });
    }

    // Trigger counter animation when stats section is visible
    $(window).scroll(function() {
        var statsSection = $('.stats-grid');
        if (statsSection.length) {
            var statsTop = statsSection.offset().top;
            var statsBottom = statsTop + statsSection.outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (statsBottom > viewportTop && statsTop < viewportBottom) {
                animateCounters();
            }
        }
    });

    // ===== FORM HANDLING =====
    $('.contact-form').submit(function(e) {
        e.preventDefault();
        
        // Basic form validation
        var isValid = true;
        $(this).find('input[required], textarea[required], select[required]').each(function() {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });

        if (isValid) {
            // Show success message
            showNotification('Thank you! Your message has been sent successfully.', 'success');
            $(this)[0].reset();
        } else {
            showNotification('Please fill in all required fields.', 'error');
        }
    });

    $('.subscribe-form, .newsletter-form').submit(function(e) {
        e.preventDefault();

        var email = $(this).find('input[type="email"]').val();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalText = submitBtn.text();

        if (email && isValidEmail(email)) {
            submitBtn.text('Subscribing...').prop('disabled', true);

            setTimeout(function() {
                showNotification('Thank you for subscribing to our newsletter!', 'success');
                $('.subscribe-form, .newsletter-form')[0].reset();
                submitBtn.text(originalText).prop('disabled', false);
            }, 1500);
        } else {
            showNotification('Please enter a valid email address.', 'error');
        }
    });

    // ===== UTILITY FUNCTIONS =====
    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function showNotification(message, type) {
        var notificationClass = type === 'success' ? 'alert-success' : 'alert-danger';
        var notification = $('<div class="alert ' + notificationClass + ' alert-dismissible fade show notification-popup" role="alert">' +
            message +
            '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' +
            '</div>');
        
        $('body').append(notification);
        
        setTimeout(function() {
            notification.alert('close');
        }, 5000);
    }

    // ===== PROPERTY CARD HOVER EFFECTS =====
    $('.property-card').hover(
        function() {
            $(this).find('.property-image img').addClass('hovered');
        },
        function() {
            $(this).find('.property-image img').removeClass('hovered');
        }
    );

    // ===== LAZY LOADING FOR IMAGES =====
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // ===== MOBILE MENU HANDLING =====
    function handleMobileMenu() {
        if ($(window).width() <= 991) {
            $('.navbar-nav .nav-link').click(function() {
                if ($(this).attr('href').startsWith('#')) {
                    $('#sidebar').removeClass('active');
                    $('#sidebarOverlay').removeClass('active');
                    $('body').removeClass('sidebar-open');
                }
            });
        }
    }

    $(window).resize(handleMobileMenu);
    handleMobileMenu();

    // ===== PRELOADER (if needed) =====
    $(window).on('load', function() {
        $('.preloader').fadeOut('slow');
    });

    // ===== BACK TO TOP BUTTON =====
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
    });

    $('.back-to-top, #backToTop').click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 800);
    });

    // ===== PARALLAX EFFECT FOR HERO =====
    $(window).scroll(function() {
        var scrolled = $(this).scrollTop();
        var parallax = $('.hero-slide');
        var speed = 0.5;
        
        parallax.each(function() {
            var yPos = -(scrolled * speed);
            $(this).css('transform', 'translateY(' + yPos + 'px)');
        });
    });

    // ===== DROPDOWN MENU ENHANCEMENTS =====
    $('.dropdown-toggle').dropdown();
    
    // Keep dropdown open on hover
    $('.dropdown').hover(
        function() {
            $(this).addClass('show');
            $(this).find('.dropdown-menu').addClass('show');
        },
        function() {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        }
    );

    // ===== INITIALIZE TOOLTIPS AND POPOVERS =====
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    // ===== LOCATION CARDS INTERACTION =====
    $('.location-card').click(function() {
        var location = $(this).find('h4').text();
        // You can add navigation to specific location pages here
        console.log('Exploring properties in: ' + location);
    });

    // ===== PROPERTY CARD INTERACTIONS =====
    $('.property-card .btn').click(function(e) {
        e.preventDefault();
        var propertyTitle = $(this).closest('.property-card').find('.property-title').text();
        // You can add property detail modal or navigation here
        console.log('Viewing details for: ' + propertyTitle);
    });

    // ===== TESTIMONIALS CAROUSEL ENHANCEMENTS =====
    $('#testimonialsCarousel').carousel({
        interval: 6000,
        ride: 'carousel'
    });

    // ===== ENHANCED FORM VALIDATION =====
    function validatePhone(phone) {
        var phoneRegex = /^[6-9]\d{9}$/;
        return phoneRegex.test(phone);
    }

    $('.contact-form input[name="mobile"]').on('input', function() {
        var phone = $(this).val().replace(/\D/g, '');
        if (phone.length > 10) {
            phone = phone.substring(0, 10);
        }
        $(this).val(phone);

        if (phone.length === 10 && validatePhone(phone)) {
            $(this).removeClass('is-invalid').addClass('is-valid');
        } else if (phone.length > 0) {
            $(this).removeClass('is-valid').addClass('is-invalid');
        } else {
            $(this).removeClass('is-valid is-invalid');
        }
    });

    // ===== ENHANCED SEARCH FUNCTIONALITY =====
    $('#searchBar input').on('keypress', function(e) {
        if (e.which === 13) { // Enter key
            var searchTerm = $(this).val();
            if (searchTerm.trim()) {
                // Implement search functionality here
                console.log('Searching for: ' + searchTerm);
                showNotification('Search functionality will be implemented soon!', 'info');
            }
        }
    });

    // ===== CALL TO ACTION TRACKING =====
    $('.btn').click(function() {
        var buttonText = $(this).text().trim();
        var section = $(this).closest('section').attr('id') || 'unknown';
        console.log('CTA clicked:', buttonText, 'in section:', section);
    });

    // ===== SCROLL PROGRESS INDICATOR =====
    function updateScrollProgress() {
        var scrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var winHeight = $(window).height();
        var scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;

        if (!$('.scroll-progress').length) {
            $('body').append('<div class="scroll-progress"></div>');
        }

        $('.scroll-progress').css('width', scrollPercent + '%');
    }

    $(window).scroll(updateScrollProgress);

    // ===== SECTION VISIBILITY TRACKING =====
    function trackSectionVisibility() {
        $('section[id]').each(function() {
            var sectionTop = $(this).offset().top;
            var sectionHeight = $(this).outerHeight();
            var scrollTop = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scrollTop + windowHeight > sectionTop + 100 && scrollTop < sectionTop + sectionHeight - 100) {
                var sectionId = $(this).attr('id');
                // Update active navigation item
                $('.navbar-nav .nav-link, .sidebar-menu a').removeClass('active');
                $('a[href="#' + sectionId + '"]').addClass('active');
            }
        });
    }

    $(window).scroll(trackSectionVisibility);

});

// ===== ADDITIONAL ANIMATIONS =====
// Add CSS classes for animations
const style = document.createElement('style');
style.textContent = `
    .animate-in {
        animation: slideInUp 0.6s ease forwards;
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
    
    .notification-popup {
        position: fixed;
        top: 100px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
    }
    
    .back-to-top {
        position: fixed;
        bottom: 100px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: var(--secondary-color);
        color: white;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        z-index: 999;
        transition: all 0.3s ease;
    }
    
    .back-to-top:hover {
        background: var(--primary-color);
        color: white;
        transform: translateY(-3px);
    }
    
    body.sidebar-open {
        overflow: hidden;
    }
`;
document.head.appendChild(style);
