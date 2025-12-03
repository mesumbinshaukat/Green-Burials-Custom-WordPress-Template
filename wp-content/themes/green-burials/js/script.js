/**
 * Green Burials Theme JavaScript
 * Optimized for performance - vanilla JS only
 */

(function() {
    'use strict';
    
    // Mobile menu toggle
    const initMobileMenu = () => {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (menuToggle && navMenu) {
            menuToggle.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
        }
    };
    
    // Smooth scroll for anchor links
    const initSmoothScroll = () => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href !== '#0') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    };
    
    // Lazy load images on scroll (fallback for older browsers)
    const initLazyLoad = () => {
        if ('loading' in HTMLImageElement.prototype) {
            return; // Browser supports native lazy loading
        }
        
        const images = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    };
    
    // Newsletter form submission
    const initNewsletterForm = () => {
        const form = document.querySelector('.newsletter-form form');
        if (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const email = form.querySelector('input[type="email"]').value;
                
                if (email) {
                    // Add your newsletter subscription logic here
                    alert('Thank you for subscribing!');
                    form.reset();
                }
            });
        }
    };
    
    // Initialize all functions when DOM is ready
    const init = () => {
        initMobileMenu();
        initSmoothScroll();
        initLazyLoad();
        initNewsletterForm();
    };
    
    // Run initialization
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
    
})();
