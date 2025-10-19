//toggle 
function displayToggle(toggleE, hideE, displayE) {
    toggleE.classList.toggle('hidden');
    hideE.classList.add('hidden');
    displayE.classList.remove('hidden');
}

//mobile nav
function initNavbarToggle() {
    const hamburger = document.getElementById('js-hamburgerIcon');
    const closeIcon = document.getElementById('js-closeIcon');
    const navLinks = document.getElementById('js-navLinks');

    if (!hamburger || !closeIcon || !navLinks) return;

    hamburger.addEventListener('click', () => {
        displayToggle(navLinks, hamburger, closeIcon);
    });


    closeIcon.addEventListener('click', () => {
        displayToggle(navLinks, closeIcon, hamburger);
    });

    document.addEventListener('click', (e) => {
        if (!navLinks.contains(e.target) && !hamburger.contains(e.target) && !closeIcon.contains(e.target)) {
            navLinks.classList.add('hidden');
            closeIcon.classList.add('hidden');
            hamburger.classList.remove('hidden');
        }
    });
}



document.addEventListener('DOMContentLoaded', () => {
    initNavbarToggle();
});
