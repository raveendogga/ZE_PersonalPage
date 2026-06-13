// Main JavaScript File for Zunik Energies
document.addEventListener('DOMContentLoaded', function() {
    // Top Navigation scroll effect
    const navbar = document.querySelector('.navbar');
    
    if(navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
                navbar.classList.add('shadow-sm');
            }
        });
    }

    // Initialize Bootstrap tooltips and popovers if any
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
