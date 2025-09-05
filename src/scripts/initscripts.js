document.addEventListener('DOMContentLoaded', function() {
    // Initialize all animations and interactions
    initScrollAnimations();
    initMobileMenu();
    initCalculator();
    initModal();
    initFormHandlers();
    initLazyLoading();
    initParallax();
    initEnhancedAnimations();
    
    // Header scroll effect
    window.addEventListener('scroll', handleHeaderScroll);
    
    // Initialize intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(animateOnScroll, observerOptions);
    
    // Observe all elements with animation class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });
});