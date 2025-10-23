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
const params = new URLSearchParams(window.location.search);
const currentTab = params.get('tab') || 'dashboard';

function showPage(targetPage) {
    // Hide all pages
    pages.forEach(page => page.classList.remove('active'));

    // Show the selected page
    const activePage = document.getElementById(targetPage);
    if (activePage) activePage.classList.add('active');

    // Update sidebar link highlight
    navLinks.forEach(link => link.classList.remove('active', 'bg-brand', 'text-white'));
    const activeLink = document.querySelector(`.nav-link[data-page="${targetPage}"]`);
    if (activeLink) activeLink.classList.add('active', 'bg-brand', 'text-white');
}

// On page load, show correct page
showPage(currentTab);

// Handle sidebar link clicks
navLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const targetPage = link.dataset.page;
        showPage(targetPage);

        // Update URL without reload
        const url = new URL(window.location);
        url.searchParams.set('tab', targetPage);
        window.history.replaceState({}, '', url);

        // Close mobile sidebar
        sidebar.classList.remove('open');
        overlay.classList.remove('open');
    });
});


//for toggle reply form
function toggleReplyForm(index) {
    const form = document.getElementById(`reply-form-${index}`);
    form.classList.toggle('hidden');

    // Optional: Scroll to the form when opened
    if (!form.classList.contains('hidden')) {
        form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}