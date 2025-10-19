// Mobile menu toggle
const menuBtn = document.getElementById('mobile-menu-btn');
const sidebar = document.querySelector('.sidebar');
const overlay = document.getElementById('overlay');

menuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    overlay.classList.toggle('open');
});

overlay.addEventListener('click', () => {
    sidebar.classList.remove('open');
    overlay.classList.remove('open');
});

// Tab switching
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        // Hide all content
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));

        // Show selected content
        document.getElementById(btn.dataset.target).classList.remove('hidden');

        // Update active tab
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active-tab'));
        btn.classList.add('active-tab');

        // Close mobile menu on small screens
        if (window.innerWidth < 1024) {
            sidebar.classList.remove('open');
            overlay.classList.remove('open');
        }
    });
});

// Star rating
const stars = document.querySelectorAll('#stars span');
const ratingInput = document.getElementById('feedback_rating');
const feedbackForm = document.getElementById('feedbackForm');

// Star click logic
stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        stars.forEach((s, i) => {
            s.textContent = i <= index ? '★' : '☆';
            s.classList.toggle('text-yellow-400', i <= index);
            s.classList.toggle('text-gray-400', i > index);
        });
        // Set hidden input value
        ratingInput.value = index + 1;
    });
});


// Auto-close mobile menu on resize
window.addEventListener('resize', () => {
    if (window.innerWidth >= 1024) {
        sidebar.classList.remove('open');
        overlay.classList.remove('open');
    }
});

// Function to get URL query params
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Determine which tab to open
const defaultTab = getQueryParam('tab') || 'dashboard';
const tabButton = document.querySelector(`[data-target="${defaultTab}"]`);
if (tabButton) tabButton.click();
