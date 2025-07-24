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

    // ===== NAVBAR SHOW ON HOVER WHEN HIDDEN - Pure jQuery =====
    navbar.on('mouseenter', function() {
        // Show navbar on hover when hidden
        if ($(this).hasClass('nav-hidden')) {
            $(this).addClass('nav-hover-show');
        }
    }).on('mouseleave', function() {
        // Remove hover show class
        $(this).removeClass('nav-hover-show');
    });

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

    // ===== SMOOTH SCROLLING - Pure jQuery =====
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('href')); // Pure jQuery version
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
        // Handle both regular and index properties sections
        var propertiesSection = $('.properties-section, .index-properties-section');
        if (propertiesSection.length && !propertiesSection.hasClass('title-visible')) {
            var sectionTop = propertiesSection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.8);

            if (sectionTop < triggerPoint) {
                propertiesSection.addClass('title-visible');
            }
        }

        $('.property-showcase, .index-property-showcase').each(function() {
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

                    // Trigger individual element animations with staggered delays for both regular and index classes
                    setTimeout(function() {
                        $this.find('.property-number, .index-property-number').addClass('animate-element');
                    }, 100);

                    setTimeout(function() {
                        $this.find('.property-name, .index-property-name').addClass('animate-element');
                    }, 300);

                    setTimeout(function() {
                        $this.find('.property-type, .index-property-type').addClass('animate-element');
                    }, 500);

                    setTimeout(function() {
                        $this.find('.property-location, .index-property-location').addClass('animate-element');
                    }, 600);

                    setTimeout(function() {
                        $this.find('.property-description, .index-property-description').addClass('animate-element');
                    }, 700);

                    setTimeout(function() {
                        $this.find('.property-price, .index-property-price').addClass('animate-element');
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
            animateIndexAboutSection();

            // These functions are now consolidated in the main scroll handler
        }, 10);
    });

    // Check on page load
    setTimeout(function() {
        checkPropertiesScroll();
        checkGalleryScroll();
        checkAboutScroll();
        checkContactScroll();
        animateIndexAboutSection();

        // Initialize About section statistics immediately
        animateStatCards();
        animateIndexStatCards();

        // Force gallery animation
        forceGalleryAnimation();
    }, 500);

    // ===== ENHANCED GALLERY SCROLL ANIMATION =====
    function checkGalleryScroll() {
        // Animate section title first
        var gallerySection = $('.gallery-section');
        if (gallerySection.length && !gallerySection.hasClass('title-visible')) {
            var sectionTop = gallerySection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.8);

            if (sectionTop < triggerPoint) {
                gallerySection.addClass('title-visible');
                console.log('Gallery section title made visible');
            }
        }

        // Force animate gallery items immediately if they're in view
        $('.gallery-item:not(.animate-in)').each(function(index) {
            var $this = $(this);

            // Skip hidden items
            if ($this.hasClass('filter-hidden') || $this.hasClass('hidden')) {
                return;
            }

            var elementTop = $this.offset().top;
            var elementBottom = elementTop + $this.outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            var triggerPoint = viewportTop + ($(window).height() * 0.6); // More aggressive trigger

            // Check if element is in viewport with trigger point
            if (elementTop < triggerPoint && elementBottom > viewportTop) {
                // Different delays based on item size for interesting effect
                var delay = 0;
                if ($this.hasClass('gallery-large')) {
                    delay = 100; // Large items animate first
                } else if ($this.hasClass('gallery-medium')) {
                    delay = 200 + (index * 100); // Medium items follow
                } else {
                    delay = 300 + (index * 80); // Small items last
                }

                setTimeout(function() {
                    if ($this.length) {
                        $this.addClass('animate-in');
                        console.log('Gallery item animated:', index);
                    }
                }, delay);
            }
        });
    }

    // ===== FORCE GALLERY ANIMATION ON PAGE LOAD =====
    function forceGalleryAnimation() {
        if ($('.gallery-section').length > 0) {
            console.log('Forcing gallery animations...');

            // Make section title visible immediately
            $('.gallery-section').addClass('title-visible');

            // Animate all visible gallery items
            $('.gallery-item:not(.filter-hidden):not(.hidden)').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.addClass('animate-in');
                    console.log('Force animated gallery item:', index);
                }, index * 200);
            });
        }
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
        // Handle both regular stat cards and index-specific stat cards
        $('.stat-card, .index-stat-card').each(function() {
            var $this = $(this);
            // Cards are already visible, just add animate-in class for any additional effects
            $this.addClass('animate-in');

            // Ensure the numbers show their final values immediately
            var $number = $this.find('.stat-number, .index-stat-number');
            var targetValue = parseInt($this.data('count'));

            if (targetValue === 15) {
                $number.text('15');
            } else if (targetValue === 500) {
                $number.text('500');
            } else if (targetValue === 5000) {
                $number.text('5,000+');
            } else if (targetValue === 25) {
                $number.text('25');
            }
        });
    }

    // ===== INDEX ABOUT SECTION SPECIFIC ANIMATION =====
    function animateIndexAboutSection() {
        var indexAboutSection = $('.index-about-section');
        if (indexAboutSection.length && !indexAboutSection.hasClass('animate-in')) {
            var sectionTop = indexAboutSection.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.7);

            if (sectionTop < triggerPoint) {
                indexAboutSection.addClass('animate-in');

                // Trigger index statistics cards animation
                setTimeout(function() {
                    animateIndexStatCards();
                }, 300);
            }
        }
    }

    // ===== INDEX STATISTICS CARDS ANIMATION =====
    function animateIndexStatCards() {
        $('.index-stat-card').each(function() {
            var $this = $(this);
            $this.addClass('animate-in');

            // Ensure the numbers show their final values immediately
            var $number = $this.find('.index-stat-number');
            var targetValue = parseInt($this.data('count'));

            if (targetValue === 15) {
                $number.text('15');
            } else if (targetValue === 500) {
                $number.text('500');
            } else if (targetValue === 5000) {
                $number.text('5,000+');
            } else if (targetValue === 25) {
                $number.text('25');
            }
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

    // ===== SIDEBAR DROPDOWN FUNCTIONALITY =====
    $(document).ready(function() {
        $('.dropdown-toggle').click(function(e) {
            e.preventDefault();
            var $dropdown = $(this).closest('.menu-dropdown');

            // Close other dropdowns
            $('.menu-dropdown').not($dropdown).removeClass('active');

            // Toggle current dropdown
            $dropdown.toggleClass('active');
        });
    });

    // ===== SEE MORE PROPERTIES BUTTON =====
    $('#seeMoreProperties, #indexSeeMoreProperties').click(function() {
        var hiddenProperties = $('.property-hidden, .index-property-hidden');

        if (hiddenProperties.length > 0) {
            // Show hidden properties with animation
            hiddenProperties.removeClass('property-hidden index-property-hidden').addClass('property-visible index-property-visible');

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
            $(location).attr('href', '#contact'); // Pure jQuery version
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

        // Enhanced form validation with location field
        var isValid = true;
        var formData = {};

        $(this).find('input[required], textarea[required], select[required]').each(function() {
            var $field = $(this);
            var fieldName = $field.attr('name');
            var fieldValue = $field.val().trim();

            if (!fieldValue) {
                isValid = false;
                $field.addClass('is-invalid');
                $field.closest('.input-wrapper, .select-wrapper, .textarea-wrapper').addClass('error');
            } else {
                $field.removeClass('is-invalid');
                $field.closest('.input-wrapper, .select-wrapper, .textarea-wrapper').removeClass('error');
                formData[fieldName] = fieldValue;
            }
        });

        // Collect optional fields (like location and budget)
        $(this).find('input:not([required]), select:not([required])').each(function() {
            var $field = $(this);
            var fieldName = $field.attr('name');
            var fieldValue = $field.val().trim();

            if (fieldValue) {
                formData[fieldName] = fieldValue;
            }
        });

        if (isValid) {
            console.log('Form Data Submitted:', formData); // For debugging
            // Show success message
            showNotification('Thank you! Your message has been sent successfully.', 'success');

            // Reset form with proper cleanup
            setTimeout(function() {
                $('.contact-form')[0].reset();
                $('.input-wrapper, .select-wrapper, .textarea-wrapper').removeClass('filled focused error');
                $('.form-input, .form-select, .form-textarea').removeClass('is-valid is-invalid');
            }, 1500);
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

        $('img[data-src]').each(function() {
            imageObserver.observe(this);
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

    // ===== INITIALIZE TOOLTIPS AND POPOVERS - Pure jQuery =====
    $('[data-bs-toggle="tooltip"]').each(function() {
        new bootstrap.Tooltip(this);
    });

    $('[data-bs-toggle="popover"]').each(function() {
        new bootstrap.Popover(this);
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

    // ===== LOCATION FIELD VALIDATION =====
    $('.contact-form select[name="location"], .contact-form select[name="interest"]').on('change', function() {
        var $this = $(this);
        var value = $this.val();

        if (value && value !== '') {
            $this.removeClass('is-invalid').addClass('is-valid');
            $this.closest('.select-wrapper').addClass('filled');
        } else {
            $this.removeClass('is-valid').addClass('is-invalid');
            $this.closest('.select-wrapper').removeClass('filled');
        }
    });

    // ===== BUDGET FIELD VALIDATION =====
    $('.contact-form select[name="budget"], .contact-form select[name="budgetRange"]').on('change', function() {
        var $this = $(this);
        var value = $this.val();

        if (value && value !== '') {
            $this.removeClass('is-invalid').addClass('is-valid');
            $this.closest('.select-wrapper').addClass('filled');
        } else {
            $this.removeClass('is-valid').addClass('is-invalid');
            $this.closest('.select-wrapper').removeClass('filled');
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

// ===== ADDITIONAL ANIMATIONS - Pure jQuery =====
// Add CSS classes for animations using jQuery
var animationCSS = `
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

    // Inject CSS using jQuery
    $('<style>').text(animationCSS).appendTo('head');

    // Initialize How We Work page immediately
    initHowWeWorkPage();

    // Initialize About section statistics immediately on any page
    setTimeout(function() {
        animateStatCards();
        animateIndexStatCards();

        // Initialize index properties section
        initIndexPropertiesSection();

        // Initialize modern features section
        initModernFeaturesSection();

        // Force modern features animation on page load
        forceModernFeaturesAnimation();

        // Initialize gallery immediately
        initGallerySection();
    }, 100);

    // ===== GALLERY SECTION INITIALIZATION =====
    function initGallerySection() {
        if ($('.gallery-section').length > 0) {
            console.log('Gallery section detected, initializing...');

            // Force gallery to be visible immediately
            setTimeout(function() {
                forceGalleryAnimation();
                checkGalleryScroll();
            }, 200);
        }
    }

    // ===== FORCE MODERN FEATURES ANIMATION =====
    function forceModernFeaturesAnimation() {
        if ($('.modern-features-section').length > 0) {
            console.log('Forcing modern features animations...');

            // Force timeline items to animate
            $('.timeline-item').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.css({
                        'opacity': '1',
                        'transform': 'translateY(0)'
                    }).addClass('animate-in');
                }, index * 400);
            });

            // Force trust items to animate
            setTimeout(function() {
                $('.trust-item').each(function(index) {
                    var $this = $(this);
                    setTimeout(function() {
                        $this.css({
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        }).addClass('animate-in');
                    }, index * 200);
                });
            }, 1600);

            // Force features showcase cards to animate
            setTimeout(function() {
                $('.feature-showcase-card').each(function(index) {
                    var $this = $(this);
                    setTimeout(function() {
                        $this.css({
                            'opacity': '1',
                            'transform': 'translateY(0)'
                        }).addClass('animate-in');
                    }, index * 200);
                });
            }, 2400);
        }
    }

    // ===== MODERN FEATURES SECTION ANIMATIONS =====
    function initModernFeaturesSection() {
        if ($('.modern-features-section').length > 0) {
            console.log('Modern Features section detected, initializing animations...');

            // Trigger animations immediately for elements in view
            setTimeout(function() {
                animateModernFeatures();
                // Also trigger immediate animations for testing
                triggerModernFeaturesImmediately();
            }, 500);
        }
    }

    function animateModernFeatures() {
        // Check if modern features section exists
        if ($('.modern-features-section').length === 0) {
            return;
        }

        // Animate timeline items
        $('.timeline-item').each(function(index) {
            var $this = $(this);
            if ($this.length === 0) return;

            var elementTop = $this.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.7);

            if (elementTop < triggerPoint && !$this.hasClass('animate-in')) {
                setTimeout(function() {
                    if ($this.length) {
                        $this.addClass('animate-in');
                    }
                }, index * 200);
            }
        });

        // Animate trust indicators
        $('.trust-item').each(function(index) {
            var $this = $(this);
            if ($this.length === 0) return;

            var elementTop = $this.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.8);

            if (elementTop < triggerPoint && !$this.hasClass('animate-in')) {
                setTimeout(function() {
                    if ($this.length) {
                        $this.addClass('animate-in');
                    }
                }, index * 100);
            }
        });

        // Animate features showcase cards
        $('.feature-showcase-card').each(function(index) {
            var $this = $(this);
            if ($this.length === 0) return;

            var elementTop = $this.offset().top;
            var viewportTop = $(window).scrollTop();
            var triggerPoint = viewportTop + ($(window).height() * 0.75);

            if (elementTop < triggerPoint && !$this.hasClass('animate-in')) {
                setTimeout(function() {
                    if ($this.length) {
                        $this.addClass('animate-in');
                    }
                }, index * 200);
            }
        });
    }

    // ===== IMMEDIATE ANIMATION TRIGGER FOR MODERN FEATURES =====
    function triggerModernFeaturesImmediately() {
        if ($('.modern-features-section').length > 0) {
            // Trigger all animations immediately for testing
            $('.timeline-item').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.addClass('animate-in');
                }, index * 300);
            });

            $('.trust-item').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.addClass('animate-in');
                }, 1000 + (index * 200));
            });

            $('.comparison-row').each(function(index) {
                var $this = $(this);
                setTimeout(function() {
                    $this.addClass('animate-in');
                }, 2000 + (index * 150));
            });
        }
    }

    // ===== INDEX PROPERTIES SECTION INITIALIZATION =====
    function initIndexPropertiesSection() {
        if ($('.index-properties-section').length > 0) {
            console.log('Index Properties section detected, initializing animations...');

            // Trigger animations immediately for elements in view
            setTimeout(function() {
                checkPropertiesScroll();
            }, 200);
        }
    }

    // ===== HOW WE WORK PAGE ANIMATIONS =====
    function animateProcessSteps() {
        // Check if we're on the How We Work page
        if ($('.process-step').length === 0) return;

        $('.process-step').each(function(index) {
            var $step = $(this);

            if ($step.hasClass('animate-in')) return;

            var stepTop = $step.offset().top;
            var windowTop = $(window).scrollTop();
            var windowBottom = windowTop + $(window).height();

            // More generous trigger - animate if element is in viewport or above
            if (stepTop < windowBottom + 200) {
                setTimeout(function() {
                    $step.addClass('animate-in');
                }, index * 200);
            }
        });
    }

    // Initialize How We Work animations immediately if on that page
    function initHowWeWorkPage() {
        if ($('.process-step').length > 0) {
            console.log('How We Work page detected, initializing animations...');

            // Trigger animations immediately for elements in view
            setTimeout(function() {
                animateProcessSteps();
                animateHowWeWorkStats();
            }, 100);

            // Fallback: Force show all elements after 2 seconds if no animations triggered
            setTimeout(function() {
                if ($('.process-step.animate-in').length === 0) {
                    console.log('Fallback: Showing all process steps');
                    $('.process-step').addClass('animate-in');
                }
                if ($('.stat-card.animate-in').length === 0) {
                    console.log('Fallback: Showing all stat cards');
                    $('.stat-card').addClass('animate-in');
                }
            }, 2000);
        }
    }

    function animateHowWeWorkStats() {
        // Check if we have stat cards
        if ($('.stat-card').length === 0) return;

        $('.stat-card').each(function(index) {
            var $card = $(this);
            var $number = $card.find('.stat-number');

            if ($card.hasClass('counted')) return;

            var cardTop = $card.offset().top;
            var windowTop = $(window).scrollTop();
            var windowBottom = windowTop + $(window).height();

            // More generous trigger
            if (cardTop < windowBottom + 100) {
                $card.addClass('counted animate-in');

                var finalNumber = $number.text();
                var numericValue = parseInt(finalNumber.replace(/[^\d]/g, ''));

                if (numericValue > 0) {
                    setTimeout(function() {
                        $({ countNum: 0 }).animate({
                            countNum: numericValue
                        }, {
                            duration: 2000,
                            step: function() {
                                $number.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $number.text(finalNumber);
                            }
                        });
                    }, index * 150);
                }
            }
        });
    }

    // ===== GALLERY PAGE ANIMATIONS =====
    function animateGalleryItems() {
        $('.gallery-item:not(.hidden)').each(function(index) {
            var $item = $(this);

            if ($item.hasClass('animate-in')) return;

            var itemTop = $item.offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (itemTop < windowBottom - 100) {
                setTimeout(function() {
                    $item.addClass('animate-in');
                }, index * 150);
            }
        });
    }

    // ===== GALLERY FILTERING =====
    $('.filter-btn').on('click', function() {
        var $btn = $(this);
        var filter = $btn.data('filter');

        $('.filter-btn').removeClass('active');
        $btn.addClass('active');

        // Handle gallery items
        $('.gallery-item, .project-item').each(function() {
            var $item = $(this);
            var itemCategory = $item.data('category');

            if (filter === 'all' || (itemCategory && itemCategory.includes(filter))) {
                $item.removeClass('hidden');
            } else {
                $item.addClass('hidden');
            }
        });

        // Handle properties page filtering
        $('.property-showcase').each(function() {
            var $item = $(this);
            var itemCategory = $item.data('category');

            if (filter === 'all' || (itemCategory && itemCategory.includes(filter))) {
                $item.show().removeClass('hidden');
            } else {
                $item.hide().addClass('hidden');
            }
        });

        setTimeout(function() {
            $('.gallery-item, .project-item').removeClass('animate-in');
            animateGalleryItems();
        }, 100);
    });

    // ===== BLOG ANIMATIONS =====
    function animateBlogCards() {
        $('.blog-card').each(function(index) {
            var $card = $(this);

            if ($card.hasClass('animate-in')) return;

            var cardTop = $card.offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (cardTop < windowBottom - 100) {
                setTimeout(function() {
                    $card.addClass('animate-in');
                }, index * 100);
            }
        });
    }

    // ===== NEWSLETTER FORM =====
    $('.newsletter-form').on('submit', function(e) {
        e.preventDefault();

        var $form = $(this);
        var $email = $form.find('input[type="email"]');
        var $button = $form.find('button');
        var email = $email.val().trim();

        if (!email || !isValidEmail(email)) {
            showNotification('Please enter a valid email address.', 'error');
            return;
        }

        var originalText = $button.text();
        $button.text('Subscribing...').prop('disabled', true);

        setTimeout(function() {
            $button.text('Subscribed!').removeClass('btn-primary').addClass('btn-success');
            $email.val('');
            showNotification('Thank you for subscribing!', 'success');

            setTimeout(function() {
                $button.text(originalText).prop('disabled', false)
                       .removeClass('btn-success').addClass('btn-primary');
            }, 3000);
        }, 1500);
    });

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function showNotification(message, type) {
        $('.notification').remove();

        var iconClass = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
        var notification = $('<div class="notification notification-' + type + '">' +
            '<i class="fas ' + iconClass + '"></i>' +
            '<span>' + message + '</span>' +
            '<button class="notification-close">&times;</button>' +
            '</div>');

        $('body').append(notification);

        setTimeout(function() {
            notification.addClass('show');
        }, 100);

        setTimeout(function() {
            notification.removeClass('show');
            setTimeout(function() {
                notification.remove();
            }, 300);
        }, 5000);

        notification.find('.notification-close').on('click', function() {
            notification.removeClass('show');
            setTimeout(function() {
                notification.remove();
            }, 300);
        });
    }

    // ===== CONSOLIDATED SCROLL HANDLER =====
    $(window).on('scroll', function() {
        // Original scroll functions
        checkPropertiesScroll(); // This now handles both regular and index properties
        checkGalleryScroll();
        checkAboutScroll();
        checkContactScroll();
        animateIndexAboutSection();

        // New consolidated functions
        animateProcessSteps();
        animateHowWeWorkStats();
        animateGalleryItems();
        animateBlogCards();
        animateModernFeatures();
    });

    // ===== ADDITIONAL MODERN FEATURES INITIALIZATION =====
    // Double-check modern features animation on window load
    $(window).on('load', function() {
        setTimeout(function() {
            if ($('.modern-features-section').length > 0) {
                console.log('Window loaded - triggering modern features animations...');
                forceModernFeaturesAnimation();
            }

            // Also force gallery animation on window load
            if ($('.gallery-section').length > 0) {
                console.log('Window loaded - triggering gallery animations...');
                forceGalleryAnimation();
            }
        }, 1000);
    });

    // Also trigger on scroll to top
    if ($(window).scrollTop() === 0) {
        setTimeout(function() {
            if ($('.modern-features-section').length > 0) {
                forceModernFeaturesAnimation();
            }
        }, 2000);
    }

    // ===== DEBUGGING: Add manual trigger buttons =====
    if ($('.modern-features-section').length > 0 || $('.gallery-section').length > 0) {
        

        $('#testAnimations').on('click', function() {
            console.log('Manual features animation trigger clicked');

            // Reset all animations
            $('.timeline-item, .trust-item, .feature-showcase-card').removeClass('animate-in').css({
                'opacity': '0',
                'transform': 'translateY(50px)'
            });

            // Trigger animations again
            setTimeout(function() {
                forceModernFeaturesAnimation();
            }, 100);
        });

        $('#testGallery').on('click', function() {
            console.log('Manual gallery animation trigger clicked');

            // Reset gallery animations
            $('.gallery-item').removeClass('animate-in').css({
                'opacity': '0',
                'transform': 'translateY(80px) scale(0.9)'
            });

            $('.gallery-section').removeClass('title-visible');

            // Trigger gallery animations again
            setTimeout(function() {
                forceGalleryAnimation();
            }, 100);
        });
    }
