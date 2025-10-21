
// Sidebar toggle for mobile
const mobileMenuButton = document.getElementById('mobileMenuButton');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const closeSidebarBtn = document.getElementById('closeSidebar');

// Toggle sidebar on mobile
if (mobileMenuButton) {
    const mobileIcon = mobileMenuButton.querySelector('i');
    mobileMenuButton.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        overlay.classList.toggle('open');
        mobileIcon.classList.toggle('fa-bars');
        mobileIcon.classList.toggle('fa-xmark');
    });
}

// Close sidebar when overlay or X button clicked
if (overlay) {
    overlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('open');
    });
}
if (closeSidebarBtn) {
    closeSidebarBtn.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('open');
    });
}

// Navigation and tab persistence
const navLinks = document.querySelectorAll('.nav-link');
const pages = document.querySelectorAll('.page-content');

function showPage(targetPage) {
    // Hide all pages
    pages.forEach(page => page.classList.remove('active'));
    // Show the selected one
    const activePage = document.getElementById(targetPage);
    if (activePage) activePage.classList.add('active');

    // Update active sidebar link
    navLinks.forEach(l => l.classList.remove('active'));
    document.querySelector(`.nav-link[data-page="${targetPage}"]`)?.classList.add('active');
}

// Handle sidebar link clicks
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetPage = link.dataset.page;
        showPage(targetPage);

        //Update the URL (no reload)
        const url = new URL(window.location);
        url.searchParams.set('tab', targetPage);
        window.history.replaceState({}, '', url);

        // Close mobile sidebar
        sidebar.classList.remove('open');
        overlay.classList.remove('open');
    });
});

// On page load, open correct section based on ?tab=
const params = new URLSearchParams(window.location.search);
const currentTab = params.get('tab') || 'dashboard';
showPage(currentTab);
