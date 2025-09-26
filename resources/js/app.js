import './bootstrap';

// Scroll Animation System
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for scroll animations
    const animationObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // Observe all elements with scroll-animate class
    document.querySelectorAll('.scroll-animate').forEach(element => {
        animationObserver.observe(element);
    });

    // Scroll progress indicator
    function updateScrollProgress() {
        const scrollProgress = document.querySelector('.scroll-progress');
        if (scrollProgress) {
            const scrollTop = window.pageYOffset;
            const docHeight = document.body.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            scrollProgress.style.setProperty('--scroll-progress', scrollPercent + '%');
        }
    }

    window.addEventListener('scroll', updateScrollProgress);
    updateScrollProgress();

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
