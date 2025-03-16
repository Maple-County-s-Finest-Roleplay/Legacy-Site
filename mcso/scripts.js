// scripts.js

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    const navbarLinks = document.querySelector('.navbar-links');

    mobileMenu.addEventListener('click', () => {
        navbarLinks.classList.toggle('active');
    });
});
