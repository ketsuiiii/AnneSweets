
  document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const primaryNav = document.querySelector('#primary-navigation');
    
    mobileNavToggle.addEventListener('click', () => {
        const isExpanded = mobileNavToggle.getAttribute('aria-expanded') === 'true';
        mobileNavToggle.setAttribute('aria-expanded', !isExpanded);
        mobileNavToggle.classList.toggle('active');
        primaryNav.classList.toggle('active');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('header') && primaryNav.classList.contains('active')) {
            primaryNav.classList.remove('active');
            mobileNavToggle.classList.remove('active');
            mobileNavToggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Handle window resize
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            primaryNav.classList.remove('active');
            mobileNavToggle.classList.remove('active');
            mobileNavToggle.setAttribute('aria-expanded', 'false');
        }
    });
});
