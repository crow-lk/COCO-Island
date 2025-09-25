// Simple script to optimize video loading
document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on a mobile device or slow connection
    const isMobile = window.matchMedia('(max-width: 767px)').matches;
    const connectionSpeed = navigator.connection ? navigator.connection.effectiveType : null;
    const isSlowConnection = connectionSpeed === '2g' || connectionSpeed === 'slow-2g';
    
    const heroVideo = document.querySelector('.slide-bg-video');
    
    // If we're on mobile or have a slow connection, replace video with poster
    if (heroVideo && (isMobile || isSlowConnection)) {
        const posterUrl = heroVideo.getAttribute('poster');
        const videoParent = heroVideo.parentElement;
        
        // Create placeholder image using the poster
        const img = document.createElement('img');
        img.src = posterUrl;
        img.alt = "Sri Lanka Tour Header";
        img.className = "slide-bg-image";
        img.style.cssText = "position: absolute; width: 100%; height: 100%; object-fit: cover;";
        
        // Replace video with image
        videoParent.insertBefore(img, heroVideo);
        heroVideo.style.display = 'none';
    }
});
