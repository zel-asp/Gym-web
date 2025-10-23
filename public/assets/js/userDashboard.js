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

// Tab switching with URL update
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        // Hide all content
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));

        // Show selected content
        document.getElementById(btn.dataset.target).classList.remove('hidden');

        // Update active tab
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active-tab'));
        btn.classList.add('active-tab');

        // Update URL with tab parameter
        const url = new URL(window.location);
        url.searchParams.set('tab', btn.dataset.target);
        window.history.pushState({}, '', url);

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

// Determine which tab to open on page load
const defaultTab = getQueryParam('tab') || 'dashboard';
const tabButton = document.querySelector(`[data-target="${defaultTab}"]`);
if (tabButton) {
    // Hide all content
    document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));

    // Show selected content
    document.getElementById(defaultTab).classList.remove('hidden');

    // Update active tab
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active-tab'));
    tabButton.classList.add('active-tab');
}

// Handle browser back/forward navigation
window.addEventListener('popstate', () => {
    const currentTab = getQueryParam('tab') || 'dashboard';
    const currentTabButton = document.querySelector(`[data-target="${currentTab}"]`);

    if (currentTabButton) {
        // Hide all content
        document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));

        // Show selected content
        document.getElementById(currentTab).classList.remove('hidden');

        // Update active tab
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active-tab'));
        currentTabButton.classList.add('active-tab');
    }
});


//downlaod functionality
function downloadQRCode() {
    // Get the QR code image element
    const qrImage = document.getElementById('qr-code-image');
    const imageUrl = qrImage.src;

    // Create a temporary anchor element
    const downloadLink = document.createElement('a');
    downloadLink.href = imageUrl;

    // Set the download filename
    const fileName = 'GCash_QR_Code_Padogskei_Gym.jpg';
    downloadLink.download = fileName;

    // Append to body, click, and remove
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);

    // Optional: Show download confirmation
    const originalText = event.target.innerHTML;
    event.target.innerHTML = '<i class="fas fa-check"></i> Downloaded!';
    event.target.classList.remove('bg-blue-600', 'hover:bg-blue-700');
    event.target.classList.add('bg-green-600');

    // Reset button after 2 seconds
    setTimeout(() => {
        event.target.innerHTML = originalText;
        event.target.classList.remove('bg-green-600');
        event.target.classList.add('bg-blue-600', 'hover:bg-blue-700');
    }, 2000);
}