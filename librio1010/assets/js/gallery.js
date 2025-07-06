// Gallery Filtering
document.addEventListener('DOMContentLoaded', function() {
    console.log('Gallery script loaded');
    
    const galleryTabs = document.querySelectorAll('.gallery-tab');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const galleryCounter = document.getElementById('gallery-counter');
    
    console.log('Found gallery tabs:', galleryTabs.length);
    console.log('Found gallery items:', galleryItems.length);
    
    // Initialize counters
    function updateCounters() {
        const counts = {
            all: galleryItems.length,
            apartamento: document.querySelectorAll('[data-category="apartamento"]').length,
            condominio: document.querySelectorAll('[data-category="condominio"]').length,
            vista: document.querySelectorAll('[data-category="vista"]').length
        };
        
        Object.keys(counts).forEach(category => {
            const countElement = document.getElementById(`count-${category}`);
            if (countElement) {
                countElement.textContent = `(${counts[category]})`;
            }
        });
    }
    
    // Update counter display
    function updateGalleryStatus(category, visibleCount) {
        const categoryNames = {
            all: 'todas as fotos',
            apartamento: 'fotos da área privativa',
            condominio: 'fotos das áreas comuns',
            vista: 'fotos de vistas'
        };
        
        if (galleryCounter) {
            galleryCounter.textContent = `Mostrando ${visibleCount} ${categoryNames[category] || 'fotos'}`;
        }
    }
    
    updateCounters();
    
    galleryTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            const filterLoading = document.getElementById('filter-loading');
            console.log('Filtering by category:', category);
            
            // Show loading indicator
            if (galleryCounter) galleryCounter.style.display = 'none';
            if (filterLoading) filterLoading.style.display = 'inline-block';
            
            // Remove active class from all tabs
            galleryTabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            this.classList.add('active');
            
            // Filter gallery items with smooth animation
            galleryItems.forEach((item, index) => {
                const itemCategory = item.getAttribute('data-category');
                if (category === 'all' || itemCategory === category) {
                    item.classList.remove('hidden');
                    item.style.display = 'block';
                    // Staggered animation for better visual effect
                    setTimeout(() => {
                        item.style.animation = 'fadeIn 0.5s ease-in';
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, index * 50);
                } else {
                    item.classList.add('hidden');
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
            
            // Count and update visible items
            setTimeout(() => {
                let visibleCount = 0;
                galleryItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    if (category === 'all' || itemCategory === category) {
                        visibleCount++;
                    }
                });
                
                // Hide loading and show counter
                const filterLoading = document.getElementById('filter-loading');
                if (filterLoading) filterLoading.style.display = 'none';
                if (galleryCounter) galleryCounter.style.display = 'inline-block';
                
                updateGalleryStatus(category, visibleCount);
                console.log('Visible items after filter:', visibleCount);
            }, 500);
        });
    });
    
    // Lazy loading for gallery images
    const galleryImages = document.querySelectorAll('.gallery-item img');
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });
    
    galleryImages.forEach(img => {
        imageObserver.observe(img);
    });
    
    // Gallery search functionality (optional)
    const searchInput = document.querySelector('.gallery-search');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            galleryItems.forEach(item => {
                const title = item.querySelector('.gallery-title').textContent.toLowerCase();
                const alt = item.querySelector('img').alt.toLowerCase();
                
                if (title.includes(searchTerm) || alt.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    }
});

// Gallery animations
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

// Gallery hover effects
document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});

// Gallery keyboard navigation
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Close lightbox if open
        if (document.querySelector('.lb-outerContainer')) {
            document.querySelector('.lb-close').click();
        }
    }
});

// Gallery touch/swipe support for mobile
let touchStartX = 0;
let touchEndX = 0;

document.addEventListener('touchstart', function(e) {
    touchStartX = e.changedTouches[0].screenX;
});

document.addEventListener('touchend', function(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;
    
    if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
            // Swipe left - next image
            const nextButton = document.querySelector('.lb-next');
            if (nextButton) nextButton.click();
        } else {
            // Swipe right - previous image
            const prevButton = document.querySelector('.lb-prev');
            if (prevButton) prevButton.click();
        }
    }
}

// Gallery performance optimization
function optimizeGalleryImages() {
    const images = document.querySelectorAll('.gallery-item img');
    
    images.forEach(img => {
        // Add loading="lazy" if not already present
        if (!img.hasAttribute('loading')) {
            img.setAttribute('loading', 'lazy');
        }
        
        // Add decoding="async" for better performance
        if (!img.hasAttribute('decoding')) {
            img.setAttribute('decoding', 'async');
        }
    });
}

// Initialize gallery optimizations
document.addEventListener('DOMContentLoaded', optimizeGalleryImages);

// Gallery analytics tracking
function trackGalleryInteraction(action, imageName) {
    // You can add Google Analytics or other tracking here
    console.log(`Gallery interaction: ${action} - ${imageName}`);
}

// Track gallery clicks
document.addEventListener('click', function(e) {
    if (e.target.closest('.gallery-item')) {
        const imageName = e.target.closest('.gallery-item').querySelector('.gallery-title').textContent;
        trackGalleryInteraction('click', imageName);
    }
});

// Ensure filters work on page load
window.addEventListener('load', function() {
    console.log('Page fully loaded, ensuring gallery functionality');
    
    // Trigger initial filter to show all items
    const allTab = document.querySelector('.gallery-tab[data-category="all"]');
    if (allTab) {
        allTab.click();
    }
}); 